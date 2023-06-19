<?php

class asignacion 
{
    public function crearAsignacion(){
        require 'conexion.php';
    }

    public function creaFolio(){
        
        $c= new conectar();
        $conexion=$c->conexion();

        $sql="SELECT id_venta FROM ventas GROUP BY id_venta DESC";

        $result=mysqli_query($conexion,$sql);
        $id=mysqli_fetch_row($result)[0];

        if ($id=="" or $id==null or $id==0){
            return 1;
        }else{
            return $id + 1;
        }
    }
}

?>