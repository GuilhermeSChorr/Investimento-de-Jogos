<?php
include 'ControlaJogo.php';

if (!isset($_GET['id'])) {
    die('ID não fornecido para exclusão.');
}

$id = $_GET['id'];
$controlaJogo = new ControlaJogo();
$controlaJogo->excluir($id);

header("Location: indexJogo.php");
exit;