$(document).ready(function () {
    miApp.validacionGeneral('form-general');
    $('#icono').on('blur', function () {
        $('#mostrar-icono').removeClass().addClass('fas fa- ' + $(this).val());
    });
});
