<?php

//Se llama al modelo
require_once('model/actos_model.php');

//Se instancia el objeto events
$actos = new actos_model();

//Se recuperan los actos
$listactos=$actos->get_actos();

//Se llama a la vista
require('/view/event.php');

?>
