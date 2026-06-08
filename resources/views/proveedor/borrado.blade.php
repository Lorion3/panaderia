@extends('/plantilla/base')

@section('dinamico')

<div class="max-w-5xl mx-auto p-6">
    
    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-blue-100">
        
        <!-- Header -->
        <div class="bg-blue-800 text-white px-6 py-4">
            <h2 class="text-2xl font-bold">Eliminar Proveedor</h2>
            <p class="text-blue-100 text-sm">Completa la información del proveedor</p>
        </div>

        <!-- Body -->
        <form method="POST" action="/proveedor/eliminar/{{ $proveedor->id }}"  enctype="multipart/form-data"
         class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf()

            <!-- Contacto -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Nombre de Contacto * {{ $proveedor->contacto }}
                </label>

            </div>

            <!-- Empresa -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Empresa * {{ $proveedor->empresa }}
                </label>

            </div>

            <!-- Correo -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Correo * {{ $proveedor->correo }}
                </label>
      
            </div>

            <!-- Estado -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Estado * {{ $proveedor->estado }}
                </label>

            </div>

            <!-- Ciudad -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Ciudad * {{ $proveedor->ciudad }}
                </label>

            </div>

            <!-- Colonia -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Colonia {{ $proveedor->colonia }}
                </label>

            </div>

            <!-- Código Postal -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Código Postal {{ $proveedor->codigo_postal }}
                </label>

            </div>

            <!-- Calle -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Calle {{ $proveedor->calle }}
                </label>

            </div>

            <!-- Número -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Número {{ $proveedor->numero }}
                </label>
              
            </div>

            <!-- Imagen -->
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Imagen / Logo {{ $proveedor->imagen }}
                </label>
                
                <p class="text-xs text-gray-500 mt-1">Formatos permitidos: JPG, PNG, GIF</p>
            </div>

            <!-- Botón -->
            <div class="md:col-span-2 flex justify-end">
             
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300">
                    Eliminar Proveedor
                </button>
            </div>

        </form>
    </div>
</div>

@endsection