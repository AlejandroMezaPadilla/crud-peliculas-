@extends('layout')

@section('titulo', 'Editar Película')

@section('contenido')
    <h2>Editar Película</h2>
    <form action="{{ route('actualizar', $pelicula->id) }}" method="POST">
        // Método PUT para actualizar
        @method('PUT')
        // Token CSRF para seguridad 
        @csrf
        <div class="mb-3">
            <label>Título</label>
            <input type="text" name="titulo" value="{{ $pelicula->titulo }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control" required>{{ $pelicula->descripcion }}</textarea>
        </div>
        <div class="mb-3">
            <label>Género</label>
            <input type="text" name="genero" value="{{ $pelicula->genero }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Director</label>
            <input type="text" name="director" value="{{ $pelicula->director }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Fecha de Estreno</label>
            <input type="date" name="fecha_estreno" value="{{ $pelicula->fecha_estreno }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('listado') }}" class="btn btn-secondary">Cancelar</a>

    </form>
@endsection
