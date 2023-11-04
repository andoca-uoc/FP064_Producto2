<?php

require_once 'controllers/login.php';
$user = new user_controller();
$user->login();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EVENTS APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class = "container">
        <div class = "container">
            <h1>Introduce tus credenciales</h1>
        <div class = "col-md-12 well">
            Id: ( $_POST ) : <?= $_POST[ 'id_Persona' ]?>
        </div>
        <div class = "col-md-12 well">
            Contraseña: ( $_POST ) : <?= $_POST[ 'Password' ]?>
        </div>
    </div>
  </body>
</html>


