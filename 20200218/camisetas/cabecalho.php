<?php
    class Camisetas{
        public $cor;
        public $tamanho;
        public $qtd;
    }
    session_start();
?>

<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Gerenciamento de Camisetas</title>
        <style>
            input{margin: 5px; width:150px;}
        </style>
    </head>
    <body>
        <a href="formCamisetas.php">Criar Camiseta</a> |
        <a href="listarCamisetas.php">Listar Camisetas</a> |
        <a href="limparCamisetas.php">Limpar Lista</a>
        <hr />