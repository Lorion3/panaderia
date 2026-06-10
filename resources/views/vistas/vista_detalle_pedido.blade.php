@extends('/plantilla/base')
@section('dinamico')
<table class="table-auto w-full border-collapse border border-gray-300">
    <thead>
        <tr>
            <th class="border border-gray-300 px-4 py-2">Pedido</th>
            <th class="border border-gray-300 px-4 py-2">Empresa</th>
            <th class="border border-gray-300 px-4 py-2">Producto</th>
            <th class="border border-gray-300 px-4 py-2">Cantidad</th>
            <th class="border border-gray-300 px-4 py-2">Precio</th>
            <th class="border border-gray-300 px-4 py-2">Fecha</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vista_detalle_pedido as $detallePedido)
        <tr>
            <td class="border border-gray-300 px-4 py-2">{{ $detallePedido->pedido }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $detallePedido->empresa }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $detallePedido->producto }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $detallePedido->cantidad }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $detallePedido->precio }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $detallePedido->fecha }}</td>
        </tr>
        @endforeach
    </tbody>

@endsection