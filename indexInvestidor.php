<?php
require_once 'ControlaInvestidor.php';

$controlaInvestidor = new ControlaInvestidor();
$investidor = $controlaInvestidor->listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de investidores</title>
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
    <h2>Investidores cadastrados</h2>

    <?php if (count($investidor) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Objetivos Financeiros</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($investidor as $investidor): ?>
                    <tr>
                        <td><?= $investidor['id'] ?></td>
                        <td><?= $investidor['nome'] ?></td>
                        <td><?= $investidor['email'] ?></td>
                        <td><?= $investidor['objfinanceiros'] ?></td>
                        <td>
                            <a class="button" href="editaInvestidor.php?id=<?= $investidor['id'] ?>">Editar</a>
                            <a class="button delete" href="excluiInvestidor.php?id=<?= $investidor['id'] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhum investidor cadastrado.</p>
    <?php endif; ?>
</body>
</html>