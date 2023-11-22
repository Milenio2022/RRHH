<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
        <!----CSS-->
        <link rel="stylesheet" href="../css/styles.css">

        <!----ICONS-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!----Bootstrap-->
        <title>PANEL DE CONTROL</title>
        {{-- DATA TABLE CSS --}}
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
        <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tabla-registros.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
    <form method="POST" action="{{ route('login') }}" class="m-3 p-3 border border-secondary rounded">
        @csrf
        
        <!-- Campos de correo electrónico y contraseña con clases de Bootstrap -->
        <div class="mb-3">
            <label for="correo" class="form-label">Correo electrónico:</label>
            <input type="correo" class="form-control" id="correo" name="correo" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        
        <!-- Botón de inicio de sesión con clase de Bootstrap -->
        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        <span><a href="{{route('cambiar_contrasena.index')}}">¿Olvidaste tu contraseña?</a></span>
    </form>
</body>
</html>