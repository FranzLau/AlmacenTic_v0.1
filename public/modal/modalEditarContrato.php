<!-- Modal -->
<div class="modal fade" id="modalEditarContrato" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header px-5 py-4 bg-gradient-warning">
        <h5 class="modal-title" id="exampleModalCenterTitle">Editar Contrato</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-4">
        <form id="formEditarContrato">
          <input type="text" hidden="" name="idEditarContrato" id="idEditarContrato">
          <div class="form-group">
            <label for="nomEditarContrato" class="col-form-label col-form-label-sm">Nombre:</label>
            <input type="text" class="form-control form-control-sm font-weight-bold" id="nomEditarContrato" name="nomEditarContrato">
          </div>
          <div class="form-group">
            <label for="adquiEditarContrato" class="col-form-label col-form-label-sm">Adquisicion:</label>
            <input type="date" class="form-control form-control-sm font-weight-bold" id="adquiEditarContrato" name="adquiEditarContrato">
          </div>
          <div class="form-group">
            <label for="garaEditarContrato" class="col-form-label col-form-label-sm">Garantia:</label>
            <input type="text" class="form-control form-control-sm font-weight-bold" id="garaEditarContrato" name="garaEditarContrato">
          </div>
          <div class="form-group">
            <label for="provEditarContrato" class="col-form-label col-form-label-sm">Proveedor:</label>
            <input type="text" class="form-control form-control-sm font-weight-bold" id="provEditarContrato" name="provEditarContrato">
          </div>
        </form>
      </div>
      <div class="modal-footer px-4">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
          <i class="fa-solid fa-xmark fa-sm text-white-50 mr-2"></i>Cancelar
        </button>
        <button type="button" class="btn btn-warning btn-sm" id="btnEditarContrato">
          <i class="fa-solid fa-pen-to-square fa-sm text-white-50 mr-2"></i>Guardar Cambios
        </button>
      </div>
    </div>
  </div>
</div>