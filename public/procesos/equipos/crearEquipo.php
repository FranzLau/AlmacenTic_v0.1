<?php
	require '../../../config/conexion.php';
	
	$idCtgEquipo = $_POST['categoriaEquipo'];
	$idConEquipo = $_POST['contratoEquipo'];
	$nomEquipo = $_POST['descEquipo'];
	$serieEquipo = $_POST['serieEquipo'];
	$codEquipo = $_POST['codigoEquipo'];
	$marcaEquipo = $_POST['marcaEquipo'];
	$modeloEquipo = $_POST['modeloEquipo'];
	$cantEquipo = $_POST['cantidadEquipo'];
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
												serie_equipo,
												codigo_equipo,
												marca_equipo,
												modelo_equipo,
												cantidad_equipo,
												estado_equipo,
												fecha_captura)
										VALUES ('$idCtgEquipo',
												'$idConEquipo',
												'$nomEquipo',
												'$serieEquipo',
												'$codEquipo',
												'$marcaEquipo',
												'$modeloEquipo',
												'$cantEquipo',
												'$estadoEquipo',
												'$fechaCaptura')");
												
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}	
	}

$con->close();
?>
