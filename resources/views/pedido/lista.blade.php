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

       @foreach($pedidos as $pedido)
<tr class="border-b hover:bg-gray-50 transition">
    <td class="px-6 py-4">{{ $pedido->id }}</td>
    <td class="px-6 py-4">{{ $pedido->proveedor->contacto }}</td>
    <td class="px-6 py-4">
        @foreach($pedido->detalle_pedidos as $detalle)
            {{ $detalle->cantidad }} productos<br>
        @endforeach
    </td>
    <td class="px-6 py-4">{{ $pedido->total }}</td> 
    <td class="px-6 py-4">{{ $pedido->fecha }}</td>
    <td class="px-6 py-4">{{ $pedido->estatus }}</td>
</tr>
@endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection
