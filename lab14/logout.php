<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Desconectar</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <?php 
        if(isset($_SESSION["usuario_valido"]))
        {
            session_destroy();
            print("<br><br><p align='center'>Conexion finalizada</p>\n");
            print("<p align='center'>[ <a href='login.php'>Conectar</a> ]</p>\n");
        }else{
            print("<br><br>\n");
            print("<p align='center'>No existe una conexion activa</p>\n");
            print("<p align='center'>[ <a href='login.php'>Conectar</a> ]</p>\n");
        }
    ?>
</body>
</html>