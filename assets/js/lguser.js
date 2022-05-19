jQuery(document).ready(function() {
    console.log("Pagina lista");
    $('#btnlg').click(function() {
        /* Act on the event */
        /*var datos = $('#frmlg').serialize();*/
        var userform = $('#userlg').val();
        var passform = $('#passlg').val();

        if (userform == "" || passform == "") {
            alertify.error("Ingrese datos porfavor");
        }else{
            $.ajax({
                url: 'login.php',
                type: 'POST',
                dataType: 'json',
                data: {login:1,
                    userphp:userform,
                    passphp:passform},
                success:function(){

                }
            })
            .done(function(response) {
                console.log(response);
                if (!response.error) {
                    location.href = 'public/views/';
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Datos Incorrectos!'
                      })
                }
            })
            .fail(function(r) {
                console.log(r.responseText);
            })
            .always(function() {
                console.log("complete");
            });
        }
    });
});
