<!-- Modal EDITAR EMPLEADO-->
<div class="modal fade" id="modalEditarEmpleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header px-5 py-4 bg-gradient-warning">
        <h5 class="modal-title" id="exampleModalCenterTitle">
          Editar Empleado
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-5 my-4">
        <div class="row">
          <div class="col-sm-12">
            <form id="formEditarEmpleado">
              <input type="text" id="idEditarEmpleado" name="idEditarEmpleado" hidden>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nomEditarEmpleado" class="col-form-label col-form-label-sm">Nombres:</label>
                  <input type="text" class="form-control form-control-sm font-weight-bold" id="nomEditarEmpleado" name="nomEditarEmpleado">
                </div>
                <div class="form-group col-md-6">
                  <label for="apeEditarEmpleado" class="col-form-label col-form-label-sm">Apellidos:</label>
                  <input type="text" class="form-control form-control-sm font-weight-bold" id="apeEditarEmpleado" name="apeEditarEmpleado">
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
              <div class="form-group">
                <label for="cargoEditarEmpleado" class="col-form-label col-form-label-sm">Cargo:</label>
                <input type="text" class="form-control form-control-sm font-weight-bold" id="cargoEditarEmpleado" name="cargoEditarEmpleado">
              </div>
              <div class="form-group">
                <label for="areaEditarEmpleado" class="col-form-label col-form-label-sm">Area:</label>
                <input type="text" class="form-control form-control-sm font-weight-bold" id="areaEditarEmpleado" name="areaEditarEmpleado">
              </div>
              <div class="form-group">
                <label for="gerenciaEditarEmpleado" class="col-form-label col-form-label-sm">Gerencia:</label>
                <input type="text" class="form-control form-control-sm font-weight-bold" id="gerenciaEditarEmpleado" name="gerenciaEditarEmpleado">
              </div>
              <div class="form-group">
                <label for="" class="col-form-label col-form-label-sm">Grupo:</label>
                <div class="radio">
                  <div class="radio-info">
                    <input type="radio" name="grupoEditarEmpleado" id="grupoEditarEmpleado1" value="1">
                    <label for="grupoEditarEmpleado1">Contratado</label>
                  </div>
                  <div class="radio-info">
                    <input type="radio" name="grupoEditarEmpleado" id="grupoEditarEmpleado2" value="2">
                    <label for="grupoEditarEmpleado2">Practicante</label>
                  </div>
                  <div class="radio-info">
                    <input type="radio" name="grupoEditarEmpleado" id="grupoEditarEmpleado3" value="3">
                    <label for="grupoEditarEmpleado3">Tercero</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="estadoEditarEmpleado" class="col-form-label col-form-label-sm">Estado:</label>
                <div class="radio">
                  <div class="radio-info">
                    <input type="radio" name="estadoEditarEmpleado" id="estadoEditarEmpleado1" value="1">
                    <label for="estadoEditarEmpleado1">Activo</label>
                  </div>
                  <div class="radio-info">
                    <input type="radio" name="estadoEditarEmpleado" id="estadoEditarEmpleado2" value="2">
                    <label for="estadoEditarEmpleado2">No Activo</label>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer px-5">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
          <i class="fa-solid fa-xmark fa-sm text-white-50 mr-2"></i>Cancelar
        </button>
        <button type="button" class="btn btn-warning btn-sm" id="btnEditarEmpleado">
          <i class="fa-solid fa-pen-to-square fa-sm text-white-50 mr-2"></i>Guardar Cambios
        </button>
      </div>
    </div>
  </div>
</div>
