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
public function formulario() {
    $proveedores = Proveedor::all();
    return view('producto/formulario', compact('proveedores'));
}

public function editar($id) {
    $producto = Producto::find($id);
    $proveedores = Proveedor::all();
    return view('producto/editar', compact('producto', 'proveedores'));
}

public function actualizar(Request $request, $id) {
    $producto = Producto::find($id);
    $producto->proveedor_id = $request->input('proveedor_id');
    $producto->nombre = $request->input('nombre');
    $producto->categoria = $request->input('categoria');
    $producto->precio = $request->input('precio');
    $producto->existencia = $request->input('existencia');
    $producto->estatus = $request->input('estatus');
    $producto->descripcion = $request->input('descripcion');
    $producto->imagen1 = 'storage/imagenes/productos/producto_default.jpg';
    $producto->imagen2 = 'storage/imagenes/productos/producto_default.jpg';
    $producto->imagen3 = 'storage/imagenes/productos/producto_default.jpg';
    $producto->save();

    if ($request->hasFile('imagen1')) {
        $file = $request->file('imagen1');
        $nombre = 'producto_'.$producto->id . '_1.' . $file->getClientOriginalName();
        $ruta = $file->storeAs('imagenes/productos', $nombre, 'public');
        $producto->imagen1 = url('storage/'.$ruta);
    }

    if ($request->hasFile('imagen2')) {
        $file = $request->file('imagen2');
        $nombre = 'producto_'.$producto->id . '_2.' . $file->getClientOriginalName();
        $ruta = $file->storeAs('imagenes/productos', $nombre, 'public');
        $producto->imagen2 = url('storage/'.$ruta);
    }

    if ($request->hasFile('imagen3')) {
        $file = $request->file('imagen3');
        $nombre = 'producto_'.$producto->id . '_3.' . $file->getClientOriginalName();
        $ruta = $file->storeAs('imagenes/productos', $nombre, 'public');
        $producto->imagen3 = url('storage/'.$ruta);
    }

    $producto->save();

    return redirect('/producto/lista')->with('success', 'Producto actualizado');
}

public function eliminar($id) {
    $producto = Producto::find($id);
    $producto->delete();
    return redirect('/producto/lista')->with('success', 'Producto eliminado');
}


public function inicio() { 
    $proveedores = Proveedor::all(); 
    
    return view('producto/inicio', compact('proveedores'));
}
public function guardar(Request $request) {
    // dd($request->all());
    $producto = new Producto();
    $producto->nombre = $request->input('nombre');
    
    $producto->proveedor_id = $request->input('proveedor_id');
    $producto->descripcion = $request->input('descripcion');
    $producto->precio = $request->input('precio');
    $producto->existencia = $request->input('existencia');
    $producto->estatus = $request->input('estatus');
    $producto->categoria = $request->input('categoria');
    $producto->imagen1 = 'imagenes/productos/producto_default.jpg';
    $producto->imagen2 = 'imagenes/productos/producto_default.jpg';
    $producto->imagen3 = 'imagenes/productos/producto_default.jpg';


    $producto->save();
    

    if ($request->hasFile('imagen1')) {
        $file = $request->file('imagen1');
        $nombre = 'producto_'.$producto->producto_id . '_1.' . $file->getClientOriginalName();
        $ruta = $file->storeAs('imagenes/productos', $nombre, 'public');
        $producto->imagen1 = url('storage/'.$ruta);
    }
      if ($request->hasFile('imagen2')) {
        $file = $request->file('imagen2');
        $nombre = 'producto_'.$producto->producto_id . '_2.' . $file->getClientOriginalName();
        $ruta = $file->storeAs('imagenes/productos', $nombre, 'public');
        $producto->imagen2 = url('storage/'.$ruta);
    }

    if ($request->hasFile('imagen3')) {
        $file = $request->file('imagen3');
        $nombre = 'producto_'.$producto->producto_id . '_3.' . $file->getClientOriginalName();
        $ruta = $file->storeAs('imagenes/productos', $nombre, 'public');
        $producto->imagen3 = url('storage/'.$ruta);
    }

    $producto->save();

    return redirect('/producto')->with('success', 'Producto guardado exitosamente.');
}
}
