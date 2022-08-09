<!-- Modal -->
<div class="modal fade" id="modalEditarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header px-5 py-4 bg-gradient-warning">
        <h5 class="modal-title" id="exampleModalCenterTitle">Editar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-5 my-4">
        <div class="row">
          <div class="col-sm-12">
            <form id="formEditarCategoria">
              <input type="text" hidden="" name="idEditarCategoria" id="idEditarCategoria">
              <div class="form-group">
                <label for="nomEditarCategoria" class="col-form-label col-form-label-sm">Nombre:</label>
                <input type="text" class="form-control form-control-sm font-weight-bold" id="nomEditarCategoria" name="nomEditarCategoria">
              </div>
              <div class="form-group">
                <label for="descEditarCategoria" class="col-form-label col-form-label-sm">Descripcion:</label>
                <textarea name="descEditarCategoria" id="descEditarCategoria" rows="2" class="form-control form-control-sm font-weight-bold"></textarea>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer px-5">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
          <i class="fa-solid fa-xmark fa-sm text-white-50 mr-2"></i>Cancelar
        </button>
        <button type="button" class="btn btn-warning btn-sm" id="btnEditarCategoria">
          <i class="fa-solid fa-pen-to-square fa-sm text-white-50 mr-2"></i>Guardar Cambios
        </button>
      </div>
    </div>
  </div>
</div>
