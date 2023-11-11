<?php
    //Encabezados (HEADERS)
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: DELETE');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

    include_once '../../config/Basemysql.php';
    include_once '../../models/ponentes.php';

    //Instancionamos la base de datos y conexión
    $baseDatos = new Basemysql();
    $db = $baseDatos->connect();

    //Instanciamos el objeto categoría
    $producto = new ponentes($db);

    $data = json_decode(file_get_contents("php://input"));

    //Setear el id de categoría
    $producto->id = $data->id;    

    //Crear categorías
    if($producto->borrar()){
        echo json_encode(
            array('message' => 'ponentes borrada')
        );
    }else{
        echo json_encode(
            array('message' => 'ponentes no borrrado')
        );
    }