<?php
  require_once(__DIR__ . '/../../models/db.php');
  require_once(__DIR__ . '/../../models/actos.php');


    $db = db_connect();
	$actos = [];
	
    if (!$db) {
        die("Error al conectar con la base de datos");
    }

    $acto = new Acto();

    $resultados = $acto->leer();

    if(count($resultados)> 0){
    	foreach($resultados as $resultado){
    		$actos[] = array(
    			'id' => $resultado['Id_acto'],
    			'date' => date('d-m-Y', strtotime($resultado['Fecha'])),
    			'time' => date('H:i', strtotime($resultado['Hora'])),
    			'title' => $resultado['Titulo'],
    			'description1' => $resultado['Descripcion_corta'],
    			'description2' => $resultado['Descripcion_larga'],
    			'audience' =>  $resultado['Num_asistentes'],
    			'id_type' => $resultado['Id_tipo_acto']
    		);
    	}
    }

?>
