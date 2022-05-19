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
                        'grempphp'=>$ver[4],
                        'gpoempphp'=>$ver[5],
                        'estaempphp'=>$ver[6]);
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
                        'nomCategoria'=>$dataCategoria[1]);
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
                        'serieEquipo'=>$dataEquipo[4],
                        'codEquipo'=>$dataEquipo[5],
                        'marcaEquipo'=>$dataEquipo[6],
                        'modeloEquipo'=>$dataEquipo[7],
                        'cantEquipo'=>$dataEquipo[8],
                        'estadoEquipo'=>$dataEquipo[9],
                        'fechaCaptura'=>$dataEquipo[10]);
    return $datos;
    }

    public function eliminarEquipos($idprod){
        require 'conexion.php';
        $sql = $con->query("DELETE FROM equipo WHERE id_equipo = '$idprod' ");
        return $sql;
    }


}
?>
