<?php
require_once('cabecalho.php');
require_once('conexao.php');

$stmt = $pdo->query("SELECT * FROM categoria");
$categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Categorias</h2>
<a href="nova_categoria.php" class="btn btn-success mb-3">Novo Registro</a>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categorias as $cat): ?>
        <tr>
            <td><?= $cat['id'] ?></td>
            <td><?= $cat['descricao'] ?></td>
            <td class="d-flex gap-2">
                <a href="alterar_categoria.php?id=<?= $cat['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                <a href="consultar_categoria.php?id=<?= $cat['id'] ?>" class="btn btn-sm btn-info">Consultar / Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once('rodape.php'); ?>