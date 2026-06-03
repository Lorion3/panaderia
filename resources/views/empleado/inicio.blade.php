                    </a>@extends('/plantilla/base')

@section('dinamico')




<div class="max-w-5xl mx-auto p-6">
    
    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-blue-100">
        
      
        <div class="bg-blue-800 text-white px-6 py-4">
            <h2 class="text-2xl font-bold">Registrar Empleado</h2>
            <p class="text-blue-100 text-sm">Completa la información del empleado</p>
        </div>

        <!-- Body -->
        <form method="POST" action="/empleado/guardar" enctype="multipart/form-data"
         class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
         @csrf()



            <!-- Nombre -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Nombre
                </label>

                <input type="text"
                    name="nombre"
                    maxlength="50"
                    required
                    pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ ]+"
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

            <!-- Apellido -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Apellido
                </label>
                <input type="text"
                    name="apellido"
                    maxlength="50"
                    required
                    pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ ]+"
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

            <!-- Correo -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Correo
                </label>
                <input type="email"
                    name="email"
                    maxlength="150"
                    required
                   
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

            <!-- Usuario -->
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

            <!-- Contraseña -->
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

            <!-- Teléfono -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Teléfono
                </label>
                <input type="text"
                    name="telefono"
                    maxlength="10"
                    required
                    min="0"
                    
                    pattern="[0-9]{10}"
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

            <!-- Rol -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Rol
                </label>
                <select
                    name="rol"
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
                    <option>Administrador</option>
                    <option>Vendedor</option>
                    <option>Supervisor</option>
                </select>
            </div>

            <!-- Estatus -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Estatus
                </label>
                <select
                name="estatus"
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
                    <option>Activo</option>
                    <option>Inactivo</option>
                </select>
            </div>

            <!-- Imagen -->
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Imagen
                </label>
                <input type="file"
                name="imagen"
                    class="w-full rounded-xl border border-gray-300 bg-gray-50 px-4 py-3">
            </div>

            <!-- Botón -->
            <div class="md:col-span-2 flex justify-end">
                <a href="/empleado/lista"
                        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block">
                    Lista de empleados
                    </a>

                    <button type="submit"
                    class="bg-blue-600 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition">
                    Guardar Empleado
                </button>
            </div>

        </form>


    </div>
</div>

@endsection
 
   