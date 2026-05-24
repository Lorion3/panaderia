@extends('/plantilla/base')

@section('dinamico')

<div class="max-w-5xl mx-auto p-6">
    
    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-blue-100">
        
        <!-- Header -->
        <div class="bg-blue-800 text-white px-6 py-4">
            <h2 class="text-2xl font-bold">Registrar Producto</h2>
            <p class="text-blue-100 text-sm">Completa la información del producto</p>
        </div>

        <!-- Body -->
        <form class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Proveedor -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Proveedor *
                </label>
                <select name="proveedor_id" required
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
                    <option value="">Seleccione un proveedor</option>
                    <option value="1">Harinas SA</option>
                    <option value="2">Lacteos MX</option>
                    <option value="3">Azucarera</option>
                    <option value="4">Chocolate Plus</option>
                    <option value="5">Frutas Fresh</option>
                </select>
            </div>

            <!-- Nombre del Producto -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Nombre del Producto *
                </label>
                <input type="text"
                name="nombre"
                required
                maxlength="50"
                pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ ]+"
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

            <!-- Categoría -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Categoría
                </label>
                <select name="categoria"
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
                    <option value="">Seleccione una categoría</option>
                    <option value="Pan">Pan</option>
                    <option value="Pan dulce">Pan dulce</option>
                    <option value="Pastel">Pastel</option>
                    <option value="Postre">Postre</option>
                </select>
            </div>

            <!-- Precio -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Precio *
                </label>
                <input type="number" name="precio" required step="0.01" min="0" max="9999.99"
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3">
            </div>

            <!-- Existencia -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Existencia *
                </label>
                <input type="number" name="existencia" required min="0"
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

            <!-- Descripción -->
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Descripción
                </label>
                <textarea name="descripcion" rows="3" maxlength="150"
                    class="w-full rounded-xl border border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-200 px-4 py-3"></textarea>
                <p class="text-xs text-gray-500 mt-1">Máximo 150 caracteres</p>
            </div>

            <!-- Imagen -->
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Imagen del Producto
                </label>
                <input type="file" name="imagen" accept="image/*"
                    class="w-full rounded-xl border border-gray-300 bg-gray-50 px-4 py-3">
                <p class="text-xs text-gray-500 mt-1">Formatos permitidos: JPG, PNG, GIF</p>
            </div>

            <!-- Botón -->
            <div class="md:col-span-2 flex justify-end">
                <a href="/producto/tabla"
                        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block">
                        Guardar Producto
                    </a>
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300">
                    Guardar Producto
                </button>
            </div>

        </form>
    </div>
</div>

@endsection