<?php
	session_start();
	require '../../../config/conexion.php';

	$nomContrato = $_POST['descripcionContrato'];
	$AdquiContrato = $_POST['adquisicionContrato'];
	$garaContrato = $_POST['garantiaContrato'];
	$provContrato = $_POST['proveedorContrato'];
	$fechaCaptura = date('Y-m-d');

	$query = $con->query("SELECT nom_contrato FROM contrato WHERE nom_contrato LIKE '". $nomContrato ."' ");
	$categ = $query->num_rows;
	if ($categ === 1) {
		echo 0;
	}else{
		$res = $con->query("INSERT INTO contrato (nom_contrato,adquiere_contrato,garantia_contrato,proveedor_contrato,fecha_captura) VALUES ('$nomContrato','$AdquiContrato','$garaContrato','$provContrato','$fechaCaptura')");
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
?>
