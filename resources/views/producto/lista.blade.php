@extends('/plantilla/base')

@section('dinamico')

<div class="max-w-7xl mx-auto p-6">

    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-blue-100">

        <div class="bg-blue-800 text-white px-6 py-4">
            <h2 class="text-2xl font-bold">Tabla Productos</h2>
            <p class="text-blue-100 text-sm">Información de productos registrados</p>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left text-gray-700">
                <thead class="bg-gray-100 uppercase text-xs text-gray-600">
                    <tr>
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">Proveedor</th>
                        <th class="px-6 py-4">Empresa</th>
                        <th class="px-6 py-4">Nombre</th>
                        <th class="px-6 py-4">Categoría</th>
                        <th class="px-6 py-4">Precio</th>
                        <th class="px-6 py-4">Existencia</th>
                        <th class="px-6 py-4">Estatus</th>
                        <th class="px-6 py-4">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($productos as $producto)
                <tr class="border-b hover:bg-gray-50 transition">
                    <td class="px-6 py-4">{{ $producto->id }}</td>
                    <td class="px-6 py-4">{{ $producto->proveedor->contacto }}</td>
                    <td class="px-6 py-4">{{ $producto->proveedor->empresa }}</td>
                    <td class="px-6 py-4">{{ $producto->nombre }}</td>
                    <td class="px-6 py-4">{{ $producto->categoria }}</td>
                    <td class="px-6 py-4">${{ $producto->precio }}</td>
                    <td class="px-6 py-4">{{ $producto->existencia }}</td>
                    <td class="px-6 py-4">{{ $producto->estatus }}</td>
                    <td class="px-6 py-4 flex gap-2">
                        <a href="/producto/editar/{{ $producto->id }}" class="bg-yellow-500 text-white px-3 py-1 rounded text-xs">Editar</a>
                        <form action="/producto/eliminar/{{ $producto->id }}" method="POST" onsubmit="return confirm('¿Eliminar producto?')">
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