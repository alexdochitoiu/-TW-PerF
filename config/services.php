<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '304310343354233',
        'client_secret' => '226c900d773fa4eac164a704667f2fcb',
        'redirect' => 'http://localhost:8000/autentificare/facebook/callback',
    ],
    'google' => [
        'client_id' => '100057349537-ebfarrv4et0ck2r637897pgi7ne02gus.apps.googleusercontent.com',
        'client_secret' => 'YU-i28bCMN83qV6aHQDOpYGn',
        'redirect' => 'http://localhost:8000/autentificare/google/callback',
    ]

];
