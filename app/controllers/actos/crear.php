<?php
//Encabezados (HEADERS)
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once '../../config/dbmysql.php';
include_once '../../models/actos.php';

//Instancionamos la base de datos y conexión
$baseDatos = new Dbmysql();
$db = $baseDatos->connect();

//Instanciamos el objeto acto
$acto = new \app\models\Acto($db);

$data = json_decode(file_get_contents("php://input"));

$acto->Fecha = $data->Fecha;
$acto->Hora = $data->Hora;
$acto->Titulo = $data->Titulo;
$acto->Descripcion_corta = $data->Descripcion_corta;
$acto->Descripcion_larga = $data->Descripcion_larga;
$acto->Num_asistentes = $data->Num_asistentes;
$acto->Id_tipo_acto = $data->Id_tipo_acto;

//Crear evento
if($acto->crear()){
    echo json_encode(
        array('message' => 'Evento creado')
    );
}else{
    echo json_encode(
        array('message' => 'Evento NO creado')
    );
}

