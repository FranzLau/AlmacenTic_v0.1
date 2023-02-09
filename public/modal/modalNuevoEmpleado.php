<!-- Modal NUEVO EMPLEADO-->
<div class="modal fade" id="modalNuevoEmpleado" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header px-4">
        <h5 class="modal-title" id="exampleModalCenterTitle">
          Nuevo Empleado
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-4">
        <div class="row">
          <div class="col-sm-12">
            <!--******************   INICIO DEL FORMULARIO   *******************-->
            <form id="formNuevoEmpleado">
              <p class="font-weight-bold">Datos Principales:</p>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nombreEmpleado" class="col-form-label col-form-label-sm font-weight-bold">Nombre:</label>
                  <input type="text" class="form-control form-control-sm" id="nombreEmpleado" name="nombreEmpleado">
                </div>
                <!--<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                <div class="form-group col-md-6">
                  <label for="apellidoEmpleado" class="col-form-label col-form-label-sm font-weight-bold">Apellidos:</label>
                  <input type="text" class="form-control form-control-sm" id="apellidoEmpleado" name="apellidoEmpleado">
                </div>
              </div>
              <div class="form-group">
                <label for="cargoEmpleado" class="col-form-label col-form-label-sm font-weight-bold">Cargo:</label>
                <input type="text" class="form-control form-control-sm" id="cargoEmpleado" name="cargoEmpleado">
              </div>
              <hr>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>-->
              <p class="font-weight-bold">Datos de Area:</p>
              <div class="form-group">
                <label for="areaEmpleado" class="col-form-label col-form-label-sm font-weight-bold">Area:</label>
                <input type="text" class="form-control form-control-sm" id="areaEmpleado" name="areaEmpleado">
              </div>
              <div class="form-group">
                <label for="gerenciaEmpleado" class="col-form-label col-form-label-sm font-weight-bold">Gerencia:</label>
                <input type="text" class="form-control form-control-sm" id="gerenciaEmpleado" name="gerenciaEmpleado">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="grupoEmpleado" class="col-form-label col-form-label-sm font-weight-bold">Grupo:</label>
                  <select class="custom-select custom-select-sm" id="grupoEmpleado" name="grupoEmpleado">
                    <option selected disabled>Elegir...</option>
                    <option value="1">Contratado</option>
                    <option value="2">Practicante</option>
                    <option value="3">Tercero</option>
                  </select>
                </div>
                <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                <div class="form-group col-md-6">
                  <label for="estadoEmpleado" class="col-form-label col-form-label-sm font-weight-bold">Estado:</label>
                  <select class="custom-select custom-select-sm" id="estadoEmpleado" name="estadoEmpleado">
                    <option selected disabled>Elegir...</option>
                    <option value="1">Activo</option>
                    <option value="2">No Activo</option>
                  </select>
                </div>
              </div>
            </form>
            <!--*****************************   FIN DEL FORMULARIO   *************************-->
          </div>
        </div>
      </div>
      <div class="modal-footer px-4">

        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
          <i class="fa-solid fa-xmark fa-sm text-white-50 mr-2"></i>Cancelar
        </button>
        <button type="button" class="btn btn-success btn-sm" id="btnGuardarEmpleado">
          <i class="fa-solid fa-check fa-sm text-white-50 mr-2"></i>Guardar
        </button>
      </div>
    </div>
  </div>
</div>
