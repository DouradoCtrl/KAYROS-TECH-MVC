<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Incidentes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<form method="post" action="/incidents/store" class="container mt-5">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" name="nome" required>
    </div>

    <div class="form-group">
        <label for="nome_switch">Nome Switch:</label>
        <select class="form-control" name="nome_switch" required>
            <option value="SW-DF100">SW-DF100</option>
            <option value="SW-ESTANCIA">SW-ESTANCIA</option>
            <option value="SW-JARDINS">SW-JARDINS</option>
            <option value="SW-MARAJO">SW-MARAJO</option>
            <option value="SW-PATIO">SW-PATIO</option>
            <option value="SW-SOF">SW-SOF</option>
            <option value="SW-VALE">SW-VALE</option>
        </select>
    </div>

    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" name="descricao" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="status">Status:</label>
        <select class="form-control" name="status" required>
            <option value="Pendente">Pendente</option>
            <option value="Concluído">Concluído</option>
        </select>
    </div>

    <div class="form-group">
        <label for="data_incidente">Data Incidente:</label>
        <input type="date" class="form-control" name="data_incidente" required>
    </div>

    <div class="form-group">
        <label for="hora_incidente">Hora Incidente:</label>
        <input type="time" class="form-control" name="hora_incidente" required>
    </div>

    <div class="form-group">
        <label for="data_incidente_fim">Data Incidente Fim:</label>
        <input type="date" class="form-control" name="data_incidente_fim">
    </div>

    <div class="form-group">
        <label for="hora_incidente_fim">Hora Incidente Fim:</label>
        <input type="time" class="form-control" name="hora_incidente_fim">
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="/incidents" class="btn btn-secondary">Cancelar</a>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</form>
</body>
</html>