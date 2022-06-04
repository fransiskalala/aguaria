<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Aguaria</title>
	<meta name="google-site-verification" content="ZMFy7mWuXejkKaPiR0DxS5CkE8dipYlKcDiGAkILEew" />



	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<link href="<?= base_url() ?>frontend/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url() ?>frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>frontend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?= base_url() ?>frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">



	<link href="<?= base_url() ?>frontend/assets/css/style.css" rel="stylesheet">
	<link href="<?= base_url() ?>frontend/assets/css/carousel.css" rel="stylesheet">
	<link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link href="<?= base_url() ?>frontend/assets/css/faq/faq.css" rel="stylesheet">
	<link href="<?= base_url() ?>frontend/assets/css/animate.css" rel="stylesheet">
	<link href="<?= base_url() ?>frontend/assets/css/gallery/baguetteBox.min.css" rel="stylesheet" />
	<link href="<?= base_url() ?>frontend/assets/css/gallery/compact-gallery.css" rel="stylesheet" />
	<link href="<?= base_url() ?>frontend/assets/css/gallery/cards-gallery.css" rel="stylesheet" />
	<link href="<?= base_url() ?>frontend/assets/fonts/stylesheet.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>frontend/assets/css/mygallerybox/mygallery.css" />

	<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="js/mygallery.js"></script>

</head>

<body>


	<header id="header" class="fixed-top d-flex align-items-center">
		<div class="container d-flex align-items-center">

			<div class="logo me-auto"><a href="<?= base_url() ?>"><img src="<?= base_url(); ?>images/AGUARIA.png" width="100px" /></a></div>


			<nav id="navbar" class="navbar">
				<ul>
					<li><a <?= $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?= base_url(); ?>">HOME</a></li>

					<li class="dropdown"><a <?= $this->uri->segment(1) == 'home' && $this->uri->segment(2) == 'sejarah' || $this->uri->segment(2) == 'visimisi' || $this->uri->segment(2) == 'tentang' ? 'class="active"' : '' ?> href="#"><span>PERUSAHAAN</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a <?= $this->uri->segment(2) == 'sejarah' ? 'class="active"' : '' ?> href="<?= base_url("home/sejarah"); ?>">SEJARAH</a></li>
							<li><a <?= $this->uri->segment(2) == 'visimisi' ? 'class="active"' : '' ?>href="<?= base_url("home/visimisi"); ?>">VISI & MISI</a></li>
							<li><a <?= $this->uri->segment(2) == 'tentang' ? 'class="active"' : '' ?>href="<?= base_url("home/tentang"); ?>">TENTANG AGUARIA</a></li>
							<li><a <?= $this->uri->segment(2) == 'organisasi' ? 'class="active"' : '' ?>href="<?= base_url("home/organisasi"); ?>">ORGANISASI</a></li>
						</ul>
					</li>
					<li><a <?= $this->uri->segment(2) == 'proses' && $this->uri->segment(1) == 'home' ? 'class="active"' : '' ?> href="<?= base_url("home/proses"); ?>">PROSES PRODUKSI</a></li>
					<li><a <?= $this->uri->segment(2) == 'produk' && $this->uri->segment(1) == 'home' ? 'class="active"' : '' ?> href="<?= base_url("home/produk"); ?>">PRODUK</a></li>
					<li><a <?= $this->uri->segment(2) == 'berita' || $this->uri->segment(2) == 'detail_berita' && $this->uri->segment(1) == 'home' ? 'class="active"' : '' ?> href="<?= base_url("home/berita"); ?>">BERITA</a></li>
					<li><a <?= $this->uri->segment(2) == 'galeri' || $this->uri->segment(2) == 'detail_galeri' && $this->uri->segment(1) == 'home' ? 'class="active"' : '' ?> href="<?= base_url("home/galeri"); ?>">GALERI</a></li>
					<li><a <?= $this->uri->segment(2) == 'karir' && $this->uri->segment(1) == 'home' ? 'class="active"' : '' ?> href="<?= base_url("home/karir"); ?>">KARIR</a></li>
					<li><a <?= $this->uri->segment(2) == 'hubungi_kami' && $this->uri->segment(1) == 'home' ? 'class="active"' : '' ?> href="<?= base_url("home/hubungi_kami"); ?>">HUBUNGI KAMI</a></li>

				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav>
		</div>
	</header>

	<?php if ($this->uri->segment(1) != 'home') { ?>
		<main id="main">
			<section id="hero" class="pb-0">
				<div id="heroCarousel" data-bs-interval="3000" class="carousel slide carousel-fade" data-bs-ride="carousel">
					<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
					<div class="carousel-inner">
						<?php $x = 0;
						foreach ($slider as $key => $value) { ?>
							<div <?= $x == 0 ? 'class="carousel-item active"' : 'class="carousel-item"' ?>>
								<img src="<?= base_url('foto_slider/' . $value->foto_slider); ?>" class="pt-20 d-block w-100">
								<div class="carousel-caption d-none d-md-block">
								</div>
							</div>
						<?php $x++;
						} ?>
					</div>
					<a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
						<span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
					</a>
					<a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
						<span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
					</a>
				</div>
			</section>
		</main>
	<?php } elseif ($this->uri->segment(1) == 'home') { ?>
		<main id="main">
			<section id="banner">
				<div class="carousel-inner">
					<?php foreach ($slider as $key => $value) { ?>
						<div class="carousel-item active">
							<img src="<?= base_url('foto_slider/' . $value->foto_slider); ?>" class="pt-20 d-block w-100">
							<div class="carousel-caption d-none d-md-block">
							</div>
						</div>
					<?php } ?>
				</div>
			</section>
		</main>
	<?php } ?>
