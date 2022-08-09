jQuery(document).ready(function() {
  $('#btnCrearCategoria').click(function() {
		vacios = validarFrmVacio('formNuevaCategoria');
		if(vacios > 0){
			
			Swal.fire({
				icon: 'warning',
				title: 'Advertencia',
				text: 'Debes llenar los campos!'
			  })

			return false;
		}
		var datos=$('#formNuevaCategoria').serialize();
		$.ajax({
			url: '../../public/procesos/categorias/crearCategoria.php',
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
					text: 'La categoria ya existe!'
				  })
			}else if(!r.error){
				$('#tablaCategoria').load('../componentes/tablaCategoria.php');
				$('#formNuevaCategoria')[0].reset();
				$('#modalCrearCategoria').modal('hide');
				Swal.fire({
					icon: 'success',
					title: 'Se registro con éxito',
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
  //---------------------------UPDATE CATEGORIA---------------
  $('#btnEditarCategoria').click(function() {
		var datos=$('#formEditarCategoria').serialize();
		$.ajax({
			url: '../../public/procesos/categorias/actualizarCategoria.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (!r.error) {
				$('#tablaCategoria').load('../componentes/tablaCategoria.php');
				$('#modalEditarCategoria').modal('hide');
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
