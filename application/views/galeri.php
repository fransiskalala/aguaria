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
		<p>Galeri</p>
	</div>
	<section class="gallery-block compact-gallery">
		<div class="container">
			<div class="row no-gutters">
				<?php foreach ($galeri as $key => $value) { ?>
					<div class="col-md-6 col-lg-4 item zoom-on-hover">
						<a class="lightbox" href="<?= base_url('home/detail_galeri/' . $value->id_galeri) ?>">
							<img class="img-fluid image" src="<?= base_url('foto_galeri_sampul/' . $value->sampul_galeri) ?>">
							<span class="description">
								<span class="description-heading"><?= $value->caption_galeri ?></span>
								<span class="description-body"><?= $value->tgl_dibuat ?></span>
							</span>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
</main>
