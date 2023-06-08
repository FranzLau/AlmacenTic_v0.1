jQuery(document).ready(function() {
  $('#btnAgregarContrato').click(function() {
    vacios = validarFrmVacio('formNuevoContrato');
    if(vacios > 0){
      
      Swal.fire({
				icon: 'warning',
				title: 'Advertencia',
				text: 'Debes llenar los campos!'
			})

      return false;
    }
    var datos=$('#formNuevoContrato').serialize();
    $.ajax({
      url: '../../public/procesos/contratos/crearContrato.php',
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
					text: 'El contrato ya existe!'
				  })
       
      }else if(!r.error){
        
        $('#tablaContratos').load('../componentes/tablaContratos.php');
        $('#formNuevoContrato')[0].reset();
		$('#modalCrearContrato').modal('hide');
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
  //---------------------------UPDATE AREA-----------------------------
  $('#btnEditarContrato').click(function() {
		var datos=$('#formEdContrato').serialize();
		$.ajax({
			url: '../../public/procesos/contratos/actualizarContrato.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (!r.error) {
			  $('#tablaContratos').load('../componentes/tablaContratos.php');
				$('#modalEditarContrato').modal('hide');
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
