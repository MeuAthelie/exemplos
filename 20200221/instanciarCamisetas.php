<?php
    include "cabecalho.php";

    $c = new Camisetas(); 

    $c->cor = $_POST["cor"];
    $c->qtd = $_POST["qtd"];
    $c->tamanho = $_POST["tamanho"];

    $_SESSION["camiseta"][] = $c;
?>
<h3>Camiseta inserido com sucesso!</h3>
</body>
</html>