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

            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Inicio</li>
                <li class="breadcrumb-item"><a href="#">Contratos</a></li>
              </ol>
            </nav>

            <!-- Content Row -->
            <div class="row mt-4">
              <div class="col-sm-4">
                <div class="card shadow">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                      <i class="fas fa-list mr-2"></i>
                      Registro de Contrato
                    </h6>
                  </div>
                  <div class="card-body">
                    <form id="formNuevoContrato">
                      <div class="form-group mb-0">
                        <label for="descripcionContrato" class="col-form-label col-form-label-sm font-weight-bold">Descripción :</label>
                        <input type="text" class="form-control form-control-sm" name="descripcionContrato" id="descripcionContrato">
                      </div>
                      <div class="form-group mb-0">
                        <label for="adquisicionContrato" class="col-form-label col-form-label-sm font-weight-bold">Adquisicion:</label>
                        <input type="date" class="form-control form-control-sm" name="adquisicionContrato" id="adquisicionContrato">
                      </div>
                      <div class="form-group mb-0">
                        <label for="garantiaContrato" class="col-form-label col-form-label-sm font-weight-bold">Garantia:</label>
                        <input type="text" class="form-control form-control-sm" name="garantiaContrato" id="garantiaContrato" placeholder="X años">
                      </div>
                      <div class="form-group mb-0">
                        <label for="proveedorContrato" class="col-form-label col-form-label-sm font-weight-bold">Proveedor:</label>
                        <input type="text" class="form-control form-control-sm" name="proveedorContrato" id="proveedorContrato">
                      </div>
                    </form>
                    <hr>
                    <div class="row">
                      <div class="col-sm-12">
                        <button type="button" class="btn btn-primary w-100" id="btnAgregarContrato">
                          <i class="fas fa-save text-white-50 mr-2"></i>
                          Guardar
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
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
