<?php
session_start();
require "models/login.php";
class LoginController{
    public function index(){
        if(isset($_SESSION["login"]))
            header('location:'.urlsite);
        require "view/login.php";
    }
    public function login(){
        $_models = new Login();
        $_Id_usuario = trim($_POST["txtidusuario"]);
        $_Password = md5(trim($_POST["txtpassword"]));
        //invocamos método login
        $_result = $_Models->login($_Id_usuario, $_Password);
        if($_result){
            $_SESSION["login"] = $_Id_usuario;
            header('location:'.urlsite);
        }else{
            header('location:'.urlsite."?msg=No son correctas las credenciales");
        }