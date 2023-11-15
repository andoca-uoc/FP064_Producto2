<?php
    require_once __DIR__ . '/../../models/db.php';
    require_once __DIR__ . '/../../models/actos.php';

	$db = db_connect();
	if(!$db) {
		die("Error al conectar con la base de datos");
	}

	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		//Se instancia el objeto
		$acto = new Acto();
		//Se obtienen los valores
		//$acto->Id_acto = $_POST['id'];
		$acto->Fecha = $_POST['Fecha'];
		$acto->Hora = $_POST['Hora'];
		$acto->Titulo = $_POST['Titulo'];
		$acto->Descripcion_corta = $_POST['Descripcion_corta'];
		$acto->Descripcion_larga = $_POST['Descripcion_larga'];
		$acto->Num_asistentes = $_POST['Num_asistentes'];
		$acto->Id_tipo_acto = $_POST['Id_tipo_acto'];

		if ($acto->crear()) {
			header('Location: /views/admin_panel.php');
		} else {
			echo "Error al crear el acto";
		}
	}
?>
