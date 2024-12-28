<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
</head>

<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
                
                <img src="<?php echo base_url('images/mainNoirv2.jpeg'); ?>" alt="login form" class="img-fluid" style="border-radius: 0 1rem 1rem 0; transform: scaleX(-1);" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="/login" method="POST">

                  <div class="d-flex align-items-center mb-3 pb-1">
                  <img width="15%" class="me-2" src="<?php echo base_url('images/minilogo.png'); ?>" alt="Logo">
                    <span class="h1 fw-bold mb-0">KAYROS TECH</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Faça login na sua conta</h5>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="username" name="username" required class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Usuário</label>
                  </div>

                  <div data-mdb-input-init class="form-outline">
                    <input type="password" id="password" name="password" required class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Senha</label>
                  </div>
                    <!-- Indicador de erro -->
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger" role="alert" style="font-size: 0.8rem; padding: 0.5rem 1rem; margin-bottom: 1rem;">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                  <div class="pt-1 mt-4">
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="button">Entrar</button>
                  </div>

                  
                </form>

              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>

