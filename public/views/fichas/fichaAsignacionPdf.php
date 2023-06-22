<?php
    require_once "../../../config/conexion.php";
    $idmov = $_GET['idmov'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Custom styles for this template-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/sb-admin-1.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/sb-admin.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/st-all.css">

    <title>Ficha de Movimiento</title>
</head>
<body>
    <h2>FICHA DE MOVIMIENTO</h2>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?php echo $idmov ?></th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
           
        </tbody>
    </table>

    
</body>
</html>