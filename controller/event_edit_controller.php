<?php
//Recuperamos el ID candidato a modificar con el método GET
$Id_acto=$_GET['Id_acto'];

//Llamamos al modelo e instanciamos el objeto
require_once(dirname(__FILE__).'/../model/event_model');
$events = new events_model();

//Solicitamos el acto en concreto
$event=$events->get_event($Id_acto);
require_once(dirname(__FILE__).'/../view/event_edit_view');
?>