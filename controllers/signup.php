<?php
//Información enviada por el formulario
$Usuarios=$_POST["Usuarios"];
$Personas=$_POST["Personas"];
//Se llama al modelo y se instancia el objeto
require_once(dirname(__FILE__) ."/../models/signup_model.php");
$signup = new signup_model();
//Se llama a registrar_usuario
$signup -> registrar_usuario($Usuarios,$Personas);
header('Location: --/signup_view.php');

?>