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
  <div class="container-fluid">
      <nav class="navbar navbar-expand-md mb-2 d-flex justify-content-center">
            <div class="p-2 rounded-3 w-50">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="dropdown me-1">
                        <button class="btn btn-secondary btn rounded-3 dropdown-toggle fw-bold" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Sobre</a></li>
                            <li><a class="dropdown-item" href="/incidents">Incidentes</a></li>
                            <li><a class="dropdown-item" href="/cto_clear">Limpeza de CTO</a></li>
                            <li><a class="dropdown-item" href="/master/login">Gerenciador de Usuários</a></li>
                            <li><a class="dropdown-item" href="/logout">Sair</a></li>
                        </ul>
                    </div>

                    <form action="/cto_clear" method="GET" class="d-flex w-100" role="search">
                        <div class="input-group mx-2 w-100">
                            <input name="search" class="form-control form-control rounded-2" type="search" placeholder="Buscar" aria-label="Search" value="<?= esc($search ?? ''); ?>">
                            <button class="btn btn-primary rounded-2 fw-bold" id="searchInput" type="submit">Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>

        <table class="table table-striped table-dark table-bordered rounded-3 overflow-hidden">
            <thead>
                <tr>
                    <th class="text-center">nª</th>
                    <th>PON Slot</th>
                    <th>NOC</th>
                    <th>Técnico</th>
                    <th>Adicionado</th>
                    <th>Retirado</th>
                    <th>Motivo</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th width="5%" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $cont = 1; $cont = ($pager->getCurrentPage() - 1) * $pager->getPerPage() + 1; // Calcula o número inicial; ?>
                <?php if (isset($incidents) && !empty($incidents)): ?>
                    <?php foreach ($incidents as $incident): ?>
                        <tr>
                            <td class="text-center"><?php echo $cont++; ?></td>
                            <td><?= $incident['pon_slot'] ?></td>
                            <td><?= $incident['noc'] ?></td>
                            <td><?= $incident['tecnico'] ?></td>
                            <td><?= $incident['adicionado'] ?></td>
                            <td><?= $incident['retirado'] ?></td>
                            <td width="3%">
                                <!-- Botão que aciona o modal e passa o motivo via atributo data -->
                                <button type="button" class="btn btn-secondary btn btn-reason" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#reasonModal"
                                        data-motivo="<?= htmlspecialchars($incident['motivo']) ?>">
                                    Visualizar
                                </button>      
                            </td>
                            <td><?= $incident['data'] ?></td>
                            <td><?= $incident['hora'] ?></td>
                            <td class="">
                                <div class="d-flex justify-content-center align-items-center w-100 h-100">
                                    <a href="#" 
                                    class="btn btn-secondary btn edit-button" 
                                    data-id="<?= $incident['id']; ?>" 
                                    data-pon_slot="<?= $incident['pon_slot']; ?>" 
                                    data-noc="<?= $incident['noc']; ?>" 
                                    data-tecnico="<?= $incident['tecnico']; ?>" 
                                    data-adicionado="<?= $incident['adicionado']; ?>" 
                                    data-retirado="<?= $incident['retirado']; ?>" 
                                    data-motivo="<?= $incident['motivo']; ?>" 
                                    data-data="<?= $incident['data']; ?>" 
                                    data-hora="<?= $incident['hora']; ?>" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#editCtoClearModal">
                                        Editar
                                    </a>
                                    <a href="#" class="btn btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="<?= $incident['id']; ?>">
                                        Excluir
                                    </a>
                                </div>
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

        <div class="d-flex justify-content-between mx-2">
            <button type="button" href="#" class="btn btn-primary mb-3 rounded-3 border-2 fw-bold"  data-bs-toggle="modal" 
            data-bs-target="#CtoClearModal">Adicionar</button>
            <?= $pager->links('default', 'pagination_bootstrap') ?>      
        </div>

        <?php 
          include("modal_delete.php");
          include("modal_description.php");
          include("modal_create.php");
          include("modal_edit.php");
        ?>

        
      
      <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      
    

    </div>
  </div>
</body>
</html>