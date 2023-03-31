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
          <div class="form-group">
            <label for="descripcionContrato" class="col-form-label col-form-label-sm font-weight-bold">Descripción :</label>
            <input type="text" class="form-control form-control-sm" name="descripcionContrato" id="descripcionContrato">
          </div>
          <div class="form-group">
            <label for="adquisicionContrato" class="col-form-label col-form-label-sm font-weight-bold">Adquisicion:</label>
            <input type="date" class="form-control form-control-sm" name="adquisicionContrato" id="adquisicionContrato">
          </div>
          <div class="form-group">
            <label for="garantiaContrato" class="col-form-label col-form-label-sm font-weight-bold">Garantia:</label>
            <input type="text" class="form-control form-control-sm" name="garantiaContrato" id="garantiaContrato" placeholder="X años">
          </div>
          <div class="form-group">
            <label for="proveedorContrato" class="col-form-label col-form-label-sm font-weight-bold">Proveedor:</label>
            <input type="text" class="form-control form-control-sm" name="proveedorContrato" id="proveedorContrato">
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
