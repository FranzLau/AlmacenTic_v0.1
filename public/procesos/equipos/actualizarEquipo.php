<?php
	require '../../../config/conexion.php';

	$idEquipo =$_POST['idEditarEquipo'];
	$idCategoria = $_POST['categEditarEquipo'];
	$idContrato = $_POST['contratoEditarEquipo'];
	$nomEquipo = $_POST['descEditarEquipo'];
	$serieEquipo = $_POST['serieEditarEquipo'];
	$codEquipo = $_POST['codigoEditarEquipo'];
	$marcaEquipo = $_POST['marcaEditarEquipo'];
	$modeloEquipo = $_POST['modeloEditarEquipo'];
	$cantEquipo = $_POST['cantEditarEquipo'];
	$estadoEquipo = $_POST['estadoEditarEquipo'];

	$upd = $con->query("UPDATE equipo SET id_categoria='$idCategoria',
										id_contrato='$idContrato',
										nom_equipo='$nomEquipo',
										serie_equipo='$serieEquipo',
										codigo_equipo='$codEquipo',
										marca_equipo='$marcaEquipo',
										modelo_equipo='$modeloEquipo',
										cantidad_equipo='$cantEquipo',
										estado_equipo='$estadoEquipo'
									WHERE id_equipo= '$idEquipo' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
?>
