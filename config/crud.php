<?php
/**
 *
 */
class crud
{
    //------------------------------CRUD PARA EMPLEADO---------------------
    public function leerDatosEmpleado($idemp){
        require 'conexion.php';
        $sql = $con->query("SELECT * FROM empleado WHERE id_empleado = '$idemp' ");
        $ver = $sql->fetch_row();
        $datos = array('idempphp'=>$ver[0],
                        'nomempphp'=>$ver[1],
                        'apempphp'=>$ver[2],
                        'cargoempphp'=>$ver[3],
                        'areaempphp'=>$ver[4],
                        'grempphp'=>$ver[5],
                        'gpoempphp'=>$ver[6],
                        'estaempphp'=>$ver[7]);
        return $datos;
	}
    public function eliminarEmpleado($idemp){
		require 'conexion.php';
		$sql = $con->query("DELETE FROM empleado WHERE id_empleado = '$idemp' ");
		return $sql;
	}

    //------------------------ PARA CATEGORIAS CONTROL ------------------------------

    public function leerDatosCategoria($idcateg){
        require 'conexion.php';
        $sql = $con->query("SELECT * FROM categoria WHERE id_categoria = '$idcateg' ");
        $dataCategoria = $sql->fetch_row();
        $datos = array('idCategoria' => $dataCategoria[0],
                        'nomCategoria'=>$dataCategoria[1],
                        'descCategoria'=>$dataCategoria[2]);
        return $datos;
    }

    public function eliminarCategoria($idcateg){
        require 'conexion.php';
        $sql = $con->query("DELETE FROM categoria WHERE id_categoria = '$idcateg' ");
        return $sql;
    }

    //------------------------ PARA CONTRATOS CONTROL ------------------------------

    public function leerDatosContratos($idcontr){
        require 'conexion.php';
        $sql = $con->query("SELECT * FROM contrato WHERE id_contrato = '$idcontr' ");
        $dataContrato = $sql->fetch_row();
        $datos = array('idContrato' => $dataContrato[0],
                        'nomContrato'=>$dataContrato[1],
                        'adquiContrato'=>$dataContrato[2],
                        'garanContrato'=>$dataContrato[3],
                        'provContrato'=>$dataContrato[4]);
    return $datos;
    }

    public function eliminarContrato($idcontr){
        require 'conexion.php';
        $sql = $con->query("DELETE FROM contrato WHERE id_contrato = '$idcontr' ");
        return $sql;
    }

    //------------------------ PARA EQUIPOS CONTROL ------------------------------

    public function datosEquipos($idprod){
        require 'conexion.php';
        $sql = $con->query("SELECT * FROM equipo WHERE id_equipo = '$idprod' ");
        $dataEquipo = $sql->fetch_row();
        $datos = array('idEquipo' => $dataEquipo[0],
                        'idCategoria'=>$dataEquipo[1],
                        'idContrato'=>$dataEquipo[2],
                        'nomEquipo'=>$dataEquipo[3],
                        'tcodEquipo'=>$dataEquipo[4],
                        'codEquipo'=>$dataEquipo[5],
                        'invEquipo'=>$dataEquipo[6],
                        'serieEquipo'=>$dataEquipo[7],
                        'marcaEquipo'=>$dataEquipo[8],
                        'modeloEquipo'=>$dataEquipo[9],
                        'cantEquipo'=>$dataEquipo[10],
                        'estadoEquipo'=>$dataEquipo[11],
                        'condiEquipo'=>$dataEquipo[12],
                        'fechaCaptura'=>$dataEquipo[13]);
    return $datos;
    }

    public function eliminarEquipos($idprod){
        require 'conexion.php';
        $sql = $con->query("DELETE FROM equipo WHERE id_equipo = '$idprod' ");
        return $sql;
    }

    //------------------------ PARA SEDES CONTROL ------------------------------
    public function leerDatosSede($idsede){
        require 'conexion.php';
        $sql = $con->query("SELECT * FROM sede WHERE id_sede = '$idsede' ");
        $dataSede = $sql->fetch_row();
        $datos = array('idSede' => $dataSede[0],
                        'nomSede' => $dataSede[1],
                        'direccionSede' => $dataSede[2],
                        'ciudadSede'=>$dataSede[3]);
        return $datos;
    }
    public function eliminarDatosSede($idsede){
        require 'conexion.php';
        $sql = $con->query("DELETE FROM sede WHERE id_sede = '$idsede' ");
        return $sql;
    }


}
?>
