<?php

//para que no dé fallo hasta que esté bien construido model y controller
$events = array();

?>

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
        <a href="/view/event.php">Actos</a>
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
      <li><a href="/view/login.php" class="article">Desconectarse</a></li>
    </ul>
  </nav>

  <!--Contenido de la página con ejemplo temporal-->
  <div id="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <h1>Gestión de Actos</h1>
      </div>
    </nav>
        <div class="container mt-4">
            <div class="row">
                <div class="col text-end">
                    <a href="/view/event_create.php" role="button" class="btn btn-primary">Nuevo acto</a>
                </div>
            </div>
            <div class="row">
                <table class="table table-light table-striped table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Id_acto</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripción_corta</th>
                        <th scope="col">Descripcion_larga</th>
                        <th scope="col">Num_asistentes</th>
                        <th scope="col">Id_tipo_acto</th>
                        <th scope="col">Operaciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($events as $event) :?>
                        <tr>
                            <th scope="row"><?=$event->getId_acto()?></th>
                            <td><?=$event->getFecha()?></td>
                            <td><?=$event->getHora()?></td>
                            <td><?=$event->getTitulo()?></td>
                            <td><?=$event->getDescripcion_corta()?></td>
                            <td><?=$event->getDescripcion_larga()?></td>
                            <td><?=$event->getNum_asistencia()?></td>
                            <td><?=$event->getId_tipo_acto()?></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="/view/event_edit.php" role="button"
                                       class="btn btn-sm btn-outline-secondary">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="#" role="button"
                                       class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</div>
</body>
</html>