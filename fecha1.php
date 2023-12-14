<html>
<head>
    <title>Problema</title>
</head>
<body>
    <?php
    echo "La fecha de hoy es:";
    setlocale(LC_TIME, 'es_ES'); // Establece la configuración regional en español
    $fecha = strftime("%d de %B del %Y");
    echo $fecha;
    echo "<br>";
    echo "La fecha actual es:";
    $hora = date("H:i:s");
    echo $hora;
    echo "<br>";
    ?>
    <a href="fecha2.php">Siguiente problema </a>
</body>
</html>