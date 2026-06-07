<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //

    public function listado()
    {
        $clientes = Cliente::all();

        return view('cliente/lista', compact('clientes'));
    }

    public function formulario()
    {
        return view('cliente/formulario');
    }

    public function inicio()
    {
        return view('cliente/inicio');
    }

    public function guardar(Request $request)
    {
        //dd($request->all());
        $cliente = new Cliente();
        $cliente->nombre = $request->input('nombre');
        $cliente->apellido_materno = $request->input('apellido_materno');
        $cliente->apellido_paterno = $request->input('apellido_paterno');
        $cliente->correo = $request->input('correo');
        $cliente->telefono = $request->input('telefono');
        $cliente->contrasena = $request->input('contrasena');
        $cliente->estatus = $request->input('estatus');
        $cliente->usuario = $request->input('usuario');
        $cliente->direccion = $request->input('direccion');
        $cliente->imagen = $request->input('imagen');

        $cliente->save();

        return redirect('/cliente')->with('success', 'Cliente guardado exitosamente.');
    }
}
