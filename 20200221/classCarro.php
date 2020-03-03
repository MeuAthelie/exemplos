<?php
    class Carro{
        //Lista de atributos
        private $cor;
        private $qtd_porta;
        private $velocidade_max;
        private $velocidade_atual;

        public function get_cor(){
            return($this->cor);
        }
        public function get_qtd_porta(){
            return($this->qtd_porta);
        }
        public function get_velocidade_max(){
            return($this->velocidade_max);
        }
        public function get_velocidade_atual(){
            return($this->velocidade_atual);
        }

        public function __construct($cor,$qtd_porta,$velocidade_max){
            $this->cor = $cor;
            $this->qtd_porta =$qtd_porta;
            $this->velocidade_max =$velocidade_max;
            $this->velocidade_atual=0;
        }
        
        //Lista de métodos
        public function acelerar($valor_aceleracao, $tempo){
            $this->velocidade_atual = 
                $this->velocidade_atual + $valor_aceleracao*$tempo;
        }
        public function frear($valor_frenagem, $tempo){
            $this->velocidade_atual = 
                $this->velocidade_atual + $valor_freagem*$tempo;
        }
        public function virar($lado){
            //implementação
        }
    }
?>
</body>
</html>