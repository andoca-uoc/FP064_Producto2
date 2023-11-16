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
				<a href="admin_panel.php">Actos</a>
			</li>
			<li>
				<a href="ponente_panel.php">Ponentes</a>
			</li>
			<li>
				<a href="tipo_acto_panel.php">Tipos de actos</a>
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
				<h1> PANEL PONENTES</h1>
			</div>
		</nav>
		<?php
		include 'ponente.php';
		?>
	</div>
</div>
<div class="container-fluid mt-4">
	<div class="row">
		<div class="col text-end">
			<a href="ponente_crear.php" role="button" class="btn btn-primary">Nuevo ponente</a>
		</div>
	</div>
	<div class="modal fade" id="modalActualizar" tabindex="-1" aria-labelledby="modalActualizarLabel" aria-hidden="true">
		<div class="modal-dialog " >
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalActualizarLabel">Modificar ponente</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form id="formActualizarActo" method="POST" action="/controllers/ponente/actualizar.php">
						<input required type="hidden" id="update_id_usuario" name="id_usuario">


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
		function abrirModalActualizar(ponenteJson) {
			var ponente = typeof ponenteJson === 'string' ? JSON.parse(ponenteJson) : ponenteJson;
			document.querySelector('#update_Id_usuario').value = ponente.iduser || '';
			document.querySelector('#update_Username').value = ponente.username || '';
			document.querySelector('#update_Password').value = ponente.pass || '';
			document.querySelector('#update_Nombre').value = ponente.name || '';
			document.querySelector('#update_Apellido1').value = ponente.surname1 || '';
			document.querySelector('#update_Apellido2').value = ponente.surname2 || '';
			document.querySelector('#update_Id_persona').value = ponente.idperson || '';
			document.querySelector('#update_id_tipo_usuario').value = ponente.idtype || '';

			var modal = new bootstrap.Modal(document.getElementById('modalActualizar'));
			modal.show();
		}

		//Modal Ponente Eliminar:
		function confirmarEliminacion(url) {
			document.getElementById('btnEliminar').onclick = function() {
				window.location.href = url;
			};
			var modal = new bootstrap.Modal(document.getElementById('confirmarEliminacionModal'));
			modal.show();
		}
	</script>
</body>

</html>

