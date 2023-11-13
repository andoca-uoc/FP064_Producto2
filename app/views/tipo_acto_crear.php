<?php include('../controllers/tipo_actos/crear.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Panel Admin + Sidebar</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/general.css">

</head>
<body>
<form action="../controllers/tipo_actos/crear.php" method="POST">
	<div class="container mt-4">
		<div class="row>">
			<div class="col">
				<h2>Nuevo tipo de acto</h2>
			</div>
			<div class="col text-end">
				<a href="../views/acto.php" role="button"
				   class="btn btn-secondary">Cancelar</a>
				<button type="submit" class="btn btn-primary" name="crearActo">Crear</button>
			</div>
		</div>

		<div class="form-floating mb-3">
			<input type="hidden" id="floatingInput" name="Id_tipo_acto">
		</div>

		<div class="form-floating mb-3">
			<input type="text" class="form-control" id="floatingInput"
				   name="Descripcion" placeholder="Descripcion">
			<label for="floatingInput">Descripcion</label>
		</div>

	</div>
</form>
</div>
</div>
</div>
</body>
</html>

