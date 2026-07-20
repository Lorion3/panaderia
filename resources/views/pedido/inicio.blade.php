@extends('/plantilla/base')

@section('dinamico')

  <flux:heading size="xl" level="1" class="mt-2 text-gray-600 dark:text-gray-400"> Bienvenido al Sistema de
        Pedidos
    </flux:heading>

<a href="/pedido/formulario"
        class="bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Agregar Pedido 
    </a>
    <a href="/pedido/lista"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Ver Pedidos     
    </a>
  
    <a href="/pedido/eliminar/"
        class="bg-red-600 hover:bg-red-700 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Eliminar Pedido 
    </a>
    <a href="/pedido/editar/"
        class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Editar Pedido   
    </a>
    

    

@endsection