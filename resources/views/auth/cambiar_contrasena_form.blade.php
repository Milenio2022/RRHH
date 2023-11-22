<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Verificación de contraseña</div>

                    <div class="card-body">
                        <form action="{{route('cambiar_contrasena.store')}}" method="post">
                            @csrf


                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            {{-- <div class="form-group">
                                <label for="code">Código de verificación</label>
                                <input type="text" class="form-control" name="code" id="code">
                            </div> --}}

                            <button type="submit" class="btn btn-primary">Verificar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>