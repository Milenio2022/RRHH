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
                        Inicio
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
                            else if (optionValue === "ver") {
                                window.location.href = "ver_empleado.php"; // Redirige a la página del formulario PHP
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

    <!-- <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-spinner-teal lighten-1">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mn-content fixed-sidebar">
            <header class="mn-header navbar-fixed">
                <nav class="cyan darken-1">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="#" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <div class="header-title col s3">      
                            <span class="chapter-title">ConfiguroWeb</span>
                        </div>
                    </div>
                </nav>
            </header> -->