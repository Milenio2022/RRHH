<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

// Recuperar las credenciales del formulario
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

// Verificar las credenciales en la base de datos (debes tener una tabla "administradores" con campos "correo" y "contrasena")
$query = "SELECT * FROM administradores WHERE correo='$correo' AND contrasena='$contrasena'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    // Inicio de sesión exitoso, redirigir a la página de administradores
    header("Location: pagina_administrador.php");
} else {
    // Las credenciales son incorrectas, mostrar un mensaje de error
    echo "Credenciales incorrectas. <a href='index.php'>Volver</a>";
}

$conn->close();
?>






