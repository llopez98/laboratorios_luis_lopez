<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.5</title>
</head>
<body>
    <center>
        <h2>Matriz de identidad</h2>
        <form action="lab45.php" method="post">
            Introduzca el orden de la matriz de identidad: <input type="text" name="tam"><br>
            <br>
            <input type="submit" value="Enviar dato" name="enviar">
        </form>
        <br>

        <?php 
            if(array_key_exists("enviar", $_POST)){
                if($_REQUEST['tam'] != ''){
                    $tam = $_REQUEST['tam'];
                    for ($i=0; $i < $tam; $i++) { 
                        for ($j=0; $j < $tam; $j++) { 
                            if($j == $i){
                                echo "[1] ";
                            }else {
                                echo "[0] ";
                            }
                        }
                        echo "<br>";
                    }
                }else{
                    echo "<h2>Debe de ingresar un número</h2>";
                }
            }
        ?>
    </center>
</body>
</html>