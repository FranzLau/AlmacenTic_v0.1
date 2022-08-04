<!-- Modal EDITAR EMPLEADO-->
<div class="modal fade" id="modalEditarEmpleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
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
              <div class="form-group row">
                <label for="nomEditarEmpleado" class="col-md-3 col-form-label col-form-label-sm">Nombres:</label>
                <div class="col-md-5">
                  <input type="text" class="form-control form-control-sm font-weight-bold" id="nomEditarEmpleado" name="nomEditarEmpleado">
                </div>
              </div>
              <div class="form-group row">
                <label for="apeEditarEmpleado" class="col-md-3 col-form-label col-form-label-sm">Apellidos:</label>
                <div class="col-md-5">
                  <input type="text" class="form-control form-control-sm font-weight-bold" id="apeEditarEmpleado" name="apeEditarEmpleado">
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
              <div class="form-group row">
                <label for="cargoEditarEmpleado" class="col-md-3 col-form-label col-form-label-sm">Cargo:</label>
                <div class="col-md-9">
                  <input type="text" class="form-control form-control-sm font-weight-bold" id="cargoEditarEmpleado" name="cargoEditarEmpleado">
                </div>
              </div>
              <div class="form-group row">
                <label for="gerenciaEditarEmpleado" class="col-md-3 col-form-label col-form-label-sm">Gerencia:</label>
                <div class="col-md-9">
                  <input type="text" class="form-control form-control-sm font-weight-bold" id="gerenciaEditarEmpleado" name="gerenciaEditarEmpleado">
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-md-3 col-form-label col-form-label-sm">Grupo:</label>
                    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                <div class="col-md-5">
                  <div class="radio">
                    <div>
                      <input type="radio" name="grupoEditarEmpleado" id="grupoEditarEmpleado1" value="1">
                      <label for="grupoEditarEmpleado1">Contratado</label>
                    </div>
                    <div>
                      <input type="radio" name="grupoEditarEmpleado" id="grupoEditarEmpleado2" value="2">
                      <label for="grupoEditarEmpleado2">Practicante</label>
                    </div>
                    <div>
                      <input type="radio" name="grupoEditarEmpleado" id="grupoEditarEmpleado3" value="3">
                      <label for="grupoEditarEmpleado3">Tercero</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="estadoEditarEmpleado" class="col-md-3 col-form-label col-form-label-sm">Estado:</label>
                  <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                <div class="col-md-5">
                  <div class="radio">
                    <div>
                      <input type="radio" name="estadoEditarEmpleado" id="estadoEditarEmpleado1" value="1">
                      <label for="estadoEditarEmpleado1">Activo</label>
                    </div>
                    <div>
                      <input type="radio" name="estadoEditarEmpleado" id="estadoEditarEmpleado2" value="2">
                      <label for="estadoEditarEmpleado2">No Activo</label>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
          <i class="fa-solid fa-xmark text-white-50"></i>
          Cancelar
        </button>
        <button type="button" class="btn btn-warning btn-sm" id="btnEditarEmpleado">
          <i class="fa-solid fa-pen-to-square text-white-50"></i>
          Guardar Cambios
        </button>
      </div>
    </div>
  </div>
</div>
