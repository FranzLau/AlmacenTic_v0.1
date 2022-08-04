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
              <div class="form-group row mb-0">
                <label for="nomEditarCategoria" class="col-md-3 col-form-label col-form-label-sm">Nombre:</label>
                <div class="col-md-9">
                  <input type="text" class="form-control form-control-sm font-weight-bold" id="nomEditarCategoria" name="nomEditarCategoria">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning w-100" id="btnEditarCategoria"><i class="fas fa-pen mr-2"></i>Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
