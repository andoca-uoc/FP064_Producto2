<?php
require_once __DIR__ . '/../../models/db.php';
require_once __DIR__ . '/../../models/tipo_actos.php';

$db = db_connect();
if(!$db) {
	die("Error al conectar con la base de datos");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	//Se instancia el objeto
	$tipo_acto = new tipoActo();
	//Se obtienen los valores
	$tipo_acto->Descripcion = $_POST['Descripcion'];


	if ($tipo_acto->crear()) {
		header('Location: /views/tipo_acto.php');
	} else {
		echo "Error al crear el acto";
	}
}
?>
