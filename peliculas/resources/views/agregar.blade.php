@extends('layout')

@section('titulo', 'Agregar Película')

@section('contenido')
    <h2>Agregar Nueva Película</h2>
    <form action="{{ route('guardar') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Título</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Género</label>
            <input type="text" name="genero" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Director</label>
            <input type="text" name="director" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Fecha de Estreno</label>
            <input type="date" name="fecha_estreno" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('listado') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
