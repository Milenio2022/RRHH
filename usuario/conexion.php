<?php
$servername = "localhost"; // Reemplaza con el nombre de tu servidor de base de datos
$username = "root"; // Reemplaza con el nombre de usuario de la base de datos
$password = ""; // Reemplaza con la contraseña de la base de datos
$dbname = "rh"; // Reemplaza con el nombre de la base de datos que deseas conectar

// Crea una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si hay errores en la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}
?>