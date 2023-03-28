<?php
    //se debe colocar 'admin' para base de datos home
    $con = new mysqli('localhost','root','admin','db_almacentic');
    if($con->connect_errno){
        echo "Error al conectarse con MySQL debiado al error " .$con->connect_errno;
        exit();
    }
?>
