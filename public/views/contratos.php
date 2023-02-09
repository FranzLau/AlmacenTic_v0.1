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
    <?php include('../modal/modalNuevoContrato.php'); ?>
    <?php include('../modal/modalEditarContrato.php'); ?>

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
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
                    <i class="fa-solid fa-book m-auto"></i>
                  </div>
                  <div>
                    <h3 class="mb-0">Panel de Contratos</h3>
                    <span>Listado de contratos de Equipos de Tecnologicos.</span>
                  </div>
                </div>
                <div class="page-title-actions">
                  <a href="#" class="d-none d-sm-inline-block btn btn-success shadow-sm" data-toggle="modal" data-target="#modalCrearContrato"><i class="fa-solid fa-circle-plus mr-2 text-white-50"></i> Nuevo Contrato</a>
                </div>
              </div>
            </div>
            <!-- End Page title -->

            <!-- Content Row -->
            <div class="row mt-4">
              
              <div class="col-sm-12">
                <div class="card shadow mb-4">
                  <div class="card-header py-3 bg-gradient-primary">
                    <h6 class="m-0 font-weight-bold text-white">
                      <i class="fas fa-list mr-2"></i>
                      Lista de Contratos
                    </h6>
                  </div>
                  <div class="card-body">
                    <div id="tablaContratos"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Footer -->
        <?php include('../include/footer.php'); ?>
        <!-- End of Footer -->
      </div>
    </div>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->


    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

    <?php include('../include/scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tablaContratos').load('../componentes/tablaContratos.php');
      });
    </script>
    <script type="text/javascript">
      function verDatosContrato(idContrato){
        $.ajax({
          url: '../../public/procesos/contratos/leerContrato.php',
          type: 'POST',
          data: "idcontr=" + idContrato,
          success:function(r){
            var datos= $.parseJSON(r);
            $('#idEditarContrato').val(datos['idContrato']);
            $('#nomEditarContrato').val(datos['nomContrato']);
            $('#adquiEditarContrato').val(datos['adquiContrato']);
            $('#garaEditarContrato').val(datos['garanContrato']);
            $('#provEditarContrato').val(datos['provContrato']);
          }
        })
        .done(function() {
          console.log("success");
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
      }
      //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
      function eliminarContrato(idContrato){

        Swal.fire({
          title: 'Estas seguro?',
          text: "No podrás revertir esta acción!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#4e73df',
          cancelButtonColor: '#e74a3b',
          confirmButtonText: 'Si, eliminar!',
          cancelButtonText: 'Cancelar'
        }).then((result) => {
          if (result.isConfirmed) {

            $.ajax({
              url: '../../public/procesos/contratos/eliminarContrato.php',
              type: 'POST',
              data: "idcontr=" + idContrato,
              success:function(r){
               if (r==1) {
                  $('#tablaContratos').load('../componentes/tablaContratos.php');
                  Swal.fire(
                    'Eliminado!',
                    'Tu archivo ha sido eliminado.',
                    'success'
                  )
               }else{
                  Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Hubo un error!'
                  })
               }
              }
            }) 

          }
        })
    	}
    </script>
  </body>
</html>
<?php
  }else{
    header('Location: ../../');
  }
?>
