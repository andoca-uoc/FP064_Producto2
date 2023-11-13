<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Panel Admin + Sidebar</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/admin.css">

</head>

<body>
	<div id="content">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<h1> PANEL TIPOS DE ACTOS</h1>
			</div>
		</nav>
		<?php
		include 'tipo_acto.php';
		?>
	</div>
</div>
<div class="modal fade" id="modalActualizar" tabindex="-1" aria-labelledby="modalActualizarLabel" aria-hidden="true">
	<div class="modal-dialog " >
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalActualizarLabel">Modificar tipo de Acto</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form id="formActualizarActo" method="POST" action="/controllers/tipo_actos/actualizar.php">
					<input required type="hidden" id="update_id_tipo_acto" name="id_tipo_acto">


					<div class="mb-3">
						<label for="update_descripcion" class="form-label">Descripción</label>
						<input required type="text" class="form-control" id="update_descripcion" name="descripcion">
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
		var tipo_acto = typeof actoJson === 'string' ? JSON.parse(actoJson) : actoJson;

		document.querySelector('#update_id_tipo_acto').value = tipo_acto.id_tipo_acto || '';
		document.querySelector('#update_descripcion').value = tipo_acto.description || '';
		// Continúa estableciendo los valores para los demás campos...

		var modal = new bootstrap.Modal(document.getElementById('modalActualizar'));
		modal.show();
	}
</script>
</body>

</html>


