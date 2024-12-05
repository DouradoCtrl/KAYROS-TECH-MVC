<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dropdown Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      overflow-x: hidden;
    }

    .navbar {
      transition: top 0.3s;
    }

    .table {
      border-radius: 20px;
    }
  </style>
</head>
<body>
  <div class="content-area">
    <div class="container-fluid" id="content">
      <nav class="navbar navbar-expand-md fixed-top">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="dropdown me-2">
              <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Sobre</a></li>
                <li><a class="dropdown-item" href="#">DashBoard</a></li>
                <li><a class="dropdown-item" href="/incidents">Incidentes</a></li>
                <li><a class="dropdown-item" href="#">CTO Limpeza</a></li>
                <li><a class="dropdown-item" href="#">SLA registro</a></li>
                <li><a class="dropdown-item" href="#">Sair</a></li>
              </ul>
            </div>
            <a class="btn btn-primary ms-2" href="/incidents/create">Adicionar</a>
            
            <form action="<?= site_url('incidents/search') ?>" method="POST" class="d-flex w-100" role="search">
                <div class="input-group mx-2 w-100">
                    <input name="search" class="form-control" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-dark" type="submit">Buscar</button>
                </div>
            </form>
            
            <div class="dropdown ms-2">
              <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Exportar
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">CSV</a></li>
                <li><a class="dropdown-item" href="#">PDF</a></li>
              </ul>
            </div>
            <button type="button" class="btn btn-dark mx-2" data-bs-toggle="modal" data-bs-target="#meuModal">Filtro</button>

          </div>
        </div>
      </nav>

      <div class="modal fade" id="meuModal" tabindex="-1" aria-labelledby="meuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="meuModalLabel">Exibir apenas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('incidents/filter') ?>" method="POST">
                    <!-- Filtro por Switches -->
                    <div class="mb-3">
                    <label for="switches" class="form-label">Selecione os Switches</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="switches[]" value="SW-DF100" id="SW-DF100">
                        <label class="form-check-label" for="SW-DF100">SW-DF100</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="switches[]" value="SW-ESTANCIA" id="SW-ESTANCIA">
                        <label class="form-check-label" for="SW-ESTANCIA">SW-ESTANCIA</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="switches[]" value="SW-MARAJO" id="SW-MARAJO">
                        <label class="form-check-label" for="SW-MARAJO">SW-MARAJO</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="switches[]" value="SW-PATIO" id="SW-PATIO">
                        <label class="form-check-label" for="SW-PATIO">SW-PATIO</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="switches[]" value="SW-SOF" id="SW-SOF">
                        <label class="form-check-label" for="SW-SOF">SW-SOF</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="switches[]" value="SW-VALE" id="SW-VALE">
                        <label class="form-check-label" for="SW-VALE">SW-VALE</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="switches[]" value="SW-JARDINS" id="SW-JARDINS">
                        <label class="form-check-label" for="SW-JARDINS">SW-JARDINS</label>
                    </div>
                </div>


                    <!-- Filtro por Situação (Pendente ou Concluído) -->
                    <div class="mb-3">
                        <label for="situacao" class="form-label">Situação do Incidente</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="situacao[]" value="pendente" id="pendente">
                            <label class="form-check-label" for="pendente">Pendente</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="situacao[]" value="concluido" id="concluido">
                            <label class="form-check-label" for="concluido">Concluído</label>
                        </div>
                    </div>

                    <!-- Filtro por Data de Início e Fim -->
                    <div class="mb-3">
                        <label for="dataInicio" class="form-label">Data de Início</label>
                        <input type="date" class="form-control" id="dataInicio" name="dataInicio">
                    </div>
                    <div class="mb-3">
                        <label for="dataFim" class="form-label">Data de Fim</label>
                        <input type="date" class="form-control" id="dataFim" name="dataFim">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-dark">Salvar mudanças</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <table class="table table-striped border">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Nome Switch</th>
                <th>Status</th>
                <th>Descrição</th>
                <th>Iniciou-se dia</th>
                <th>Iniciou-se hora</th>
                <th>Terminou dia</th>
                <th>Terminou hora</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($incidents) && !empty($incidents)): ?>
                <?php foreach ($incidents as $incident): ?>
                    <tr>
                        <td><?= $incident->id ?></td>
                        <td><?= $incident->nome ?></td>
                        <td><?= $incident->nome_switch ?></td>
                        <td><?= $incident->status ?></td>
                        <td><?= $incident->descricao ?></td>
                        <td><?= $incident->data_incidente ?></td>
                        <td><?= $incident->hora_incidente ?></td>
                        <td><?= $incident->data_incidente_fim ?></td>
                        <td><?= $incident->hora_incidente_fim ?></td>
                        <td>
                            <a href="<?= site_url('incidents/edit/' . $incident->id) ?>" class="btn btn-warning">Editar</a>
                            <a href="<?= site_url('incidents/delete/' . $incident->id) ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este incidente?')">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="10" class="text-center">Nenhum incidente encontrado.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>


    

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

      <!-- Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

      
    </div>
  </div>
</body>
</html>