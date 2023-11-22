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
			'Id_inscripcion' => $resultado['Id_inscripcion'],
			'Id_persona' => $resultado['Id_persona'],
			'Id_acto' => $resultado['Id_acto'],
			'Fecha_inscripcion' => date("Y-m-d h:i", strtotime($resultado['Fecha_inscripcion'])),
			'Nombre' => $resultado['Nombre'],
			'Apellido1' => $resultado['Apellido1'],
			'Acto_Titulo' => $resultado['Acto_Titulo'],
		);
	}
}
