jQuery(document).ready(function() {
  //CREAR EMPLEADO
  $('#btnGuardarEmpleado').click(function() {
    vacios = validarFrmVacio('formNuevoEmpleado');
		if(vacios > 0){

			Swal.fire({
				icon: 'warning',
				title: 'Advertencia',
				text: 'Debes llenar los campos!'
			  })

		  return false;
		}
		var datos=$('#formNuevoEmpleado').serialize();

		$.ajax({
			url: '../../public/procesos/empleados/crearEmpleado.php',
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
					text: 'El empleado ya existe!'
				})

			}else if (!r.error) {
				$('#tablaEmpleados').load('../componentes/tablaEmpleados.php');
				$('#formNuevoEmpleado')[0].reset();
				$('#modalNuevoEmpleado').modal('hide');
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
  //------- ACTUALIZAR EMPLEADO -----------------------------------------------------
  $('#btnEditarEmpleado').click(function() {
		var datos = $('#formEditarEmpleado').serialize();

		$.ajax({
			url: '../../public/procesos/empleados/actualizarEmpleado.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
		})
		.done(function(r) {
			if (!r.error) {
				$('#tablaEmpleados').load('../componentes/tablaEmpleados.php');
				$('#modalEditarEmpleado').modal('hide');
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
