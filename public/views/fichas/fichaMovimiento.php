<?php
ob_start();
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 </head>
 <body>

 <?php
   require '../../../config/conexion.php';
   require '../../../config/data.php';

   //$idmov = $_GET['idmov'];
   //<link href="../../../assets/css/sb-admin-1.css" rel="stylesheet">

   $obj = new data();

   $sql = $con->query("SELECT mov.id_mov,mov.id_usuario,mov.id_emp,mov.id_sede,mov.fecha_mov,mov.cantidad_equipo,mov.tipo_mov,mov.detalles_mov,mov.grupo_mov,eq.tcod_equipo,eq.cod_equipo,eq.nom_equipo,eq.serie_equipo,eq.marca_equipo FROM movimiento AS mov INNER JOIN equipo AS eq ON mov.id_mov=eq.id_equipo AND mov.id_mov='2'");

   $ver = $sql->fetch_row();

   $fecha=$ver[4];
   $idemp=$ver[2];
   $idsede=$ver[3];
   $iduser=$ver[1];
   $tipomov=$ver[6];
   $detallemov=$ver[7];
   $grupomov=$ver[8];
 ?>
    <div>
        <div class="row">
            <div class="col-6">
                <p class="mb-0">Electrosur S.A.</p>
                <p style="font-size: .7em;">Sub Gerencia de Tecnologia de la Informacion y Comunicaciones</p>
            </div>
            <div class="col-6">
                <div class="text-right">
                    <h6 style="font-size: .9em;">FORMATO Nro. 002</h6>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12">
                <div class="text-center">
                    <h6 class="font-weight-bold" style="font-size: .9em;">MOVILIZACION DE EQUIPOS DE COMPUTO/RADIOCOMUNICACIONES</h6>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12">
                <h6>FECHA: <?php echo $fecha ?></h6>
                <div class="card" style="font-size: .7em;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8">
                                <p>RESPONSABLE: <?php echo $obj->nomEmp($idemp); ?></p>
                                <p>OPERADOR: <?php echo $grupomov ?></p>
                                <p>SEDE: <?php echo $obj->nomSede($idsede); ?></p>
                                <p>DETALLE: <?php echo $detallemov ?></p>
                            </div>
                            <div class="col-sm-4">
                                <p>AGENTE: <?php echo $obj->nomUsuario($iduser); ?></p>
                                <p>TIPO: <?php echo $tipomov ?></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-sm-12">
                <h6>COMPONENTES:</h6>
                <table class="table table-bordered" style="font-size: .7em;">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Cod. Activo</th>
                            <th scope="col">Cant.</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Serie</th>
                            <th scope="col">Etiqueta</th>
                        </tr>
                    </thead>
                    <?php
                        $sql = $con->query("SELECT mov.id_mov,mov.id_usuario,mov.id_emp,mov.id_sede,mov.fecha_mov,mov.cantidad_equipo,mov.tipo_mov,mov.detalles_mov,mov.grupo_mov,mov.etiqueta_mov,eq.tcod_equipo,eq.cod_equipo,eq.nom_equipo,eq.serie_equipo,eq.marca_equipo FROM movimiento AS mov INNER JOIN equipo AS eq ON mov.id_mov=eq.id_equipo AND mov.id_mov='2'");
                        while ($mostrar = $sql->fetch_row()):
                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $mostrar[10] ?> <?php echo $mostrar[11] ?></th>
                                <td><?php echo $mostrar[5] ?></td>
                                <td><?php echo $mostrar[12] ?></td>
                                <td><?php echo $mostrar[14] ?></td>
                                <td><?php echo $mostrar[13] ?></td>
                                <td><?php echo $mostrar[9] ?></td>
                            </tr>
                        </tbody>
                    <?php
                        endwhile;
                    ?>
                </table>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-sm-3 text-center pt-4">
                <div class="mt-5"></div>
                <hr>
                <p>V B S.G. Tecnologia de Informacion y Comunicaciones</p>
            </div>
            <div class="col-sm-3 text-center pt-4">
                <div class="mt-5"></div>
                <hr>
                <p>Soporte Tecnico</p>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <p>Entregue Conforme:</p>
                        <p class="mt-5">Nombre:</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <p>Recibi Conforme:</p>
                        <p class="mt-5">Nombre:</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
 </body>
 </html>
<?php
$html=ob_get_clean();
//echo $html;

require_once '../../../assets/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

// Instanciamos un objeto de la clase DOMPDF.
$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

// Cargamos el contenido HTML.
$dompdf->loadHtml($html);

// Definimos el tamaño y orientación del papel que queremos.

$dompdf->setPaper("letter");
//$dompdf->set_paper(array(0,0,104,250));
 
// Renderizamos el documento PDF.
$dompdf->render();
 
// Enviamos el fichero PDF al navegador.
$dompdf->stream("FichaMovimiento.pdf", array("Attachment" => false));


?>