<?php

//para que no dé fallo hasta que esté bien construido model y controller
$events = array();

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registro Usuarios</title>
</head>
<body>
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
</body>
</html>