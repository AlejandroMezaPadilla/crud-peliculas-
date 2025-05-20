<?php
//este archivo se encarga de manejar toda la lógica relacionada con las películas en tu catálogo.
namespace App\Http\Controllers;
use App\Models\Catalogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class CatalogoController extends Controller
{
    public function Inicio() {
        $consulta =new Catalogo(); 
        
        $peliculas = $consulta->all();

        return view('inicio');
    }

    public function listado() {
        if(!Auth::user()){
            return redirect()->route('login.formulario');
        }
        $peliculas = Catalogo::all();
        return view('listado_peliculas', compact('peliculas'));
    }

    

    public function agregar() {
        return view('agregar');
    }

    
public function guardar(Request $request)
{
    $request->validate([
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'genero' => 'required|string',
        'director' => 'required|string',
        'fecha_estreno' => 'required|date',
    ], [
        'titulo.required' => 'El título es obligatorio',
        'descripcion.required' => 'La descripción es obligatoria',
        'genero.required' => 'El género es obligatorio',
        'director.required' => 'El director es obligatorio',
        'fecha_estreno.required' => 'La fecha de estreno es obligatoria',
    ]);

    Catalogo::create($request->all());

    return redirect()->route('listado')->with('mensaje', 'Película agregada correctamente');
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
