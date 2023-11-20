<?php
 // Contiene las variables de configuración para conectar a la base de datos
 require_once("conexion.php"); // Contiene la función que conecta a la base de datos

// Supongamos que tienes el ID del empleado almacenado en una variable $id_empleado
$id_empleado = 1; // Cambia esto según tu lógica

$query_empresa = mysqli_query($conn, "SELECT * FROM empleado WHERE id_empleado = $id_empleado");
$row = mysqli_fetch_array($query_empresa);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Perfil</title>
    <style>
        /* Estilos adicionales si es necesario */
        .perfil-container {
            text-align: center;
            margin-top: 20px;
        }
        .perfil-container img {
            width: 150px; /* Ajusta el tamaño de la imagen según sea necesario */
            height: 150px; /* Altura igual al ancho para mantener la forma redonda */
            border-radius: 50%; /* Agrega un borde redondeado a la imagen de perfil */
            margin-bottom: 10px;
            border: 4px solid #fff; /* Agrega un borde blanco para resaltar la imagen */
        }
        table {
            width: 70%;
            margin: 0 auto; /* Centra la tabla en el contenedor */
            border-collapse: collapse;
            margin-top: 20px; /* Espaciado adicional entre la imagen y la tabla */
            
        }
        table tr:nth-child(even) {
            background-color: #f9f9f9; /* Color de fondo para las filas pares */
        }
        /* Estilo para las filas impares (si es necesario) */
        table tr:nth-child(odd) {
            background-color: #ffffff; /* Color de fondo para las filas impares */
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 12px; /* Aumenta el espacio interno de las celdas */
            text-align: left;
        }
        th {
            background-color: #f8f8f8; /* Un color más claro para encabezados de tabla */
        }
        /* Estilo para el botón en el formulario */
        button {
            padding: 10px 15px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        /* Cambia el color del botón cuando se pasa el ratón */
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <?php 
        include '../includes/head.php'
    ?>
    
    <h1>Perfil de Empleado</h1>

    <div class="perfil-container">
        <?php
        if (!empty($row['imagen_perfil']) && file_exists($row['imagen_perfil'])) {
            echo '<img src="./imagenes_perfil/' . basename($row['imagen_perfil']) . '" alt="Imagen de perfil">';
        } else {
            echo '<p>Imagen no disponible</p>';
        }
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <!-- Otros campos del formulario -->

            <label for="imagen_perfil">Imagen de Perfil:</label>
            <input type="file" name="imagen_perfil" accept="image/*">

            <button type="submit">Guardar Cambios</button>
        </form>

        <table>
            <tr>
                <td><strong>Nombre y Apellido:</strong></td>
                <td><?php echo $row['nombre'] . ' ' . $row['apellido']; ?></td>
            </tr>
            <tr>
                <td><strong>ID Cargo:</strong></td>
                <td><?php echo $row['id_cargo']; ?></td>
            </tr>
            <tr>
                <td><strong>Género:</strong></td>
                <td><?php echo $row['genero']; ?></td>
            </tr>
            <tr>
                <td><strong>Fecha de Nacimiento:</strong></td>
                <td><?php echo $row['fecha_nacimiento']; ?></td>
            </tr>
            <tr>
                <td><strong>Correo:</strong></td>
                <td><?php echo $row['correo']; ?></td>
            </tr>
            <tr>
                <td><strong>Teléfono:</strong></td>
                <td><?php echo $row['telefono']; ?></td>
            </tr>
            <tr>
                <td><strong>Dirección:</strong></td>
                <td><?php echo $row['direccion']; ?></td>
            </tr>
            <tr>
                <td><strong>Departamento:</strong></td>
                <td><?php echo $row['departamento']; ?></td>
            </tr>
            <tr>
                <td><strong>Fecha de Contratación:</strong></td>
                <td><?php echo $row['fecha_contratacion']; ?></td>
            </tr>
        </table>
    </div>


</body>

</html>
