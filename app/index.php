<?php

require 'config/db.php';

require 'controllers/loginController.php';

$loginController = new LoginController($pdo);

require 'views/login.php';

?>
