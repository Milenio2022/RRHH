<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\CambioContraseñaMailable;
use App\Models\Empleado as ModelsEmpleado;
use Illuminate\Support\Facades\Mail;


class CambioContraseñaController extends Controller
{
    public function index()
    {
        return view('auth.cambiar_contrasena_form');
    }


    public function confirmar_contrasena(Request $request){

        $id_empleado=$request->input('id_empleado');
        $empleado = Empleado::find($id_empleado);
        $empleado->password = $request->input("password");
        $empleado->save();
        return 'Contraseña cambiada';

    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:empleado,correo',
        ]);


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }


        $email = $request->input('email');

        // Generar código aleatorio de 6 dígitos
        $codigo = mt_rand(100000, 999999);

        // Aquí enviarías el código por correo electrónico usando Mailtrap
        // Utiliza la lógica de envío de correo que estás utilizando
        Mail::to($request->input('email'))->send(new CambioContraseñaMailable($codigo));
        // Una vez que el código se haya enviado, puedes redirigir o mostrar un mensaje de éxito
        return view('Auth.ingresar_codigo', ['email' => $email, 'codigo' => $codigo])->with('success', 'Se ha enviado un código de verificación a tu correo electrónico.');
    }


    public function validarCodigo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'codigo' => 'required|digits:6',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $email=$request->input('email_cambio');
        // Obtener el ID del empleado con el correo proporcionado
        $empleado = Empleado::where('correo', $email)->first();
        $idEmpleado = $empleado->id; // ID del empleado


        // Comparar el código ingresado con el que fue enviado por correo
        $codigoIngresado = $request->input('codigo');
        // Supongamos que $codigoEnviado es el código enviado por correo
        $codigoEnviado = $request->input('codigo_enviado'); // Reemplaza con el código que fue enviado

        if ($codigoIngresado == $codigoEnviado) {
            // Código correcto, realizar acciones necesarias (cambiar contraseña, etc.)
            return view('auth.ingresar_nueva_contrasena',['idEmpleado'=>$idEmpleado])->with('success', 'Código verificado correctamente.');
        } else {
            // Código incorrecto, mostrar mensaje de error
            return back()->withErrors(['codigo' => 'El código ingresado es incorrecto.'])->withInput();
        }
    }


}
