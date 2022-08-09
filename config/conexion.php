<?php

    $con = new mysqli('localhost','root','','db_almacentic');
    if($con->connect_errno){
        echo "Error al conectarse con MySQL debiado al error " .$con->connect_errno;
        exit();
    }
?>
