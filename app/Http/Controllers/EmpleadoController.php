<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class EmpleadoController extends Controller 
{

   public function listado() {
    return view('empleado/lista');
}


public function inicio() {
    return view('empleado/inicio');

}
}