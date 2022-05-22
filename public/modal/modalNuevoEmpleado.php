<!-- Modal NUEVO EMPLEADO-->
<div class="modal fade" id="modalNuevoEmpleado" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content p-3">
      <div class="modal-header">
        <h6 class="modal-title font-weight-bold" id="exampleModalCenterTitle">

          REGISTRO NUEVO EMPLEADO
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <!--******************   INICIO DEL FORMULARIO   *******************-->
            <form id="formNuevoEmpleado">
              <div class="row">
                <div class="col-md-12">
                  <label class="col-form-label font-weight-bold">Información Personal:</label>
                  <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="nombreEmpleado" class="col-form-label col-form-label-sm">Nombre:</label>
                      <input type="text" class="form-control form-control-sm" id="nombreEmpleado" name="nombreEmpleado">
                    </div>
                    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                    <div class="form-group col-md-6">
                      <label for="apellidoEmpleado" class="col-form-label col-form-label-sm">Apellidos:</label>
                      <input type="text" class="form-control form-control-sm" id="apellidoEmpleado" name="apellidoEmpleado">
                    </div>
                    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-12">
                  <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                  <label class="col-form-label font-weight-bold">Información de Empresa:</label>
                  <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                  <div class="form-group">
                    <label for="cargoEmpleado" class="col-form-label col-form-label-sm">Cargo:</label>
                    <input type="text" class="form-control form-control-sm" id="cargoEmpleado" name="cargoEmpleado">
                  </div>
                  <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                  <div class="form-group">
                    <label for="gerenciaEmpleado" class="col-form-label col-form-label-sm">Gerencia:</label>
                    <input type="text" class="form-control form-control-sm" id="gerenciaEmpleado" name="gerenciaEmpleado">
                  </div>
                  <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                  
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="" class="col-form-label col-form-label-sm">Grupo de Trabajo:</label><br>
                    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="grupoEmpleado" id="grupoEmpleado1" value="1" checked>
                      <label class="form-check-label" for="grupoEmpleado1">
                        Contratado
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="grupoEmpleado" id="grupoEmpleado2" value="2">
                      <label class="form-check-label" for="grupoEmpleado2">
                        Tercero
                      </label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="estadoEmpleado" class="col-form-label col-form-label-sm">Estado:</label><br>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="estadoEmpleado" id="estadoEmpleado1" value="1" checked>
                      <label class="form-check-label" for="estadoEmpleado1">
                        Activo
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="estadoEmpleado" id="estadoEmpleado2" value="2">
                      <label class="form-check-label" for="estadoEmpleado2">
                        No Activo
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              
            </form>
            <!--*****************************   FIN DEL FORMULARIO   *************************-->
          </div>
        </div>
      </div>
      <div class="modal-footer">

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
