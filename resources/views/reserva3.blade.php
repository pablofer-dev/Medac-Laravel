@extends('layouts/app')
@section('title')
    RESERVA
@endsection
<body>
    @section('content')
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
                        <div class="circulo4">
                            <h2><img src="../img/reserva2/check.png" class="imgCheck"></h2>
                        </div>
                        <div class="textoDiv text-center fs-5 mt-2">
                            <p class="mb-0 fw-bold">INFORMACIÓN</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="circulo">
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
        <div class="container text-center my-5">
            <h1>Gracias Pablo, su reserva está pendiente</h1>
            <p class="fs-3">Se envió la confirmación por correo.</p>
        </div>
        <hr class="border border-dark border-bootom linea2">
        <div class="container containerDatosReserva">
            <h3>DATOS DE LA RESERVA</h3>
            <div class="comensales d-flex">
                <h5 class="mb-1">COMENSALES: </h5>
                <h5 class="m-3 mt-0 mb-1">2 personas</h5>
            </div>
            <div class="comensales d-flex">
                <h5 class="mb-1">DIA: </h5>
                <h5 class="m-3 mt-0 mb-1">28-10-2022</h5>
            </div>
            <div class="comensales d-flex">
                <h5 class="mb-1">HORA: </h5>
                <h5 class="m-3 mt-0 mb-1">13:45h</h5>
            </div>
            <div class="comensales d-flex">
                <h5 class="mb-1">UBICACIÓN: </h5>
                <h5 class="m-3 mt-0 mb-1">Urb. Puente Romano Fase II, Locales 83 & 84, de Marbella (Málaga)</h5>
            </div>
        </div>

        <hr class="border border-dark border-bootom linea2">
        <div class="container containerDatosReserva mb-5">
            <h3>SUS DATOS</h3>
            <div class="comensales d-flex">
                <h5 class="mb-1">NOMBRE: </h5>
                <h5 class="m-3 mt-0 mb-1">Pablo</h5>
            </div>
            <div class="comensales d-flex">
                <h5 class="mb-1">APELLIDO: </h5>
                <h5 class="m-3 mt-0 mb-1">Fernández López</h5>
            </div>
            <div class="comensales d-flex">
                <h5 class="mb-1">EMAIL: </h5>
                <h5 class="m-3 mt-0 mb-1">pablofern@gmail.com</h5>
            </div>
            <div class="comensales d-flex">
                <h5 class="mb-1">TELÉFONO: </h5>
                <h5 class="m-3 mt-0 mb-1">6567385934</h5>
            </div>
            <div class="comensales d-flex">
                <h5 class="mb-1">CP: </h5>
                <h5 class="m-3 mt-0 mb-1">14010</h5>
            </div>
            <div class="comensales d-flex">
                <h5 class="mb-1">PAÍS: </h5>
                <h5 class="m-3 mt-0 mb-1">España</h5>
            </div>
            <div class="comensales d-flex">
                <h5 class="mb-1">FECHA DE NACIMIENTO: </h5>
                <h5 class="m-3 mt-0 mb-1">23-04-2001</h5>
            </div>

        </div>
        <div class="container justify-content-center d-flex my-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.9493553111397!2d-69.86108721810525!3d19.18544538743949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eae5322b25756ad%3A0x4718776223ddf5fe!2sSolo%20De%20Chin%20Food%20And%20Drink%20Restaurant!5e0!3m2!1ses!2ses!4v1666458786207!5m2!1ses!2ses"
                width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </body>
@endsection
</body>

</html>
