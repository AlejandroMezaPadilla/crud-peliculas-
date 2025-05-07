<?php

namespace App\Http\Controllers;
use App\Models\Catalogo;
use Illuminate\Http\Request;


class CatalogoController extends Controller
{
    public function inicio() {
        $consulta =new Catalogo(); 
        
        $peliculas = $consulta->all();

        return view('inicio');
    }

    public function listado() {
        $peliculas = Catalogo::all();
        return view('listado_peliculas', compact('peliculas'));
    }

    public function agregar() {
        return view('agregar');
    }

    public function guardar(Request $request) {
        Catalogo::create($request->all());
        return redirect()->route('listado');
    }

    public function editar($id) {
        //  $pelicula = Catalogo::where('id', $id)->first();
        //  return view('editar', compact('pelicula'));
        //"pelicula"comsulta;

        // Otra forma de hacerlo
        $pelicula = Catalogo::findOrFail($id);
        return view('editar', compact('pelicula'));
    }

    public function actualizar(Request $request, $id) {
        //otra forma de hacerlo
        //$catalogo -> titulo=id_catalogo = $id;
        // $catalogo -> titulo=descripcion = $request->input('nombre');
        // $catalogo -> titulo=genero = $request->input('anio');
        // $catalogo -> titulo=fecha_estreno = $request->input('duracion');
        // $catalogo -> save();                                                                                                                                            
        $pelicula = Catalogo::findOrFail($id);
        $pelicula->update($request->all());
        return redirect()->route('listado');
    }
    public function eliminar($id)
    
{
    $pelicula = Catalogo::findOrFail($id);
    $pelicula->delete();
    return redirect()->route('listado')->with('mensaje', 'Película eliminada correctamente');
}

}
