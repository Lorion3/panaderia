@extends('/plantilla/base')
@section('dinamico')


<div class="max-w-7xl mx-auto p-6">

    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-blue-100">

        <!-- Header -->
        <div class="bg-blue-800 text-white px-6 py-4">
            <h2 class="text-2xl font-bold">Tabla Ventas</h2>
            <p class="text-blue-100 text-sm">
                Información de ventas registradas
            </p>
        </div>

        <!-- Tabla -->
        <div class="overflow-x-auto">

            <table class="min-w-full text-sm text-left text-gray-700">

                <thead class="bg-gray-100 uppercase text-xs text-gray-600">
                    <tr>
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">Producto</th>
                        <th class="px-6 py-4">Empleado</th>
                        <th class="px-6 py-4">Cliente</th>
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
                        <td class="px-6 py-4">Laptop HP</td>
                        <td class="px-6 py-4">Juan Pérez</td>
                        <td class="px-6 py-4">Carlos Ruiz</td>
                        <td class="px-6 py-4">$8500</td>
                        <td class="px-6 py-4">$1360</td>
                        <td class="px-6 py-4 font-bold">$9860</td>
                        <td class="px-6 py-4">2026-05-22</td>
                        <td class="px-6 py-4">
                             <span class="bg-green-500 text-white px-3 py-1 rounded-full text-xs">
                                 <a href="/venta/detalle">detalle de venta</a>
                            </span>
                           
                        </td>
                    </tr>

                    <tr class="border-b hover:bg-gray-50 transition">
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">Mouse Gamer</td>
                        <td class="px-6 py-4">Ana López</td>
                        <td class="px-6 py-4">Miguel Torres</td>
                        <td class="px-6 py-4">$1200</td>
                        <td class="px-6 py-4">$192</td>
                        <td class="px-6 py-4 font-bold">$1392</td>
                        <td class="px-6 py-4">2026-05-22</td>
                        <td class="px-6 py-4">
                             <span class="bg-green-500 text-white px-3 py-1 rounded-full text-xs">
                               <a href="/venta/detalle">detalle de venta</a>
                                
                            </span>
                          
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>



@endsection