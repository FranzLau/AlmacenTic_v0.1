<?php
	session_start();
	require '../../config/data.php';
  	$obj = new data();
?>
<div class="row">
   	<div class="col-sm-9">
		<div style="height: 200px; width: 100%;border: 1px solid #e0e0ef;overflow-y: scroll;" class="table-responsive">
			<table class="table table-sm table-bordered">
	       		<thead class="bg-light">
					<tr>
						<th scope="col">Codigo</th>
						<th scope="col">Cant.</th>
						<th scope="col">Descripción</th>
						<th scope="col">Marca</th>
						<th scope="col">Serie</th>
						<th scope="col" class="text-center"><i class="fas fa-trash"></i></th>
					</tr>
	       		</thead>
	       		<tbody>
					<?php
						
						if(isset($_SESSION['AsigEquipoTemp'])):
						$i=0;
						foreach (@$_SESSION['AsigEquipoTemp'] as $key) {
							$d= explode("||", @$key);

					?>
							<tr>
								<td><?php echo $d[6]; ?></td>
								<td><?php echo $d[9]; ?></td>
								<td><?php echo $d[7]; ?></td>
								<td><?php echo $d[5]; ?></td>
								<td><?php echo $d[4]; ?></td>
								<td class="text-center">
									<button class="btn btn-danger btn-sm" onclick="RemoveArticle('<?php echo $i; ?>')">
										<i class="fas fa-times"></i>
									</button>
								</td>
							</tr>
	         		<?php
							$i++;
							$cliente = $d[2];
							$ubicacion = $obj->nameArea($d[12]);
							}
	         			endif;
	       			?>
	       </tbody>
	     </table>
		 </div>
   </div>

	<div class="col-md-3">
		<h6 class="font-weight-bold">Responsable:</h6>
		<p id="clienteResp"></p>
		<h6 class="font-weight-bold">Ubicación:</h6>
		<p id="clienteUbic"></p>
		<button class="btn btn-success w-100" onclick="generarAsignacion()">
       		<i class="fas fa-save"></i>
       		Asignar
     	</button>
	</div>

 </div>

<script>
	$(document).ready(function() {
		nombre = "<?php echo @$cliente ?>";
		ubica = "<?php echo @$ubicacion ?>";

		$('#clienteResp').text(nombre);
		$('#clienteUbic').text(ubica);
	});
</script>
