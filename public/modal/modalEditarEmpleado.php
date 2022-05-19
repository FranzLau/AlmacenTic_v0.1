<!-- Modal EDITAR EMPLEADO-->
<div class="modal fade" id="modalEditarEmpleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content p-3">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Editar Empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <form id="formEditarEmpleado">
              <input type="text" id="idEditarEmpleado" name="idEditarEmpleado" hidden>
              <div class="row">
                <div class="col-md-12">
                  <label class="col-form-label font-weight-bold">Información Personal:</label>
                  <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="nomEditarEmpleado" class="col-form-label col-form-label-sm">Nombres:</label>
                      <input type="text" class="form-control form-control-sm" id="nomEditarEmpleado" name="nomEditarEmpleado">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="apeEditarEmpleado" class="col-sm-3 col-form-label col-form-label-sm">Apellidos:</label>
                      <input type="text" class="form-control form-control-sm" id="apeEditarEmpleado" name="apeEditarEmpleado">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label class="col-form-label font-weight-bold">Información de Empresa:</label>
                  <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                  <div class="form-group">
                    <label for="cargoEditarEmpleado" class="col-form-label col-form-label-sm">Cargo:</label>
                    <input type="text" class="form-control form-control-sm" id="cargoEditarEmpleado" name="cargoEditarEmpleado">
                  </div>
                  <div class="form-group">
                    <label for="gerenciaEditarEmpleado" class="col-form-label col-form-label-sm">Gerencia:</label>
                    <input type="text" class="form-control form-control-sm" id="gerenciaEditarEmpleado" name="gerenciaEditarEmpleado">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="" class="col-form-label col-form-label-sm">Grupo de Trabajo:</label>
                    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="grupoEditarEmpleado" id="grupoEditarEmpleado1" value="1">
                      <label class="form-check-label" for="grupoEditarEmpleado1">
                        Contratado
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="grupoEditarEmpleado" id="grupoEditarEmpleado2" value="2">
                      <label class="form-check-label" for="grupoEditarEmpleado2">
                        Tercero
                      </label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="estadoEditarEmpleado" class="col-form-label col-form-label-sm">Estado:</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="estadoEditarEmpleado" id="estadoEditarEmpleado1" value="1">
                      <label class="form-check-label" for="estadoEditarEmpleado1">
                        Activo
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="estadoEditarEmpleado" id="estadoEditarEmpleado2" value="2">
                      <label class="form-check-label" for="estadoEditarEmpleado2">
                        No Activo
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-sm" id="btnEditarEmpleado"><i class="fas fa-pen mr-2 fa-sm text-white-50"></i>Editar</button>
      </div>
    </div>
  </div>
</div>
