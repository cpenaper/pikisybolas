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
  <h3>CALCULADORA DE PRECIOS</h3>
  <p>Ingrese los datos correctamente</p>
</div>

<div class="container">
  <!-- <h1 class="text-center">Suma de numeros</h1> -->
  <div class="row justify-content-center mt-5">
    <label class="col-3 col-form-label">Valor de Compra</label>
    <div class="col-8 col-md-4">
      <input type="number" class="form-control" placeholder="Valor compra" id="valorCompra">
    </div>
  </div>

  <div class="row justify-content-center mt-5">
    <label class=" col-3 col-form-label">% Utilidad o Ganancia</label>
    <div class="col-8 col-md-4">
      <input type="number" class="form-control" placeholder="Ganancia" id="Ganacia">
    </div>
  </div>

  <div class="row justify-content-center mt-5">
    <label class="col-3 col-form-label">%IVA</label>
    <div class="col-8 col-md-4">
      <input type="number" class="form-control" placeholder="IVA" id="Iva">
    </div>
  </div>

  <!-- Botones CLCULAR Y BORRAR -->
  <div class="row justify-content-center mt-5">
    <div class="col-8 col-md-4">
      <button class="btn btn-success col-12" onclick="hacerCalculo()" id="calcular">Calcular</button>
    </div>
</div>

<div class="row justify-content-center mt-3">
    <div class="col-8 col-md-4">
      <button class="btn btn-danger col-12" id="borrar">Borrar</button>
    </div>
</div>
<!-- Botones CLCULAR Y BORRAR -->

<!-- CAJAS DE TEXTO DONDE SE MOSTRARAN LOS RESULTADOS -->

<div class="row justify-content-center mt-5">
    <label class="col-2 col-form-label">VALOR VENTA</label>
    <div class="alert alert-success col-2 col-md-3" id="rventa" role="alert">
  </div>
</div>

<div class="row justify-content-center mt-2">
    <label class="col-2 col-form-label">GANANCIA</label>
    <div class="alert alert-success col-2 col-md-3" id="rganancia" role="alert">
</div>

<div>






<script src="/component2023/js/app.js"></script>
</body>
</html>