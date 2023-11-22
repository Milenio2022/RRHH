<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index()
    {
        return view('admin.crear_departamento');
    }

    public function store(Request $request)
    {
        if ($request->has('id')) {
            $departamento = Departamento::find($request->input('id'));
        } else {
            Departamento::create($request->all());
            return view('index');
        }
        $departamento->nombre_departamento = $request->input("nombre_departamento");
        $departamento->descripcion = $request->input("descripcion");
        $departamento->save();
    }

    public function ver_departamentos()
    {
        $departamentos = Departamento::all();
        return view('admin.ver_departamentos', ['departamentos' => $departamentos]);
    }

    public function show($id)
    {
        $departamento = Departamento::findOrFail($id);
        return view('admin.editar_departamento', ['departamento' => $departamento]);
    }
    public function destroy($id)
    {
        $cargo = Departamento::findOrFail($id);
        $cargo->delete();
    }
}
