</a>@extends('/plantilla/base')

@section('dinamico')




<div class="max-w-5xl mx-auto p-6">
    
    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-blue-100">
        
      
        <div class="bg-blue-800 text-white px-6 py-4">
            <h2 class="text-2xl font-bold">Eliminar Empleado</h2>
            <p class="text-blue-100 text-sm">¿Estás seguro de que deseas eliminar este empleado?</p>
        </div>

        <!-- Body -->
        <form method="POST"
         action="'/empleado/eliminar/', [{{ $empleado->id }}]"
         enctype="multipart/form-data"
         class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
         @csrf()



            <!-- Nombre -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Nombre {{ $empleado->nombre }}
                </label>

            </div>

            <!-- Apellido -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2"> 
                    Apellido {{ $empleado->apellido }}
                </label>

            </div>

            <!-- Correo -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Correo {{ $empleado->email }}
                </label>

            </div>

            <!-- Usuario -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Usuario {{ $empleado->usuario }}
                </label>

            </div>

            <!-- Contraseña -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Contraseña {{ $empleado->contrasena }}
                </label>
                    required

            </div>

            <!-- Contraseña -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Contraseña {{ $empleado->contrasena }}
                </label>
                <input type="password"

            </div>

            <!-- Teléfono -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Teléfono
                </label>

                
                <input type="text"
                    name="telefono"
                    value="{{ $empleado->telefono }}"
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
                    <option value="Administrador" {{ $empleado->rol == 'Administrador' ? 'selected' : '' }}>Administrador</option>
                    <option value="Vendedor" {{ $empleado->rol == 'Vendedor' ? 'selected' : '' }}>Vendedor</option>
                    <option value="Supervisor" {{ $empleado->rol == 'Supervisor' ? 'selected' : '' }}>Supervisor</option>
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
                    <option value="Activo" {{ $empleado->estatus == 'Activo' ? 'selected' : '' }}>Activo</option>
                    <option value="Inactivo" {{ $empleado->estatus == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>

            <!-- Imagen -->
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Imagen
                </label>
                <input type="file"
                name="imagen"
                value="{{ $empleado->imagen }}"
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
                    Eliminar Empleado
                </button>
            </div>

        </form>


    </div>
</div>

@endsection
 
   