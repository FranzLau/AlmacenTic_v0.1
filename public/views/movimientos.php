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

      <!-- Sidebar -->
      <?php include("../include/sidebar.php"); ?>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->  
          <?php include("../include/topbar.php"); ?>
          <!-- End Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
            
            <!-- Page title -->
            <div class="page-title mb-4">
              <div class="page-title-wrapper d-flex align-items-center justify-content-between">
                <div class="page-title-heading d-flex align-items-center">
                  <div class="page-title-icon shadow-sm">
                    <i class="fa-solid fa-people-carry-box m-auto"></i>
                  </div>
                  <div>
                    <h3 class="mb-0">Panel de Movimientos</h3>
                    <span>Registre todo movimiento de equipo.</span>
                  </div>
                  
                </div>
                <div class="page-title-actions">
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                        <i class="fa-solid fa-clipboard-list mr-2 fa-sm"></i>Movimientos
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                        <i class="fa-solid fa-dolly mr-2 fa-sm"></i>Nuevo Movimiento
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Page title -->

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
                        <h6 class="m-0 text-primary">
                          <i class="fa-solid fa-list mr-2"></i>Lista de Movimientos
                        </h6>
                      </div>
                      <div class="card-body">
                        <div id="tablaMovimientos"></div>
                      </div>
                    </div>
                  </div>

                  <!--*************************** segundo PANEL -->
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card shadow">
                          <div class="card-header">
                            <h6 class="m-0 text-primary">
                              Registro de Movimiento
                            </h6>
                          </div>
                          <div class="card-body">
                            <form id="formNuevoMovi">
                              <div class="form-row">
                                <div class="form-group col-md-2">
                                  <label class="col-form-label col-form-label-sm" for="fechaNuevoMov">Fecha :</label>
                                  <input type="date" class="form-control form-control-sm" id="fechaNuevoMov" name="fechaNuevoMov">
                                </div>
                                <!--*************************** primer INPUT -->
                                <div class="form-group col-md-3">
                                  <label class="col-form-label col-form-label-sm" for="tipoNuevoMov">Tipo:</label>
                                  <div class="radio">
                                    <div class="radio-estate">
                                      <input type="radio" name="tipoNuevoMov" id="tipoNuevoMov1" value="1" checked>
                                      <label for="tipoNuevoMov1">Normal</label>
                                    </div>
                                    
                                    <div class="radio-estate">
                                      <input type="radio" name="tipoNuevoMov" id="tipoNuevoMov2" value="2">
                                      <label for="tipoNuevoMov2">Nuevo</label>
                                    </div>
                                  </div>
                                </div>
                                <!--*************************** primer INPUT -->
                                <div class="form-group col-md-4">
                                  <label for="empNuevoMov" class="col-form-label col-form-label-sm">Empleado:</label>
                                  <select class="form-control form-control-sm" id="empNuevoMov" name="empNuevoMov" style="width:100%">
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
                                <!--*************************** primer INPUT -->
                                <div class="form-group col-md-3">
                                  <label class="col-form-label col-form-label-sm" for="sedeNuevoMov">Ubicación:</label><br>
                                  <select class="form-control form-control-sm" id="sedeNuevoMov" name="sedeNuevoMov" style="width:100%">
                                    <option value="">Elije uno</option>
                                    <?php $ctg = $con->query("SELECT * FROM sede");
                                        while ($row = $ctg->fetch_assoc()) {
                                          echo "<option value='".$row['id_sede']."' ";
                                          echo ">";
                                          echo $row['nom_sede'];
                                          echo "</option>";
                                        }
                                    ?>
                                  </select>
                                </div>
                              </div>
                              
                              <!--*************************** primer INPUT -->
                              <div class="form-row">
                                <div class="form-group col-md-4">
                                  <label for="serieNuevoMov" class="col-form-label col-form-label-sm">Equipo:</label>
                                  <select class="form-control form-control-sm" id="serieNuevoMov" name="serieNuevoMov" style="width:100%">
                                    <option value="0">Elije la serie</option>
                                  </select>
                                </div>
                                <!--*************************** primer INPUT -->
                                <div class="form-group col-md-2">
                                  <label for="cantNuevoMov" class="col-form-label col-form-label-sm">Cant.</label>
                                  <input type="number" class="form-control form-control-sm" id="cantNuevoMov" name="cantNuevoMov">
                                </div>
                                <!--*************************** primer INPUT -->
                                <div class="form-group col-md-4">
                                  <label for="descNuevoMov" class="col-form-label col-form-label-sm">Descripcion:</label>
                                  <input type="text" class="form-control form-control-sm" id="descNuevoMov" name="descNuevoMov" readonly>
                                </div>
                              </div>
                              
                              <!--*************************** primer INPUT -->
                              <div class="form-group">
                                <label for="obsNuevoMov" class="col-form-label col-form-label-sm">Observacion:</label>
                                <input type="text" class="form-control form-control-sm" id="obsNuevoMov" name="obsNuevoMov">
                              </div>
                            </form>
                            
                            <div class="row">
                              <div class="col-md-12 text-right">
                                <button type="button" class="btn btn-sm btn-danger" id="btnLimpiarTodo">
                                  <i class="fa-regular fa-trash-can fa-sm"></i>
                                  Limpiar todo
                                </button>  
                                <button type="button" class="btn btn-sm btn-success" id="btnAgregarEquipo">
                                  <i class="fa-solid fa-arrow-turn-up fa-sm"></i>
                                  Agregar
                                </button>
                              </div>
                            </div>
                            <div class="row mt-3">
                              <div class="col-md-12">
                                <div id="tablaMovTemp"></div>
                              </div>
                            </div>
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
        <?php include('../include/footer.php'); ?>
        <!-- End of Footer -->

      </div>  <!--<<<<<<<<<<<<<< FIN DE CONTENT WRAPPER <<<<<<<<<<<<<<<-->

    </div><!--<<<<<<<<<<<<<<<<<<< FIN DE WRAPPER   <<<<<<<<<<<<<<<<<<<<<-->

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('../include/scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tablaMovimientos').load('../componentes/tablaDevolver.php');
        $('#tablaMovTemp').load("../componentes/tablaMovTemp.php");
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function() {

        // para tipo de Movimientos
        $('#tipoNuevoMov').change(function() {
          $.ajax({
            url: '../../public/procesos/movimientos/tipoMovimiento.php',
            type: 'POST',
            data: "idtmov=" + $('#tipoNuevoMov').val(),
            success:function(r){
              $('#serieNuevoMov').html(r);
            }
          })
        });

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
