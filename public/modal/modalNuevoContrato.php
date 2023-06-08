<!-- Modal -->
<div class="modal fade" id="modalCrearContrato" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalCenterTitle">Nuevo Contrato</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formNuevoContrato">
          <div class="form-row">
            <div class="form-group col-md-8">
              <label for="nomContrato" class="col-form-label col-form-label-sm font-weight-bold">Nombre:</label>
              <input type="text" class="form-control form-control-sm" name="nomContrato" id="nomContrato">
            </div>
            <div class="form-group col-md-4">
              <label for="fechaContrato" class="col-form-label col-form-label-sm font-weight-bold">Fecha:</label>
              <input type="date" class="form-control form-control-sm" name="fechaContrato" id="fechaContrato">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="pedContrato" class="col-form-label col-form-label-sm font-weight-bold">Pedido de Compra:</label>
              <input type="text" class="form-control form-control-sm" name="pedContrato" id="pedContrato">
            </div>
            <div class="form-group col-md-6">
              <label for="numContrato" class="col-form-label col-form-label-sm font-weight-bold">Numero de Contrato:</label>
              <input type="text" class="form-control form-control-sm" name="numContrato" id="numContrato">
            </div>
          </div>
          <div class="form-group">
            <label for="provContrato" class="col-form-label col-form-label-sm font-weight-bold">Proveedor:</label>
            <input type="text" class="form-control form-control-sm" name="provContrato" id="provContrato">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="garContrato" class="col-form-label col-form-label-sm font-weight-bold">Garantia:</label>
              <input type="text" class="form-control form-control-sm" name="garContrato" id="garContrato" placeholder="X años">
            </div>
            <div class="form-group col-md-6">
              <label for="tipoContrato" class="col-form-label col-form-label-sm font-weight-bold">Tipo:</label>
              <select class="custom-select custom-select-sm" id="tipoContrato" name="tipoContrato" required>
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
        <button type="button" class="btn btn-primary btn-sm" id="btnAgregarContrato">
          <i class="fa-sharp fa-solid fa-floppy-disk fa-sm text-white-50 mr-2"></i>Guardar
        </button>
      </div>
    </div>
  </div>
</div>
