<!-- Modal -->

<div class="modal fade bd-example-modal-lg" id="modalCrearEquipo" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title font-weight-bold" id="exampleModalCenterTitle">
          <i class="fa-solid fa-file mr-2"></i>
          NUEVO EQUIPO
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--***************************   INICIO DEL FORMULARIO   ***********************-->
        <form id="formNuevoEquipo" class="form-horizontal">
          <!-- Content Row -->

          <div class="row">
            <div class="col-md-12">
              <label class="col-form-label col-form-label-sm font-weight-bold">
                Datos Principales:
              </label>
              <div class="form-group">
                <label for="descEquipo" class="col-form-label col-form-label-sm">Descripción :</label>
                <input type="text" class="form-control form-control-sm" name="descEquipo" id="descEquipo">
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="codigoEquipo" class="col-form-label col-form-label-sm">Codigo:</label>
                  <input type="text" class="form-control form-control-sm" id="codigoEquipo" name="codigoEquipo">
                </div>
                <div class="form-group col-md-8">
                  <label for="serieEquipo" class="col-form-label col-form-label-sm">Serie:</label>
                  <input type="text" class="form-control form-control-sm" id="serieEquipo" name="serieEquipo">
                </div>
              </div>
              <div class="form-row">
                
                <div class="form-group col-md-6">
                  <label for="marcaEquipo" class="col-form-label col-form-label-sm">Marca:</label>
                  <input type="text" class="form-control form-control-sm" id="marcaEquipo" name="marcaEquipo">
                </div>
                <div class="form-group col-md-6">
                  <label for="modeloEquipo" class="col-form-label col-form-label-sm">Modelo:</label>
                  <input type="text" class="form-control form-control-sm" id="modeloEquipo" name="modeloEquipo">
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
                  <label for="categoriaEquipo" class="col-form-label col-form-label-sm">Categoria:</label>
                  <select class="form-control form-control-sm" id="categoriaEquipo" name="categoriaEquipo" style="width:100%">
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
                  <label for="cantidadEquipo" class="col-form-label col-form-label-sm">Cantidad:</label>
                  <input type="number" class="form-control form-control-sm" id="cantidadEquipo" name="cantidadEquipo" placeholder="0">
                </div>
              </div>
              <div class="form-group">
                <label for="contratoEquipo" class="col-form-label col-form-label-sm">Contrato::</label>
                <select class="form-control form-control-sm" id="contratoEquipo" name="contratoEquipo" style="width:100%">
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
         
          <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
          <div class="row">
            <div class="col-md-12">
              <label class="col-form-label col-form-label-sm font-weight-bold">Operatividad del equipo:</label>
              <div class="radio">
                <label for="" class="col-form-label col-form-label-sm">Estado:</label><br>
                <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="estadoEquipo" id="operativoEquipo" value="1" checked>
                  <label class="form-check-label" for="operativoEquipo">
                    Operativo
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="estadoEquipo" id="noOperativoEquipo" value="2">
                  <label class="form-check-label" for="noOperativoEquipo">
                    No operativo
                  </label>
                </div>
              </div>
            </div>
          </div>
          
          <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
          
        </form>
        <!--***** FIN DEL FORMULARIO *******<<<<<<<-->
      </div>
      <div class="modal-footer">
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
