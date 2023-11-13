<?php
//Encabezados (HEADERS)
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once '../../config/Dbmysql.php';
include_once '../../models/actos.php';


//Instancionamos la base de datos y conexión
    $baseDatos = new Dbmysql();
    $db = $baseDatos->connect();

    //Instanciamos el objeto categoría
    $acto = new \app\models\Acto($db);

    $data = json_decode(file_get_contents("php://input"));

    //Setear el id de acto
    $acto->Id_acto = $data->Id_acto;

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
