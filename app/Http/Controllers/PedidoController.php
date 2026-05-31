<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
class PedidoController extends Controller
{
    //
    public function listado() {
    $pedidos = Pedido::all();
    return view('pedido/lista', compact('pedidos'));
}

public function detalle() {
    return view('pedido/detalle');
}
public function inicio() {
    return view('pedido/inicio');
}
}
