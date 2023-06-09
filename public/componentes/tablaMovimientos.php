<?php
  session_start();
  require '../../config/conexion.php';
  require '../../config/data.php';
  $obj = new data();
  $sql = $con->query("SELECT * FROM movimiento");
?>
<div class="table-responsive">
  <table class="table table-hover table-bordered table-sm" id="tableMove" width="100%" cellspacing="0">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>FECHA</th>
        <th>TIPO</th>
        <th>RESPONSABLE</th>
        <th>OPERADOR</th>
        <th>SEDE</th>
        <th>OBSERVACION</th>
        <th>OPCIONES</th>
      </tr>
    </thead>
    <tbody class="bg-white">
      <?php while($verMoves = $sql->fetch_row()){ ?>
      <tr>
        <td><?php echo $verMoves[0] ?></td>
        <td><?php echo $verMoves[4] ?></td>
        <td><?php echo $verMoves[5] ?></td>
        <td><?php echo $verMoves[2] ?></td>
        <td><?php echo $verMoves[7] ?></td>
        <td><?php echo $verMoves[3] ?></td>
        <td><?php echo $verMoves[6] ?></td>
        <td>
            <a href="#" class="btn-link-edit mr-3" title="Editar" data-toggle="modal" data-target="#modalEdMoves" onclick="leerMoves('<?php echo $verMoves[0] ?>')"><i class="fas fa-pencil-alt"></i></a>
            <a href="#" class="btn-link-delete" title="Eliminar" onclick="eliminarMoves('<?php echo $verMoves[0] ?>')"><i class="fas fa-trash-alt"></i></a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<script>
  $(document).ready(function() {
    $('#tableMove').DataTable({
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