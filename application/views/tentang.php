<main id="main">
  <section id="banner">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url(); ?>images/HEADER-CREATE6.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    </div>
  </section>



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