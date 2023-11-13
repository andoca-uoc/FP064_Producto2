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
<div class="wrapper">
	<nav id="sidebar">
		<div class="sidebar-header">
			<h3>Panel de Administración</h3>
		</div>

		<ul class="list-unstyled components">
			<li>
				<a href="/event_view.php">Actos</a>
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
			<li class="list-group-item list-group-item-info">
				<a href="#">Perfil</a>
			</li>
		</ul>

		<ul class="list-unstyled CTAs">
			<li><a href="/login.php" class="article">Desconectarse</a></li>
		</ul>
	</nav>

	<div id="content">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<h1>Gestión de Actos</h1>
			</div>
		</nav>
		<?php
		include 'acto.php';
		?>
	</div>
</div>
<div class="modal fade" id="modalActualizar" tabindex="-1" aria-labelledby="modalActualizarLabel" aria-hidden="true">
	<div class="modal-dialog " >
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalActualizarLabel">Modificar Acto</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form id="formActualizarActo" method="POST" action="/controllers/actos/actualizar.php">
					<input required type="hidden" id="update_id" name="id">


					<div class="mb-3">
						<label for="update_fecha" class="form-label">Fecha</label>
						<input required type="date" class="form-control" id="update_fecha" name="fecha">
					</div>

					<div class="mb-3">
						<label for="update_hora" class="form-label">Hora</label>
						<input required type="time" class="form-control" id="update_hora" name="hora">
					</div>

					<div class="mb-3">
						<label for="update_titulo" class="form-label">Título</label>
						<input required type="text" class="form-control" id="update_titulo" name="titulo">
					</div>

					<div class="mb-3">
						<label for="update_descripcion_corta" class="form-label">Descripción Corta</label>
						<textarea class="form-control" id="update_descripcion_corta" name="descripcion_corta" rows="1"></textarea>
					</div>

					<div class="mb-3">
						<label for="update_descripcion_larga" class="form-label">Descripción Larga</label>
						<textarea class="form-control" id="update_descripcion_larga" name="descripcion_larga" rows="2"></textarea>
					</div>

					<div class="mb-3">
						<label for="update_num_asistentes" class="form-label">Número de Asistentes</label>
						<input required type="number" class="form-control" id="update_num_asistentes" name="num_asistentes">
					</div>

					<div class="mb-3">
						<label for="update_id_tipo_acto" class="form-label">ID Tipo de Acto</label>
						<input required type="text" class="form-control" id="update_id_tipo_acto" name="id_tipo_acto">
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
						<button type="submit" class="btn btn-primary">Guardar Cambios</button>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
	function abrirModalActualizar(actoJson) {
		var acto = typeof actoJson === 'string' ? JSON.parse(actoJson) : actoJson;

		document.querySelector('#update_id').value = acto.id || '';
		document.querySelector('#update_fecha').value = acto.date || '';
		// Continúa estableciendo los valores para los demás campos...

		var modal = new bootstrap.Modal(document.getElementById('modalActualizar'));
		modal.show();
	}
</script>
</body>

</html>
