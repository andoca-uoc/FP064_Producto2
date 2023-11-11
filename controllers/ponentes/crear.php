<?php
    //Encabezados (HEADERS)
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

    include_once '../../config/Basemysql.php';
    include_once '../../models/ponentes.php';

    //Instancionamos la base de datos y conexión
    $baseDatos = new Basemysql();
    $db = $baseDatos->connect();

    //Instanciamos el objeto producto
    $producto = new ponentes($db);

    $data = json_decode(file_get_contents("php://input"));

    $producto->titulo = $data->titulo;
    $producto->texto = $data->texto;
    $producto->categoria_id = $data->categoria_id;

    //Crear producto
    if($producto->crear()){
        echo json_encode(
            array('message' => 'ponentes creado')
        );
    }else{
        echo json_encode(
            array('message' => 'ponentes no creado')
        );
    }