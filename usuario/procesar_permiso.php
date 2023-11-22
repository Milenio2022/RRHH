<?php
// Verifica si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conecta a la base de datos (reemplaza con tus propias credenciales)
    require_once("conexion.php");

    // Obtiene los datos del formulario
    $nombre = $_POST['nombre'];
    $motivo = $_POST['motivo'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];
    $estado = $_POST['estado'];

    // Puedes realizar validaciones adicionales aquí

    // Inserta los datos en la base de datos
    $insertar_permiso = "INSERT INTO solicitudes_permiso (nombre, motivo, fecha_inicio, fecha_fin, estado) 
                        VALUES ('$nombre', '$motivo', '$fecha_inicio', '$fecha_fin', '$estado')";
    
    if (mysqli_query($conn, $insertar_permiso)) {
        echo "Solicitud de permiso enviada correctamente.";
    } else {
        echo "Error al enviar la solicitud de permiso: " . mysqli_error($conn);
    }

    // Cierra la conexión
    mysqli_close($conn);
}
?>
