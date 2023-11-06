<?php

//Se llama al modelo
//require_once('model/event.php');

//Se instancia el objeto events
//$event = new event();

//Se recuperan los actos
//$eventlist=$event->get_event();

//Se llama a la vista
//require('view/event.php');

public function add() : void {
    $this->view->render("event");
}



//metodo save()
public function save() : void {
    $event = $_POST['data'];
    $event['Actos'];
    $this->service->save($event);
    header('Location: /view/event.php');
}
?>