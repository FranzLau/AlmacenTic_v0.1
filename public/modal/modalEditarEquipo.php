<!-- Modal -->
<div class="modal fade" id="modalEditarEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalCenterTitle">
          Editar Equipo
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="formEditarEquipo">

          <input type="text" name="idEditarEquipo" id="idEditarEquipo" hidden>
          <div class="row">
            <div class="col-md-4">
              <p class="font-weight-bold">Datos de Proveedor:</p>
            </div>
            <div class="col-md-8">
              <div class="form-row">
                <div class="form-group col-md-8">
                  <label for="contratoEditarEquipo" class="col-form-label col-form-label-sm font-weight-bold">Contrato::</label>
                  <select class="form-control form-control-sm" id="contratoEditarEquipo" name="contratoEditarEquipo" style="width:100%">
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
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="tcodEditarEquipo" class="col-form-label col-form-label-sm font-weight-bold">tipo:</label>
                  <select class="custom-select custom-select-sm" id="tcodEditarEquipo" name="tcodEditarEquipo" required>
                    <option selected disabled>Elegir...</option>
                    <option value="S/C">Sin codigo</option>
                    <option value="AF">AF</option>
                    <option value="NC">NC</option>
                  </select>
                </div>
                <div class="form-group col-md-5">
                  <label for="codEditarEquipo" class="col-form-label col-form-label-sm font-weight-bold">Codigo:</label>
                  <input type="text" class="form-control form-control-sm" id="codEditarEquipo" name="codEditarEquipo">
                </div>
                <div class="form-group col-md-4">
                  <label for="invEditarEquipo" class="col-form-label col-form-label-sm font-weight-bold">Inv.</label>
                  <input type="text" class="form-control form-control-sm" id="invEditarEquipo" name="invEditarEquipo">
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-4">
              <p class="font-weight-bold">Datos Generales:</p>
            </div>
            <div class="col-md-8">
              <div class="form-row">
                <div class="form-group col-md-8">
                  <label for="descEditarEquipo" class="col-form-label col-form-label-sm font-weight-bold">Descripción :</label>
                  <input type="text" class="form-control form-control-sm" name="descEditarEquipo" id="descEditarEquipo">
                </div>
                <div class="form-group col-md-4">
                  <label for="categEditarEquipo" class="col-form-label col-form-label-sm font-weight-bold">Categoria:</label>
                  <select class="form-control form-control-sm" id="categEditarEquipo" name="categEditarEquipo" style="width:100%">
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
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="serieEditarEquipo" class="col-form-label col-form-label-sm font-weight-bold">Serie:</label>
                  <input type="text" class="form-control form-control-sm" id="serieEditarEquipo" name="serieEditarEquipo">
                </div>
                <div class="form-group col-md-4">
                  <label for="marcaEditarEquipo" class="col-form-label col-form-label-sm font-weight-bold">Marca:</label>
                  <input type="text" class="form-control form-control-sm" id="marcaEditarEquipo" name="marcaEditarEquipo">
                </div>
                <div class="form-group col-md-4">
                  <label for="modeloEditarEquipo" class="col-form-label col-form-label-sm font-weight-bold">Modelo:</label>
                  <input type="text" class="form-control form-control-sm" id="modeloEditarEquipo" name="modeloEditarEquipo">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="cantEditarEquipo" class="col-form-label col-form-label-sm font-weight-bold">Cantidad:</label>
                  <input type="number" class="form-control form-control-sm" id="cantEditarEquipo" name="cantEditarEquipo" placeholder="0">
                </div>
                <div class="form-group col-md-6">
                  <label for="condiEditarEquipo" class="col-form-label col-form-label-sm font-weight-bold">Condicion:</label>
                  <select class="custom-select custom-select-sm" id="condiEditarEquipo" name="condiEditarEquipo" required>
                    <option selected disabled>Elegir...</option>
                    <option value="1">Bueno</option>
                    <option value="2">Malo</option>
                    <option value="3">Regular</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="estEditarEquipo" class="col-form-label col-form-label-sm font-weight-bold">Estado:</label>
                  <select class="custom-select custom-select-sm" id="estEditarEquipo" name="estEditarEquipo" required>
                    <option selected disabled>Elegir...</option>
                    <option value="1">Asignado</option>
                    <option value="2">No Asignado</option>
                    <option value="3">Baja</option>
                  </select>
                </div>
              </div>
            </div>
          </div>


          
        </form><!-- Fin de Form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
          <i class="fa-solid fa-xmark fa-sm text-white-50 mr-2"></i>Cancelar
        </button>
        <button type="button" class="btn btn-warning btn-sm" id="btnEditarEquipo">
          <i class="fa-sharp fa-solid fa-floppy-disk fa-sm text-white-50 mr-2"></i>Guardar Cambios
        </button>
      </div>
    </div>
  </div>
</div>
