$(document).ready(function () {
    $("#tabla-data").on('submit', '.form-eliminar', function (event) {
        event.preventDefault();
        const form = $(this);
        Swal.fire({
            title: '¿ Está seguro que desea eliminar el registro ?',
            text: 'Esta acción no se puede deshacer!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar',
            position: 'center',
        }).then((result) => {
            if (result.value) {
                ajaxRequest(form.serialize(), form.attr('action'), 'eliminarPost', form);
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire(
                    'Cancelado',
                    'el registro esta seguro :)',
                    'success'
                )
            }
        });
    });

    $('.ver-post').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        const data = {
            _token: $('input[name=_token]').val()
        }
        ajaxRequest(data, url, 'verPost');
    });

    function ajaxRequest(data, url,funcion, form=false) {
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function (respuesta) {
                if (funcion == "eliminarPost") {
                    if (respuesta.mensaje == "ok"){
                        form.parents('tr').remove();
                        miApp.notificaciones('El registro fue eliminado correctamente', 'MiApp', 'success');
                    }else {
                        miApp.notificaciones('El registro no pudo ser eliminado, hay recursos usandolo', 'miApp', 'error');
                    }

                } else if (funcion == 'verPost') {
                    $('#modal-ver-post .modal-body').html(respuesta)
                    $('#modal-ver-post').modal('show');
                }
            },
            error: function () {

            }
        });
    }
});


