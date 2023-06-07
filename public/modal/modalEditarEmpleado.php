<!-- Modal EDITAR EMPLEADO-->
<div class="modal fade" id="modalEditarEmpleado" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary">
          Editar Empleado
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formEditarEmpleado">
          <input type="text" id="idEditarEmpleado" name="idEditarEmpleado" hidden>
          <div class="row">
            <div class="col-md-4">
              <p class="font-weight-bold">Datos Principales:</p>
            </div>
            <div class="col-md-8">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nomEditarEmpleado" class="col-form-label col-form-label-sm font-weight-bold">Nombres:</label>
                  <input type="text" class="form-control form-control-sm" id="nomEditarEmpleado" name="nomEditarEmpleado">
                </div>
                <div class="form-group col-md-6">
                  <label for="apeEditarEmpleado" class="col-form-label col-form-label-sm font-weight-bold">Apellidos:</label>
                  <input type="text" class="form-control form-control-sm" id="apeEditarEmpleado" name="apeEditarEmpleado">
                </div>
              </div>
              <div class="form-group">
                <label for="cargoEditarEmpleado" class="col-form-label col-form-label-sm font-weight-bold">Cargo:</label>
                <input type="text" class="form-control form-control-sm" id="cargoEditarEmpleado" name="cargoEditarEmpleado">
              </div>
            </div>
          </div>
          <hr><!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
          <div class="row">
            <div class="col-md-4">
              <p class="font-weight-bold">Datos de Empresa:</p>
            </div>
            <div class="col-md-8">
              <div class="form-group">
                <label for="areaEditarEmpleado" class="col-form-label col-form-label-sm font-weight-bold">Area:</label>
                <input type="text" class="form-control form-control-sm" id="areaEditarEmpleado" name="areaEditarEmpleado">
              </div>
              <div class="form-group">
                <label for="gerenciaEditarEmpleado" class="col-form-label col-form-label-sm font-weight-bold">Gerencia:</label>
                <input type="text" class="form-control form-control-sm" id="gerenciaEditarEmpleado" name="gerenciaEditarEmpleado">
              </div>
              <div class="form-row">
                <div class="form-group col-md-8">
                  <label for="correoEditarEmpleado" class="col-form-label col-form-label-sm">Correo:</label>
                  <input type="text" class="form-control form-control-sm" id="correoEditarEmpleado" name="correoEditarEmpleado">
                </div>
                <div class="form-group col-md-4">
                  <label for="telEditarEmpleado" class="col-form-label col-form-label-sm">Telefono:</label>
                  <input type="text" class="form-control form-control-sm" id="telEditarEmpleado" name="telEditarEmpleado">
                </div>
              </div>
              <div class="form-group">
                <label for="estadoEmpleado" class="col-form-label col-form-label-sm font-weight-bold">Estado:</label>
                <select class="custom-select custom-select-sm" name="estadoEditarEmpleado" id="estadoEditarEmpleado">
                  <option selected disabled>Elegir...</option>
                  <option value="1">Activo</option>
                  <option value="2">No Activo</option>
                </select>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
          <i class="fa-solid fa-xmark fa-sm text-white-50 mr-2"></i>Cancelar
        </button>
        <button type="button" class="btn btn-warning btn-sm" id="btnEditarEmpleado">
          <i class="fa-sharp fa-solid fa-floppy-disk fa-sm text-white-50 mr-2"></i>Guardar Cambios
        </button>
      </div>
    </div>
  </div>
</div>
