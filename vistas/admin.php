<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand">
    <img src="/component2023/img/support.png" width="50">
  </a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/component2023/vistas/admin">Administrador</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/component2023/vistas/utilidades">Utilidades</a>
    </li>
    

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Inventario
      </a>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="/component2023/vistas//inventario/ingresar">Ingresar Producto</a>
        <a class="dropdown-item" href="/component2023/vistas//inventario/actualizar">Actualizar</a>
        <a class="dropdown-item" href="/component2023/vistas//inventario/eliminar">Eliminar</a>
        <a class="dropdown-item" href="/component2023/vistas//inventario/consultar">Consultar</a>
      </div>
    </li>
  </ul>
</nav>
<br>
  
<div class="container">
  <h3>Area de Administrador</h3>
  <p>This example adds a dropdown menu in the navbar.</p>
</div>

</body>
</html>