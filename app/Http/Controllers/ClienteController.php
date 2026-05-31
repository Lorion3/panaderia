<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //

     public function listado() {
        $clientes = Cliente::all();

    return view('cliente/lista', compact('clientes'));
}

public function inicio() {
    return view('cliente/inicio');
}
}