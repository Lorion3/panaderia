@extends('/plantilla/base')

@section('dinamico')
    <flux:heading size="xl" level="1" class="mt-2 text-gray-600 dark:text-gray-400"> Bienvenido al Sistema de
        Clientes
    </flux:heading>

    <a href="/cliente/formulario"
        class="bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Agregar Cliente
    </a>
    <a href="/cliente/lista"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Ver Clientes
    </a>
    <a href="/cliente/edicion/1"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Editar Cliente
    </a>
    <a href="/cliente/borrado/1"
        class="bg-red-600 hover:bg-red-700 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Eliminar Cliente
    </a>
    {{-- <x-layouts.app :title="Sistema de Clientes"> --}}

    <div class="mb-6">
        <flux:text class="mt-2 text-gray-600 dark:text-gray-400">
            Resumen general de clientes registrados
        </flux:text>
    </div>
    <flux:separator variant="subtle" />
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        <div
            class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-3 shadow-md hover:shadow-lg transition">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <flux:text class="text-gray-600 dark:text-gray-400 text-sm font-medium">
                        Total Clientes
                    </flux:text>
                    <flux:heading size="lg" level="3" class="mt-2 text-gray-900 dark:text-white">
                        {{ $totalClientes ?? 0 }}
                    </flux:heading>
                    {{-- <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-4 shadow-md"> --}}
                    <flux:text class="text-sm text-gray-500">
                        Clientes Activos
                    </flux:text>
                    <flux:heading size="xl" level="2" class="mt-2">
                        {{ $clientesActivos }}
                    </flux:heading>
                    <flux:text class="text-sm text-gray-500">
                        Clientes Inactivos
                    </flux:text>
                    <flux:heading size="xl" level="2" class="mt-2">
                        {{ $clientesInactivos }}
                    </flux:heading>
                    {{-- <flux:badge color="red">
                  Inactivos: {{ $clientesInactivos }}
                 </flux:badge> --}}
                    {{-- </div> --}}
                </div>
                <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-lg">
                    {{-- Aquí puedes poner un icono --}}
                </div>
            </div>
            <div class="h-12 -mt-6">
                <canvas id="chartClientes" class="w-full block" height="48"></canvas>
                <canvas id="chartClientes"></canvas>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const ctx = document.getElementById('chartClientes');

    new Chart(ctx, {

        type: 'bar',

        data: {

            labels: ['Activos', 'Inactivos'],

            datasets: [{

                data: [
                    {{ $clientesActivos }},
                    {{ $clientesInactivos }}
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
            </div>
        </div>
    </div>

    <script defer src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
