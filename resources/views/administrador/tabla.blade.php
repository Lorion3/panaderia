@extends('/plantilla/base')

@section('dinamico')
<div class="overflow-x-auto bg-white rounded-xl shadow-md">
    <table class="min-w-full text-sm text-left text-gray-600">
        <thead class="bg-gray-800 text-white uppercase text-xs">
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
            @foreach($empleados as $empleado)
                <tr class="border-b hover:bg-gray-100 transition">
                    <td class="px-6 py-4">{{ $empleado->id }}</td>

                    <td class="px-6 py-4">
                        {{ $empleado->nombre }}
                        {{ $empleado->apellido }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $empleado->correo }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $empleado->usuario }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $empleado->telefono }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $empleado->rol }}
                    </td>

                    <td class="px-6 py-4">
                        <span class="
                            px-3 py-1 rounded-full text-white text-xs
                            {{ $empleado->estatus == 'activo'
                                ? 'bg-green-500'
                                : 'bg-red-500' }}">
                            {{ $empleado->estatus }}
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
 
   