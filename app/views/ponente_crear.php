<?php include('../controllers/ponentes/crear.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrarse</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/general.css">
	<link rel="stylesheet" href="../assets/css/register.css">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center vh-100">
	<div class="col-md-6">
		<h1 class="text-center text-light">Panel de registro de ponentes</h1>

		<form action="/controllers/ponentes/crear.php" method="POST">


			<div class="col text-end">
				<a href="../views/ponente.php" role="button"
				   class="btn btn-secondary">Cancelar</a>
				<button type="submit" class="btn btn-primary" name="crearPonente">Crear</button>
			</div>
			<div class="mb-3">
				<label class="form-label">Introduce tu nombre de usuario(ponente)</label>
				<input class="form-control" type="text" name="Username" placeholder="Introduce tu nombre de usuario" required>
			</div>

			<div class="mb-3">
				<label class="form-label">Password</label>
				<input class="form-control" type="password" name="Password" placeholder="Introduce tu contraseña" required>
			</div>

			<div class="mb-3">
				<label class="form-label">Nombre</label>
				<input class="form-control" type="text" name="Nombre" placeholder="Introduce tu nombre" required>
			</div>

			<div class="mb-3">
				<label class="form-label">Apellido1</label>
				<input class="form-control" type="text" name="Apellido1" placeholder="Introduce tu primer apellido" required>
			</div>

			<div class="mb-3">
				<label class="form-label">Apellido2</label>
				<input class="form-control" type="text" name="Apellido2" placeholder="Introduce tu segundo apellido" required>
			</div>
		</form>
		<?php if (isset($_GET['error'])): ?>
			<div class="alert alert-danger" role="alert">
				Error al registrarse. Por favor, intente nuevamente.
			</div>
		<?php endif; ?>
	</div>
</div>
</body>
</html>
