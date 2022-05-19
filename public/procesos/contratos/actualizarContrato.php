<?php
	require '../../../config/conexion.php';
	$idContrato =$_POST['idEditarContrato'];
	$nuevoNomContrato = $_POST['nomEditarContrato'];
	$nuevoAdquiContrato = $_POST['adquiEditarContrato'];
	$nuevoGaranContrato = $_POST['garaEditarContrato'];
	$nuevoProveContrato = $_POST['provEditarContrato'];

	$upd = $con->query("UPDATE contrato SET nom_contrato='$nuevoNomContrato',
											adquiere_contrato = '$nuevoAdquiContrato',
											garantia_contrato = '$nuevoGaranContrato',
											proveedor_contrato = '$nuevoProveContrato'
										WHERE id_contrato= '$idContrato' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
?>
