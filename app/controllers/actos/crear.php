<?php
    require_once __DIR__ . '/../../models/db.php';
    require_once __DIR__ . '/../../models/actos.php';

	$db = db_connect();
	if(!$db) {
		die("Error al conectar con la base de datos");
	}


	//if ($_SERVER['REQUEST_METHOD'] === 'POST')
	if (isset($_POST['crearActo']))
	{
		//Se obtienen los valores
		$Fecha = $_POST['Fecha'];
		$Hora = $_POST['Hora'];
		$Titulo = $_POST['Titulo'];
		$Descripcion_corta = $_POST['Descripcion_corta'];
		$Descripcion_larga = $_POST['Descripcion_larga'];
		$Num_asistentes = $_POST['Num_asistentes'];
		$Id_tipo_acto = $_POST['Id_tipo_acto'];

		//Se instancia el objeto
		$acto = new Acto();

		if ($acto->crear()) {
			$mensaje = "Acto creado correctamente";
			header("Location: acto.php");
			}
	}
?>
