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
            <div class="page-title mb-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                  <li class="breadcrumb-item"><a href="movimientos.php">Movimientos</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Asignacion</li>
                </ol>
              </nav>
            </div>
            <!-- End Page title -->

            <!-- Content Row -->
            <div class="row">
              <div class="col-md-12">
                <div class="card shadow border-left-success">
                            
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-4">
                        <h6 class="font-weight-bold text-primary">REGISTRO DE ASIGNACION DE EQUIPO</h6>
                        <hr>
                        <form id="formNewAsig">
                          <!--*************************** Imputs *********************************-->
                          <div class="form-group">
                            <label for="empNewAsig" class="col-form-label col-form-label-sm font-weight-bold">Destino:</label>
                            <select class="form-control form-control-sm" id="empNewAsig" name="empNewAsig" style="width:100%">
                              <option value="">Elije uno</option>
                              <?php $ctg = $con->query("SELECT * FROM empleado");
                                  while ($row = $ctg->fetch_assoc()) {
                                    echo "<option value='".$row['id_emp']."' ";
                                    echo ">";
                                    echo $row['nom_emp'];
                                    echo " ";
                                    echo $row['ape_emp'];
                                    echo "</option>";
                                  }
                              ?>
                            </select>
                          </div>
                          <!--*************************** row 1 *********************************-->
                          <div class="form-row">
                            <!--*************************** Imputs *********************************-->
                            <div class="form-group col-md-6">
                              <label class="col-form-label col-form-label-sm font-weight-bold" for="sedeNewAsig">Sede:</label><br>
                              <select class="form-control form-control-sm" id="sedeNewAsig" name="sedeNewAsig" style="width:100%">
                                <option value="">Elije uno</option>
                                <?php $ctg = $con->query("SELECT * FROM sede");
                                    while ($row = $ctg->fetch_assoc()) {
                                      echo "<option value='".$row['id_sede']."' ";
                                      echo ">";
                                      echo $row['nom_sede'];
                                      echo "</option>";
                                    }
                                ?>
                              </select>
                            </div>
                            <!--*************************** Imputs *********************************-->
                            <div class="form-group col-md-6">
                              <label for="opeNewAsig" class="col-form-label col-form-label-sm font-weight-bold">Operador:</label>
                              <select class="custom-select custom-select-sm" id="opeNewAsig" name="opeNewAsig" required>
                                <option selected disabled>Elegir...</option>
                                <option value="ELS">Trabajador</option>
                                <option value="P-ELS">Practicante</option>
                                <option value="T-ELS">Tercero</option>
                              </select>
                            </div>
                          </div>
                          <!--*************************** Imputs *********************************-->
                          <div class="form-group">
                            <label for="detNewAsig" class="col-form-label col-form-label-sm font-weight-bold">Detalles:</label>
                            <input type="text" class="form-control form-control-sm" id="detNewAsig" name="detNewAsig">
                          </div>
                          <!--*************************** row *********************************-->
                          <div class="form-row">
                            <!--*************************** Imputs *********************************-->
                            <div class="form-group col-md-9">
                              <label for="serieNewAsig" class="col-form-label col-form-label-sm font-weight-bold">Serie:</label>
                              <select class="form-control form-control-sm" id="serieNewAsig" name="serieNewAsig" style="width:100%">
                                <option value="">Elije uno</option>
                                <?php $ctg = $con->query("SELECT * FROM equipo WHERE cantidad_equipo != '0' AND condicion_equipo = 'B' ");
                                    while ($row = $ctg->fetch_assoc()) {
                                      echo "<option value='".$row['id_equipo']."' ";
                                      echo ">";
                                      echo $row['serie_equipo'];
                                      echo "</option>";
                                    }
                                ?>
                              </select>
                            </div>
                            <!--*************************** Imputs *********************************-->
                            <div class="form-group col-md-3">
                              <label for="cantNewAsig" class="col-form-label col-form-label-sm font-weight-bold">Cant.</label>
                              <input type="number" class="form-control form-control-sm" id="cantNewAsig" name="cantNewAsig">
                            </div>
                          </div>
                          <!--*************************** row *********************************-->
                          
                          <div class="form-group">
                            <label for="descNewAsig" class="col-form-label col-form-label-sm font-weight-bold">Descripcion:</label>
                            <input type="text" class="form-control form-control-sm" id="descNewAsig" readonly>
                          </div>
                          <!--*************************** Imputs *********************************-->
                          <div class="form-row">
                            <!--*************************** Imputs *********************************-->
                            <div class="form-group col-md-6">
                              <label for="marcaNewAsig" class="col-form-label col-form-label-sm font-weight-bold">Marca:</label>
                              <input type="text" class="form-control form-control-sm" id="marcaNewAsig" readonly>
                            </div>
                            <!--*************************** Imputs *********************************-->
                            <div class="form-group col-md-6">
                              <label for="afNewAsig" class="col-form-label col-form-label-sm font-weight-bold">AF/NC:</label>
                              <input type="text" class="form-control form-control-sm" id="afNewAsig" readonly>
                            </div>
                          </div>
                          <!--*************************** Imputs *********************************-->
                          <div class="form-group">
                            <label for="labelNewAsig" class="col-form-label col-form-label-sm font-weight-bold">Hostname:</label>
                            <input type="text" class="form-control form-control-sm" id="labelNewAsig" name="labelNewAsig">
                          </div>
                        </form>
                        <hr class="mt-0">
                        <!--*************************** row buttons *********************************-->
                        <div class="row">
                          <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-sm btn-danger" id="btnCleanEquiposTemp">
                              <i class="fa-regular fa-trash-can fa-sm"></i>
                              Limpiar todo
                            </button>  
                            <button type="button" class="btn btn-sm btn-primary" id="btnAddEquipoTemp">
                              <i class="fa-solid fa-arrow-turn-down fa-sm"></i>
                              Agregar
                            </button>
                          </div>
                        </div>
                        <!--*************************** end row buttons *********************************-->
                      </div>
                      <!--<<<<<<<<<<<<<<<<< end col <<<<<<<<<<<<<<<<<-->
                      <div class="col-md-8">
                        <h6 class="font-weight-bold text-primary">COMPONENTES:</h6>
                        <hr>
                        <div id="tablaMovTemp"></div>
                      </div>
                      <!--<<<<<<<<<<<<<<<<< end col <<<<<<<<<<<<<<<<<-->
                    </div>
                    <!--<<<<<<<<<<<<<<<<< end row card <<<<<<<<<<<<<<<<<-->
                  </div>
                </div>

              </div>
            </div>

          </div>
          <!--<<<<<<<<<<<<<<<<< end container fluid <<<<<<<<<<<<<<<<<-->
        </div>
        <!--<<<<<<<<<<<<<<<<< FIN DE CONTENIDO <<<<<<<<<<<<<<<<<-->

        <!-- Footer -->
        <?php include('../include/footer.php'); ?>
        <!-- End of Footer -->

      </div>  <!--<<<<<<<<<<<<<< FIN DE CONTENT WRAPPER <<<<<<<<<<<<<<<-->

    </div><!--<<<<<<<<<<<<<<<<<<< FIN DE WRAPPER   <<<<<<<<<<<<<<<<<<<<<-->

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('../include/scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tablaMovTemp').load("../componentes/tablaAsignacionTemp.php");
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#serieNewAsig').select2({
          width: 'resolve'
        });

        $('#empNewAsig').select2({
          width: 'resolve'
        });

        // para ver datos del Equipos
        $('#serieNewAsig').change(function() {
          $.ajax({
            url: '../../public/procesos/equipos/leerEquipo.php',
            type: 'POST',
            data: "idprod=" + $('#serieNewAsig').val(),
            success:function(r){
              var datos = $.parseJSON(r);
              $('#descNewAsig').val(datos['nomEquipo']);
              $('#marcaNewAsig').val(datos['marcaEquipo']);
              $('#afNewAsig').val(datos['tcodEquipo'] + '-' + datos['codEquipo']);
              //$('#codNewAsig').val(datos['idCategoria']);
            }
          })
        });

        // agregar equipo Movimiento Temp
        $('#btnAddEquipoTemp').click(function() {
          vacios = validarFrmVacio('formNewAsig');
          if(vacios > 0){
            Swal.fire({
              icon: 'warning',
              title: 'Advertencia',
              text: 'Debes llenar los campos!'
              })
            return false;
          }
          datos = $('#formNewAsig').serialize();
          $.ajax({
            url: '../procesos/asignacion/crearEquipoTemp.php',
            type: 'POST',
            data: datos,
            success:function(r){
              if (r==2) {
                //alertify.error('Ingrese un valor mayor');
                Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: 'Ingrese un valor mayor'
                })
              }else if(r==1){
                //alertify.error('Ingrese un valor menor');
                Swal.fire({
                  icon: 'warning',
                  title: 'Advertencia',
                  text: 'Ingrese un valor menor'
                })
              }else{
                $('#tablaMovTemp').load("../componentes/tablaAsignacionTemp.php");
              }
            }
          })
        });
        // --- Limpiar cesto de Equiupos -----------------------------
        $('#btnCleanEquiposTemp').click(function() {
          $.ajax({
            url: '../procesos/asignacion/eliminarTablaTemp.php',
            success:function(r){
              $('#tablaMovTemp').load("../componentes/tablaAsignacionTemp.php");
            }
          })
        });
      });
    </script>
    <script type="text/javascript">
      //script para quitar el equipo 
      function quitarEquipo(index){
        $.ajax({
          url: '../procesos/asignacion/eliminarEquipoTemp.php',
          type: 'POST',
          data: "ind=" + index,
          success:function(r){
            $('#tablaMovTemp').load("../componentes/tablaAsignacionTemp.php");

            Swal.fire({
              icon: 'success',
              title: 'Se quito un equipo',
              showConfirmButton: false,
              timer: 1500
            })
          }
        })
      }
      //scrip para guardar asignacion
      function crearAsignacion(){
        $.ajax({
    			url: '../procesos/asignacion/crearAsignacion.php',
    			success:function(r){
    				if (r > 0) {
              $('#tablaMovTemp').load("../componentes/tablaAsignacionTemp.php");
    					$('#formNewAsig')[0].reset();
    					
              Swal.fire({
                icon: 'success',
                title: 'Se asigno con éxito',
                showConfirmButton: false,
                timer: 1500
              }).then(function() {
                window.location = "/soporte_els/public/views/movimientos.php";
              })
              
    				}else if(r == 0){
    					
              Swal.fire({
                icon: 'warning',
                title: 'Advertencia',
                text: 'No agrego equipos'
              })

    				}else{
    					
              Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No se pudo Asignar equipo'
              })

    				}
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
