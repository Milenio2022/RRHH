<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de R. R. H. H - Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<?php
// Verifica si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conecta a la base de datos (reemplaza con tus propias credenciales)
    $conexion = new mysqli('localhost', 'root', '', 'rh');

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    // Obtiene los datos del formulario
    $nombre_usuario = $_POST['nombre_usuario'];
    $contrasena = $_POST['contrasena'];

    // Consulta para verificar las credenciales
    // Consulta para verificar las credenciales
    $consulta = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario' AND contrasena = '$contrasena'";
    $resultado = $conexion->query($consulta);
    // Verifica si se encontró un usuario
    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();
        // Inicia la sesió
        session_start();
        // Almacena el rol en la sesión
        $_SESSION['rol'] = $usuario['rol'];
        // Establece el id_empleado en la sesión
        $_SESSION['id_empleado'] = $usuario['id_empleado']; // Asegúrate de que tengas la columna id_empleado en tu tabla usuarios
        // Redirecciona según el rol
        if ($usuario['rol'] === 'admin') {
            header('Location: dash/index.php');
        } else {
            header('Location: usuario/index.php');
        }
    } else {
        echo "Credenciales incorrectas";
    }
    // Cierra la conexión
    $conexion->close();
}
?>

<!-- Formulario de login -->
<form method="post" action="login.php">
    <h2>Sistema de R. R. H. H</h2>
    <label for="nombre_usuario">Usuario:</label>
    <input type="text" name="nombre_usuario" required>
    <br>
    <label for="contrasena">Contraseña:</label>
    <input type="password" name="contrasena" required>
    <br>
    <input type="submit" value="Iniciar sesión">
</form>


</body>
</html>
