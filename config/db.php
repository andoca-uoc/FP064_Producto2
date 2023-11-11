<?php

    //DB CREDENCIALES DE USUARIO
    define('DB_HOST','localhost');
    define('DB_USER','user');
    define('DB_PASS','pass');
    define('DB_NAME','database');
  
    //Conexión al servidor de la base de datos
    try{
        $bbdd = new PDO("mysql:host=".DB_HOST.";'dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }
    catch(PDOException $e){
        exit("Error: " . $e->getMessage());
    }
?>