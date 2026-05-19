<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
    // This allows Laravel to understand that it is behind an HTTPS-terminating proxy (Ngrok)
    $middleware->trustProxies(at: '*');
})
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
