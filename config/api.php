<?php 

return [
    'movie_api' => [
        'base_url' => 'https://rophimapi.net/v1/',
        'endpoints' => [
            'hot' => 'movie/hot',
            'top10TvSeriesTodayItems' => 'collection/list?page=2&limit=4',
            'latestAnimeCollectionItems' => 'collection/list?page=3&limit=4',
            'koreanCinemaScreeningItems' => 'collection/list?page=6&limit=4',
        ],
    ],
];