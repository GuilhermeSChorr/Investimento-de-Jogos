<?php
include 'Jogo.php';
include 'ControlaJogo.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidadeestoque = $_POST['quantidadeestoque'];

    $jogo = new Jogo($nome, $preco, $quantidadeestoque);
    $jogo->setId($id);
    $controlaJogo = new ControlaJogo();

    $controlaJogo->atualizar($jogo);

    header("Location: indexJogo.php");
    exit;
} 