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

      <?php //include('../modal/#'); ?>
      <?php //include('../modal/#'); ?>

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
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Equipos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Movimientos</li>
                  </ol>
                </nav>
                <a href="movimientosOut.php" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fa-solid fa-turn-up text-white-50 mr-2"></i>Asignacion de Equipo</a>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fa-solid fa-turn-down text-white-50 mr-2"></i>Devolucion de Equipo</a>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fa-solid fa-truck-ramp-box text-white-50 mr-2"></i>Baja del Equipo</a>
              </div>
              <!-- End Page title -->

              <div class="row mt-4">
                <div class="col-md-12">
                  <div id="tableMoves"></div>
                </div>
                
              </div>

            </div>
          </div>
          <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
          <!-- Footer -->
          <?php include('../include/footer.php'); ?>
          <!-- End of Footer -->
        </div>
        <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
      </div>
      <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
      <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
      <?php include('../include/scripts.php'); ?>
      <script type="text/javascript">
        $(document).ready(function() {
          $('#tableMoves').load('../componentes/tablaMovimientos.php');
        });
      </script>
      <script type="text/javascript">
        function leerCategoria(idcateg){
          $.ajax({
            url: '../../public/procesos/categorias/leerCategoria.php',
            type: 'POST',

            data: "idcateg=" + idcateg,
            success:function(r){
              var datos= $.parseJSON(r);
              $('#idEditarCategoria').val(datos['idCategoria']);
              $('#nomEditarCategoria').val(datos['nomCategoria']);
              $('#descEditarCategoria').val(datos['descCategoria']);
            }
          })
          .done(function(r) {
            console.log(r);
          })
          .fail(function() {
            console.log("error");
          })
          .always(function() {
            console.log("complete");
          });
        }
      </script>
    </body>
  </html>
<?php
  }else{
    header('Location: ../../');
  }
?>
