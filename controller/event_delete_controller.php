<?php
//Recuperamos el ID candidato a modificar con el método GET
$id=$_GET['Id_acto'];

//Llamamos al model oe instanciamos el objeto
require_once(dirname(__FILE__).'/../modelo/event_model.php');
$events = new events_model();
//Llamamos al borrado
$delete=$events -> delete_event($Id_acto);
require_once(dirname(__FILE__).'/../view/event_delete_view.php');
?>