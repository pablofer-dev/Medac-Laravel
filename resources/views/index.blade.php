<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHINFOOD</title>
    <!-- CSS -->
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
    <div class="foto">
    </div>
    <div class="d-flex justify-content-center mt-3">
        <div class="rightContainerFoto m-auto">

        </div>
        <div class="rightContainerMenu m-auto">
            <div class="textMenu m-3">
                <h1 class="display-5 m-0 border-2 border-bottom border-dark">Menu</h1>
                <p class="fs-3 m-5 mt-0 mb-0">Entrantes</p>
                <p class="fs-4 m-3 ml- mb-0 tituloMenu">Lorem, ipsum dolor.</p>
                <p class="fs-4 m-5 mt-0 mb-0 subtituloMenu">Lorem ipsum dolor sit amet consectetur</p>
                <p class="fs-4 m-3 ml- mb-0 tituloMenu">Lorem, ipsum dolor.</p>
                <p class="fs-4 m-5 mt-0 mb-0 subtituloMenu">Lorem ipsum dolor sit amet consectetur</p>
                <p class="fs-4 m-3 ml- mb-0 tituloMenu">Lorem, ipsum dolor.</p>
                <p class="fs-4 m-5 mt-0 mb-0 subtituloMenu">Lorem ipsum dolor sit amet consectetur</p>
            </div>
        </div>

    </div>
    <div class="d-flex justify-content-center mt-3">
        <div class="leftContainerMenu m-auto">
            <div class="textMenu m-3">
                <h1 class="display-5 m-0 border-2 border-bottom border-dark">Menu</h1>
                <p class="fs-3 m-5 mt-0 mb-0">Ramen</p>
                <p class="fs-4 m-3 ml- mb-0 tituloMenu">Lorem, ipsum dolor.</p>
                <p class="fs-4 m-5 mt-0 mb-0 subtituloMenu">Lorem ipsum dolor sit amet consectetur</p>
                <p class="fs-4 m-3 ml- mb-0 tituloMenu">Lorem, ipsum dolor.</p>
                <p class="fs-4 m-5 mt-0 mb-0 subtituloMenu">Lorem ipsum dolor sit amet consectetur</p>
                <p class="fs-4 m-3 ml- mb-0 tituloMenu">Lorem, ipsum dolor.</p>
                <p class="fs-4 m-5 mt-0 mb-0 subtituloMenu">Lorem ipsum dolor sit amet consectetur</p>
            </div>
        </div>
        <div class="leftContainerFoto m-auto">

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

    variables
    normalizar normalize
    rem 10px
    viewport 
    responsive con la barra vertical
    botones transicion
 -->