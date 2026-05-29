<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //

     public function listado() {
    return view('cliente/lista');
}

public function inicio() {
    return view('cliente/inicio');
}
}