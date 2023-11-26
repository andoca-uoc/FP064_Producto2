<?php
require_once __DIR__ . '/../../models/db.php';
require_once __DIR__ . '/../../models/inscripciones.php';
date_default_timezone_set('UTC');

$db = db_connect();
if (!$db) {
	die("Error al conectar con la base de datos");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	//Se instancia el objeto
	$inscripcion = new Inscripcion();
	//Se obtienen los valores
	$inscripcion->Id_persona = $_POST['Id_persona'];
	$inscripcion->Id_acto = $_POST['Id_acto'];
	$inscripcion->Fecha_inscripcion = date("Y-m-d H:i:s");

	if ($inscripcion->crear()) {
		if (!isset($_SESSION['user']) || !isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'admin') {
			header('Location: /views/user_dashboard.php?page=inscripciones-usuario');
			exit;
		}
		header('Location: /views/user_dashboard.php?page=inscripciones');
		exit;
	} else {
		echo "Error al crear el inscripcion";
	}
}
