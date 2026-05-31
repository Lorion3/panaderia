<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller 
{

   public function listado() {
    $empleados = Empleado::all();
    return view('empleado/lista', compact('empleados'));
}


public function inicio() {
    return view('empleado/inicio');

}
}