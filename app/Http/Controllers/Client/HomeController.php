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
        $response = Http::get('https://rophimapi.net/v1/movie/hot');

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

                    $item['backdrop_url'] = $this->formatImageUrl($backdropPath, 'https://static.nutscdn.com/vimg/1920-0/');
                    $item['poster_url'] = $this->formatImageUrl($posterPath, 'https://static.nutscdn.com/vimg/1920-0/');
                    $item['title_url'] = $this->formatImageUrl($titlePath, 'https://static.nutscdn.com/vimg/0-260/');
                }

                return $movies['result'];
            }
        }

        return [];
    }

    private function formatImageUrl($path, $https = null)
    {
        if (!$path) {
            return null;
        }

        $parts = explode("/", $path);
        array_shift($parts);
        array_shift($parts);

        $cleanPath = implode("/", $parts);

        if ($https == null) {

            return $cleanPath;
        }

        return $https . $cleanPath;
    }
}
