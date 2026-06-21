@extends('/plantilla/base')

@section('dinamico')

<div class="max-w-5xl mx-auto p-6">
    
    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-blue-100">
        
        <div class="bg-blue-800 text-white px-6 py-4">
            <h2 class="text-2xl font-bold">Registrar Producto</h2>
            <p class="text-blue-100 text-sm">Completa la información del producto</p>
        </div>

        <form method="POST" action="{{ url('/producto/guardar') }}" enctype="multipart/form-data" class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Proveedor *</label>
                <select name="proveedor_id" required class="w-full rounded-xl border border-gray-300 px-4 py-3">
                    <option value="">Seleccione un proveedor</option>
                    @foreach($proveedores as $proveedor)
                        <option value="{{ $proveedor->id }}">{{ $proveedor->contacto }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Nombre del Producto *</label>
                <input type="text" name="nombre" required maxlength="50" class="w-full rounded-xl border border-gray-300 px-4 py-3">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Categoría</label>
                <select name="categoria" class="w-full rounded-xl border border-gray-300 px-4 py-3">
                    <option value="">Seleccione una categoría</option>
                    <option value="Pan">Pan</option>
                    <option value="Pan dulce">Pan dulce</option>
                    <option value="Pastel">Pastel</option>
                    <option value="Postre">Postre</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Precio *</label>
                <input type="number" name="precio" required step="0.01" min="0" max="9999.99" class="w-full rounded-xl border border-gray-300 px-4 py-3">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Existencia *</label>
                <input type="number" name="existencia" required min="0" class="w-full rounded-xl border border-gray-300 px-4 py-3">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Estatus</label>
                <select name="estatus" class="w-full rounded-xl border border-gray-300 px-4 py-3">
                    <option value="activo">Activo</option>
                    <option value="inactivo">Inactivo</option>
                </select>
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-gray-700 mb-2">Descripción</label>
                <textarea name="descripcion" rows="3" maxlength="150" class="w-full rounded-xl border border-gray-300 px-4 py-3"></textarea>
                <p class="text-xs text-gray-500 mt-1">Máximo 150 caracteres</p>
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-gray-700 mb-2">Imagen del Producto (URL)</label>
                <input type="file" name="imagen1"  class="w-full rounded-xl border border-gray-300 px-4 py-3">
                {{-- <input type="text" name="imagen1" placeholder="https://ejemplo.com/imagen.jpg" class="w-full rounded-xl border border-gray-300 px-4 py-3"> --}}
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-gray-700 mb-2">Imagen del Producto 2 (URL)</label>
                <input type="file" name="imagen2" class="w-full rounded-xl border border-gray-300 px-4 py-3">
                {{-- <input type="text" name="imagen2" placeholder="https://ejemplo.com/imagen2.jpg" class="w-full rounded-xl border border-gray-300 px-4 py-3"> --}}
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-gray-700 mb-2">Imagen del Producto 3 (URL)</label>
                <input type="file" name="imagen3" class="w-full rounded-xl border border-gray-300 px-4 py-3">
                {{-- <input type="text" name="imagen3" placeholder="https://ejemplo.com/imagen3.jpg" class="w-full rounded-xl border border-gray-300 px-4 py-3"> --}}
            </div>

            <div class="md:col-span-2 flex justify-end gap-4">
                <a href="/producto/lista" class="bg-gray-500 hover:bg-gray-600 text-white font-semibold px-8 py-3 rounded-xl shadow-lg">Cancelar</a>
                <button type="submit" class="bg-blue-600 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg">Guardar Producto</button>
            </div>

        </form>
    </div>
</div>

@endsection