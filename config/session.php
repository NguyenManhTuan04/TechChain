<?php

use Illuminate\Support\Str;

return [

    'driver' => env('SESSION_DRIVER', 'file'),

    'lifetime' => 120,

    'expire_on_close' => true,

    'encrypt' => true,

    'files' => storage_path('framework/sessions'),

    'connection' => env('SESSION_CONNECTION', null),

    'store' => env('SESSION_STORE', null),

    'lottery' => [2, 100],

    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug(env('APP_NAME', 'laravel'), '_').'_session'
    ),

    'path' => '/',

    'domain' => env('SESSION_DOMAIN', null),

    'secure' => env('SESSION_SECURE_COOKIE', true),

    'http_only' => true,

    'same_site' => 'strict',

];

