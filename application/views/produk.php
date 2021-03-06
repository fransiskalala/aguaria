<main id="main">
	<link href="<?= base_url() ?>frontend/assets/css/owl.carousel.min.css" rel="stylesheet" />
	<link href="<?= base_url() ?>frontend/assets/css/owl.theme.default.min.css" rel="stylesheet" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css" rel="stylesheet" />
	<link href="<?= base_url() ?>frontendfrontend/assets/css/style.css" rel="stylesheet" />
	<div class="section-title">
		<p>Produk Aguaria</p>
	</div>

	<section id="blog" class="blog overflow pt-0">
		<div class="container">
			<main>
				<section class="ftco-section pt-0">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="featured-carousel owl-carousel">
									<?php foreach ($produk as $key => $value) { ?>
										<div class="item">
											<div class="work-wrap d-md-flex">
												<div class="img order-md-last" style="background-image: url(<?= base_url('foto_produk/' . $value->foto_produk); ?>"></div>
												<div class="text text-left text-lg-right p-4 px-xl-5 align-items-center">
													<div class="produk-keterangan">
														<h2 class="mb-4">
															<?= $value->nama_produk ?>
														</h2>
														<div class="row justify-content-end">
															<div class="col-xl-8">
																<p class="isi">
																	<?= $value->keterangan ?>
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>

		</div>
	</section>

	<script src="<?= base_url() ?>frontend/assets/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>frontend/assets/js/popper.js"></script>
	<script src="<?= base_url() ?>frontend/assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>frontend/assets/js/owl.carousel.min.js"></script>

</main>
