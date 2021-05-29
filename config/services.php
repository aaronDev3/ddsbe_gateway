<?php
return [

    'books' => [
        'base_uri' => env('USERS1_SERVICE_BASE_URL'),
        'secret' => env('USERS1_SERVICE_SECRET'),
    ],

    'authors' => [
        'base_uri' => env('USERS2_SERVICE_BASE_URL'),
        'secret' => env('USERS2_SERVICE_SECRET'),

    ],
    
];