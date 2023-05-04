<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'static/head.php'; ?>
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="../assets/img/LogoHorizontal.png" alt="Logo">

                </a>
              </div>
              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Para ingresar al sistemas</h5>
                    <p class="text-center small">Por favor de ingresar tu correo y contraseña</p>
                  </div>
                  <form class="row g-3 needs-validation" action="../controllers/LoginUser.php" method="POST">
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Correo</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="email" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Por favor ingrese el correo electrónico.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Contraseña</label>
                      <input type="password" name="contra" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Por favor ingrese su contraseña!</div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Iniciar Sesión</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="credits">
                Diseñado por <a href="https://whiteboxsystems.tech/">WhiteBox Systems</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>