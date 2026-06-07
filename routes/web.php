<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;   
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\InicioController;

//Route::view('/','inicio');
//Route::view('/cliente','/cliente/inicio');

//Route::view('/empleado','/empleado/inicio');


//Route::view('/pedido','/pedido/inicio');

//Route::view('/producto','/producto/inicio');


//Route::view('/proveedor','/proveedor/inicio');
//Route::view('/venta','/venta/inicio');


//Route::view('venta/lista','/venta/lista');
//Route::view('venta/detalle','/venta/detalle');

//Route::view('pedido/detalle','/pedido/detalle');

//--------------------------------------------------->Controlladores<--------------------------------------------------
//--------------------Rutas Empleados
Route::get('/empleado/lista', [EmpleadoController::class, 'listado']);
Route::get('/empleado', [EmpleadoController::class, 'inicio']);
Route::get('/empleado/formulario', [EmpleadoController::class, 'formulario']);
Route::post('/empleado/guardar', [EmpleadoController::class, 'guardar']);
Route::get('/empleado/edicion/{id}', [EmpleadoController::class, 'actualizar']);
Route::post('/empleado/eliminar/{id}', [EmpleadoController::class, 'eliminar']);
Route::post('/empleado/cambiar-estado/{id}', [EmpleadoController::class, 'cambiarEstado']);
Route::get('/empleado/mostrar/{id}', [EmpleadoController::class, 'mostrar']);




//--------------------Rutas Ventas
Route::get('/venta/lista', [VentaController::class, 'listado']);
Route::get('/venta/detalle', [VentaController::class, 'detalle']);
Route::get('/venta', [VentaController::class, 'inicio']);
Route::get('/venta/formulario', [VentaController::class, 'formulario']);


//--------------------Rutas Productos
Route::get('/producto/lista', [ProductoController::class, 'listado']);
Route::get('/producto', [ProductoController::class, 'inicio']);
Route::get('/producto/formulario', [ProductoController::class, 'formulario']);

//----------------------------Api
Route::view('/api/inicio','/api/api');


//--------------------Rutas Proveedores
Route::get('/proveedor/lista', [ProveedorController::class, 'listado']);
Route::get('/proveedor', [ProveedorController::class, 'inicio']);
Route::post('/proveedor/guardar', [ProveedorController::class, 'guardar']);
Route::get('/proveedor/formulario', [ProveedorController::class, 'formulario']);

//--------------------Rutas Clientes
Route::get('/cliente/lista', [ClienteController::class, 'listado']);
Route::get('/cliente', [ClienteController::class, 'inicio']);
Route::post('/cliente/guardar', [ClienteController::class, 'guardar']);
Route::get('/cliente/formulario', [ClienteController::class, 'formulario']);


//--------------------Rutas Pedidos
Route::get('/pedido/lista', [PedidoController::class, 'listado']);
Route::get('/pedido/detalle', [PedidoController::class, 'detalle']);
Route::get('/pedido', [PedidoController::class, 'inicio']);
Route::get('/pedido/formulario', [PedidoController::class, 'formulario']);

//---------------------Rutas Inicio
Route::get('/', [InicioController::class, 'inicio']);


