<div class="modal fade bd-example-modal-lg" data-backdrop="static" id="modalNuevoSoporte" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header px-4">
                <h5 class="modal-title" id="exampleModalCenterTitle">Registrar Atencion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4">
                <!--************  INICIO DEL FORMULARIO   **********-->
                <form id="formNuevoSoporte" class="formRegSoporte">
                    <!-- Content Row -->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="fechaInicio" class="col-form-label col-form-label-sm">Fecha Inicio:</label>
                            <input type="date" class="form-control form-control-sm font-weight-bold" id="fechaInicio" name="fechaInicio">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ticketSoporte" class="col-form-label col-form-label-sm">Ticket Otrs:</label>
                            <input type="text" class="form-control form-control-sm font-weight-bold" id="ticketSoporte" name="ticketSoporte">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="empNuevoSoporte" class="col-form-label col-form-label-sm">Empleado:</label>
                            <select class="form-control form-control-sm font-weight-bold" id="empNuevoSoporte" name="empNuevoSoporte" style="width:100%">
                                <option value="">Elije uno</option>
                                <?php $ctg = $con->query("SELECT * FROM empleado");
                                    while ($row = $ctg->fetch_assoc()) {
                                        echo "<option value='".$row['id_empleado']."' ";
                                        echo ">";
                                        echo $row['nom_empleado'];
                                        echo " ";
                                        echo $row['ape_empleado'];
                                        echo "</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label col-form-label-sm" for="sedeNuevoSoporte">Sede:</label><br>
                            <select class="form-control form-control-sm font-weight-bold" id="sedeNuevoSoporte" name="sedeNuevoSoporte" style="width:100%">
                                <option value="">Elije uno</option>
                                <?php $ctg = $con->query("SELECT * FROM sede");
                                    while ($row = $ctg->fetch_assoc()) {
                                        echo "<option value='".$row['id_sede']."' ";
                                        echo ">";
                                        echo $row['nom_sede'];
                                        echo "</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="equipoSoporte" class="col-form-label col-form-label-sm">Equipo:</label>
                            <input type="text" class="form-control form-control-sm font-weight-bold" id="equipoSoporte" name="equipoSoporte">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="servicioSoporte" class="col-form-label col-form-label-sm">Servicio:</label>
                            <input type="text" class="form-control form-control-sm font-weight-bold" id="servicioSoporte" name="servicioSoporte">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tipoSoporte" class="col-form-label col-form-label-sm">Tipo:</label>
                            <select class="form-control form-control-sm font-weight-bold" name="tipoSoporte" id="tipoSoporte">
                                <option>Elije uno</option>
                                <option value="Incidente">Incidente</option>
                                <option value="Solicitud">Solicitud</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descSoporte" class="col-form-label col-form-label-sm">Descripcion:</label>
                        <textarea class="form-control form-control-sm" name="descSoporte" id="descSoporte" rows="3" placeholder="Escriba la descripcion aqui..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="trataSoporte" class="col-form-label col-form-label-sm">Tratamiento:</label>
                        <textarea class="form-control form-control-sm" name="trataSoporte" id="trataSoporte" rows="3" placeholder="Escriba el tratamiento aqui..."></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="fechaFin" class="col-form-label col-form-label-sm">Fecha/Fin:</label>
                            <input type="date" class="form-control form-control-sm font-weight-bold" id="fechaFin" name="fechaFin">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="resSoporte" class="col-form-label col-form-label-sm">Resultado:</label>
                            <select class="form-control form-control-sm font-weight-bold" name="resSoporte" id="resSoporte">
                                <option>Elije uno</option>
                                <option value="Solucionado">Solucionado</option>
                                <option value="Atendido">Atendido</option>
                            </select>
                        </div>
                    </div>
                </form><!--***** FIN DEL FORMULARIO *******<<<<<<<-->
            </div>
            <div class="modal-footer px-4">
                <button type="button" class="btn  btn-sm btn-secondary" data-dismiss="modal">
                    <i class="fa-solid fa-xmark fa-sm text-white-50 mr-2"></i>Cancelar
                </button>
                <button type="button" class="btn btn-sm btn-success" id="btnGuardarSoporte">
                    <i class="fa-solid fa-check fa-sm text-white-50 mr-2"></i>Guardar
                </button>
            </div>
        </div>
    </div>
</div>
