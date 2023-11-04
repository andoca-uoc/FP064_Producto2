<?php

/* Vídeo Paco con PDO

    //DB CREDENCIALES DE USUARIO
    define('DB_HOST','localhost');
    define('DB_USER','user');
    define('DB_PASS','pass');
    define('DB_NAME','mydb');
  
    //Conexión al servidor de la base de datos
    try{
        $bbdd = new PDO("mysql:host=".DB_HOST.";'dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }
    catch(PDOException $e)
    {
        exit("Error: . $e->getMessage"());

A continuación se prepara la consulta CRUD en el archivo html*/


//Conexión múltiple Mysqli insertado en body para chequear conexión 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conexión BBDD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
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