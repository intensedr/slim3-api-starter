<?php

use Tuupola\Middleware\CorsMiddleware;

$app->group('/api/v1', function () use ($container) {
    $this->get('', \App\Controllers\HomeController::class . ':index');
})->add(new Tuupola\Middleware\CorsMiddleware([
    "origin" => ["*"],
    "methods" => ["GET", "POST", "PUT", "PATCH", "DELETE", "OPTIONS"],
    "headers.allow" => ["Authorization", "If-Match", "If-Unmodified-Since"],
    "headers.expose" => [],
    "credentials" => true,
    "cache" => 0,
]));