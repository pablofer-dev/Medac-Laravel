@extends('layouts/app')
@section('title')
    RESERVA
@endsection
   @section('content')
    <hr class="border border-dark border-bootom linea1">
    <div class="d-flex justify-content-center headerFood">
        <div class="logoChinFood">
            <img src="../img/reserva/logoTest200px.png" id="imgLogoReserva">
        </div>
        <div class="d-flex">
            <div class="coloresGUIA">
                <div class="flex-column fs-6">
                    <div class="containerYellow d-flex">
                        <div class="square square-lg bg-warning cuadrado">

                        </div>
                        <div class="texto">
                            <p>DISPONIBLE</p>
                        </div>
                    </div>
                    <div class="containerGris d-flex">
                        <div class="square square-lg bg-secondary cuadrado">
                        </div>
                        <div class="texto">
                            <p>CERRADO</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coloresGUIA2">
                <div class="fs-6">
                    <div class="containerVerde d-flex">

                        <div class="square square-lg bg-success cuadrado">
                        </div>
                        <div class="texto">
                            <p>DIA SELECCIONADO</p>
                        </div>
                    </div>
                    <div class="containerRojo d-flex">
                        <div class="square square-lg bg-danger cuadrado">
                        </div>
                        <div class="texto">
                            <p>NO DISPONIBLE</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="border border-dark border-bootom linea2">
    <div class="container">
        <div class="row">
            <div class="d-flex">
                <div class="col-4">
                    <div class="circulo">
                        <h2>1</h2>
                    </div>
                    <div class="textoDiv text-center fs-5 mt-2">
                        <p class="mb-0 fw-bold">ENCONTRAR</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="circulo2">
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
    <form action="#" class="container d-flex justify-content-center align-items-center mt-5">
        <div class="informacion fs-5">
            <select name="lenguajes" id="lang">
                <option value="comensales">COMENSALES</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="form-check fs-5 mx-5">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Comida
            </label>
        </div>
        <div class="form-check fs-5">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Cena
            </label>
        </div>
    </form>
    <div class="container fs-4 d-flex justify-content-center mt-5">
        <div id="datepicker"></div>
    </div>
    <hr class="border border-dark border-bootom linea2">
    <div class="container">
        <div class="tabla1 d-flex justify-content-center align-items-center fs-5 text-center my-5">
            <div class="celda1 mx-4 py-2">
                <p class="mb-0">1:45</p>
            </div>
            <div class="celda1 mx-4 py-2">
                <p class="mb-0">1:45</p>
            </div>
            <div class="celda1 mx-4 py-2">
                <p class="mb-0">1:45</p>
            </div>
            <div class="celda1 mx-4 py-2">
                <p class="mb-0">1:45</p>
            </div>
        </div>
        <div class="tabla1 d-flex justify-content-center align-items-center fs-5 text-center my-5">
            <div class="celda1 mx-4 py-2">
                <p class="mb-0">1:45</p>
            </div>
            <div class="celda1 mx-4 py-2">
                <p class="mb-0">1:45</p>
            </div>
            <div class="celda1 mx-4 py-2">
                <p class="mb-0">1:45</p>
            </div>
            <div class="celda1 mx-4 py-2">
                <p class="mb-0">1:45</p>
            </div>
        </div>
        <div class="tabla1 d-flex justify-content-center align-items-center fs-5 text-center my-5">
            <div class="celda1 mx-4 py-2">
                <p class="mb-0">1:45</p>
            </div>
            <div class="celda1 mx-4 py-2">
                <p class="mb-0">1:45</p>
            </div>
            <div class="celda1 mx-4 py-2">
                <p class="mb-0">1:45</p>
            </div>
            <div class="celda1 mx-4 py-2">
                <p class="mb-0">1:45</p>
            </div>
        </div>
        <div class="tabla1 d-flex justify-content-center align-items-center fs-5 text-center my-5">
            <div class="celda1 mx-4 py-2">
                <p class="mb-0">1:45</p>
            </div>
            <div class="celda1 mx-4 py-2">
                <p class="mb-0">1:45</p>
            </div>
            <div class="celda1 mx-4 py-2">
                <p class="mb-0">1:45</p>
            </div>
            <div class="celda1 mx-4 py-2">
                <p class="mb-0">1:45</p>
            </div>
        </div>
        <div class="tabla1 d-flex justify-content-center align-items-center fs-5 text-center my-5">
            <div class="celda1 mx-4 py-2">
                <p class="mb-0 "><a href="{{url('/reservas-info')}}" id="decoration">SIGUIENTE</a></p>
            </div>

        </div>

    </div>
   @endsection
