<?php
    class Carro{
        //Lista de atributos
        public $cor;
        public $qtd_porta;
        public $velocidade_max;
        public $velocidade_atual;

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