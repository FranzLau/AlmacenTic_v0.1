<!-- Modal -->
<div class="modal fade" id="modalEditarEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header px-5 py-4 bg-gradient-warning">
        <h5 class="modal-title" id="exampleModalCenterTitle">
          Editar Equipo
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-5 my-4">

        <form id="formEditarEquipo">

          <input type="text" name="idEditarEquipo" id="idEditarEquipo" hidden>
          <div class="form-group row">
            <label for="categEditarEquipo" class="col-md-3 col-form-label col-form-label-sm">Categoria:</label>
            <div class="col-md-5">
              <select class="form-control form-control-sm font-weight-bold" id="categEditarEquipo" name="categEditarEquipo" style="width:100%">
                <option value="">Elije categoria</option>
                  <?php $ctg = $con->query("SELECT * FROM categoria");
                      while ($row = $ctg->fetch_assoc()) {
                        echo "<option value='".$row['id_categoria']."' ";
                        echo ">";
                        echo $row['nom_categoria'];
                        echo "</option>";
                      }
                  ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="descEditarEquipo" class="col-md-3 col-form-label col-form-label-sm">Descripción :</label>
            <div class="col-md-9">
              <input type="text" class="form-control form-control-sm font-weight-bold" name="descEditarEquipo" id="descEditarEquipo">
            </div>
          </div>
          <div class="form-group row">
            <label for="codigoEditarEquipo" class="col-md-3 col-form-label col-form-label-sm">Codigo:</label>
            <div class="col-md-3">
              <input type="text" class="form-control form-control-sm font-weight-bold" id="codigoEditarEquipo" name="codigoEditarEquipo">
            </div>
          </div>
          <div class="form-group row">
            <label for="serieEditarEquipo" class="col-md-3 col-form-label col-form-label-sm">Serie:</label>
            <div class="col-md-5">
              <input type="text" class="form-control form-control-sm font-weight-bold" id="serieEditarEquipo" name="serieEditarEquipo">
            </div>
          </div>
          <div class="form-group row">
            <label for="marcaEditarEquipo" class="col-md-3 col-form-label col-form-label-sm">Marca:</label>
            <div class="col-md-5">
              <input type="text" class="form-control form-control-sm font-weight-bold" id="marcaEditarEquipo" name="marcaEditarEquipo">
            </div>
          </div>
          <div class="form-group row">
            <label for="modeloEditarEquipo" class="col-md-3 col-form-label col-form-label-sm">Modelo:</label>
            <div class="col-md-5">
              <input type="text" class="form-control form-control-sm font-weight-bold" id="modeloEditarEquipo" name="modeloEditarEquipo">
            </div>
          </div>
          <div class="form-group row">
            <label for="cantEditarEquipo" class="col-md-3 col-form-label col-form-label-sm">Cantidad:</label>
            <div class="col-md-2">
              <input type="number" class="form-control form-control-sm font-weight-bold" id="cantEditarEquipo" name="cantEditarEquipo" placeholder="0">
            </div>
          </div>
          <div class="form-group row">
            <label for="contratoEditarEquipo" class="col-md-3 col-form-label col-form-label-sm">Contrato::</label>
            <div class="col-md-5">
              <select class="form-control form-control-sm font-weight-bold" id="contratoEditarEquipo" name="contratoEditarEquipo" style="width:100%">
                <option value="">Elije el contrato</option>
                <?php $ctg = $con->query("SELECT * FROM contrato");
                    while ($row = $ctg->fetch_assoc()) {
                      echo "<option value='".$row['id_contrato']."' ";
                      echo ">";
                      echo $row['nom_contrato'];
                      echo "</option>";
                    }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-md-3 col-form-label col-form-label-sm">Estado:</label>
            <div class="col-md-5">
              <div class="radio">
                <div>
                  <input type="radio" name="estadoEditarEquipo" id="opeEditarEquipo" value="1" checked>
                  <label for="opeEditarEquipo">Operativo</label>
                </div>
                <div>
                  <input type="radio" name="estadoEditarEquipo" id="noOpeEditarEquipo" value="2">
                  <label for="noOpeEditarEquipo">No operativo</label>
                </div>
              </div>
            </div>
          </div>
        </form><!-- Fin de Form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-times mr-2 fa-sm text-white-50"></i>Cancelar</button>
        <button type="button" class="btn btn-warning btn-sm" id="btnEditarEquipo"><i class="fas fa-pen mr-2 fa-sm text-white-50"></i>Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
