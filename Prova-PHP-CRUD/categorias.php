<?php 
require_once('cabecalho.php'); 
require_once('conexao.php');

try {
    $stmt = $pdo->query("SELECT * FROM categoria ORDER BY id DESC");
    $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $categorias = [];
    echo "<div class='alert alert-danger mt-3'>Erro ao buscar categorias: " . $e->getMessage() . "</div>";
}
?>

<div class="d-flex justify-content-between align-items-center mb-3 mt-4">
    <h3 class="mb-0 text-secondary"><i class="bi bi-tags me-2"></i>Gerenciar Categorias</h3>
    <a href="nova_categoria.php" class="btn btn-success shadow-sm">
        <i class="bi bi-plus-circle me-1"></i> Novo Registro
    </a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover table-striped mb-0 align-middle">
                <thead class="table-dark">
                    <tr>
                        <th class="ps-4">ID</th>
                        <th>Descrição</th>
                        <th class="text-end pe-4">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($categorias) > 0): ?>
                        <?php foreach ($categorias as $cat): ?>
                        <tr>
                            <td class="ps-4 fw-bold text-secondary"><?= $cat['id'] ?></td>
                            <td><?= $cat['descricao'] ?></td>
                            <td class="text-end pe-4">
                                <a href="alterar_categoria.php?id=<?= $cat['id'] ?>" class="btn btn-sm btn-outline-primary" title="Editar">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="consultar_categoria.php?id=<?= $cat['id'] ?>" class="btn btn-sm btn-outline-danger" title="Excluir">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="3" class="text-center py-4 text-muted">Nenhuma categoria cadastrada ainda.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once('rodape.php'); ?>