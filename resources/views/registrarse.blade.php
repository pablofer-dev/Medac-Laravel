@extends('layouts/app')
@section('title')
    REGISTRARSE
@endsection
<body>
    @section('content')
        <div class="container d-flex justify-content-center align-items-end my-3">
            <div class="img p-3">
                <img src="../img/reserva/logoTest200px.png">
            </div>

            <div class="reserva p-3">
                <h1 class="fs-1 mb-0">REGISTRAR</h1>
            </div>
        </div>
        <hr class="border border-dark border-bootom linea2">
        <div class="container text-center">
            <h5>TIENES CUENTA. <a href="{{ url('/signin') }}">LOGUEATE AQUÍ</a></h5>
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
                <div class="centrar d-flex justify-content-center my-5">
                    <button type="submit" class="btn colorboton btn-block mb-4 px-5 py-3"><a
                            href=""{{ url('/') }}"" id="decoration">REGISTRARSE</a></button>
                </div>
            </form>
        </div>
    @endsection

</body>

</html>
