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
        'client_id' => env("FB_APP",'223935168192832'),
        'client_secret' => env('6f13dc2bd2796e7234cd7209640cbe3f'),
        'redirect' => 'http://localhost/_oauth/facebook',
    ],

    'twitter' => [
        'client_id' => env('921376484-IQBfS1bSmjmFrARCqv9xYEjxPZjb9J3ymth4YJGi'),
        'client_secret' => env('i8V9Ib94dnIU4ll2Ops2bDNoBElDtzqRSySyiOf7ulAiS'),
        'redirect' => 'http://localhost:8000/callback',
    ],



];
