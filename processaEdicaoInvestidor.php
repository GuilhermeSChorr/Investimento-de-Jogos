<?php
include 'Investidor.php';
include 'ControlaInvestidor.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $objfinanceiros = $_POST['objfinanceiros'];

    $investidor = new Investidor($nome, $email, $objfinanceiros);
    $investidor->setId($id);
    $controlaInvestidor = new ControlaInvestidor();

    $controlaInvestidor->atualizar($investidor);

    header("Location: indexInvestidor.php");
    exit;
} 