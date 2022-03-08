<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title2 ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Home</a></li>
                <li class="breadcrumb-item active">Kelola Karir</li>
            </ol>
        </nav>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <?php
                            echo form_open_multipart('karir/edit/' . $karir->id_karir);

                            if ($this->session->flashdata('error')) {
                                echo '<div class="pb-0 alert alert-warning alert-dismissible fade show" role="alert">';
                                echo $this->session->flashdata('error');
                                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                            }
                            ?>

                            <div class="row mb-2">
                                <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="<?= $karir->judul_karir  ?>" type="text" name="judul_karir" placeholder="Judul Karir" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="inputText" class="col-sm-2 col-form-label">Deskripsi Karir</label>
                                <div class="col-sm-10">
                                    <textarea id="editor" class="ckeditor" class="form-control" type="text" name="deskripsi_karir" placeholder="Deskripsi Karir" required><?= $karir->deskripsi_karir  ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="inputText" class="col-sm-2 col-form-label">Kriteria Karir</label>
                                <div class="col-sm-10">
                                    <textarea id="editor" class="ckeditor" class="form-control" type="text" name="kriteria_karir" placeholder="Kriteria Karir" required><?= $karir->kriteria_karir  ?></textarea>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success rounded-pill">Simpan</button>
                                <a href="<?= site_url('karir') ?>"><button type="button" class="btn btn-dark rounded-pill">Kembali</button>
                            </div>

                            <?php echo form_close(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>