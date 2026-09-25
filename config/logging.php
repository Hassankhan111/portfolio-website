<?php

// Vercel logging configuration

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;

return [

    'default' => 'stderr',

    'deprecations' => [
        'channel' => 'null',
        'trace' => false,
    ],

    'channels' => [

        'stderr' => [
            'driver' => 'monolog',
            'handler' => StreamHandler::class,
            'with' => [
                'stream' => 'php://stderr',
            ],
            'level' => 'debug',
        ],

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        'emergency' => [
            'path' => '/tmp/laravel.log',
        ],

    ],

];