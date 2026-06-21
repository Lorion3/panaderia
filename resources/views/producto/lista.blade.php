@extends('/plantilla/base')

@section('dinamico')
<div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-blue-100">

    <div class="bg-blue-800 text-white px-6 py-4">
        <h2 class="text-2xl font-bold">Tabla Productos</h2>
        <p class="text-blue-100 text-sm">
            Información de productos registrados
        </p>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full text-sm text-gray-700">
            <thead class="bg-gray-100 uppercase text-xs text-gray-600">
                <tr>
                    <th class="px-3 py-3 text-center">ID</th>
                    <th class="px-3 py-3">Producto</th>
                    <th class="px-3 py-3">Proveedor</th>
                    <th class="px-3 py-3">Categoría</th>
                    <th class="px-3 py-3 text-center">Precio</th>
                    <th class="px-3 py-3 text-center">Stock</th>
                    <th class="px-3 py-3 text-center">Estatus</th>
                    <th class="px-3 py-3 text-center">Imágenes</th>
                    <th class="px-3 py-3 text-center">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($productos as $producto)
                <tr class="border-b hover:bg-gray-50 transition">

                    <td class="px-3 py-3 text-center font-medium">
                        {{ $producto->id }}
                    </td>
                    <td class="px-3 py-3">
                        <div class="font-semibold text-gray-800">
                            {{ $producto->nombre }}
                        </div>
                        <div class="text-xs text-gray-500">
                            {{ $producto->proveedor->empresa }}
                        </div>
                    </td>
                    <td class="px-3 py-3">
                        {{ $producto->proveedor->contacto }}
                    </td>
                    <td class="px-3 py-3">
                        {{ $producto->categoria }}
                    </td>
                    <td class="px-3 py-3 text-center font-medium">
                        ${{ number_format($producto->precio, 2) }}
                    </td>
                    <td class="px-3 py-3 text-center">
                        {{ $producto->existencia }}
                    </td>
                    <td class="px-3 py-3 text-center">
                        <span class="px-3 py-1 rounded-full text-xs font-semibold
                            {{ $producto->estatus == 'Activo'
                                ? 'bg-green-100 text-green-700'
                                : 'bg-red-100 text-red-700' }}">
                            {{ $producto->estatus }}
                        </span>
                    </td>
                    <td class="px-3 py-3">
                        <div class="flex justify-center gap-1">
                            @if($producto->imagen1)
                                <img src="{{ $producto->imagen1 }}"
                                    alt="{{ $producto->nombre }}"
                                    class="w-12 h-12 object-cover rounded-lg border">
                            @endif

                            @if($producto->imagen2)
                                <img src="{{ $producto->imagen2 }}"
                                    alt="{{ $producto->nombre }}"
                                    class="w-12 h-12 object-cover rounded-lg border">
                            @endif

                            @if($producto->imagen3)
                                <img src="{{ $producto->imagen3 }}"
                                    alt="{{ $producto->nombre }}"
                                    class="w-12 h-12 object-cover rounded-lg border">
                            @endif
                        </div>
                    </td>

                    <td class="px-3 py-3">
                        <div class="flex justify-center gap-2">

                            <a href="/producto/editar/{{ $producto->id }}"
                                class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-lg text-xs font-medium transition">
                                Editar
                            </a>

                            <form action="/producto/eliminar/{{ $producto->id }}"
                                method="POST"
                                onsubmit="return confirm('¿Eliminar producto?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg text-xs font-medium transition">
                                    Eliminar
                                </button>
                            </form>

                        </div>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection