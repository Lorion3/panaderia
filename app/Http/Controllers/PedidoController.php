<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    //
    public function listado() {
    return view('pedido/lista');
}

public function detalle() {
    return view('pedido/detalle');
}
public function inicio() {
    return view('pedido/inicio');
}
}
