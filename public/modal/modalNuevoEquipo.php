<!-- Modal -->

<div class="modal fade bd-example-modal-lg" id="modalCrearEquipo" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header px-5 py-4">
        <h5 class="modal-title" id="exampleModalCenterTitle">
          Registrar Equipo
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-5 my-4">
        <!--***************************   INICIO DEL FORMULARIO   ***********************-->
        <form id="formNuevoEquipo" class="formRegEquipo">
          <!-- Content Row -->
          <div class="form-group row">
            <label for="categoriaEquipo" class="col-md-3 col-form-label col-form-label-sm">Categoria:</label>
            <div class="col-md-5">
              <select class="form-control form-control-sm font-weight-bold" id="categoriaEquipo" name="categoriaEquipo" style="width:100%">
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
            <label for="descEquipo" class="col-md-3 col-form-label col-form-label-sm">Descripción :</label>
            <div class="col-md-9">
              <input type="text" class="form-control form-control-sm font-weight-bold" name="descEquipo" id="descEquipo">
            </div>
          </div>
          <div class="form-group row">
            <label for="codigoEquipo" class="col-md-3 col-form-label col-form-label-sm">Codigo:</label>
            <div class="col-md-3">
              <input type="text" class="form-control form-control-sm font-weight-bold" id="codigoEquipo" name="codigoEquipo">
            </div>
          </div>
          <div class="form-group row">
            <label for="serieEquipo" class="col-md-3 col-form-label col-form-label-sm">Serie:</label>
            <div class="col-md-5">
              <input type="text" class="form-control form-control-sm font-weight-bold" id="serieEquipo" name="serieEquipo">
            </div>
          </div>
          <div class="form-group row">
            <label for="marcaEquipo" class="col-md-3 col-form-label col-form-label-sm">Marca:</label>
            <div class="col-md-5">
              <input type="text" class="form-control form-control-sm font-weight-bold" id="marcaEquipo" name="marcaEquipo">
            </div>
          </div>
          <div class="form-group row">
            <label for="modeloEquipo" class="col-md-3 col-form-label col-form-label-sm">Modelo:</label>
            <div class="col-md-5">
              <input type="text" class="form-control form-control-sm font-weight-bold" id="modeloEquipo" name="modeloEquipo">
            </div>
          </div>
          
          <div class="form-group row">
            <label for="contratoEquipo" class="col-md-3 col-form-label col-form-label-sm">Contrato::</label>
            <div class="col-md-5">
              <select class="form-control form-control-sm font-weight-bold" id="contratoEquipo" name="contratoEquipo" style="width:100%">
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
            <label for="cantidadEquipo" class="col-md-3 col-form-label col-form-label-sm">Cantidad:</label>
            <div class="col-md-2">
              <input type="number" class="form-control form-control-sm font-weight-bold" id="cantidadEquipo" name="cantidadEquipo" placeholder="0">
            </div>
          </div>
          <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
          <div class="form-group row">
            <label class="col-md-3 col-form-label col-form-label-sm">Estado:</label>
            <div class="col-md-5">
              <div class="radio">
                <input type="radio" name="estadoEquipo" id="operativoEquipo" value="1" checked>
                <label for="operativoEquipo">Operativo</label>

                <input type="radio" name="estadoEquipo" id="noOperativoEquipo" value="2">
                <label for="noOperativoEquipo">No operativo</label>
              </div>
            </div>
          </div>
        </form>
        <!--***** FIN DEL FORMULARIO *******<<<<<<<-->
      </div>
      <div class="modal-footer px-5">
        <button type="button" class="btn  btn-sm btn-secondary" data-dismiss="modal">
          <i class="fa-solid fa-xmark text-white-50"></i>
          Cancelar
        </button>
        <button type="button" class="btn btn-sm btn-primary" id="btnGuardarEquipo">
          <i class="fa-solid fa-floppy-disk text-white-50"></i>
          Guardar
        </button>
      </div>
    </div>
  </div>
</div>
