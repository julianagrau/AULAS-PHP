<?php
require_once "atdveiculos.php";

class Carro extends Veiculos {
    private $porta;

    public function velocidademaxima(){
        echo "A velocidade máxima que esse carro pode atingir é de 250km/h.";
    }

    public function __construct($marca, $modelo, $ano, $porta){
        parent::__construct($marca, $modelo, $ano);
        $this->porta = $porta;
    }

    public function informacoesVeiculos(){
        parent::informacoesVeiculos();
        echo "Porta: " . $this->porta . "<br>";
    }
}
?>

