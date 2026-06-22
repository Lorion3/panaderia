<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Empleado; 
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    // Redirección a Google
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

  public function callback()
{
    
    $userSocial = Socialite::driver('google')->user();

    // 1. Buscar si el correo de la red social existe en la tabla de administradores
    $empleado = Empleado::where('correo', $userSocial->getEmail())->first();

    if ($empleado) {
        // 2. Verificar si el administrador está activo
        if ($empleado->estatus == 'activo') {
            // 3. LOGUEAR MANUALMENTE EN EL GUARD 'admin'
            Auth::guard('admin')->login($empleado);
           
            return redirect()->intended('/dashboard');
        } else {
            return redirect('/login')->withErrors(['error' => 'Cuenta de administrador inactiva.']);
        }
    }

    // Si no existe en la tabla de administradores, rechazar acceso
    return redirect('/login')->withErrors(['error' => 'No tienes permisos de administrador.']);
}
}
