<?php
require_once(__DIR__ . '/../../models/db.php');
require_once(__DIR__ . '/../../models/Usuario.php');


$db = db_connect();
$usuarios = [];

if (!$db) {
	die("Error al conectar con la base de datos");
}

$usuario = new Usuario($db);

// Solo nos devuelve un usuario, el de la sesión
$resultado = $usuario->findByUsername($_SESSION['user']);

 
	$usuarios[] = array(
		'Id_usuario' => $resultado['Id_usuario'],
		'Username' => $resultado['Username'],
		'Password' => $resultado['Password'],
		'Id_Persona' => $resultado['Id_Persona'],
		'Id_tipo_usuario' => $resultado['Id_tipo_usuario']
	);
	

