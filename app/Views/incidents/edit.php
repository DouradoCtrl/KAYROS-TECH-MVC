<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Incidentes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    
<form method="post" action="/incidents/update/<?= $incident['id'] ?>" class="container mt-5">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" name="nome" value="<?= $incident['nome'] ?>" required>
    </div>

    <div class="form-group">
        <label for="nome_switch">Nome Switch:</label>
        <select class="form-control" name="nome_switch" required>
            <option value="SW-DF100" <?= $incident['nome_switch'] == 'SW-DF100' ? 'selected' : '' ?>>SW-DF100</option>
            <option value="SW-ESTANCIA" <?= $incident['nome_switch'] == 'SW-ESTANCIA' ? 'selected' : '' ?>>SW-ESTANCIA</option>
            <option value="SW-JARDINS" <?= $incident['nome_switch'] == 'SW-JARDINS' ? 'selected' : '' ?>>SW-JARDINS</option>
            <option value="SW-MARAJO" <?= $incident['nome_switch'] == 'SW-MARAJO' ? 'selected' : '' ?>>SW-MARAJO</option>
            <option value="SW-PATIO" <?= $incident['nome_switch'] == 'SW-PATIO' ? 'selected' : '' ?>>SW-PATIO</option>
            <option value="SW-SOF" <?= $incident['nome_switch'] == 'SW-SOF' ? 'selected' : '' ?>>SW-SOF</option>
            <option value="SW-VALE" <?= $incident['nome_switch'] == 'SW-VALE' ? 'selected' : '' ?>>SW-VALE</option>
        </select>
    </div>

    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" name="descricao" rows="3"><?= $incident['descricao'] ?></textarea>
    </div>

    <div class="form-group">
        <label for="status">Status:</label>
        <select class="form-control" name="status" required>
            <option value="Pendente" <?= $incident['status'] == 'Pendente' ? 'selected' : '' ?>>Pendente</option>
            <option value="Concluído" <?= $incident['status'] == 'Concluído' ? 'selected' : '' ?>>Concluído</option>
        </select>
    </div>

    <div class="form-group">
        <label for="data_incidente">Data Incidente:</label>
        <input type="date" class="form-control" name="data_incidente" value="<?= $incident['data_incidente'] ?>" required>
    </div>

    <div class="form-group">
        <label for="hora_incidente">Hora Incidente:</label>
        <input type="time" class="form-control" name="hora_incidente" value="<?= $incident['hora_incidente'] ?>" required>
    </div>

    <div class="form-group">
        <label for="data_incidente_fim">Data Incidente Fim:</label>
        <input type="date" class="form-control" name="data_incidente_fim" value="<?= $incident['data_incidente_fim'] ?>">
    </div>

    <div class="form-group">
        <label for="hora_incidente_fim">Hora Incidente Fim:</label>
        <input type="time" class="form-control" name="hora_incidente_fim" value="<?= $incident['hora_incidente_fim'] ?>">
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="/incidents" class="btn btn-secondary">Cancelar</a>
</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
