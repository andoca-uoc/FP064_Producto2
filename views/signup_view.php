<?php
session_start();
include_once 'config/db.php';
include('signup.php');

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $id_usuario = $_POST['id_usuario'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Id_Persona = $_POST['Id_Persona'];
    $Id_tipo_usuario = $_POST['Id_tipo_usuario'];
    if (!empty($Username) && !empty($Password) && !is_numeric($Username)) {

        $query = "INSERT INTO Usuarios (Id_usuario, Username, Password, Id_Persona, Id_tipo_usuario) values ('$id_usuario', '$Username', '$Password', '$Id_Persona', '$Id_tipo_usuario)";

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
    <h2>Registrese como estudiante</h2>
</div>

<div class="container">
    <form class="form" action="controllers/signup.php" method="post">
        <input type="hidden" name="Id_usuario"><br>
        
        <label>usuario</label><br>
        <input type="text" name="Username" placeholder="Introduce tu nombre de usuario"><br>
        
        <label>password</label><br>
        <input type="password" name="Password" placeholder="Introduce tu contraseña"><br>
        
        <input type="hidden" name="Id_Persona"<br>
        
        <input type="hidden" name="Id_tipo_usuario"<br>

        <input class="submit" type="submit" value="Registrar"><br>


    </form>
</div>


</body>
</html>
