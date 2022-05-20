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

    <?php include('../modal/modalNuevoEquipo.php'); ?>
    <?php include('../modal/modalEditarEquipo.php'); ?>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
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
              </ol>
            </nav>
            

            

            <div class="row">
              <div class="col-sm-12">
                <div class="card shadow">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">
                      <i class="fas fa-list mr-2"></i>
                      Lista de Equipos
                    </h6>
                    <button class="d-none d-sm-inline-block btn btn-success btn-sm btn-icon-split" data-toggle="modal" data-target="#modalCrearEquipo">
                      <span class="icon text-white-50">
                        <i class="fas fa-plus fa-sm"></i>
                      </span>
                      <span class="text">Agregar</span>
                    </button>
                  </div>
                  <div class="card-body">
                    <div id="tablaEquipos"></div>
                  </div>
                </div>
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
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('../include/scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tablaEquipos').load('../componentes/tablaEquipos.php');
      });
    </script>
    
    <script type="text/javascript">
      function verDatosEquipos(idprod){
        $.ajax({
          url: '../../public/procesos/equipos/leerEquipo.php',
          type: 'POST',
          data: "idprod=" + idprod,
          success:function(r){
            var datos= $.parseJSON(r);
            $('#idEditarEquipo').val(datos['idEquipo']);
            $('#categEditarEquipo').val(datos['idCategoria']);
            $('#contratoEditarEquipo').val(datos['idContrato']);
            $('#descEditarEquipo').val(datos['nomEquipo']);
            $('#serieEditarEquipo').val(datos['serieEquipo']);
            $('#codigoEditarEquipo').val(datos['codEquipo']);
            $('#marcaEditarEquipo').val(datos['marcaEquipo']);
            $('#modeloEditarEquipo').val(datos['modeloEquipo']);
            $('#cantEditarEquipo').val(datos['cantEquipo']);
            
            if (datos['estadoEquipo']==1) {
              $('#opeEditarEquipo').prop('checked',true);
            }else {
              $('#noOpeEditarEquipo').prop('checked',true);
            }
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
      
      function eliminarEquipo(idprod){
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
            url: '../../public/procesos/equipos/eliminarEquipo.php',
            type: 'POST',
            data: "idprod=" + idprod,
            success:function(r){
              if (r==1) {
                $('#tablaEquipos').load('../componentes/tablaEquipos.php');
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
