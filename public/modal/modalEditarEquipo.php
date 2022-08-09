<!-- Modal -->
<div class="modal fade" id="modalEditarEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
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
          
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="codigoEditarEquipo" class="col-form-label col-form-label-sm">Codigo:</label>
              <input type="text" class="form-control form-control-sm font-weight-bold" id="codigoEditarEquipo" name="codigoEditarEquipo">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="categEditarEquipo" class="col-form-label col-form-label-sm">Categoria:</label>
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
            <div class="form-group col-md-8">
              <label for="descEditarEquipo" class="col-form-label col-form-label-sm">Descripción :</label>
              <input type="text" class="form-control form-control-sm font-weight-bold" name="descEditarEquipo" id="descEditarEquipo">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="serieEditarEquipo" class="col-form-label col-form-label-sm">Serie:</label>
              <input type="text" class="form-control form-control-sm font-weight-bold" id="serieEditarEquipo" name="serieEditarEquipo">
            </div>
            <div class="form-group col-md-4">
              <label for="marcaEditarEquipo" class="col-form-label col-form-label-sm">Marca:</label>
              <input type="text" class="form-control form-control-sm font-weight-bold" id="marcaEditarEquipo" name="marcaEditarEquipo">
            </div>
            <div class="form-group col-md-4">
              <label for="modeloEditarEquipo" class="col-form-label col-form-label-sm">Modelo:</label>
              <input type="text" class="form-control form-control-sm font-weight-bold" id="modeloEditarEquipo" name="modeloEditarEquipo">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="contratoEditarEquipo" class="col-form-label col-form-label-sm">Contrato::</label>
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
            <div class="form-group col-md-2">
              <label for="cantEditarEquipo" class="col-form-label col-form-label-sm">Cantidad:</label>
              <input type="number" class="form-control form-control-sm font-weight-bold" id="cantEditarEquipo" name="cantEditarEquipo" placeholder="0">
            </div>
            <div class="form-group col-md-6">
              <label for="" class="col-form-label col-form-label-sm">Estado:</label>
              <div class="radio">
                <div class="radio-estate">
                  <input type="radio" name="estadoEditarEquipo" id="opeEditarEquipo" value="1" checked>
                  <label for="opeEditarEquipo">Operativo</label>
                </div>
                <div class="radio-estate">
                  <input type="radio" name="estadoEditarEquipo" id="noOpeEditarEquipo" value="2">
                  <label for="noOpeEditarEquipo">No operativo</label>
                </div>
              </div>
            </div>
          </div>
        </form><!-- Fin de Form -->
      </div>
      <div class="modal-footer px-5">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
          <i class="fa-solid fa-xmark fa-sm text-white-50 mr-2"></i>Cancelar
        </button>
        <button type="button" class="btn btn-warning btn-sm" id="btnEditarEquipo">
          <i class="fa-solid fa-pen-to-square fa-sm text-white-50 mr-2"></i>Guardar Cambios
        </button>
      </div>
    </div>
  </div>
</div>
