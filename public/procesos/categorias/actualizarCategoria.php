<?php
	require '../../../config/conexion.php';
	$idCategoria =$_POST['idEditarCategoria'];
	$nomCategoriaActual = $_POST['nomEditarCategoria'];

	$upd = $con->query("UPDATE categoria SET nom_categoria='$nomCategoriaActual' WHERE id_categoria= '$idCategoria' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
?>
