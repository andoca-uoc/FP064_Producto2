<?php
require_once __DIR__ . '/../../models/tipo_actos.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$tipo_acto = new tipoActo();

	// Asignar valores del POST a las propiedades del objeto $acto
	$tipo_acto->Id_tipo_acto = $_POST['id_tipo_acto'];
	$tipo_acto->Descripcion = $_POST['descripcion'];


	if ($tipo_acto->actualizar()) {
		header('Location: /views/tipo_acto_panel.php');
	} else {
		echo "Error al actualizar el tipo de acto";
	}
}
?>
