<?php
    require 'config/db.php';
    require 'controllers/loginController.php';

    $loginController = new LoginController();
    require 'views/login.php';

?>
