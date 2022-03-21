<main id="main">
	<div class="section-title">
		<p><?= $caption_galeri->caption_galeri ?></p>
	</div>

	<section class="gallery-block compact-gallery">
		<div class="container">
			<div class="row no-gutters">
				<?php foreach ($detail_galeri as $key => $value) { ?>
					<div class="col-md-6 col-lg-4 item zoom-on-hover">
						<a class="lightbox" href="<?= base_url('foto_galeri/' . $value->foto_galeri) ?>" data-caption="<?= $value->keterangan_foto ?>">
							<img class="img-fluid image" src="<?= base_url('foto_galeri/' . $value->foto_galeri) ?>">
							<span class="description">
								<span class="description-heading"><?= $value->keterangan_foto ?></span>
							</span>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>

</main>
