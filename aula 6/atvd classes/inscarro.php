<?php
    require_once "carros.php";

    $carro = new Carro ("BMW", "X5", "2020", "fibra de carbono");
    
    $carro->informacoesVeiculos();
    $carro->velocidademaxima();
    echo "<br>";
?>