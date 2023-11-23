<?php
 include '../controllers/ponentes/leer.php';
 include '../controllers/ponentes/crear.php';
 include '../controllers/ponentes/borrar.php';
?>


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
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<h1>Gestión de Ponentes</h1>
		</div>
	</nav>
	<div class="row">
		<div class="col text-end">
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCrearPonente">Nuevo Ponente</button>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="table-responsive">
				<table class="table table-light table-striped table-hover w-100 h-100">
					<thead>
					<tr>
						<th scope="col">ID Usuario</th>
						<th scope="col">Nombre Usuario</th>
						<th scope="col">Password</th>
						<th scope="col">Nombre</th>
						<th scope="col">Apellido 1</th>
						<th scope="col">Apellido 2</th>
						<th scope="col">Id Persona</th>
						<th scope="col">Id tipo usuario</th>
						<th scope="col">Acciones</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($ponentes as $ponente) : ?>
						<tr id="ponente-<?php echo $ponente['iduser']; ?>">
							<td><?php echo $ponente['iduser']; ?></td>
							<td><?php echo $ponente['username']; ?></td>
							<td><?php echo $ponente['pass']; ?></td>
							<td><?php echo $ponente['name']; ?></td>
							<td><?php echo $ponente['surname1']; ?></td>
							<td><?php echo $ponente['surname2']; ?></td>
							<td><?php echo $ponente['idperson']; ?></td>
							<td><?php echo $ponente['idtype']; ?></td>
							<td>
								<div class="btn-group" role="group">
									<button onclick="abrirModalActualizarPonente(<?php echo htmlspecialchars(json_encode($ponente)); ?>)" class="btn btn-sm btn-outline-secondary">Modificar</button>
								</div>

								<div class="btn-group" role="group">
									<a role="button" class="btn btn-sm btn-outline-danger" href="ponente.php" onclick="confirmarEliminacionPonenteModal('../controllers/ponente/borrar.php?id=<?php echo $ponente['iduser']; ?>')">Borrar</a>
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
</body>

</html>
