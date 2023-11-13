<?php
require_once __DIR__ . '/../../models/tipo_actos.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id_tipo_acto'])) {
	$id_tipo_acto = $_GET['id_tipo_acto'];
	$tipo_acto = new tipoActo();
	if ($tipo_acto->borrar($id_tipo_acto)) {
		header('Location: /views/tipo_acto.php');
		exit;
	} else {
		echo "Error al borrar el acto";
	}
}

?>
