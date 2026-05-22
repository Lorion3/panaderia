<?php

use Illuminate\Support\Facades\Route;

Route::view('/','welcome');
Route::view('/cliente','/cliente/inicio');
//carpeta y la raiz a donde quiero entrar
//eror 404, carpeta no escrita correcta
//error más complejo es por la raiz
Route::view('/administrador','/administrador/inicio');
Route::view('/pedido','/pedido/inicio');
Route::view('/producto','/producto/inicio');
Route::view('/proveedor','/proveedor/inicio');
Route::view('venta','/venta/inicio');