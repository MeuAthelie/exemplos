<?php

    class NomeClasse {
        private $atributo1;
        private $atributo2;
        private $atributo3;

        public function __construct($a1,$a2,$a3){
            $this->set_atributo1($a1);
            $this->set_atributo2($a2);
            $this->set_atributo3($a3);
        }
        public function set_atributo1($valor){
            $this->atributo1 = $valor;
        }
        public function set_atributo2($valor){
            $this->atributo2 = $valor;
        }
        public function set_atributo3($valor){
            $this->atributo3 = $valor;
        }
        public function get_atributo1(){
            return($this->atributo1);
        }
        public function get_atributo2(){
            return($this->atributo2);
        }
        public function get_atributo3(){
            return($this->atributo3);
        }
        
    }
?>