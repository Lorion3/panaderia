@extends('/plantilla/base')
@section('dinamico')

<table class="table-auto w-full border-collapse border border-gray-300">
    <thead>
        <tr>
            <th class="border border-gray-300 px-4 py-2">ID</th>
            <th class="border border-gray-300 px-4 py-2">Venta</th>
            <th class="border border-gray-300 px-4 py-2">Producto</th>
            <th class="border border-gray-300 px-4 py-2">Empleado</th>
            <th class="border border-gray-300 px-4 py-2">Cantidad</th>
            <th class="border border-gray-300 px-4 py-2">Precio</th>
            <th class="border border-gray-300 px-4 py-2">Impuesto</th>
            <th class="border border-gray-300 px-4 py-2">Descuento</th>
        </tr>
    </thead>
    <tbody>
        @foreach($datos_detalle_venta as $detalleVenta)
        <tr>
            <td class="border border-gray-300 px-4 py-2">{{ $detalleVenta->id }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $detalleVenta->venta }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $detalleVenta->producto }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $detalleVenta->empleado }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $detalleVenta->cantidad }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $detalleVenta->precio }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $detalleVenta->impuesto }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $detalleVenta->descuento }}</td>
        </tr>
        @endforeach
    </tbody>


@endsection