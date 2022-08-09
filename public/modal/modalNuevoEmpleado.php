<!-- Modal NUEVO EMPLEADO-->
<div class="modal fade" id="modalNuevoEmpleado" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header px-5 py-4">
        <h5 class="modal-title" id="exampleModalCenterTitle">
          Nuevo Empleado
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-5 my-4">
        <div class="row">
          <div class="col-sm-12">
            <!--******************   INICIO DEL FORMULARIO   *******************-->
            <form id="formNuevoEmpleado">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nombreEmpleado" class="col-form-label col-form-label-sm">Nombre:</label>
                  <input type="text" class="form-control form-control-sm font-weight-bold" id="nombreEmpleado" name="nombreEmpleado">
                </div>
                <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                <div class="form-group col-md-6">
                  <label for="apellidoEmpleado" class="col-form-label col-form-label-sm">Apellidos:</label>
                  <input type="text" class="form-control form-control-sm font-weight-bold" id="apellidoEmpleado" name="apellidoEmpleado">
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
              <div class="form-group">
                <label for="cargoEmpleado" class="col-form-label col-form-label-sm">Cargo:</label>
                <input type="text" class="form-control form-control-sm font-weight-bold" id="cargoEmpleado" name="cargoEmpleado">
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
              <div class="form-group">
                <label for="areaEmpleado" class="col-form-label col-form-label-sm">Area:</label>
                <input type="text" class="form-control form-control-sm font-weight-bold" id="areaEmpleado" name="areaEmpleado">
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
              <div class="form-group">
                <label for="gerenciaEmpleado" class="col-form-label col-form-label-sm">Gerencia:</label>
                <input type="text" class="form-control form-control-sm font-weight-bold" id="gerenciaEmpleado" name="gerenciaEmpleado">
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
              <div class="form-group">
                <label for="" class="col-form-label col-form-label-sm">Grupo:</label>
                <div class="radio">
                  <div class="radio-info">
                    <input type="radio" name="grupoEmpleado" id="grupoEmpleado1" value="1" checked>
                    <label for="grupoEmpleado1">Contratado</label>
                  </div>
                  <div class="radio-info">
                    <input type="radio" name="grupoEmpleado" id="grupoEmpleado2" value="2">
                    <label for="grupoEmpleado2">Practicante</label>
                  </div>
                  <div class="radio-info">
                    <input type="radio" name="grupoEmpleado" id="grupoEmpleado3" value="3">
                    <label for="grupoEmpleado3">Tercero</label>
                  </div>
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
              <div class="form-group mb-0">
                <label for="estadoEmpleado" class="col-form-label col-form-label-sm">Estado:</label>
                <div class="radio">
                  <div class="radio-info">
                    <input type="radio" name="estadoEmpleado" id="estadoEmpleado1" value="1" checked>
                    <label for="estadoEmpleado1">Activo</label>
                  </div>
                  
                  <div class="radio-info">
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
          <i class="fa-solid fa-xmark fa-sm text-white-50 mr-2"></i>Cancelar
        </button>
        <button type="button" class="btn btn-success btn-sm" id="btnGuardarEmpleado">
          <i class="fa-solid fa-check fa-sm text-white-50 mr-2"></i>Guardar
        </button>
      </div>
    </div>
  </div>
</div>
