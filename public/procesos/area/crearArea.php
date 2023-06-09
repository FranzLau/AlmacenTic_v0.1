<?php
	require '../../../config/conexion.php';

	$nomArea = $_POST['nomNewArea'];

	$query = $con->query("SELECT nom_area FROM area WHERE nom_area LIKE '". $nomArea ."' ");
	$areas = $query->num_rows;

	if ($areas === 1) {
		echo 0;
	}else{
		$res = $con->query("INSERT INTO area (nom_area) VALUES ('$nomArea')");
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}


$con->close();
?>