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
    public function formulario()
    {
        return view('empleado/formulario');
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

    public function editar(Request $request){
        $id = $request->route('id');
        $empleado = Empleado::find($id);
        if(!$empleado){
            return redirect('/empleado')->with('error','Empleado no encontrado');
        }
        return view('empleado/edicion',['empleado' => $empleado]);
    }


    public function actualizar(Request $request){
        $id = $request->route('id');
        $empleado = Empleado::find($id);
        if(!$empleado){
            return redirect('/empleado')->with('error','Empleado no encontrado');
        }
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

        return redirect('/empleado')->with('success', 'Empleado actualizado exitosamente.');
    }

    public function eliminar(Request $request){
        $id = $request->route('id');
        $empleado = Empleado::find($id);
        if(!$empleado){
            return redirect('/empleado')->with('error','Empleado no encontrado');
        }
        $empleado->estatus ='inactivo';
        $empleado->save();
        return redirect('/empleado')->with('success', 'Empleado eliminado exitosamente.');
    }

    public function cambiarEstado(Request $request, $id){
        $empleado = Empleado::find($id);
        if(!$empleado){
            return redirect('/empleado')->with('error','Empleado no encontrado');
        }
        $empleado->estatus = $empleado->estatus === 'activo' ? 'inactivo' : 'activo';
        $empleado->save();
        return redirect('/empleado')->with('success', 'Estado del empleado actualizado exitosamente.');
    }

    public function mostrar(Request $request){
        $id = $request->route('id');
        $empleado = Empleado::find($id);
        if(!$empleado){
            return redirect('/empleado')->with('error','Empleado no encontrado');
        }
        return view('/empleado/borrado',['empleado' => $empleado]);
    }
}
