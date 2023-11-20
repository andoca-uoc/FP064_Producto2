<?php
session_start();

require_once __DIR__ . '/../models/db.php';
require_once __DIR__ . '/../models/Usuario.php';

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header('Location: /../views/login.php');
    exit;
}

class LoginController
{
    private $usuarioModel;
    public $loginError = '';

    public function __construct()
    {
        $pdo = db_connect();
        if (!$pdo) {
            throw new InvalidArgumentException("No se puede conectar a la base de datos");
        }
        $this->usuarioModel = new Usuario($pdo);
    }

    public function login($username, $password)
    {
        $user = $this->usuarioModel->findByUsername($username);

        if ($user && $this->usuarioModel->verifyPassword($username, $password)) {
            $_SESSION['user'] = $username;
            $_SESSION['user_type'] = $this->usuarioModel->getUserType($username);

            if ($_SESSION['user_type'] == 'Admin') {
                header('Location: /../views/admin_panel.php');
                exit;
            } else {
                header('Location: /../views/user_dashboard.php');
                exit;
            }
        } else {
            $_SESSION['login_error'] = 'Usuario o contraseña incorrecta.';
            header('Location: /../index.php');
            exit;
        }
    }
}

$controller = new LoginController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['usuario'] ?? '';
    $password = $_POST['contrasena'] ?? '';
    $controller->login($username, $password);
}
