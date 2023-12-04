@extends('acceso.layouts.layout')

@section('titulo', 'Asociacion Salvadoreña del Agua')

@section('contenido')
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
        style="background-image: url('{{ asset('img/bg-mision2.jpg') }}'); background-position: center;">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-3 mt-1">Recupera tu contraseña</h1>
                    <p class="text-lead text-white">Utiliza tu correo institucional con el que se te haya registrado para poder recuperar o generar otra contraseña</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">
                    <div class="card-header text-center pt-4">
                        <h5>Recuperacion de contraseña</h5>
                    </div>
                    <div class="card-body">
                        <form role="form">
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email" aria-label="Email" required>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn bg-gradient-dark w-100 my-4 mb-2">Verificar correo</button>
                            </div>
                            <p class="text-sm mt-3 mb-0">¿Ya recordaste tu contraseña? <a href="javascript:;"
                                    class="text-dark font-weight-bolder">Regresar</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
