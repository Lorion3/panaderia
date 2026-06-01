<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{

    public function listado()
    {
        $empleados = Empleado::all();
        return view('empleado/lista', compact('empleados'));
    }


    public function inicio()
    {

        return view('empleado/inicio');
    }

    public function guardar(Request $request)
    {
       //dd($request->all());
        $empleado = new Empleado();
        $empleado->nombre = $request->input('nombre');
        $empleado->apellido = $request->input('apellido');
        $empleado->correo = $request->input('email');
        $empleado->telefono = $request->input('telefono');
        $empleado->contrasena = $request->input('contrasena');
        $empleado->rol = $request->input('rol');
        $empleado->usuario = $request->input('usuario');
        $empleado->imagen = $request->input('imagen');
        $empleado->estatus = $request->input('estatus');

        $empleado->save();

        return redirect('/empleado')->with('success', 'Empleado guardado exitosamente.');
    }
}
