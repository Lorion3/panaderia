<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // Muestra el formulario de login
    public function loginForm()
    {
        return view('auth.login');
    }

    // Procesa el inicio de sesión
    public function login(Request $request)
    {
        // Validar los campos
        $request->validate([
            'usuario' => 'required|string',
            'password' => 'required|string'
        ]);

        // Buscar al administrador por usuario
        $admin = Empleado::where('usuario', $request->usuario)->first();

        // Verificar si existe y si la contraseña coincide
        if ($admin && Hash::check($request->password, $admin->contrasena)) {
            // Guardar los datos del administrador en sesión
            Session::put('admin_id', $admin->id);
            Session::put('admin_nombre', $admin->nombre);
            Session::put('admin_usuario', $admin->usuario);
            Session::put('admin_rol', $admin->rol);

            return redirect()->intended('/empleado/inicio');
        }

        // Si falla la autenticación
        return back()->withErrors([
            'usuario' => 'Las credenciales proporcionadas no coinciden con nuestros registros.'
        ])->onlyInput('usuario');
    }

    // Cierra la sesión
    public function logout()
    {
        // Limpiar la sesión
        Session::flush();
        
        return redirect('/auth/login')->with('success', 'Sesión cerrada correctamente.');
    }

    // Verifica si el usuario está autenticado (método auxiliar)
    public function checkAuth()
    {
        if (Session::has('admin_id')) {
            return response()->json([
                'authenticated' => true,
                'admin' => [
                    'id' => Session::get('admin_id'),
                    'nombre' => Session::get('admin_nombre'),
                    'usuario' => Session::get('admin_usuario'),
                    'rol' => Session::get('admin_rol')
                ]
            ]);
        }

        return response()->json(['authenticated' => false], 401);
    }
}