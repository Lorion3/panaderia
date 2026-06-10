@extends('/plantilla/base')
@section('dinamico')
<table class="table-auto w-full border-collapse border border-gray-300">
    <thead>
        <tr>
            <th class="border border-gray-300 px-4 py-2">ID Cliente</th>
            <th class="border border-gray-300 px-4 py-2">Nombre</th>
            <th class="border border-gray-300 px-4 py-2">Apellido Paterno</th>
            <th class="border border-gray-300 px-4 py-2">Apellido Materno</th>
            <th class="border border-gray-300 px-4 py-2">Estatus</th>
        </tr>
    </thead>
    <tbody>
        @foreach($datos as $vista_cliente)
        <tr>
            <td class="border border-gray-300 px-4 py-2">{{ $vista_cliente->id }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $vista_cliente->nombre }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $vista_cliente->apellido_paterno }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $vista_cliente->apellido_materno }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $vista_cliente->estatus }}</td>
        </tr>
        @endforeach
    </tbody>


@endsection