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

    'twitter' => [
        'client_id' => 'RFCIQxSIATGTUbLw8HuzKCKOm',
        'client_secret' => 'WFb8FWBacWjMjWcCLAiAspGkTgYEJZXo6T9ozpLAXO7DFXjGhl',
        'redirect' => 'http://scholio.dev/auth/twitter/callback',
    ],

    'facebook' => [
        'client_id' => '1167687200016783',
        'client_secret' => '7eea088f3c2833b8aa59024c8c45f88b',
        'redirect' => 'http://schol.io/auth/facebook/callback',
    ],

    'google' => [
        'client_id' => '562262324188-vc8r69hl57rsb9ht9ikqoi44o1vjqh8b.apps.googleusercontent.com',
        'client_secret' => 'n06FECanaUPMgfP6nT30rinP',
        'redirect' => 'http://schol.io/auth/google/callback',
    ],

];
