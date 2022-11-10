<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!DOCTYPE html>
    <html lang="en">
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
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <!-- DATEPICKER -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>


</head>
</head>

<body>

    <header>
        <div class="containerHeader">
            <input type="checkbox" name="check" id="ch" class="ch5">
            <label for="ch" class="ch2"><i class="fa-sharp fa-solid fa-bars icon fs-5"></i></label>
            <div class="containerLeft">
                <a href="{{ url('/') }}"><img src="./img/header/logoTest.png" class="fotoHeader"></a>
            </div>
            <div class="containerRight">
                <ul class="menus">
                    <li><a href="{{ url('/') }}"><span class="hover fs-5">INICIO</span></a></li>
                    <li><a href="{{ url('/') }}" class="hover fs-5">MENU</a></li>
                    <li><a href="{{ url('/reservas') }}" class="hover fs-5">RESERVAR</a></li>
                    <li><a href="{{ url('/signin') }}" class="hover fs-5">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </header>

    @yield('content')

    @if (!Request::is('signin') && !Request::is('signup'))
        <footer>
            <div class="containerFooter">
                <div class="containerMiddleFooter">
                    <img src="./img/header/logoTest.png" class="imgFooter">
                </div>
                <div class="containerLeftFooter">
                    <ul>
                        <li class="listaFooter"><i class="fa-solid fa-solid fa-phone fs-6"></i><span
                                class="separacion">+34622734723</span></li>
                        <li class="listaFooter"><i class="fa-solid fa-envelope fs-6"></i><span
                                class="separacion">pablo76@gmail.com</span></li>
                        <li class="listaFooter"><i class="fa-solid fa-location-dot fs-6"></i><span
                                class="separacion">C/Bautista</span></li>
                        <li class="listaFooter"><i class="fa-solid fa-user fs-6"></i><span
                                class="separacion">@CHINFOOD</span></li>
                    </ul>
                </div>
                <div class="containerRightFooter">
                    <p class="horario fs-5">HORARIO DE APERTURA</p>
                    <P class="hora">13:00 - 16:00 | 19:30 - 23:00</P>
                </div>
            </div>
        </footer>
    @endif

</body>

</html>
