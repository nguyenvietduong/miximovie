<?php 

return [
    'movie_api' => [
        'base_url' => 'https://rophimapi.net/v1/',
        'endpoints' => [
            'hot' => 'movie/hot',
            'filter' => 'movie/filterV2?',
            'collection_list_page_1' => 'collection/list?page=1&limit=4',
            'collection_list_page_2' => 'collection/list?page=2&limit=4',
            'collection_list_page_3' => 'collection/list?page=3&limit=4',
            'collection_list_page_6' => 'collection/list?page=6&limit=4',
        ],
    ],
];