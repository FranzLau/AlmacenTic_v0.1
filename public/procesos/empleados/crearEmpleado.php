<?php
	require '../../../config/conexion.php';
	
	$carEmpReg = $_POST['cargoEmpleado'];
	$areaEmpReg = $_POST['areaEmpleado'];
	$grEmpReg = $_POST['gerenciaEmpleado'];
	
	$nomEmpReg = $_POST['nombreEmpleado'];
	$apeEmpReg = $_POST['apellidoEmpleado'];
	
	$correoEmpReg = $_POST['correoEmpleado'];
	$telEmpReg = $_POST['telEmpleado'];
	$estEmpReg = $_POST['estadoEmpleado'];
	

	$val = $con->query("SELECT nom_emp FROM empleado WHERE nom_emp LIKE '$nomEmpReg' ");
	$emple = $val->num_rows;

	if ($emple === 1 ) {
		$vale = $con->query("SELECT ape_emp FROM empleado WHERE ape_emp LIKE '$apeEmpReg' ");
		$emplea = $vale->num_rows;
		if ($emplea === 1) {
			echo 0;
		}else {
			$reg = $con->query("INSERT INTO empleado (id_cargo,id_area,id_gerencia,nom_emp,ape_emp,email_emp,telefono_emp,estado_emp) VALUES ('$carEmpReg','$areaEmpReg','$grEmpReg','$nomEmpReg','$apeEmpReg','$correoEmpReg','$telEmpReg','$estEmpReg')");
			if ($reg) {
				echo json_encode(array('error' => false));
			}else{
				echo json_encode(array('error' => true));
			}
		}
	}else{
		$reg = $con->query("INSERT INTO empleado (id_cargo,id_area,id_gerencia,nom_emp,ape_emp,email_emp,telefono_emp,estado_emp) VALUES ('$carEmpReg','$areaEmpReg','$grEmpReg','$nomEmpReg','$apeEmpReg','$correoEmpReg','$telEmpReg','$estEmpReg')");
		if ($reg) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
 ?>
