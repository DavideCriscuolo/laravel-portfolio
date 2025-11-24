<?php

return [


    'paths' => [
        'api/*',
        'sanctum/csrf-cookie',
    ],


    'allowed_origins' => [
        '*' // oppure url del front end
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => [
        '*'
    ],

    'allowed_methods' => [
        "*"

    ],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false, //  se usi cookie/token con Sanctum
];
