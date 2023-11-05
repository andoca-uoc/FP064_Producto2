<?php

//Se llama al modelo
require_once('model/event.php');

//Se instancia el objeto events
$event = new event();

//Se recuperan los actos
$eventlist=$event->get_event();

//Se llama a la vista
require('view/event.php');

?>