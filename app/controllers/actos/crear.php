<?php
    require_once __DIR__ . '/../models/db.php';
    require_once __DIR__ . '/../models/actos.php';


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $db = db_connect();

        if (!$db) {
            die("Error al conectar con la base de datos");
        }


        $acto = new Acto($db);


        $acto->Fecha = $_POST['Fecha'] ?? null;
        $acto->Hora = $_POST['Hora'] ?? null;
        $acto->Titulo = $_POST['Titulo'] ?? null;
        $acto->Descripcion_corta = $_POST['Descripcion_corta'] ?? null;
        $acto->Descripcion_larga = $_POST['Descripcion_larga'] ?? null;
        $acto->Num_asistentes = $_POST['Num_asistentes'] ?? null;
        $acto->Id_tipo_acto = $_POST['Id_tipo_acto'] ?? null;


        if ($acto->crear()) {
            header("Location: /ruta/a/tu/vista/exito.php");
        } else {
            header("Location: /ruta/a/tu/vista/error.php");
        }
    } else {
        header("Location: /ruta/a/tu/formulario.php");
    }
?>
