<?php
	require '../../../config/conexion.php';
	$id_geren =$_POST['idEdGerenc'];
	$nom_geren = $_POST['nomEdGerenc'];

	$upd = $con->query("UPDATE gerencia SET nom_gerencia ='$nom_geren'
                                    WHERE id_gerencia = '$id_geren' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
?>