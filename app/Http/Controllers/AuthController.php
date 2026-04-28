<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Función que procesa el formulario de login
    public function login(Request $request)
    {
        // 1. Validación: Nos aseguramos de que el usuario llenó los campos
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // 2. Credenciales falsas (de prueba)
        $emailPrueba = 'admin@tillas.com';
        $passwordPrueba = '123456';

        // 3. Comparamos lo que ingresó el usuario con nuestras credenciales
        if ($request->email === $emailPrueba && $request->password === $passwordPrueba) {
            
            // ÉXITO: Simulamos que inició sesión usando variables de sesión
            session(['usuario_logueado' => true]);
            session(['nombre_usuario' => 'Administrador']);

            // Redirigimos a la página de inicio (catálogo o home) con un mensaje verde
            return redirect('/')->with('success', '¡Bienvenido de vuelta a Tillas!');
            
        } else {
            // ERROR: Redirigimos de vuelta a la página de login con un mensaje rojo
            return back()->with('error', 'Credenciales incorrectas. Pista: usá admin@tillas.com y 123456');
        }
    }
}