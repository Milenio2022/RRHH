<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sistema de Gestión de Recursos Humanos</title>
</head>
<body>
    <h1>Sistema de Gestión de Recursos Humanos</h1>
    
    <!-- Formulario de inicio de sesión para administradores -->
    <form action="login_admin.php" method="POST">
        <label for="correo">Correo:</label>
        <input type="text" id="correo" name="correo" required><br>
        
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br>
        
        <input type="submit" value="Inicio de Sesion">
    </form>

    <!-- Enlace para el inicio de sesión de empleados -->
    <p><a href="login_empleados.php">Ingresar como Empleado</a></p>


    <!-- Formulario de inicio de sesión para empleados -->
    <form action="login_empleados.php" method="POST">
        <label for="correo_empleado">Correo:</label>
        <input type="text" id="correo_empleado" name="correo_empleado" required><br>
        
        <label for="contrasena_empleado">Contraseña:</label>
        <input type="password" id="contrasena_empleado" name="contrasena_empleado" required><br>
        
        <input type="submit" value="Inicio de Sesion">
    </form>

    <!-- Enlace para ingresar como administrador -->
    <p><a href="login_admin.php">Ingresar como Administrador</a></p>
</body>
</html>