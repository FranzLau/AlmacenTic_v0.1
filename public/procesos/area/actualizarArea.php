<?php
	require '../../../config/conexion.php';
	$id_are =$_POST['idEdArea'];
	$nom_are = $_POST['nomEdArea'];

	$upd = $con->query("UPDATE area SET nom_area='$nom_are'
                                    WHERE id_area = '$id_are' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
?>