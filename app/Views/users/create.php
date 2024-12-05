<!-- app/Views/password_manager/create.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Criar Usuário</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Criar Usuário</h2>
        <form action="<?= site_url('users/store') ?>" method="post">
            <div class="form-group">
                <label for="username">Usuário</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-success">Criar</button>
            <a href="<?= site_url('users') ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
