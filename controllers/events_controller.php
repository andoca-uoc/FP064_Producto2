<?php

//Se llama al modelo
require_once('models/events_model.php');

//Se instancia el objeto events
$events = new events_model();

//Se recuperan los actos
$eventslist=$events->get_events();

//Se llama a la vista
require('views/create_event_view.php');

?>