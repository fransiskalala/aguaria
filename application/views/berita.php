<main id="main">
  <div class="section-title">
    <p>Berita</p>
  </div>
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">
          <div class="row" id="berita">
            <?php foreach ($berita as $key => $value) { ?>
              <div class="col col-auto col-md-6 col-lg-6">
                <article class="entry">
                  <div class="entry-img">
                    <img src="<?= base_url('gambar_berita/' . $value->gambar_berita) ?>" alt="" class="img-fluid">
                  </div>

                  <h2 class="entry-title">
                    <a href="<?= base_url('home/detail_berita/' . $value->slug) ?>"><?= substr(strip_tags($value->judul_berita), 0, 40) ?></a></h3>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i><a><?= $value->nama ?></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i><a><time datetime="2020-01-01"><?= date('d F Y | H:i', strtotime($value->created_at)) ?></time></a></li>
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>
                      <?= substr(strip_tags($value->isi_berita), 0, 200) ?>
                    </p>
                    <div class="read-more">
                      <a href="<?= base_url('home/detail_berita/' . $value->slug) ?>">Read More</a>
                    </div>
                  </div>
                </article>
              </div>
            <?php } ?>
          </div>

          <div class="row pagination_row">
            <div class="col">
              <?php
              if (isset($paginasi)) {
                echo $paginasi;
              }

              ?>

            </div>
          </div>

        </div>

        <div class="col-lg-4">

          <div class="sidebar">

            <!-- <h3 class="sidebar-title">Search</h3>
            <div class="sidebar-item search-form">
              <form id="frmSearch" class="search2">
                <input class="search" id="txtSearch" type="text" name="search_bar">
                <button><i class="bi bi-search"></i></button>
              </form>
            </div> -->
            <h3 class="sidebar-title">Search</h3>
            <div class="sidebar-item search-berita">
              <input class="search-berita" id="txtSearch" onkeyup="searchFun()" type="text" name="search_bar">
              <button><i class="bi bi-search"></i></button>
            </div>

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

<script>
  function searchFun() {
    var input, filter, ul, judul, a, i, txtValue;
    input = document.getElementById('txtSearch');
    filter = input.value.toUpperCase();
    ul = document.getElementById("berita");
    judul = ul.getElementsByClassName('col');

    for (i = 0; i < judul.length; i++) {
      a = judul[i].getElementsByTagName("a")[0];
      txtValue = a.textContent || a.innerText || a.innerHTML;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        judul[i].style.display = "";
      } else {
        judul[i].style.display = "none";
      }
    }
  }
</script>
