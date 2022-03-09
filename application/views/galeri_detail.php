<main id="main">
	<section id="banner">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?= base_url(); ?>images/HEADER-CREATE12.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
				</div>
			</div>
		</div>
		</div>
	</section>

	<div class="section-title">
		<p><?= $caption_galeri->caption_galeri ?></p>
	</div>
	<section class="gallery-block grid-gallery">
		<div class="container">
			<div class="row">
				<?php foreach ($detail_galeri as $key => $value) { ?>
					<div class="col-md-6 col-lg-4 item">
						<a class="lightbox" href="<?= base_url('foto_galeri/' . $value->foto_galeri) ?>">
							<img class="img-fluid image scale-on-hover" src="<?= base_url('foto_galeri/' . $value->foto_galeri) ?>">
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
</main>
