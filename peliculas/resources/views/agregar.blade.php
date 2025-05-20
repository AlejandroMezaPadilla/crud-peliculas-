@extends('layout')

@section('titulo', 'Agregar Película')

@section('contenido')
    <h2>Agregar Nueva Película</h2>

    {{-- Mostrar errores de validación si existen --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('guardar') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Título</label>
            <input type="text" name="titulo" class="form-control" value="{{ old('titulo') }}">
        </div>
        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control">{{ old('descripcion') }}</textarea>
        </div>
        <div class="mb-3">
            <label>Género</label>
            <input type="text" name="genero" class="form-control" value="{{ old('genero') }}">
        </div>
        <div class="mb-3">
            <label>Director</label>
            <input type="text" name="director" class="form-control" value="{{ old('director') }}">
        </div>
        <div class="mb-3">
            <label>Fecha de Estreno</label>
            <input type="date" name="fecha_estreno" class="form-control" value="{{ old('fecha_estreno') }}">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('listado') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
