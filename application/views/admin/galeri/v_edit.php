<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title2 ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Home</a></li>
				<li class="breadcrumb-item"><a href="<?= base_url('galeri') ?>">Kelola Galeri</a></li>
                <li class="breadcrumb-item active">Edit Galeri</li>
            </ol>
        </nav>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <?php
                            echo form_open_multipart('galeri/edit/' . $galeri->id_galeri);

                            if ($this->session->flashdata('error')) {
                                echo '<div class="pb-0 alert alert-warning alert-dismissible fade show" role="alert">';
                                echo $this->session->flashdata('error');
                                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                            }
                            ?>

                            <div class="row mb-2">
                                <label for="inputText" class="col-sm-2 col-form-label">Caption Galeri</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="<?= $galeri->caption_galeri  ?>" type="text" name="caption_galeri" placeholder="Caption Galeri" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="inputText" class="col-sm-2 col-form-label">Sampul Galeri</label>
                                <div class="col-sm-10">
                                    <img src="<?= base_url('foto_galeri_sampul/' . $galeri->sampul_galeri) ?>" width="150px" height="150px">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="inputText" class="col-sm-2 col-form-label">Ganti Sampul</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" type="text" name="sampul_galeri">
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success rounded-pill">Simpan</button>
                                <a href="<?= base_url('galeri') ?>"><button type="button" class="btn btn-dark rounded-pill">Kembali</button>
                            </div>

                            <?php echo form_close(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
</main>
