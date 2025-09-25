<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Filament Configuration
    |--------------------------------------------------------------------------
    |
    | This file contains the configuration for Filament admin panel
    |
    */

    'file_upload' => [
        'max_size' => 10240, // 10MB in KB
        'accepted_types' => [
            'image/jpeg',
            'image/jpg', 
            'image/png',
            'image/gif',
            'image/webp'
        ],
        'directories' => [
            'products' => 'img',
            'blog' => 'blog',
            'categories' => 'categories',
            'seo' => 'seo/og-images'
        ]
    ],

    'mobile_upload' => [
        'enable_camera' => true,
        'enable_gallery' => true,
        'compress_images' => true,
        'max_dimension' => 2048, // Max width/height in pixels
    ]
];
