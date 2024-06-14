<?php
    class Veiculos {
        public $marca;
        public $modelo;
        public $ano;
        private $proprietario;

        public function velocidademaxima(){
            echo "A velocidade maxima que esse carro pode atingir é 180km por segundo";
        }

        public function __construct ($marca, $modelo, $ano){
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
        }

        public function informacoesVeiculos(){
            echo "Marca: " . $this->marca . "<br>";
            echo "Modelo: " . $this->modelo . "<br>";
            echo "Ano: " . $this->ano . "<br>";
        }

    }
?>




    