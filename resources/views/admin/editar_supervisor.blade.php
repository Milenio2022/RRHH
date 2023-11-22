@extends('layouts.admin')
@section('contenido')
    <div class="pt-4 row px-3">
        <h2 class="pt-5">Editar Empleado</h2>
        <form action="{{ route('supervisor.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$supervisor->id}}">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="nombre">Nombres:</label>
                    <input value="{{ $supervisor->nombre }}" type="text" class="form-control" id="nombre"
                        name="nombre">
                    @error('nombre')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div>


                <div class="col-md-4 mb-3">
                    <label for="apellido">Apellidos:</label>
                    <input value="{{ $supervisor->apellidos }}" type="text" class="form-control" id="apellidos"
                        name="apellidos">
                    @error('apellidos')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label for="movil">Télefono:</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{$supervisor->telefono}}">
                    @error('telefono')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label for="correo">Correo:</label>
                    <input type="email" class="form-control" id="correo" name="correo" value="{{$supervisor->correo}}">
                    @error('correo')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            <!-- Botones -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <button type="submit" class="btn btn-primary btn-block col-12">Editar</button>
                </div>
                <div class="col-md-6 mb-3">
                    <button type="button" class="btn btn-danger col-12" id="resetearCampos">Resetear</button>
                </div>
            </div>
        </form>
    </div>
@endsection
