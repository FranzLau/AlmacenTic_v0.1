<?php
/**
 *
 */
class data
{
    public function nomCategoria($idcateg){
		require 'conexion.php';
		$sql = $con->query("SELECT nom_categoria FROM categoria WHERE id_categoria = '$idcateg' ");
		$result = $sql->fetch_row();
		return $result[0];
	}

    public function nomContrato($idcontr){
		require 'conexion.php';
		$sql = $con->query("SELECT nom_contrato FROM contrato WHERE id_contrato = '$idcontr' ");
		$result = $sql->fetch_row();
		return $result[0];
	}

	public function nomCargo($idcargo){
		require 'conexion.php';
		$sql = $con->query("SELECT nom_cargo FROM cargo WHERE id_cargo = '$idcargo' ");
		$result = $sql->fetch_row();
		return $result[0];
	}

	public function nomArea($idarea){
		require 'conexion.php';
		$sql = $con->query("SELECT nom_area FROM area WHERE id_area = '$idarea' ");
		$result = $sql->fetch_row();
		return $result[0];
	}

	public function nomGerencia($idgeren){
		require 'conexion.php';
		$sql = $con->query("SELECT nom_gerencia FROM gerencia WHERE id_gerencia = '$idgeren' ");
		$result = $sql->fetch_row();
		return $result[0];
	}

	public function nomSede($idsede){
		require 'conexion.php';
		$sql = $con->query("SELECT nom_sede FROM sede WHERE id_sede = '$idsede' ");
		$result = $sql->fetch_row();
		return $result[0];
	}

	public function nomEmp($idemp){
		require 'conexion.php';
		$sql = $con->query("SELECT nom_emp,ape_emp FROM empleado WHERE id_emp = '$idemp' ");
		$result = $sql->fetch_row();
		return $result[0]." ".$result[1];
	}

}

?>