<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Mi Menú</title>
</head>

<body>
    <?php 
        include '../includes/head.php'
    ?>
    <!-- Resto de tu contenido -->
    <h1>SOLICITUDES DE PERMISO</h1>

    <?php
    // Incluye el archivo de conexión a la base de datos
    include("conexion.php");

    // Ejecuta una consulta SQL para obtener datos de la base de datos
    $sql = "SELECT * FROM solicitudes_permiso";
    $result = $conn->query($sql);

    // Comprueba si hay filas de datos en la tabla
    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Id</th>';
        echo '<th>Nombre</th>';
        echo '<th>Motivo</th>';
        echo '<th>fecha de inicio</th>';
        echo '<th>fecha fin</th>';  
        echo '<th>Estado</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        // Recorre los resultados y muestra los datos en la tabla HTML
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['nombre'] . '</td>';
            echo '<td>' . $row['motivo'] . '</td>';
            echo '<td>' . $row['fecha_inicio'] . '</td>';
            echo '<td>' . $row['fecha_fin'] . '</td>';
            echo '<td>' . $row['estado'] . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } else {
        echo 'No se encontraron registros.';
    }

    // Cierra la conexión a la base de datos
    $conn->close();
    ?>
</body>

</html>
