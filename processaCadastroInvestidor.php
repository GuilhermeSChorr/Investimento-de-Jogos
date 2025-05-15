<?php
include 'Investidor.php';
include 'ControlaInvestidor.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $objfinanceiros = $_POST['objfinanceiros'];

    $investidor = new investidor($nome, $email, $objfinanceiros);
    $controlaInvestidor = new Controlainvestidor();

    $controlaInvestidor->salvar($investidor);

    header("Location: cadastraInvestidor.html");
}