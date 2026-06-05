<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Proveedor;

class ProductoController extends Controller
{
    //

    public function listado() {
        $productos = Producto::all();
      //  $proveedores = Proveedor::all();
        return view('producto/lista', compact('productos'));
    }

public function inicio() { 
    $proveedores = Proveedor::all(); 
    
    return view('producto/inicio', compact('proveedores'));
}
public function guardar(Request $request) {
    dd($request->all());
    $producto = new Producto();
    $producto->nombre = $request->input('nombre');
    
    $producto->proveedor_id = $request->input('proveedor_id');
    $producto->descripcion = $request->input('descripcion');
    $producto->precio = $request->input('precio');
    $producto->existencia = $request->input('stock');
    $producto->estatus = $request->input('estatus');
    $producto->categoria = $request->input('categoria');
    $producto->imagen1 = $request->input('imagen1');
    $producto->imagen2 = $request->input('imagen2');
    $producto->imagen3 = $request->input('imagen3');

    $producto->save();

    return redirect('/producto')->with('success', 'Producto guardado exitosamente.');
}
}
