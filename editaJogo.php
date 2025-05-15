<?php
include 'ControlaJogo.php';

if (!isset($_GET['id'])) {
    die('ID do jogo não informado.');
}

$controlaJogo = new ControlaJogo();
$jogo = $controlaJogo->buscarPorId($_GET['id']);

if (!$jogo) {
    die('Jogo não encontrado.');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head class="headedita">
    <meta charset="UTF-8">
    <title>Editar Jogo</title>
    <link rel="stylesheet" href="editaJogo.css">
</head>
<body class="bodyedita">
    <h2 class="editah2">Editar Jogo</h2>
    <form class="formulariojogos" action="processaEdicaoJogo.php" method="post">
        <input type="hidden" name="id" value="<?= $jogo['id'] ?>">
        <label class="labelcadatrojogos">Nome do Jogo</label>
        <input class="inputedita" type="text" name="nome" value="<?= $jogo['nome'] ?>" required> <br>
        <label class="labelcadatrojogos">Preço</label>
        <input class="inputedita" type="number" step="any" name="preco" value="<?= $jogo['preco'] ?>" required> <br>
        <label class="labelcadatrojogos">Quantidade de Estoque</label>
        <input class="inputedita" type="number" name="quantidadeestoque" value="<?= $jogo['quantidadeestoque'] ?>" required> <br>

        <button class="buttonedita" type="submit">Atualizar</button>
    </form>
</body>
</html>