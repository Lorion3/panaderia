<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;   
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\VistaController;
use App\Http\Controllers\SesionController;


use Illuminate\Support\Facades\Http;

use App\Http\Controllers\GeoController;
use App\Http\Controllers\AuthController;


//Route::view('/','inicio');
//Route::view('/cliente','/cliente/inicio');

//Route::view('/empleado','/empleado/inicio');
Route::view('/login','/login/login');
//Route::view('/pedido','/pedido/inicio');

//Route::view('/producto','/producto/inicio');


//Route::view('/proveedor','/proveedor/inicio');
//Route::view('/venta','/venta/inicio');


//Route::view('venta/lista','/venta/lista');
//Route::view('venta/detalle','/venta/detalle');

//Route::view('pedido/detalle','/pedido/detalle');





Route::get('/prueba-mapquest', function () {

    $response = Http::get(
        'https://www.mapquestapi.com/geocoding/v1/address',
        [
            'key' => env('MAPQUEST_KEY'),
            'location' => 'Guadalajara, Jalisco, Mexico'
        ]
    );

    $data = $response->json();

    $ubicacion = $data['results'][0]['locations'][0];

    dd($ubicacion);
});

Route::get('/api/geolocalizacion', [GeoController::class,'buscar']);
Route::get('/api/clima', [GeoController::class,'clima']);
Route::get('/api/tipodecambio', [GeoController::class,'tipodecambio']);
Route::get('/ubicacion', [GeoController::class, 'ubicacion']);
    Route::get('/todo', [GeoController::class, 'todo']); 
    Route::post('/reset-ubicacion', [GeoController::class, 'resetUbicacion']);
    Route::get('/api/footer-data', [GeoController::class, 'footerData']);





 // Acceso público
Route::view('/login', '/login/login')->name('login');
Route::post('/login', [SesionController::class, 'login']);



