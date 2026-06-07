<?php
    require_once ('cabecalho.php');
    require_once ('conexao.php');


    $stmt_cat = $pdo->query("SELECT COUNT(*) FROM categoria");
    $total_categorias = $stmt_cat->fetchColumn();

    $stmt_os = $pdo->query("SELECT COUNT(*) FROM ordem_servico"); 
    $total_os = $stmt_os->fetchColumn();
?>

<div class="row mb-4 mt-2">
        <div class="col">
            <h2>Seja bem-vindo, <span class="text-primary"><?= $_SESSION['nome'] ?></span>!</h2>
            <p class="text-muted">Painel de gerenciamento da Oficina Mecânica.</p>
        </div>
    </div>

    <div class="row g-4">
        <div class="row">
    <div class="col-md-4">
        <div class="card p-3 shadow-sm">
            <h5>CATEGORIAS</h5>
            <h2 class="text-primary"><?= $total_categorias ?> <small class="text-muted fs-6">Registradas</small></h2>
            <a href="categorias.php" class="btn btn-outline-success btn-sm">Acessar Categorias</a>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3 shadow-sm">
            <h5>ORDENS DE SERVIÇO</h5>
            <h2 class="text-info"><?= $total_os ?> <small class="text-muted fs-6">Em Andamento</small></h2>
            <a href="ordens.php" class="btn btn-outline-primary btn-sm">Ver Histórico</a>
        </div>
    </div>
</div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-start border-secondary border-4">
                <div class="card-body">
                    <h6 class="card-title text-muted text-uppercase small"> Atalhos Rápidos</h6>
                    <div class="list-group list-group-flush mt-2">
                        <a href="nova_categoria.php" class="list-group-item list-group-item-action border-0 ps-0 text-success">+ Nova Categoria</a>
                        <a href="logout.php" class="list-group-item list-group-item-action border-0 ps-0 text-danger"> Sair do Sistema</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php
    require_once('rodape.php');
?>