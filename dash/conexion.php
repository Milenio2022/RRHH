<?php
// Código de conexión a la base de datos (conexion.php)

try {
    $conexion = new PDO("mysql:host=localhost;dbname=rrhh;charset=utf8", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion realizada";
} catch (PDOException $error) {
    echo "Error de conexión: " . $error->getMessage();
}

if (!empty($_POST["btningresar"])) {
    if (empty($_POST["usuario"]) || empty($_POST["password"])) {
        echo '<div class="alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
    } else {
        $usuario = $_POST["usuario"];
        $clave = $_POST["password"];

        // Consulta SQL segura con consultas preparadas
        $stmt = $conexion->prepare("SELECT * FROM usuario WHERE usuario = ? AND clave = ?");
        $stmt->execute([$usuario, $clave]);
        $result = $stmt->fetch(PDO::FETCH_OBJ);

        if ($result) {
            // Inicio de sesión exitoso
            header("location: ../dash/index.php");
            exit();
        } else {
            echo '<div class="alert-danger">ACCESO DENEGADO</div>';
        }
    }
}
?>