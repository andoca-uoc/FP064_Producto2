<?php
session_start();
require_once __DIR__ . '/../../models/db.php';

require_once __DIR__ . '/../../models/Ponente.php';

class RegisterPonenteController {
	private $ponenteModel;

	public function __construct() {
		$pdo = db_connect();
		if (!$pdo) {
			throw new InvalidArgumentException("No se puede conectar a la base de datos");
		}
		$this->ponenteModel = new Ponente($pdo);
	}

	public function register($username, $password, $nombre, $apellido1, $apellido2) {
		$usernameReturned = $this->ponenteModel->crear($username, $password, $nombre, $apellido1, $apellido2);

		if ($usernameReturned === $username) {
			header('Location: /views/_ponente_panel.php');
			exit;
		} else {
			header('Location: /views/register.php?error=registro_fallido');
			exit;
		}
	}

}

$controller = new RegisterPonenteController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = $_POST['Username'] ?? '';
	$password = $_POST['Password'] ?? '';
	$nombre = $_POST['Nombre'] ?? '';
	$apellido1 = $_POST['Apellido1'] ?? '';
	$apellido2 = $_POST['Apellido2'] ?? '';

	$controller->register($username, $password, $nombre, $apellido1, $apellido2);
}
?>

