<?php

namespace App\Http\Controllers;

use App\Models\Supervisor;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    public function index()
    {
        return view('admin.crear_supervisor');
    }
    public function store(Request $request)
    {
        if ($request->has('id')) {
            $supervisor = Supervisor::find($request->input('id'));
        } else {
            Supervisor::create($request->all());
            return view('index');
        }
        $supervisor->nombre = $request->input("nombre");
        $supervisor->apellidos = $request->input("apellidos");
        $supervisor->telefono = $request->input("telefono");
        $supervisor->correo = $request->input("correo");
        $supervisor->save();
    }

    
    public function ver_supervisores()
    {
        $supervisores = Supervisor::all();
        return view('admin.ver_supervisores', ['supervisores' => $supervisores]);
    }

    public function show($id)
    {
        $supervisor = Supervisor::findOrFail($id);
        return view('admin.editar_supervisor', ['supervisor' => $supervisor]);
    }
    public function destroy($id)
    {
        $cargo = Supervisor::findOrFail($id);
        $cargo->delete();
    }
}
