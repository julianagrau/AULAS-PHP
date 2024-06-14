<?php
require_once "atdveiculos.php";

class Moto extends Veiculos {
    private $cavalete;

    public function velocidademaxima(){
        echo "A velocidade máxima que essa moto pode atingir é de 280km/h.";
    }

    public function __construct($marca, $modelo, $ano, $cavalete){
        parent::__construct($marca, $modelo, $ano); // Correção: __construct em vez de _construct
        $this->cavalete = $cavalete;
    }

    public function informacoesVeiculos(){
        parent::informacoesVeiculos();
        echo "Cavalete: " . $this->cavalete . "<br>"; // Correção: fechamento da tag "<br>"
    }
}
?>
