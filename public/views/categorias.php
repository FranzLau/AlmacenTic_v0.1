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
    <?php include('../modal/modalEditarCategoria.php'); ?>

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
                <li class="breadcrumb-item active" aria-current="page">Equipos</li>
                <li class="breadcrumb-item"><a href="#">Categorias</a></li>
              </ol>
            </nav>

            <!-- Content Row -->
            <div class="row">
              <div class="col-lg-4">

                <!-- Basic Card Example -->

                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-folder-plus mr-2 fa-sm"></i>Registro de Categoria</h6>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <form id="formNuevaCategoria">
                          <div class="form-group">
                            <label for="nomCateg" class="col-form-label col-form-label-sm font-weight-bold">Nombre:</label>
                            <input type="text" class="form-control form-control-sm" id="nomCateg" name="nomCateg" placeholder="Escriba Aquí...">
                          </div>
                          
                        </form>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-12">
                        <button type="button" class="btn btn-primary w-100" id="btnCrearCategoria"><i class="fas fa-save text-white-50 mr-2"></i>Guardar</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-lg-8">

                <!-- Table Category Room -->

                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-list mr-2 fa-sm"></i>Lista de Categoria</h6>
                  </div>
                  <div class="card-body">
                    <div id="tablaCategoria"></div>
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


    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('../include/scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tablaCategoria').load('../componentes/tablaCategoria.php');
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


      function eliminaCategoria(idcateg){
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
              url: '../../public/procesos/categorias/eliminarCategoria.php',
              type: 'POST',
              data: "idcateg=" + idcateg,
              success:function(r){
                if (r==1) {
                  $('#tablaCategoria').load('../componentes/tablaCategoria.php');
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
