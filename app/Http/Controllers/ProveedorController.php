<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    //

    public function listado() {
    return view('proveedor/lista');
}
public function inicio() {
    return view('proveedor/inicio');
}
}
