
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
                        <th class="px-6 py-4">Foto</th>
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
                @foreach($empleados as $empleado)   
<tr class="border-b hover:bg-gray-50 transition">
    <td class="px-6 py-4">
        <img src="{{ $empleado->imagen }}" alt="Foto de {{ $empleado->nombre }}" class="w-12 h-12 rounded-full object-cover">
    </td>
    <td class="px-6 py-4">{{ $empleado->id }}</td>
    <td class="px-6 py-4">{{ $empleado->nombre }}</td>
    <td class="px-6 py-4">{{ $empleado->correo }}</td>
    <td class="px-6 py-4">{{ $empleado->usuario }}</td>
    <td class="px-6 py-4">{{ $empleado->telefono }}</td>
    <td class="px-6 py-4">{{ $empleado->rol }}</td>
    <td class="px-6 py-4">{{ $empleado->estatus }}</td>
</tr>
@endforeach
                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection
   
