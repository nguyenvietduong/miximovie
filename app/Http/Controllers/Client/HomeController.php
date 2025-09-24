<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    const PATH_VIEW = 'client.home.';

    public function index()
    {
        $bannerSectionStartItems = $this->bannerSectionStartItems();
        $top10TvSeriesTodayItems = $this->top10TvSeriesTodayItems();
        $top10MoviesTodayItems = $this->top10MoviesTodayItems();
        $latestAnimeCollectionItems = $this->latestAnimeCollectionItems();
        $koreanCinemaScreeningItems = $this->koreanCinemaScreeningItems();
        $koreanMoviesHotItems = $this->koreanMoviesHotItems();
        $chinaMoviesHotItems = $this->chinaMoviesHotItems();
        $USUKMoviesHotItems = $this->USUKMoviesHotItems();

        return view(self::PATH_VIEW . __FUNCTION__, compact('bannerSectionStartItems', 'koreanMoviesHotItems', 'chinaMoviesHotItems', 'USUKMoviesHotItems', 'top10TvSeriesTodayItems', 'top10MoviesTodayItems', 'latestAnimeCollectionItems', 'koreanCinemaScreeningItems'));
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

    private function koreanMoviesHotItems()
    {
        $response = Http::get(config('api.movie_api.base_url') . config('api.movie_api.endpoints.collection_list_page_1'));

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

    private function chinaMoviesHotItems()
    {
        $response = Http::get(config('api.movie_api.base_url') . config('api.movie_api.endpoints.collection_list_page_1'));

        if ($response->successful()) {
            $movies = $response->json();

            if (
                !empty($movies['status'])
                && $movies['status'] === true
                && ($movies['msg'] ?? '') === 'Thành công.'
                && !empty($movies['result'])
            ) {
                foreach ($movies['result']['collections'][1]['movies'] as &$item) {
                    $backdrops = $item['images']['backdrops'] ?? [];
                    $posters   = $item['images']['posters'] ?? [];

                    $backdropPath = $backdrops[random_int(0, count($backdrops) - 1)]['path'] ?? null;
                    $posterPath   = $posters[random_int(0, count($posters) - 1)]['path'] ?? null;

                    $item['backdrop_url'] = $this->formatImageUrl($backdropPath, config("app.cdn.backdrop_path"));
                    $item['poster_url']   = $this->formatImageUrl($posterPath, config("app.cdn.poster_path"));
                }

                return $movies['result']['collections'][1]['movies'];
            }
        }

        return [];
    }

    private function USUKMoviesHotItems()
    {
        $response = Http::get(config('api.movie_api.base_url') . config('api.movie_api.endpoints.collection_list_page_1'));

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

    private function top10TvSeriesTodayItems()
    {
        $response = Http::get(config('api.movie_api.base_url') . config('api.movie_api.endpoints.collection_list_page_2'));

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

    private function top10MoviesTodayItems()
    {
        $response = Http::get(config('api.movie_api.base_url') . config('api.movie_api.endpoints.collection_list_page_2'));

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

    private function latestAnimeCollectionItems()
    {
        $response = Http::get(config('api.movie_api.base_url') . config('api.movie_api.endpoints.collection_list_page_3'));

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
        $response = Http::get(config('api.movie_api.base_url') . config('api.movie_api.endpoints.collection_list_page_6'));

        if ($response->successful()) {
            $movies = $response->json();

            if (
                !empty($movies['status'])
                && $movies['status'] === true
                && ($movies['msg'] ?? '') === 'Thành công.'
                && !empty($movies['result'])
            ) {
                // dd($movies['result']['collections'][3]);
                foreach ($movies['result']['collections'][3]['movies'] as &$item) {
                    $backdrops = $item['images']['backdrops'] ?? [];
                    $posters   = $item['images']['posters'] ?? [];

                    $backdropPath = $backdrops[random_int(0, count($backdrops) - 1)]['path'] ?? null;
                    $posterPath   = $posters[random_int(0, count($posters) - 1)]['path'] ?? null;

                    $item['backdrop_url'] = $this->formatImageUrl($backdropPath, config("app.cdn.backdrop_path"));
                    $item['poster_url']   = $this->formatImageUrl($posterPath, config("app.cdn.poster_path"));
                }

                return $movies['result']['collections'][3]['movies'];
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
