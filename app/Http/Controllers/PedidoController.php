<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Proveedor;
use App\Models\Empleado;

class PedidoController extends Controller
{
    public function listado() {
        $pedidos = Pedido::with('proveedor', 'detalle_pedidos')->get();
        return view('pedido/lista', compact('pedidos'));
    }

    public function detalle() {
        $pedidos = Pedido::with('proveedor')->get();
        return view('pedido/detalle', compact('pedidos'));
    }

    public function inicio() {
        $proveedores = Proveedor::all(); 
        $empleados = Empleado::all();
        return view('pedido/inicio', compact('proveedores', 'empleados'));
    }

    public function formulario() {
        $proveedores = Proveedor::all(); 
        $empleados = Empleado::all();
        return view('pedido/formulario', compact('proveedores', 'empleados'));
    }

    public function guardar(Request $request) {
        $pedido = new Pedido();
        $pedido->proveedor_id = $request->input('proveedor_id');
         $pedido->empleado_id = $request->input('empleado_id');
        $pedido->total = $request->input('total');
        $pedido->estatus = $request->input('estatus');
        $pedido->save();

        return redirect('/pedido/lista')->with('success', 'Pedido guardado');
    }

    public function editar($id) {
        $pedido = Pedido::find($id);
        $proveedores = Proveedor::all();
        $empleados = Empleado::all();
        return view('pedido/editar', compact('pedido', 'proveedores', 'empleados'));
    }

    public function actualizar(Request $request, $id) {
        $pedido = Pedido::find($id);
        $pedido->proveedor_id = $request->input('proveedor_id');
        $pedido->empleado_id = $request->input('empleado_id');
        $pedido->total = $request->input('total');
        $pedido->estatus = $request->input('estatus');
        $pedido->save();

        return redirect('/pedido/lista')->with('success', 'Pedido actualizado');
    }

    public function eliminar($id) {
        $pedido = Pedido::find($id);
        $pedido->delete();
        return redirect('/pedido/lista')->with('success', 'Pedido eliminado');
    }
}