@extends('/plantilla/base')

@section('dinamico')

<div class="max-w-5xl mx-auto p-6">
    
    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-blue-100">
        
        <!-- Header -->
        <div class="bg-blue-800 text-white px-6 py-4">
            <h2 class="text-2xl font-bold">Eliminar Cliente</h2>
            <p class="text-blue-100 text-sm">¿Estás seguro de que quieres eliminar este cliente?</p>
        </div>

        <!-- Body -->
        <form method="POST" action="/cliente/eliminar/{{ $cliente->id }}" enctype="multipart/form-data"
         class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
         @csrf()
        

            <!-- Nombre -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Nombre * {{ $cliente->nombre }}
                </label>
               
            </div>

            <!-- Apellido Paterno -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Apellido Paterno * {{ $cliente->apellido_paterno }}
                </label>
                
            </div>

            <!-- Apellido Materno -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Apellido Materno * {{ $cliente->apellido_materno }}
                </label>
                
            </div>

            <!-- Teléfono -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Teléfono * {{ $cliente->telefono }}
                </label>
            
            </div>

        <div class= login name="login" class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            <!-- Correo -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Correo * {{ $cliente->correo }}
                </label>
             
            </div>
               <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Contraseña {{ $cliente->contrasena }}       
                </label>
           
            </div>
        </div>
<!-- usuario -->
 <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Usuario {{ $cliente->usuario }}
                </label>
               
            </div>

        

            <!-- Estatus -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Estatus  {{ $cliente->estatus }}
                </label>
         
            </div>

            <!-- Dirección -->
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Dirección
                </label>
               
            </div>

            <!-- Imagen -->
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Imagen {{ $cliente->imagen }}
                </label>
                
                
                <p class="text-xs text-gray-500 mt-1">Formatos permitidos: JPG, PNG, GIF</p>
            </div>

            <!-- Botón -->
            <div class="md:col-span-2 flex justify-end">
                    <a href="/cliente/lista"
                        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block">
                     Clientes registrados
                    </a>

                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300">
                    Eliminar Cliente
                </button>
            </div>

        </form>
    </div>
</div>

@endsection