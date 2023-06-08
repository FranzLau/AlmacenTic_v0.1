<?php
	require '../../../config/conexion.php';
	$idContrato =$_POST['idEdContrato'];
	$edNomContrato = $_POST['nomEdContrato'];
	$edNumPedContrato = $_POST['pedEdContrato'];
	$edNumContrato = $_POST['numEdContrato'];
	$edFechContrato = $_POST['fechEdContrato'];
	$edGarContrato = $_POST['garEdContrato'];
	$edProvContrato = $_POST['provEdContrato'];
	$edTipoContrato = $_POST['tipEdContrato'];

	$upd = $con->query("UPDATE contrato SET nom_contrato='$edNomContrato',
											num_pedido = '$edNumPedContrato',
											num_contrato = '$edNumContrato',
											fecha_contrato = '$edFechContrato',
											garantia_contrato = '$edGarContrato',
											prov_contrato = '$edProvContrato',
											tipo_contrato = '$edTipoContrato'
										WHERE id_contrato= '$idContrato' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
?>
