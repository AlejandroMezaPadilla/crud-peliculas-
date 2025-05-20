<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Muestra el formulario de login.
     */
    public function formularioLogin()
    {
        if (Auth::check()) {
            return redirect()->route('inicio');
        }

        return view('login');
    }

    /**
     * Procesa el intento de login.
     */
    public function login(Request $request)
    {
        // Validar credenciales
        $credenciales = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Intentar iniciar sesión
        if (Auth::attempt($credenciales)) {
            $request->session()->regenerate();

            return redirect()->route('bienvenida')->with('success', '¡Bienvenido!');
        }

        // Si fallan las credenciales
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ])->withInput(); // para conservar lo que ya escribió el usuario
    }

    /**
     * Cierra la sesión del usuario.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Sesión cerrada correctamente.');
    }

    /**
     * Muestra la vista de bienvenida luego de iniciar sesión.
     */
    public function bienvenida()
    {
        return view('bienvenida');
    }
}
