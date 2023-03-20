<?php
  require '../../config/conexion.php';
  $sql = $con->query("SELECT * FROM contrato ");
 ?>

<div class="table-responsive">
  <table class="table table-hover table-bordered table-sm" width="100%" cellspacing="0" id="tablaContrato">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>ADQUISICION</th>
        <th>GARANTIA</th>
        <th>PROVEEDOR</th>
        <th class="text-center">OPCIONES</th>
      </tr>
    </thead>
    <tbody class="bg-white">
      <?php while($vergasto = $sql->fetch_row()){ ?>
        <tr>
          <td><?php echo $vergasto[0] ?></td>
          <td><?php echo $vergasto[1] ?></td>
          <td><?php echo $vergasto[2] ?></td>
          <td><?php echo $vergasto[3] ?></td>
          <td><?php echo $vergasto[4] ?></td>
          <td class="text-center">
            <a href="#" class="mr-3 btn-link-edit" title="Editar" data-toggle="modal" data-target="#modalEditarContrato" onclick="verDatosContrato('<?php echo $vergasto[0] ?>')">
              <i class="fas fa-pen"></i>
            </a>
            <a href="#" class="btn-link-delete" title="Eliminar" onclick="eliminarContrato('<?php echo $vergasto[0] ?>')">
              <i class="fas fa-trash-alt"></i>
            </a>
          </td>
        </tr>
       <?php } ?>
    </tbody>
  </table>
</div>
<script>
  $(document).ready(function() {
    $('#tablaContrato').DataTable({
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
