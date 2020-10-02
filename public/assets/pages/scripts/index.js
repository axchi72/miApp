$(document).ready(function () {
    $("#tabla-data").on('submit', '.form-eliminar', function () {
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
                ajaxRequest(form);
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire(
                    'Cancelado',
                    'el registro esta seguro :)',
                    'success'
                )
            }
        });
    });

    function ajaxRequest(form) {
        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: form.serialize(),
            success: function (respuesta) {
                if (respuesta.mensaje == "ok") {
                    form.parents('tr').remove();
                    miApp.notificaciones('El registro fue eliminado correctamente', 'SIGCOPEMH', 'success');
                } else {
                    miApp.notificaciones('El registro no pudo ser eliminado, hay recursos usandolo', 'SIGCOPEMH', 'error');
                }
            },
            error: function () {

            }
        });
    }
});
