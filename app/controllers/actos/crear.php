<?php
    include('config/Basemysql.php');
    include('models/actos.php');
    require_once('models/db.php')


    //Instancionamos la base de datos y conexión
    $db = db_connect();


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //Obtener los valores
        $Id_acto = $_POST['Id_acto'];
        $Fecha = $_POST['Fecha'];
        $Hora = $_POST['Hora'];
        $Titulo = $_POST['Titulo'];
        $Descripcion_corta = $_POST['Descripcion_corta'];
        $Descripcion_larga = $_POST['Descripcion_larga'];
        $Num_asistentes = $_POST['Num_asistentes'];
        $Id_tipo_acto = $_POST['Id_tipo_acto'];

        //Instanciamos el acto
        $acto = new acto($db);


        $acto->crear($Id_acto, $Fecha, $Hora, $Titulo, $Descripcion_corta, $Descripcion_larga, $Num_asistentes, $Id_tipo_acto);
        /*$mensaje = "Acto creado";
        header("Location: ../../views/acto.php");*/


    }

?>

