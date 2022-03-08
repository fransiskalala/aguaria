<main id="main">
  <section id="banner">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= base_url(); ?>images/HEADER-CREATE7.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    </div>
  </section>

  <div class="section-title">
    <p>Karir</p>
  </div>
  <section id="blog" class="blog">
    <div class="container">
      <div class="row">

        <?php
        $x = 0;
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
        } ?>
      </div>
    </div>
  </section>
</main>