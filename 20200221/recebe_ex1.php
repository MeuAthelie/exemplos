<?php
include "tela1.php";
$c=new NomeClasse($_POST["v1"],$_POST["v2"],$_POST["v3"]);
// var_dump($c);

echo $c->get_atributo1();
?>