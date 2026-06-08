@extends('/plantilla/base')

@section('dinamico')

<div class="max-w-5xl mx-auto p-6">
    
    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-blue-100">
        
        <!-- Header -->
        <div class="bg-blue-800 text-white px-6 py-4">
            <h2 class="text-2xl font-bold">Editar Proveedor</h2>
            <p class="text-blue-100 text-sm">Completa la información del proveedor</p>
        </div>

        <!-- Body -->
        <form method="POST" action="/proveedor/actualizar/{{ $proveedor->id }}"  enctype="multipart/form-data"
         class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf()
            @method('POST')

            <!-- Contacto -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Nombre de Contacto *
                </label>
                <input type="text"
                name="contacto"
                value="{{ $proveedor->contacto }}"
                required
                maxlength="50"
                pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ ]+"

                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

            <!-- Empresa -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Empresa * 
                </label>
                <input type="text"
                name="empresa"
                value="{{ $proveedor->empresa }}"
                required
                maxlength="50"
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

            <!-- Correo -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Correo * 
                </label>
                <input type="email"
                name="correo"
                value="{{ $proveedor->correo }}"
                required
                maxlength="150"

                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

            <!-- Estado -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Estado * 
                </label>
                <input type="text"
                    name="estado"
                    required
                    value="{{ $proveedor->estado }}"
                    maxlength="50"
                    pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ ]+"

                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

            <!-- Ciudad -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Ciudad 
                </label>
                <input type="text"
                name="ciudad"
                value="{{ $proveedor->ciudad }}"
                maxlength="50"
                required
                pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ ]+"
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

            <!-- Colonia -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Colonia 
                </label>
                <input type="text"
                name="colonia"
                value="{{ $proveedor->colonia }}"
                maxlength="50"
                required
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

            <!-- Código Postal -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Código Postal * 
                </label>
                <input type="text"
                name="codigo_postal"
                value="{{ $proveedor->codigo_postal }}"
                maxlength="5"
                pattern="[0-9]{5}"
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

            <!-- Calle -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Calle 
                </label>
                <input type="text"
                name="calle"
                value="{{ $proveedor->calle }}"
                 
                required
                maxlength="100"

                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

            <!-- Número -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Número 
                </label>
                <input type="text"
                name="numero"
                value="{{ $proveedor->numero }}"
                min="0"
                
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

            <!-- Imagen -->
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Imagen / Logo 
                </label>
                <input type="file" name="imagen" accept="image/*"
                value="{{ $proveedor->imagen }}"
                    class="w-full rounded-xl border border-gray-300 bg-gray-50 px-4 py-3">
                <p class="text-xs text-gray-500 mt-1">Formatos permitidos: JPG, PNG, GIF</p>
            </div>

            <!-- Botón -->
            <div class="md:col-span-2 flex justify-end">
                <a href="/proveedor/lista"
                        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block">
                        Datos de proveedores
                    </a>
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300">
                    Guardar Proveedor
                </button>
            </div>

        </form>
    </div>
</div>

@endsection