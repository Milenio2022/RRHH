@extends('layouts.admin')
@section('contenido')
    <div class="pdt-5">
        <h2>DEPARTAMENTOS</h2>
        <table id="empleados" class="contenedor-tabla">
            <thead>
                <tr class="">
                    <th class="header-cell">id</th>
                    <th class="header-cell">Departamento</th>
                    <th class="header-cell">Descripción</th>
                    <th class="header-cell">Operaciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($departamentos as $departamento)
                    <tr>
                        <td class="table-cell">{{ $departamento->id }}</td>
                        <td class="table-cell">{{ $departamento->nombre_departamento }}</td>
                        <td class="table-cell">{{ $departamento->descripcion }}</td>
                        <td class="table-cell d-flex justify-content-between">
                            <form action="{{ route('departamento.destroy', $departamento->id) }}" method="POST">
                                <button>
                                    <a href="{{ route('departamento.show', [$departamento->id]) }}">Editar</a>
                                </button>
                                @csrf
                                @method('DELETE')
                                <button>
                                    <button type="submit">Eliminar</button>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
