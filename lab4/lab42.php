<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta 4.2</title>
</head>
<body>
    <center>
        <?php 
            $numero = $_REQUEST['numero'];
            $factorial = 1;

            if($numero != ''){
                for($i = 1; $i <= $numero; $i++){
                    $factorial = $factorial * $i;
                }
                echo "El factorial del número: $numero es $factorial";
            }else{
                echo "<h3>Debe de insertar un número en el formulario</h3>";
            }
        ?>
    </center>
</body>
</html>