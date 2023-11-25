<?php
if (isset($_POST['dateInput'])) { 
    return;
}

require_once __DIR__ . '/../../models/db.php';
require_once __DIR__ . '/../../models/Usuario.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $pdo = db_connect();
    if (!$pdo) {
        throw new InvalidArgumentException("No se puede conectar a la base de datos");
    }

    switch($_POST) {
        case isset($_POST['Id_usuario']):
            print_r('Id_usuario no existe');
            break;
        case isset($_POST['Usuario']):
            print_r('Usuario no existe');
            break;
        case isset($_POST['Password']):
            print_r('Password no existe');
            break;
        case isset($_POST['Id_tipo_usuario']):
            print_r('Id_tipo_usuario no existe');
            break;
        case isset($_POST['Id_Persona']):
            print_r('Id_Persona no existe');
            break;
    }

    $usuario = new Usuario($pdo);
	$usuario->Id_usuario = $_POST['Id_usuario'];
    $usuario->Username = $_POST['Usuario'];
    $usuario->Password = $_POST['Password'];
	$usuario->Id_tipo_usuario = $_POST['Id_tipo_usuario'];
	$usuario->Id_Persona = $_POST['Id_Persona'];

    if ($usuario->actualizar()) {
        header('Location: /views/admin_panel.php');
    } else {
        echo "Error al actualizar el usuario";
    }
}
?>


