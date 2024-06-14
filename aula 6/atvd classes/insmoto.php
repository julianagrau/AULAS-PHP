<?php
    require_once "moto.php";

    $moto = new Moto ("Honda", "CB 500", "2013", "metal");
    
    $moto->informacoesVeiculos();
    $moto->velocidademaxima();
    echo "<br>";
?>