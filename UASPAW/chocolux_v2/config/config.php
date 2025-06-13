<?php

return [
    // ... other Laravel config values ...

    'name' => env('APP_NAME', 'ChocoLux'),

    'social' => [
        'facebook' => env('SOCIAL_FACEBOOK', 'https://facebook.com/chocolux'),
        'twitter' => env('SOCIAL_TWITTER', 'https://twitter.com/chocolux'),
        'linkedin' => env('SOCIAL_LINKEDIN', 'https://linkedin.com/company/chocolux'),
        'instagram_text' => 'Follow us for the latest updates and chocolate inspirations',
    ],

    'contact' => [
        'address' => 'Jl. Cokelat No. 123, Jakarta',
        'phone' => '+62 123 4567 890',
        'email' => 'info@chocolux.com',
        'maps_url' => 'https://goo.gl/maps/yourLocation',
        'maps_lat' => -6.2088, // Jakarta coordinates
        'maps_lng' => 106.8456,
    ],

    'about' => [
        'description' => 'Choco Lux adalah perusahaan yang didirikan dengan misi untuk menyajikan pengalaman terbaik dalam menikmati produk cokelat premium.',
        'full_description' => "Choco Lux adalah perusahaan yang didirikan dengan misi untuk menyajikan pengalaman terbaik dalam menikmati produk cokelat premium. Kami percaya bahwa cokelat bukan hanya sekadar makanan, tetapi juga sebuah seni yang mampu menyentuh emosi dan menciptakan momen berharga dalam hidup.\n\nDengan komitmen untuk menghadirkan kualitas terbaik, setiap produk yang kami luncurkan dirancang untuk memanjakan lidah dan memberikan kebahagiaan bagi setiap penikmatnya.",
        'values' => [
            'Kualitas Premium',
            'Inovasi Berkelanjutan',
            'Kepuasan Pelanggan',
            'Tanggung Jawab Sosial',
            'Keberlanjutan Lingkungan'
        ],
    ],

    'stats' => [
        'years' => 10,
        'products' => 50,
        'customers' => 10000,
    ],

    'company' => [
        'description' => 'Sejak 2015, kami telah berkomitmen untuk menghadirkan cokelat berkualitas premium dengan cita rasa autentik.',
    ],

    'certifications' => [
        [
            'name' => 'ISO 22000',
            'image' => 'cert-iso22000.png',
            'description' => 'Food Safety Management'
        ],
        [
            'name' => 'Halal',
            'image' => 'cert-halal.png',
            'description' => 'Halal Certified'
        ],
        [
            'name' => 'HACCP',
            'image' => 'cert-haccp.png',
            'description' => 'Food Safety System'
        ],
        [
            'name' => 'Organic',
            'image' => 'cert-organic.png',
            'description' => 'Organic Ingredients'
        ],
    ],
];