<main id="main">
    <section id="banner">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url(); ?>images/HEADER-CREATE9.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>
        </div>
    </section>

    <div class="section-title">
        <p>Berita</p>
    </div>
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">
                    <article class="entry">
                        <h2 class="entry-title"><?= $berita->judul_berita  ?></h2>
                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i><a><?= $berita->nama ?></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i><a><time datetime="2020-01-01"><?= $berita->created_at ?></time></a></li>
                            </ul>
                        </div>
                        <div class="blog_image"><img src="<?= base_url('gambar_berita/' . $berita->gambar_berita)  ?>" height="300px" width="100%" alt=""></div>
                        <p><?= $berita->isi_berita  ?></p>
                    </article>
                </div>
                <div class="col-lg-4">

                    <div class="sidebar">
                        <h3 class="sidebar-title">Recent Posts</h3>
                        <?php foreach ($latest_berita as $key => $value) { ?>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <img src="<?= base_url('gambar_berita/' . $value->gambar_berita) ?>" alt="">
                                    <h4><a href="<?= base_url('home/detail_berita/' . $value->slug) ?>"><?= substr(strip_tags($value->judul_berita), 0, 40) ?></a></h4>
                                    <h4><a href="<?= base_url('home/detail_berita/' . $value->slug) ?>"></a></h4>
                                    <time datetime="2020-01-01"><?= $value->created_at ?></time>
                                </div>

                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>