<?php
require_once __DIR__ . '/../../models/Ponente.php';

$db = db_connect();
$ponentes = [];

if (!$db) {
	die("Error al conectar con la base de datos");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$ponente = new Ponente($db);

	// Asignar valores del POST a las propiedades del objeto ponente
	$ponente->Id_usuario = $_POST['Id_usuario'];
	$ponente->Username = $_POST['Username'];
	$ponente->Password = $_POST['Password'];
	$ponente->Nombre = $_POST['Nombre'];
	$ponente->Apellido1 = $_POST['Apellido1'];
	$ponente->Apellido2 = $_POST['Apellido2'];
	$ponente->Id_persona = $_POST['Id_persona'];
	$ponente->Id_tipo_usuario = $_POST['id_tipo_usuario'];

	if ($ponente->actualizar()) {
		header('Location: /views/ponente.php');
	} else {
		echo "Error al actualizar el ponente";
	}
}
?>


