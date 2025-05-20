<!-- resources/views/bienvenida.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Prevención de caché -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
</head>
<body class="bg-dark text-white">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        
            <a class="navbar-brand" href="{{ route('inicio') }}">🎬 Mi Catálogo</a>
    </div>
</nav>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Tarjeta con estilo moderno -->
            <div class="card p-4 text-center bg-secondary text-white shadow-lg rounded-4">
                <h2 class="mb-4">¡Bienvenido, {{ auth()->user()->name }}!</h2>
                <p class="lead">Gracias por iniciar sesión. Aquí puedes explorar nuestro catálogo de películas.</p>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Cerrar sesión</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
