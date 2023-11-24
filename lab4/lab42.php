<?php

    $num = $_POST['num'];
    $fact=1;
    
    for ($i=1; $i <=$num ; $i++) {
        $fact = $fact* $i;
    }

    echo "El factorial de " .$num. " es " .$fact. " <br>";

?>
