<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.1</title>
</head>
<body>
    <form action="lab41.php" method="post">
        Introduzca el porcentaje de desempeño en las ventas entre 1 y 100: <input type="text" name="valor" value="">
        <br>
        <input type="submit" value="Enviar datos" name="enviar">
    </form>
    <br>
    <center>
    <?php 
        if(array_key_exists('enviar', $_POST)){
            if($_REQUEST['valor'] >= 80){
                echo '<img src="img/img01.png" alt="">';
            }
            elseif ($_REQUEST['valor'] >= 50 AND $_REQUEST['valor'] <= 79){
                echo '<img src="img/img02.png" alt="">';
            }else {
                echo '<img src="img/img03.png" alt="">';
            }
        }
        else{
            echo "No se a enviado el porcentaje!";
        }
    ?>
    </center>
</body>
</html>