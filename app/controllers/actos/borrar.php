<?php
include '../models/actos.php';

    //Instancionamos la base de datos y conexión
    $baseDatos = new Basemysql();
    $db = $baseDatos->connect();

    //Instanciamos el objeto categoría
    $acto = new actos($db);

    $data = json_decode(file_get_contents("php://input"));

    //Setear el id de categoría
    $acto->id = $data->id;

    //Crear categorías
    if($acto->borrar()){
        echo json_encode(
            array('message' => 'Evento borrado')
        );
    }else{
        echo json_encode(
            array('message' => 'Evento NO borrrado')
        );
    }