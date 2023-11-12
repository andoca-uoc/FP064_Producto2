<?php include("../includes/header.php") ?>

<div class="container mt-4">
    <div class="row">
        <div class="col text-end">
            <a href="#" role="button" class="btn btn-primary">Nuevo acto</a>
        </div>
    </div>
    <div class="row">
        <table class="table table-light table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Fecha</th>
                <th scope="col">Hora</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descripción Corta</th>
                <th scope="col">Descripcion Larga</th>
                <th scope="col">Numero de Asistentes</th>
                <th scope="col">Id tipo de acto</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($resultado as $acto) : ?>
                <tr>
                    <td><?php echo $acto->Id_acto; ?></td>
                    <td><?php echo $acto->Fecha; ?></td>
                    <td><?php echo $acto->Hora; ?></td>
                    <td><?php echo $acto->Titulo; ?></td>
                    <td><?php echo $acto->Descripcion_corta; ?></td>
                    <td><?php echo $acto->Descripcion_larga; ?></td>
                    <td><?php echo $acto->Num_asistentes; ?></td>
                    <td><?php echo $acto->Id_tipo_acto; ?></td>

                    <td>
                    <div class="btn-group" role="group">
                        <a href="#" role="button" class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></a>

                    </div>

                    <div class="btn-group" role="group">
                        <a href="#" role="button" class="btn btn-sm btn-outline-danger"> <i class="bi bi-trash"></i></a>
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

