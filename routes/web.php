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
use App\Http\Controllers\GeoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialController;

use Illuminate\Support\Facades\Http;

// ============================================
// RUTAS PÚBLICAS (Acceso sin autenticación)
// ============================================

// Login
Route::view('/login', '/login/login')->name('login');
Route::post('/login', [SesionController::class, 'login']);

// APIs públicas
Route::get('/api/geolocalizacion', [GeoController::class,'buscar']);
Route::get('/api/clima', [GeoController::class,'clima']);
Route::get('/api/tipodecambio', [GeoController::class,'tipodecambio']);
Route::get('/ubicacion', [GeoController::class, 'ubicacion']);
Route::get('/todo', [GeoController::class, 'todo']); 
Route::post('/reset-ubicacion', [GeoController::class, 'resetUbicacion']);
Route::get('/api/footer-data', [GeoController::class, 'footerData']);

// Prueba MapQuest
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
Route::post('/login', [SesionController::class, 'login']) ;


// ->name('dashboard')







//Acceso restringido
Route::middleware(['auth:admin'])->group(function () {
//Route::get('/vistas/vista_cliente', [VistaController::class, 'index']);
Route::get('/dashboard', [InicioController::class, 'inicio']) ->name('dashboard');
   
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






// Autenticación con Google
Route::get('/auth/google/redirect', [SocialController::class, 'redirect'])->name('google.redirect');
Route::get('/auth/google/callback', [SocialController::class, 'callback'])->name('google.callback');

// ============================================
// RUTAS PROTEGIDAS (Requieren autenticación)
// ============================================
Route::middleware(['auth:admin'])->group(function () {

    // --------------------------------------------
    // DASHBOARD Y VISTAS PRINCIPALES (Ambos roles)
    // --------------------------------------------
    Route::get('/', [InicioController::class, 'inicio']);
    Route::get('/dashboard', [EmpleadoController::class, 'inicio'])->name('dashboard');
    
    // Vistas generales (ambos roles pueden ver)
    Route::get('/vistas', [VistaController::class, 'inicio']);
    Route::get('/vistas/vista_detalle_pedido', [VistaController::class, 'vista_detalle_pedido']);
    Route::get('/vistas/vista_detalle_venta', [VistaController::class, 'vista_detalle_venta']);
    Route::get('/vistas/vista_clientes', [VistaController::class, 'vista_clientes']);
    Route::view('/api/inicio','/api/api');

    // --------------------------------------------
    // RUTAS DE EMPLEADOS (Solo MASTER puede gestionar)
    // --------------------------------------------
    Route::prefix('empleado')->middleware(['admin.master'])->group(function () {
        Route::get('/lista', [EmpleadoController::class, 'listado']);
        Route::get('/', [EmpleadoController::class, 'inicio']);
        Route::get('/formulario', [EmpleadoController::class, 'formulario']);
        Route::post('/guardar', [EmpleadoController::class, 'guardar']);
        Route::get('/edicion/{id}', [EmpleadoController::class, 'editar']);
        Route::post('/eliminar/{id}', [EmpleadoController::class, 'eliminar']);
        Route::get('/cambiar-estado/{id}', [EmpleadoController::class, 'cambiarEstado']);
        Route::get('/mostrar/{id}', [EmpleadoController::class, 'mostrar']);
        Route::post('/actualizar/{id}', [EmpleadoController::class, 'actualizar']);
        Route::get('/borrado/{id}', [EmpleadoController::class, 'mostrar']);
    });

    // --------------------------------------------
    // RUTAS DE CLIENTES (Ambos roles pueden ver, solo MASTER eliminar)
    // --------------------------------------------
    Route::prefix('cliente')->group(function () {
        // Rutas para ambos roles (lectura y edición)
        Route::get('/lista', [ClienteController::class, 'listado']);
        Route::get('/', [ClienteController::class, 'inicio']);
        Route::get('/formulario', [ClienteController::class, 'formulario']);
        Route::post('/guardar', [ClienteController::class, 'guardar']);
        Route::get('/edicion/{id}', [ClienteController::class, 'editar']);
        Route::post('/actualizar/{id}', [ClienteController::class, 'actualizar']);
        Route::get('/mostrar/{id}', [ClienteController::class, 'mostrar']);
        
        // Eliminar - Solo MASTER
        Route::post('/eliminar/{id}', [ClienteController::class, 'eliminar'])
            ->middleware(['admin.master']);
        Route::get('/borrado/{id}', [ClienteController::class, 'mostrar'])
            ->middleware(['admin.master']);
    });

    // --------------------------------------------
    // RUTAS DE PRODUCTOS (Ambos roles pueden ver, solo MASTER eliminar)
    // --------------------------------------------
    Route::prefix('producto')->group(function () {
        // Rutas para ambos roles (lectura y edición)
        Route::get('/', [ProductoController::class, 'inicio']);
        Route::get('/lista', [ProductoController::class, 'listado']);
        Route::get('/inicio', [ProductoController::class, 'inicio']);
        Route::get('/formulario', [ProductoController::class, 'formulario']);
        Route::post('/guardar', [ProductoController::class, 'guardar']);
        Route::get('/editar/{id}', [ProductoController::class, 'editar']);
        Route::put('/actualizar/{id}', [ProductoController::class, 'actualizar']);
        
        // Eliminar - Solo MASTER
        Route::delete('/eliminar/{id}', [ProductoController::class, 'eliminar'])
            ->middleware(['admin.master']);
    });

    // --------------------------------------------
    // RUTAS DE PROVEEDORES (Ambos roles pueden ver, solo MASTER eliminar)
    // --------------------------------------------
    Route::prefix('proveedor')->group(function () {
        // Rutas para ambos roles (lectura y edición)
        Route::get('/lista', [ProveedorController::class, 'listado']);
        Route::get('/', [ProveedorController::class, 'inicio']);
        Route::post('/guardar', [ProveedorController::class, 'guardar']);
        Route::get('/formulario', [ProveedorController::class, 'formulario']);
        Route::get('/edicion/{id}', [ProveedorController::class, 'editar']);
        Route::post('/actualizar/{id}', [ProveedorController::class, 'actualizar']);
        Route::get('/mostrar/{id}', [ProveedorController::class, 'mostrar']);
        
        // Eliminar - Solo MASTER
        Route::post('/eliminar/{id}', [ProveedorController::class, 'eliminar'])
            ->middleware(['admin.master']);
        Route::get('/borrado/{id}', [ProveedorController::class, 'mostrar'])
            ->middleware(['admin.master']);
    });

    // --------------------------------------------
    // RUTAS DE PEDIDOS (Ambos roles pueden ver, solo MASTER eliminar)
    // --------------------------------------------
    Route::prefix('pedido')->group(function () {
        // Rutas para ambos roles (lectura y edición)
        Route::get('/', [PedidoController::class, 'inicio']);
        Route::get('/lista', [PedidoController::class, 'listado']);
        Route::get('/inicio', [PedidoController::class, 'inicio']);
        Route::get('/formulario', [PedidoController::class, 'formulario']);
        Route::get('/detalle', [PedidoController::class, 'detalle']);
        Route::post('/guardar', [PedidoController::class, 'guardar']);
        Route::get('/edicion/{id}', [PedidoController::class, 'editar']);
        Route::post('/actualizar/{id}', [PedidoController::class, 'actualizar']);
        
        // Eliminar - Solo MASTER
        Route::delete('/eliminar/{id}', [PedidoController::class, 'eliminar'])
            ->middleware(['admin.master']);
    });

    // --------------------------------------------
    // RUTAS DE VENTAS (Ambos roles pueden ver, solo MASTER eliminar)
    // --------------------------------------------
    Route::prefix('venta')->group(function () {
        // Rutas para ambos roles (lectura y edición)
        Route::get('/lista', [VentaController::class, 'listado']);
        Route::get('/detalle', [VentaController::class, 'detalle']);
        Route::get('/', [VentaController::class, 'inicio']);
        Route::get('/formulario', [VentaController::class, 'formulario']);
        Route::post('/guardar', [VentaController::class, 'guardar']);
        Route::get('/editar/{id}', [VentaController::class, 'editar']);
        Route::post('/actualizar/{id}', [VentaController::class, 'actualizar']);
        
        // Eliminar - Solo MASTER
        Route::delete('/eliminar/{id}', [VentaController::class, 'eliminar'])
            ->middleware(['admin.master']);
    });

    // --------------------------------------------
    // LOGOUT (Ambos roles)
    // --------------------------------------------
    Route::post('/logout', [SesionController::class, 'logout'])->name('logout');
});