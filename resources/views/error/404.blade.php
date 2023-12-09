@extends('acceso.layouts.layout')

@section('titulo', 'Asociacion Salvadoreña del Agua')

@section('contenido')
    <div class="page-header min-vh-100" style="background-image: url('{{ asset('img/backgrounds/Cloudy.svg') }}');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-7 mx-auto text-center">
                    <h1 class="display-1 text-bolder text-light">Error 404</h1>
                    <h2 class="text-bolder text-info">¡Ups! Página no encontrada</h2>
                    <p class="lead text-secondary">Lo sentimos, parece que la página que buscas no existe.</p>
                    <a href="{{ url('/') }}" class="btn btn-secondary mt-4">Ir a la Página de Inicio</a>
                </div>
            </div>
        </div>
    </div>
@endsection
