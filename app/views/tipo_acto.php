<?php include '../controllers/tipo_actos/leer.php' ?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/admin.css">
	<link rel="stylesheet" href="/assets/css/general.css">

	<title>Panel Admin</title>
</head>

<body>
<div class="container-fluid mt-4">
	<div class="row">
		<div class="col text-end">
			<a href="../views/tipo_acto_crear.php" role="button" class="btn btn-primary">Nuevo tipo de acto</a>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="table-responsive">
				<table class="table table-light table-striped table-hover w-100 h-100">
					<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Descripción</th>
						<th scope="col">Acciones</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach($tipo_actos as $tipo_acto) : ?>
						<tr id="tipo_acto-<?php echo $tipo_acto['id_tipo_acto']; ?>">
							<td><?php echo $tipo_acto['id_tipo_acto']; ?></td>
							<td><?php echo $tipo_acto['descripcion']; ?></td>


							<td>
								<div class="btn-group" role="group">
									<button onclick="abrirModalActualizar(<?php echo htmlspecialchars(json_encode($tipo_acto)); ?>)" class="btn btn-sm btn-outline-secondary">Modificar</button>
								</div>

								<div class="btn-group" role="group">
									<a role="button" class="btn btn-sm btn-outline-danger" href="../controllers/tipo_actos/borrar.php?id=<?php echo $tipo_acto['id_tipo_acto']; ?>">Borrar</a>
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
