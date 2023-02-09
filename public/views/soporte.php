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

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('../modal/modalNuevoSoporte.php'); ?>
    
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
            
            <div class="page-title mb-4">
              <div class="page-title-wrapper d-flex align-items-center justify-content-between">
                <div class="page-title-heading d-flex align-items-center">
                  <div class="page-title-icon bg-gradient-primary shadow-sm">
                    <i class="fa-solid fa-phone m-auto"></i>
                  </div>
                  <div>
                    <!-- Page title -->
                    <h3 class="mb-0">Panel de Soporte OTRS</h3>
                    <span>Listado de atenciones diarias.</span>
                  </div>
                </div>
                <div class="page-title-actions">
                  <a href="#" class="d-none d-sm-inline-block btn btn-success shadow-sm" data-toggle="modal" data-target="#modalNuevoSoporte"><i class="fa-solid fa-circle-plus mr-2 text-white-50"></i> Nueva Atencion</a>
                </div>
              </div>
            </div>
            <!-- Content Row -->
            <div class="row">
              <div class="col-sm-12">
                <div class="card shadow">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Listado de Equipos</h6>
                  </div>
                  <div class="card-body">
                    <div id="tablaSoporte"></div>
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
        $('#tablaSoporte').load('../componentes/tablaSoporte.php');
      });
    </script>
  </body>
</html>
<?php
  }else{
    header('Location: ../../');
  }
?>