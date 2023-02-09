<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modalCrearEquipo" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header px-4">
        <h5 class="modal-title" id="exampleModalCenterTitle">
          Registrar Equipo
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-4">
        <!--***************************   INICIO DEL FORMULARIO   ***********************-->
        <form id="formNuevoEquipo" class="formRegEquipo">
          <p class="font-weight-bold">Datos Principales:</p>
          <div class="form-row">
            <div class="form-group col-md-5">
              <label for="categoriaEquipo" class="col-form-label col-form-label-sm font-weight-bold">Categoria:</label>
              <select class="custom-select custom-select-sm" id="categoriaEquipo" name="categoriaEquipo" style="width:100%">
                <option selected disabled>Elegir...</option>
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
              <label for="cantidadEquipo" class="col-form-label col-form-label-sm font-weight-bold">Cantidad:</label>
              <input type="number" class="form-control form-control-sm" id="cantidadEquipo" name="cantidadEquipo" placeholder="0">
            </div>
          </div>
          <div class="form-group">
            <label for="descEquipo" class="col-form-label col-form-label-sm font-weight-bold">Descripción :</label>
            <input type="text" class="form-control form-control-sm" name="descEquipo" id="descEquipo">
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="tcodEquipo" class="col-form-label col-form-label-sm font-weight-bold">tipo:</label>
              <select class="custom-select custom-select-sm" id="tcodEquipo" name="tcodEquipo" required>
                <option selected disabled>Elegir...</option>
                <option value="AF">AF</option>
                <option value="NC">NC</option>
              </select>
            </div>
            <div class="form-group col-md-5">
              <label for="codigoEquipo" class="col-form-label col-form-label-sm font-weight-bold">Codigo:</label>
              <input type="text" class="form-control form-control-sm" id="codigoEquipo" name="codigoEquipo">
            </div>
            <div class="form-group col-md-4">
              <label for="invEquipo" class="col-form-label col-form-label-sm font-weight-bold">Inv.</label>
              <input type="text" class="form-control form-control-sm" id="invEquipo" name="invEquipo">
            </div>
          </div>
          <hr><!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
          <p class="font-weight-bold">Caracteristicas:</p>
          <div class="form-group">
            <label for="serieEquipo" class="col-form-label col-form-label-sm font-weight-bold">Serie:</label>
            <input type="text" class="form-control form-control-sm" id="serieEquipo" name="serieEquipo">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="marcaEquipo" class="col-form-label col-form-label-sm font-weight-bold">Marca:</label>
              <input type="text" class="form-control form-control-sm" id="marcaEquipo" name="marcaEquipo">
            </div>
            <div class="form-group col-md-6">
              <label for="modeloEquipo" class="col-form-label col-form-label-sm font-weight-bold">Modelo:</label>
              <input type="text" class="form-control form-control-sm" id="modeloEquipo" name="modeloEquipo">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="condiEquipo" class="col-form-label col-form-label-sm font-weight-bold">Condicion:</label>
              <select class="custom-select custom-select-sm" id="condiEquipo" name="condiEquipo" required>
                <option selected disabled>Elegir...</option>
                <option value="1">Bueno</option>
                <option value="2">Malo</option>
                <option value="3">Regular</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="contratoEquipo" class="col-form-label col-form-label-sm font-weight-bold">Contrato:</label>
              <select class="custom-select custom-select-sm" id="contratoEquipo" name="contratoEquipo" style="width:100%">
                <option selected disabled>Elegir...</option>
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
            <div class="form-group col-md-3">
              <label for="estadoEquipo" class="col-form-label col-form-label-sm font-weight-bold">Estado:</label>
              <select class="custom-select custom-select-sm" id="estadoEquipo" name="estadoEquipo" required>
                <option selected disabled>Elegir...</option>
                <option value="1">Vigente</option>
                <option value="2">Baja</option>
              </select>
            </div>
          </div>
        </form>
        <!--***** FIN DEL FORMULARIO *******<<<<<<<-->
      </div>
      <div class="modal-footer px-4">
        <button type="button" class="btn  btn-sm btn-secondary" data-dismiss="modal">
          <i class="fa-solid fa-xmark fa-sm text-white-50 mr-2"></i>Cancelar
        </button>
        <button type="button" class="btn btn-sm btn-success" id="btnGuardarEquipo">
          <i class="fa-solid fa-check fa-sm text-white-50 mr-2"></i>Guardar
        </button>
      </div>
    </div>
  </div>
</div>
