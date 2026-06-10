@extends('/plantilla/base')
@section('dinamico')

<a href="/vistas/vista_clientes"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Ver Clientes
    </a>

    <a href="/vistas/vista_detalle_pedido"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Ver Detalles de Pedidos
    </a>

    <a href="/vistas/vista_detalle_venta"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Ver Detalles de Ventas
    </a>
@endsection