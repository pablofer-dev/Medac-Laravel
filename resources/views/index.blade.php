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
    @extends('layouts.app')
</head>

<body>
    
    @section('content')
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
    @endsection
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