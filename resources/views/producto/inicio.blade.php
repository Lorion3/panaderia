@extends('/plantilla/base')

@section('dinamico')

  <flux:heading size="xl" level="1" class="mt-2 text-gray-600 dark:text-gray-400"> Bienvenido al Sistema de
        Productos
    </flux:heading>

<a href="/producto/formulario"
        class="bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Agregar Producto 
    </a>
    <a href="/producto/lista"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Ver Productos
    </a>
  
    <a href="/producto/eliminar/"
        class="bg-red-600 hover:bg-red-700 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Eliminar Producto
    </a>
    <a href="/producto/editar/"
        class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Editar Producto
    </a>
    

    

@endsection