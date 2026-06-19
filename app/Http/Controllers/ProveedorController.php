<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    //

    public function listado()
    {
        $proveedores = Proveedor::all();
        return view('proveedor/lista', compact('proveedores'));
    }

    public function formulario()
    {
        return view('proveedor/formulario');
    }
    public function inicio()
    {
        return view('proveedor/inicio');
    }
    public function guardar(Request $request)
    {
        //dd($request->all());
        $proveedor = new Proveedor();
        $proveedor->contacto = $request->input('contacto');
        //$proveedor->telefono = $request->input('telefono');
        $proveedor->correo = $request->input('correo');
        $proveedor->estado = $request->input('estado');
        $proveedor->ciudad = $request->input('ciudad');
        $proveedor->empresa = $request->input('empresa');
        $proveedor->colonia = $request->input('colonia');
        $proveedor->codigo_postal = $request->input('codigo_postal');
        $proveedor->numero = $request->input('numero');
        $proveedor->imagen = 'imagenes/proveedores/proveedor_default.jpg';
        $proveedor->calle = $request->input('calle');


        $proveedor->save();
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $nombre = 'proveedor_'.$proveedor->id.'.'.$file->getClientOriginalExtension();
            $ruta = $file->storeAs('imagenes/proveedores', $nombre, 'public');
            $proveedor->imagen = url('storage/'.$ruta);
            $proveedor->save();
        }

        return redirect('/proveedor')->with('success', 'Proveedor guardado exitosamente.');
    }

    public function editar(Request $request){
        $id = $request->route('id');
        $proveedor = Proveedor::find($id);
        if(!$proveedor){
            return redirect('/proveedor')->with('error','Proveedor no encontrado');
        }
        return view('proveedor/edicion',['proveedor' => $proveedor]);
    }

    public function actualizar(Request $request){
        $id = $request->route('id');
        $proveedor = Proveedor::find($id);
        if(!$proveedor){
            return redirect('/proveedor')->with('error','Proveedor no encontrado');
        }
        $proveedor->contacto = $request->input('contacto');
        //$proveedor->telefono = $request->input('telefono');
        $proveedor->correo = $request->input('correo');
        $proveedor->estado = $request->input('estado');
        $proveedor->ciudad = $request->input('ciudad');
        $proveedor->empresa = $request->input('empresa');
        $proveedor->colonia = $request->input('colonia');
        $proveedor->codigo_postal = $request->input('codigo_postal');
        $proveedor->numero = $request->input('numero');
        $proveedor->imagen = 'imagenes/proveedores/proveedor_default.jpg';
        $proveedor->calle = $request->input('calle');

        $proveedor->save();  
        
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $nombre = 'proveedor_'.$proveedor->id.'.'.$file->getClientOriginalExtension();
            $ruta = $file->storeAs('imagenes/proveedores', $nombre, 'public');
            $proveedor->imagen = url('storage/'.$ruta);
            $proveedor->save();
        }

        return redirect('/proveedor')->with('success', 'Proveedor actualizado');
    }

    public function eliminar(Request $request){
        $id = $request->route('id');
        $proveedor = Proveedor::find($id);
        if(!$proveedor){
            return redirect('/proveedor')->with('error','Proveedor no encontrado');
        }
        $proveedor->delete();
        return redirect('/proveedor')->with('success', 'Proveedor eliminado');
    }

    public function mostrar(Request $request){
        $id = $request->route('id');
        $proveedor = Proveedor::find($id);
        if (!$proveedor) {
            return redirect('/proveedor')->with('error', 'Proveedor no encontrado');
        }
        return view('proveedor/borrado', ['proveedor'=> $proveedor]);
    }

}
