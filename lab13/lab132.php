<?php
if (array_key_exists('enviar', $_POST)) {
    $expire = time() + 60 + 5;
    setcookie("user", $_REQUEST['visitante'], $expire);
    header("Refresh:0");
}

?>

<html lang="es">

<head>
    <title>Laboratorio 13</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <h1>Creacion de Cookies</h1>
    <h2>La cookie "User" tendrá solo 5 minutos de duración</h2>
    <?php
    if (isset($_COOKIE["user"])) {
        print("<br/> Hola <b>" . $_COOKIE["user"] . "</b> gracias por visitar nuestro sitio web<br/>");
    } else { ?>
        <form action="lab132.php" method="post" name="formcookie">
            <br />Hola, primera vez que te vemos por nuestro sitio web ¿Como te llamas?
            <input type="text" name="visitante">
            <input type="submit" value="Gracias por identificarte" name="enviar"><br />
        </form>
    <?php
    }
    ?>
    <br /> <a href="lab133.php">Continuar...</a>
</body>

</html>