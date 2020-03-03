<?php
    include "classCarro.php";
    include "cabecalho.php";
    echo '<h2>Objetos "Carro" instanciados no sistema:</h2>';

    foreach ($_SESSION["carro"] as $c){
        echo "
                <p>Cor: <span style='color:$c->cor'>$c->cor</span></p>
                <p>Quantidade Portas: $c->qtd_porta</p>
                <p>Velocidade Máxima: $c->velocidade_max</p>
                <p>Velocidade Atual: $c->velocidade_atual</p>
                <hr />";

    }
?>
</body>
</html>