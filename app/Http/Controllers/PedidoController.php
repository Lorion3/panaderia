<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Proveedor;
use App\Models\Empleado;

class PedidoController extends Controller
{
    public function listado() {
        $pedidos = Pedido::all();
        return view('pedido/lista', compact('pedidos'));
    }

    public function detalle() {
        return view('pedido/detalle');
    }

    public function inicio() {
        $proveedores = Proveedor::all(); 
        $empleados = Empleado::all();
        return view('pedido/inicio', compact('proveedores', 'empleados'));
    }

    public function guardar(Request $request) {
     
        $pedido = new Pedido();
        
        $pedido->proveedor_id = $request->input('proveedor_id');
        $pedido->empleado_id = $request->input('empleado_id');
        $pedido->total = $request->input('total');
        $pedido->estatus = $request->input('estatus', 'realizado'); // valor por defecto
        
       
        $pedido->save();

        return redirect('/pedido/lista')->with('success', 'Pedido guardado exitosamente.');
    }
}