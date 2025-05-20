<?php
//mostrar el formulario de registro y procesar el registro y se guarda mi nuevo usuario en mi base de datos 
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function formulario()
    {
        return view('registro');
    }

    public function registrar(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ],["name.required"=> "El campo name esta vacio",
            "email.required"=> "El campo email esta vacio",
            "email.unique"=> "El email ya existe",
            "password.required"=> "El campo password esta vacio",
            "password.confirmed"=> "Las contraseñas no coinciden",
            "password.min"=> "La contraseña debe tener al menos 6 caracteres"]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('inicio')->with('mensaje', '¡Usuario registrado exitosamente!');
    }
}
