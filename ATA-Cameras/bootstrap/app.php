<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->report(function (\Throwable $e) {
            error_log('ORIG_ERR: ' . get_class($e) . ': ' . $e->getMessage());
            error_log('ORIG_LOC: ' . $e->getFile() . ':' . $e->getLine());
            $t = $e->getTrace();
            error_log('ORIG_T0: ' . ($t[0]['file'] ?? '?') . ':' . ($t[0]['line'] ?? '?'));
            error_log('ORIG_T1: ' . ($t[1]['file'] ?? '?') . ':' . ($t[1]['line'] ?? '?'));
            error_log('ORIG_T2: ' . ($t[2]['file'] ?? '?') . ':' . ($t[2]['line'] ?? '?'));
        });
    })->create();

// On Vercel serverless, redirect writable storage to /tmp
if (getenv('VERCEL')) {
    $app->useStoragePath('/tmp/storage');
}

return $app;
