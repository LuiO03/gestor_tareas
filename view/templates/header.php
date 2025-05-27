<?php
    $url_base = "http://localhost/gestor_tareas";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?php
            $titulo = "Gestión de Tareas";
            $uri = $_SERVER['REQUEST_URI'];
            if (strpos($uri, 'show') !== false) {
                $titulo = "Detalles de la tarea ". $_GET['id'];
            } elseif (strpos($uri, 'create') !== false) {
                $titulo = "Crear nueva tarea";
            } elseif (strpos($uri, 'edit') !== false) {
                $titulo = "Editar tarea";
            }
            echo $titulo;
        ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <link rel="icon" href="<?php echo $url_base ?>/img/logo.png" type="image/png">
    <link rel="stylesheet" href="<?php echo $url_base ?>/style/base.css">

    <!-- Remix Icon -->
    <link href= "<?php echo $url_base ?>/libs/remix/fonts/remixicon.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    
    <style>
        /* Opcional: submenús en hover para escritorio */
        @media (min-width: 992px) {

            .dropdown-menu, .dropdown{
                transition: all 0.5ms all;
            }
            .dropdown:hover .dropdown-menu {
                display: block;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container" style="max-width: 1200px;">
            <!-- Logo alineado -->
            <a class="navbar-brand d-flex align-items-center" href="<?php echo $url_base ?>/">
                <img src="<?php echo $url_base ?>/img/logo.png" alt="Logo" style="width: 40px;" class="me-2">
                <span>to-do-list</span>
            </a>

            <!-- Botón del menú para móviles -->
            <button class="navbar-toggler text-light fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <i class="ri-menu-line"></i>
            </button>

            <!-- Menú colapsable -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <!-- Ítem 1 -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menu1" role="button" data-bs-toggle="dropdown">
                            Tareas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="menu1">
                            <li><a class="dropdown-item" href="<?php echo $url_base ?>/view/tareas/show.php">Ver Tareas</a></li>
                            <li><a class="dropdown-item" href="<?php echo $url_base ?>/view/tareas/create.php">Agregar Tarea</a></li>
                            <li><a class="dropdown-item" href="#">Permisos</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>

    


    

