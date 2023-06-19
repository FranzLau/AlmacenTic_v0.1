<?php
/**
 *
 */
class crud
{
    //------------------------------CRUD PARA EMPLEADO---------------------
    public function leerDatosEmpleado($idemp){
        require 'conexion.php';
        $sql = $con->query("SELECT * FROM empleado WHERE id_emp = '$idemp' ");
        $ver = $sql->fetch_row();
        $datos = array('idempphp'=>$ver[0],
                        'cargoempphp'=>$ver[1],
                        'areaempphp'=>$ver[2],
                        'grempphp'=>$ver[3],
                        'nomempphp'=>$ver[4],
                        'apempphp'=>$ver[5],
                        'emailempphp'=>$ver[6],
                        'telempphp'=>$ver[7],
                        'estaempphp'=>$ver[8]);
        return $datos;
	}
    public function eliminarEmpleado($idemp){
		require 'conexion.php';
		$sql = $con->query("DELETE FROM empleado WHERE id_emp = '$idemp' ");
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
                        'numPedido'=>$dataContrato[2],
                        'numContrato'=>$dataContrato[3],
                        'fechaContrato'=>$dataContrato[4],
                        'garanContrato'=>$dataContrato[5],
                        'provContrato'=>$dataContrato[6],
                        'tipoContrato'=>$dataContrato[7]);
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

    //------------------------ PARA CARGOS CONTROL ------------------------------
    public function leerDatosCargo($idcarg){
        require 'conexion.php';
        $sql = $con->query("SELECT * FROM cargo WHERE id_cargo = '$idcarg' ");
        $dataCargo = $sql->fetch_row();
        $datos = array('idCargo' => $dataCargo[0],
                        'nomCargo'=>$dataCargo[1]);
        return $datos;
    }
    public function eliminarDatoCargo($idcarg){
        require 'conexion.php';
        $sql = $con->query("DELETE FROM cargo WHERE id_cargo = '$idcarg' ");
        return $sql;
    }

    //------------------------ PARA AREA CONTROL ------------------------------
    public function leerDatosArea($idarea){
        require 'conexion.php';
        $sql = $con->query("SELECT * FROM area WHERE id_area = '$idarea' ");
        $dataArea = $sql->fetch_row();
        $datos = array('idArea' => $dataArea[0],
                        'nomArea'=>$dataArea[1]);
        return $datos;
    }
    public function eliminarDatoArea($idarea){
        require 'conexion.php';
        $sql = $con->query("DELETE FROM area WHERE id_area = '$idarea' ");
        return $sql;
    }

    //------------------------ PARA GERENCIA CONTROL ------------------------------
    public function leerDatosGeren($idgeren){
        require 'conexion.php';
        $sql = $con->query("SELECT * FROM gerencia WHERE id_gerencia = '$idgeren' ");
        $dataGeren = $sql->fetch_row();
        $datos = array('idGeren' => $dataGeren[0],
                        'nomGeren'=>$dataGeren[1]);
        return $datos;
    }
    public function eliminarDatoGeren($idgeren){
        require 'conexion.php';
        $sql = $con->query("DELETE FROM gerencia WHERE id_gerencia = '$idgeren' ");
        return $sql;
    }

    //------------------------ PARA asignacion 2023 ------------------------------
    public function crearAsignacion(){
        require 'conexion.php';

        $fecha = date('Y-m-d');
        $datos = $_SESSION['AsigEquipoTemp'];
        $iduser = $_SESSION['loginUser']['id_usuario'];
        $tmov = "SALIDA";
        $r=0;

        for ($i=0; $i<count($datos); $i++){
            $d=explode("||", $datos[$i]);

            $inserta1 = $con->query("INSERT INTO movimiento (   id_usuario,
                                                                id_emp,
                                                                id_sede,
                                                                fecha_mov,
                                                                tipo_mov,
                                                                detalles_mov,
                                                                grupo_mov) 
                                                    VALUES ('$iduser',
                                                            '$d[1]',
                                                            '$d[3]',
                                                            '$fecha',
                                                            '$tmov',
                                                            '$d[5]',
                                                            '$d[4]')");
            if ($inserta1 == true) {
                $ultimo_idmovi=mysqli_insert_id($con);
                $bandera="YES";
                $inserta2 = $con->query("INSERT INTO detallemovimiento (id_mov,
                                                                        id_equipo,
                                                                        cantidad_equipo,
                                                                        bandera_dmov,
                                                                        sticker_dmov) 
                                                                VALUES ('$ultimo_idmovi',
                                                                        '$d[6]',
                                                                        '$d[8]',
                                                                        '$bandera',
                                                                        '$d[9]')");
            };
            $r = $r + $inserta1;
			self::actualizarStock($d[6],$d[8]);
            self::actualizarEstado($d[6]);
        }
    }

    public function actualizarStock($ideq,$cant){
        require 'conexion.php';
        $sql = $con->query("SELECT cantidad_equipo FROM equipo WHERE id_equipo='$ideq' ");
        $result = $sql->fetch_row();
        $stockProd = $result[0];
        //Actualizar
        $newStock = abs($stockProd - $cant);
        $sql = $con->query("UPDATE equipo SET cantidad_equipo='$newStock' WHERE id_equipo='$ideq' ");
    }

    public function actualizarEstado($ideq){
        require 'conexion.php';
        $sql = $con->query("SELECT estado_equipo FROM equipo WHERE id_equipo='$ideq' ");
        $result = $sql->fetch_row();
        $estadoEq = $result[0];
        //Actualizar
        $newEstadoEq = "ND";
        $sql = $con->query("UPDATE equipo SET estado_equipo='$newEstadoEq' WHERE id_equipo='$ideq' ");
    }

}
?>
