<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //

    public function listado() {
    return view('producto/lista');
}
}
