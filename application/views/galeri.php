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
        <p>Galeri</p>
    </div>
    <section id="blog" class="blog">
        <div class="container">
            <div class="row">

                <?php
                $x = 0;
                foreach ($galeri as $key => $value) {
                ?>
                    <div class="col-md-4 col-lg-4 pb-4">
                        <a href="<?= base_url('home/detail_galeri/' . $value->id_galeri) ?>">
                            <div class="card text-center">
                                <img src="<?= base_url('foto_galeri_sampul/' . $value->sampul_galeri) ?>" class="card-img-top galeri-sampul">
                                <div class="card-body">
                                    <p class="card-text"><?= $value->caption_galeri ?></p>
                                    <p class="card-text"><small class="text-muted"><?= $value->tgl_dibuat ?></small></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php $x++;
                } ?>
            </div>
        </div>
    </section>
</main>