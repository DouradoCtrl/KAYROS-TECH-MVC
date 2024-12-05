<!-- app/Views/incidents/filter_results.php -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados do Filtro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Resultados do Filtro</h2>

    <?php if (!empty($incidents)): ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Nome do Switch</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Data de Início</th>
                    <th>Hora de Início</th>
                    <th>Data de Fim</th>
                    <th>Hora de Fim</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($incidents as $incident): ?>
                    <tr>
                        <td><?= $incident['id'] ?></td>
                        <td><?= htmlspecialchars($incident['nome']) ?></td>
                        <td><?= htmlspecialchars($incident['nome_switch']) ?></td>
                        <td><?= htmlspecialchars($incident['descricao']) ?></td>
                        <td><?= htmlspecialchars($incident['status']) ?></td>
                        <td><?= htmlspecialchars($incident['data_incidente']) ?></td>
                        <td><?= htmlspecialchars($incident['hora_incidente']) ?></td>
                        <td><?= htmlspecialchars($incident['data_incidente_fim']) ?></td>
                        <td><?= htmlspecialchars($incident['hora_incidente_fim']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-warning" role="alert">
            Nenhum incidente encontrado para os critérios de filtro selecionados.
        </div>
    <?php endif; ?>

    <a href="<?= site_url('incidents') ?>" class="btn btn-primary">Voltar</a>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
