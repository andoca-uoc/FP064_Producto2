<?php include '../controllers/inscripciones/leer.php' ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Panel Admin + Sidebar</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/admin.css">
	<link rel="stylesheet" href="/assets/css/general.css">
</head>

<body>
	<div class="container-fluid">
		<div class="container bg-light">
			<h2>Inscripciones</h2>
		</div>
		<div class="container-fluid mt-4">
			<div class="row">
				<div class="col text-end">
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCrearTipoActo">Nueva inscripción</button>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="table-responsive">
						<table class="table table-light table-striped table-hover w-100 h-100">
							<thead>
								<tr>
									<th scope="col">ID inscripción</th>
									<th scope="col">Título Acto</th>
									<th scope="col">Fecha Acto</th>
									<th scope="col">Nombre</th>
									<th scope="col">Apellidos</th>
									<th scope="col">Acciones</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($inscripciones as $inscripcion) : ?>
									<tr id="inscripcion-<?php echo $inscripcion['Id_inscripcion']; ?>">
										<td><?php echo $inscripcion['Id_inscripcion']; ?></td>
										<td><?php echo "" ?> Aprende PHP </td>
										<td><?php echo $inscripcion['Fecha_inscripcion']; ?></td>
										<td><?php echo "" ?> Pepe </td>
										<td><?php echo "" ?> Perez </td>

										<td>
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-sm btn-outline-danger" onclick="confirmarEliminacionTipoActo('../controllers/inscripciones/borrar.php?Id_inscripcion=<?php echo $inscripcion['Id_inscripcion']; ?>')">Borrar</button>
											</div>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>