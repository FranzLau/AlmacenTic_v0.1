<!-- Modal NUEVO EMPLEADO-->
<div class="modal fade" id="modalNuevoEmpleado" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header px-5 py-3">
        <h5 class="modal-title" id="exampleModalCenterTitle">
          Registrar Empleado
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-5">
        <div class="row">
          <div class="col-sm-12">
            <!--******************   INICIO DEL FORMULARIO   *******************-->
            <form id="formNuevoEmpleado">
              <div class="form-group row">
                <label for="nombreEmpleado" class="col-md-3 col-form-label col-form-label-sm">Nombre:</label>
                <div class="col-md-5">
                  <input type="text" class="form-control form-control-sm font-weight-bold" id="nombreEmpleado" name="nombreEmpleado">
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
              <div class="form-group row">
                <label for="apellidoEmpleado" class="col-md-3 col-form-label col-form-label-sm">Apellidos:</label>
                <div class="col-md-5">
                  <input type="text" class="form-control form-control-sm font-weight-bold" id="apellidoEmpleado" name="apellidoEmpleado">
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
              <div class="form-group row">
                <label for="cargoEmpleado" class="col-sm-3 col-form-label col-form-label-sm">Cargo:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-sm font-weight-bold" id="cargoEmpleado" name="cargoEmpleado">
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
              <div class="form-group row">
                <label for="gerenciaEmpleado" class="col-sm-3 col-form-label col-form-label-sm">Gerencia:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-sm font-weight-bold" id="gerenciaEmpleado" name="gerenciaEmpleado">
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label col-form-label-sm">Grupo:</label>
                <div class="col-sm-4">
                  <div class="radio">
                    <div>
                      <input type="radio" name="grupoEmpleado" id="grupoEmpleado1" value="1" checked>
                      <label for="grupoEmpleado1">Contratado</label>
                    </div>
                    <div>
                      <input type="radio" name="grupoEmpleado" id="grupoEmpleado2" value="2">
                      <label for="grupoEmpleado2">Practicante</label>
                    </div>
                    <div>
                      <input type="radio" name="grupoEmpleado" id="grupoEmpleado3" value="3">
                      <label for="grupoEmpleado3">Tercero</label>
                    </div>
                  </div>
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
              <div class="form-group row mb-0">
                <label for="estadoEmpleado" class="col-sm-3 col-form-label col-form-label-sm">Estado:</label>
                <div class="col-sm-4">
                  <div class="radio">
                    <input type="radio" name="estadoEmpleado" id="estadoEmpleado1" value="1" checked>
                    <label for="estadoEmpleado1">Activo</label>

                    <input type="radio" name="estadoEmpleado" id="estadoEmpleado2" value="2">
                    <label for="estadoEmpleado2">No Activo</label>
                  </div>
                </div>
              </div>
            </form>
            <!--*****************************   FIN DEL FORMULARIO   *************************-->
          </div>
        </div>
      </div>
      <div class="modal-footer px-5">

        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
          <i class="fa-solid fa-xmark text-white-50"></i>
          Cancelar
        </button>
        <button type="button" class="btn btn-primary btn-sm" id="btnGuardarEmpleado">
          <i class="fa-solid fa-floppy-disk text-white-50"></i>
          Guardar
        </button>
      </div>
    </div>
  </div>
</div>
