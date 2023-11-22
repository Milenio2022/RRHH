<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Cargo;
use App\Models\Departamento;
use App\Models\Supervisor;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index()
    {
        $cargos = Cargo::all();
        $supervisores = Supervisor::all();
        $departamentos = Departamento::all();
        return view('admin.crear_empleado', ['departamentos' => $departamentos, 'cargos' => $cargos, 'supervisores' => $supervisores]);
    }
    public function store(Request $request)
    {

        if ($request->has('id')) {
            $empleado = Empleado::find($request->input('id'));
        }

        else {
            Empleado::create($request->all());
            return view('index');
        }
        $empleado->nombre = $request->input("nombre");
        $empleado->apellido = $request->input("apellido");
        $empleado->fecha_nacimiento = $request->input("fecha_nacimiento");
        $empleado->genero = $request->input("genero");
        $empleado->direccion = $request->input("direccion");
        $empleado->telefono = $request->input("telefono");
        $empleado->correo = $request->input("correo");
        $empleado->fecha_contratacion = $request->input("fecha_contratacion");
        $empleado->salario = $request->input("salario");
        $empleado->rol = $request->input("rol");
        $empleado->imagen_perfil = $request->input("imagen_perfil");
        $empleado->id_supervisor = $request->input("id_supervisor");
        $empleado->id_departamento = $request->input("id_departamento");
        $empleado->id_cargo = $request->input("id_cargo");
        $empleado->save();
    }


    public function ver_empleados()
    {

        $empleados = Empleado::all();
        return view('admin.ver_empleados', ['empleados' => $empleados]);
    }
    public function create()
    {
    }
    public function show($id)
    {
        $cargos = Cargo::all();
        $supervisores = Supervisor::all();
        $departamentos = Departamento::all();
        $empleado = Empleado::findOrFail($id);
        return view('admin.editar_empleado', ['empleado' => $empleado, 'departamentos' => $departamentos, 'cargos' => $cargos, 'supervisores' => $supervisores]);
    }
    public function update()
    {
    }
    public function destroy($id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();

        return route('ver_empleados');
    }
}
