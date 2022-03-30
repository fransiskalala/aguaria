<main id="main">
	<div class="section-title">
		<p>Karir</p>
	</div>
	<section id="blog" class="blog">
		<div class="container">
			<div class="row">

				<?php
				$x = 0;
				if ($karir) {
					foreach ($karir as $key => $value) {
				?>
						<div class="col-md-6 col-lg-6 pb-4">
							<div class="card" id="<?= $x ?>">
								<div class="card-body pad-karir">
									<h2 class="entry-title text-center">
										<?= $value->judul_karir ?>
									</h2>
									<br>
									<div class="entry-content">
										<?= $value->deskripsi_karir ?>
										<div class="collapse" id="collapse-<?= $x ?>">
											<div class="card card-body kriteria">
												<?= $value->kriteria_karir ?>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<button class="btn btn-karir karir-title-btn collapsed" data-toggle="collapse" data-target="#collapse-<?= $x ?>" aria-expanded="true" aria-controls="collapse-<?= $x ?>">
									</button>
								</div>
							</div>
						</div>
					<?php $x++;
					}
				} else { ?>
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="text-center">
							<div class="not-available pb-4">
								<h1>Karir Not Available!</h1>
								<h5>Maaf, tidak ada karir yang tersedia.</h5>
							</div>
						</div>
					</div>
					<div class="col-md-3"></div>
				<?php } ?>
			</div>
		</div>
	</section>
</main>
