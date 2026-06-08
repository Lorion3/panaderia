@extends('/plantilla/base')

@section('dinamico')

 <a href="/empleado/lista"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Ver Empleados
    </a>

        <a href="/empleado/edicion/1"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Editar Empleado
    </a>

     {{-- <a href="/empleado/mostrar/1"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Mostrar Empleado
    </a> --}}
    <a href="/empleado/borrado/1"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Eliminar Empleado
    </a>
 
    <a href="/empleado/formulario"
        class="bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block mt-6">
        Agregar Empleado 
    </a>

@endsection
 
   