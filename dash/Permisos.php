<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/styles.css">

    </head>
<body>
    <?php include '../includes/header.php'?>
    <div class="container-perms div-1">
        <p>Inicio</p>
        <p class="arrow">></p>
        <p>Permiso</p>
        <p class="arrow">></p>
        <p>Permisos</p>
    </div>

    <div class="container-perms div-2">
        <p>Permisos Solicitados</p>
    </div>

<!-- Permisos Solicitados -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Menú de Permisos</title>
    <style>
        /* Estilos para centrar el contenido */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2; /* Color de fondo de la página */
        }

        /* Estilos para el contenedor del menú */
        .menu {
            text-align: center;
            background-color: #ffffff; /* Color de fondo del menú */
            padding: 20px;
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Sombra */
        }

        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px 12px;
            text-align: center;
        }

        th {
            background-color: #333; /* Color de fondo de encabezados */
            color: #fff; /* Color de texto de encabezados */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; /* Color de fondo de filas pares */
        }

        /* Agrega estilos adicionales según tus preferencias */
    </style>
</head>
<body>
    <div class="menu">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>ID EMP</th>
                    <th>Estado Permiso</th>
                    <th>Motivo</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha de Fin</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Jair</td>
                    <td>EMP001</td>
                    <td>Aprobado</td>
                    <td>Vacaciones</td>
                    <td>2023-01-01</td>
                    <td>2023-01-15</td>
                </tr>
                <!-- Agrega más filas según sea necesario -->
                <tr>
                    <td>2</td>
                    <td>Jose</td>
                    <td>EMP002</td>
                    <td>Denegado</td>
                    <td>Viaje</td>
                    <td>2023-02-15</td>
                    <td>2023-03-25</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

<div class="container-perms div-2">
        <p>Permisos Aceptados</p>
    </div>

<!-- Permitidos -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Menú de Permisos</title>
</head>
<body>
    <div class="menu">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo de Permiso</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha de Fin</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Jair</td>
                    <td>Aprobado</td>
                    <td>2023-01-01</td>
                    <td>2023-01-15</td>
                </tr>
                <!-- Agrega más filas según sea necesario -->
                <tr>
                    <td>2</td>
                    <td>Jose</td>
                    <td>Aprobado</td>
                    <td>2023-02-15</td>
                    <td>2023-03-25</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

<div class="container-perms div-2">
        <p>Permisos Denegados</p>
    </div>

<!-- Denegado -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Menú de Permisos</title>
</head>
<body>
    <div class="menu">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo de Permiso</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha de Fin</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Jair</td>
                    <td>Denegado</td>
                    <td>2023-01-01</td>
                    <td>2023-01-15</td>
                </tr>
                <!-- Agrega más filas según sea necesario -->
                <tr>
                    <td>2</td>
                    <td>Jose</td>
                    <td>Denegado</td>
                    <td>2023-02-15</td>
                    <td>2023-03-25</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>