//Acceso restringido
Route::middleware(['auth:admin'])->group(function () {
//Route::get('/vistas/vista_cliente', [VistaController::class, 'index']);
Route::get('/dashboard', [EmpleadoController::class, 'inicio'])->name('dashboard');
   
//--------------------------------------------------->Controlladores<--------------------------------------------------
//--------------------Rutas Empleados
Route::get('/empleado/lista', [EmpleadoController::class, 'listado']);
Route::get('/empleado', [EmpleadoController::class, 'inicio']);
Route::get('/empleado/formulario', [EmpleadoController::class, 'formulario']);
Route::post('/empleado/guardar', [EmpleadoController::class, 'guardar']);
Route::get('/empleado/edicion/{id}', [EmpleadoController::class, 'editar']);
Route::post('/empleado/eliminar/{id}', [EmpleadoController::class, 'eliminar']);
Route::get('/empleado/cambiar-estado/{id}', [EmpleadoController::class, 'cambiarEstado']);
Route::get('/empleado/mostrar/{id}', [EmpleadoController::class, 'mostrar']);
Route::post('/empleado/actualizar/{id}', [EmpleadoController::class, 'actualizar']);
Route::get('/empleado/borrado/{id}', [EmpleadoController::class, 'mostrar']);


//--------------------Rutas Clientes
Route::get('/cliente/lista', [ClienteController::class, 'listado']);
Route::get('/cliente', [ClienteController::class, 'inicio']);
Route::post('/cliente/guardar', [ClienteController::class, 'guardar']);
Route::get('/cliente/formulario', [ClienteController::class, 'formulario']);
Route::get('/cliente/edicion/{id}', [ClienteController::class, 'editar']);
Route::post('/cliente/actualizar/{id}', [ClienteController::class, 'actualizar']);
Route::get('/cliente/borrado/{id}', [ClienteController::class, 'mostrar']);
Route::get('/cliente/mostrar/{id}', [ClienteController::class, 'mostrar']);
Route::post('/cliente/eliminar/{id}', [ClienteController::class, 'eliminar']);

//--------------------Rutas Ventas
Route::get('/venta/lista', [VentaController::class, 'listado']);
Route::get('/venta/detalle', [VentaController::class, 'detalle']);
Route::get('/venta', [VentaController::class, 'inicio']);
Route::get('/venta/formulario', [VentaController::class, 'formulario']);

Route::post('/venta/guardar', [VentaController::class, 'guardar']);
Route::get('/venta/editar/{id}', [VentaController::class, 'editar']);
Route::post('/venta/actualizar/{id}', [VentaController::class, 'actualizar']);
Route::delete('/venta/eliminar/{id}', [VentaController::class, 'eliminar']);

//--------------------Rutas Productos
Route::get('/producto', [ProductoController::class, 'inicio']);
Route::get('/producto/lista', [ProductoController::class, 'listado']);
Route::get('/producto/inicio', [ProductoController::class, 'inicio']);
Route::get('/producto/formulario', [ProductoController::class, 'formulario']);
Route::post('/producto/guardar', [ProductoController::class, 'guardar']);
Route::get('/producto/editar/{id}', [ProductoController::class, 'editar']);
Route::put('/producto/actualizar/{id}', [ProductoController::class, 'actualizar']);
Route::delete('/producto/eliminar/{id}', [ProductoController::class, 'eliminar']);
//----------------------------Api
Route::view('/api/inicio','/api/api');


//--------------------Rutas Proveedores
Route::get('/proveedor/lista', [ProveedorController::class, 'listado']);
Route::get('/proveedor', [ProveedorController::class, 'inicio']);
Route::post('/proveedor/guardar', [ProveedorController::class, 'guardar']);
Route::get('/proveedor/formulario', [ProveedorController::class, 'formulario']);
Route::get('/proveedor/edicion/{id}', [ProveedorController::class, 'editar']);
Route::post('/proveedor/actualizar/{id}', [ProveedorController::class, 'actualizar']);
Route::post('/proveedor/eliminar/{id}', [ProveedorController::class, 'eliminar']);
Route::get('/proveedor/borrado/{id}', [ProveedorController::class, 'mostrar']);
Route::get('/proveedor/mostrar/{id}', [ProveedorController::class, 'mostrar']);



//--------------------Rutas Pedidos
Route::get('/pedido', [PedidoController::class, 'inicio']);
Route::get('/pedido/lista', [PedidoController::class, 'listado']);
Route::get('/pedido/inicio', [PedidoController::class, 'inicio']);
Route::get('/pedido/formulario', [PedidoController::class, 'formulario']);
Route::get('/pedido/detalle', [PedidoController::class, 'detalle']);
Route::post('/pedido/guardar', [PedidoController::class, 'guardar']);
Route::get('/pedido/edicion/{id}', [PedidoController::class, 'editar']);
Route::post('/pedido/actualizar/{id}', [PedidoController::class, 'actualizar']);
Route::delete('/pedido/eliminar/{id}', [PedidoController::class, 'eliminar']);
//---------------------Rutas Inicio
Route::get('/', [InicioController::class, 'inicio']);


//---------------------Rutas Vistas
Route::get('/vistas/vista_detalle_pedido', [VistaController::class, 'vista_detalle_pedido']);
Route::get('/vistas/vista_detalle_venta', [VistaController::class, 'vista_detalle_venta']);
Route::get('/vistas/vista_clientes', [VistaController::class, 'vista_clientes']);
Route::get('/vistas', [VistaController::class, 'inicio']);

//Integren aquí sus CRUDs previos
Route::post('/logout', [SesionController::class, 'logout'])->name('logout');
});



use App\Http\Controllers\SocialController;

Route::get('/auth/google/redirect', [SocialController::class, 'redirect'])->name('google.redirect');
Route::get('/auth/google/callback', [SocialController::class, 'callback'])->name('google.callback');