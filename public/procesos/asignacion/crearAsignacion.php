<?php
    session_start();
    require '../../../config/conexion.php';
	require '../../../config/crud.php';

    $obj = new crud();

    if(count($_SESSION['AsigEquipoTemp']) == 0){
        echo 0;
    }else {
        $result=$obj->crearAsignacion();
        unset($_SESSION['AsigEquipoTemp']);
        echo $result;
    }
?>