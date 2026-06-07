<?php
require_once ('cabecalho.php');
require_once ('conexao.php');

try{
    $stmt = $pdo->query("SELECT * FROM ordem_servico ORDER BY id DESC");
    $ordens = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $ordens = [];
}
?>

<div class="d-flex justify-content-between align-items-center mb-3 mt-4">
    <h3 class="mb-0 text-secondary"><i class="bi bi-file-earmark-text me-2"></i>Ordens de Serviço</h3>
    <a href="nova_ordem.php" class="btn btn-primary shadow-sm">
        <i class="bi bi-plus-circle me-1"></i> Criar Nova O.S.
    </a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover table-striped mb-0 align-middle">
                <thead class="table-dark">
                    <tr>
                        <th class="ps-4">O.S. nº</th>
                        <th>Cliente</th>
                        <th>Veículo</th>
                        <th>Status</th>
                        <th>Data</th>
                        <th class="text-end pe-4">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($ordens) > 0): ?>
                        <?php foreach ($ordens as $os): ?>
                        <tr>
                            <td class="ps-4 fw-bold text-secondary">#<?= str_pad($os['id'], 4, '0', STR_PAD_LEFT) ?></td>
                            <td><?= $os['cliente'] ?></td>
                            <td><?= $os['veiculo'] ?></td>
                            <td>
                                <?php 
                                    if($os['status'] == 'Pendente') $cor = 'bg-warning text-dark';
                                    elseif($os['status'] == 'Em Andamento') $cor = 'bg-primary';
                                    else $cor = 'bg-success';
                                ?>
                                <span class="badge <?= $cor ?>"><?= $os['status'] ?></span>
                            </td>
                            <td><?= date('d/m/Y', strtotime($os['data_registro'])) ?></td>
                            <td class="text-end pe-4">
                                <div class="d-flex justify-content-end gap-1">
                                    <a href="alterar_ordem.php?id=<?= $os['id'] ?>" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil-square"></i> Editar
                                    </a>
                                    
                                    <a href="excluir_ordem.php?id=<?= $os['id'] ?>" 
                                    class="btn btn-sm btn-outline-danger" 
                                    onclick="return confirm('Tem certeza que deseja excluir?');">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">Nenhuma Ordem de Serviço encontrada.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once('rodape.php'); ?>