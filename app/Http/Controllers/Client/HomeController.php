<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http; // thiếu cái này

class HomeController extends Controller
{
    const PATH_VIEW = 'client.home.';

    public function index()
    {
        $bannerSectionStartItems = $this->bannerSectionStartItems();

        return view(self::PATH_VIEW . __FUNCTION__, compact('bannerSectionStartItems'));
    }

    private function bannerSectionStartItems()
    {
        $response = Http::get(config('api.movie_api.base_url') . config('api.movie_api.endpoints.hot'));

        if ($response->successful()) {
            $movies = $response->json();

            if (
                !empty($movies['status'])
                && $movies['status'] === true
                && ($movies['msg'] ?? '') === 'Thành công.'
                && !empty($movies['result'])
            ) {
                foreach ($movies['result'] as &$item) {
                    $backdrops = $item['images']['backdrops'] ?? [];
                    $posters = $item['images']['posters'] ?? [];
                    $titles = $item['images']['titles'] ?? [];

                    $backdropPath = $backdrops[2]['path'] ?? ($backdrops[0]['path'] ?? null);
                    $posterPath = $posters[2]['path'] ?? ($posters[0]['path'] ?? null);
                    $titlePath = $titles[0]['path'] ?? ($titles[0]['path'] ?? null);

                    $item['backdrop_url'] = $this->formatImageUrl($backdropPath, config("app.cdn.backdrop_path"));
                    $item['poster_url'] = $this->formatImageUrl($posterPath, config("app.cdn.poster_path"));
                    $item['title_url'] = $this->formatImageUrl($titlePath, config("app.cdn.title_path"));
                }

                return $movies['result'];
            }
        }

        return [];
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
