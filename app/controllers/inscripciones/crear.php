<?php
    require_once __DIR__ . '/../../models/db.php';
    require_once __DIR__ . '/../../models/inscripciones.php';
	date_default_timezone_set('UTC');

	$db = db_connect();
	if(!$db) {
		die("Error al conectar con la base de datos");
	}
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		//Se instancia el objeto
		$inscripcion = new Inscripcion();
		//Se obtienen los valores
		$inscripcion->Id_persona = $_POST['Id_persona'];
		$inscripcion->Id_acto = $_POST['Id_acto'];
		$inscripcion->Fecha_inscripcion = date("Y-m-d H:i:s");
		
		if ($inscripcion->crear()) {
			header('Location: /views/admin_panel.php?page=inscripciones');
		} else {
			echo "Error al crear el inscripcion";
		}
	}
?>
