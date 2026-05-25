@extends('/plantilla/base')

@section('dinamico')

<div class="max-w-7xl mx-auto p-6">

    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-blue-100">

        <!-- Header -->
        <div class="bg-blue-800 text-white px-6 py-4">
            <h2 class="text-2xl font-bold">Tabla Proveedores</h2>
            <p class="text-blue-100 text-sm">
                Información de proveedores registrados
            </p>
        </div>

        <!-- Tabla -->
        <div class="overflow-x-auto">

            <table class="min-w-full text-sm text-left text-gray-700">

                <thead class="bg-gray-100 uppercase text-xs text-gray-600">
                    <tr>
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">Empresa</th>
                        <th class="px-6 py-4">Contacto</th>
                        <th class="px-6 py-4">Correo</th>
                        <th class="px-6 py-4">Estado</th>
                        <th class="px-6 py-4">Ciudad</th>
                        <th class="px-6 py-4">Dirección</th>
                    </tr>
                </thead>

                <tbody>

                    <tr class="border-b hover:bg-gray-50 transition">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">Tech Supplier</td>
                        <td class="px-6 py-4">Luis Gómez</td>
                        <td class="px-6 py-4">proveedor@gmail.com</td>
                        <td class="px-6 py-4">Jalisco</td>
                        <td class="px-6 py-4">Guadalajara</td>
                        <td class="px-6 py-4">Av. Vallarta #450</td>
                    </tr>

                    <tr class="border-b hover:bg-gray-50 transition">
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">Global Parts</td>
                        <td class="px-6 py-4">María Torres</td>
                        <td class="px-6 py-4">global@gmail.com</td>
                        <td class="px-6 py-4">CDMX</td>
                        <td class="px-6 py-4">Ciudad de México</td>
                        <td class="px-6 py-4">Reforma #900</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection