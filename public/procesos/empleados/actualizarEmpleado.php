<?php
	require '../../../config/conexion.php';

	$idEmpUpdate = $_POST['idEditarEmpleado'];

	$cargoEmpUpdate = $_POST['cargoEditarEmpleado'];
	$areaEmpUpdate = $_POST['areaEditarEmpleado'];
	$grEmpUpdate = $_POST['gerenciaEditarEmpleado'];

	$nomEmpUpdate = $_POST['nomEditarEmpleado'];
	$apeEmpUpdate = $_POST['apeEditarEmpleado'];
	
	$correoEmpUpdate = $_POST['correoEditarEmpleado'];
	$telEmpUpdate = $_POST['telEditarEmpleado'];
	$estaEmpUpdate = $_POST['estadoEditarEmpleado'];
	

	$upd = $con->query("UPDATE empleado SET id_cargo='$cargoEmpUpdate',
											id_area='$areaEmpUpdate',
											id_gerencia='$grEmpUpdate',
											nom_emp='$nomEmpUpdate',
                    						ape_emp='$apeEmpUpdate',
											email_emp='$correoEmpUpdate',
											telefono_emp='$telEmpUpdate',
											estado_emp='$estaEmpUpdate'
									WHERE id_emp = '$idEmpUpdate' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
 ?>
