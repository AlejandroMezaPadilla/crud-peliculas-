@extends('layout')

@section('titulo', 'Inicio')

@section('contenido')
    <div class="d-flex justify-content-center align-items-center vh-100 bg-light">
        <div class="text-center p-5 rounded shadow-lg bg-white" style="max-width: 600px; width: 100%;">
            <h1 class="text-success fw-bold mb-4" style="font-size: 2.5rem;">
                Bienvenido al catálogo de películas SexMex 🎬
            </h1>
            <p class="text-muted mb-4">
                Administra, consulta y edita tus películas favoritas de forma sencilla y rápida.
            </p>
            <div class="d-grid gap-3">
                <a href="{{ route('listado') }}" class="btn btn-outline-primary btn-lg">
                    📋 Ver Películas
                </a>
                <a href="{{ route('agregar') }}" class="btn btn-outline-success btn-lg">
                    ➕ Agregar Nueva Película
                </a>
            </div>
        </div>
    </div>
@endsection
