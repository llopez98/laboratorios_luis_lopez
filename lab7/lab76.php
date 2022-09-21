<?php 
    include("class_lib.php");

    $diam = $_POST['diam'];
    $altu = $_POST['altu'];

    $cli = new Cilindro($diam, $altu);

    $volumen = $cli->calc_volumen();
    $area= $cli->calc_area();

    echo "<br/> El volumen del cilindro es de ". $volumen . " metros cubicos";
    echo "<br/> El area del cilindro es de ".$area . " metros cuadrados";
?>