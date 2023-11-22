<?php
session_start();

// Verifica si el usuario tiene el rol de empleado
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'empleado') {
    header('Location: login.php');
    exit();
}

// Conecta a la base de datos (reemplaza con tus propias credenciales)
require_once("conexion.php");

// Obtiene el ID del empleado desde la sesión
$id_empleado = $_SESSION['id_empleado'];

// Verifica si se encontró el empleado
if ($id_empleado === null) {
    echo "Error: ID de empleado no encontrado.";
    exit();
}

// Consulta para obtener los datos del empleado
$consulta_empleado = "SELECT * FROM empleado WHERE id_empleado = $id_empleado";
$resultado_empleado = mysqli_query($conn, $consulta_empleado);

// Verifica si se encontró el empleado
if ($resultado_empleado !== false && $resultado_empleado->num_rows === 1) {
    $empleado = mysqli_fetch_assoc($resultado_empleado);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Agrega tus etiquetas de cabeza aquí -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Perfil</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .perfil-container {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        /* Estilos para la imagen de perfil */
        .perfil-container img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 4px solid #fff;
        }
        /* Estilos para el formulario de imagen de perfil */
        form {
            text-align: center;
            margin-bottom: 20px;
        }
        /* Estilos para la tabla de datos */
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f8f8f8;
        }
        /* Estilos para el botón */
        button {
            padding: 10px 15px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <?php include '../includes/head.php' ?>

    <h1>Perfil de Empleado</h1>

    <div class="perfil-container">
        <!-- Puedes mostrar la imagen del perfil aquí -->
        <?php
        if (!empty($empleado['imagen_perfil']) && file_exists($empleado['imagen_perfil'])) {
            echo '<img src="' . $empleado['imagen_perfil'] . '" alt="Imagen de perfil">';
        } else {
            echo '<p>Imagen no disponible</p>';
        }
        ?>

        <table>
            <!-- Muestra otros detalles del perfil aquí -->
            <tr>
                <td><strong>Nombre y Apellido:</strong></td>
                <td><?php echo $empleado['nombre'] . ' ' . $empleado['apellido']; ?></td>
            </tr>
            <tr>
                <td><strong>ID Cargo:</strong></td>
                <td><?php echo $empleado['id_cargo']; ?></td>
            </tr>
            <tr>
                <td><strong>Género:</strong></td>
                <td><?php echo $empleado['genero']; ?></td>
            </tr>
            <tr>
                <td><strong>Fecha de Nacimiento:</strong></td>
                <td><?php echo $empleado['fecha_nacimiento']; ?></td>
            </tr>
            <tr>
                <td><strong>Correo:</strong></td>
                <td><?php echo $empleado['correo']; ?></td>
            </tr>
            <tr>
                <td><strong>Teléfono:</strong></td>
                <td><?php echo $empleado['telefono']; ?></td>
            </tr>
            <tr>
                <td><strong>Dirección:</strong></td>
                <td><?php echo $empleado['direccion']; ?></td>
            </tr>
            <tr>
                <td><strong>Departamento:</strong></td>
                <td><?php echo $empleado['departamento']; ?></td>
            </tr>
            <tr>
                <td><strong>Fecha de Contratación:</strong></td>
                <td><?php echo $empleado['fecha_contratacion']; ?></td>
            </tr>
        </table>
    </div>
</body>

</html>

<?php
} else {
    echo "Error al recuperar los datos del empleado";
}

// Cierra la conexión
mysqli_close($conn);
?>
