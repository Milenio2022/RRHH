<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="dashboard-adm">
        <?php
        require 'dashboard.php'
        ?>
        <main class="contenido">
            <div class="buscador d-flex">
                <form class="d-flex form-buscador" role="search">
                    <input class="form-control mx-3" type="search" placeholder="Buscar..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><img src="assets/lupa.svg" alt=""></button>
                </form>
                <div class="usuario">
                    <img src="images/R.png" alt="" class="img-dashboard"><span>Usuario</span>
                </div>
            </div>
            <span>ruta?</span>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="">
                        <tr>
                            <th>id</th>
                            <th>nombr</th>
                            <th>apellidos</th>
                            <th >correo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>sebas</td>
                            <td>fernandez</td>
                            <td>sebas@gmail.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>