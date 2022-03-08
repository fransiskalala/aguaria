<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title2 ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Home</a></li>
                <li class="breadcrumb-item active">Tentang Aguaria</li>
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
                        echo form_open_multipart('tentang/edit/' . $tentang->id_tentang);

                        if ($this->session->flashdata('error')) {
                            echo '<div class="pb-0 alert alert-warning alert-dismissible fade show" role="alert">';
                            echo $this->session->flashdata('error');
                            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        }
                        ?>

                        <div class="row mb-2">
                            <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input class="form-control" value="<?= $tentang->nama_tentang  ?>" type="text" name="nama_tentang" placeholder="Nama tentang" required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputText" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <textarea id="editor" class="form-control" type="text" name="keterangan" placeholder="Keterangan" required><?= $tentang->keterangan  ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputText" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10"><br>
                                <img src="<?= base_url('foto_tentang/' . $tentang->foto_tentang) ?>" width="150px" height="150px">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="inputText" class="col-sm-2 col-form-label">Ganti Foto</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" type="text" name="foto_tentang">
                            </div>
                        </div>


                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success rounded-pill">Simpan</button>
                            <a href="<?= base_url('tentang') ?>"><button type="button" class="btn btn-dark rounded-pill">Kembali</button>

                        </div>

                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>
    </section>

</main><!-- End #main -->