<?php
	require '../../../config/conexion.php';

	$idEquipo =$_POST['idEditarEquipo'];

	$idCategoria = $_POST['categEditarEquipo'];
	$idContrato = $_POST['contratoEditarEquipo'];
	$nomEquipo = $_POST['descEditarEquipo'];

	$tcodEquipo = $_POST['tcodEditarEquipo'];
	$codEquipo = $_POST['codEditarEquipo'];
	$invEquipo = $_POST['invEditarEquipo'];

	$serieEquipo = $_POST['serieEditarEquipo'];
	$marcaEquipo = $_POST['marcaEditarEquipo'];
	$modeloEquipo = $_POST['modeloEditarEquipo'];
	$cantEquipo = $_POST['cantEditarEquipo'];

	$estadoEquipo = $_POST['estEditarEquipo'];
	$condiEquipo = $_POST['condiEditarEquipo'];

	$upd = $con->query("UPDATE equipo SET id_categoria='$idCategoria',
										id_contrato='$idContrato',
										nom_equipo='$nomEquipo',
										tcod_equipo='$tcodEquipo',
										cod_equipo='$codEquipo',
										inv_equipo='$invEquipo',
										serie_equipo='$serieEquipo',
										marca_equipo='$marcaEquipo',
										modelo_equipo='$modeloEquipo',
										cantidad_equipo='$cantEquipo',
										estado_equipo='$estadoEquipo',
										condicion_equipo='$condiEquipo'
									WHERE id_equipo= '$idEquipo' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
?>
