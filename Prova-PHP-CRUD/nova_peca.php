<?php 
require_once('cabecalho.php'); 
require_once('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $pdo->prepare("INSERT INTO peca (nome, codigo_peca, quantidade, preco) VALUES (?, ?, ?, ?)");
    $stmt->execute([$_POST['nome'], $_POST['codigo'], $_POST['qtd'], $_POST['preco']]);
    
    header('Location: pecas.php');
    exit();
}
?>

<div class="row justify-content-center mt-4">
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-success text-white"><h5>Cadastrar Nova Peça</h5></div>
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Nome da Peça:</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Código (SKU):</label>
                        <input type="text" name="codigo" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Quantidade:</label>
                            <input type="number" name="qtd" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Preço (R$):</label>
                            <input type="text" name="preco" class="form-control" placeholder="0.00" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success w-100">
                        <i class="bi bi-save"></i> Salvar Peça
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once('rodape.php'); ?>