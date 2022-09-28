<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.3</title>
</head>
<body>
    <center>
        <h2>Llenar un arreglo de 20 elementos diferentes:</h2>
        <form action="lab83.php" method="post">
            <?php 
                for($i = 1; $i <= 20; $i++){
                    echo 'Número '.$i.': <input type="text" name="num'.$i.'"><br>';
                }
            ?>
            <br>
            <input type="submit" value="Enviar datos" name="enviar">
            <br>
        </form>

        <?php
            include('class_lib.php');

            if(array_key_exists('enviar', $_POST)){
                $array = array();
                for($i = 0; $i < 20; $i++){
                    array_push($array, $_REQUEST['num'.$i+1]);
                }

                $arreglo = new Arreglo($array);

                $mayor = $arreglo->buscarNumMayor();
                $posicion = $arreglo->buscarPosMayor();

                

                echo '<p>El número mayor almacenado es: '.$mayor.' en la posición: '.$posicion.'</p>';
            }else{
                echo "<h3>El arreglo aún no a sido enviado</h3>";
            }

            
        ?>
    </center>
</body>
</html>