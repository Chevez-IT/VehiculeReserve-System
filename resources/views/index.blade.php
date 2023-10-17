<!DOCTYPE html>
<html lang="en">

@include('head')

<body>
    <main class="main-content  mt-0">
        <div class="page-header align-items-center min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('{{ asset('img/bg-mision2.jpg') }}'); background-position:center;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">¡BIENVENIDO!</h1>
                        <p class="text-lead text-white">Recuerda generar soluciones inovadoras que generen valor
                            materializando el derecho humano al agua y al saneamiento</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center font-weight-bolder">
                            <h4 class="font-weight-bolder">Iniciar Sesión</h4>
                            <p class="mb-0">Introduzca sus credenciales</p>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}" role="form">
                                @csrf
                                <div class="mb-3">
                                    <input :value="old('correo')" id="correo" name="correo" type="email" required
                                        class="form-control" placeholder="Correo" aria-label="Correo">
                                </div>
                                <div class="mb-3">
                                    <input id="contrasena" name="contrasena" type="password" class="form-control"
                                        placeholder="Contraseña" aria-label="Contraseña" required
                                        autocomplete="current-password">
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="recuerdame">
                                    <label class="form-check-label" for="recuerdame">Recuerdame</label>
                                </div>
                                <div class="text-center">
                                    <button type="button"
                                        class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Iniciar</button>
                                    <p class="text-sm mt-3 mb-0">¿Olvidaste tu contraseña? <a href="#"
                                            class="text-dark font-weight-bolder">Recuperala aqui</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>
