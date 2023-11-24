<html lang="es">
    <head>
        <title>Laboratorio 10.1</title>
        <link rel='stylesheet' type="text/css" href="css/estilo.css">
    </head>
    <body>
        <?php

        require_once("class/votos.php");

        if(array_key_exists('enviar',$_POST))
        {
            print ("<h1>Encuesta. Voto registrado</h1>\n");

            $obj_votos = new votos();
            $result_votos = $obj_votos->listar_votos();

            foreach ($result_votos as $result_voto){
                $votos1=$result_voto['votos1'];
                $votos2=$result_voto['votos2'];
            }

            $voto = $_REQUEST['voto'];
            if ($voto == "si")
                $votos1 = $votos1 + 1;
            elseif ($voto == "no")
                $votos2 = $votos2 + 1;

            $obj_votos = new votos();
            $result = $obj_votos->actualizar_votos($votos1, $votos2);

            if($result){
                print ("<p>Su voto ha sido registrado. Gracias por participar<p>\n");
                print ("<A HREF='lab102.php'>Ver resultados</A>\n");
            }
            else{
                print ("<A HREF='lab101.php'>Error al actualizar su voto</A>\n");
            }
        }
        else
        {
            ?>

            <h1>Encuestas</h1>

            <p>¿Cree ud. que el precio de la vivienda seguirá subiendo al ritmo actual</p>

            <FORM ACTION="lab101.php" METHOD="POST">
                <INPUT TYPE="RADIO" NAME="voto" VALUE="si" CHECKED>Si<BR>
                <INPUT TYPE="RADIO" NAME="voto" VALUE="no" CHECKED>No<BR><BR>
                <INPUT TYPE="SUBMIT" NAME="enviar" VALUE="votar">
            </FORM>

            <A HREF="lab102.php">Ver resultados</A>

        <?php
            }
        ?>

    </body>
</html>