<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Mi Panadería')</title>

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
                    <ul><a href="/empleado" class="hover:text-blue-600">Empleado</a></ul>
                    <ul><a href="/cliente" class="hover:text-blue-600">Cliente</a></ul>
                    <ul><a href="/pedido" class="hover:text-blue-600">Pedido</a></ul>
                    <ul><a href="/producto" class="hover:text-blue-600">Producto</a></ul>
                    <ul><a href="/proveedor" class="hover:text-blue-600">Proveedor</a></ul>
                    <ul><a href="/venta" class="hover:text-blue-600">Venta</a></ul>
                    <ul><a href="/vistas" class="hover:text-blue-600">Vistas</a></ul>
                </div>

                <!-- BOTÓN MOBILE -->
                <div class="md:hidden">
                    <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- MENÚ MOBILE -->
        <div class="hidden md:hidden bg-white border-t" id="mobile-menu">
            <ul class="flex flex-col p-4 space-y-3">
                <li><a href="/" class="hover:text-blue-600">Inicio</a></li>
                <li><a href="/empleado" class="hover:text-blue-600">Empleado</a></li>
                <li><a href="/cliente" class="hover:text-blue-600">Cliente</a></li>
                <li><a href="/pedido" class="hover:text-blue-600">Pedido</a></li>
                <li><a href="/producto" class="hover:text-blue-600">Producto</a></li>
                <li><a href="/proveedor" class="hover:text-blue-600">Proveedor</a></li>
            </ul>
        </div>
    </nav>

    <!-- CONTENIDO -->
    <main class="flex-grow">
        <div class="max-w-7xl mx-auto px-4 py-8">
            <div class="bg-white rounded-xl shadow-md p-6">
                @yield('dinamico')
            </div>
        </div>
    </main>

    <!-- FOOTER CON DATOS DINÁMICOS -->
    <footer class="bg-white border-t py-4 mt-10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                
                <!-- Copyright -->
                <div class="text-gray-500 text-sm">
                    &copy; {{ date('Y') }} Panadería. Todos los derechos reservados.
                </div>

                <!-- Contenedor de datos dinámicos -->
                <div id="footer-data" class="flex flex-wrap items-center gap-4 text-sm">
                    <!-- Loading -->
                    <span class="text-gray-400">
                        <svg class="inline animate-spin h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Cargando datos...
                    </span>
                </div>

            </div>
        </div>
    </footer>

    <!-- FLOWBITE -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

   
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Función para obtener y mostrar datos del footer
            function loadFooterData() {
                const container = document.getElementById('footer-data');
                
                // Si el navegador soporta geolocalización, obtener coordenadas exactas
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        function(position) {
                            // Usar coordenadas exactas del navegador
                            const lat = position.coords.latitude;
                            const lon = position.coords.longitude;
                            fetchFooterData(lat, lon);
                        },
                        function(error) {
                            // Si no se puede obtener ubicación, usar IP
                            console.log('Usando ubicación por IP:', error.message);
                            fetchFooterData();
                        },
                        { timeout: 5000 }
                    );
                } else {
                    // Si no soporta geolocalización, usar IP
                    fetchFooterData();
                }
            }

            function fetchFooterData(lat = null, lon = null) {
                const container = document.getElementById('footer-data');
                let url = '/api/footer-data';
                
                if (lat && lon) {
                    url += `?lat=${lat}&lon=${lon}`;
                }

                fetch(url, {
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Error en la respuesta');
                    }
                    return response.json();
                })
                .then(data => {
                    renderFooterData(data);
                })
                .catch(error => {
                    console.error('Error:', error);
                    container.innerHTML = `
                        <span class="text-gray-400 text-sm">⚠️ No se pudo cargar la información</span>
                    `;
                });
            }

            function renderFooterData(data) {
                const container = document.getElementById('footer-data');
                let html = '';

                // Ubicación
                if (data.location) {
                    html += `
                        <div class="flex items-center text-gray-600">
                            <svg class="w-4 h-4 mr-1 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>${data.location.city}, ${data.location.country}</span>
                        </div>
                    `;
                }

                // Clima
                if (data.weather) {
                    const iconUrl = `https://openweathermap.org/img/wn/${data.weather.icon}.png`;
                    html += `
                        <div class="flex items-center text-gray-600">
                            <img src="${iconUrl}" alt="clima" class="w-6 h-6 mr-1">
                            <span>${data.weather.temp}°C, ${data.weather.description}</span>
                        </div>
                    `;
                }

                // Tipo de cambio
                if (data.exchange && data.exchange.rates) {
                    html += `
                        <div class="flex items-center text-gray-600">
                            <svg class="w-4 h-4 mr-1 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>
                                1 ${data.exchange.base} = 
                                ${data.exchange.rates.USD ? data.exchange.rates.USD.toFixed(2) : 'N/A'} USD
                                ${data.exchange.rates.EUR ? `| ${data.exchange.rates.EUR.toFixed(2)} EUR` : ''}
                            </span>
                        </div>
                    `;
                }

                container.innerHTML = html || '<span class="text-gray-400 text-sm">Datos no disponibles</span>';
            }

            loadFooterData();

            
           
        });
    </script>
</body>
</html>