<?php
require_once '../includes/config.php';

$sql = "SELECT * FROM empleado";
$resultado = $dbh->query($sql);

if ($resultado->rowCount() > 0) {
    $empleados = $resultado->fetchAll(PDO::FETCH_OBJ);

} else {
    echo "No se encontraron resultados.";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.
    0">
    <!----CSS-->
    <link rel="stylesheet" href="../css/styles.css">

    <!----ICONS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!----Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>PANEL DE CONTROL</title>
</head>

<body>
    <?php
    include '../includes/header.php'
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
                        <th>correo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($empleados as $empleado) { ?>
                        <tr>
                            <td><?php echo $empleado->id ?></td>
                            <td><?php echo $empleado->nombre  ?></td>
                            <td><?php echo $empleado->apeliido  ?></td>
                            <td><?php echo $empleado->correo ?></td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </main>
    <script src="../js/script.js"></script>
</body>

</html>