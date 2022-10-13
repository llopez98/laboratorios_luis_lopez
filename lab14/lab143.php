<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 11.1</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h1>Consulta de noticias</h1>
    <?php
    if(isset($_SESSION["usuario_valido"])){
        require_once("class/noticias.php");
        $last = 0;
        if(array_key_exists('enviarA', $_POST)){
            $last = $_REQUEST['lastA'];
        }else if(array_key_exists('enviarS', $_POST)){
            $last = $_REQUEST['lastS'];
        }
        

        $obj_noticia = new noticia();
        $noticias = $obj_noticia->consultar_noticias_paginadas($last);

        $obj_totales = new noticia();
        $totales = $obj_totales->consultar_noticias();

        $total_noticias = count($totales);

        $nfilas = count($noticias);

        $primero = $noticias[0]['id'];

        $last = $noticias[$nfilas-1]['id'];

        print("<form action='lab111.php' method='post'>");
        print("Mostrando noticias de $primero a $last de un total de $total_noticias [ ");
        //anterior
        

        print("<input type='text' value='".($last-7)."' name='lastA' hidden>");
        if($last <= 5){
            print("<input type='submit' name='enviarA' value='Anterior' disabled='disabled'>");
        }else{
            print("<input type='submit' name='enviarA' value='Anterior'>");
        }
        

        //siguiente
        print(" | ");


        print("<input type='text' value='".($last)."' name='lastS' hidden>");
        if($last == $total_noticias){
        print("<input type='submit' name='enviarS' value='Siguiente' disabled='disabled'> ]");}
        else{
            print("<input type='submit' name='enviarS' value='Siguiente'> ]");
        }
        print("</form>");


        if($nfilas > 0){
            print ("<TABLE>\n");
            print ("<TR>\n");
            print ("<TH>Titulo</TH>\n");
            print ("<TH>Texto</TH>\n");
            print ("<TH>Categoria</TH>\n");
            print ("<TH>Fecha</TH>\n");
            print ("<TH>Imagen</TH>\n");
            print ("</TR>\n");

            foreach($noticias as $resultado){
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