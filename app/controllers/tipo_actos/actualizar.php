<?php
require_once __DIR__ . '/../../models/tipo_actos.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$tipo_acto = new tipoActo();

	$tipo_acto->Id_tipo_acto = $_POST['id_tipo_acto'];
	$tipo_acto->Descripcion = $_POST['descripcion'];


	if ($tipo_acto->actualizar()) {
		header('Location: /views/admin_panel.php?page=tipo_acto');
	} else {
		echo "Error al actualizar el tipo de acto";
	}
}
?>
