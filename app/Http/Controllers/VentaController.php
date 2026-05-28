<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentaController extends Controller
{
    //

    public function listado() {
    return view('venta/lista');
}
}
