@extends('layouts.app')
@section('title')
    CHINFOOD
@endsection

@section('content')
    <div class="foto">
        @if (session()->has('mensaje'))
            <script>
                swal("Se ha realizado la reserva correctamente", "", "success");
            </script>
        @endif

        @if (session()->has('mensaje2'))
            <script>
                swal("Se ha borrado la reserva correctamente", "", "success");
            </script>
        @endif
    </div>
    <div class="d-flex justify-content-center mt-3">
        <div class="rightContainerFoto mr-2">
        </div>
        <div class="rightContainerMenu ml-2">
            <div class="textMenu m-3 mr-5">
                <h1 class="display-5 m-0 border-2 border-bottom border-dark">Menu</h1>
                <p class="fs-3 m-5 mt-0 mb-0">Entrantes</p>
                <p class="fs-4 m-3 ml- mb-0 tituloMenu">Lorem, ipsum dolor.</p>
                <p class="fs-4 m-5 mt-0 mb-0 subtituloMenu">Lorem ipsum dolor sit amet consectetur</p>
                <p class="fs-4 m-3 ml- mb-0 tituloMenu">Lorem, ipsum dolor.</p>
                <p class="fs-4 m-5 mt-0 mb-0 subtituloMenu">Lorem ipsum dolor sit amet consectetur</p>
                <p class="fs-4 m-3 ml- mb-0 tituloMenu">Lorem, ipsum dolor.</p>
                <p class="fs-4 m-5 mt-0 mb-0 subtituloMenu">Lorem ipsum dolor sit amet consectetur</p>
                <p class="fs-4 m-3 ml- mb-0 tituloMenu">Lorem, ipsum dolor.</p>
                <p class="fs-4 m-5 mt-0 mb-0 subtituloMenu">Lorem ipsum dolor sit amet consectetur</p>
            </div>
        </div>

    </div>
    <div class="d-flex justify-content-center mt-3 mb-3">
        <div class="leftContainerMenu mr-2" id="fotoancla">
            <div class="textMenu ml-3">
                <h1 class="mt-2 display-5 m-0 border-2 border-bottom border-dark">Menu</h1>
                <p class="fs-3 m-5 mt-0 mb-0">Ramen</p>
                <p class="fs-4 m-3 ml- mb-0 tituloMenu">Lorem, ipsum dolor.</p>
                <p class="fs-4 m-5 mt-0 mb-0 subtituloMenu">Lorem ipsum dolor sit amet consectetur</p>
                <p class="fs-4 m-3 ml- mb-0 tituloMenu">Lorem, ipsum dolor.</p>
                <p class="fs-4 m-5 mt-0 mb-0 subtituloMenu">Lorem ipsum dolor sit amet consectetur</p>
                <p class="fs-4 m-3 ml- mb-0 tituloMenu">Lorem, ipsum dolor.</p>
                <p class="fs-4 m-5 mt-0 mb-0 subtituloMenu">Lorem ipsum dolor sit amet consectetur</p>
                <p class="fs-4 m-3 ml- mb-0 tituloMenu">Lorem, ipsum dolor.</p>
                <p class="fs-4 m-5 mt-0 mb-0 subtituloMenu">Lorem ipsum dolor sit amet consectetur</p>
            </div>
        </div>
        <div class="leftContainerFoto ml-2">

        </div>
    </div>
@endsection
