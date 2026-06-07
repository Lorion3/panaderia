@extends('/plantilla/base')
@section('dinamico')

<div class="max-w-7xl mx-auto p-6">
    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-blue-100">
        <div class="bg-blue-800 text-white px-6 py-4">
            <h2 class="text-2xl font-bold">Tabla Ventas</h2>
            <p class="text-blue-100 text-sm">Información de ventas registradas</p>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left text-gray-700">
                <thead class="bg-gray-100 uppercase text-xs text-gray-600">
                    <tr>
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">Cliente</th>
                        <th class="px-6 py-4">Total</th>
                        <th class="px-6 py-4">Fecha</th>
                        <th class="px-6 py-4">Estatus</th>
                        <th class="px-6 py-4">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($ventas as $venta)
                <tr class="border-b hover:bg-gray-50 transition">
                    <td class="px-6 py-4">{{ $venta->id }}</td>
                    <td class="px-6 py-4">{{ $venta->cliente->nombre }}</td>
                    <td class="px-6 py-4">${{ $venta->total }}</td>
                    <td class="px-6 py-4">{{ $venta->fecha }}</td>
                    <td class="px-6 py-4">{{ $venta->estatus }}</td>
                    <td class="px-6 py-4 flex gap-2">
                        <a href="/venta/editar/{{ $venta->id }}" class="bg-yellow-500 text-white px-3 py-1 rounded text-xs">Editar</a>
                        <form action="/venta/eliminar/{{ $venta->id }}" method="POST" onsubmit="return confirm('¿Eliminar?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded text-xs">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection