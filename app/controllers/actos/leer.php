<?php
//Encabezados (HEADERS)
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../config/dbmysql.php';
include_once '../models/actos.php';

//Instancionamos la base de datos y conexión
$baseDatos = new Dbmysql();
$db = $baseDatos->connect();

//Instanciamos el objeto acto
$acto = new \app\models\Acto($db);

$resultado = $acto->leer();

//Contar filas
$num = $resultado->rowCount();

//Validamos si existe un acto
if($num > 0){
    //Array de actos
    $categoria_arr = array();
    $categoria_arr['data'] = array();

    while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $acto_item = array(
            'Id_acto' => $Id_acto,
            'Fecha' => $Fecha,
            'Hora' => $Hora,
            'Titulo' => $Titulo,
            'Descripcion_corta' => $Descripcion_corta,
            'Descripcion_larga' => $Descripcion_larga,
            'Num_asistentes' => $Num_asistentes,
            'Id_tipo_acto' => $Id_tipo_acto
        );

        //Enviar datos
        array_push($acto_arr['data'], $acto_item);
    }

    //Enviar en formato json
    echo json_encode($acto_arr);

}else{
    //No hay actos
    echo json_encode(array('message' => 'No hay eventos'));
}
