<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RealAguaria</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link href="<?= base_url() ?>backend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>backend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>backend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>backend/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url() ?>backend/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url() ?>backend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url() ?>backend/assets/vendor/simple-datatables/style.css" rel="stylesheet">


  <link href="<?= base_url() ?>backend/assets/css/style.css" rel="stylesheet">


  <script src="<?= base_url() ?>ckeditor/ckeditor.js"></script>
	<script src="<?= base_url() ?>ckeditor/samples/js/sample.js"></script>
	<link rel="stylesheet" href="<?= base_url() ?>ckeditor/samples/css/samples.css">
	<link rel="stylesheet" href="<?= base_url() ?>ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?= base_url('user') ?>" class="logo d-flex align-items-center">
      
        <span class="d-none d-lg-block">AGUARIA</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
           <span class="d-none d-md-block dropdown-toggle ps-2"><?= $this->session->userdata('nama'); ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= base_url('admin') ?>">
                <i class="bi bi-person"></i>
                <span>Kelola Admin</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= base_url('aguaria_superuser/logout')?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  