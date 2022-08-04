<!-- Modal -->
<div class="modal fade" id="modalEditarContrato" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header px-5 py-4 bg-gradient-warning">
        <h5 class="modal-title" id="exampleModalCenterTitle">Editar Contrato</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-5 my-4">
        <div class="row">
          <div class="col-sm-12">
            <form id="formEditarContrato">
              <input type="text" hidden="" name="idEditarContrato" id="idEditarContrato">
              <div class="form-group row">
                <label for="nomEditarContrato" class="col-md-3 col-form-label col-form-label-sm">Nombre:</label>
                <div class="col-md-9">
                  <input type="text" class="form-control form-control-sm font-weight-bold" id="nomEditarContrato" name="nomEditarContrato">
                </div>
              </div>
              <div class="form-group row">
                <label for="adquiEditarContrato" class="col-md-3 col-form-label col-form-label-sm">Adquisicion:</label>
                <div class="col-md-9">
                  <input type="date" class="form-control form-control-sm font-weight-bold" id="adquiEditarContrato" name="adquiEditarContrato">
                </div>
              </div>
              <div class="form-group row">
                <label for="garaEditarContrato" class="col-md-3 col-form-label col-form-label-sm">Garantia:</label>
                <div class="col-md-9">
                  <input type="text" class="form-control form-control-sm font-weight-bold" id="garaEditarContrato" name="garaEditarContrato">
                </div>
              </div>
              <div class="form-group row">
                <label for="provEditarContrato" class="col-md-3 col-form-label col-form-label-sm">Proveedor:</label>
                <div class="col-md-9">
                  <input type="text" class="form-control form-control-sm font-weight-bold" id="provEditarContrato" name="provEditarContrato">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-times mr-2 fa-sm text-white-50"></i>Cancelar</button>
        <button type="button" class="btn btn-warning btn-sm" id="btnEditarContrato"><i class="fas fa-pen mr-2 fa-sm text-white-50"></i>Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>