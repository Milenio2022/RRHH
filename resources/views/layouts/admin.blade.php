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

    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="{{ asset('images/logo.jpeg') }}" alt="">
            </div>
            <span class="logo_name">Bantang</span>
        </div>


        <div class="menu-items">
            <ul class="nav-links list-unstyled ps-0">
                <!--iconos1-->
                <li>
                    <a href="/">
                        <i class='bx bx-home-alt'></i>
                        <span class="links-name">
                            Inicio
                        </span>
                    </a>
                </li>

                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#dashboard-collapse" aria-expanded="false">
                        <i class='bx bx-user'></i>
                        Empleado
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="{{ route('empleado.index') }}" class="link-dark rounded">Crear Empleado</a>
                            </li>
                            <li><a href="{{ route('ver_empleados') }}" class="link-dark rounded">Ver empleado</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#cargo" aria-expanded="false">
                        <i class='bx bx-user'></i>
                        Cargos
                    </button>
                    <div class="collapse" id="cargo">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="{{ route('cargo.index') }}" class="link-dark rounded">Crear Cargo</a>
                            </li>
                            <li><a href="{{ route('ver_cargos') }}" class="link-dark rounded">Ver Cargos</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#departamento" aria-expanded="false">
                        <i class='bx bx-user'></i>
                        Departamentos
                    </button>
                    <div class="collapse" id="departamento">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="{{ route('departamento.index') }}" class="link-dark rounded">Crear
                                    Departamento</a>
                            </li>
                            <li><a href="{{ route('ver_departamentos') }}" class="link-dark rounded">Ver
                                    Departamento</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#supervisor" aria-expanded="false">
                        <i class='bx bx-user'></i>
                        Supervisores
                    </button>
                    <div class="collapse" id="supervisor">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="{{ route('supervisor.index') }}" class="link-dark rounded">Crear
                                    supervisor</a>
                            </li>
                            <li><a href="{{ route('ver_supervisores') }}" class="link-dark rounded">Ver supervisor</a>
                            </li>
                        </ul>
                    </div>
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
                    <form method="POST" action="{{ route('logout') }}" class="m-3 p-3">
                        @csrf

                        <button type="submit" class="links-name button btn-danger"> <i class='bx bx-log-out'></i>
                            Cerrar sesión
                        </button>
                    </form>

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
            <img src="{{ asset('images/porfile.jpeg') }}" alt="">
        </div>
        @yield('contenido')
    </section>
</body>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/main') }}"></script>
<script src="{{ asset('js/main2') }}"></script>

<script src="{{ asset('js/script.js') }}"></script>

<script>
    // Función para resetear los campos del formulario
    document.getElementById('resetearCampos').addEventListener('click', function() {
        // Restablece los valores de los campos
        document.getElementById('id').value = '';
        // Restablece otros campos aquí
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    new DataTable('#empleados');
</script>

</html>
