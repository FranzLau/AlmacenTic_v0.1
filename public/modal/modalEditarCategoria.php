<!-- Modal -->
<div class="modal fade" id="modalEditarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Actualizar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <form id="formEditarCategoria">
              <input type="text" hidden="" name="idEditarCategoria" id="idEditarCategoria">
              <div class="form-group">
                <label for="nomEditarCategoria" class="col-form-label col-form-label-sm">Nombre:</label>
                <input type="text" class="form-control form-control-sm" id="nomEditarCategoria" name="nomEditarCategoria">
              </div>
              
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning w-100" id="btnEditarCategoria"><i class="fas fa-pen mr-2"></i>Actualizar Datos</button>
      </div>
    </div>
  </div>
</div>
