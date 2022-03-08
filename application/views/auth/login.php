<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login Aguaria</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>backend/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>backend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>backend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>backend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>backend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>backend/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url() ?>backend/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url() ?>backend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url() ?>backend/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>backend/assets/css/style.css" rel="stylesheet">

</head>

<body style="background-color:powderblue;">

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">AGUARIA</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4"><?= $title ?></h5>
                  </div>


                  <?php
                  echo form_open('auth');

                  if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                    echo $this->session->flashdata('pesan');
                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                  }
                  ?>

                  <fieldset>
                    <form class="row g-3 needs-validation" novalidate method="POST" action="<?= base_url('auth'); ?>">
                      <div class="col-12">
                        <label for="Username" class="form-label">Username</label>
                        <div class="input-group has-validation">
                          <input type="text" name="username" class="form-control" id="username" required>
                          <div class="invalid-feedback">Silahkan Masukan Username Anda.</div>
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                        <div class="invalid-feedback">Silahkan Masukan Password Anda.</div>
                      </div>

                      <div class="col-12 pt-4 pb-2">
                        <button class="btn btn-primary w-100" type="submit">Login</button>
                      </div>
                      

                      <?php
                      echo form_close();
                      ?>
                    </form>
                  </fieldset>
                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>backend/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url() ?>backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>backend/assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?= base_url() ?>backend/assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url() ?>backend/assets/vendor/quill/quill.min.js"></script>
  <script src="<?= base_url() ?>backend/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url() ?>backend/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url() ?>backend/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>backend/assets/js/main.js"></script>

</body>

</html>