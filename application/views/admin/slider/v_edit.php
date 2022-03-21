<main id="main" class="main">

	<div class="pagetitle">
		<h1><?= $title2 ?></h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Home</a></li>
				<li class="breadcrumb-item"><a href="<?= base_url('slider') ?>">Kelola Slider</a></li>
				<li class="breadcrumb-item active">Edit Slider</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->

	<section class="section dashboard">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title"></h5>

						<?php
						echo form_open_multipart('slider/edit/' . $slider->id_slider);

						if ($this->session->flashdata('error')) {
							echo '<div class="pb-0 alert alert-warning alert-dismissible fade show" role="alert">';
							echo $this->session->flashdata('error');
							echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
						}
						?>

						<div class="row mb-2">
							<label for="inputText" class="col-sm-2 col-form-label">Nama Slider</label>
							<div class="col-sm-10">
								<input class="form-control" value="<?= $slider->nama_slider  ?>" type="text" name="nama_slider" placeholder="Nama Slider" required>
							</div>
						</div>

						<div class="row mb-2">
							<label for="inputText" class="col-sm-2 col-form-label">Foto Slider</label>
							<div class="col-sm-10">
								<img src="<?= base_url('foto_slider/' . $slider->foto_slider) ?>" width="150px" height="150px">
							</div>
						</div>

						<div class="row mb-2">
							<label for="inputText" class="col-sm-2 col-form-label">Menu Tempat Slider</label>
							<div class="col-sm-10">
								<select name="menu" class="form-select form-control" required>
									<option value="">Letak Menu Slider</option>
									<option value="Home" <?= $slider->menu == 'Home' ? 'selected' : '' ?>>Home</option>
									<option value="Sejarah" <?= $slider->menu == 'Sejarah' ? 'selected' : '' ?>>Sejarah</option>
									<option value="Visi & Misi" <?= $slider->menu == 'VisiMisi' ? 'selected' : '' ?>>Visi & Misi</option>
									<option value="Tentang" <?= $slider->menu == 'Tentang' ? 'selected' : '' ?>>Tentang</option>
									<option value="Organisasi" <?= $slider->menu == 'Organisasi' ? 'selected' : '' ?>>Organisasi</option>
									<option value="Proses" <?= $slider->menu == 'Proses' ? 'selected' : '' ?>>Proses</option>
									<option value="Produk" <?= $slider->menu == 'Produk' ? 'selected' : '' ?>>Produk</option>
									<option value="Berita" <?= $slider->menu == 'Berita' ? 'selected' : '' ?>>Berita</option>
									<option value="Galeri" <?= $slider->menu == 'Galeri' ? 'selected' : '' ?>>Galeri</option>
									<option value="Karir" <?= $slider->menu == 'Karir' ? 'selected' : '' ?>>Karir</option>
									<option value="Hubungi Kami" <?= $slider->menu == 'Hubungi Kami' ? 'selected' : '' ?>>Hubungi Kami</option>
								</select>
							</div>
						</div>

						<div class="row mb-2">
							<label for="inputText" class="col-sm-2 col-form-label">Ganti Foto Slider</label>
							<div class="col-sm-10">
								<input type="file" class="form-control" type="text" name="foto_slider">
							</div>



							<div class="form-group text-center">
								<button type="submit" class="btn btn-success rounded-pill">Simpan</button>
								<a href="<?= base_url('slider') ?>"><button type="button" class="btn btn-dark rounded-pill">Kembali</button>

							</div>

							<?php echo form_close(); ?>

						</div>
					</div>
				</div>
	</section>

</main><!-- End #main -->
