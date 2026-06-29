@extends('/plantilla/base')

@section('dinamico')
<!DOCTYPE html>
<html lang="en">
<header class="bg-blue-600 text-white py-10 shadow">

        <div class="max-w-7xl mx-auto px-4">

            <h1 class="text-4xl font-bold">
                @yield('header', 'Panel Principal')
            </h1>

            <img src="https://thumbs.dreamstime.com/b/plantilla-de-banner-pan-fresco-publicidad-en-panader%C3%ADa-horizontal-aislada-fondo-blanco-238177193.jpg" alt="baner" style="width: 100%; height: auto; margin-top: 20px; border-radius: 10px;">

        </div>

    </header>
    
<body>
    <section class="text-center mt-10">
        <h2 class="text-2xl font-semibold mb-4">Bienvenido a la Panadería</h2>
        <p class="text-gray-600 mb-6">Explora nuestros productos, proveedores, ventas y pedidos.</p>
        <a href="/login"
            class="bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
            Iniciar Sesión
        </a>
    </section>

        <!-- #region Botones -->


   
     <a href="/producto/lista"

        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Ver Productos    
    </a> <a href="/proveedor/lista"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Ver proveedores
    </a>  <a href="/venta/lista"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Ver ventas
    
    </a> <a href="/pedido/lista"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Ver pedidos
    </a>

    
   
      </a> <a href="/cliente/lista"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Ver clientes
    </a>
        <!-- #endregion -->
        <a href="/api/geolocalizacion"
        class="bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Ver API
    </a>

</body>
</html>
 

@endsection