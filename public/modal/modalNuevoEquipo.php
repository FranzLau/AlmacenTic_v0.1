<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modalCrearEquipo" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalCenterTitle">
          Registrar Equipo
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--***************************   INICIO DEL FORMULARIO   ***********************-->
        <form id="formNuevoEquipo" class="formRegEquipo">
          <div class="row">
            <div class="col-md-4 pt-2">
              <p class="font-weight-bold">Datos de Proveedor:</p>
            </div>
            <div class="col-md-8">
              <div class="form-row">
                <div class="form-group col-md-8">
                  <label for="contratoEquipo" class="col-form-label col-form-label-sm">Contrato:</label>
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
              </div>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="tcodEquipo" class="col-form-label col-form-label-sm">tipo:</label>
                  <select class="custom-select custom-select-sm" id="tcodEquipo" name="tcodEquipo" required>
                    <option selected disabled>Elegir...</option>
                    <option value="S/C">Sin codigo</option>
                    <option value="AF">AF</option>
                    <option value="NC">NC</option>
                  </select>
                </div>
                <div class="form-group col-md-5">
                  <label for="codigoEquipo" class="col-form-label col-form-label-sm">Codigo:</label>
                  <input type="text" class="form-control form-control-sm" id="codigoEquipo" name="codigoEquipo">
                </div>
                <div class="form-group col-md-4">
                  <label for="invEquipo" class="col-form-label col-form-label-sm ">Inv.</label>
                  <input type="text" class="form-control form-control-sm" id="invEquipo" name="invEquipo">
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-4 pt-2">
              <p class="font-weight-bold">Datos Generales:</p>
            </div>
            <div class="col-md-8">
              <div class="form-row">
                <div class="form-group col-md-8">
                  <label for="descEquipo" class="col-form-label col-form-label-sm">Descripción :</label>
                  <input type="text" class="form-control form-control-sm" name="descEquipo" id="descEquipo">
                </div>
                <div class="form-group col-md-4">
                  <label for="categoriaEquipo" class="col-form-label col-form-label-sm">Categoria:</label>
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
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="serieEquipo" class="col-form-label col-form-label-sm">Serie:</label>
                  <input type="text" class="form-control form-control-sm" id="serieEquipo" name="serieEquipo">
                </div>
                <div class="form-group col-md-4">
                  <label for="marcaEquipo" class="col-form-label col-form-label-sm">Marca:</label>
                  <input type="text" class="form-control form-control-sm" id="marcaEquipo" name="marcaEquipo">
                </div>
                <div class="form-group col-md-4">
                  <label for="modeloEquipo" class="col-form-label col-form-label-sm">Modelo:</label>
                  <input type="text" class="form-control form-control-sm" id="modeloEquipo" name="modeloEquipo">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="cantidadEquipo" class="col-form-label col-form-label-sm">Cantidad:</label>
                  <input type="number" class="form-control form-control-sm" id="cantidadEquipo" name="cantidadEquipo" placeholder="0">
                </div>
                <div class="form-group col-md-6">
                  <label for="condiEquipo" class="col-form-label col-form-label-sm">Condicion:</label>
                  <select class="custom-select custom-select-sm" id="condiEquipo" name="condiEquipo" required>
                    <option selected disabled>Elegir...</option>
                    <option value="B">Bueno</option>
                    <option value="M">Malo</option>
                    <option value="R">Regular</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="estadoEquipo" class="col-form-label col-form-label-sm">Estado:</label>
                  <select class="custom-select custom-select-sm" id="estadoEquipo" name="estadoEquipo" required>
                    <option selected disabled>Elegir...</option>
                    <option value="D">Disponible</option>
                    <option value="ND">No Disponible</option>
                    <option value="BAJA">Baja</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </form>
        <!--***** FIN DEL FORMULARIO *******<<<<<<<-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn  btn-sm btn-secondary" data-dismiss="modal">
          <i class="fa-solid fa-xmark fa-sm text-white-50 mr-2"></i>Cancelar
        </button>
        <button type="button" class="btn btn-sm btn-primary" id="btnGuardarEquipo">
          <i class="fa-sharp fa-solid fa-floppy-disk fa-sm text-white-50 mr-2"></i>Guardar
        </button>
      </div>
    </div>
  </div>
</div>
