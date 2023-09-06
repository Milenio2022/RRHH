<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sistema de Gestión de Recursos Humanos</title>
    <style>
        body {
            background-color: #B5BAEB; /* Fondo de color B5BAEB */
            text-align: center; /* Centrar el contenido horizontalmente */
            padding: 20px; /* Espacio alrededor del contenido */
        }

        h1 {
            color: #333; /* Color del título */
        }

        /* Estilos para los formularios */
        form {
            background-color: #fff; /* Fondo blanco para el formulario */
            padding: 20px; /* Espacio alrededor del formulario */
            border-radius: 10px; /* Bordes redondeados */
            display: inline-block; /* Para centrar horizontalmente */
        }

        /* Estilos para las etiquetas de correo y contraseña */
        .campo {
            display: inline-block; /* Para colocar las etiquetas en línea con los campos de entrada */
            text-align: right; /* Alinear el texto de la etiqueta a la derecha */
            width: 100px; /* Ancho fijo para las etiquetas (ajusta según tus necesidades) */
            margin-right: 10px; /* Margen derecho para separar las etiquetas de los campos de entrada */
        }

        /* Estilos para el fondo negro del label de contraseña */
        .campo label.contrasena {
            background-color: #000; /* Fondo negro para el label de contraseña */
            color: #fff; /* Color de texto blanco */
            padding: 5px; /* Espacio interno alrededor del label */
            border-radius: 5px; /* Bordes redondeados para el label */
        }

        /* Estilos para los campos de entrada */
        .campo input {
            width: 200px; /* Ancho de los campos de entrada (ajusta según tus necesidades) */
        }

        /* Estilos para el botón de ingreso */
        .boton {
            background-color: #2B38AB; /* Fondo del botón */
            color: #fff; /* Color del texto del botón */
            border: none; /* Eliminar bordes del botón */
            padding: 10px 20px; /* Espacio interno alrededor del botón (ajusta según tus necesidades) */
            border-radius: 5px; /* Bordes redondeados para el botón */
            cursor: pointer; /* Cambiar el cursor al pasar sobre el botón */
        }

        /* Estilos para centrar el texto del botón */
        .boton span {
            display: inline-block; /* Permitir centrar verticalmente */
            line-height: 40px; /* Alineación vertical del texto dentro del botón (ajusta según tus necesidades) */
        }

        /* Estilos para los enlaces */
        a {
            color: #333; /* Color del enlace */
            text-decoration: none; /* Elimina la subraya de los enlaces */
        }
    </style>
</head>
<body>
    <h1>Sistema de Gestión de Recursos Humanos</h1>
    
    <!-- Formulario de inicio de sesión para administradores -->
    <form action="login_admin.php" method="POST">
        <div class="campo">
            <label class="correo" for="correo_admin">Correo:</label>
            <input type="text" id="correo_admin" name="correo_admin" required>
        </div>
        
        <div class="campo">
            <label class="contrasena" for="contrasena_admin">Contraseña:</label>
            <input type="password" id="contrasena_admin" name="contrasena_admin" required>
        </div>
        
        <button class="boton" type="submit"><span>Ingresar como Administrador</span></button>
    </form>

    <!-- Formulario de inicio de sesión para empleados -->
    <form action="login_empleados.php" method="POST">
        <div class="campo">
            <label class="correo" for="correo_empleado">Correo:</label>
            <input type="text" id="correo_empleado" name="correo_empleado" required>
        </div>
        
        <div class="campo">
            <label class="contrasena" for="contrasena_empleado">Contraseña:</label>
            <input type="password" id="contrasena_empleado" name="contrasena_empleado" required>
        </div>
        
        <button class="boton" type="submit"><span>Ingresar como Empleado</span></button>
    </form>

    <!-- Enlace para iniciar sesión como administrador -->
    <p><a href="login_admin.php">Ingresar como Administrador</a></p>
</body>
</html>