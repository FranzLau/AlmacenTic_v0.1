<?php

require '../../../config/conexion.php';

$tipoMov = $_POST['idtmov'];

if ($tipoMov == 'OUTPUT') {
    $valsql = $con->query("SELECT id_equipo,serie_equipo FROM equipo WHERE cantidad_equipo = '1' ");
    
    while ($row = $valsql->fetch_row()) {
        echo '<option value="'.$row[0].'">'.$row[1].'</option>';
    }

}else if ($tipoMov == 'INPUT') {
    $sql = $con->query("SELECT id_equipo,serie_equipo FROM equipo WHERE cantidad_equipo = '0' ");

    while ($input = $sql->fetch_row()) {
        echo '<option value="'.$input[0].'">'.$input[1].'</option>';
    }
}

?>