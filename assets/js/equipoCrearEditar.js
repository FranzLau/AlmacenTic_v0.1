jQuery(document).ready(function() {
  	$('#btnGuardarEquipo').click(function() {
		vacios = validarFrmVacio('formNuevoEquipo');
		if(vacios > 0){
			
			Swal.fire({
				icon: 'warning',
				title: 'Advertencia',
				text: 'Debes llenar los campos!'
			});
		 	return false;
		}
		var datos=$('#formNuevoEquipo').serialize();
		$.ajax({
			url: '../../public/procesos/equipos/crearEquipo.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (r==0) {
				
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'El equipo ya existe!'
				})

			}else if(!r.error){
				$('#tablaEquipos').load('../componentes/tablaEquipos.php');
				$('#formNuevoEquipo')[0].reset();
				$('#modalCrearEquipo').modal('hide');
				Swal.fire({
					icon: 'success',
					title: 'Se registró con éxito',
					showConfirmButton: false,
					timer: 1500
				})
			}else{

				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Hubo un error!'
				})
			}
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		return false;
	});
  //---------------------------UPDATE PRODUCTO---------------
  $('#btnEditarEquipo').click(function() {
		var datos=$('#formEditarEquipo').serialize();
		$.ajax({
			url: '../../public/procesos/equipos/actualizarEquipo.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (!r.error) {
				$('#tablaEquipos').load('../componentes/tablaEquipos.php');
			  	$('#modalEditarEquipo').modal('hide');

				Swal.fire({
					icon: 'success',
					title: 'Se actualizó con éxito',
					showConfirmButton: false,
					timer: 1500
				})

			}else{
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Hubo un error!'
				})
			}
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
  });
});
