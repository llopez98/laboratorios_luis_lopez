<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 10.1</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
    <?php 
        require_once("class/votos.php");

        if(array_key_exists('enviar', $_POST)){
            print ("<H1>Encuesta. Voto registrado</H1>\n");

            $obj_votos = new votos();
            $result_votos = $obj_votos->listar_votos();

            foreach ($result_votos as $result_voto){
                $votos1 = $result_voto['votos1'];
                $votos2 = $result_voto['votos2'];
            }

            $voto = $_REQUEST['voto'];
            if($voto == "si")
                $votos1 = $votos1 +1;
            else if($voto == "no")
                $votos2 = $votos2 +1;

            $obj_votos = new votos();
            $result = $obj_votos->actualizar_votos($votos1, $votos2);

            if($result){
                print ("<P>Su voto ha sido registrado. Gracias por participar</P>\n");
                print ("<A HREF='lab102.php'>Ver resultados</A>");
            }else{
                print("<A HREF='lab101.php'>Error al actualizar su voto</A>\n");
            }
        }else{
            ?>
            <h1>Encuesta</h1>

            <p>¿Cree ud. que el precio de la vivienda seguira subiendo al ritmo actual?</p>

            <form action="lab101.php" method="post">
                <input type="radio" name="voto" value="si" checked>Si<br>
                <input type="radio" name="voto" value="no">No<br><br>
                <input type="submit" name="enviar" value="votar">
            </form>

            <a href="lab102.php">Ver resultados</a>
            <?php
        }
    ?>
</body>
</html>