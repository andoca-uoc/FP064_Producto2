<?php
require_once __DIR__ . '/../../models/db.php';
require_once __DIR__ . '/../../models/tipo_actos.php';

$db = db_connect();
if (!$db) {
	die("Error al conectar con la base de datos");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$tipo_acto = new tipoActo();
	$tipo_acto->Descripcion = $_POST['Descripcion'];

	if ($tipo_acto->crear()) {
		header('Location: /views/admin_panel.php?page=tipo_acto');
	} else {
		echo "Error al crear el acto";
	}
}
