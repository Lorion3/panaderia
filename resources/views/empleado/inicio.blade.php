@extends('/plantilla/base')

@section('dinamico')
  <flux:heading size="xl" level="1" class="mt-2 text-gray-600 dark:text-gray-400"> Bienvenido al Sistema de
        Empleados
    </flux:heading>

 <a href="/empleado/lista"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Ver Empleados
    </a>

        <a href="/empleado/edicion/1"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Editar Empleado
    </a>

     {{-- <a href="/empleado/mostrar/1"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Mostrar Empleado
    </a> --}}
    <a href="/empleado/borrado/1"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Eliminar Empleado
    </a>
 
    <a href="/empleado/formulario"
        class="bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Agregar Empleado 
    </a>
<div class="mb-6">
    <flux:text class="mt-2 text-gray-600 dark:text-gray-400">
        Resumen general de empleados registrados
    </flux:text>
</div>

<flux:separator variant="subtle" />

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">

    <div
        class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-3 shadow-md hover:shadow-lg transition">

        <div class="flex items-center justify-between mb-4">

            <div>

                <flux:text class="text-gray-600 dark:text-gray-400 text-sm font-medium">
                    Total Empleados
                </flux:text>

                <flux:heading size="lg" level="3" class="mt-2 text-gray-900 dark:text-white">
                    {{ $totalEmpleados }}
                </flux:heading>

                <flux:text class="text-sm text-gray-500">
                    Empleados Activos
                </flux:text>

                <flux:heading size="xl" level="2" class="mt-2">
                    {{ $empleadosActivos }}
                </flux:heading>

                <flux:text class="text-sm text-gray-500">
                    Empleados Inactivos
                </flux:text>

                <flux:heading size="xl" level="2" class="mt-2">
                    {{ $empleadosInactivos }}
                </flux:heading>

                <flux:text class="text-sm text-gray-500 mt-4">
                    Administradores: <strong>{{ $administradores }}</strong>
                </flux:text>

                <flux:text class="text-sm text-gray-500">
                    Empleados: <strong>{{ $empleados }}</strong>
                </flux:text>

            </div>

            <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-lg">
                {{-- Icono opcional --}}
            </div>

        </div>

        <div class="h-20">
            <canvas id="chartEmpleados"></canvas>
        </div>

    </div>

</div>

<script>

document.addEventListener('DOMContentLoaded', function () {

    const ctx = document.getElementById('chartEmpleados');

    new Chart(ctx, {

        type: 'bar',

        data: {

            labels: ['Activos', 'Inactivos'],

            datasets: [{

                data: [
                    {{ $empleadosActivos }},
                    {{ $empleadosInactivos }}
                ],

                backgroundColor: [
                    '#22C55E',
                    '#EF4444'
                ],

                borderRadius: 10

            }]

        },

        options: {

            indexAxis: 'y',

            responsive: true,

            maintainAspectRatio: false,

            plugins: {

                legend: {
                    display: false
                }

            },

            scales: {

                x: {
                    beginAtZero: true
                }

            }

        }

    });

});

</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
 
   