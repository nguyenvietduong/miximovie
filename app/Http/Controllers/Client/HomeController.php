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
        $top10TvSeriesTodayItems = $this->top10TvSeriesTodayItems();
        $latestAnimeCollectionItems = $this->latestAnimeCollectionItems();
        $koreanCinemaScreeningItems = $this->koreanCinemaScreeningItems();
        dd($koreanCinemaScreeningItems);

        return view(self::PATH_VIEW . __FUNCTION__, compact('bannerSectionStartItems', 'top10TvSeriesTodayItems', 'latestAnimeCollectionItems', 'koreanCinemaScreeningItems'));
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
                    $posters   = $item['images']['posters'] ?? [];
                    $titles    = $item['images']['titles'] ?? [];

                    // chọn random an toàn
                    $backdropPath = !empty($backdrops)
                        ? $backdrops[random_int(0, count($backdrops) - 1)]['path']
                        : null;

                    $posterPath = !empty($posters)
                        ? $posters[random_int(0, count($posters) - 1)]['path']
                        : null;

                    $titlePath = $titles[0]['path'] ?? null;

                    $item['backdrop_url'] = $this->formatImageUrl($backdropPath, config("app.cdn.backdrop_path"));
                    $item['poster_url']   = $this->formatImageUrl($posterPath, config("app.cdn.poster_path"));
                    $item['title_url']    = $this->formatImageUrl($titlePath, config("app.cdn.title_path"));
                }

                return $movies['result'];
            }
        }

        return [];
    }

    private function top10TvSeriesTodayItems()
    {
        $response = Http::get(config('api.movie_api.base_url') . config('api.movie_api.endpoints.top10TvSeriesTodayItems'));

        if ($response->successful()) {
            $movies = $response->json();

            if (
                !empty($movies['status'])
                && $movies['status'] === true
                && ($movies['msg'] ?? '') === 'Thành công.'
                && !empty($movies['result'])
            ) {
                foreach ($movies['result']['collections'][0]['movies'] as &$item) {
                    $backdrops = $item['images']['backdrops'] ?? [];
                    $posters   = $item['images']['posters'] ?? [];

                    $backdropPath = $backdrops[random_int(0, count($backdrops) - 1)]['path'] ?? null;
                    $posterPath   = $posters[random_int(0, count($posters) - 1)]['path'] ?? null;

                    $item['backdrop_url'] = $this->formatImageUrl($backdropPath, config("app.cdn.backdrop_path"));
                    $item['poster_url']   = $this->formatImageUrl($posterPath, config("app.cdn.poster_path"));
                }

                return $movies['result']['collections'][0]['movies'];
            }
        }

        return [];
    }

    private function latestAnimeCollectionItems()
    {
        $response = Http::get(config('api.movie_api.base_url') . config('api.movie_api.endpoints.latestAnimeCollectionItems'));

        if ($response->successful()) {
            $movies = $response->json();

            if (
                !empty($movies['status'])
                && $movies['status'] === true
                && ($movies['msg'] ?? '') === 'Thành công.'
                && !empty($movies['result'])
            ) {
                foreach ($movies['result']['collections'][2]['movies'] as &$item) {
                    $backdrops = $item['images']['backdrops'] ?? [];
                    $posters   = $item['images']['posters'] ?? [];

                    $backdropPath = $backdrops[random_int(0, count($backdrops) - 1)]['path'] ?? null;
                    $posterPath   = $posters[random_int(0, count($posters) - 1)]['path'] ?? null;

                    $item['backdrop_url'] = $this->formatImageUrl($backdropPath, config("app.cdn.backdrop_path"));
                    $item['poster_url']   = $this->formatImageUrl($posterPath, config("app.cdn.poster_path"));
                }

                return $movies['result']['collections'][2]['movies'];
            }
        }

        return [];
    }

    private function koreanCinemaScreeningItems()
    {
        $response = Http::get(config('api.movie_api.base_url') . config('api.movie_api.endpoints.koreanCinemaScreeningItems'));

        if ($response->successful()) {
            $movies = $response->json();

            if (
                !empty($movies['status'])
                && $movies['status'] === true
                && ($movies['msg'] ?? '') === 'Thành công.'
                && !empty($movies['result'])
            ) {
                dd($movies['result']['collections'][3]);
                foreach ($movies['result']['collections'][3]['movies'] as &$item) {
                    $backdrops = $item['images']['backdrops'] ?? [];
                    $posters   = $item['images']['posters'] ?? [];

                    $backdropPath = $backdrops[random_int(0, count($backdrops) - 1)]['path'] ?? null;
                    $posterPath   = $posters[random_int(0, count($posters) - 1)]['path'] ?? null;

                    $item['backdrop_url'] = $this->formatImageUrl($backdropPath, config("app.cdn.backdrop_path"));
                    $item['poster_url']   = $this->formatImageUrl($posterPath, config("app.cdn.poster_path"));
                }

                return $movies['result']['collections'][2]['movies'];
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
