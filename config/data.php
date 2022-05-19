<?php
/**
 *
 */
class data
{
    public function nomCategoria($idcateg){
		require 'conexion.php';
		$sql = $con->query("SELECT nom_categoria FROM categoria WHERE id_categoria = '$idcateg' ");
		$result = $sql->fetch_row();
		return $result[0];
	}

    public function nomContrato($idcontr){
		require 'conexion.php';
		$sql = $con->query("SELECT nom_contrato FROM contrato WHERE id_contrato = '$idcontr' ");
		$result = $sql->fetch_row();
		return $result[0];
	}


}

?>