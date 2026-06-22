<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesionController extends Controller
{

    
    public function login(Request $request) {
    // Definición de credenciales + Condición de estado activo
    // 'password' es la llave interna de Laravel, pero se mapea a 'contraseña' en el modelo
    $credenciales = [
        'usuario'  => $request->usuario,
        'password' => $request->contrasena,
        'estatus'   => 'activo' // Asegura que solo los empleados activos puedan iniciar sesión         
    ];

    if (Auth::guard('admin')->attempt($credenciales)) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }

    // Manejo de errores detallado (ver Paso 7)
    return back()->withErrors(['error' => 'Credenciales incorrectas o cuenta inactiva.'])->withInput();
}


public function logout(Request $request) {
    Auth::guard('admin')->logout();
   
    $request->session()->invalidate();
    $request->session()->regenerateToken();
   
    return redirect('/login');
}



}
