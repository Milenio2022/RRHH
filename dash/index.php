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
    <title>PANEL DE CONTROL</title>
</head>

<body>
    <?php 
        include '../includes/header.php'
    ?>

        <!--TITULO-->
        <h1 class="links-name">SISTEMA DE RRHH</h1>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class='bx bx-rotate-left'></i>
                    <span class="text">Dasboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class='bx bx-like'></i>
                        <span class="text">Total de likes</span>
                        <span class="number">599</span>
                    </div>
                    <div class="box box2">
                        <i class='bx bx-user'></i>
                        <span class="text">Empleado</span>
                        <span class="number">599</span>
                    </div>
                    <div class="box box3">
                        <i class='bx bx-copy-alt'></i>
                        <span class="text">Solicitud de Permisos</span>
                        <span class="number">599</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="../js/script.js"></script>
</body>

</html>