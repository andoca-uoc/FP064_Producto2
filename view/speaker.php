<?php

//para que no dé fallo hasta que esté bien construido model y controller
$speakers = array();

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
        <div class="col">
            <h2>Lista de ponentes</h2>
        </div>
    </div>
    <div class="row">
        <table class="table table-light table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">Id Ponente</th>
                <th scope="col">Id Persona</th>
                <th scope="col">Id acto</th>
                <th scope="col">Orden</th>
                <th scope="col">Operaciones</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach($speakers as $speaker) :?>
                <tr>
                    <th scope="row"><?=$speaker->getId_ponente()?></th>
                    <td><?=$speaker->getId_persona()?></td>
                    <td><?=$speaker->getId_acto()?></td>
                    <td><?=$speaker->Orden()?></td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="/view/speaker_edit.php" role="button"
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
</body>
</html>