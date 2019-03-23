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

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],


	/*
	 * Configuration for Laravel Socialite
	 */
	'socialite_driver' => env('SOCIALITE_DRIVER'),

	'facebook' => [
		'client_id' => env('FACEBOOK_CLIENT_ID'),
		'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
		'redirect' => env('SOCIALITE_REDIRECT_URL'),
	],
	'twitter' => [
		'client_id' => env('TWITTER_CLIENT_ID'),
		'client_secret' => env('TWITTER_CLIENT_SECRET'),
		'redirect' => env('SOCIALITE_REDIRECT_URL'),
	],
	'linkedin' => [
		'client_id' => env('LINKEDIN_CLIENT_ID'),
		'client_secret' => env('LINKEDIN_CLIENT_SECRET'),
		'redirect' => env('SOCIALITE_REDIRECT_URL'),
	],
	'google' => [
		'client_id' => env('GOOGLE_CLIENT_ID'),
		'client_secret' => env('GOOGLE_CLIENT_SECRET'),
		'redirect' => env('SOCIALITE_REDIRECT_URL'),
	],
	'github' => [
		'client_id' => env('GITHUB_CLIENT_ID'),
		'client_secret' => env('GITHUB_CLIENT_SECRET'),
		'redirect' => env('SOCIALITE_REDIRECT_URL'),
	],
	'gitlab' => [
		'client_id' => env('GITLAB_CLIENT_ID'),
		'client_secret' => env('GITLAB_CLIENT_SECRET'),
		'redirect' => env('SOCIALITE_REDIRECT_URL'),
	],
	'bitbucket' => [
		'client_id' => env('BITBUCKET_CLIENT_ID'),
		'client_secret' => env('BITBUCKET_CLIENT_SECRET'),
		'redirect' => env('SOCIALITE_REDIRECT_URL'),
	],

];
