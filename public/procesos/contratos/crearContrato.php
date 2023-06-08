<?php
	session_start();
	require '../../../config/conexion.php';

	$nomContrato = $_POST['nomContrato'];
	$numPedido = $_POST['pedContrato'];
	$numContrato = $_POST['numContrato'];
	$fechaContrato = $_POST['fechaContrato'];
	$garContrato = $_POST['garContrato'];
	$provContrato = $_POST['provContrato'];
	$tipoContrato = $_POST['tipoContrato'];
	
	//$fechaCaptura = date('Y-m-d');

	$query = $con->query("SELECT num_pedido FROM contrato WHERE num_pedido LIKE '". $numPedido ."' ");
	$categ = $query->num_rows;
	if ($categ === 1) {
		echo 0;
	}else{
		$res = $con->query("INSERT INTO contrato (nom_contrato,num_pedido,num_contrato,fecha_contrato,garantia_contrato,prov_contrato,tipo_contrato) VALUES ('$nomContrato','$numPedido','$numContrato','$fechaContrato','$garContrato','$provContrato','$tipoContrato')");
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
?>
