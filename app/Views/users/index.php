<!-- app/Views/password_manager/index.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerenciador de Senhas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            overflow-x: hidden;
        }

        .table {
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Gerenciador de Senhas</h2>
        <a href="#" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addUserModal">Adicionar Usuário</a>
        <a href="<?= site_url('logout') ?>" class="btn btn-danger mb-3">Sair</a>
        <table class="table table-striped table-bordered table-dark rounded-3 overflow-hidden">
            <thead>
                <tr>
                    <th width="3%">ID</th>
                    <th>Usuário</th>
                    <th width="5%" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php $cont = 1; $cont = ($pager->getCurrentPage() - 1) * $pager->getPerPage() + 1; // Calcula o número inicial; ?>
                <?php if (!empty($users)): ?>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $cont++; ?></td>
                            <td><?= $user['username'] ?></td>
                            <td>
                                <div class="d-flex justify-content-center align-items-center w-100 h-100">
                                    <a href="#" 
                                        class="btn btn-warning edit-button" 
                                        data-id="<?= $user['id']; ?>" 
                                        data-username="<?= $user['username']; ?>"
                                        data-password="<?= $user['password']; ?>" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#editUserModal">
                                        Editar
                                    </a>
                                    <a href="#" class="btn btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#deleteUserModal" data-id="<?= $user['id']; ?>">
                                        Excluir
                                    </a>

                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="text-center">Nenhum usuário encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-end mx-2">
            <?= $pager->links('default', 'pagination_bootstrap') ?>      
        </div>
    </div>
    
    <?php
        include("modal_create.php");
        include("modal_edit.php");
        include("modal_delete.php");
    ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

