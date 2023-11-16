<?php
require_once(__DIR__ . '/../../models/db.php');
require_once(__DIR__ . '/../../models/inscripciones.php');


$db = db_connect();
$inscripciones = [];

if (!$db) {
	die("Error al conectar con la base de datos");
}

$inscripcion = new Inscripcion();

$resultados = $inscripcion->leer();

if (count($resultados) > 0) {
	foreach ($resultados as $resultado) {
		$inscripciones[] = array(
			'id_inscripcion' => $resultado['Id_inscripcion'],
			'id_persona' => $resultado['Id_persona'],
			'id_acto' => $resultado['Id_acto']
			'Fecha_inscripcion' => $resultado['Fecha_inscripcion']
		);
	}
}
