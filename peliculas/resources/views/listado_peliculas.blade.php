@extends('layout')

@section('titulo', 'Listado de Películas')

@section('contenido')
    <h2 class="mb-4 text-center">🎬 Catálogo de Películas</h2>

    {{-- Mensaje de éxito --}}
    @if(session('mensaje'))
        <div class="alert alert-success text-center">
            {{ session('mensaje') }}
        </div>
    @endif

    <div class="text-center mb-4">
        <a href="{{ route('agregar') }}" class="btn btn-success">➕ Agregar Película</a>
    </div>

    <div class="row">
        @foreach ($peliculas as $pelicula)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-lg bg-dark text-white border-light">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pelicula->titulo }}</h5>
                        <p class="card-text"><strong>Género:</strong> {{ $pelicula->genero }}</p>
                        <p class="card-text"><strong>Director:</strong> {{ $pelicula->director }}</p>
                        <p class="card-text"><strong>Estreno:</strong> {{ $pelicula->fecha_estreno }}</p>
                    </div>
                    <div class="card-footer bg-transparent border-top-0 d-flex justify-content-between">
                        <a href="{{ route('editar', $pelicula->id) }}" class="btn btn-warning btn-sm">✏️ Editar</a>
                        <form action="{{ route('eliminar', $pelicula->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta película?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">🗑️ Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach  
    </div>
@endsection
