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

      <?php include("../include/sidebar.php"); ?>

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <?php include("../include/topbar.php"); ?>

          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row mt-5">
              <div class="col-6 text-left">
                <h1 class="h3 mb-0 text-gray-800">Movimiento de Equipos</h1>
              </div>
              <div class="col-6">
                <ul class="nav nav-pills nav-pills-primary justify-content-end" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fas fa-list mr-2 fa-sm"></i>Lista de Movimientos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fas fa-plus mr-2 fa-sm"></i>Agregar Movimiento</a>
                  </li>
                </ul>
              </div>
            </div> 

            <!-- Content Row -->
            <div class="row mt-4">
              <div class="col-sm-12">
                <!-- Contenido total -->
                <div class="tab-content" id="pills-tabContent">
                  <!--*************************** primer PANEL -->
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <!-- TABLA movimientos -->
                    <div class="card shadow">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-list mr-2"></i>Lista de Movimientos de Equipos</h6>
                        
                      </div>
                      <div class="card-body">
                        <div id="tableMoves"></div>
                      </div>
                    </div>
                  </div>

                  <!--*************************** segundo PANEL -->
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="card shadow">
                          <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-list mr-2"></i>Registra nuevo Movimiento</h6>
                          </div>
                          <div class="card-body">
                            <!--*************************** INICIO DE FORMULARIO -->
                            <form id="formNewMove">
                              <!--*************************** primer INPUT -->
                              <div class="form-group">
                                <label class="col-form-label col-form-label-sm" for="dateNewMove">Fecha :</label>
                                <input type="date" class="form-control form-control-sm" id="dateNewMove" name="dateNewMove">
                              </div>
                              <!--*************************** primer INPUT -->
                              <div class="form-group">
                                <label for="origNewMove" class="col-form-label col-form-label-sm">Origen :</label>
                                <select class="form-control form-control-sm" id="origNewMove" name="origNewMove" style="width:100%">
                                  <option value="">Elije uno</option>
                                  <?php $ctg = $con->query("SELECT * FROM empleados");
                                      while ($row = $ctg->fetch_assoc()) {
                                        echo "<option value='".$row['id_empleado']."' ";
                                        echo ">";
                                        echo $row['nombEmpleado'];
                                        echo " ";
                                        echo $row['apellidoEmpleado'];
                                        echo "</option>";
                                      }
                                  ?>
                                </select>
                              </div>

                              <!--*************************** primer INPUT -->
                              <div class="form-group">
                                <label for="destiNewMove" class="col-form-label col-form-label-sm">Destino:</label>
                                <select class="form-control form-control-sm" id="destiNewMove" name="destiNewMove" style="width:100%">
                                  <option value="">Elije uno</option>
                                  <?php $ctg = $con->query("SELECT * FROM empleados");
                                      while ($row = $ctg->fetch_assoc()) {
                                        echo "<option value='".$row['id_empleado']."' ";
                                        echo ">";
                                        echo $row['nombEmpleado'];
                                        echo " ";
                                        echo $row['apellidoEmpleado'];
                                        echo "</option>";
                                      }
                                  ?>
                                </select>
                              </div>

                              <!--*************************** primer INPUT -->
                              <div class="form-group">
                                <label for="obsNewMove" class="col-form-label col-form-label-sm">Observacion:</label>
                                <input type="text" class="form-control form-control-sm" id="obsNewMove" name="obsNewMove">
                              </div>

                              <!--*************************** primer INPUT -->
                              <div class="form-group">
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
                              <!--*************************** FINAL INPUT -->
                            </form>
                            <!--*************************** FINAL DE FORMULARIO -->
                            <hr>
                            <!-- 2da fila : botones  -->
                            <div class="row">
                              <div class="col-sm-12">
                                <button type="button" class="btn btn-sm btn-warning" id="btncleanMov">
                                  <i class="fas fa-broom fa-sm"></i>
                                  Limpiar Carrito
                                </button>
                                <button type="button" class="btn btn-sm btn-success" id="btnaddMov">
                                  <i class="fas fa-car mr-2 fa-sm"></i>
                                  Agregar al Carrito
                                </button>
                              </div>
                            </div>
                            <!-- FIN 2da fila de botones  -->

                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <!-- 3RA FILA TABLA TEMPORAL  -->
                        <div class="card shadow">
                          <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-file mr-2"></i>Ficha de Movimiento</h6>
                          </div>
                          <div class="card-body">
                            <div id="tableMoveTemp"></div>
                          </div>
                        </div>
                        <!-- FIN 3Ra fila TABLA TEMPORAL  -->
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div><!--<<<<<<<<<<<<<<<<< FIN DE CONTENIDO <<<<<<<<<<<<<<<<<-->

        <!-- Footer -->
        <?php include('../include/footer.php'); ?>
        <!-- End of Footer -->

      </div>  <!--<<<<<<<<<<<<<< FIN DE CONTENT WRAPPER <<<<<<<<<<<<<<<-->

    </div><!--<<<<<<<<<<<<<<<<<<< FIN DE WRAPPER   <<<<<<<<<<<<<<<<<<<<<-->

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('../include/scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tableMoves').load('../componentes/tableMoves.php');
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
