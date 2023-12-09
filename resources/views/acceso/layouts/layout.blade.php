<!-- layout.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    @include('acceso.layouts.partials.head')
</head>
<body>
    <main class="main-content mt-0">
        @yield('contenido')
    </main>

    @include('acceso.layouts.partials.scripts')
</body>
</html>

