<?php
	require '../../../config/conexion.php';
	$nomEmpReg = $_POST['nombreEmpleado'];
	$apeEmpReg = $_POST['apellidoEmpleado'];

	$carEmpReg = $_POST['cargoEmpleado'];
	$areaEmpReg = $_POST['areaEmpleado'];
	$grEmpReg = $_POST['gerenciaEmpleado'];
	$gpoEmpReg = $_POST['grupoEmpleado'];
	$estEmpReg = $_POST['estadoEmpleado'];
	

	$val = $con->query("SELECT nom_empleado FROM empleado WHERE nom_empleado LIKE '$nomEmpReg' ");
	$emple = $val->num_rows;

	if ($emple === 1 ) {
		$vale = $con->query("SELECT ape_empleado FROM empleado WHERE ape_empleado LIKE '$apeEmpReg' ");
		$emplea = $vale->num_rows;
		if ($emplea === 1) {
			echo 0;
		}else {
			$reg = $con->query("INSERT INTO empleado (nom_empleado,ape_empleado,cargo_empleado,area_empleado,gerencia_empleado,grupo_empleado,estado_empleado) VALUES ('$nomEmpReg','$apeEmpReg','$carEmpReg','$areaEmpReg','$grEmpReg','$gpoEmpReg','$estEmpReg')");
			if ($reg) {
				echo json_encode(array('error' => false));
			}else{
				echo json_encode(array('error' => true));
			}
		}
	}else{
		$reg = $con->query("INSERT INTO empleado (nom_empleado,ape_empleado,cargo_empleado,area_empleado,gerencia_empleado,grupo_empleado,estado_empleado) VALUES ('$nomEmpReg','$apeEmpReg','$carEmpReg','$areaEmpReg','$grEmpReg','$gpoEmpReg','$estEmpReg')");
		if ($reg) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
 ?>
