<?php
session_start();
require 'config/db.php';

$loginError = '';



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-12 col-md-6 d-flex flex-column flex-md-row">
            <img src="assets/logo.png" alt="LOGO" class="logo img-fluid mb-4 mb-md-0 w-75">
        </div>
        <div class="col-12 col-md-6">
            <?php if ($loginError != ''): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $loginError; ?>
                </div>
            <?php endif; ?>
            <h1 class="text-white pb-5">Bienvenido a la Plataforma</h1>
<form action="index.php" method="post">
  <div class="mb-3"> 
    <label for="usuario" class="form-label">Usuario</label>
    <input type="text" class="form-control w-75" id="usuario" name="usuario" required placeholder="Introduzca su Usuario">
  </div>
  <div class="mb-3"> 
    <label for="contrasena" class="form-label">Contraseña</label>
    <input type="password" class="form-control w-75" id="contrasena" name="contrasena" required placeholder="Ingrese su Contraseña">
  </div>
  <div class="mb-3"> 
    <button type="submit" class="btn btn-primary">Acceder</button>
    <a href="registro.php" class="btn btn-link">Registrarse</a>
  </div>
</form>

        </div>
    </div>
</div>
</body>
</html>
