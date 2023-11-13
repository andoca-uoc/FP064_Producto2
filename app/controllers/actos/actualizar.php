<?php
require_once __DIR__ . '/../../models/actos.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$acto = new Acto();

	// Asignar valores del POST a las propiedades del objeto $acto
	$acto->Id_acto = $_POST['id'];
	$acto->Fecha = $_POST['fecha'];
	$acto->Hora = $_POST['hora'];
	$acto->Titulo = $_POST['titulo'];
	$acto->Descripcion_corta = $_POST['descripcion_corta'];
	$acto->Descripcion_larga = $_POST['descripcion_larga'];
	$acto->Num_asistentes = $_POST['num_asistentes'];
	$acto->Id_tipo_acto = $_POST['id_tipo_acto'];

	if ($acto->actualizar()) {
		header('Location: /views/admin_panel.php');
	} else {
		echo "Error al actualizar el acto";
	}
}
?>
