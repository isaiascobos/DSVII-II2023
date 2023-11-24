<!DOCTYPE html>
<html>
<head>
    <title>Laboratorio 4.3</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Manejo de arreglos</h1>

    <?php 
    // Initialize array
    $array = array();

    // Fill the array with random values
    for ($i = 0; $i < 20; $i++) {
        $array[$i] = rand(1, 100);
    }

    // Find the largest element and its position
    $maxValue = max($array);
    $maxIndex = array_search($maxValue, $array);
    ?>

    <h2>Array elements:</h2>
    <?php
    // Display array elements
    for ($i = 0; $i < 20; $i++) {
        echo "Element " . ($i+1) . ": " . $array[$i] . "<br>";
    }
    ?>

    <h2>Largest Element:</h2>
    <?php
    // Display largest element and its position
    echo "Position: " . ($maxIndex+1) . "<br>";
    echo "Value: " . $maxValue;
    ?>
</body>
</html>
