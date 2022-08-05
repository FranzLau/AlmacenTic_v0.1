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
            <th>GRUPO</th>
            <th>NOMBRES y APELLIDO</th>
            
            <th>CARGO</th>
            <th>GERENCIA</th>
            <th>ESTADO</th>
            <th>ACCIONES</th>
          </tr>
      </thead>
      <tfoot>
        <tr>
          <th>ID</th>
          <th>GRUPO</th>
          <th>NOMBRES Y APELLIDO</th>
          
          <th>CARGO</th>
          <th>GERENCIA</th>
          <th>ESTADO</th>
          <th>ACCIONES</th>
        </tr>
      </tfoot>
      <tbody>
          <?php
          while($mostrar = $sql->fetch_row()){
          ?>
          <tr>
              <td><?php echo $mostrar[0] ?></td>
              <td>
                <?php
                if ($mostrar[5]=="1") {
                ?>
                  <span class="badge bg-primary"><i class="fas fa-bolt mr-2"></i>Electrosur</span>
                <?php
                }else if ($mostrar[5]=="2") {
                ?>
                  <span class="badge bg-info text-dark"><i class="fas fa-user mr-2"></i>Practicante</span>
                <?php
                } else {
                ?>
                  <span class="badge bg-warning text-dark"><i class="fa-solid fa-user-ninja mr-2"></i>Tercero</span>
                <?php
                }
                ?>
              </td>
              <td><?php echo $mostrar[1] ?> <?php echo $mostrar[2] ?></td>
              
              <td><?php echo $mostrar[3] ?></td>
              <td><?php echo $mostrar[4] ?></td>
              <td>
                <?php
                if ($mostrar[6]=="1") {
                ?>
                  <span class="badge bg-success"><i class="fas fa-user mr-2"></i>Activo</span>
                <?php
                }else {
                ?>
                  <span class="badge bg-danger"><i class="fas fa-user-slash mr-2"></i>Inactivo</span>
                <?php
                }
                ?>
              </td>

              <td>
                
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
