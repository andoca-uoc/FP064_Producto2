<?php

$con = new mysqli('mysql','user','password','database');

if($con)
{
    echo "Conectado!";
}

?>

