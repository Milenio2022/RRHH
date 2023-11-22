<<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/stilos.css">
    <title>Solicitud de Permiso</title>
</head>

<body>
    <?php include '../includes/head.php' ?>
    
    <div class="contenido">
        <h1>Solicitud de Permiso</h1>

        <form method="post" action="procesar_permiso.php">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>

            <label for="motivo">Motivo:</label>
            <textarea name="motivo" rows="4" required></textarea>

            <label for="fecha_inicio">Fecha de Inicio:</label>
            <input type="date" name="fecha_inicio" required>

            <label for="fecha_fin">Fecha de Fin:</label>
            <input type="date" name="fecha_fin" required>

            <!-- Puedes tener un campo oculto para el estado si ya tiene un valor predeterminado -->
            <input type="hidden" name="estado" value="Pendiente">

            <input type="submit" value="Enviar Solicitud">
        </form>
    </div>

</body>

</html>
