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
                    <p class="text-lead text-white">Utiliza tu correo institucional con el que se te haya registrado para
                        poder recuperar o generar otra contraseña</p>
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
                        <form role="form" method="POST" action="#">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Tokens de verificacion"
                                    aria-label="Tokens de verificacion" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" id="nueva-contrasena" class="form-control form-control-lg"
                                    placeholder="Nueva contraseña" aria-label="Contraseña" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" id="confirmar-contrasena" class="form-control form-control-lg"
                                    placeholder="Confirmar nueva contraseña" aria-label="Contraseña" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Cambiar
                                    contraseña</button>
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

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Selecciona los elementos del DOM
            const nuevaContrasenaInput = document.getElementById('nueva-contrasena');
            const confirmarContrasenaInput = document.getElementById('confirmar-contrasena');
            const form = document.querySelector('form');

            // Agrega un evento al formulario cuando se intente enviar
            form.addEventListener('submit', function(event) {
                // Verifica si las contraseñas son iguales
                if (nuevaContrasenaInput.value !== confirmarContrasenaInput.value) {
                    // Si no son iguales, evita que el formulario se envíe y muestra un mensaje de error
                    event.preventDefault();
                    alert('Las contraseñas no coinciden. Por favor, inténtalo de nuevo.');
                }
                // Si son iguales, el formulario se enviará normalmente
            });
        });
    </script>
@endsection
