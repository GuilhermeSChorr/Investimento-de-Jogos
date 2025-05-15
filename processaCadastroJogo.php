<?php
include 'Jogo.php';
include 'ControlaJogo.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidadeestoque = $_POST['quantidadeestoque'];

    $jogo = new Jogo($nome, $preco, $quantidadeestoque);
    $controlaJogo = new ControlaJogo();

    $controlaJogo->salvar($jogo);

    header("Location: cadastraJogo.html");
}