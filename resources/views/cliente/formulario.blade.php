@extends('/plantilla/base')

@section('dinamico')

<div class="max-w-5xl mx-auto p-6">
    
    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-blue-100">
        
        <!-- Header -->
        <div class="bg-blue-800 text-white px-6 py-4">
            <h2 class="text-2xl font-bold">Registrar Cliente</h2>
            <p class="text-blue-100 text-sm">Completa la información del cliente</p>
        </div>

        <!-- Body -->
        <form method="POST" action="/cliente/guardar" enctype="multipart/form-data"
         class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
         @csrf()
        

            <!-- Nombre -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Nombre *
                </label>
                <input type="text"
                 name="nombre" 
                 required
                 maxlength="50"
                 pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ ]+"
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

            <!-- Apellido Paterno -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Apellido Paterno *
                </label>
                <input type="text"
                 name="apellido_paterno"
                 required
                 maxlength="50"
                 pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ ]+"
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

            <!-- Apellido Materno -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Apellido Materno
                </label>
                <input type="text"
                name="apellido_materno"
                maxlength="50"
                pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ ]+"
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

            <!-- Teléfono -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Teléfono *
                </label>
                <input type="tel"
                 name="telefono"
                required
                maxlength="10"
                min="0"
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

        <div class= login name="login" class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            <!-- Correo -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Correo *
                </label>
                <input type="email"
                name="correo"
                required
                maxlength="150"
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>
               <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Contraseña
                </label>
                <input type="password"
                    name="contrasena"
                    maxlength="255"
                    required
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>
        </div>
<!-- usuario -->
 <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Usuario
                </label>
                <input type="text"
                    name="usuario"
                    maxlength="50"
                    required
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

        

            <!-- Estatus -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Estatus
                </label>
                <select name="estatus"
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
                    <option value="activo">Activo</option>
                    <option value="inactivo">Inactivo</option>
                </select>
            </div>

            <!-- Dirección -->
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Dirección
                </label>
                <input type="text" 
                name="direccion"
                maxlength="150"
                required
                
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

            <!-- Imagen -->
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Imagen (URL)
                </label>
                <input type="file" name="imagen" accept="image/*"
                    class="w-full rounded-xl border border-gray-300 bg-gray-50 px-4 py-3">
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
                    Guardar Cliente
                </button>
            </div>

        </form>
    </div>
</div>

@endsection