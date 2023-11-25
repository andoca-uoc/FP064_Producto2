<?php
require_once __DIR__ . '/../../models/inscripciones.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id_inscripcion'])) {
    $id = $_GET['id_inscripcion'];
    $inscripcion = new Inscripcion();
    if ($inscripcion->borrar($id)) {
        if (!isset($_SESSION['user']) || !isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'admin') {
            header('Location: /views/user_dashboard.php?page=inscripciones-usuario');
            exit;
        }
        header('Location: /views/admin_panel.php?page=inscripciones');
        exit;
    } else {
        echo "Error al borrar la inscripción";
    }
}
