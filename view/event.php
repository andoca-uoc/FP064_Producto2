<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title></title>
</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col text-end">
            <a href="event_create_view.php" role="button" class="btn btn-primary">Nuevo acto</a>
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
            <?php
            if (count($listevents) > 0) {
                foreach($listevents as $result) {
                    echo "<tr>
                    <th>".$result -> Id_acto."</th>
                    <th>".$result -> Fecha."</th>
                    <th>".$result -> Hora."</th>
                    <th>".$result -> Titulo."</th>
                    <th>".$result -> Descripcion_corta."</th>
                    <th>".$result -> Descripcion_larga."</th>
                    <th>".$result -> Num_asistentes."</th>
                    <th>".$result -> Id_tipo_acto."</th>";
                }
            }
            else{
            echo 'No hay resultados';
            }
            ?>
                        <div class="btn-group" role="group">
                            <a role="button" class="btn btn-sm btn-outline-secondary" href="\controller/event_modify.php?id=".$result -> id."\">Modificar</a>
                        </div>
                        <div class="btn-group" role="group">
                            <a role="button" class="btn btn-sm btn-outline-danger" href="\controller/event_delete.php?id=".$result -> id."\">Borrar</a>

                            <button class="btn btn-sm btn-outline-danger" type="button"
                                    onclick="fetch('/view/event/<?=$event->getId_actos()?>'
                                            {method: 'DELETE'})
                                            .then(data => location.reload() )"><i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</body>
</html>
