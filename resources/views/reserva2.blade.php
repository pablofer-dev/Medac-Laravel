@extends('layouts/app')
@section('title')
    RESERVA
@endsection
@section('content')
    <div class="container d-flex justify-content-center align-items-end my-3">
        <div class="img p-3">
            <img src="../img/reserva/logoTest200px.png">
        </div>

        <div class="reserva p-3">
            <h1 class="fs-1 mb-0">RESERVA</h1>
        </div>
    </div>
    <hr class="border border-dark border-bootom linea1">
    <div class="container ">
        <div class="row">
            <div class="d-flex">
                <div class="col-4">
                    <div class="circulo4">
                        <img src="../img/reserva2/check.png" class="imgCheck">
                    </div>
                    <div class="textoDiv text-center fs-5 mt-2">
                        <p class="mb-0 fw-bold">ENCONTRAR</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="circulo">
                        <h2>2</h2>
                    </div>
                    <div class="textoDiv text-center fs-5 mt-2">
                        <p class="mb-0 fw-bold">INFORMACIÓN</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="circulo3">
                        <h2>3</h2>
                    </div>
                    <div class="textoDiv text-center fs-5 mt-2">
                        <p class="mb-0 fw-bold">CONFIRMACIÓN</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="border border-dark border-bootom linea2">
    <div class="container fs-5">
        <div class="informacion text-left">
            @isset($fecha)
                @php
                    session()->put('fecha', $fecha[0]['fk_fecha']);
                @endphp
                <div class="fecha"><i class="fa-solid fa-calendar-days"><span class="p-2 text22">{{ $fecha[0]['fk_fecha'] }},
                            {{ $hora[0]['hora'] }}.</span></i>
                </div>
                <div class="localizacion"><i class="fa-solid fa-location-dot"><span class="p-2 text22">Urb. Puente Romano
                            Fase II, Locales 83 & 84,
                            de
                            Marbella</span></i></div>
            @endisset
        </div>
    </div>
    <hr class="border border-dark border-bootom linea2">
    <div class="container">
        <div class="registrase fs-5 font fw-bold">
            <p>Resgistrate para guardar sus datos,documentos...<a href="{{ url('/signup') }}">REGISTRATE AQUÍ</a></p>
        </div>
    </div>
    <div class="container fs-4">
        @if (Auth::user())
            <form action="/reservas-confirmacion" method="POST">
                @csrf
                <div class="formdata row mb-4 my-5">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example1">NOMBRE</label>
                            <input type="text" id="form6Example1" name="nombre" class="form-control py-3 fs-5"
                                value="{{ Auth::user()->name }}" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example2">APELLIDO</label>
                            <input type="text" id="form6Example2" name="apellido" class="form-control py-3 fs-5"
                                value="{{ Auth::user()->apellido }}" />
                        </div>
                    </div>
                </div>
                <div class="row formdata">
                    <div class="col-6">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example3">EMAIL</label>
                            <input type="text" id="form6Example3" name="email" class="form-control py-3 fs-5"
                                value="{{ Auth::user()->email }}" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example4">TELÉFONO</label>
                            <input type="text" id="form6Example4" name="telefono" class="form-control py-3 fs-5"
                                value="{{ Auth::user()->telefono }}" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example5">C.P</label>
                            <input type="text" id="form6Example5" name="cp" class="form-control py-3 fs-5" />
                        </div>
                    </div>
                </div>
                <div class="row formdata">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example6">PAÍS</label>
                            <input type="text" id="form6Example6" name="pais" class="form-control py-3 fs-5" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example7">FECHA DE NACIMIENTO</label>
                            <input type="date" id="form6Example7" name="nacimiento" class="form-control py-3 fs-5" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example8">TARJETA DE CREDITO</label>
                            <input type="text" id="form6Example8" name="card" class="form-control py-3 fs-5" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example9">CVV</label>
                            <input type="number" id="form6Example9" class="form-control py-3 fs-5" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example10">MENU</label>
                        </div>
                        <select name="menu" class="p-4">
                            @foreach ($menus as $item)
                                <option value="{{ $item['id'] }}" name="{{ $item['id'] }}">{{ $item['nombre'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <p class="mb-2">¿Tiene algún comensal alguna intolerancia/alergia?</p>
                <div class="radioButtoms d-flex">
                    <div class="form-check">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Si
                        </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    </div>
                    <div class="form-check mx-5">
                        <label class="form-check-label" for="flexRadioDefault2">
                            No
                        </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                    </div>
                </div>
                <div class="reservaCoste text-center">
                    <p class="fw-bold fs-5 my-4">Realizar la reserva costará 210€/persona</p>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Acepto las condiciones de uso, política de privacidad y aviso legal.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Consiento el tratamiento de datos personales.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Consiento la recepción de comunicaciones del restaurante por e-mail y/o SMS con fines comerciales.
                    </label>
                </div>
                <div class="centrar d-flex justify-content-center my-5">
                    <button
                        class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Enviar</button>
                </div>
            </form>
        @else
            <form action="/reservas-confirmacion" method="POST">
                @csrf
                <div class="formdata row mb-4 my-5">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example1">NOMBRE</label>
                            <input type="text" id="form6Example1" name="nombre" class="form-control py-3 fs-5" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example2">APELLIDO</label>
                            <input type="text" id="form6Example2" name="apellido" class="form-control py-3 fs-5" />
                        </div>
                    </div>
                </div>
                <div class="formdatarow">
                    <div class="col-6">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example3">EMAIL</label>
                            <input type="text" id="form6Example3" name="email" class="form-control py-3 fs-5" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="formdata row">
                            <div class="col-6">
                                <div class="form-outline">
                                    <label class="form-label" for="form6Example4">TELÉFONO</label>
                                    <input type="text" id="form6Example4" name="telefono"
                                        class="form-control py-3 fs-5" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-outline">
                                    <label class="form-label" for="form6Example5">C.P</label>
                                    <input type="text" id="form6Example5" name="cp"
                                        class="form-control py-3 fs-5" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="formdata row ">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example6">PAÍS</label>
                            <input type="text" id="form6Example6" name="pais" class="form-control py-3 fs-5" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example7">FECHA DE NACIMIENTO</label>
                            <input type="date" id="form6Example7" name="nacimiento" class="form-control py-3 fs-5" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example8">TARJETA DE CREDITO</label>
                            <input type="text" id="form6Example8" name="card" class="form-control py-3 fs-5" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example9">CVV</label>
                            <input type="number" id="form6Example9" class="form-control py-3 fs-5" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example10">MENU</label>
                        </div>
                        <select name="menu" class="p-4">
                            @foreach ($menus as $item)
                                <option value="{{ $item['id'] }}" name="{{ $item['id'] }}">{{ $item['nombre'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example11">COMENSALES</label>
                            <input type="number" id="form6Example11" name="comensales" min="1" max="4"
                                class="form-control py-3 fs-5" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example12">COMIDA</label>
                            <input type="radio" id="form6Example12" name="comida" value="COMIDA"><br>
                            <label for="form6Example12">CENA</label>
                            <input type="radio" id="css" name="cena" value="CENA">
                        </div>
                    </div>
                </div>
                <p class="mb-2">¿Tiene algún comensal alguna intolerancia/alergia?</p>
                <div class="radioButtoms d-flex">
                    <div class="form-check">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Si
                        </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    </div>
                    <div class="form-check mx-5">
                        <label class="form-check-label" for="flexRadioDefault2">
                            No
                        </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                    </div>
                </div>
                <div class="reservaCoste text-center">
                    <p class="fw-bold fs-5 my-4">Realizar la reserva costará 10€/persona</p>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Acepto las condiciones de uso, política de privacidad y aviso legal.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Consiento el tratamiento de datos personales.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Consiento la recepción de comunicaciones del restaurante por e-mail y/o SMS con fines comerciales.
                    </label>
                </div>
                <div class="centrar d-flex justify-content-center my-5">
                    <button
                        class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Enviar</button>
                </div>
            </form>
        @endif
    </div>
@endsection
