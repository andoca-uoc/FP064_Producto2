<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EVENTS APP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="display-9 text-center">
  <div class="container">
    <h1>Introduce tus credenciales</h1>
  </div>
  <form name="login" action="controllers/login.php" method="POST">
    <!--Id_usuario-->
    <div class="mb-3">
      <label for="Id_usuario">Id de usuario</label><br>
      <input type="text" name="Id_usuario" placeholder="Introduce tu id de usuario">
    </div>
    <!--Password-->
    <div class="mb-3">
      <label for="Password">contraseña</label><br>
      <input type="password" name="Password" placeholder="Introduce tu contraseña">
    </div>
    <!--Botón de envío-->
    <input class="submit" type="submit" name="login_std" value="Entrar">
  </form>
  <p>
    <a href="views/signup_view.php">Registrarse</a>
  </p>
</div>
</body>
</html>