<?php

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel Admin + Sidebar</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
  <!--Sidebar Izq-->
  <nav id="sidebar">
    <div class="sidebar-header">
      <h3>Funciones</h3>
    </div>

    <ul class="list-unstyled components">
      <li>
        <a href="#">Crear Acto</a>
      </li>
      <li>
        <a href="#">Ponentes</a>
      </li>
      <li>
        <a href="#">Gestionar Tipos de Actos</a>
      </li>
    </ul>

    <ul class="list-unstyled CTAs">
      <li><a href="#" class="article">Volver</a></li>
    </ul>
  </nav>

  <!--Contenido de la página-->
  <div id="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <h1>Panel de Administración</h1>
      </div>
    </nav>
    <div>
      <p>Aquí van las vistas</p>
    </div>
  </div>
</div>
</body>
</html>