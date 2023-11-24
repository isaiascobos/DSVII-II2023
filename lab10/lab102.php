<html lang="es">
    <head>
        <title>Laboratorio 10.2</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>

    <h1>Encuesta. Resultados de la votacion</h1>

    <?php
        require_once("class/votos.php");

        $obj_votos = new votos();
        $result_votos = $obj_votos->listar_votos();

        foreach ($result_votos as $result_votos){
            $votos1=$result_voto['votos1'];
            $votos2=$result_voto['votos2'];
        }
        
        $totalvotos = $votos1 + $votos2;

        print ("<table>\n");
        print ("<TR>\n");
        print ("<TH>Respuesta</TH>\n");
        print ("<TH>Votos</TH>\n");
        print ("<TH>Porcentaje</TH>\n");
        print ("<TH>Representación gráfica</TH>\n");
        print ("</TR>\n");
        $porcentaje = round(($votos1/$totalVotos)*100,2);
        print ("<TR>\n");
        print ("<TD class='izquierda'>Si</td>\n");
        print ("<TD class='derecha'>$votos1</td>\n");
        print ("<TD class='derecha'>$porcentaje%</td>\n");
        print ("<TD class='izquierda' width='400'><img src='img/puntoamarillo.gif' height='10' width='". $porcentaje*4 ."'></td>\n");
        print ("</TR>\n");
        
        $porcentaje = round(($votos2/$totalVotos)*100,2);
        print ("<TR>\n");
        print ("<TD class='izquierda'>No</td>\n");
        print ("<TD class='derecha'>$votos2</td>\n");
        print ("<TD class='derecha'>$porcentaje%</td>\n");
        print ("<TD class='izquierda' width='400'><img src='img/puntoamarillo.gif' height='10' width='". $porcentaje*4 ."'></td>\n");
        print ("</TR>\n");
        
        print ("</table>\n");
        print ("<p>Numero total de votos emitidos: $totalVotos</p>\n");
        print ("<p><a href='lab111.php'>Pagina de votacion</a></p>\n");
        ?>
        
    </body>

</html>