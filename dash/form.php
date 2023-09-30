<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h2>Formulario de Registro</h2>
        <form action="procesar_registro.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="id">ID:</label>
                    <input type="text" class="form-control" id="id" name="id" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="imagenPerfil">Imagen de perfil:</label>
                    <input type="file" class="form-control" id="imagenPerfil" name="imagenPerfil" accept="image/*">
                </div>

                <div class="col-md-4 mb-3">
                    <label for="genero">Género:</label>
                    <select class="form-select" id="genero" name="genero">
                        <option value="hombre">Hombre</option>
                        <option value="mujer">Mujer</option>
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="segundoNombre">Segundo Nombre:</label>
                    <input type="text" class="form-control" id="segundoNombre" name="segundoNombre">
                </div>

                <div class="col-md-4 mb-3">
                    <label for="apellido">Apellido:</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="birthDay">Fecha de Nacimiento:</label>
                    <input type="date" class="form-control" id="birthDay" name="birthDay">
                </div>

                <div class="col-md-4 mb-3">
                    <label for="estadoCivil">Estado Civil:</label>
                    <select class="form-select" id="estadoCivil" name="estadoCivil">
                        <option value="casado">Casado</option>
                        <option value="soltero">Soltero</option>
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="movil">Móvil:</label>
                    <input type="text" class="form-control" id="movil" name="movil">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="direccion1">Dirección 1:</label>
                    <input type="text" class="form-control" id="direccion1" name="direccion1">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="direccion2">Dirección 2:</label>
                    <input type="text" class="form-control" id="direccion2" name="direccion2">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="direccion3">Dirección 3:</label>
                    <input type="text" class="form-control" id="direccion3" name="direccion3">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="pais">Pais:</label>
                    <select class="form-select" id="pais" name="pais">

                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="departamento">Departamento:</label>
                    <select class="form-select" id="departamento" name="departamento">

                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="ciudad">Ciudad:</label>
                    <select class="form-select" id="ciudad" name="ciudad">

                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="fecha_ingreso">Fecha de Ingreso:</label>
                    <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="fecha_salida">Fecha de Salida:</label>
                    <input type="date" class="form-control" id="fecha_salida" name="fecha_salida">
                </div>
                <div class="col-md-2 mb-3">
                    <label for="estado">Estado:</label>
                    <select class="form-select" id="estado" name="estado">

                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="rol">Rol:</label>
                    <select class="form-select" id="rol" name="rol">

                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="posicion">Posicion:</label>
                    <select class="form-select" id="posicion" name="posicion">

                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="correo">Correo:</label>
                    <input type="email" class="form-control" id="correo" name="correo" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" class="form-control" id="contraseña" name="contraseña" required>
                </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
    <script>
    // Función para resetear los campos del formulario
    document.getElementById('resetearCampos').addEventListener('click', function() {
        // Restablece los valores de los campos
        document.getElementById('id').value = '';
        // Restablece otros campos aquí
    });
    </script>
</body>

</html>