<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VistaCliente;
use App\Models\VistaDetallePedido;
use App\Models\VistaDetalleVenta;
use Illuminate\Support\Facades\Auth;


class VistaController extends Controller
{
    //

public function vista_detalle_pedido() {
        $vista_detalle_pedido = VistaDetallePedido::all();
        return view('vistas/vista_detalle_pedido', compact('vista_detalle_pedido'));
}

public function vista_detalle_venta() {
        $datos_detalle_venta = VistaDetalleVenta::all();
        return view('vistas/vista_detalle_venta', compact('datos_detalle_venta'));
          
}

public function vista_clientes() {
     $datos = VistaCliente::all();
        return view('vistas/vista_cliente', compact('datos'));    

}

public function inicio(){
    return view('vistas/inicio');
}
}

// public function index() {
//     $datos = VistaCliente::all();
    
//     return view('vistas/vista_cliente', compact('datos'));
// }
