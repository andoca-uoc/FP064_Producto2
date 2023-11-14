<?php
require_once(__DIR__ . '/../../models/db.php');
require_once(__DIR__ . '/../../models/tipo_actos.php');


$db = db_connect();
$actos = [];

if (!$db) {
	die("Error al conectar con la base de datos");
}

$tipo_acto = new tipoActo();

$resultados = $tipo_acto->leer();

if (count($resultados) > 0) {
	foreach ($resultados as $resultado) {
		$tipo_actos[] = array(
			'id_tipo_acto' => $resultado['Id_tipo_acto'],
			'descripcion' => $resultado['Descripcion']
		);
	}
}
