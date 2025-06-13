<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application, which will be used when the
    | framework needs to place the application's name in a notification or
    | other UI elements where an application name needs to be displayed.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | the application so that it's available within Artisan commands.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. The timezone
    | is set to "UTC" by default as it is suitable for most use cases.
    |
    */

    'timezone' => env('APP_TIMEZONE', 'UTC'),

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by Laravel's translation / localization methods. This option can be
    | set to any locale for which you plan to have translation strings.
    |
    */

    'locale' => env('APP_LOCALE', 'en'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is utilized by Laravel's encryption services and should be set
    | to a random, 32 character string to ensure that all encrypted values
    | are secure. You should do this prior to deploying the application.
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

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
