<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use Illuminate\Support\Facades\Hash;

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
   $totalEmpleados = Empleado::count();

    $empleadosActivos = Empleado::where('estatus', 'activo')->count();
    $empleadosInactivos = Empleado::where('estatus', 'inactivo')->count();

    $administradores = Empleado::where('rol', 'Administrador')->count();
    $empleados = Empleado::where('rol', 'Empleado')->count();

    return view('empleado.inicio', compact(
        'totalEmpleados',
        'empleadosActivos',
        'empleadosInactivos',
        'administradores',
        'empleados'
    ));
        // return view('empleado/inicio');
    }

    public function guardar(Request $request)
    {
       //dd($request->all());
        $empleado = new Empleado();
        $empleado->nombre = $request->input('nombre');
        $empleado->apellido = $request->input('apellido');
        $empleado->correo = $request->input('email');
        $empleado->telefono = $request->input('telefono');
        $empleado->contrasena = Hash::make($request->input('contrasena'));
        $empleado->rol = $request->input('rol');
        $empleado->usuario = $request->input('usuario');
        $empleado->imagen = 'storage/imagenes/empleados/empleado_default.jpg';
        $empleado->estatus = $request->input('estatus');

        $empleado->save();
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $nombre = 'empleado_'.$empleado->id.'.'.$file->getClientOriginalExtension();
            $ruta = $file->storeAs('imagenes/empleados', $nombre, 'public');
            $empleado->imagen = url('storage/'.$ruta);
            $empleado->save();
        }


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
        $empleado->contrasena = Hash::make($request->input('contrasena'));
        $empleado->rol = $request->input('rol');
        $empleado->usuario = $request->input('usuario');
        $empleado->imagen = 'imagenes/empleados/empleado_default.jpg';
        $empleado->estatus = $request->input('estatus');

        $empleado->save();
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $nombre = 'empleado_'.$empleado->id.'.'.$file->getClientOriginalExtension();
            $ruta = $file->storeAs('imagenes/empleados', $nombre, 'public');
            $empleado->imagen = url('storage/'.$ruta);
            $empleado->save();
        }


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


