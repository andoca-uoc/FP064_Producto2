<?php
session_start();


if($_SERVER['REQUEST_METHOD'] == "POST") {
    $id_usuario = $_POST['id_usuario'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Id_tipo_usuario = $_POST['Id_tipo_usuario'];
    $Id_Persona = $_POST['Id_Persona'];
    $Nombre = $_POST['Nombre'];
    $Apellido1 = $_POST['Apellido1'];
    $Apellido2 = $_POST['Apellido2'];
    if (!empty($Username) && !empty($Password) && !is_numeric($Username)) {

        $query = "INSERT INTO Usuarios (Id_usuario, Username, Password, Id_tipo_usuario) values ('$id_usuario', '$Username', '$Password', '$Id_tipo_usuario)";
        $query = "INSERT INTO Personas (Id_Persona, Nombre, Apellido1, Apellido2) values ('$Id_Persona', '$Nombre', '$Apellido1', '$Apellido2')";

        mysqli_query($db, $query);

    } else
    {
        echo "Se debe introducir información válida";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Registro Usuarios</title>
</head>
<body>
<div class="container">
    <h1>Registro de usuario</h1>
    <div class="col-md-12 well">
    <form role="form" id="myform" action="controllers/signup.php" method="POST">
      <input type="hidden" name="Id_usuario">

      <div class="mb-3">
        <label>usuario</label><br>
        <input type="text" name="Username" placeholder="Introduce tu nombre de usuario">
      </div>

      <div class="mb-3">
        <label>password</label><br>
        <input type="password" name="Password" placeholder="Introduce tu contraseña">
      </div>

      <input type="hidden" name="Id_tipo_usuario">

      <input type="hidden" name="Id_Persona">

      <div class="mb-3">
        <label>Nombre</label><br>
        <input type="text" name="Nombre" placeholder="Introduce tu nombre">
      </div>

      <div class="mb-3">
        <label>Apellido1</label><br>
        <input type="text" name="Apellido 1" placeholder="Introduce tu primer apellido">
      </div>

      <div class="mb-3">
        <label>Apellido2</label><br>
        <input type="text" name="Apellido 2" placeholder="Introduce tu segundo apellido">
      </div>

      <input class="submit" type="submit" value="Registrar">


    </form>
  </div>
</div>


</body>
</html>
