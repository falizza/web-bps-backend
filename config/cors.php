<?php

return [
    'paths' => ['api/', 'login', 'logout', 'sanctum/csrf-cookie'],
    'allowed_methods' => [''],
    'allowed_origins' => [
        'http://localhost:5173/', 
        'https://web-bps-frontend-sepia.vercel.app/', 
    ],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true,
];