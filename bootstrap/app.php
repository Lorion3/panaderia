<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\EmpleadoMaster;
use App\Http\Middleware\EmpleadoBase;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin.master' => EmpleadoMaster::class,
            'admin.base' => EmpleadoBase::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();