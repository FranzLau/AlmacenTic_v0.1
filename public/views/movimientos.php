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
                      <i class="fa-solid fa-dolly mr-2 fa-sm"></i>Registrar Movimiento
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
                          <i class="fa-solid fa-list mr-2"></i>Lista de Movimientos
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
                          <div class="card-header">
                            <h6 class="m-0 text-primary font-weight-bold">
                              <i class="fa-solid fa-folder-plus mr-2"></i>Registro Movimiento
                            </h6>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-12">
                                <form id="formNuevoMovi">
                                  <div class="form-row">
                                    <div class="form-group col-md-2">
                                      <label class="col-form-label col-form-label-sm" for="fechaNuevoMov">Fecha :</label>
                                      <input type="date" class="form-control form-control-sm" id="fechaNuevoMov" name="fechaNuevoMov">
                                    </div>
                                    <!--*************************** primer INPUT -->
                                    <div class="form-group col-md-4">
                                      <label class="col-form-label col-form-label-sm" for="tipoNuevoMov">Tipo de Movimiento:</label><br>
                                      <select class="form-control form-control-sm" name="tipoNuevoMov" id="tipoNuevoMov">
                                        <option>Elije una opción</option>
                                        <option value="OUTPUT">Asignación de Equipo</option>
                                        <option value="INPUT">Devolución de Equipo</option>
                                      </select>
                                    </div>
                                    <!--*************************** primer INPUT -->
                                    <div class="form-group col-md-6">
                                      <label for="empNuevoMov" class="col-form-label col-form-label-sm">Usuario:</label>
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
                                  </div>
                                  <div class="form-row">
                                    <!--*************************** primer INPUT -->
                                    <div class="form-group col-md-3">
                                      <label for="serieNuevoMov" class="col-form-label col-form-label-sm">Equipo:</label>
                                      <select class="form-control form-control-sm" id="serieNuevoMov" name="serieNuevoMov" style="width:100%">
                                        <option value="0">Elije la serie</option>
                                      </select>
                                    </div>
                                    <!--*************************** primer INPUT -->
                                    <div class="form-group col-md-1">
                                      <label for="cantNuevoMov" class="col-form-label col-form-label-sm">Cant.</label>
                                      <input type="number" class="form-control form-control-sm" id="cantNuevoMov" name="cantNuevoMov">
                                    </div>
                                    <!--*************************** primer INPUT -->
                                    <div class="form-group col-md-2">
                                      <label for="estadoNuevoMov" class="col-form-label col-form-label-sm">Estado:</label>
                                      <select class="form-control form-control-sm" name="estadoNuevoMov" id="estadoNuevoMov">
                                        <option value="">Elije aqui</option>
                                        <option value="">Operativo</option>
                                        <option value="">Inoperativo</option>
                                      </select>
                                    </div>
                                    <!--*************************** primer INPUT -->
                                    <div class="form-group col-md-6">
                                      <label for="obsNuevoMov" class="col-form-label col-form-label-sm">Observacion:</label>
                                      <input type="text" class="form-control form-control-sm" id="obsNuevoMov" name="obsNuevoMov">
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 text-right">
                                <button type="button" class="btn btn-sm btn-success" id="btnAgregarEquipo">
                                  <i class="fa-solid fa-arrow-turn-down fa-sm"></i>
                                  Agregar
                                </button>
                                <button type="button" class="btn btn-sm btn-danger" id="btnLimpiarTodo">
                                  <i class="fa-solid fa-trash fa-sm"></i>
                                  Limpiar
                                </button>
                              </div>
                            </div>
                            
                            <div class="row mt-3">
                              <div class="col-md-12">
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
