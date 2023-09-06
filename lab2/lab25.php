<html>
<head>
    <title>Laboratorio 2.5</title>
</head>
<body>
    <?php
    $figuras = array('cuadrado', 'triángulo', 'circulo');
    $figuras[1] = 'rectángulo';
    mostrar_figuras($figuras,"asignación de rectangulo");

    array_push($figuras, 'pentagono');
    mostrar_figuras($figuras, "adicion de pentagono al final");

    array_unshift($figuras, 'hexagono');
    mostrar_figuras($figuras, "adicion de hexagono al inicio");

    array_pop($figuras);
    mostrar_figuras($figuras, "eliminación del último");

    array_shift($figuras);
    mostrar_figuras($figuras, "eliminación del primero");

    function mostrar_figuras($figuras, $mensaje){
        echo "<br>Arreglo después de $mensaje <br>";
        foreach( $figuras as $figura){
            echo "$figura <br>";
        }
    }
    ?>
</body>
</html>