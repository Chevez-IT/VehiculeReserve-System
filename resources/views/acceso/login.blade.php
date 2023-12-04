@extends('acceso.layouts.layout')

@section('titulo', 'Asociacion Salvadoreña del Agua')

@section('contenido')
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-start">
                                <h4 class="font-weight-bolder">Acceso al sistema</h4>
                                <p class="mb-0">Ingresa al sistema con tus credenciales</p>
                            </div>
                            <div class="card-body">
                                <form role="form">
                                    <div class="mb-3">
                                        <input type="text" class="form-control form-control-lg" placeholder="Correo o Usuario"
                                            aria-label="Correo o Usuario">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control form-control-lg" placeholder="Contraseña"
                                            aria-label="Contraseña">
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-lg btn-primary bg-gradient btn-lg w-100 mt-4 mb-0 letter-spacing-1">Ingresar</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    ¿Olvidaste tu contraseña?
                                    <a href="{{ route('recuperar-contraseña') }}" class="text-primary text-gradient font-weight-bold">Recuperala Aqui</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                        <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                            style="background-image: url('{{ asset('img/bg-mision3.jpg') }}'); background-size: cover;">
                            <span class="mask bg-gradient-dark opacity-6"></span>
                            <h2 class="mt-1 text-white font-weight-bolder position-relative letter-spacing-2">¡Bienvenido!
                            </h2>
                            <p class="text-white position-relative fs-5">Accede y solicita y controla las solicitudes de vehiculos oficiales de la ASA para todas nuestras misiones</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
