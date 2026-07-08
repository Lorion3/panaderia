<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Empleado; 
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $userSocial = Socialite::driver('google')->user();
            
            // Buscar empleado por correo
            $empleado = Empleado::where('correo', $userSocial->getEmail())->first();

            if ($empleado) {
                // Verificar si está activo
                if ($empleado->estatus == 'activo') {
                    // Login con el guard por defecto (web)
                    Auth::guard('admin')->login($empleado);
                    
                    // Regenerar sesión por seguridad
                    session()->regenerate();
                    
                    return redirect()->intended('/dashboard');
                } else {
                    return redirect('/login')->with('error', 'Cuenta de administrador inactiva.');
                }
            }

            return redirect('/login')->with('error', 'No tienes permisos de administrador.');
            
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Error al autenticar con Google: ' . $e->getMessage());
        }
    }
}