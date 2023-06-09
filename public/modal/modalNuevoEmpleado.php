<!-- Modal NUEVO EMPLEADO-->
<div class="modal fade" id="modalNuevoEmpleado" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalCenterTitle">
          Registra Empleado
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--******************   INICIO DEL FORMULARIO   *******************-->
        <form id="formNuevoEmpleado">
          <div class="row">
            <div class="col-md-4 pt-2">
              <p class="font-weight-bold">Datos Principales:</p>
            </div>
            <div class="col-md-8">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nombreEmpleado" class="col-form-label col-form-label-sm">Nombres:</label>
                  <input type="text" class="form-control form-control-sm" id="nombreEmpleado" name="nombreEmpleado">
                </div>
                <!--<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                <div class="form-group col-md-6">
                  <label for="apellidoEmpleado" class="col-form-label col-form-label-sm">Apellidos:</label>
                  <input type="text" class="form-control form-control-sm" id="apellidoEmpleado" name="apellidoEmpleado">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-8">
                  <label for="correoEmpleado" class="col-form-label col-form-label-sm">Correo:</label>
                  <input type="text" class="form-control form-control-sm" id="correoEmpleado" name="correoEmpleado">
                </div>
                <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                <div class="form-group col-md-4">
                  <label for="telEmpleado" class="col-form-label col-form-label-sm">Telefono:</label>
                  <input type="text" class="form-control form-control-sm" id="telEmpleado" name="telEmpleado">
                </div>
              </div>
              
            </div>
          </div>
          <hr>
          <!--<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>-->
          <div class="row">
            <div class="col-md-4 pt-2">
              <p class="font-weight-bold">Datos de Empresa:</p>
            </div>
            <div class="col-md-8">
              <div class="form-group">
                <label for="cargoEmpleado" class="col-form-label col-form-label-sm">Cargo:</label>
                <select class="custom-select custom-select-sm" id="cargoEmpleado" name="cargoEmpleado" style="width:100%">
                    <option selected disabled>Elegir...</option>
                    <?php $ctg = $con->query("SELECT * FROM cargo");
                        while ($row = $ctg->fetch_assoc()) {
                          echo "<option value='".$row['id_cargo']."' ";
                          echo ">";
                          echo $row['nom_cargo'];
                          echo "</option>";
                        }
                    ?>
                  </select>
              </div>
              <div class="form-group">
                <label for="areaEmpleado" class="col-form-label col-form-label-sm">Area:</label>
                <select class="custom-select custom-select-sm" id="areaEmpleado" name="areaEmpleado" style="width:100%">
                    <option selected disabled>Elegir...</option>
                    <?php $ctg = $con->query("SELECT * FROM area");
                        while ($row = $ctg->fetch_assoc()) {
                          echo "<option value='".$row['id_area']."' ";
                          echo ">";
                          echo $row['nom_area'];
                          echo "</option>";
                        }
                    ?>
                  </select>
              </div>
              <div class="form-group">
                <label for="gerenciaEmpleado" class="col-form-label col-form-label-sm">Gerencia:</label>
                <select class="custom-select custom-select-sm" id="gerenciaEmpleado" name="gerenciaEmpleado" style="width:100%">
                    <option selected disabled>Elegir...</option>
                    <?php $ctg = $con->query("SELECT * FROM gerencia");
                        while ($row = $ctg->fetch_assoc()) {
                          echo "<option value='".$row['id_gerencia']."' ";
                          echo ">";
                          echo $row['nom_gerencia'];
                          echo "</option>";
                        }
                    ?>
                  </select>
              </div>
              
              <div class="form-group">
                <label for="estadoEmpleado" class="col-form-label col-form-label-sm">Estado:</label>
                <select class="custom-select custom-select-sm" id="estadoEmpleado" name="estadoEmpleado">
                  <option selected disabled>Elegir...</option>
                  <option value="1">Activo</option>
                  <option value="2">No Activo</option>
                </select>
              </div>
            </div>
          </div>              
        </form>
        <!--*****************************   FIN DEL FORMULARIO   *************************-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
          <i class="fa-solid fa-xmark fa-sm text-white-50 mr-2"></i>Cancelar
        </button>
        <button type="button" class="btn btn-primary btn-sm" id="btnGuardarEmpleado">
          <i class="fa-sharp fa-solid fa-floppy-disk fa-sm text-white-50 mr-2"></i>Guardar
        </button>
      </div>
    </div>
  </div>
</div>
