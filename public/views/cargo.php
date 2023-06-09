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

    <!-- modal para agregar -->
    <?php include('../modal/modalNuevoCargo.php'); ?>
    <?php include('../modal/modalNuevaArea.php'); ?>
    <?php include('../modal/modalNuevaGerencia.php'); ?>

    <!-- modal para editar -->
    <?php include('../modal/modalEditarCargo.php'); ?>
    <?php include('../modal/modalEditarArea.php'); ?>
    <?php include('../modal/modalEditarGerencia.php'); ?>

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

            <!-- Page title -->
            <div class="page-title mb-2">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="fa-solid fa-house"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Empleado</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Cargo</li>
                </ol>
              </nav>
            </div>
            <!-- End Page title -->

            <!-- Page body -->
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Cargo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Area</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Gerencia</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#modalCrearCargo"><i class="fa-solid fa-circle-plus text-white-50 mr-2"></i>Nuevo Cargo</a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div id="tabCargo"></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#modalCrearArea"><i class="fa-solid fa-circle-plus text-white-50 mr-2"></i>Nueva Area</a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div id="tabArea"></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#modalCrearGerencia"><i class="fa-solid fa-circle-plus text-white-50 mr-2"></i>Nueva Gerencia</a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div id="tabGerencia"></div>
                        </div>
                    </div>
                </div>
            </div>
           

            
            <!-- Page end body -->
          </div>
        </div>
        <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
        <!-- Footer -->
        <!-- Footer -->
        <?php include('../include/footer.php'); ?>
        <!-- End of Footer -->
        <!-- End of Footer -->
      </div>
      <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    </div>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('../include/scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tabCargo').load('../componentes/tablaCargo.php');
        $('#tabArea').load('../componentes/tablaArea.php');
        $('#tabGerencia').load('../componentes/tablaGerencia.php');
      });
    </script>
    
    <script type="text/javascript">
    
      //------- Funciones para CARGO -------------------------
      function leerCargo(id_cargo){
        $.ajax({
          url: '../../public/procesos/cargo/leerCargo.php',
          type: 'POST',
          data: "idcargo=" + id_cargo,
          success:function(r){
            var datos= $.parseJSON(r);
            $('#idEdCargo').val(datos['idCargo']);
            $('#nomEdCargo').val(datos['nomCargo']);
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

      function eliminarCargo(id_cargo){
        console.log("no llega modal");
        Swal.fire({
          title: 'Estas seguro?',
          text: "No podrás revertir esta acción!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si, eliminar!',
          cancelButtonText: 'Cancelar'
        }).then((result) => {
          console.log("llega modal");
          if (result.isConfirmed) {
            $.ajax({
              url: '../../public/procesos/cargo/eliminarCargo.php',
              type: 'POST',
              data: "idcarg=" + id_cargo,
              success:function(r){
                if (r==1) {
                  
                  $('#tabCargo').load('../componentes/tablaCargo.php');
                  Swal.fire(
                    'Eliminado!',
                    'Su archivo ha sido eliminado.',
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
    <script type="text/javascript">
        //------- Funciones para area -------------------------
        function leerArea(id_area){
            $.ajax({
                url: '../../public/procesos/area/leerArea.php',
                type: 'POST',
                data: "idarea=" + id_area,
                success:function(r){
                    var datos= $.parseJSON(r);
                    $('#idEdArea').val(datos['idArea']);
                    $('#nomEdArea').val(datos['nomArea']);
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
        function eliminarArea(id_area){
            console.log("no llega modal");
            Swal.fire({
                title: 'Estas seguro?',
                text: "No podrás revertir esta acción!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                console.log("llega modal");
                if (result.isConfirmed) {
                    $.ajax({
                        url: '../../public/procesos/area/eliminarArea.php',
                        type: 'POST',
                        data: "idarea=" + id_area,
                        success:function(r){
                            if (r==1) {
                                $('#tabArea').load('../componentes/tablaArea.php');
                                Swal.fire(
                                    'Eliminado!',
                                    'Su archivo ha sido eliminado.',
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
    <script type="text/javascript">
        //------- Funciones para gerencia -------------------------
        function leerGerencia(id_ger){
            $.ajax({
                url: '../../public/procesos/gerencia/leerGerencia.php',
                type: 'POST',
                data: "idgeren=" + id_ger,
                success:function(r){
                    var datos= $.parseJSON(r);
                    $('#idEdGerenc').val(datos['idGeren']);
                    $('#nomEdGerenc').val(datos['nomGeren']);
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
        function eliminarGerencia(id_ger){
            console.log("no llega modal");
            Swal.fire({
                title: 'Estas seguro?',
                text: "No podrás revertir esta acción!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                console.log("llega modal");
                if (result.isConfirmed) {
                    $.ajax({
                        url: '../../public/procesos/gerencia/eliminarGerencia.php',
                        type: 'POST',
                        data: "idgeren=" + id_ger,
                        success:function(r){
                            if (r==1) {
                                $('#tabGerencia').load('../componentes/tablaGerencia.php');
                                Swal.fire(
                                    'Eliminado!',
                                    'Su archivo ha sido eliminado.',
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
