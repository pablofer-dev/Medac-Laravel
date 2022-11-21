@extends('layouts.app')
@section('title')
    Contacto
@endsection

@section('content')
    @if (session()->has('mensaje'))
        <div class="alert alert-success w-11/12 mx-auto mt-3" role="alert">
            {{ session('mensaje') }}
        </div>
    @endif
    <h1 class="text-center">Contacta con nosotros</h1>
    <div class="flex m-5">
        <div class="img mx-auto">
            <img src="../img/contacto/contacto.jpg" class="object-scale-down h-85 w-90 ">
        </div>
        <form action="/contacto" method="post" class=" mx-auto w-5/12">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="nombre">
                    <p class="text-base">Nombre</p>
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="nombre" type="text" placeholder="Nombre" name="nombre" value={{ old('nombre') }}>
                <div class="error bg-rose-900 text-neutral-100">
                    @error('nombre')
                        <p class="tect-center text-lg">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="apellido">
                    <p class="text-base">Apellido</p>
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="apellido" type="text" placeholder="Apellido" name="apellido" value={{ old('apellido') }}>
                <div class="error bg-rose-900 text-neutral-100">
                    @error('apellido')
                        <p class="tect-center text-lg">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">
                    <p class="text-base">Email</p>
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="text" placeholder="Email" name="email" value={{ old('email') }}>
                <div class="error bg-rose-900 text-neutral-100">
                    @error('email')
                        <p class="tect-center text-lg">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email2">
                    <p class="text-base">Confirmación Email</p>
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email2" type="text" placeholder="Email" name="email_confirmation" value={{ old('email2') }}>
                <div class="error bg-rose-900 text-neutral-100">
                    @error('email2')
                        <p class="tect-center text-lg">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="mensaje">
                    <p class="text-base">Mensaje</p>
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="mensaje" type="text" placeholder="Mensaje" name="mensaje" value={{ old('mensaje') }}>
                <div class="error bg-rose-900 text-neutral-100">
                    @error('mensaje')
                        <p class="tect-center text-lg">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button
                class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Enviar</button>
        </form>
    </div>
@endsection
