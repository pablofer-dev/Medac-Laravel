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



</head>

<body>
    <header>
        <div class="containerHeader">
                <input type="checkbox" name="check" id="ch" class="ch5">
                <label for="ch" class="ch2"><i class="fa-sharp fa-solid fa-bars icon fs-5"></i></label>
            <div class="containerLeft">
                <a href=""><img src="./img/header/logoTest.png" class="fotoHeader"></a>
            </div>
            <div class="containerRight">
                <ul class="menus">
                    <li><a href="{{url('/')}}"><span class="hover fs-5">INICIO</span></a></li>
                    <li><a href="{{url('/')}}" class="hover fs-5">MENU</a></li>
                    <li><a href="{{url('/reservas')}}" class="hover fs-5">RESERVAR</a></li>
                    <li><a href="{{ url('/signin') }}" class="hover fs-5">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="container d-flex justify-content-center align-items-end my-3">
        <div class="img p-3">
            <img src="../img/reserva/logoTest200px.png">
        </div>

        <div class="reserva p-3">
            <h1 class="fs-1 mb-0">REGISTRAR</h1>
        </div>
    </div>
    <hr class="border border-dark border-bootom linea2">
    <div class="container text-center">
        <h5>TIENES CUENTA. <a href="{{url('/signin')}}">LOGUEATE AQUÍ</a></h5>
    </div>
    <div class="container fs-4">
        <form>
            <div class="row mb-4 my-5">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example1">NOMBRE</label>
                        <input type="text" id="form6Example1" class="form-control py-3 fs-5" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example2">APELLIDO</label>
                        <input type="text" id="form6Example2" class="form-control py-3 fs-5" />
                    </div>
                </div>
            </div>
            <div class="row mb-4  my-5">
                <div class="col-6">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example3">EMAIL</label>
                        <input type="text" id="form6Example3" class="form-control py-3 fs-5" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example4">TELÉFONO</label>
                                <input type="text" id="form6Example4" class="form-control py-3 fs-5" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example5">C.P</label>
                                <input type="text" id="form6Example5" class="form-control py-3 fs-5" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 my-5">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example6">PAÍS</label>
                        <input type="text" id="form6Example6" class="form-control py-3 fs-5" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example7">FECHA DE NACIMIENTO</label>
                        <input type="text" id="form6Example7" class="form-control py-3 fs-5" />
                    </div>
                </div>
            </div>
            <div class="centrar d-flex justify-content-center my-5">
                <button type="submit" class="btn colorboton btn-block mb-4 px-5 py-3"><a href="./reserva3.html"
                        id="decoration">REGISTRARSE</a></button>
            </div>
        </form>
    </div>
    
</body>

</html>