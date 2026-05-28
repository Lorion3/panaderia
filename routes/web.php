<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;   
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;


Route::view('/','inicio');
Route::view('/cliente','/cliente/inicio');



Route::view('/empleado','/empleado/inicio');

Route::view('/empleado','/empleado/inicio');


Route::view('/pedido','/pedido/inicio');

Route::view('/producto','/producto/inicio');


Route::view('/proveedor','/proveedor/inicio');
Route::view('/venta','/venta/inicio');


Route::view('venta','/venta/inicio');

//Route::view('venta/lista','/venta/lista');
Route::view('venta/detalle','/venta/detalle');
Route::view('pedido/detalle','/pedido/detalle');


Route::get('/empleado/lista', [EmpleadoController::class, 'listado']);
Route::get('/venta/lista', [VentaController::class, 'listado']);
Route::get('/producto/lista', [ProductoController::class, 'listado']);
Route::get('/proveedor/lista', [ProveedorController::class, 'listado']);
Route::get('/cliente/lista', [ClienteController::class, 'listado']);
Route::get('/pedido/lista', [PedidoController::class, 'listado']);