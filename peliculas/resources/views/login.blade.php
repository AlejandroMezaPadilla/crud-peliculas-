@extends('layouts.app') 
@section('titulo', 'Iniciar Sesión')

@section('contenido')
<div class="row justify-content-center">
            <a class="navbar-brand" href="{{ route('inicio') }}">🎬 Mi Catálogo</a>
    <div class="col-md-6">
        <h2 class="text-center mb-4">Iniciar Sesión</h2>

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.enviar') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" name="email" id="email" required value="{{ old('email') }}">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
        </form>

        <div class="text-center mt-3">
            <a href="{{ route('registro.formulario') }}">¿No tienes cuenta? Regístrate aquí</a>
        </div>
    </div>
</div>
@endsection
