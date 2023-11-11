<?php

if ($_POST) {
    $Id_acto = $_POST['Id_acto'];
    $Fecha = $_POST['Fecha'];
    $Hora = $_POST['Hora'];
    $Titulo = $_POST['Titulo'];
    $Descripcion_corta = $_POST['Descripcion_corta'];
    $Descripcion_larga = $_POST['Descripcion_larga'];
    $Num_asistentes = $_POST['Num_asistentes'];
    $Id_tipo_acto = $_POST['Id_tipo_acto'];

    echo 'Hola, ' . $Titulo . ' eres ' . $Descripcion_larga;
} else {
    header('http://www.google.com');
}

?>
