<?php
	session_start();
	require '../../config/data.php';
  $obj = new data();
 ?>
 
 <div class="row">
	 <div class="col-sm-9">
		<div class="table-responsive">
			<table class="table table-sm table-bordered table-hover">
				<thead class="thead-dark">
					<tr>
						<th scope="col" class="text-center">Codigo</th>
						<th scope="col" class="text-center">Cant.</th>
						<th scope="col">Descripción</th>
						<th scope="col" class="text-center">Marca</th>
						<th scope="col" class="text-center">Serie</th>
						<th scope="col" class="text-center">Etiqueta</th>
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
						<td class="text-center"><?php echo $d[12]; ?><span>-</span><?php echo $d[13]; ?></td>
						<td class="text-center"><?php echo $d[8]; ?></td>
						<td><?php echo $d[10]; ?></td>
						<td class="text-center"><?php echo $d[11]; ?></td>
						<td class="text-center"><?php echo $d[7]; ?></td>
						<td class="text-center"><?php echo $d[9]; ?></td>
						<td class="text-center">
							<button class="btn btn-danger btn-sm" onclick="quitarEquipo('<?php echo $i; ?>')">
								<i class="fas fa-times"></i>
							</button>
						</td>
					</tr>
					<?php
						$i++;
						$userDestino = $d[2];
						$sedeDestino = $obj->nomSede($d[3]);
						}
						endif;
					?>
				</tbody>
			</table>
		</div>
	 </div>
	 <div class="col-sm-3">
		<div class="card">
			<div class="card-header bg-dark">
				<h6 class="m-0 font-weight-bold text-white">Resumen Destino</h6>
			</div>
			<div class="card-body">
				<h6 class="font-weight-bold">Responsable:</h6>
				<p id="clienteResp"></p>
				<h6 class="font-weight-bold">Sede:</h6>
				<p id="clienteUbic"></p>
				<hr>
				<button class="btn btn-success btn-sm btn-block" onclick="generarAsignacion()">
					<i class="fa-solid fa-floppy-disk mr-2"></i>Generar Asignacion
				</button>
			</div>
		</div>
	 	
		
	 </div>
 </div>

<script>
  $(document).ready(function() {
    nomDestino = "<?php echo @$userDestino ?>";
	destDestino = "<?php echo @$sedeDestino ?>";
    $('#clienteResp').text(nomDestino);
	$('#clienteUbic').text(destDestino);
  });
</script>
