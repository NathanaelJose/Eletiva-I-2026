<?php 
require_once('cabecalho.php'); 
require_once('conexao.php');

// Corrigi o JOIN para relacionar corretamente
$stmt = $pdo->query("SELECT * FROM peca ORDER BY id DESC");
$pecas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="d-flex justify-content-between align-items-center mb-3 mt-4">
    <h3 class="mb-0 text-secondary"><i class="bi bi-box-seam me-2"></i>Estoque de Peças</h3>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body p-0">
        <?php if (empty($pecas)): ?>
            <div class="text-center py-5">
                <i class="bi bi-box-seam" style="font-size: 3rem; color: #ccc;"></i>
                <h5 class="text-muted mt-3">Estoque vazio.</h5>
                <a href="nova_peca.php" class="btn btn-primary mt-2">Cadastrar Primeira Peça</a>
            </div>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table table-hover table-striped mb-0 align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th class="ps-4">Código</th>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th>Qtd</th>
                            <th class="text-end pe-4">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pecas as $p): ?>
                            <tr>
                                <td class="ps-4 text-secondary"><?= $p['codigo_peca'] ?></td>
                                <td><?= $p['nome'] ?></td>
                                <td>R$ <?= number_format($p['preco'], 2, ',', '.') ?></td>
                                <td><span class="badge bg-info text-dark"><?= $p['quantidade'] ?></span></td>
                                <td class="text-end pe-4">
                                    <a href="editar_peca.php?id=<?= $p['id'] ?>" class="btn btn-sm btn-outline-warning me-1">
                                    <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="excluir_peca.php?id=<?= $p['id'] ?>" 
                                       class="btn btn-sm btn-outline-danger" 
                                       onclick="return confirm('Excluir esta peça?');">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php require_once('rodape.php'); ?>