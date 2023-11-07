<?php
//Información enviada por el formulario
$Id_acto=$POST['Id-acto'];
$Fecha=$POST['Fecha'];
$Hora=$POST['Hora'];
$Titulo=$POST['Titulo'];
$Descripcion_corta=$POST['Descripcion_corta'];
$Descripcion_larga=$POST['Descripcion_larga'];
$Num_asistentes=$POST['Num_asistentes'];
$Id_tipo_acto=$POST['Id_tipo_acto'];

//Llamamos al modelo e instanciamos el objeto
require_once(dirname(__FILE__).'/../modelo/event_create_model.php');
$events = new events_model();

//Llamamos a insertar
$events -> create_event($Id_acto,$Fecha,$Hora,$Titulo,$Descripcion_corta,$Descripcion_larga,$Num_asistente,$Id_tipo_acto);
header('Location: ../index.php');

?>
