<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerenciador de Senhas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Gerenciador de Usuários</h3>

                            <!-- Formulário de login -->
                            <form action="<?= base_url('/master/login') ?>" method="POST">
                                <div class="form-outline mb-4 text-start"> <!-- Adicionada a classe text-start -->
                                    <input type="text" id="typeEmailX-2" class="form-control form-control-lg" name="username" required/>
                                    <label class="form-label" for="typeEmailX-2">Usuário</label>
                                </div>

                                <div class="form-outline mb-4 text-start"> <!-- Adicionada a classe text-start -->
                                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="password" required/>
                                    <label class="form-label" for="typePasswordX-2">Senha</label>
                                </div>

                                <button class="btn btn-primary btn-lg btn-block w-100" type="submit">Acessar</button>

                                <!-- Mensagem de erro -->
                                <?php if (session()->getFlashdata('error')): ?>
                                    <div class="alert alert-danger mt-3">
                                        <?= session()->getFlashdata('error') ?>
                                    </div>
                                <?php endif; ?>

                            </form>

                            <hr class="my-4">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

