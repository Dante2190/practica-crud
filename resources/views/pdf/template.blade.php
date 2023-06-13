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


    <p><b>Id:</b> {{ $proyecto->id }}</p>
    <p><b>Nombre Proyecto:</b> {{ $proyecto->NombreProyecto }}</p>
    <p><b>Fuente Fondos:</b> {{ $proyecto->FuenteFondos }}</p>
    <p><b>Monto Planificado:</b> {{ $proyecto->MontoPlanificado }}</p>
    <p><b>Monto Patrocinado:</b> {{ $proyecto->MontoPatrocinado }}</p>
    <p><b>Monto Fondos Propios:</b> {{ $proyecto->MontoFondosPropios }}</p>
</body>

</html>
