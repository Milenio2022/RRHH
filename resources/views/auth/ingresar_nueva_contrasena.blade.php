<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Nueva Contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ingresar Contraseña</div>

                    <div class="card-body">
                        <form action="{{ route('confirmar_contrasena') }}" method="post">
                            @csrf
                            <input type="hidden" name="id_empleado" value="{{$idEmpleado}}">
                            <div class="form-group">
                                <label for="password">Nueva contraseña:</label>
                                <input type="password"lass="form-control" name="password" id="password">
                            </div>

                            <button type="submit" class="btn btn-primary">Cambiar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>