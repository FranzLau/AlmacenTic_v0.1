<?php
	require '../../../config/conexion.php';
	$nomCategoria = $_POST['nomCateg'];
	$fechaCaptura = date('Y-m-d');

	$query = $con->query("SELECT nom_categoria FROM categoria WHERE nom_categoria LIKE '". $nomCategoria ."' ");
	$categ = $query->num_rows;

	if ($categ === 1) {
		echo 0;
	}else{
		$res = $con->query("INSERT INTO categoria (nom_categoria,fecha_captura) VALUES ('$nomCategoria','$fechaCaptura')");
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}


$con->close();
?>
