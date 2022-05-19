<?php
    require '../../config/conexion.php';
    require '../../config/data.php';
    $obj = new data();
    $sql = $con->query("SELECT * FROM empleado ");
?>
  <!-- DataTales Example -->
  <div class="table-responsive">
    <table class="table table-hover table-sm datatable-wide" id="tablaEmpleado" width="100%" cellspacing="0">
      <thead>
          <tr>
            <th>ID</th>
            <th class="text-center">GRUPO</th>
            <th>NOMBRES y APELLIDO</th>
            
            <th>CARGO</th>
            <th>GERENCIA</th>
            <th class="text-center">ESTADO</th>
            <th class="text-center">ACCIONES</th>
          </tr>
      </thead>
      <tfoot>
        <tr>
          <th>ID</th>
          <th class="text-center">GRUPO</th>
          <th>NOMBRES Y APELLIDO</th>
          
          <th>CARGO</th>
          <th>GERENCIA</th>
          <th class="text-center">ESTADO</th>
          <th class="text-center">ACCIONES</th>
        </tr>
      </tfoot>
      <tbody>
          <?php
          while($mostrar = $sql->fetch_row()){
          ?>
          <tr>
              <td><?php echo $mostrar[0] ?></td>
              <td class="text-center">
                <?php
                if ($mostrar[5]=="1") {
                ?>
                  <div class="badge badge-primary">
                    <i class="fas fa-bolt mr-2"></i> Electrosur
                  </div>
                <?php
                }else {
                ?>
                <div class="badge badge-warning">
                  <i class="fas fa-user mr-2"></i> Tercero
                </div>
                <?php
                }
                ?>
              </td>
              <td><?php echo $mostrar[1] ?> <?php echo $mostrar[2] ?></td>
              
              <td><?php echo $mostrar[3] ?></td>
              <td><?php echo $mostrar[4] ?></td>
              <td class="text-center">
                <?php
                if ($mostrar[6]=="1") {
                ?>
                  <div class="badge badge-success">
                    <i class="fas fa-user mr-2"></i> Activo
                  </div>
                <?php
                }else {
                ?>
                <div class="badge badge-danger">
                  <i class="fas fa-user-slash mr-2"></i>Inactivo
                </div>
                <?php
                }
                ?>
              </td>

              <td class="text-center">
                
                <a href="#" class="mr-3 btn-link-edit" title="Editar" data-toggle="modal" data-target="#modalEditarEmpleado" onclick="verDatosEmpleado('<?php echo $mostrar[0] ?>')"><i class="fas fa-pen"></i></a>
                <a href="#" class="btn-link-delete" title="Eliminar" onclick="borrarEmpleado('<?php echo $mostrar[0] ?>')"><i class="fas fa-trash-alt"></i></a>

              </td>
          </tr>
          <?php
            }
          ?>
      </tbody>
    </table>
  </div>
  <script>
       $(document).ready(function() {
         $('#tablaEmpleado').DataTable({
           "language": {
             "lengthMenu": "Mostrar _MENU_ registros por página",
             "zeroRecords": "Nada encontrado, lo siento!",
             "info": "Mostrando página _PAGE_ de _PAGES_",
             "infoEmpty": "No hay registros disponibles",
             "infoFiltered": "(filtered from _MAX_ total records)",
             "search": "Buscar",
             "paginate": {
               "first":      "Primero",
               "previous":   "Anterior",
               "next":       "Siguiente",
               "last":       "Último"
             }
           }
         });
       });
  </script>
