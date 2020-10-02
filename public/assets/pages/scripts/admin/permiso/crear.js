$(document).ready(function () {
    miApp.validacionGeneral('form-general');
    $('#nombre').on('change', function () {
        $('#slug').val($(this).val().toLowerCase().replace(/ /g, '-'))
    })
});
