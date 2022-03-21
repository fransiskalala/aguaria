<main id="main">
	<div class="section-title">
		<p>Galeri</p>
	</div>

	<section class="gallery-block cards-gallery">
		<div class="container">
			<div class="row">
				<?php foreach ($galeri as $key => $value) { ?>
					<div class="col-md-6 col-lg-4">
						<div class="card border-0 transform-on-hover">
							<a class="lightbox" href="<?= base_url('home/detail_galeri/' . $value->id_galeri) ?>">
								<img class="img-fluid image scale-on-hover" src="<?= base_url('foto_galeri_sampul/' . $value->sampul_galeri) ?>">
								<span class="description">
									<span class="description-heading"><?= $value->caption_galeri ?></span>
									<span class="description-body"><?= date('d F Y', strtotime($value->tgl_dibuat)) ?></span>
								</span>
							</a>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
</main>
