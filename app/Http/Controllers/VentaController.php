<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentaController extends Controller
{
    //

    public function listado() {
    return view('venta/lista');
}
public function detalle() {
    return view('venta/detalle');
}
public function inicio() {
    return view('venta/inicio');
}
}
