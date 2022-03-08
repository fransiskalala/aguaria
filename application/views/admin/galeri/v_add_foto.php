<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title2 ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Home</a></li>
                <li class="breadcrumb-item active">Kelola Galeri</li>
            </ol>
        </nav>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <?php
                            echo form_open_multipart('galeri/add_foto/' . $galeri->id_galeri);

                            if ($this->session->flashdata('error')) {
                                echo '<div class="pb-0 alert alert-warning alert-dismissible fade show" role="alert">';
                                echo $this->session->flashdata('error');
                                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                            }
                            ?>

                            <div class="row mb-2">
                                <label for="inputText" class="col-sm-2 col-form-label">Tambah Foto Galeri</label>
                                <div class="col-sm-10">
                                    <input type="hidden" value="<?= $galeri->id_galeri  ?>" class="form-control" type="text" name="id_galeri" required>
                                    <input type="file" class="form-control" type="text" name="foto_galeri" required>
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success rounded-pill">Simpan</button>
                                <a href="<?= base_url('galeri') ?>"><button type="button" class="btn btn-dark rounded-pill">Kembali</button></a>
                            </div>

                            <?php echo form_close(); ?>

                        </div>
                        <div class="card-footer">
                            <div class="row row-cols-2 row-cols-md-2 g-4">
                                <?php foreach ($foto_galeri as $key => $value) { ?>
                                    <div class="col">
                                        <div class="card text-center">
                                            <img src="<?= base_url('foto_galeri/' . $value->foto_galeri) ?>" class="card-img-top galeri-img">
                                            <div class="card-body">
                                                <a href="<?= base_url('galeri/hapus_foto/' . $value->id_galeri . '/' . $value->id_foto) ?>" onclick="return confirm('Apakah data ini akan dihapus?')" class="btn btn-danger mt-3">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
</main>