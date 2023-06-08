<!-- Modal -->
<div class="modal fade" id="modalEditarContrato" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalCenterTitle">Editar Contrato</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formEdContrato">
          <input type="text" hidden="" name="idEdContrato" id="idEdContrato">
          <div class="form-row">
            <div class="form-group col-md-8">
              <label for="nomEdContrato" class="col-form-label col-form-label-sm font-weight-bold">Nombre:</label>
              <input type="text" class="form-control form-control-sm" id="nomEdContrato" name="nomEdContrato">
            </div>
            <div class="form-group col-md-4">
              <label for="fechEdContrato" class="col-form-label col-form-label-sm font-weight-bold">Fecha:</label>
              <input type="date" class="form-control form-control-sm" id="fechEdContrato" name="fechEdContrato">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="pedEdContrato" class="col-form-label col-form-label-sm font-weight-bold">Pedido de Compra:</label>
              <input type="text" class="form-control form-control-sm" id="pedEdContrato" name="pedEdContrato">
            </div>
            <div class="form-group col-md-6">
              <label for="numEdContrato" class="col-form-label col-form-label-sm font-weight-bold">Numero de Contrato:</label>
              <input type="text" class="form-control form-control-sm" id="numEdContrato" name="numEdContrato">
            </div>
          </div>
          <div class="form-group">
            <label for="provEdContrato" class="col-form-label col-form-label-sm font-weight-bold">Proveedor:</label>
            <input type="text" class="form-control form-control-sm" id="provEdContrato" name="provEdContrato">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="garEdContrato" class="col-form-label col-form-label-sm font-weight-bold">Garantia:</label>
              <input type="text" class="form-control form-control-sm" id="garEdContrato" name="garEdContrato">
            </div>
            <div class="form-group col-md-6">
              <label for="tipEdContrato" class="col-form-label col-form-label-sm font-weight-bold">Tipo:</label>
              <select class="custom-select custom-select-sm" id="tipEdContrato" name="tipEdContrato">
                <option selected disabled>Elegir...</option>
                <option value="1">Arrendamiento</option>
                <option value="2">Propio</option>
              </select>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
          <i class="fa-solid fa-xmark fa-sm text-white-50 mr-2"></i>Cancelar
        </button>
        <button type="button" class="btn btn-warning btn-sm" id="btnEditarContrato">
          <i class="fa-sharp fa-solid fa-floppy-disk fa-sm text-white-50 mr-2"></i>Guardar Cambios
        </button>
      </div>
    </div>
  </div>
</div>