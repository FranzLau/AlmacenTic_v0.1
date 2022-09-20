<!-- Modal -->

<div class="modal fade bd-example-modal-lg" id="modalCrearEquipo" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
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
          <!-- Content Row -->
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="codigoEquipo" class="col-form-label col-form-label-sm">Codigo AF/NC:</label>
              <input type="text" class="form-control form-control-sm font-weight-bold" id="codigoEquipo" name="codigoEquipo">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="categoriaEquipo" class="col-form-label col-form-label-sm">Categoria:</label>
              <select class="custom-select custom-select-sm font-weight-bold" id="categoriaEquipo" name="categoriaEquipo" style="width:100%">
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
            <div class="form-group col-md-8">
              <label for="descEquipo" class="col-form-label col-form-label-sm">Descripción :</label>
              <input type="text" class="form-control form-control-sm font-weight-bold" name="descEquipo" id="descEquipo">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="serieEquipo" class="col-form-label col-form-label-sm">Serie:</label>
              <input type="text" class="form-control form-control-sm font-weight-bold" id="serieEquipo" name="serieEquipo">
            </div>
            <div class="form-group col-md-4">
              <label for="marcaEquipo" class="col-form-label col-form-label-sm">Marca:</label>
              <input type="text" class="form-control form-control-sm font-weight-bold" id="marcaEquipo" name="marcaEquipo">
            </div>
            <div class="form-group col-md-4">
              <label for="modeloEquipo" class="col-form-label col-form-label-sm">Modelo:</label>
              <input type="text" class="form-control form-control-sm font-weight-bold" id="modeloEquipo" name="modeloEquipo">
            </div>
          </div>
          <div class="form-row">
            
            <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
            
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="contratoEquipo" class="col-form-label col-form-label-sm">Contrato::</label>
              <select class="custom-select custom-select-sm font-weight-bold" id="contratoEquipo" name="contratoEquipo" style="width:100%">
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
            <div class="form-group col-md-2">
              <label for="cantidadEquipo" class="col-form-label col-form-label-sm">Cantidad:</label>
              <input type="number" class="form-control form-control-sm font-weight-bold" id="cantidadEquipo" name="cantidadEquipo" placeholder="0">
            </div>
            <div class="form-group col-md-6 mb-0">
                <label for="estadoEquipo" class="col-form-label col-form-label-sm">Estado:</label>
                <select class="custom-select custom-select-sm font-weight-bold" id="estadoEquipo" name="estadoEquipo" required>
                  <option selected disabled>Elegir...</option>
                  <option value="1">Bueno</option>
                  <option value="2">Malo</option>
                  <option value="3">Regular</option>
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
