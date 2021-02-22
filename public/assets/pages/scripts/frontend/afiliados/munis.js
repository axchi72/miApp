$(function() {
    $('#departamento_id').on('change', onSelectDepartamentoChange);
});

function onSelectDepartamentoChange() {
    var departamento_id = $(this).val();

    if (! departamento_id) {
        $('#municipio_id').html('<option value="">Seleccione su Municipio</option>');
        return;
    }
    // AJAX
    $.get('/api/afiliados/'+departamento_id+'/municipios', function (data) {
        var html_select = '<option value="">Seleccione su Municipio</option>';
        for (var i=0; i<data.length; ++i)
            html_select += '<option value="'+data[i].id+'">'+data[i].nombre+'</option>';
            $('#municipio_id').html(html_select);
    });

}
