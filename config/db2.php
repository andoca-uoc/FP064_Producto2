<?php
//conexión
$con=mysqli_connect("localhost",'root','','database')
or die("DB NOT CONNECTED");

if (isset($con)) {
    echo 'Rock n Roll!';
}else{
    echo 'No hay conexión';
}
?>