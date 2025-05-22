<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>To do list</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
  <style>
    /* Opcional: submenús en hover para escritorio */
    @media (min-width: 992px) {
      .dropdown:hover .dropdown-menu {
        display: block;
      }
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MiApp</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <!-- Ítem 1 -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="menu1" role="button" data-bs-toggle="dropdown">
              Gestión
            </a>
            <ul class="dropdown-menu" aria-labelledby="menu1">
              <li><a class="dropdown-item" href="#">Usuarios</a></li>
              <li><a class="dropdown-item" href="#">Roles</a></li>
              <li><a class="dropdown-item" href="#">Permisos</a></li>
            </ul>
          </li>

          <!-- Ítem 2 -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="menu2" role="button" data-bs-toggle="dropdown">
              Reportes
            </a>
            <ul class="dropdown-menu" aria-labelledby="menu2">
              <li><a class="dropdown-item" href="#">Ventas</a></li>
              <li><a class="dropdown-item" href="#">Clientes</a></li>
              <li><a class="dropdown-item" href="#">Inventario</a></li>
            </ul>
          </li>

          <!-- Ítem 3 -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="menu3" role="button" data-bs-toggle="dropdown">
              Configuración
            </a>
            <ul class="dropdown-menu" aria-labelledby="menu3">
              <li><a class="dropdown-item" href="#">Perfil</a></li>
              <li><a class="dropdown-item" href="#">Seguridad</a></li>
              <li><a class="dropdown-item" href="#">Preferencias</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
