<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\Empleado;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->input('correo');
        $password = $request->input('password');

        // $password_hash=password_hash($password, PASSWORD_DEFAULT);

        if (Auth::attempt(['correo' => $email, 'password' => $password])) {
            // Autenticación exitosa
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); // Ruta a la que se redirige después del inicio de sesión exitoso
        }
        return back()->withErrors([
            'correo' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
