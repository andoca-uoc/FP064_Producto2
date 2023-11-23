<?php 

if (!isset($_SESSION['user']) || !isset($_SESSION['user_type'])) {
    header('Location: /views/login.php');
    exit;
}
include '../controllers/tipo_actos/leer.php' 

?>

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
			<h2>Tipos de acto</h2>
		</div>
		<div class="container-fluid mt-4">
			<div class="row">
				<div class="col text-end">
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCrearTipoActo">Nuevo tipo de acto</button>
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
								<?php foreach ($tipo_actos as $tipo_acto) : ?>
									<tr id="tipo_acto-<?php echo $tipo_acto['id_tipo_acto']; ?>">
										<td><?php echo $tipo_acto['id_tipo_acto']; ?></td>
										<td><?php echo $tipo_acto['descripcion']; ?></td>

										<td>
											<div class="btn-group" role="group">
												<button type="button" class="btn btn-sm btn-outline-secondary" onclick="abrirModalActualizarTipoActo(<?php echo htmlspecialchars(json_encode($tipo_acto)); ?>)">Modificar</button>
											</div>

											<div class="btn-group" role="group">
												<button type="button" class="btn btn-sm btn-outline-danger" onclick="confirmarEliminacionTipoActo('../controllers/tipo_actos/borrar.php?id_tipo_acto=<?php echo $tipo_acto['id_tipo_acto']; ?>')">Borrar</button>
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