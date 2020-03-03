<?php
    include "classCarro.php";
    include "cabecalho.php";
    echo '<h2>Objetos "Carro" instanciados no sistema:</h2>';

    foreach ($_SESSION["carro"] as $i=>$c){
        echo "
                <p>Cor: <span style='color:".$c->get_cor()."'>".$c->get_cor()."</span></p>
                <p>Quantidade Portas:" .$c->get_qtd_porta()."</br>
                <p>Velocidade Máxima: ".$c->get_velocidade_max()."</br>
                <p>Velocidade Atual: ".$c->get_velocidade_atual()."
                <form method='post' action='acelerar_frear.php'>
                <input type='number'name='tempo' placeholder= 'tempo de aceleração/frenagem'/><br/>
                <input type='radio'class='radio'name='tipo' value='a'/>
                Aceleracao
                <input type='radio'class='radio'name='tipo' value='f'/>
                Frenagem
                <br/>
                <input type='hidden' name='id' value='$i'/>
                <input type='submit'value='Acelerar/Frear'/>
                </form>
                <hr/>";

    }
?>
</body>
</html>