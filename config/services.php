<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'google' => [
        'client_id' => '242038400192-0mo4v2nle6v59dedc2d6d68k3feq5csc.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/google/collback',
    ],

    'github' => [
        'client_id' => '427cb01b9d8ac97a5e9f',
        'client_secret' => 'a6088a6c2296e57a4ced1a0403df8ddd25e29a5e',
        'redirect' => 'http://127.0.0.1:8000/github/collback',
    ],

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
