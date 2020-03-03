<?php
    include "classCarro.php";
    include "cabecalho.php";

    $c = new Carro();   //Transforma a variavel c em um objeto onde cada atrbuto pode ser classificado

    $c->cor = $_POST["cor"];    // atribuindo atributos e valores ao objeto
    $c->qtd_porta = $_POST["qtd_porta"];
    $c->velocidade_max = $_POST["velocidade_max"];
    $c->velocidade_atual = 0;

    $_SESSION["carro"][] = $c;
?>
<h3>Carro inserido com sucesso!</h3>
</body>
</html>