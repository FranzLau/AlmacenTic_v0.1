<?php
  require '../../config/conexion.php';
  $sql = $con->query("SELECT * FROM movimiento ");
 ?>
 <div class="table-responsive">
   <table class="table table-sm table-hover" width="100%" cellspacing="0" id="tablaMovi">
     <thead>
       <tr>
         <th>ID</th>
         <th>NOMBRE</th>
         <th>DESCRIPCION</th>
         <th>OPCIONES</th>
       </tr>
     </thead>
     <tfoot>
       <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>DESCRIPCION</th>
          <th>OPCIONES</th>
       </tr>
     </tfoot>
     <tbody>
       <?php while($vercateg = $sql->fetch_row()){ ?>
         <tr>
           <td><?php echo $vercateg[0] ?></td>
           <td><?php echo $vercateg[1] ?></td>
           <td><?php echo $vercateg[2] ?></td>
           <td>
             <a href="#" class="btn-link-edit mr-3" title="Editar" data-toggle="modal" data-target="#modalEditarCategoria" onclick="leerCategoria('<?php echo $vercateg[0] ?>')"><i class="fas fa-pencil-alt"></i></a>
             <a href="#" class="btn-link-delete" title="Eliminar" onclick="eliminaCategoria('<?php echo $vercateg[0] ?>')"><i class="fas fa-trash-alt"></i></a>

           </td>
         </tr>
        <?php } ?>
     </tbody>
   </table>
 </div>
 <script>
  $(document).ready(function() {
    $('#tablaMovi').DataTable({
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