<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    {{-- Full calendar --}}
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <header>
        <div class="containerHeader">
            <input type="checkbox" name="check" id="ch" class="ch5">
            <label for="ch" class="ch2"><i class="fa-sharp fa-solid fa-bars icon fs-5"></i></label>
            <div class="containerLeft">
                <a href="{{ url('/') }}"><img src="./img/header/logoTest.png" alt="img" id="fotoHeaderID" class="fotoHeader"></a>
            </div>
            <div class="containerRight">
                <ul class="menus">
                    <li><a href="{{ url('/') }}"><span class="hover fs-5">INICIO</span></a></li>
                    <li><a href="{{ url('/') }}" class="hover fs-5">MENU</a></li>
                    <li><a href="{{ url('/contacto') }}" class="hover fs-5">CONTACTO</a></li>
                    @if (Auth::check())
                    <li><a href="{{ url('/perfil') }}" class="hover fs-5">PERFIL</a></li>
                    <li><a href="{{ url('/logout') }}" class="hover fs-5">LOGOUT</a></li>
                    @else
                    <li><a href="{{ url('/signin') }}" class="hover fs-5">LOGIN</a></li>
                    @endif
                    <li><a href="{{ url('/reservas') }}" class="hover resev fs-5">RESERVAR</a></li>
                </ul>
            </div>
        </div>
    </header>

    @yield('content')

    @if (!Request::is('signin') && !Request::is('signup') && !Request::is('info') && !Request::is('reservas'))
        <footer>
            <div class="containerFooter">
                <div class="containerMiddleFooter">
                    <img src="./img/header/logoTest.png" alt="img" class="imgFooter">
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
