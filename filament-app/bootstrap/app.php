<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(fn(Middleware $m) =>
    $m->validateCsrfTokens(except: ['midtrans/notification'])
)
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();