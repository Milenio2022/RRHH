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
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="../images/logo.jpeg" alt="">
            </div>
            <span class="logo_name">Bantang</span>
        </div>


        <div class="menu-items">
            <ul class="nav-links">
                <!--iconos1-->
                <li>
                    <a href="#">
                        <i class='bx bx-home-alt'></i>
                        <span class="links-name">
                            Dashboard
                        </span>
                    </a>
                </li>
                <!--iconos2-->
                <!--<li>
                    <a href="#">
                        <i class='bx bx-user'></i>
                        <span class="links-name">
                            Empleado
                        </span>
                    </a>
                </li>-->
                <li>
                    <a href="#">
                        <i class='bx bx-user'></i>
                        <span class="links-name">
                            Empleado
                        </span>
                        <select class="links-name" onchange="redirectToForm(this.value)">
                            <option value="" disabled selected>Ver</option>
                            <option value="agregar">Agregar Empleado</option>
                            <option value="ver">Ver Empleado</option>
                        </select>

                        <script>
                        function redirectToForm(optionValue) {
                            if (optionValue === "agregar") {
                                window.location.href = "form.php"; // Redirige a la página del formulario PHP
                            }
                            // Puedes agregar más condiciones aquí para otras opciones si es necesario
                        }
                        </script>

                    </a>
                </li>
                <!--iconos3-->
                <li>
                    <a href="#">
                        <i class='bx bx-copy-alt'></i>
                        <span class="links-name">
                            Permisos
                        </span>
                    </a>
                </li>
                <!--iconos4-->
                <li>
                    <a href="./contraseña.php">
                        <i class='bx bx-lock'></i>
                        <span class="links-name">
                            Cambiar Contraseña
                        </span>
                    </a>
                </li>
                <!--iconos5-->
                <li>
                    <a href="#">
                        <i class='bx bx-cog'></i>
                        <span class="links-name">
                            Configuracion
                        </span>
                        <select class="links-name ">
                            <option value="" disabled selected>Ver</option>
                            <option value="agregar">Ciudad</option>
                            <option value="ver">Departamento</option>
                            <option value="ver">Pais</option>
                            <option value="ver">Cargo</option>
                        </select>
                    </a>
                </li>
            </ul>
            <!--iconos6-->
            <ul class="logout-mode">
                <li>
                    <a href="#">
                        <i class='bx bx-log-out'></i>
                        <span class="links-name">
                            Logout
                        </span>
                    </a>
                </li>
                <!--iconos7-->
                <li class="mode">
                    <a href="#">
                        <i class='bx bx-moon'></i>
                        <span class="links-name">
                            Dark Mode
                        </span>
                    </a>
                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <section class="dashboard">
        <div class="top">
            <i class='bx bx-menu sidebar-toggle'></i>
            <div class="search-box">
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search here...">
            </div>
            <img src="../images/porfile.jpeg" alt="">
        </div>
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