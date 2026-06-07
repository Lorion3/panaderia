@extends('/plantilla/base')

@section('dinamico')

<div class="max-w-5xl mx-auto p-6">
    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-blue-100">
        <div class="bg-blue-800 text-white px-6 py-4">
            <h2 class="text-2xl font-bold">Registrar Pedido</h2>
        </div>

        <!-- AGREGA method y csrf -->
        <form method="POST" action="{{ url('/pedido/guardar') }}" class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf  <!-- IMPORTANTE: seguridad de Laravel -->

            <div>
                <label class="block mb-2 font-semibold text-gray-700">Proveedor</label>
                <select name="proveedor_id" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-blue-700 focus:ring-blue-200" required>
                    <option value="">Seleccione un proveedor</option>
                    @foreach($proveedores as $proveedor)
                        <option value="{{ $proveedor->id }}">{{ $proveedor->contacto }}</option>
                    @endforeach
                </select>
            </div>
            
            <div>
                <label class="block mb-2 font-semibold text-gray-700">Empleado</label>
                <select name="empleado_id" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-blue-700 focus:ring-blue-200" required>
                    <option value="">Seleccione un empleado</option>
                    @foreach($empleados as $empleado)
                        <option value="{{ $empleado->id }}">{{ $empleado->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <!-- SOLO GUARDA TOTAL en pedidos -->
            <div>
                <label class="block mb-2 font-semibold text-gray-700">Total del Pedido</label>
                <input type="number"
                    name="total"
                    min="0"
                    max="9999.99"
                    step="0.01"
                    required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-blue-700 focus:ring-blue-200">
            </div>

            <!-- Estatus con name -->
            <div>
                <label class="block mb-2 font-semibold text-gray-700">Estatus</label>
                <select name="estatus" class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-blue-700 focus:ring-blue-200">
                    <option value="realizado">Realizado</option>
                    <option value="cancelado">Cancelado</option>
                </select>
            </div>

            <!-- Botones -->
            <div class="md:col-span-2 flex justify-end gap-4">
                <a href="/pedido/lista"
                    class="bg-gray-500 hover:bg-gray-600 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition">
                    Cancelar
                </a>
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition">
                    Guardar Pedido
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Botón separado para historial -->
<div class="max-w-5xl mx-auto mt-4 text-right">
    <a href="/pedido/lista"
        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition inline-block">
        Ver historial de pedidos
    </a>
</div>

@endsection