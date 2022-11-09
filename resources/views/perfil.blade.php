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
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/90fe9e1d9c.js" crossorigin="anonymous"></script>
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
    <!-- Google icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
            <h1 class="fs-1 mb-0">PERFIL</h1>
        </div>
    </div>
    <hr class="border border-dark border-bootom linea2">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="imgPerfil">

        </div>
        <div class="textoPefil">
            <h1 class="my-5">Bienvenido, Pablo Fernández</h1>
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
                        <h5 class="m-3 mt-0 mb-1">Pablo</h5>
                    </div>
                    <div class="comensales d-flex justify-content-center">
                        <h5 class="mb-1">APELLIDO: </h5>
                        <h5 class="m-3 mt-0 mb-1">Fernández López</h5>
                    </div>
                    <div class="comensales d-flex justify-content-center">
                        <h5 class="mb-1">EMAIL: </h5>
                        <h5 class="m-3 mt-0 mb-1">pablofern@gmail.com</h5>
                    </div>
                    <div class="comensales d-flex justify-content-center">
                        <h5 class="mb-1">TELÉFONO: </h5>
                        <h5 class="m-3 mt-0 mb-1">6567385934</h5>
                    </div>
                    <div class="comensales d-flex justify-content-center">
                        <h5 class="mb-1">CP: </h5>
                        <h5 class="m-3 mt-0 mb-1">14010</h5>
                    </div>
                    <div class="comensales d-flex justify-content-center">
                        <h5 class="mb-1">PAÍS: </h5>
                        <h5 class="m-3 mt-0 mb-1">España</h5>
                    </div>
                    <div class="comensales d-flex justify-content-center">
                        <h5 class="mb-1">FECHA DE NACIMIENTO: </h5>
                        <h5 class="m-3 mt-0 mb-1">23-04-2001</h5>
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
                            <th scope="col" class="reservas">FACTURA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="reservas">1</th>
                            <td class="reservas">5421234D</td>
                            <td class="reservas">23-03-2022</td>
                            <td class="reservas"><a href="#"><span class="material-symbols-outlined">
                                        description
                                    </span></a></td>
                        </tr>
                        <tr>
                            <th scope="row" class="reservas">2</th>
                            <td class="reservas">4321134D</td>
                            <td class="reservas">12-06-2022</td>
                            <td class="reservas"><a href="#"><span class="material-symbols-outlined">
                                        description
                                    </span></a></td>
                        </tr>
                        <tr>
                            <th scope="row" class="reservas">3</th>
                            <td class="reservas">1231444D</td>
                            <td class="reservas">02-06-2022</td>
                            <td class="reservas"><a href="#"><span class="material-symbols-outlined">
                                        description
                                    </span></a></td>
                        </tr>
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