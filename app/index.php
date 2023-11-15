<?php
    require_once 'models/db.php';
    require 'controllers/loginController.php';

    $loginController = new LoginController();
    require 'views/login.php';

?>
