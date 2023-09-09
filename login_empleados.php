
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<form action="login_empleados.php" method="POST">
        <div class="campo">
            <label class="correo" for="correo_empleado">Correo:</label>
            <input type="text" id="correo_empleado" name="correo_empleado" required>
        </div>
        
        <div class="campo">
            <label class="contrasena" for="contrasena_empleado">Contraseña:</label>
            <input type="password" id="contrasena_empleado" name="contrasena_empleado" required>
        </div>
        
        <button class="boton" type="submit"><span>Ingresar como Empleado</span></button>
    </form>

    <!-- Enlace para iniciar sesión como administrador -->
    <p><a href="login_admin.php">Ingresar como Administrador</a></p>
</body>
</html>



