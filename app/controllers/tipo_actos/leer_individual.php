<?php
//Encabezados (HEADERS)
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/dbmysql.php';
include_once '../../models/tipo_actos.php';

//Instancionamos la base de datos y conexión
$baseDatos = new Dbmysql();
$db = $baseDatos->connect();

//Instanciamos el objeto acto
$tipo_acto = new \app\models\Acto($db);

//Get id
$tipo_acto->Id_tipo_acto = isset($_GET['Id_tipo_acto']) ? $_GET['Id_tipo_acto'] : die();

//Get acto
$tipo_acto->leer_individual();

//Creamos el array
$acto_arr = array(
	'Id_tipo_acto' => $tipo_acto->Id_tipo_acto,
	'Descripcion' => $tipo_acto->Descripcion
);

//Crear json
print_r(json_encode($acto_arr));
