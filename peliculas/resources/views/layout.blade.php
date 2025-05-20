<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo') | PELIFLEXX</title>
    

    <script src="{{asset('js/app.js')}}"></script>

</head>

    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3 text-danger" href="{{ route('inicio') }}">
                🎬 PELIFLEXX
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-light" href="{{ route('listado') }}">Películas</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ route('agregar') }}">Agregar</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ route('registro.formulario') }}">Unete </a></li>
                    @if(Auth::user())
                    <li class="nav-item"><a class="nav-link text-light" href="{{ route('logout') }}">Cerrar sesion </a></li>
                    @endif
                     
                </ul>
            </div>
        </div>
    </nav>
    

    <div class="container mt-4">
        @yield('contenido')
    </div>
</body>
</html>
