<?php
    //Encabezados (HEADERS)
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../../config/Basemysql.php';
    include_once '../../models/ponentes.php';

    //Instancionamos la base de datos y conexión
    $baseDatos = new Basemysql();
    $db = $baseDatos->connect();

    //Instanciamos el objeto categoría
    $producto = new ponentes($db);

    $resultado = $producto->leer();

    //Contar filas
    $num = $resultado->rowCount();

    //Validamos si existe un producto
    if($num > 0){
        //Array de ponentes
        $producto_arr = array();
        /* $categoria_arr['data'] = array(); */

        while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $producto_item = array(
                'id' => $id,
                'titulo' => $titulo,
                'texto' => $texto,
                'categoria_id' => $categoria_id,
                'nombre_categoria' => $nombre_categoria
            );

            //Enviar datos
            array_push($producto_arr, $producto_item);            
        }

        //Enviar en formato json
        echo json_encode($producto_arr);

    }else{
        //No hay actos
        echo json_encode(array('message' => 'No hay ponentes'));
    }