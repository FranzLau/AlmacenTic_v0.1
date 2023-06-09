<?php
	require '../../../config/conexion.php';
	require '../../../config/crud.php';

	$obj = new crud();
	echo $obj->eliminarDatoGeren($_POST['idgeren']);

 ?>