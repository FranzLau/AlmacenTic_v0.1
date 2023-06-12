<?php
    session_start();
    $index=$_POST['ind'];
    unset($_SESSION['AsigEquipoTemp'][$index]);
    $datos=array_values($_SESSION['AsigEquipoTemp']);
    unset($_SESSION['AsigEquipoTemp']);
    $_SESSION['AsigEquipoTemp']=$datos;
?>