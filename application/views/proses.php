<main id="main">
	<link href="<?= base_url() ?>frontend/assets/css/owl.carousel.min.css" rel="stylesheet" />
	<link href="<?= base_url() ?>frontend/assets/css/owl.theme.default.min.css" rel="stylesheet" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css" rel="stylesheet" />
	<link href="<?= base_url() ?>frontend/assets/css/style.css" rel="stylesheet" />
	<link href="<?= base_url() ?>frontend/assets/css/proses.css" rel="stylesheet" />
	<div class="section-title">
		<p>Proses Produksi</p>
	</div>
	<section id="proses" class="proses section-bg">
		<div class="container">
			<ul class="nav justify-content-center nav-tabs garis-nav mb-5">
				<li class="nav-item">
					<button class="nav-link nav-btn active" data-bs-toggle="tab" data-bs-target="#satu" type="button" aria-selected="true">Proses Produksi Air Minum SmallPack</button>
				</li>
				<li class="nav-item">
					<button class="nav-link nav-btn" data-bs-toggle="tab" data-bs-target="#dua" type="button" aria-selected="false">Proses Produksi Air Minum Galon</button>
				</li>
				<!-- <li class="nav-item">
                    <button class="nav-link nav-btn" data-bs-toggle="tab" data-bs-target="#tiga" type="button" aria-selected="false">Proses Produksi</button>
                </li> -->
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade show active" id="satu">
					<div class="container">
						<?php
						$count = 0;
						foreach ($proses as $key => $value) {
							if ($count % 2) { ?>

								<div class="row featurette justify-content-center">
									<div class="col col-md-5 order-md-1 order-1">
										<h2 class="featurette-heading"><?= $value->nama_proses ?></h2>
										<?= $value->keterangan ?>
									</div>
									<div class="col col-md-5 order-md-2 order-2 text-center">
										<img class="foto-proses" src="<?= base_url('foto_proses/' . $value->foto_proses); ?>" style="border-radius: 50%;" preserveAspectRatio="xMidYMid slice" focusable="false">
										</img>
									</div>
								</div>


							<?php } else { ?>

								<div class="row featurette justify-content-center">
									<div class="col col-md-5 order-md-2 order-2">
										<h2 class="featurette-heading"><?= $value->nama_proses ?></h2>
										<?= $value->keterangan ?>
									</div>
									<div class="col col-md-5 order-md-1 order-1 text-center">
										<img class="foto-proses" src="<?= base_url('foto_proses/' . $value->foto_proses); ?>" style="border-radius: 50%;" preserveAspectRatio="xMidYMid slice" focusable="false">
										</img>
									</div>
								</div>

						<?php
							}
							$count++;
						}
						?>
					</div>
				</div>
				<div class="tab-pane fade" id="dua">
					<div class="container">
						<?php
						$count = 0;
						foreach ($prosesg as $key => $value) {
							if ($count % 2) { ?>

								<div class="row featurette justify-content-center">
									<div class="col col-md-5 order-md-1 order-1">
										<h2 class="featurette-heading"><?= $value->nama_prosesg ?></h2>
										<?= $value->keterangan ?>
									</div>
									<div class="col col-md-5 order-md-2 order-2 text-center">
										<img class="foto-proses" src="<?= base_url('foto_prosesg/' . $value->foto_prosesg); ?>" style="border-radius: 50%;" preserveAspectRatio="xMidYMid slice" focusable="false">
										</img>
									</div>
								</div>


							<?php } else { ?>

								<div class="row featurette justify-content-center">
									<div class="col col-md-5 order-md-2 order-2">
										<h2 class="featurette-heading"><?= $value->nama_prosesg ?></h2>
										<?= $value->keterangan ?>
									</div>
									<div class="col col-md-5 order-md-1 order-1 text-center">
										<img class="foto-proses" src="<?= base_url('foto_prosesg/' . $value->foto_prosesg); ?>" style="border-radius: 50%;" preserveAspectRatio="xMidYMid slice" focusable="false">
										</img>
									</div>
								</div>

						<?php
							}
							$count++;
						}
						?>
					</div>
				</div>
				<div class="tab-pane fade" id="tiga">CCCCCCCCCC</div>
			</div>
		</div>
	</section>
</main>
