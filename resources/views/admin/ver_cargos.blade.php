@extends('layouts.admin')
@section('contenido')
    <div class="pdt-5">
        <table id="empleados" class="contenedor-tabla">
            <thead>
                <tr class="">
                    <th class="header-cell">id</th>
                    <th class="header-cell">Cargo</th>
                    <th class="header-cell">Descripción</th>
                    <th class="header-cell">Operaciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($cargos as $cargo)
                    <tr>
                        <td class="table-cell">{{ $cargo->id }}</td>
                        <td class="table-cell">{{ $cargo->nombre_cargo }}</td>
                        <td class="table-cell">{{ $cargo->descripcion }}</td>
                        <td class="table-cell d-flex justify-content-between">
                            <form action="{{ route('cargo.destroy', $cargo->id) }}" method="POST">
                                <button>
                                    <a href="{{ route('cargo.show', [$cargo->id]) }}">Editar</a>
                                </button>
                                <button>
                                    <a href="">Cambiar Contraseña</a>
                                </button>
                                @csrf
                                @method('DELETE')
                                <button>
                                    <button type="submit">Eliminar Cargo</button>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
