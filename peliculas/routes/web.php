<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CatalogoController;

Route::get('/', [CatalogoController::class, 'inicio'])->name('inicio');
Route::get('/inicio', [CatalogoController::class, 'inicio'])->name('home');
Route::get('/peliculas', [CatalogoController::class, 'listado'])->name('listado');
Route::get('/peliculas/agregar', [CatalogoController::class, 'agregar'])->name('agregar');
Route::post('/peliculas/guardar', [CatalogoController::class, 'guardar'])->name('guardar');
Route::get('/peliculas/editar/{id}', [CatalogoController::class, 'editar'])->name('editar');
Route::post('/peliculas/actualizar/{id}', [CatalogoController::class, 'actualizar'])->name('actualizar');


Route::delete('/peliculas/eliminar/{id}', [CatalogoController::class, 'eliminar'])->name('eliminar');

