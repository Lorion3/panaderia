@extends('/plantilla/base')

@section('dinamico')


<a href="/cliente/formulario"
        class="bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Agregar Cliente 
    </a>
    <a href="/cliente/lista"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Ver Clientes
    </a>
    <a href="/cliente/editar/1"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Editar Cliente
    </a>
@endsection