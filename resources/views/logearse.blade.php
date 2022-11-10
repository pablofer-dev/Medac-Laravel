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

@extends('layouts.app')

</head>

<body>
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
        <h5>NO TIENES CUENTA. <a href="{{url('/signup')}}">REGISTRATE AQUÍ</a></h5>
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
</body>

</html>