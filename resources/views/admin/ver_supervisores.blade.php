@extends('layouts.admin')
@section('contenido')
    <div class="pdt-5">
        <h2>SUPERVISORES</h2>
        <table id="supervisores" class="contenedor-tabla">
            <thead>
                <tr class="">
                    <th class="header-cell">id</th>
                    <th class="header-cell">Nombres</th>
                    <th class="header-cell">Teléfono</th>
                    <th class="header-cell">Correo</th>
                    <th class="header-cell">Operaciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($supervisores as $supervisor)
                    <tr>
                        <td class="table-cell">{{ $supervisor->id }}</td>
                        <td class="table-cell">{{ $supervisor->nombre }} {{ $supervisor->apellidos }}</td>
                        <td class="table-cell">{{ $supervisor->telefono }}</td>
                        <td class="table-cell">{{ $supervisor->correo }}</td>
                        <td class="table-cell d-flex justify-content-between">
                            <form action="{{ route('supervisor.destroy', $supervisor->id) }}" method="POST">
                                <button>
                                    <a href="{{ route('supervisor.show', [$supervisor->id]) }}">Editar</a>
                                </button>
                                {{-- <button>
                                    <a href="">Cambiar Contraseña</a>
                                </button> --}}
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
