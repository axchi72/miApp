<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <div style="text-align:center">
        <h2>COPEMH</h2>
        <h4>Deducciones realizadas</h4>
        <p>al {{ Now()->format('d-M-Y')}}</p>
        <h3>{{$data->id}} - {{$data->nombre}} {{$data->apellido}}</h3>
        <h5>Afiliado desde: {{$data->f_afiliacion}}</h5>
    </div>
    <table>
        <thead>
            <tr>
                <td>Deducción</td>
                <td>Cantidad</td>
                <td>Detalle</td>
                <td>Mes</td>
                <td>Año</td>

            </tr>
        </thead>
        <tbody>
            @foreach ($data->deduccions as $deduc)
            <tr>
                <td>{{$deduc->cuenta->nombre}}</td>
                <td>{{$deduc->cantidad}}</td>
                <td>{{$deduc->detalle}}</td>
                <td>{{$deduc->mes}}</td>
                <td>{{$deduc->anio}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
