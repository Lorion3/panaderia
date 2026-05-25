@extends('/plantilla/base')

@section('dinamico')
<div class="max-w-5xl mx-auto p-6">

    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-blue-100">

        <div class="bg-blue-800 text-white px-6 py-4">
            <h2 class="text-2xl font-bold">Registrar Venta</h2>
        </div>

        <form class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <label class="block mb-2 font-semibold text-gray-700">Producto</label>
                <select class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-blue-200 focus:border-blue-700">
                    <option>Seleccionar producto</option>
                </select>
            </div>

            <div>
                <label class="block mb-2 font-semibold text-gray-700">Empleado</label>
                <select class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-blue-200 focus:border-blue-700">
                    <option>Seleccionar empleado</option>
                </select>
            </div>

            <div>
                <label class="block mb-2 font-semibold text-gray-700">Cliente</label>
                <select class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-blue-200 focus:border-blue-700">
                    <option>Seleccionar cliente</option>
                </select>
            </div>

            <div>
                <label class="block mb-2 font-semibold text-gray-700">Precio</label>
                <input type="number"
                name="precio"
                required
                min="0"
                max="9999.99"
                step="0.01"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-blue-200 focus:border-blue-700">
            </div>

            <div>
                <label class="block mb-2 font-semibold text-gray-700">Impuesto</label>
                <input type="number"
                name="impuesto"
                step="0.01"
                max="9999.99"
                required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-blue-200 focus:border-blue-700">
            </div>

            <div>
                <label class="block mb-2 font-semibold text-gray-700">Total</label>
                <input type="number"
                name="total"
                min="0"
                required
                max="9999.99"
                step="0.01"
                min
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-blue-200 focus:border-blue-700">
            </div>

            <div>
                <label class="block mb-2 font-semibold text-gray-700">Estatus</label>
                <select class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-blue-200 focus:border-blue-700">
                    <option>Realizada</option>
                    <option>Cancelada</option>
                </select>
            </div>

            <div class="md:col-span-2 flex justify-end">
                <a href="/venta/tabla"
                        class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300 inline-block">
                        Guardar Venta
                    </a>
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-900 text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition">
                    Guardar Venta
                </button>
            </div>

        </form>
    </div>
</div>

@endsection
 