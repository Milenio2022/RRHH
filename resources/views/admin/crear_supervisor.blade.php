@extends('layouts.admin')
@section('contenido')
    <div class="pt-4 row px-3">
        <h2 class="pt-5">Formulario de Registro del Supervisor</h2>
        <form action="{{ route('supervisor.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                {{-- <div class="col-md-4 mb-3">
                    <label for="imagenPerfil">Imagen de perfil:</label>
                    <input type="file" class="form-control" id="imagenPerfil" name="imagenPerfil" accept="image/*">
                </div> --}}


                <div class="col-md-4 mb-3">
                    <label for="nombre">Nombres:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>


                <div class="col-md-4 mb-3">
                    <label for="apellido">Apellidos:</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="movil">Móvil:</label>
                    <input type="text" class="form-control" id="telefono" name="telefono">
                </div>


                <div class="col-md-4 mb-3">
                    <label for="correo">Correo:</label>
                    <input type="email" class="form-control" id="correo" name="correo" required>
                </div>

            <!-- Botones -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <button type="submit" class="btn btn-primary btn-block col-12">Registrar</button>
                </div>
                <div class="col-md-6 mb-3">
                    <button type="button" class="btn btn-danger col-12" id="resetearCampos">Resetear</button>
                </div>
            </div>
        </form>
    </div>
@endsection
