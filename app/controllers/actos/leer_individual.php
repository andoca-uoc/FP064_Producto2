<?php
include '../models/actos.php';

    //Instancionamos la base de datos y conexión
    $baseDatos = new Basemysql();
    $db = $baseDatos->connect();

    //Instanciamos el objeto categoría
    $acto = new actos($db);

    //Get id
    $acto->id = isset($_GET['Id_acto']) ? $_GET['Id_acto'] : die();

    //Get categoría
    $acto->leer_individual();

    //Creamos el array
    $acto_arr = array(
        'Id_acto' => $acto->id,
        'Titulo' => $acto->nombre
    );

    //Crear json
    print_r(json_encode($acto_arr));