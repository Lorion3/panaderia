<?php

use Illuminate\Support\Facades\Route;


Route::view('/','inicio');
//-------------------------------------CLIENTES
Route::view('/cliente','/cliente/inicio');

Route::view('/cliente/tabla','/cliente/tabla');
//carpeta y la raiz a donde quiero entrar
//eror 404, carpeta no escrita correcta
//error más complejo es por la raiz
//----------------------------------EMPLEADOS
Route::view('/administrador','/administrador/inicio');

Route::view('/administrador/tabla','/administrador/tabla');
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
