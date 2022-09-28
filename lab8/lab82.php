<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.2</title>
</head>
<body>
    <center>
        <h2>Calcular factorial</h2>
        <br>
        <form action="lab82.php" method="post">
            Introduzca el número a calcular factorial: <input type="text" name="numero">
            <br><br>
            <input type="submit" value="Enviar datos" name="enviar">
        </form>
        <?php 
            include('class_lib.php');

            if(array_key_exists('enviar', $_POST)){
                if($_REQUEST['numero'] != ''){
                    $fact = new Factorial($_REQUEST['numero']);

                    echo "El factorial del número: ".$_REQUEST['numero']." es ".$fact->calcularFactorial();
                }else{
                    echo "<h3>Debe de insertar un número en el formulario</h3>";
                }
            }else {
                echo "No se a introducido ningun número!";
            }
        ?>
    </center>
</body>
</html>