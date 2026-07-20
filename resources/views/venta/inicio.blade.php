@extends('/plantilla/base')

@section('dinamico')

  <flux:heading size="xl" level="1" class="mt-2 text-gray-600 dark:text-gray-400"> Bienvenido al Sistema de
        Ventas
    </flux:heading>


    <a href="/venta/formulario"
        class="bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Agregar Venta
    </a>
    <a href="/venta/lista"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Ver Ventas
    </a>

    <a href="/venta/eliminar/"
        class="bg-red-600 hover:bg-red-700 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Eliminar Venta
    </a>
    <a href="/venta/editar/"
        class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Editar Venta
    </a>

    <div class="mb-6">
        <flux:text class="mt-2 text-gray-600 dark:text-gray-400">
            Resumen general de ventas registradas
        </flux:text>
    </div>

    <flux:separator variant="subtle" />

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">

        <div
            class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-3 shadow-md hover:shadow-lg transition">

            <div class="flex items-center justify-between mb-4">

                <div>

                    <flux:text class="text-gray-600 dark:text-gray-400 text-sm font-medium">
                        Total Ventas
                    </flux:text>

                    <flux:heading size="lg" level="3" class="mt-2 text-gray-900 dark:text-white">
                        {{ $totalVentas }}
                    </flux:heading>

                    <flux:text class="text-sm text-gray-500">
                        Ventas Realizadas
                    </flux:text>

                    <flux:heading size="xl" level="2" class="mt-2">
                        {{ $ventasRealizadas }}
                    </flux:heading>

                    <flux:text class="text-sm text-gray-500">
                        Ventas Canceladas
                    </flux:text>

                    <flux:heading size="xl" level="2" class="mt-2">
                        {{ $ventasCanceladas }}
                    </flux:heading>

                </div>

                <div class="p-3 bg-green-100 dark:bg-green-900/30 rounded-lg">
                    {{-- Icono opcional --}}
                </div>

            </div>

            <div class="h-20">
    <canvas id="chartVentas"></canvas>
</div>
            </div>

        </div>

    </div>

    <div class="h-20">
    <canvas id="chartVentas"></canvas>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const ctx = document.getElementById('chartVentas');

    new Chart(ctx, {
        type: 'bar',

        data: {
            labels: ['Realizadas', 'Canceladas'],

            datasets: [{
                data: [
                    {{ $ventasRealizadas }},
                    {{ $ventasCanceladas }}
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
