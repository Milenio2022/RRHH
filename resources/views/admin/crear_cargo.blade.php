@extends('layouts.admin')
@section('contenido')
    <div class="pt-4 row px-3">
        <h2 class="pt-5">Formulario de Registro</h2>
        <form action="{{ route('cargo.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="nombre">Nombres del cargo:</label>
                    <input type="text" class="form-control" id="nombre_cargo" name="nombre_cargo" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="apellido">Descripcion:</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" required>
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
