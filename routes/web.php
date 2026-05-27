<?php

use Illuminate\Support\Facades\Route;


Route::view('/','inicio');
Route::view('/cliente','/cliente/inicio');

Route::view('/cliente/tabla','/cliente/tabla');

Route::view('/empleado','/administrador/inicio');

Route::view('/empleado','/empleado/inicio');


Route::view('/empleado/tabla','/empleado/tabla');
//-----------------------------PEDIDOS
Route::view('/pedido','/pedido/inicio');

Route::view('/pedido/tabla','/pedido/tabla');
//----------------------------------------PRODUCTOS
Route::view('/producto','/producto/inicio');

Route::view('/producto/tabla','/producto/tabla');
//------------------------------------PROVEEDORES
Route::view('/proveedor','/proveedor/inicio');
Route::view('/venta','/venta/inicio');
        // Route::view('/carts','/componentes/carts');

Route::view('/proveedor/tabla','/proveedor/tabla');
//--------------------------------------------------venta
Route::view('venta','/venta/inicio');

Route::view('venta/tabla','/venta/tabla');
Route::view('venta/detalle','/venta/detalle');
ROute::view('pedido/detalle','/pedido/detalle');
