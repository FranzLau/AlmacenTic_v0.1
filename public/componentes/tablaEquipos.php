<?php
  session_start();
  require '../../config/conexion.php';
  require '../../config/data.php';
  $obj = new data();
  $sql = $con->query("SELECT * FROM equipo");
 ?>
<div class="table-responsive">
  <table class="table table-hover table-sm" id="tableProduc" width="100%" cellspacing="0">
    <thead class="thead-dark">
      <tr>
        <th>CODIGO</th>
        <th>TIPO</th>
        <th>NOMBRE</th>
        <th>SERIE</th>
        <th>MARCA</th>
        <th>STOCK</th>
        <th>CONTRATO</th>
        <th class="text-center">CONDICION</th>
        <th class="text-center">ESTADO</th>
        <th class="text-center">ACCION</th>
      </tr>
    </thead>
    <tbody class="bg-white">
      <?php while($mostrarprod = $sql->fetch_row()){ ?>
      <tr>
        <td><?php echo $mostrarprod[4] ?> <?php echo $mostrarprod[5] ?></td>
        <td><?php echo $obj->nomCategoria( $mostrarprod[1]) ?></td>
        <td><?php echo $mostrarprod[3] ?></td>
        <td><?php echo $mostrarprod[7] ?></td>
        <td><?php echo $mostrarprod[8] ?></td>
        <td>
          <?php 
          if ($mostrarprod[10]=="0"){
          ?>  
            <span class="badge bg-danger"><?php echo $mostrarprod[10] ?></span>
          <?php
          }else {
          ?>
            <span class="badge bg-primary"><?php echo $mostrarprod[10] ?></span>
          <?php
            }
          ?>
        </td>
        <td><?php echo $obj->nomContrato( $mostrarprod[2]) ?></td>
        <td class="text-center">
          <?php
            switch ($mostrarprod[12]) {
              case "B":
                echo '<span class="badge bg-success">BUENO</span>';
                break;
              case "M":
                echo '<span class="badge bg-danger">MALO</span>';
                break;
              case "R":
                echo '<span class="badge bg-warning">REGULAR</span>';
                break;
            }
          ?>
        </td>
        <td class="text-center">
          <?php
            switch ($mostrarprod[11]) {
              case "D":
                echo '<span class="badge bg-success">DISPONIBLE</span>';
                break;
              case "ND":
                echo '<span class="badge bg-warning">NO DISPONIBLE</span>';
                break;
              case "BAJA":
                echo '<span class="badge bg-danger">BAJA</span>';
                break;
            }
          ?>
        </td>
        <td class="text-center">
          <a href="#" class="btn-link-view mr-3" title="Ver Detalles" data-toggle="modal" data-target="#modalViewEquipo">
            <i class="fa-sharp fa-solid fa-eye"></i>
          </a>
          
          <a href="#" class="btn-link-edit mr-3" title="Editar" data-toggle="modal" data-target="#modalEditarEquipo" onclick="verDatosEquipos('<?php echo $mostrarprod[0] ?>')">
            <i class="fas fa-pencil-alt"></i>
          </a>

          <?php
            if ($_SESSION['loginUser']['id_rol'] == 1):
          ?>
          
          <a href="#" class="btn-link-delete" title="Eliminar" onclick="eliminarEquipo('<?php echo $mostrarprod[0] ?>')">
            <i class="fas fa-trash-alt"></i>
          </a>
          
          <?php endif; ?>
        </td>
       </tr>
       <?php } ?>
    </tbody>
  </table>
</div>
<script>
  $(document).ready(function() {
    $('#tableProduc').DataTable({
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
