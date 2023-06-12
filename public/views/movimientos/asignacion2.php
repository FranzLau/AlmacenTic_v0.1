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

            <!-- Page title -->
            <div class="page-title mb-4">
              <div class="page-title-wrapper d-flex align-items-center justify-content-between">
                <div class="page-title-heading d-flex align-items-center">
                  <div class="page-title-icon shadow-sm">
                    <i class="fa-solid fa-dolly m-auto"></i>
                  </div>
                  <div>
                    <h3 class="mb-0">Panel de Asignacion</h3>
                    <span>Asignacion de equipos</span>
                  </div>
                  
                </div>
                <div class="page-title-actions">
                  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                    <i class="fa-solid fa-plus fa-sm text-white-50"></i>
                    Nuevo Movimiento
                  </a>
                </div>
              </div>
            </div>


            <!-- Content Row -->
            <div class="row">
              <div class="col-sm-12">
                <div class="row">
                  <div class="col-md-5">
                    <div class="card shadow border-top-warning">
                      
                      <div class="card-body">
                        <form id="formNuevoMovi">
                          <div class="form-row">
                            <div class="form-group col-md-4">
                              <label class="col-form-label col-form-label-sm" for="fechaNuevoMov">Fecha :</label>
                              <input type="date" class="form-control form-control-sm font-weight-bold" id="fechaNuevoMov" name="fechaNuevoMov">
                            </div>
                            
                          </div>
                          <hr>
                          <div class="form-row">
                            <div class="form-group col-md-4">
                              <label class="col-form-label col-form-label-sm" for="tipoNuevoMov">Tipo:</label>
                              <select class="form-control form-control-sm font-weight-bold">
                                <option>Small select</option>
                                <option>Asignacion de Equipo</option>
                                <option>Devolucion de Equipo</option>
                              </select>
                            </div>
                            <!--*************************** primer INPUT -->
                            <div class="form-group col-md-8">
                              <label for="empNuevoMov" class="col-form-label col-form-label-sm">Empleado:</label>
                              <select class="form-control form-control-sm font-weight-bold" id="empNuevoMov" name="empNuevoMov" style="width:100%">
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
                          <hr>
                          <!--*************************** primer INPUT -->
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="serieNuevoMov" class="col-form-label col-form-label-sm">Serie:</label>
                              <select class="form-control form-control-sm font-weight-bold" id="serieNuevoMov" name="serieNuevoMov" style="width:100%">
                                <option value="0">Elije la serie</option>
                              </select>
                            </div>
                            <!--*************************** primer INPUT -->
                            <div class="form-group col-md-2">
                              <label for="cantNuevoMov" class="col-form-label col-form-label-sm">Cant.</label>
                              <input type="number" class="form-control form-control-sm font-weight-bold" id="cantNuevoMov" name="cantNuevoMov">
                            </div>
                            <!--*************************** primer INPUT -->
                            <div class="form-group col-md-4">
                              <label class="col-form-label col-form-label-sm" for="sedeNuevoMov">Sede:</label><br>
                              <select class="form-control form-control-sm font-weight-bold" id="sedeNuevoMov" name="sedeNuevoMov" style="width:100%">
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
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="descNuevoMov" class="col-form-label col-form-label-sm">Descripcion:</label>
                              <input type="text" class="form-control form-control-sm font-weight-bold" id="descNuevoMov" name="descNuevoMov" readonly>
                            </div>
                            <!--*************************** primer INPUT -->
                            <div class="form-group col-md-3">
                              <label for="descNuevoMov" class="col-form-label col-form-label-sm">Marca:</label>
                              <input type="text" class="form-control form-control-sm font-weight-bold" id="descNuevoMov" name="descNuevoMov" readonly>
                            </div>
                            <!--*************************** primer INPUT -->
                            <div class="form-group col-md-3">
                              <label for="descNuevoMov" class="col-form-label col-form-label-sm">Modelo:</label>
                              <input type="text" class="form-control form-control-sm font-weight-bold" id="descNuevoMov" name="descNuevoMov" readonly>
                            </div>
                          </div>
                          <!--*************************** primer INPUT -->
                          <div class="form-group">
                            <label for="obsNuevoMov" class="col-form-label col-form-label-sm">Observacion:</label>
                            <input type="text" class="form-control form-control-sm font-weight-bold" id="obsNuevoMov" name="obsNuevoMov">
                          </div>
                        </form>
                        <hr>
                        <div class="row">
                          <div class="col-md-12">
                            <button type="button" class="btn btn-sm btn-danger" id="btnLimpiarTodo">
                              <i class="fa-regular fa-trash-can fa-sm"></i>
                              Limpiar todo
                            </button>  
                            <button type="button" class="btn btn-sm btn-primary" id="btnAgregarEquipo">
                              <i class="fa-solid fa-arrow-turn-up fa-sm"></i>
                              Agregar
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="card shadow border-top-success">
                      <div class="card-body">
                        <div id="tablaMovTemp"></div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
            </div>



          </div>
        </div>
        <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
      </div>
      <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    </div>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('../include/scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tablaMovimientos').load('../componentes/tablaDevolver.php');
      });
    </script>
  </body>
</html>
<?php
  }else{
    header('Location: ../../');
  }
?>