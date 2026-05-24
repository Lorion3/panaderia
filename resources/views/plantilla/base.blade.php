<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- NAVBAR -->
    <nav class="bg-white border-b border-gray-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4">

            <div class="flex justify-between items-center h-16">

                <!-- LOGO -->
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-blue-600">
                        Panaderia
                    </a>
                </div>

                <!-- MENU DESKTOP -->
                <div class="hidden md:flex items-center space-x-8">

  
            <ul><a href="/" class="hover:text-blue-600">Inicio</a></ul>

            <ul><a href="/administrador" class="hover:text-blue-600">Empleado</a></ul>

            <ul><a href="/cliente" class="hover:text-blue-600">Cliente</a></ul>

            <ul><a href="/pedido" class="hover:text-blue-600">Pedido</a></li></ul>

            <ul><a href="/producto" class="hover:text-blue-600">Producto</a></ul>

            <ul><a href="/proveedor" class="hover:text-blue-600">Proveedor</a></ul>
            
            <ul><a href="/venta" class="hover:text-blue-600">Venta</a></ul>
            
            

                </div>

                <!-- BOTÓN MOBILE -->
                <div class="md:hidden">

                    <button
                        data-collapse-toggle="mobile-menu"
                        type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none">

                        <svg class="w-6 h-6"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16">
                            </path>

                        </svg>
                    </button>

                </div>

            </div>

        </div>

        <!-- MENÚ MOBILE -->
        <div class="hidden md:hidden bg-white border-t" id="mobile-menu">

            <ul class="flex flex-col p-4 space-y-3">

            <li><a href="/" class="hover:text-blue-600">Inicio</a></li>

            <li><a href="/administrador" class="hover:text-blue-600">Empleado</a></li>

            <li><a href="/cliente" class="hover:text-blue-600">Cliente</a></li>

            <li><a href="/pedido" class="hover:text-blue-600">Pedido</a></li>

            <li><a href="/producto" class="hover:text-blue-600">Producto</a></li>

            <li><a href="/proveedor" class="hover:text-blue-600">Proveedor</a></li>

           

            </ul>

        </div>

    </nav>

    <!-- HEADER -->
    <header class="bg-blue-600 text-white py-10 shadow">

        <div class="max-w-7xl mx-auto px-4">

            <h1 class="text-4xl font-bold">
                @yield('header', 'Panel Principal')
            </h1>

            <p class="mt-2 text-blue-100">
                Sistema desarrollado con Laravel 12 y TailwindCSS
            </p>

        </div>

    </header>

    <!-- CONTENIDO -->
    <main class="flex-grow">

        <div class="max-w-7xl mx-auto px-4 py-8">

            <!-- CARD PRINCIPAL -->
            <div class="bg-white rounded-xl shadow-md p-6">

                @yield('dinamico')

            </div>

        </div>

    </main>

    <!-- FOOTER -->
    <footer class="bg-white border-t py-6 mt-10">

        <div class="max-w-7xl mx-auto px-4 text-center text-gray-500">

            © 2026 - 

        </div>

    </footer>

    <!-- FLOWBITE -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</body>
</html>