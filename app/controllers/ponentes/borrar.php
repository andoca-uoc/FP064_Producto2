<?php
require_once __DIR__ . '/../../models/Ponente.php';

$db = db_connect();

if (!$db) {
	die("Error al conectar con la base de datos");
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['iduser'])) {
	$Id_usuario = $_GET['iduser'];
	$ponente = new Ponente($db);
	if ($ponente->borrar($Id_usuario)) {
		header('Location: /views/admin_panel.php');
		exit;
	} else {
		echo "Error al borrar el acto";
	}
}

?>

