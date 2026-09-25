<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// 1. Force Laravel storage/cache paths to Vercel's writable /tmp directory
$storagePath = '/tmp/storage';
$directories = [
    $storagePath . '/framework/views',
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/bootstrap/cache',
    $storagePath . '/logs',
];

foreach ($directories as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Set environment overrides for writable paths
putenv("VIEW_COMPILED_PATH={$storagePath}/framework/views");
putenv("APP_SERVICES_CACHE={$storagePath}/bootstrap/cache/services.php");
putenv("APP_PACKAGES_CACHE={$storagePath}/bootstrap/cache/packages.php");
putenv("APP_CONFIG_CACHE={$storagePath}/bootstrap/cache/config.php");
putenv("APP_ROUTES_CACHE={$storagePath}/bootstrap/cache/routes.php");
putenv("APP_EVENTS_CACHE={$storagePath}/bootstrap/cache/events.php");

// 2. Register Composer autoloader
require __DIR__ . '/../vendor/autoload.php';

// 3. Bootstrap Laravel
/** @var Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Override default storage path inside the container
$app->useStoragePath($storagePath);

// 4. Capture and handle the incoming request
$app->handleRequest(Request::capture());