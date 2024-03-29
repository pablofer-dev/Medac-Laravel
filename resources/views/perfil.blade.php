@extends('layouts.app')
@section('title')
    PERFIL
@endsection
@if (Auth::check())

    @section('content')
        <div class="container d-flex justify-content-center align-items-end my-3">
            <div class="img p-3">
                <img src="../img/reserva/logoTest200px.png">
            </div>

            <div class="reserva p-3">
                <h1 class="fs-1 mb-0">PERFIL</h1>
            </div>
        </div>
        <hr class="border border-dark border-bootom linea2">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="imgPerfil">

            </div>
            <div class="textoPefil">

                <h1 class="my-5">Bienvenido,
                    {{ strtoupper(Auth::user()->name) . ' ' . strtoupper(Auth::user()->apellido) }}
                    <form action="/logout" method="get" class="text-center mt-2">
                        @csrf
                        <input type="submit" value="Logout" class="btn btn-danger text-center fs-4">
                    </form>
                </h1>

            </div>
        </div>
        <hr class="border border-dark border-bootom linea2">
        <div class="container d-flex mt-5 datosCliente">
            <div class="datosPerfil">
                <div class="container containerDatosReserva mb-5">
                    <h3 class="fw-bold fs-1 my-3 text-center">SUS DATOS</h3>
                    <div class="textoDatos m-4 mt-0 mb-0 mr-0">
                        <div class="comensales d-flex justify-content-center">
                            <h5 class="mb-1 ">NOMBRE: </h5>
                            <h5 class="m-3 mt-0 mb-1">{{ Auth::user()->name }}</h5>
                        </div>
                        <div class="comensales d-flex justify-content-center mt-2">
                            <h5 class="mb-1">APELLIDO: </h5>
                            <h5 class="m-3 mt-0 mb-1">{{ Auth::user()->apellido }}</h5>
                        </div>
                        <div class="comensales d-flex justify-content-center mt-2">
                            <h5 class="mb-1">EMAIL: </h5>
                            <h5 class="m-3 mt-0 mb-1">{{ Auth::user()->email }}</h5>
                        </div>
                        <div class="comensales d-flex justify-content-center mt-2">
                            <h5 class="mb-1">TELÉFONO: </h5>
                            <h5 class="m-3 mt-0 mb-1">{{ Auth::user()->telefono }}</h5>
                        </div>

                    </div>
                </div>
            </div>
            <div class="datosPerfil">
                <div class="container containerDatosReserva mb-5">
                    <h3 class="text-center fw-bold fs-1 my-3">RESERVAS</h3>
                    <table class="table table-hover fs-5 text-center align-items-center">
                        <thead>
                            <tr>
                                <th scope="col" class="reservas">#</th>
                                <th scope="col" class="reservas">ID</th>
                                <th scope="col" class="reservas">RESERVA</th>
                                <th scope="col" class="reservas">CANCELAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($result)
                                @php
                                    $cont = 1;
                                @endphp
                                @foreach ($result as $item)
                                    <th scope="row" class="reservas">{{ $cont }}</th>
                                    <td class="reservas pt-3">{{ $item->id }}</td>
                                    <td class="reservas pt-3">{{ $item->fecha_fk }}</td>
                                    <td class="reservas">
                                        <form action="/perfil" method="post">
                                            @csrf
                                            <button type="submit"class="btn btn-danger">CANCELAR</button>
                                        </form>
                                    </td>
                                @endforeach
                            @endisset

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="container d-flex justify-content-around">
            <div class="space">
            </div>
            <div class="datosPerfil">
                <div class="container containerDatosReserva mb-5">
                    <h3 class="text-center fw-bold fs-1 my-3">DESCUENTOS ACTIVOS</h3>
                    <table class="table table-hover fs-5 text-center align-items-center">
                        <thead>
                            <tr>
                                <th scope="col" class="reservas">#</th>
                                <th scope="col" class="reservas">ID</th>
                                <th scope="col" class="reservas">DESCUENTO EN</th>
                                <th scope="col" class="reservas">%</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="reservas">1</th>
                                <td class="reservas">1233123F</td>
                                <td class="reservas">13-02-2022</td>
                                <td class="reservas">5%</td>
                            </tr>
                            <tr>
                                <th scope="row" class="reservas">2</th>
                                <td class="reservas">2342341F</td>
                                <td class="reservas">11-03-2022</td>
                                <td class="reservas">11%</td>
                            </tr>
                            <tr>
                                <th scope="row" class="reservas">3</th>
                                <td class="reservas">43421124A</td>
                                <td class="reservas">04-01-2022</td>
                                <td class="reservas">12%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="container descuento">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <form>
                        <label class="fs-5">Activardecuento</label>
                        <div class="form-group d-flex">
                            <input type="text" class="form-control p-2" placeholder="ID">
                            <button type="submit" class="btn btn-success botonActivar">Activar</button>
                        </div>
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    @endsection
@endif
