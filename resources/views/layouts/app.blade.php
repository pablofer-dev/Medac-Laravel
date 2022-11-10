<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- FONTAWESOME -->
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
                <a href="{{url('/')}}"><img src="./img/header/logoTest.png" class="fotoHeader"></a>
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
    @yield('content')
    @if (!Request::is('signin') && !Request::is('signup'))
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
    @endif
    
</body>
</html>
