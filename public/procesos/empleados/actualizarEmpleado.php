<?php
	require '../../../config/conexion.php';

	$idEmpUpdate = $_POST['idEditarEmpleado'];
	$nomEmpUpdate = $_POST['nomEditarEmpleado'];
	$apeEmpUpdate = $_POST['apeEditarEmpleado'];
	$cargoEmpUpdate = $_POST['cargoEditarEmpleado'];
	$areaEmpUpdate = $_POST['areaEditarEmpleado'];
	$grEmpUpdate = $_POST['gerenciaEditarEmpleado'];
	$correoEmpUpdate = $_POST['correoEditarEmpleado'];
	$telEmpUpdate = $_POST['telEditarEmpleado'];
	$estaEmpUpdate = $_POST['estadoEditarEmpleado'];
	

	$upd = $con->query("UPDATE empleado SET nom_empleado='$nomEmpUpdate',
                    						ape_empleado='$apeEmpUpdate',
                    						cargo_empleado='$cargoEmpUpdate',
											area_empleado='$areaEmpUpdate',
											gerencia_empleado='$grEmpUpdate',
											email_empleado='$correoEmpUpdate',
											telefono_empleado='$telEmpUpdate',
											estado_empleado='$estaEmpUpdate'
									WHERE id_empleado= '$idEmpUpdate' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
 ?>
