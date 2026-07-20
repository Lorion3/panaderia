<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EmpleadoBase
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->guard('admin')->check() && auth()->guard('admin')->user()->esBase()) {
            return $next($request);
        }
        
        abort(403, 'No tienes permisos de administrador base');
    }
}
