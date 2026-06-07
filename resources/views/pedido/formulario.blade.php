@extends('/plantilla/base')

@section('dinamico')

 <div class="max-w-5xl mx-auto p-6">

    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-blue-100">

        <div class="bg-blue-800 text-white px-6 py-4">
            <h2 class="text-2xl font-bold">Registrar Pedido</h2>
        </div>

        <form class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <label class="block mb-2 font-semibold text-gray-700">
                    Proveedor
                </label>
                <select name="proveedor_id" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-blue-700 focus:ring-blue-200">
                   @foreach($proveedores as $proveedor)
                    <option value="{{ $proveedor->id }}">{{ $proveedor->contacto }}</option>
                   
                   @endforeach
                    {{-- <option>Seleccionar proveedor</option>
                    <option value="1">Harinas SA</option>
                    <option value="2">Lacteos MX</option>
                 <option value="3">Azucarera</option> --}}
                </select>
            </div>
              <div>
                <label class="block mb-2 font-semibold text-gray-700">
                    vendedor
                </label>
                <select name="empleado_id" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-blue-700 focus:ring-blue-200">
                   @foreach($empleados as $empleado)
                    <option value="{{ $empleado->id }}">{{ $empleado->nombre }}</option>
                   @endforeach
                </select>
            </div>

            <div>
                <label class="block mb-2 font-semibold text-gray-700">
                    Cantidad
                </label>
                <input type="number"
                    name="cantidad"
                    min="0"
                    max="9999.99"
                    required
                    step="0.01"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-blue-700 focus:ring-blue-200">
            </div>

            <div>
                <label class="block mb-2 font-semibold text-gray-700">
                    Precio
                </label>
                <input type="number" 
                 name="precio"
                 min="0"
                 max="9999.99"
                 required
                 step="0.01"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-blue-700 focus:ring-blue-200">
            </div>

            <div>
                <label class="block mb-2 font-semibold text-gray-700">
                    Impuesto
                </label>
                <input type="number" 
                    name="impuesto"
                    min="0"
                    max="9999.99"
                    step="0.01"
                    required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-blue-700 focus:ring-blue-200">
            </div>

            <div>
                <label class="block mb-2 font-semibold text-gray-700">
                    Total
                </label>
                <input type="number"
                    name="total"
                    min="0"
                    max="9999.99"
                    
                    step="0.01"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-blue-700 focus:ring-blue-200">
            </div>

            <div>
                <label class="block mb-2 font-semibold text-gray-700">
                    Estatus
                </label>
                <select class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-blue-700 focus:ring-blue-200">
                    <option>Realizado</option>
                    <option>Cancelado</option>
                </select>
            </div>

            <div class="md:col-span-2 flex justify-end">
                <a href="/pedido/lista"
                        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block">
                    historial de pedidos
                    </a>
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition">
                    Guardar Pedido
                </button>
            </div>

        </form>

    </div>
</div>
@endsection
 
   
