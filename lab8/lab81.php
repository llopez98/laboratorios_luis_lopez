<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.1</title>
</head>
<body>
    <form action="lab81.php" method="post">
        Introduzca el porcentaje de desempeño en las ventas entre 1 y 100: <input type="text" name="valor" value="">
        <br>
        <input type="submit" value="Enviar datos" name="enviar">
    </form>
    <br>
    <center>
    <?php 
        include('class_lib.php');

        if(array_key_exists('enviar', $_POST)){
            $desempeno = new Desempeno($_REQUEST['valor']);
            
            echo $desempeno->printImage();
        }
        else{
            echo "No se a enviado el porcentaje!";
        }
    ?>
    </center>
</body>
</html>