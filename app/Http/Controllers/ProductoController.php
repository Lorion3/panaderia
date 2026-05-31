<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
class ProductoController extends Controller
{
    //

    public function listado() {
        $productos = Producto::all();
        return view('producto/lista', compact('productos'));
    }

public function inicio() {
    return view('producto/inicio');
}
}
