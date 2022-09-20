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
                    <h3 class="mb-0">Panel de Movimientos</h3>
                    <span>Aquí se muestra todos los movimientos de equipos realizados</span>
                  </div>
                  
                </div>
                <div class="page-title-actions">
                  <a href="movimientosAdd.php" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                    <i class="fa-solid fa-plus fa-sm text-white-50"></i>
                    Nuevo Movimiento
                  </a>
                </div>
              </div>
            </div>
            <!-- Content Row -->
            <div class="row">
              <div class="col-sm-12">
                <div class="card shadow">
                  <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Listado de Movimientos</h6>
                  </div>
                  <div class="card-body">
                    <div id="tablaMovimientos"></div>
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