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

    <?php include('../modal/modalNuevoEmpleado.php'); ?>
    <?php include('../modal/modalEditarEmpleado.php'); ?> 
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
                    <i class="fa-solid fa-user-tie m-auto"></i>
                  </div>
                  <div>
                    <h3 class="mb-0">Panel de Trabajadores</h3>
                    <span>Listado de todos los trabajadores de la empresa Electrosur.</span>
                  </div>
                  
                </div>
                <div class="page-title-actions">
                  <a href="#" class="d-none d-sm-inline-block btn btn-success shadow-sm" data-toggle="modal" data-target="#modalNuevoEmpleado"><i class="fa-solid fa-circle-plus text-white-50 mr-2"></i> Nuevo Trabajador</a>
                </div>
              </div>
            </div>
            <!-- End Page title -->
            
            <!-- Page Lista de Empleados -->
            <div class="row">
              <div class="col-sm-12">
                <div class="card shadow">
                  <div class="card-header py-3 bg-second-primary">
                    <h6 class="m-0 font-weight-bold text-white">Listado de Trabajadores</h6>
                  </div>
                  <div class="card-body">
                    <!-- ************* TARJETA CON TABLA ***************** -->
                    <div id="tablaEmpleados"></div>
                    <!-- ************************************************* -->
                  </div>
                </div>
              </div>
            </div>

            <!-- Content Row -->

          </div>
        </div>
        <!-- Footer -->
        <?php include('../include/footer.php'); ?>
        <!-- End of Footer -->
        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

    

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('../include/scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tablaEmpleados').load('../componentes/tablaEmpleados.php');
      });
    </script>
    <script>
      function verDatosEmpleado(idemp){
        $.ajax({
          url: '../procesos/empleados/leerEmpleado.php',
          type: 'POST',
          data: "idemp=" + idemp,
          success:function(r){
            var datos = $.parseJSON(r);
            $('#idEditarEmpleado').val(datos['idempphp']);
            $('#nomEditarEmpleado').val(datos['nomempphp']);
            $('#apeEditarEmpleado').val(datos['apempphp']);
            $('#cargoEditarEmpleado').val(datos['cargoempphp']);
            $('#areaEditarEmpleado').val(datos['areaempphp']);
            $('#gerenciaEditarEmpleado').val(datos['grempphp']);
            $('#grupoEditarEmpleado').val(datos['gpoempphp']);
            $('#estadoEditarEmpleado').val(datos['estaempphp']);
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
      function borrarEmpleado(idemp){

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
            url: '../../public/procesos/empleados/eliminarEmpleado.php',
            type: 'POST',
            data: "idemp=" + idemp,
            success:function(r){
              if (r==1) {
                $('#tablaEmpleados').load('../componentes/tablaEmpleados.php');
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
      //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    </script>
  </body>
</html>
<?php
  }else{
    header('Location: ../../');
  }
?>
