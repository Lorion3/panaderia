@extends('/plantilla/base')

@section('dinamico')
  <flux:heading size="xl" level="1" class="mt-2 text-gray-600 dark:text-gray-400"> Bienvenido al Sistema de
        Proveedores
    </flux:heading>

<a href="/proveedor/formulario"
        class="bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Agregar Proveedor 
    </a>
    <a href="/proveedor/lista"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Ver Proveedores
    </a>
<a href="/proveedor/edicion/1"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Editar Proveedor
    </a>
    <a href="/proveedor/borrado/1"
        class="bg-red-600 hover:bg-red-700 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Eliminar Proveedor
    </a>
{{-- <a href="/proveedor/mostrar/1"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Mostrar Proveedor
    </a> --}}

    

@endsection