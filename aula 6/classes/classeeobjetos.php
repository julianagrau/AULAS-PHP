<?php
    class  Usuario {
        //atributos da classe
        public $nome;
        protected $cpf;
        private $endereco;

        //construtor da classe 
        function Usuario(){
            $this->preparaUsuario();
        }
         //Métodos
        private function preparaUsuario(){
            $this->nome = "Leonardo";
            $this->cpf = "99999999999";
            $this->endereco = "Rua Fulano de Tal numero 0";
        }
        public function getCpf (){
            return $this->cpf;
        }
        public function getNome(){
            return $this->nome;
        }
        function getEndereco(){
            return $this->endereco;
        }
    }
    //instanciando o objeto e acessando seus respectivos métodos
    $usu = new Usuario();
    $usu->getCpf();
    $usu->getNome();
?> 
