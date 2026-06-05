<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Producto;
class VentaController extends Controller
{
    //

    public function listado() {
    $ventas = Venta::all();
    return view('venta/lista', compact('ventas'));
}
public function detalle() {
    return view('venta/detalle');
}
public function inicio() {
    $clientes = Cliente::all();
    $empleados = Empleado::all();
    $productos = Producto::all();
    return view('venta/inicio', compact('clientes', 'empleados', 'productos'));
}
public function guardar(Request $request) {
    //dd($request->all());
    $venta = new Venta();
    
    $venta->total = $request->input('total');
    $venta->cliente_id = $request->input('cliente_id');
    $venta->empleado_id = $request->input('empleado_id');
    $venta->status = $request->input('status');
    $venta->impuesto = $request->input('impuesto');
    $venta->precio = $request->input('precio');

    $venta->save();

    return redirect('/venta')->with('success', 'Venta guardada exitosamente.');
}
}
