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
    //solo habia id y nombre
    $acto->fecha = $data->fecha;
    $acto->hora = $data->hora;
    $acto->titulo = $data->titulo;
    $acto->descripcionCorta = $data->descripcionCorta;
    $acto->descripcionLarga = $data->descripcionLarga;
    $acto->numeroAsistentes = $data->numeroAsistentes;
    $acto->idTipoUsuario = $data->idTipoUsuario;



    //Crear categorías
    if($acto->actualizar()){
        echo json_encode(
            array('message' => 'Evento actualizado')
        );
    }else{
        echo json_encode(
            array('message' => 'Evento NO actualizada')
        );
    }