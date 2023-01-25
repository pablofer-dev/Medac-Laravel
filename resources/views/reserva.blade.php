@extends('layouts/app')
@section('title')
    RESERVA
@endsection
@section('content')
    <hr class="border border-dark border-bootom linea1">
    <div class="d-flex justify-content-center headerFood">
        <div class="ml-auto pr-10">
            <img src="../img/reserva/logoTest200px.png" id="imgLogoReserva">
        </div>
        <div class="d-flex">
            <div class="coloresGUIA">
                <div class="flex-column fs-6">
                    <div class="containerYellow d-flex">
                        <div class="square square-lg bg-warning cuadrado">
                        </div>
                        <div class="texto">
                            <p>DISPONIBLE</p>
                        </div>
                    </div>
                    <div class="containerGris d-flex">
                        <div class="square square-lg bg-secondary cuadrado">
                        </div>
                        <div class="texto">
                            <p>CERRADO</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coloresGUIA2">
                <div class="fs-6">
                    <div class="containerVerde d-flex">

                        <div class="square square-lg bg-success cuadrado">
                        </div>
                        <div class="texto">
                            <p>DIA SELECCIONADO</p>
                        </div>
                    </div>
                    <div class="containerRojo d-flex">
                        <div class="square square-lg bg-danger cuadrado">
                        </div>
                        <div class="texto">
                            <p>NO DISPONIBLE</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="border border-dark border-bootom linea2">
    <div class="container">
        <div class="row">
            <div class="d-flex">
                <div class="col-4">
                    <div class="circulo">
                        <h2>1</h2>
                    </div>
                    <div class="textoDiv text-center fs-5 mt-2">
                        <p class="mb-0 fw-bold">ENCONTRAR</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="circulo2">
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
    <div class="container calendarioDiv mt-5">
        <div id='calendar'></div>
    </div>

    <div class="container">
        <div class="flex-column justify-content-center align-items-center fs-5 text-center my-5">
            <div id="horas">
            </div>
        </div>
    </div>

    <hr class="border border-dark border-bootom linea2">
    <script>
        var CALENDAR = null;
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            CALENDAR = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    start: 'title',
                    end: 'today prev,next'
                },
                locale: 'es',
                initialView: 'dayGridMonth',
                events: {
                    url: '/events',
                    failure: function() {
                        console.log("Error en obtener los eventos");
                    }
                },
                height: 650,
                eventClick: function(info) {
                    $.ajax({
                        type: 'POST',
                        url: '/events',
                        data: {
                            _token: "{{ csrf_token() }}",
                            fecha: info.event.startStr,
                            type: 'horasAjax'
                        },
                        success: function(response) {
                            let horasDiv = document.getElementById('horas');
                            horasDiv.innerHTML = '';
                            response.forEach(element => {
                                horasDiv.insertAdjacentHTML('beforeend',
                                    `<a class="btn btn-success fs-2" href="{{ url('reservas-info') . '/' }}${element['id'][0]['id']}">${element['hora'][0]['hora']}</a>`
                                );
                            });
                            $('#horas').click(function() {
                                console.log("moviendo");
                            });
                        }
                    })

                }
            });
            CALENDAR.render();
        });
    </script>
@endsection
