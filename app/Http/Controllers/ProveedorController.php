<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
class ProveedorController extends Controller
{
    //

    public function listado() {
        $proveedores = Proveedor::all();
        return view('proveedor/lista', compact('proveedores'));
    }
public function inicio() {
    return view('proveedor/inicio');
}
}
