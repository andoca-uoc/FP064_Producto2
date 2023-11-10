<?php
if (!defined('DB_HOST')) define('DB_HOST', 'bbdd');
if (!defined('DB_USER')) define('DB_USER', 'user');
if (!defined('DB_PASSWORD')) define('DB_PASSWORD', 'root');
if (!defined('DB_NAME')) define('DB_NAME', 'eventos');

try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASSWORD
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {

    die("Error de conexión a la base de datos: " . $e->getMessage());
}

?>
