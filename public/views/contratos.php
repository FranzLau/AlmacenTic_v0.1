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
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="fa-solid fa-house"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
              </nav>
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#modalCrearContrato"><i class="fa-solid fa-circle-plus mr-2 text-white-50"></i> Nuevo Contrato</a>
            </div>
            <!-- End Page title -->

            <!-- Content Row -->
            <div class="row mt-4">
              <div class="col-sm-12">
                <div id="tablaContratos"></div>
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
            $('#idEdContrato').val(datos['idContrato']);
            $('#nomEdContrato').val(datos['nomContrato']);
            $('#pedEdContrato').val(datos['numPedido']);
            $('#numEdContrato').val(datos['numContrato']);
            $('#fechEdContrato').val(datos['fechaContrato']);
            $('#garEdContrato').val(datos['garanContrato']);
            $('#provEdContrato').val(datos['provContrato']);
            $('#tipEdContrato').val(datos['tipoContrato']);
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
