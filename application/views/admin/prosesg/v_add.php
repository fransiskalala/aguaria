<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title2 ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Home</a></li>
				<li class="breadcrumb-item"><a href="<?= base_url('prosesg') ?>">Kelola Proses Produksi Galon</a></li>
                <li class="breadcrumb-item active">Add Proses Produksi Galon</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <?php
                        echo form_open_multipart('prosesg/add');

                        if ($this->session->flashdata('error')) {
                            echo '<div class="pb-0 alert alert-warning alert-dismissible fade show" role="alert">';
                            echo $this->session->flashdata('error');
                            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        }
                        ?>

                        <div class="row mb-2">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama Proses </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="nama_prosesg" placeholder="Nama Proses" required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputText" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <textarea id="editor" class="form-control" type="text" name="keterangan" placeholder="Keterangan" required></textarea>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputText" class="col-sm-2 col-form-label">Foto Proses</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" type="text" name="foto_prosesg" required>
                            </div>
                        </div>


                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success rounded-pill">Simpan</button>
                            <a href="<?= site_url('prosesg') ?>"><button type="button" class="btn btn-dark rounded-pill">Kembali</button>
                        </div>

                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>
    </section>

</main><!-- End #main -->
