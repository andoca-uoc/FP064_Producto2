<?php
require_once(__DIR__ . '/../../models/db.php');
require_once(__DIR__ . '/../../models/personas.php');


$db = db_connect();
$personas = [];

if (!$db) {
	die("Error al conectar con la base de datos");
}

$persona = new Persona();

$resultados = $persona->leer();

if (count($resultados) > 0) {
	foreach ($resultados as $resultado) {
		$personas[] = array(
			'Id_persona' => $resultado['Id_persona'],
			'Nombre_apellidos' => $resultado['Nombre_apellidos'] 
		);
	}
}
