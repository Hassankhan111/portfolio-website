<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;
use Monolog\Processor\PsrLogMessageProcessor;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    */

   'default' => 'stderr',

    /*
    |--------------------------------------------------------------------------
    | Deprecations Log Channel
    |--------------------------------------------------------------------------
    */

    'deprecations' => [
        'channel' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),
        'trace' => env('LOG_DEPRECATIONS_TRACE', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    */

    'channels' => [

        /*
        |--------------------------------------------------------------------------
        | Stack
        |--------------------------------------------------------------------------
        |
        | Always use stderr on Vercel. Do not use the single file logger.
        |
        */

        'stack' => [
            'driver' => 'stack',
            'channels' => ['stderr'],
            'ignore_exceptions' => false,
        ],

        /*
        |--------------------------------------------------------------------------
        | Single
        |--------------------------------------------------------------------------
        |
        | Kept for local development, but not used by the Vercel stack.
        |
        */

       

        /*
        |--------------------------------------------------------------------------
        | Slack
        |--------------------------------------------------------------------------
        */

        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => env(
                'LOG_SLACK_USERNAME',
                env('APP_NAME', 'Laravel')
            ),
            'emoji' => env('LOG_SLACK_EMOJI', ':boom:'),
            'level' => env('LOG_LEVEL', 'critical'),
            'replace_placeholders' => true,
        ],

        /*
        |--------------------------------------------------------------------------
        | Papertrail
        |--------------------------------------------------------------------------
        */

        'papertrail' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => env(
                'LOG_PAPERTRAIL_HANDLER',
                SyslogUdpHandler::class
            ),
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
                'connectionString' => 'tls://'
                    . env('PAPERTRAIL_URL')
                    . ':'
                    . env('PAPERTRAIL_PORT'),
            ],
            'processors' => [
                PsrLogMessageProcessor::class,
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | Standard Error Output
        |--------------------------------------------------------------------------
        |
        | This is the channel used on Vercel.
        |
        */

        'stderr' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => StreamHandler::class,
            'with' => [
                'stream' => 'php://stderr',
            ],
            'processors' => [
                PsrLogMessageProcessor::class,
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | Syslog
        |--------------------------------------------------------------------------
        */

        'syslog' => [
            'driver' => 'syslog',
            'level' => env('LOG_LEVEL', 'debug'),
            'facility' => env('LOG_SYSLOG_FACILITY', LOG_USER),
            'replace_placeholders' => true,
        ],

        /*
        |--------------------------------------------------------------------------
        | Error Log
        |--------------------------------------------------------------------------
        */

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => env('LOG_LEVEL', 'debug'),
            'replace_placeholders' => true,
        ],

        /*
        |--------------------------------------------------------------------------
        | Null
        |--------------------------------------------------------------------------
        */

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        /*
        |--------------------------------------------------------------------------
        | Emergency
        |--------------------------------------------------------------------------
        |
        | Vercel's deployment filesystem is read-only.
        | /tmp is writable during the function execution.
        |
        */

        'emergency' => [
            'path' => '/tmp/laravel-emergency.log',
        ],

    ],

];