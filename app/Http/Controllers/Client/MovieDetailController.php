<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class MovieDetailController extends Controller
{
    const PATH_VIEW = 'client.movieDetail.';

    public function index(Request $request)
    {
        $movie = $this->getMovieDetailFromApi($request->_id);
        
        return view(self::PATH_VIEW . 'index', compact('movie'));
    }

    private function getMovieDetailFromApi(string $_id): ?array
    {
        $apiUrl = config('api.movie_api.base_url')
            . config('api.movie_api.endpoints.movie_detail')
            . $_id;

        $response = Http::get($apiUrl);

        if ($response->failed()) {
            Log::error("API lỗi: $apiUrl");
            return null;
        }

        $data = $response->json();

        if (!empty($data['status']) && $data['status'] === true && $data['msg'] === 'Thành công.') {

            $backdrops = $data['result']['images']['backdrops'] ?? [];
            $posters   = $data['result']['images']['posters'] ?? [];

            $backdropPath = $backdrops[random_int(0, count($backdrops) - 1)]['path'] ?? null;
            $posterPath   = $posters[random_int(0, count($posters) - 1)]['path'] ?? null;

            $data['result']['backdrop_url'] = $this->formatImageUrl($backdropPath, config("app.cdn.backdrop_path"));
            $data['result']['poster_url']   = $this->formatImageUrl($posterPath, config("app.cdn.poster_path"));

            $data['result']['casts'] = $this->getMovieDetailCast($_id);
            $data['result']['episodes'] = $this->getMoviePlayLinks($data['result']['slug']);

            return $data['result'];
        }

        return null;
    }

    private function getMovieDetailCast(string $_id): array
    {
        $response = Http::get(
            config('api.movie_api.base_url')
                . config('api.movie_api.endpoints.movie_cast')
                . $_id
        );

        if ($response->successful()) {
            $movies = $response->json();

            if (
                !empty($movies['status'])
                && $movies['status'] === true
                && ($movies['msg'] ?? '') === 'Thành công.'
                && !empty($movies['result'])
            ) {
                foreach ($movies['result'] as &$item) {
                    if (!empty($item['cast']['profile_path'])) {
                        $item['cast']['profile_path'] =
                            config("app.cdn.cast_path") . $item['cast']['profile_path'];
                    }
                }

                return $movies['result'];
            }
        }

        return [];
    }

    private function getMoviePlayLinks(string $_slug): ?array
    {
        $apiUrl = config('api.movie_api.base_url_play_link')
            . $_slug;

        $response = Http::get($apiUrl);

        if ($response->failed()) {
            Log::error("API lỗi: $apiUrl");
            return null;
        }

        $data = $response->json();

        if (!empty($data['status']) && $data['status'] === true && $data['msg'] === 'done') {

            return $data['episodes'];
        }

        return null;
    }

    private function formatImageUrl($path, $baseUrl = null)
    {
        if (empty($path)) {
            return null;
        }

        $parts = explode("/", $path, 3);
        $cleanPath = $parts[2] ?? $path;

        return $baseUrl ? rtrim($baseUrl, '/') . '/' . $cleanPath : $cleanPath;
    }
}
