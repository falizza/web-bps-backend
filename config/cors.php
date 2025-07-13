<?php

return [

    'paths' => ['api/*', 'sanctum/csrf-cookie'], // penting: pastiin login & auth route termasuk

    'allowed_methods' => ['*'], // allow GET, POST, OPTIONS, PUT, DELETE, etc

    'allowed_origins' => [], // dikosongin karena kita pakai regex di patterns

    'allowed_origins_patterns' => [
        '^https:\/\/.*\.vercel\.app$',      // semua subdomain vercel
        '^https:\/\/.*\.dnmgroup\.my\.id$', // semua subdomain custom domain (kalau lo pake)
        '^http:\/\/localhost:\d+$',         // buat dev lokal: localhost:5173 dll
    ],

    'allowed_headers' => ['*'], // biar semua header termasuk Authorization masuk

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,
];