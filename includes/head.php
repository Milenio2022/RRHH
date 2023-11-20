<nav>
    <div class="logo-name">
        <div class="logo-image">
            <img src="../images/descarga (2).png" alt="">
        </div>
        <span class="logo_name">JhardSystex</span>
    </div>


    <div class="menu-items">
        <ul class="nav-links">
            <!--iconos1-->
            <li>
                <a href="index.php">
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
                <a href="permiso.php">
                    <i class='bx bx-user'></i>
                    <span class="links-name">
                        Permisos
                    </span>
                    <select class="links-name" id="selectOption" onchange="redirectToForm()">
                        <option value="permisos" disabled selected>Permisos</option>
                        <option value="aplicaciones">Aplicaciones</option>
                    </select>
                </a>
            </li>

            <script>
            function redirectToForm() {
                var selectElement = document.getElementById("selectOption");
                var optionValue = selectElement.value;

                if (optionValue === "aplicaciones") {
                    window.location.href = "aplicarpermiso.php"; // Redirige a la página para agregar empleado
                } else if (optionValue === "permisos") {
                    window.location.href = "permiso.php"; // Redirige a la página para ver empleado
                } 
                // Puedes agregar más condiciones aquí para otras opciones si es necesario
            }
            </script>


            </a>
            </li>
            <!--iconos3-->
            <li>
                <a href="perfil.php">
                    <i class='bx bx-copy-alt'></i>
                    <span class="links-name">
                        Perfil
                    </span>
                </a>
            </li>
            
            
        </ul>
        <!--iconos6-->
        
    </div>
</nav>
<section class="dashboard">
    <<<<<<< HEAD=======<div class="top">
        <i class='bx bx-menu sidebar-toggle'></i>
        <div class="search-box">
            <i class='bx bx-search'></i>
            <input type="text" placeholder="Search here...">
        </div>
        <img src="../images/R.png" alt="">
        </div>