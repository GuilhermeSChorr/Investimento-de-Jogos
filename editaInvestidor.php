<?php
include 'ControlaInvestidor.php';

if (!isset($_GET['id'])) {
    die('ID do investidor não informado.');
}

$controlaInvestidor = new ControlaInvestidor();
$investidor = $controlaInvestidor->buscarPorId($_GET['id']);

if (!$investidor) {
    die('Investidor não encontrado.');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Investidor</title>
    <link rel="stylesheet" href="editaInvestidor.css">
</head>
<body class="bodyedita">
    <h2 class="editah2">Editar Investidor</h2>
    <form class="formularioinvestidores" action="processaEdicaoInvestidor.php" method="post">
        <input class="inputedita" type="hidden" name="id" value="<?= $investidor['id'] ?>">
        <label class="labelcadatrojogos">Nome completo</label>
        <input class="inputedita" type="text" name="nome" value="<?= $investidor['nome'] ?>" required>
        <label class="labelcadatrojogos">Email</label>
        <input class="inputedita" type="email" name="email" value="<?= $investidor['email'] ?>" required>
        <label class="labelcadatrojogos">Objetivos Financeiros</label>
        <input class="inputedita" type="text" name="objfinanceiros" value="<?= $investidor['objfinanceiros'] ?>" required>

        <button class="buttonedita" type="submit">Atualizar</button>
    </form>
</body>
</html>