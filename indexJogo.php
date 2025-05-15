<?php
require_once 'ControlaJogo.php';

$controlaJogo = new ControlaJogo();
$jogo = $controlaJogo->listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Jogos</title>
    <style>
        table { border-collapse: collapse; width: 70%; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        a.button {
            background-color: #007BFF;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            margin-right: 5px;
            border-radius: 3px;
        }
        a.button.delete {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <h2>Jogos cadastrados</h2>

    <?php if (count($jogo) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade de Estoque</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jogo as $jogo): ?>
                    <tr>
                        <td><?= $jogo['id'] ?></td>
                        <td><?= $jogo['nome'] ?></td>
                        <td><?= $jogo['preco'] ?></td>
                        <td><?= $jogo['quantidadeestoque'] ?></td>
                        <td>
                            <a class="button" href="editaJogo.php?id=<?= $jogo['id'] ?>">Editar</a>
                            <a class="button delete" href="excluiJogo.php?id=<?= $jogo['id'] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhum jogo cadastrado.</p>
    <?php endif; ?>
</body>
</html>