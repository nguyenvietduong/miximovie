<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log; // thêm Log

class MovieController extends Controller
{
    public function filterMovies(Request $request)
    {
        $filters = $request->input('filters', []);
        $page = $request->input('page', 1);

        $apiUrl = config('api.movie_api.base_url') . config('api.movie_api.endpoints.filter');

        // Build query parameters
        $query = [
            'countries'      => implode(',', Arr::get($filters, 'countries', [])),
            'genres'         => implode(',', Arr::get($filters, 'genres', [])),
            'years'          => implode(',', Arr::get($filters, 'years', [])),
            'custom_year'    => '',
            'quality'        => '',
            'type'           => implode(',', Arr::get($filters, 'type', [])),
            'status'         => '',
            'exclude_status' => 'Upcoming',
            'versions'       => implode(',', Arr::get($filters, 'versions', [])),
            'rating'         => '',
            'networks'       => '',
            'productions'    => '',
            'sort'           => 'updated_at',
            'page'           => $page,
        ];

        // Tạo request nhưng chưa gửi để log URL
        $requestLog = Http::get($apiUrl, $query);

        // Log URL cuối cùng gửi đi
        Log::info('Gửi request API URL: ' . $requestLog->effectiveUri());

        $response = $requestLog;

        if ($response->failed()) {
            return response()->json([
                'success' => false,
                'message' => 'Không lấy được dữ liệu từ API.'
            ], 500);
        }

        $data = $response->json();

        if (
            !empty($data['status'])
            && $data['status'] === true
            && ($data['msg'] ?? '') === 'Thành công.'
            && !empty($data['result'])
        ) {
            foreach ($data['result']['items'] as &$item) {
                $backdrops = $item['images']['backdrops'] ?? [];
                $posters   = $item['images']['posters'] ?? [];

                $backdropPath = $backdrops[random_int(0, count($backdrops) - 1)]['path'] ?? null;
                $posterPath   = $posters[random_int(0, count($posters) - 1)]['path'] ?? null;

                $item['backdrop_url'] = $this->formatImageUrl($backdropPath, config("app.cdn.backdrop_path"));
                $item['poster_url']   = $this->formatImageUrl($posterPath, config("app.cdn.poster_path"));
            }
        }

        // Tạo HTML từ Blade view partial
        $html = view('client.ourMovie.movie_list', ['movies' => $data['result']['items'] ?? []])->render();

        return response()->json([
            'success'    => true,
            'html'    => $html,
            'data'    => $data['result']['items'],
            'pagination' => [
                'current_page' => number_format($page),
                'last_page'    => number_format($data['result']['page_count']),
            ]
        ]);
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
