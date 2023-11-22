<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Código</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Verificar Código</div>

                    <div class="card-body">
                        <form action="{{ route('validar_codigo') }}" method="post">
                            @csrf

                            <input type="hidden" name="email_cambio" value="{{$email}}">
                            <input type="hidden" name="codigo_enviado" value="{{$codigo}}">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" value="{{$email}}" class="form-control" name="email" id="email" disabled>
                            </div>
                            <div class="form-group">
                                <label for="codigo">Ingrese el código de 6 dígitos:</label>
                                <input type="text" class="form-control" name="codigo" id="codigo" maxlength="6">
                            </div>

                            <button type="submit" class="btn btn-primary">Verificar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>