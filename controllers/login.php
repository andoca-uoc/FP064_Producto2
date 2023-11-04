<?php
    include_once 'config/db.php';

    session_start();

    if(isset($GET['cerrar_sesion'])){
        session_unset();

        session_destroy();
    }

    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: admin_dashboard.php');
            break;
            case 2:
                header('location: user_dashboard');
            break;
            /*
            case 3:
                header('location: speaker_dashboard'); 
            break;
            */

            default:
                echo "El id de usuario o contraseña son incorrectos.";            
        }

    if(isset($_POST['Id_usuario']) && isset($_POST['Password'])){
        $Username = $_POST['Id_usuario'];
        $Password = $_POST['Password'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT*FROM Usuarios WHERE Id_usuario = $Id_usuario');
        $query->exe($Id_usuario, $Password);

        $row = $query->fetch(PDO::FETCH_NUM);
        if($row == true){
            //Se valida rol
            $rol = $row[3];
            $_SESSION['rol'] = $rol;
    }else{
        echo "El id de usuario o contraseña son incorrectos.";
    }
    
?>