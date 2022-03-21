<main id="main">

  <section id="banner">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url(); ?>images/HEADER-CREATE13.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    </div>
  </section>
  

  <div class="section-title">
    <p>Organisasi</p>
  </div>
  <div class="container">

    <div class="row content pb-5">
      <div class="col-lg-6 text-center">
        <img class="foto-sejarah" src="<?= base_url('foto_organisasi/' . $organisasi->foto_organisasi) ?>">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <p><?= $organisasi->isi_organisasi ?></p>
      </div>
    </div>

  </div>


</main>