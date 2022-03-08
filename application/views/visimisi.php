<main id="main">
  <!-- Banner Section -->
  <section id="banner">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url(); ?>images/HEADER-CREATE4.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End Banner Section -->
<div class="section-title">
    <p>Visi & Misi</p>
  </div>
  <section id="features" class="features">
    <div class="container">

      <div class="row content">
        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1"><?= $visi_misi->judul_visi ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2"><?= $visi_misi->judul_misi ?></a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-9 details order-2 order-lg-1">
                    <p><?= $visi_misi->isi_visi ?></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/features-1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-9 details order-2 order-lg-1">
                    <p><?= $visi_misi->isi_misi ?></p>

                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/features-2.png" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>