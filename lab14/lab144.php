<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 9.2</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h1>Consulta de noticias</h1>
    <form name="FormFiltro" action="lab92.php" method="post">
        <br/>
        Filtrar por: <select name="campos">
            <option value="texto" selected>Descripcion
            <option value="titulo">Titulo
            <option value="categoria">Categoria
        </select>
        con el valor
        <input type="text" name="valor">
        <input type="submit" value="Filtrar Datos" name="ConsultarFiltro"/>
        <input type="submit" value="Ver todos" name="ConsultarTodos">
    </form>
    <?php
    if(isset($_SESSION["usuario_valido"])){
        require_once("class/noticias.php");

        $obj_noticia = new noticia();
        $noticias_new = $obj_noticia->consultar_noticias();

        if(array_key_exists('ConsultarTodos', $_POST)){
            $obj_noticia = new noticia();
            $noticias_new = $obj_noticia->consultar_noticias();
        }

        if(array_key_exists('ConsultarFiltro', $_POST)){
            $obj_noticia = new noticia();
            $noticias_new = $obj_noticia->consultar_noticias_filtro($_REQUEST['campos'], $_REQUEST['valor']);
        }

        $nfilas = count($noticias_new);

        if($nfilas > 0){
            print ("<TABLE>\n");
            print ("<TR>\n");
            print ("<TH>Titulo</TH>\n");
            print ("<TH>Texto</TH>\n");
            print ("<TH>Categoria</TH>\n");
            print ("<TH>Fecha</TH>\n");
            print ("<TH>Imagen</TH>\n");
            print ("</TR>\n");

            foreach($noticias_new as $resultado){
                print ("<TR>\n");
                print ("<TD>". $resultado['titulo'] ."</TD>\n");
                print ("<TD>". $resultado['texto'] ."</TD>\n");
                print ("<TD>". $resultado['categoria'] ."</TD>\n");
                print ("<TD>". date("j/n/Y", strtotime($resultado['fecha'])) ."</TD>\n");

                if($resultado['imagen'] != ""){
                    print ("<TD><A TARGET='_blank' HREF='img/" . $resultado['imagen'] .
                "'><IMG BORDER='0' SRC='img/iconotexto.gif'></A></TD>\n");
                }
                else{
                    print ("<TD>&nbsp;</TD>\n");
                }
                print ("</TR>\n");
            }
            print ("</TR>\n");
        }
        else{
            print("No hay noticias disponibles");
        }?>
        <p>[ <a href="login.php">Menu principal</a> ]</p><?php }
        else{
            print ("<br><br>\n");
            print("<p align='center'>Acceso no autorizado</p>\n");
            print("<p align='center'> [ <a href='login.php' target='_top'>Conectar</a> ] </p>\n");
        }
    ?>
</body>
</html>