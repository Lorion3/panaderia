@extends('/plantilla/base')

@section('dinamico')
<div class="max-w-5xl mx-auto p-6">
    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-blue-100">
        <div class="bg-blue-800 text-white px-6 py-4">
            <h2 class="text-2xl font-bold">Editar Venta</h2>
        </div>

        <form method="POST" action="/venta/actualizar/{{ $venta->id }}" class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block mb-2 font-semibold text-gray-700">Cliente</label>
                <select name="cliente_id" class="w-full rounded-xl border border-gray-300 px-4 py-3">
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}" {{ $venta->cliente_id == $cliente->id ? 'selected' : '' }}>
                            {{ $cliente->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block mb-2 font-semibold text-gray-700">Total</label>
                <input type="number" name="total" value="{{ $venta->total }}" step="0.01" class="w-full rounded-xl border border-gray-300 px-4 py-3">
            </div>

            <div>
                <label class="block mb-2 font-semibold text-gray-700">Estatus</label>
                <select name="estatus" class="w-full rounded-xl border border-gray-300 px-4 py-3">
                    <option value="realizada" {{ $venta->estatus == 'realizada' ? 'selected' : '' }}>Realizada</option>
                    <option value="cancelada" {{ $venta->estatus == 'cancelada' ? 'selected' : '' }}>Cancelada</option>
                </select>
            </div>

            <div class="md:col-span-2 flex justify-end gap-4">
                <a href="/venta/lista" class="bg-gray-500 text-white px-8 py-3 rounded-xl">Cancelar</a>
                <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-xl">Actualizar</button>
            </div>
        </form>
    </div>
</div>
@endsection