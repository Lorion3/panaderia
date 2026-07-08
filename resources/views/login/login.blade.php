@extends('plantilla/base')

@section('dinamico')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

<div class="flex justify-center items-center h-screen bg-gray-100">
    <div class="w-96 p-6 shadow-lg bg-white rounded-md">
        <h1 class="text-3xl block text-center font-semibold">
            <i class="fa-solid fa-user-lock"></i> Login
        </h1>

        <hr class="mt-3">

        @if(session('error'))
            <div class="mt-3 p-3 bg-red-100 text-red-700 rounded">
                {{ session('error') }}
            </div>
        @endif

        @if($errors->any())
            <div class="mt-3 p-3 bg-red-100 text-red-700 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario de login normal -->
        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <div class="mt-3">
                <label for="usuario" class="block text-base mb-2">
                    <i class="fa-solid fa-id-card-clip"></i> Username
                </label>
                <input
                    type="text"
                    id="usuario"
                    name="usuario"
                    value="{{ old('usuario') }}"
                    class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600"
                    placeholder="Ingresar Usuario"
                    required
                />
            </div>

            <div class="mt-3">
                <label for="contrasena" class="block text-base mb-2">
                    <i class="fa-solid fa-key"></i> Password
                </label>
                <input
                    type="password"
                    id="contrasena"
                    name="contrasena"
                    class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600"
                    placeholder="Ingresar Contraseña"
                    required
                />
            </div>

            <div class="mt-3 flex justify-between items-center">
                
            </div>

            <div class="mt-5">
                <button
                    type="submit"
                    class="bg-indigo-600 w-full text-white py-2 border border-indigo-600 rounded-md hover:bg-transparent hover:text-indigo-600 transition duration-300">
                    Entrar
                </button>
            </div>

            <div class="mt-3 text-center">
                <a href="#" class="text-indigo-600 font-semibold">
                    Olvidé mi contraseña
                </a>
            </div>
        </form>

        <!-- Botón de Google - Fuera del formulario -->
        <div class="mt-5">
            <a 
                href="{{ url('/auth/google/redirect') }}" 
                class="flex items-center justify-center bg-red-600 w-full text-white py-2 border border-red-600 rounded-md hover:bg-transparent hover:text-red-600 transition duration-300"
            >
                <i class="fa-brands fa-google mr-2"></i> Entrar Con Google
            </a>
        </div>
    </div>
</div>
@endsection