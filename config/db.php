<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conexión BBDD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
    $servidor = "mysql";
    $usuario = "user";
    $pass = "pass";
    $base_datos = "mydb";
    //Conexión al servidor de la base de datos
    $descriptor = new Mysqli ($servidor, $usuario, $pass, $base_datos)
    or die ("No se puede establecer la conexión");
    //Cerramos la conexión cuando terminemos
    $descriptor->close();
?>
<h1 class="position-absolute top-50 start-50 translate=middle">
</body>
</html>