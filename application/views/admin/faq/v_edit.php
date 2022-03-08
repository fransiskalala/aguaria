<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title2 ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Home</a></li>
                <li class="breadcrumb-item active">Kelola Faq</li>
            </ol>
        </nav>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <?php
                            echo form_open_multipart('faq/edit/' . $faq->id_faq);

                            if ($this->session->flashdata('error')) {
                                echo '<div class="pb-0 alert alert-warning alert-dismissible fade show" role="alert">';
                                echo $this->session->flashdata('error');
                                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                            }
                            ?>

                            <div class="row mb-2">
                                <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="<?= $faq->judul_faq  ?>" type="text" name="judul_faq" placeholder="Judul" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="inputText" class="col-sm-2 col-form-label">Penjelasan</label>
                                <div class="col-sm-10">
                                    <textarea id="editor" class="form-control" type="text" name="penjelasan_faq" placeholder="Penjelasan" required><?= $faq->penjelasan_faq  ?></textarea>
                                </div>
                            </div>
                                                       
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success rounded-pill">Simpan</button>
                                <a href="<?= site_url('faq') ?>"><button type="button" class="btn btn-dark rounded-pill">Kembali</button>
                            </div>

                            <?php echo form_close(); ?>

                        </div>
                    </div>

                </div>
        </section>
    </div>
</main>