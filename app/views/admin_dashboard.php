<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel Admin + Sidebar</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="/style.css">
</head>
<body>
<div class="wrapper">
  <!--Sidebar Izq-->
  <nav id="sidebar">
    <div class="sidebar-header">
      <h3>Panel de Administración</h3>
    </div>

    <ul class="list-unstyled components">
      <li>
        <a href="/event_view.php">Actos</a>
      </li>
      <li>
        <a href="/views/speaker.php">Ponentes</a>
      </li>
      <li>
        <a href="#">Tipos de actos</a>
      </li>
        <li>
            <a href="#">Inscritos</a>
        </li>
    </ul>
      <ul class="list-unstyled CTAs">
      <li  <li class="list-group-item list-group-item-info">
          <a href="#">Perfil</a>
      </li>
      </ul>

    <ul class="list-unstyled CTAs">
      <li><a href="/login.php" class="article">Desconectarse</a></li>
    </ul>
  </nav>

  <!--Contenido de la página con ejemplo temporal-->
  <div id="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <h1>Gestión de Actos</h1>
      </div>
    </nav>

      //
      <p>Aquí va el contenido</p>

  </div>
</div>
</body>
</html>
