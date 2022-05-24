<?php
  session_start();
  require '../../config/conexion.php';
  if (isset($_SESSION['loginUser'])) {
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include('../include/head.php'); ?>
  </head>
  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column vh-100">

        <!-- Main Content -->
        <div id="content">

          <?php include("../include/navbar.php"); ?>

          <!-- Begin Page Content -->
          <div class="container">
            
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Almacén</li>
                <li class="breadcrumb-item"><a href="#">Equipos</a></li>
                <li class="breadcrumb-item"><a href="#">Movimientos</a></li>
              </ol>
            </nav>

            <div class="row">
              <div class="col-md-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                      <i class="fa-solid fa-clipboard-list mr-2 fa-sm"></i>Movimiento de Equipos
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                      <i class="fa-solid fa-arrow-turn-up mr-2 fa-sm"></i>Registrar Movimiento
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Content Row -->
            <div class="row">
              <div class="col-sm-12">
                <!-- Contenido total -->
                <div class="tab-content" id="pills-tabContent">
                  <!--*************************** primer PANEL -->
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <!-- TABLA movimientos -->
                    <div class="card shadow">
                      <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">
                          <i class="fa-solid fa-list mr-2 fa-sm"></i>Lista de Movimientos
                        </h6>
                      </div>
                      <div class="card-body">
                        <div id="tablaDevolver"></div>
                      </div>
                    </div>
                  </div>

                  <!--*************************** segundo PANEL -->
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card shadow">
                          <div class="card-header d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">
                              <i class="fas fa-list mr-2"></i>Nuevo Movimiento
                            </h6>
                            <div>
                              <button type="button" class="btn btn-sm btn-success" id="btnaddMov">
                                <i class="fa-solid fa-cart-plus fa-sm"></i>
                                Agregar
                              </button>
                              <button type="button" class="btn btn-sm btn-danger" id="btncleanMov">
                                <i class="fa-solid fa-trash fa-sm"></i>
                                Limpiar
                              </button>
                            </div>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-12">
                                <form id="formNuevoMovi">
                                  <!--*************************** primer INPUT -->
                                  <div class="form-row">
                                    <div class="form-group col-md-2">
                                      <label class="col-form-label col-form-label-sm" for="dateNewMove">Fecha :</label>
                                      <input type="date" class="form-control form-control-sm" id="dateNewMove" name="dateNewMove">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <div class="radio">
                                        <label class="col-form-label col-form-label-sm" for="dateNewMov">Tipo:</label><br>
                                        <div class="form-check form-check-inline mr-0">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                          <label class="form-check-label" for="inlineRadio1">Asignación</label>
                                        </div>
                                        <div class="form-check form-check-inline ml-0">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Devolución</label>
                                        </div>
                                      </div>
                                    </div>
                                    
                                  </div>

                                  <!--*************************** primer INPUT -->
                                  
                                  <!--*************************** primer INPUT -->
                                  <div class="form-row">
                                    <div class="form-group col-md-4">
                                      <label for="destiNewMove" class="col-form-label col-form-label-sm">Usuario:</label>
                                      <select class="form-control form-control-sm" id="destiNewMove" name="destiNewMove" style="width:100%">
                                        <option value="">Elije uno</option>
                                        <?php $ctg = $con->query("SELECT * FROM empleado");
                                            while ($row = $ctg->fetch_assoc()) {
                                              echo "<option value='".$row['id_empleado']."' ";
                                              echo ">";
                                              echo $row['nom_empleado'];
                                              echo " ";
                                              echo $row['ape_empleado'];
                                              echo "</option>";
                                            }
                                        ?>
                                      </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label for="equiNewMove" class="col-form-label col-form-label-sm">Equipo:</label>
                                      <select class="form-control form-control-sm" id="equiNewMove" name="equiNewMove" style="width:100%">
                                        <option value="">Elije serie</option>
                                        <!-- <?php //$ctg = $con->query("SELECT * FROM asignacion INNER JOIN equipo ON asignacion.id_equipo = equipo.id_equipo");
                                            //while ($row = $ctg->fetch_assoc()) {
                                              //echo "<option value='".$row['id_equipo']."' ";
                                              //echo ">";
                                              //echo $row['serie_equipo'];
                                              //echo "</option>";
                                            //}
                                        ?> -->
                                      </select>
                                    </div>
                                    <!--*************************** primer INPUT -->
                                    <div class="form-group col-md-5">
                                      <label for="obsNewMove" class="col-form-label col-form-label-sm">Observacion:</label>
                                      <input type="text" class="form-control form-control-sm" id="obsNewMove" name="obsNewMove">
                                    </div>
                                  </div>
                                  <!--*************************** primer INPUT -->
                                </form>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card shadow mt-3">
                          <div class="card-body">
                            <div id="tableMoveTemp"></div>
                          </div>
                        </div>
                      </div>
                    </div>  
                  
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div><!--<<<<<<<<<<<<<<<<< FIN DE CONTENIDO <<<<<<<<<<<<<<<<<-->

        <!-- Footer -->
        
        <!-- End of Footer -->

      </div>  <!--<<<<<<<<<<<<<< FIN DE CONTENT WRAPPER <<<<<<<<<<<<<<<-->

    </div><!--<<<<<<<<<<<<<<<<<<< FIN DE WRAPPER   <<<<<<<<<<<<<<<<<<<<<-->

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('../include/scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tablaDevolver').load('../componentes/tablaDevolver.php');
        $('#tableMoveTemp').load("../componentes/tableMovesTemp.php");
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function() {

        // para datos del Equipos
        $('#equiNewMove').change(function() {
            $.ajax({
              url: '../../public/procesos/producto/readProducto.php',
              type: 'POST',
              data: "idprod=" + $('#equiNewMove').val(),
              success:function(r){
                var datos = $.parseJSON(r);

                $('#marcNewMove').val(datos['ProdMarca']);
                $('#catgNewMove').val(datos['ProdCtg']);
              }
            })
          });

          // agregar equipo Movimiento Temp
          $('#btnaddMov').click(function() {
            vacios = validarFrmVacio('formNewMove');
            if(vacios > 0){
            	alertify.error("Debe llenar todos los campos!");
            	return false;
            }
            datos = $('#formNewMove').serialize();
            $.ajax({
              url: '../procesos/move/createMoveTemp.php',
              type: 'POST',
              data: datos,
              success:function(r){
                if (r==2) {
                  alertify.error('Ingrese un valor mayor');
                }else if(r==1){
                  alertify.error('Ingrese un valor menor');
                }else{
                  $('#TableAsigTempLoad').load("../componentes/tableAssignmentTemp.php");
                }
              }
            })
          });

      });
    </script>
  </body>
</html>
<?php
  }else{
    header('Location: ../../');
  }
?>
