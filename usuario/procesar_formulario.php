<?php
// Obtén el nombre temporal y el nombre del archivo del formulario
$imagen_temporal = $_FILES['imagen_perfil']['tmp_name'];
$nombre_imagen = $_FILES['imagen_perfil']['name'];

// Define la carpeta de destino para las imágenes
$carpeta_destino = 'imagenes_perfil/';

// Mueve el archivo a la carpeta de destino
move_uploaded_file($imagen_temporal, $carpeta_destino . $nombre_imagen);

// Guarda la ruta en la base de datos
$ruta_imagen = $carpeta_destino . $nombre_imagen;

// Realiza la actualización en la base de datos (usando la variable $con para la conexión)
$sql = "UPDATE empleado SET imagen_perfil = '$ruta_imagen' WHERE id = $id_empleado";
mysqli_query($con, $sql);

// Cierra la conexión y redirige o muestra un mensaje de éxito
mysqli_close($con);
header('Location: perfil.php?mensaje=exito');
exit();
?>