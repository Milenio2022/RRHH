@extends('layouts.admin')
@section('contenido')
    <div class="pt-4 row px-3">
        <h2 class="pt-5">Editar Empleado</h2>
        <form action="{{ route('empleado.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$empleado->id}}">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="imagen_perfil">Imagen de perfil:</label>
                    <input value="{{ $empleado->imagen_perfil }}" type="file" class="form-control" id="imagen_perfil"
                        name="imagen_perfil" accept="image/*">

                    @error('imagen_perfil')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label for="nombre">Nombres:</label>
                    <input value="{{ $empleado->nombre }}" type="text" class="form-control" id="nombre"
                        name="nombre">
                    @error('nombre')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div>


                <div class="col-md-4 mb-3">
                    <label for="apellido">Apellidos:</label>
                    <input value="{{ $empleado->apellido }}" type="text" class="form-control" id="apellido"
                        name="apellido">
                    @error('apellido')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                    <input value="{{ \Carbon\Carbon::parse($empleado->fecha_nacimiento)->format('Y-m-d') }}" type="date" class="form-control"
                        id="fecha_nacimiento" name="fecha_nacimiento">
                    @error('fecha_nacimiento')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label for="genero">Género:</label>
                    <select class="form-select" id="genero" name="genero">
                        <option value="masculino" {{ $empleado->genero == 'masculino' ? 'selected' : '' }}>Masculino</option>
                        <option value="femenino" {{ $empleado->genero == 'femenino' ? 'selected' : '' }}>Femenino</option>
                    </select>
                    @error('genero')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="col-md-4 mb-3">
                    <label for="id_cargo">Cargo:</label>
                    <select class="form-select" id="id_cargo" name="id_cargo">
                        @foreach ($cargos as $cargo)
                            <option value="{{ $cargo->id }}" {{ $empleado->id_cargo == $cargo->id ? 'selected' : '' }}>
                                {{ $cargo->nombre_cargo }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_cargo')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                {{-- <div class="col-md-4 mb-3">
                    <label for="estadoCivil">Estado Civil:</label>
                    <select class="form-select" id="estadoCivil" name="estadoCivil">
                        <option value="casado">Casado</option>
                        <option value="soltero">Soltero</option>
                    </select>
                </div> --}}

                <div class="col-md-4 mb-3">
                    <label for="movil">Télefono:</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{$empleado->telefono}}">
                    @error('telefono')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 mb-3">
                    <label for="direccion1">Dirección 1:</label>
                    <input type="text" class="form-control" id="direccion1" name="direccion" value="{{$empleado->direccion}}">
                    @error('direccion')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                {{-- 
                <div class="col-md-12 mb-3">
                    <label for="direccion2">Dirección 2:</label>
                    <input type="text" class="form-control" id="direccion2" name="direccion2">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="direccion3">Dirección 3:</label>
                    <input type="text" class="form-control" id="direccion3" name="direccion3">
                </div> --}}
                {{-- <div class="col-md-4 mb-3">
                    <label for="pais">Pais:</label>
                    <select class="form-select" id="pais" name="pais">

                    </select>
                </div> --}}
                <div class="col-md-4 mb-3">
                    <label for="id_departamento">Departamento:</label>
                    <select class="form-select" id="id_departamento" name="id_departamento">
                        @foreach ($departamentos as $departamento)
                            <option value="{{ $departamento->id }}" {{ $empleado->id_departamento == $departamento->id ? 'selected' : '' }}>
                                {{ $departamento->nombre_departamento }}
                            </option>
                        @endforeach

                    </select>
                    @error('id_departamento')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="col-md-4 mb-3">
                    <label for="id_departamento">Supervisor:</label>
                    <select class="form-select" id="id_supervisor" name="id_supervisor">
                        @foreach ($supervisores as $supervisor)
                            <option value="{{ $supervisor->id }}" {{ $empleado->id_supervisor == $supervisor->id ? 'selected' : '' }}>
                                {{ $supervisor->nombre }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_supervisor')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="col-md-4 mb-3">
                    <label for="fecha_ingreso">Fecha de Ingreso:</label>
                    <input type="date" class="form-control" id="fecha_contratacion" name="fecha_contratacion" value="{{ \Carbon\Carbon::parse($empleado->fecha_contratacion)->format('Y-m-d') }}">
                    @error('fecha_contratacion')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="col-md-4 mb-3">
                    <label for="fecha_salida">Salario :</label>
                    <input type="text" class="form-control" id="salario" name="salario" value="{{$empleado->salario}}">
                    @error('salario')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="col-md-2 mb-3">
                    <label for="rol">Rol:</label>
                    <select class="form-select" id="rol" name="rol">
                        <option value="usuario" {{ $empleado->rol == 'usuario' ? 'selected' : '' }}>Usuario</option>
                        <option value="admin"{{ $empleado->rol == 'admin' ? 'selected' : '' }} >Admin</option>
                    </select>
                    @error('cargo')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="col-md-4 mb-3">
                    <label for="correo">Correo:</label>
                    <input type="email" class="form-control" id="correo" name="correo" value="{{$empleado->correo}}">
                    @error('correo')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div>
{{-- 
                <div class="col-md-4 mb-3">
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" class="form-control" id="contrasena" name="contrasena">
                    @error('contrasena')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </div> --}}
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
