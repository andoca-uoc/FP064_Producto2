<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Prubea de conexión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <?php
    $servidor = "localhost";
    $usuario = "user";
    $pass = "pass";
    $base_datos = "database";

    //conexión al servidor
    $descriptor = new Mysqli($servidor, $usuario, $pass, $base_datos)
        or die("No se puede conectar");
    //cerramos conexión
    $descriptor->close();
    ?>
    <h1 class="position-absolute top-50 start-50 translate-middle"></h1>

   </body>
</html>