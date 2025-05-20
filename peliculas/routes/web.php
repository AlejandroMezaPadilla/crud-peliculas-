<?php
// archivos de rutas principales 
//Sirve para definir las rutas web de aplicación, 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogoController;

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\AuthController;

// Rutas públicas (sin login)
Route::get('/', [CatalogoController::class, 'inicio'])->name('inicio');
Route::get('/login', [AuthController::class, 'formularioLogin'])->name('login.formulario');
Route::post('/login', [AuthController::class, 'login'])->name('login.enviar');
Route::get('/registro', [RegistroController::class, 'formulario'])->name('registro.formulario');
Route::post('/registro', [RegistroController::class, 'registrar'])->name('registro.enviar');


// Agrupar rutas que requieren autenticación
Route::middleware(['auth'])->group(function () {
    Route::get('/bienvenido', [AuthController::class, 'bienvenida'])->name('bienvenida');
    
    Route::get('/inicio', [CatalogoController::class, 'inicio'])->name('home');
    Route::get('/peliculas', [CatalogoController::class, 'listado'])->name('listado');
    Route::get('/peliculas/agregar', [CatalogoController::class, 'agregar'])->name('agregar');
    Route::post('/peliculas/guardar', [CatalogoController::class, 'guardar'])->name('guardar');
    Route::get('/peliculas/editar/{id}', [CatalogoController::class, 'editar'])->name('editar');
Route::put('/peliculas/actualizar/{id}', [CatalogoController::class, 'actualizar'])->name('actualizar');
    Route::delete('/peliculas/eliminar/{id}', [CatalogoController::class, 'eliminar'])->name('eliminar');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
