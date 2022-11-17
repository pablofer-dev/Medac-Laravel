@extends('layouts.app')
@section('title')
    Contacto
@endsection

@section('content')
<h1>adsasd</h1>
    <form action="/contacto" method="post">
        @csrf
        Nombre: <input type="text" name="nombre">
        <button>Enviar</button>
    </form>
@endsection
