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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '571981359465-v5pecoi7chpk25dadcsumbh68numvj0m.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/user/login/callback',
    ],
    'facebook' => [
        'client_id' => '555111086342245',
        'client_secret' => '9c4044028568203503daa4c91adca4bb',
        'redirect' => 'http://127.0.0.1:8000/user/login/callback-facebook',
    ],

];