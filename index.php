<?php
$con = new mysqli('mysql','user','password','database');
//require config.php
//require conexion autoloader.php

//ruta creación de acto para colocar encima de Router::dispatch
Router::add('GET','/view/event', function () {
    return (new event_controller())->add();
});

//ruta que envía formulario event_create
Router::add('POST','/view/event', function () {
    return (new event_controller())->save();
});

?>

