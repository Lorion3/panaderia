@extends('/plantilla/base')
@section('dinamico')



<div class="max-w-7xl mx-auto p-6">

    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-blue-100">

        <!-- Header -->
        <div class="bg-blue-800 text-white px-6 py-4">
            <h2 class="text-2xl font-bold">Tabla Pedidos</h2>
            <p class="text-blue-100 text-sm">
                Información de pedidos realizados
            </p>
        </div>

        <!-- Tabla -->
        <div class="overflow-x-auto">

            <table class="min-w-full text-sm text-left text-gray-700">

                <thead class="bg-gray-100 uppercase text-xs text-gray-600">
                    <tr>
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">Proveedor</th>
                        <th class="px-6 py-4">Cantidad</th>
                        <th class="px-6 py-4">Precio</th>
                        <th class="px-6 py-4">Impuesto</th>
                        <th class="px-6 py-4">Total</th>
                        <th class="px-6 py-4">Fecha</th>
                        <th class="px-6 py-4">Estatus</th>
                    </tr>
                </thead>

                <tbody>

                    <tr class="border-b hover:bg-gray-50 transition">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">Tech Supplier</td>
                        <td class="px-6 py-4">25</td>
                        <td class="px-6 py-4">$3000</td>
                        <td class="px-6 py-4">$480</td>
                        <td class="px-6 py-4 font-bold">$3480</td>
                        <td class="px-6 py-4">2026-05-22</td>
                        <td class="px-6 py-4">
                            <span class="bg-green-500 text-white px-3 py-1 rounded-full text-xs">
                                Realizado
                            </span>
                        </td>
                    </tr>

                    <tr class="border-b hover:bg-gray-50 transition">
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">Global Parts</td>
                        <td class="px-6 py-4">10</td>
                        <td class="px-6 py-4">$1500</td>
                        <td class="px-6 py-4">$240</td>
                        <td class="px-6 py-4 font-bold">$1740</td>
                        <td class="px-6 py-4">2026-05-22</td>
                        <td class="px-6 py-4">
                            <span class="bg-red-500 text-white px-3 py-1 rounded-full text-xs">
                                Cancelado
                            </span>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection
