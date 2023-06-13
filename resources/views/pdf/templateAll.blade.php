<!DOCTYPE html>
<html>

<head>
    <style>
        /* Agrega estilos CSS para el PDF aquí */
    </style>
</head>

<body>
    <h1>Gobierno de El
        Salvador</h1>

    <h2>Despacho de seguridad nacional</h2>

    <?php date_default_timezone_set('America/El_Salvador');

    $fechaActual = date('d-m-Y');
    $horaActual = date('h:i:s'); ?>
    <h3>Fecha {{ $fechaActual }}</h3>


    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre del Proyecto</th>
                <th>Fuente de Fondos</th>
                <th>Monto Planificado</th>
                <th>Monto Patrocinado</th>
                <th>Monto Fondos Propios</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $proyecto)
                <tr>
                    <td>{{ $proyecto->id }}</td>
                    <td>{{ $proyecto->NombreProyecto }}</td>
                    <td>{{ $proyecto->FuenteFondos }}</td>
                    <td>{{ $proyecto->MontoPlanificado }}</td>
                    <td>{{ $proyecto->MontoPatrocinado }}</td>
                    <td>{{ $proyecto->MontoFondosPropios }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
