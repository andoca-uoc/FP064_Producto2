<?php
require_once __DIR__ . '/../../models/db.php';
require_once __DIR__ . '/../../models/Ponente.php';

$db = db_connect();
$ponentes = [];

if (!$db) {
	die("Error al conectar con la base de datos");
}
$ponente = new Ponente($db);

$resultados = $ponente->leer();

if(count($resultados)> 0){
	foreach($resultados as $resultado){
		$ponentes[] = array(
			'iduser' => $resultado['Id_usuario'],
			'username' => $resultado['Username'],
			'pass' => $resultado['Password'],
			'name' => $resultado['Nombre'],
			'surname1' => $resultado['Apellido1'],
			'surname2' => $resultado['Apellido2'],
			'idperson' =>  $resultado['Id_persona'],
			'idtype' =>  $resultado['Id_tipo_usuario']
		);
	}
}
