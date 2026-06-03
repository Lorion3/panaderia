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
        $proveedor->imagen = $request->input('imagen');
        $proveedor->calle = $request->input('calle');



        $proveedor->save();

        return redirect('/proveedor')->with('success', 'Proveedor guardado exitosamente.');
    }
}
