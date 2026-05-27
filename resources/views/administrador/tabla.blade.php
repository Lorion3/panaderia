
@extends('/plantilla/base')

@section('dinamico')

<div class="max-w-7xl mx-auto p-6">

    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-blue-100">

        <!-- Header -->
        <div class="bg-blue-800 text-white px-6 py-4">
            <h2 class="text-2xl font-bold">Tabla Empleados</h2>
            <p class="text-blue-100 text-sm">
                Información de empleados registrados
            </p>
        </div>

        <!-- Tabla -->
        <div class="overflow-x-auto">

            <table class="min-w-full text-sm text-left text-gray-700">

                <thead class="bg-gray-100 uppercase text-xs text-gray-600">
                    <tr>
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">Nombre</th>
                        <th class="px-6 py-4">Correo</th>
                        <th class="px-6 py-4">Usuario</th>
                        <th class="px-6 py-4">Teléfono</th>
                        <th class="px-6 py-4">Rol</th>
                        <th class="px-6 py-4">Estatus</th>
                    </tr>
                </thead>

                <tbody>

                    <tr class="border-b hover:bg-gray-50 transition">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">Juan Pérez</td>
                        <td class="px-6 py-4">juan@gmail.com</td>
                        <td class="px-6 py-4">juanp</td>
                        <td class="px-6 py-4">3312345678</td>
                        <td class="px-6 py-4">Administrador</td>
                        <td class="px-6 py-4">
                            <span class="bg-green-500 text-white px-3 py-1 rounded-full text-xs">
                                Activo
                            </span>
                        </td>
                    </tr>

                    <tr class="border-b hover:bg-gray-50 transition">
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">Ana López</td>
                        <td class="px-6 py-4">ana@gmail.com</td>
                        <td class="px-6 py-4">analopez</td>
                        <td class="px-6 py-4">3322222222</td>
                        <td class="px-6 py-4">Vendedor</td>
                        <td class="px-6 py-4">
                            <span class="bg-red-500 text-white px-3 py-1 rounded-full text-xs">
                                Inactivo
                            </span>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection
   
