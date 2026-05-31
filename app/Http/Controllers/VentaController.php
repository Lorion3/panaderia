<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
class VentaController extends Controller
{
    //

    public function listado() {
    $ventas = Venta::all();
    return view('venta/lista', compact('ventas'));
}
public function detalle() {
    return view('venta/detalle');
}
public function inicio() {
    return view('venta/inicio');
}
}
