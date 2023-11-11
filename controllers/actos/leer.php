<?php
    include('../config/Basemysql.php');
    include('../models/actos.php');

    //Instancionamos la base de datos y conexión
    $baseDatos = new Basemysql();
    $db = $baseDatos->connect();

    //Instanciamos el objeto categoría
    $acto = new actos($db);

    $resultado = $actos->leer();

    //Contar filas
    $num = $resultado->rowCount();

    //Validamos si existe una categoría
    if($num > 0){
        //Array de categorías
        $acto_arr = array();
        $acto_arr['data'] = array();

        while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $acto_item = array(
                'id' => $Id_acto,
                'nombre' => $nombre
            );

            //Enviar datos
            array_push($categoria_arr['data'], $categoria_item);            
        }

        //Enviar en formato json
        echo json_encode($categoria_arr);

    }else{
        //No hay actos
        echo json_encode(array('message' => 'No hay categorías'));
    }