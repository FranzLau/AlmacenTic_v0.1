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
        <th>PEDIDO</th>
        <th>NUMERO</th>
        <th>FECHA</th>
        <th>GARANTIA</th>
        <th>PROVEEDOR</th>
        <th>TIPO</th>
        <th class="text-center">OPCIONES</th>
      </tr>
    </thead>
    <tbody class="bg-white">
      <?php while($rowContrato = $sql->fetch_row()){ ?>
        <tr>
          <td><?php echo $rowContrato[0] ?></td>
          <td><?php echo $rowContrato[1] ?></td>
          <td><?php echo $rowContrato[2] ?></td>
          <td><?php echo $rowContrato[3] ?></td>
          <td><?php echo $rowContrato[4] ?></td>
          <td><?php echo $rowContrato[5] ?></td>
          <td><?php echo $rowContrato[6] ?></td>
          
          <td>
            <?php 
              switch ($rowContrato[7]){
                case "1":
                  echo '<span class="badge bg-warning">Arrendamiento</span>';
                  break;
                case "2":
                  echo '<span class="badge bg-primary">Propio</span>';
                  break;  
              }
            ?>
          </td>

          <td class="text-center">
            <a href="#" class="mr-3 btn-link-edit" title="Editar" data-toggle="modal" data-target="#modalEditarContrato" onclick="verDatosContrato('<?php echo $rowContrato[0] ?>')">
              <i class="fas fa-pen"></i>
            </a>
            <a href="#" class="btn-link-delete" title="Eliminar" onclick="eliminarContrato('<?php echo $rowContrato[0] ?>')">
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
