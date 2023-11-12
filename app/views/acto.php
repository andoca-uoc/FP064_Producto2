<?php include '../controllers/actos/leer.php' ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>Panel Admin</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col text-end">
                <a href="../views/acto_crear.php" role="button" class="btn btn-primary">Nuevo acto</a>
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

                <?php foreach($actos as $acto) : ?>
                	<tr>
                		<td><?php echo $acto['id']; ?></td>
                		<td><?php echo $acto['date']; ?></td>
                		<td><?php echo $acto['time']; ?></td>
                		<td><?php echo $acto['title']; ?></td>
                		<td><?php echo $acto['description1']; ?></td>
                		<td><?php echo $acto['description2']; ?></td>
                		<td><?php echo $acto['audience']; ?></td>
                		<td><?php echo $acto['id_type']; ?></td>
                		<td>
							<div class="btn-group" role="group">
								<a role="button" class="btn btn-sm btn-outline-secondary" href="#">Modificar</a>
							</div>

							<div class="btn-group" role="group">
								<a role="button" class="btn btn-sm btn-outline-danger" href="#">Borrar</a>
							</div>
						</td>
                	</tr>
                <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
</body>

</html>
