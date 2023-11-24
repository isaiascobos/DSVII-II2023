<?php
    $num = $_POST['num'];

        if ($num>80) {
        echo "¡Más del 79%!";
        echo '<br/> <br/> <img src="pic/verde.jpg"/>';

        }elseif ($num>=50 && $num<=79) {
        echo "Entre 50 y 79%";
        echo '<br/> <br/> <img src="pic/amarillo.jpg"/>';

        } else {
        echo "¡Menos del 50%!";
        echo '<br/> <br/> <img src="pic/rojo.jpg"/>';
    }

?>