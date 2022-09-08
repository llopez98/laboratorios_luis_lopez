<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.4</title>
</head>

<body>
    <center>
        <h2>Arreglo de números pares:</h2>
        <?php
        if (array_key_exists('enviar', $_POST)) {
            $array = array();

            for ($i = 0; $i < 5; $i++) {
                array_push($array, $_REQUEST['num' . $i + 1]);
            }

            $flag = true;
            $count = 0;

            while ($flag) {
                if (($array[$count] % 2) != 0) {
                    $pos = $count + 1;
                    echo "<h2>Introduzca el número correcto en la posición Número: " . $pos . "</h2>";
        ?>
                    <form action="lab44.php" method="post">
                        <?php
                        echo 'Número 1:<input type="text" name="num1" value="' . $array[0] . '"><br>';
                        echo 'Número 2:<input type="text" name="num2" value="' . $array[1] . '"><br>';
                        echo 'Número 3:<input type="text" name="num3" value="' . $array[2] . '"><br>';
                        echo 'Número 4:<input type="text" name="num4" value="' . $array[3] . '"><br>';
                        echo 'Número 5:<input type="text" name="num5" value="' . $array[4] . '"><br>';
                        ?>
                        <br>
                        <input type="submit" value="Enviar datos" name="enviar">
                        <br>
                    </form>
            <?php
                } 
                if($count == 4){
                    $flag = false;
                }
                $count++;
            }
            echo "El array ingresado es el siguiente: <br><br>";
            for ($i = 0; $i < count($array); $i++) {
                echo $array[$i] . "<br>";
            }
        } else {
            ?>
            <form action="lab44.php" method="post">
                Número 1:<input type="text" name="num1" id=""><br>
                Número 2:<input type="text" name="num2" id=""><br>
                Número 3:<input type="text" name="num3" id=""><br>
                Número 4:<input type="text" name="num4" id=""><br>
                Número 5:<input type="text" name="num5" id=""><br>
                <br>
                <input type="submit" value="Enviar datos" name="enviar">
                <br>
            </form>
        <?php
        }
        ?>
    </center>
</body>

</html>