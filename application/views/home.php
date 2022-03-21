<main id="main" class="bg-biru">
	<div class="container bg-icon">
		<div class="row home-animate-wrapper">
			<div class="col-md-4 col-xs-12 text-center animate-produk animate__animated animate__zoomInLeft animate__delay-1s">
				<img class="col-md-12 col-xs-12 home-icon-padding" src="<?php echo base_url(); ?>images/LogoProduk.png" class="d-block w-1" alt="...">
				<h2>Produk</h2>
				<p>Kami menghadirkan Air Minum Dalam Kemasan yang bersumber dari mata air pegunungan terbaik serta terjamin kualitasnya.</p>
				<a class="btn btn-aguaria" href="<?= base_url('home/produk') ?>" role="button">Selengkapnya</a>
			</div>
			<div class="col-md-4 col-xs-12 text-center animate-proses animate__animated animate__zoomInUp animate__delay-1s">
				<img class="col-md-12 col-xs-12 home-icon-padding" src="<?php echo base_url(); ?>images/LogoProses.png">
				<h2>Proses Produksi</h2>
				<p>Tanpa adanya proses produksi yang bersih, higienis, dan steril, maka tidak akan terbentuk produk AGUARIA kesayangan anda.</p>
				<a class="btn btn-aguaria" href="<?= base_url('home/proses') ?>" role="button">Selengkapnya</a>
			</div>
			<div class="col-md-4 col-xs-12 text-center animate-karir animate__animated animate__zoomInRight animate__delay-1s">
				<img class="col-md-12 col-xs-12 home-icon-padding" src="<?php echo base_url(); ?>images/LogoKarir.png">
				<h2>Karir</h2>
				<p>Bergabung dan berkembanglah bersama AGUARIA untuk inovasi-inovasi yang berguna di masa yang akan datang.</p>
				<a class="btn btn-aguaria" href="<?= base_url('home/karir') ?>" role="button">Selengkapnya</a>
			</div>
		</div>
		<br>
		<br>
</main>
<main id="main">
	<div class="section-title">
		<br>
		<br>
		<p>Kenapa Harus Aguaria?</p>
	</div>
	<div class="container pb-5">
		<div id="accordion">
			<?php
			$x = 0;
			foreach ($faq as $key => $value) {
			?>
				<div id="<?= $x ?>">
					<div class="card-header" id="heading-<?= $x ?>">
						<h5 class="mb-0">
							<button <?= $x == 0 ? 'class="btn judul-faq faq-title-btn"' : 'class="btn judul-faq faq-title-btn collapsed"' ?> data-toggle="collapse" data-target="#collapse-<?= $x ?>" aria-expanded="true" aria-controls="collapse-<?= $x ?>">
								<?= $value->judul_faq ?>
							</button>
						</h5>
					</div>
					<div id="collapse-<?= $x ?>" <?= $x == 0 ? 'class="collapse show"' : 'class="collapse"' ?> aria-labelledby="heading-<?= $x ?>" data-parent="#accordion">
						<div class="isi-faq">
							<?= $value->penjelasan_faq ?>
						</div>
					</div>
				</div>
			<?php $x++;
			} ?>
		</div>
	</div>



</main>
