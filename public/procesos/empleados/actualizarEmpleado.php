<?php
	require '../../../config/conexion.php';

	$idEmpUpdate = $_POST['idEditarEmpleado'];
	$nomEmpUpdate = $_POST['nomEditarEmpleado'];
	$apeEmpUpdate = $_POST['apeEditarEmpleado'];
	$cargoEmpUpdate = $_POST['cargoEditarEmpleado'];
	$grEmpUpdate = $_POST['gerenciaEditarEmpleado'];
	$gpoEmpUpdate = $_POST['grupoEditarEmpleado'];
	$estaEmpUpdate = $_POST['estadoEditarEmpleado'];
	

	$upd = $con->query("UPDATE empleado SET nom_empleado='$nomEmpUpdate',
                    						ape_empleado='$apeEmpUpdate',
                    						cargo_empleado='$cargoEmpUpdate',
											gerencia_empleado='$grEmpUpdate',
											grupo_empleado='$gpoEmpUpdate',
											estado_empleado='$estaEmpUpdate'
									WHERE id_empleado= '$idEmpUpdate' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
 ?>
