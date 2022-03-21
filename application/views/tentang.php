<main id="main">
	<div class="section-title">
		<p>Tentang Aguaria</p>
	</div>
	<div class="container text-center">
		<?php foreach ($tentang as $key => $value) { ?>
			<p><?= $value->keterangan ?></p>
			<img class="tentang" src="<?= base_url('foto_tentang/' . $value->foto_tentang) ?>">
		<?php } ?>
	</div>


</main>
