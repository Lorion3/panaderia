<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\models\Proveedor;
use App\models\Empleado;
class PedidoController extends Controller
{
    //
    public function listado() {
    $pedidos = Pedido::all();
    return view('pedido/lista', compact('pedidos'));
}

public function formulario() {
    return view('pedido/formulario');
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
    //dd($request->all());
    $pedido = new Pedido();
    
    $pedido->total = $request->input('total');
    $pedido->cliente_id = $request->input('cliente_id');
    $pedido->empleado_id = $request->input('empleado_id');
    $pedido->status = $request->input('status');

    $pedido->precio = $request->input('precio');
    $pedido->proveedor_id = $request->input('proveedor_id');
$pedido->cantidad = $request->input('cantidad');
$pedido->impuesto = $request->input('impuesto');
$pedido->total = $request->input('total');
    $pedido->save();

    return redirect('/pedido/')->with('success', 'Pedido guardado exitosamente.');
}
}