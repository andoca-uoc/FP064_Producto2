<?php
require_once __DIR__ . '/../../models/tipo_actos.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id_tipo_acto'])) {
    $tipo_acto = new tipoActo();
    $tipo_acto->Id_tipo_acto = $_GET['id_tipo_acto']; 

    if ($tipo_acto->borrar()) {
        header('Location: /views/admin_panel.php?page=tipo_acto'); 
        exit;
    } else {
        echo "Error al borrar el tipo de acto";
    }
}


?>
