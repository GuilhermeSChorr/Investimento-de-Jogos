<?php
include 'ControlaInvestidor.php';

if (!isset($_GET['id'])) {
    die('ID não fornecido para exclusão.');
}

$id = $_GET['id'];
$controlaInvestidor = new ControlaInvestidor();
$controlaInvestidor->excluir($id);

header("Location: indexInvestidor.php");
exit;