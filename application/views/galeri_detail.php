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
        <p><?= $caption_galeri->caption_galeri ?></p>
    </div>
    <section id="blog" class="blog">
        <div class="container">
            <div class="row">

                <?php
                $x = 0;
                foreach ($detail_galeri as $key => $value) {
                ?>
                    <div class="col-md-4 col-lg-4 pb-4">
                        <div class="card text-center">
                            <img src="<?= base_url('foto_galeri/' . $value->foto_galeri) ?>" class="card-img-top galeri-img">
                        </div>
                    </div>
                <?php $x++;
                } ?>
            </div>
        </div>
    </section>
</main>