<?php
require_once __DIR__ . '/../../models/db.php';
require_once __DIR__ . '/../../models/Usuario.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $pdo = db_connect();
    if (!$pdo) {
        throw new InvalidArgumentException("No se puede conectar a la base de datos");
    }

    $usuario = new Usuario($pdo);
/* 	$usuario->Id_usuario = $_POST['id_usuario'];
 */    $usuario->Username = $_POST['usuario'];

    if ($usuario->actualizar()) {
        header('Location: /views/admin_panel.php');
    } else {
        echo "Error al actualizar el usuario";
    }
}
?>
