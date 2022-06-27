<!-- Modal -->
<div class="modal fade" id="modalEditarEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalCenterTitle">
          <i class="fa-solid fa-pen-to-square mr-2"></i>
          EDITAR EQUIPO
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="formEditarEquipo">

          <input type="text" name="idEditarEquipo" id="idEditarEquipo" hidden>
          <!-- Fila 1 Form -->
          <div class="row">
            <div class="col-md-12">
              <label class="col-form-label col-form-label-sm font-weight-bold">
                Datos Principales:
              </label>
              <div class="form-group">
                <label for="descEditarEquipo" class="col-form-label col-form-label-sm">Descripción :</label>
                <input type="text" class="form-control form-control-sm" name="descEditarEquipo" id="descEditarEquipo">
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="codigoEditarEquipo" class="col-form-label col-form-label-sm">Codigo:</label>
                  <input type="text" class="form-control form-control-sm" id="codigoEditarEquipo" name="codigoEditarEquipo">
                </div>
                <div class="form-group col-md-8">
                  <label for="serieEditarEquipo" class="col-form-label col-form-label-sm">Serie:</label>
                  <input type="text" class="form-control form-control-sm" id="serieEditarEquipo" name="serieEditarEquipo">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="marcaEditarEquipo" class="col-form-label col-form-label-sm">Marca:</label>
                  <input type="text" class="form-control form-control-sm" id="marcaEditarEquipo" name="marcaEditarEquipo">
                </div>
                <div class="form-group col-md-6">
                  <label for="modeloEditarEquipo" class="col-form-label col-form-label-sm">Modelo:</label>
                  <input type="text" class="form-control form-control-sm" id="modeloEditarEquipo" name="modeloEditarEquipo">
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label class="col-form-label col-form-label-sm font-weight-bold">
                Datos Secundarios:
              </label>
              <div class="form-row">
                <div class="form-group col-md-9">
                  <label for="categEditarEquipo" class="col-form-label col-form-label-sm">Categoria:</label>
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
                <div class="form-group col-md-3">
                  <label for="cantEditarEquipo" class="col-form-label col-form-label-sm">Cantidad:</label>
                  <input type="number" class="form-control form-control-sm" id="cantEditarEquipo" name="cantEditarEquipo" placeholder="0">
                </div>
              </div>
              <div class="form-group">
                <label for="contratoEditarEquipo" class="col-form-label col-form-label-sm">Contrato::</label>
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
          </div>

          <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
          <div class="row">
            <div class="col-md-12">
              <label class="col-form-label col-form-label-sm font-weight-bold">Operatividad del equipo:</label>
              <div class="radio">
                <label for="" class="col-form-label col-form-label-sm">Estado:</label><br>
                <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="estadoEditarEquipo" id="opeEditarEquipo" value="1" checked>
                  <label class="form-check-label" for="opeEditarEquipo">
                    Operativo
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="estadoEditarEquipo" id="noOpeEditarEquipo" value="2">
                  <label class="form-check-label" for="noOpeEditarEquipo">
                    No operativo
                  </label>
                </div>
              </div>
            </div>
          </div>
        </form><!-- Fin de Form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-times mr-2 fa-sm text-white-50"></i>Cancelar</button>
        <button type="button" class="btn btn-warning btn-sm" id="btnEditarEquipo"><i class="fas fa-pen mr-2 fa-sm text-white-50"></i>Editar</button>
      </div>
    </div>
  </div>
</div>
