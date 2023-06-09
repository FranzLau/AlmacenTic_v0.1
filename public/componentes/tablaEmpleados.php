<?php
    require '../../config/conexion.php';
    require '../../config/data.php';
    $obj = new data();
    $sql = $con->query("SELECT * FROM empleado ");
?>
  <!-- DataTales Example -->
  <div class="table-responsive">
    <table class="table table-hover table-bordered table-sm" id="tablaEmpleado" width="100%" cellspacing="0">
      <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>LOGO</th>
            <th>NOMBRES y APELLIDO</th>
            <th>CARGO</th>
            <th>AREA</th>
            <th>GERENCIA</th>
            <th>CORREO</th>
            <th>TELEFONO</th>
            <th class="text-center">ESTADO</th>
            <th class="text-center">ACCIONES</th>
          </tr>
      </thead>
      <tbody class="bg-white">
          <?php
          while($mostrar = $sql->fetch_row()){
          ?>
          <tr>
              <td class="text-center"><?php echo $mostrar[0] ?></td>
              <td> <span class="badge badge-primary"><i class="fas fa-bolt mr-2"></i>Electrosur</span> </td>
              <td><?php echo $mostrar[4] ?> <?php echo $mostrar[5] ?></td>
              <td><?php echo $obj->nomCargo( $mostrar[1]) ?></td>
              <td><?php echo $obj->nomArea( $mostrar[2]) ?></td>
              <td><?php echo $obj->nomGerencia( $mostrar[3]) ?></td>
              <td><?php echo $mostrar[6] ?></td>
              <td><?php echo $mostrar[7] ?></td>
              <td class="text-center">
                <?php
                if ($mostrar[8]=="1") {
                ?>
                  <span class="badge badge-success"><i class="fas fa-user mr-2"></i>Activo</span>
                <?php
                }else {
                ?>
                  <span class="badge badge-danger"><i class="fas fa-user-slash mr-2"></i>Inactivo</span>
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
