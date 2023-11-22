<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Can;

class CargoController extends Controller
{
    public function index(){
        return view('admin.crear_cargo');
    }

    public function store(Request $request){
        if ($request->has('id')) {
            $cargo = Cargo::find($request->input('id'));
        } else {
            Cargo::create($request->all());
            return view('index');
        }
        $cargo->nombre_cargo = $request->input("nombre_cargo");
        $cargo->descripcion = $request->input("descripcion");
        $cargo->save();
    }

    public function ver_cargos()
    {

        $cargos = Cargo::all();
        return view('admin.ver_cargos', ['cargos' => $cargos]);
    }

    public function show($id)
    {
        $cargo = Cargo::findOrFail($id);
        return view('admin.editar_cargo', ['cargo' => $cargo]);
    }
    public function destroy($id)
    {
        $cargo = Cargo::findOrFail($id);
        $cargo->delete();
    }
}
