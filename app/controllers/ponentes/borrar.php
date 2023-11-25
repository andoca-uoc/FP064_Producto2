<?php
require_once __DIR__ . '/../../models/Ponente.php';

$db = db_connect();

if (!$db) {
	die("Error al conectar con la base de datos");
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
	$Id_usuario = $_GET['id'];
	$ponente = new Ponente($db);
	if ($ponente->borrar($Id_usuario)) {
        header('Location: /views/admin_panel.php?page=ponente');
        exit;
	} else {
		echo "Error al borrar el acto";
	}
}

?>

