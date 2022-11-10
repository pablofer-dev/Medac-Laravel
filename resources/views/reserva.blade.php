<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHINFOOD RESERVA</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- ICONOS FOOTER -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- ICONO FAVICON -->
    <link rel="icon" type="image/png" href="https://i.imgur.com/h6aX67B.png" />
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <!-- DATEPICKER -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

@extends('layouts/app')

</head>

<body>
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

</body>

</html>