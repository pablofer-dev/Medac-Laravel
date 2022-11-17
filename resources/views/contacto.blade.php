@extends('layouts.app')
@section('title')
    Contacto
@endsection

@section('content')
    <h1>adsasd</h1>
    @if (session()->has('mensaje'))
        <div class="alert alert-success w-11/12 mx-auto" role="alert">
            {{ session('mensaje') }}
        </div>
    @endif
    <form action="/contacto" method="post">
        @csrf
        Nombre: <input type="text" name="nombre" value={{ old('nombre') }}>
        @error('nombre')
            <p>{{ $message }}</p>
        @enderror
        <button>Enviar</button>

    </form>
@endsection
