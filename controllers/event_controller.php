<?php

//Se llama al modelo
require_once('models/event.php');

//Se instancia el objeto events
$event = new event();

//Se recuperan los actos
$eventlist=$event->get_event();

//Se llama a la vista
require('views/event_view.php');

?>