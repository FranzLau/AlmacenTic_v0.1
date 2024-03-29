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

      <!-- Content Wrappssdr -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->  
          <?php include("../include/topbar.php"); ?>
          <!-- End Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page title -->
            <div class="mb-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Empleados</li>
                </ol>
              </nav>
              <a href="#" class="d-none d-sm-inline-block btn btn-success btn-sm shadow-sm" data-toggle="modal" data-target="#modalNuevoEmpleado"><i class="fa-solid fa-circle-plus text-white-50 mr-2"></i>Agregar Empleado</a>
              <a href="cargo.php" class="d-none d-sm-inline-block btn btn-info btn-sm shadow-sm"><i class="fa-solid fa-gear text-white-50 mr-2"></i>Config. Cargos</a>
            </div>
            <!-- End Page title -->
            
            <!-- Page Lista de Empleados -->
            <div class="row">
              <div class="col-sm-12">
                <!-- ************* TARJETA CON TABLA ***************** -->
                <div id="tablaEmpleados"></div>
                <!-- ************************************************* -->
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
        $('#cargoEmpleado').select2({
          //width: 'resolve'
          dropdownParent: $('#modalNuevoEmpleado .modal-body')
        });
        $('#areaEmpleado').select2({
          dropdownParent: $('#modalNuevoEmpleado .modal-body')
        });
        $('#gerenciaEmpleado').select2({
          dropdownParent: $('#modalNuevoEmpleado .modal-body')
        });

        $('#cargoEditarEmpleado').select2({
          width: 'resolve'
        });
        $('#areaEditarEmpleado').select2({
          width: 'resolve'
        });
        $('#gerenciaEditarEmpleado').select2({
          width: 'resolve'
        });

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
            $('#correoEditarEmpleado').val(datos['emailempphp']);
            $('#telEditarEmpleado').val(datos['telempphp']);
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
