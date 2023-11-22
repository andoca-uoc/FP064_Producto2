<?php
require_once __DIR__ . '/../../models/inscripciones.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id_inscripcion'])) {
    $id = $_GET['id_inscripcion'];
    $inscripcion = new Inscripcion();
    if ($inscripcion->borrar($id)) {
        header('Location: /views/admin_panel.php?page=inscripciones');
        exit;
    } else {
        echo "Error al borrar la inscripción";
    }
}

?>