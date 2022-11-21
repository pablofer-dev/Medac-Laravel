@extends('layouts.app')
@section('title')
    LOGIN
@endsection
    @section('content')
        <div class="container d-flex justify-content-center align-items-end my-3">
            <div class="img p-3">
                <img src="./img/reserva/logoTest200px.png">
            </div>

            <div class="reserva p-3">
                <h1 class="fs-1 mb-0">LOGIN</h1>
            </div>
        </div>
        <hr class="border border-dark border-bootom linea2">
        <div class="container text-center">
            <h5>NO TIENES CUENTA. <a href="{{ url('/signup') }}">REGISTRATE AQUÍ</a></h5>
            <p class="fs-5">Tendras descuentos, guardaremos sus reservas, sus datos...</p>
        </div>
        <div class="container fs-3">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control p-3" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group my-3">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control p-3" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="form-check d-flex justify-content-center">
                            <div class="row">
                                <button type="submit" class="btn btn-success px-5 py-2">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    @endsection
