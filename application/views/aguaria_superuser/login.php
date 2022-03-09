<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login Aguaria</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="<?= base_url() ?>frontend/assets/css/login.css" rel="stylesheet">
  <link href="<?= base_url() ?>frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background-color:powderblue;">

  <main>
    <div class="page">
      <div class="login-alert">
        <?php
        if ($this->session->flashdata('pesan')) {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
          echo $this->session->flashdata('pesan');
          echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
        ?>
      </div>
      <div class="login-container">
        <div class="left">
          <div class="login">Login</div>
          <div class="eula">Selamat datang di Dashboard Aguaria</div>
        </div>
        <div class="right">
          <svg viewBox="0 0 320 300">
            <defs>
              <linearGradient inkscape:collect="always" id="linearGradient" x1="13" y1="193.49992" x2="307" y2="193.49992" gradientUnits="userSpaceOnUse">
                <stop style="stop-color:#ff00ff;" offset="0" id="stop876" />
                <stop style="stop-color:#ff0000;" offset="1" id="stop878" />
              </linearGradient>
            </defs>
            <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
          </svg>
          <div class="form">
            <?php
            echo form_open('aguaria_superuser');
            ?>
            <form class="needs-validation" novalidate method="POST" action="<?= base_url('aguaria_superuser'); ?>">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" autofocus required>
              <label for="password">Password</label>
              <input type="password" name="password" id="password" required>
              <input type="submit" id="submit" value="Submit">
            </form>
            <?php
            echo form_close();
            ?>
          </div>
        </div>
      </div>
    </div>

  </main><!-- End #main -->

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>frontend/assets/js/login.js"></script>
  <script src="<?= base_url() ?>frontend/assets/js/anime_2.2.0.js"></script>
  <script src="<?= base_url() ?>frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>