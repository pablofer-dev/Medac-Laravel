<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHINFOOD RESERVA</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- ICONOS FOOTER -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- ICONO FAVICON -->
    <link rel="icon" type="image/png" href="https://i.imgur.com/h6aX67B.png" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <div class="fecha"><i class="fa-solid fa-calendar-days"><span class="p-2 text22">28-09-2022,
                        13:45h.</span></i>
            </div>
            <div class="numeroPersonas"><i class="fa-solid fa-users"><span class="p-2 text22">2 personas.</span></i>
            </div>
            <div class="localizacion"><i class="fa-solid fa-location-dot"><span class="p-2 text22">Urb. Puente Romano
                        Fase II, Locales 83 & 84,
                        de
                        Marbella</span></i></div>
        </div>
    </div>
    <hr class="border border-dark border-bootom linea2">
    <div class="container">
        <div class="registrase fs-5 font fw-bold">
            <p>Resgistrate para guardar sus datos,documentos...<a href="{{url('/signup')}}">REGISTRATE AQUÍ</a></p>
        </div>
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
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
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
        </form>
        <div class="centrar d-flex justify-content-center my-5">
            <button type="submit" class="btn colorboton btn-block mb-4 px-5 py-3"><a href="{{url('/reservas-confirmacion')}}"
                    id="decoration">RESERVAR</a></button>
        </div>
    </div>
    <footer>
        <div class="containerFooter">
            <div class="containerMiddleFooter">
                <img src="./img/header/logoTest.png" class="imgFooter">
            </div>
            <div class="containerLeftFooter">
                <ul>
                    <li class="listaFooter"><i class="fa-solid fa-solid fa-phone fs-6"></i><span class="separacion">+34622734723</span></li>
                    <li class="listaFooter"><i class="fa-solid fa-envelope fs-6"></i><span class="separacion">pablo76@gmail.com</span></li>
                    <li class="listaFooter"><i class="fa-solid fa-location-dot fs-6"></i><span class="separacion">C/Bautista</span></li>
                    <li class="listaFooter"><i class="fa-solid fa-user fs-6"></i><span class="separacion">@CHINFOOD</span></li>
                </ul>
            </div>
            <div class="containerRightFooter">
                <p class="horario fs-5">HORARIO DE APERTURA</p>
                <P class="hora">13:00 - 16:00 | 19:30 - 23:00</P>
            </div>
        </div>
    </footer>
</body>


</html>
<!-- 
    


-->