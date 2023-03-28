<?php
	require '../../../config/conexion.php';
	
	$idConEquipo = $_POST['contratoEquipo'];
	$tcodEquipo = $_POST['tcodEquipo'];
	$codEquipo = $_POST['codigoEquipo'];
	$invEquipo = $_POST['invEquipo'];

	$nomEquipo = $_POST['descEquipo'];
	$idCtgEquipo = $_POST['categoriaEquipo'];
	$serieEquipo = $_POST['serieEquipo'];
	$marcaEquipo = $_POST['marcaEquipo'];
	$modeloEquipo = $_POST['modeloEquipo'];

	$cantEquipo = $_POST['cantidadEquipo'];
	$condEquipo = $_POST['condiEquipo'];
	$estadoEquipo = $_POST['estadoEquipo'];
	$fechaCaptura = date('Y-m-d');

	$val = $con->query("SELECT serie_equipo FROM equipo WHERE serie_equipo LIKE '". $serieEquipo ."' ");
	$produ = $val->num_rows;

	if ($produ === 1) {
		echo 0;
	}else{

		$res = $con->query("INSERT INTO equipo (id_categoria,
												id_contrato,
												nom_equipo,
												tcod_equipo,
												cod_equipo,
												inv_equipo,
												serie_equipo,
												marca_equipo,
												modelo_equipo,
												cantidad_equipo,
												estado_equipo,
												condicion_equipo,
												fecha_captura)
										VALUES ('$idCtgEquipo',
												'$idConEquipo',
												'$nomEquipo',
												'$tcodEquipo',
												'$codEquipo',
												'$invEquipo',
												'$serieEquipo',
												'$marcaEquipo',
												'$modeloEquipo',
												'$cantEquipo',
												'$estadoEquipo',
												'$condEquipo',
												'$fechaCaptura')");
												
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}	
	}

$con->close();
?>
