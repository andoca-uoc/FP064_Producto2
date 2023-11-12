<?php
require_once __DIR__ . '/../../models/actos.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id_acto = $_GET['id'];
    $acto = new Acto();
    if ($acto->borrar($id_acto)) {
        header('Location: /views/acto.php');
        exit;
    } else {
        echo "Error al borrar el acto";
    }
}

?>
