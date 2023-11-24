<!DOCTYPE html>
<html>
<head>
    <title>Laboratorio 4.5</title>
</head>
<body>
    <h1>Laboratorio 4.5</h1>
    <form method="post">
        Ingrese un número par N para generar la matriz: <input type="number" name="n" required>
        <input type="submit" value="Generar Matriz">
    </form>

    <?php
    // Función para generar el tamaño de la matriz
    function generateIdentityMatrix($n) {
        $matrix = array();
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $matrix[$i][$j] = ($i == $j) ? 1 : 0;
            }
        }
        return $matrix;
    }

    // Manejar envío de formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $n = $_POST['n'];
        if ($n % 2 == 0) {
            $identityMatrix = generateIdentityMatrix($n);
            echo "<h2>Identity Matrix of Order $n:</h2>";
            echo "<table border='1'>";
            foreach ($identityMatrix as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Please enter an even number (N) to generate the identity matrix.</p>";
        }
    }
    ?>
</body>
</html>
