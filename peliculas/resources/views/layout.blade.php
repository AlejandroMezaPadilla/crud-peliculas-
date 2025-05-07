<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo') | Sexmex</title>
    

    <script src="{{asset('js/app.js')}}"></script>

</head>

    <!-- Navbar tipo Peliflix -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3 text-danger" href="{{ route('inicio') }}">
                🎬 Sexmex
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-light" href="{{ route('listado') }}">Películas</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ route('agregar') }}">Agregar</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ route('agregar') }}">EN VIVOS </a></li>

                </ul>
            </div>
        </div>
    </nav>
    

    <div class="container mt-4">
        @yield('contenido')
    </div>
</body>
</html>
