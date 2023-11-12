<?php
//Encabezados (HEADERS)
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/dbmysql.php';
include_once '../../models/actos.php';

//Instancionamos la base de datos y conexión
$baseDatos = new Dbmysql();
$db = $baseDatos->connect();

//Instanciamos el objeto acto
$acto = new \app\models\Acto($db);

//Get id
$acto->Id_acto = isset($_GET['Id_acto']) ? $_GET['Id_acto'] : die();

//Get acto
$acto->leer_individual();

//Creamos el array
$acto_arr = array(
    'Id_acto' => $acto->Id_acto,
    'titulo' => $acto->Fecha,
    'Hora' => $acto->Hora,
    'Titulo' => $acto->Titulo,
    'Descripcion_corta' => $acto->Descripcion_corta,
    'Descripcion_larga' => $acto->Descripcion_larga,
    'Num_asistentes' => $acto->Num_asistentes,
    'Id_tipo_acto' => $acto->Id_tipo_acto
);

//Crear json
print_r(json_encode($acto_arr));
