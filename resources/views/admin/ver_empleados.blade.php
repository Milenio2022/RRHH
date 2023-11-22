@extends('layouts.admin')
@section('contenido')
    <div class="pdt-5">
        <table id="empleados" class="contenedor-tabla">
            <thead>
                <tr class="">
                    <th class="header-cell">id</th>
                    <th class="header-cell">Nombres</th>
                    <th class="header-cell">Nacimiento</th>
                    <th class="header-cell">Genero</th>
                    <th class="header-cell">Dirección</th>
                    <th class="header-cell">Teléfono</th>
                    <th class="header-cell">Correo</th>
                    <th class="header-cell">Fecha de contratación</th>
                    <th class="header-cell">Salario</th>
                    <th class="header-cell">Rol</th>
                    <th class="header-cell">Operaciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($empleados as $empleado)
                    <tr>
                        <td class="table-cell">{{ $empleado->id }}</td>
                        <td class="table-cell">{{ $empleado->nombre }} {{ $empleado->apellido }}</td>
                        <td class="table-cell">{{ date('d-m-Y', strtotime($empleado->fecha_nacimiento)) }}</td>
                        <td class="table-cell">{{ $empleado->genero }}</td>
                        <td class="table-cell">{{ $empleado->direccion }}</td>
                        <td class="table-cell">{{ $empleado->telefono }}</td>
                        <td class="table-cell">{{ $empleado->correo }}</td>
                        <td class="table-cell">{{ $empleado->fecha_contratacion }}</td>
                        <td class="table-cell">{{ $empleado->salario }}</td>
                        <td class="table-cell">{{ $empleado->rol }}</td>
                        <td class="table-cell d-flex justify-content-between">
                            <form action="{{ route('empleado.destroy', $empleado->id) }}" method="POST">
                                <button>
                                    <a href="{{ route('empleado.show', [$empleado->id]) }}">Editar</a>
                                </button>
                                <button>
                                    <a href="">Cambiar Contraseña</a>
                                </button>
                                @csrf
                                @method('DELETE')
                                <button>
                                    <button type="submit">Eliminar Empleado</button>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
