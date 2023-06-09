<?php
	require '../../../config/conexion.php';

	$nomGerenc = $_POST['nomNuevaGer'];

	$query = $con->query("SELECT nom_gerencia FROM gerencia WHERE nom_gerencia LIKE '". $nomGerenc ."' ");
	$geren = $query->num_rows;

	if ($geren === 1) {
		echo 0;
	}else{
		$res = $con->query("INSERT INTO gerencia (nom_gerencia) VALUES ('$nomGerenc')");
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}


$con->close();
?>