<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title2 ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Home</a></li>
				<li class="breadcrumb-item"><a href="<?= base_url('berita') ?>">Kelola Berita</a></li>
                <li class="breadcrumb-item active">Add Berita</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <?php
                        echo form_open_multipart('berita/add');
                        /* print_r($this->session->userdata);  */

                        if ($this->session->flashdata('error')) {
                            echo '<div class="pb-0 alert alert-warning alert-dismissible fade show" role="alert">';
                            echo $this->session->flashdata('error');
                            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        }
                        ?>

                        <div class="row mb-2">
                            <label for="inputText" class="col-sm-2 col-form-label">Judul Berita</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="judul_berita" placeholder="Judul Berita" required>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="inputText" class="col-sm-2 col-form-label">Isi Berita</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="editor" type="text" name="isi_berita" placeholder="Isi Berita" required></textarea>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputText" class="col-sm-2 col-form-label">Gambar Berita</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" type="text" name="gambar_berita" required>
                            </div>
                        </div>
                        <!-- <div class="row mb-2">
                            <label for="inputText" class="col-sm-2 col-form-label">Created By</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="created_by" placeholder="Created By" required>
                            </div>
                        </div> -->

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success rounded-pill">Simpan</button>
                            <a href="<?= site_url('berita') ?>"><button type="button" class="btn btn-dark rounded-pill">Kembali</button>
                        </div>

                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>
    </section>

</main><!-- End #main -->
