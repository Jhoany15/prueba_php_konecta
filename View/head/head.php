<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cafeteria</title>
    <link rel="stylesheet" type="text/css" href="Assets/estilos/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar" class="navbar navbar-expand-lg bg-body-tertiary" >
    <div class="container-fluid">
        <a class="navbar-brand" href="/prueba_konecta/index.php">Cafetería</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Productos
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/prueba_konecta/View/productos/index.php">Productos</a></li>
                <li><a class="dropdown-item" href="/prueba_konecta/View/productos/CrearProducto.php">Crear nuevo producto</a></li>
            </ul>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorías
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/prueba_konecta/View/categorias/index.php">Categorías</a></li>
                <li><a class="dropdown-item" href="/prueba_konecta/View/categorias/CrearCategoria.php">Crear nueva categoria</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    