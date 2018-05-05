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
        'client_id' => env("FB_APP",'223935168192832'),         // Your GitHub Client ID
        'client_secret' => env('6f13dc2bd2796e7234cd7209640cbe3f'), // Your GitHub Client Secret
        'redirect' => 'http://localhost/_oauth/facebook',
    ],

    'facebook' => [
        'client_id' => env("FB_APP",'223935168192832'),         // Your GitHub Client ID
        'client_secret' => env('6f13dc2bd2796e7234cd7209640cbe3f'), // Your GitHub Client Secret
        'redirect' => 'http://localhost:8000/callback',
    ],



];
