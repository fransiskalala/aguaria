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
                        <h5 class="card-title">Kelola Tentang Aguaria</h5>
                        <?php
                        echo form_open_multipart('tentang');

                        if ($this->session->flashdata('pesan')) {
                            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">';
                            echo $this->session->flashdata('pesan');
                            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        }
                        ?>

                        <div class="col-sm-13">

                            <div class="row mb-1">
                                <label for="inputText" class="col-sm-1 col-form-label">Nama</label>
                                <div class="col-sm-11">
                                    <input class="form-control" type="text" value="<?= $tentang->nama_tentang ?>" name="nama_tentang" placeholder="Nama">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="inputText" class="col-sm-1 col-form-label">Keterangan</label>
                                <div class="col-sm-11">
                                    <textarea name="keterangan" id="editor"><?= $tentang->keterangan ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="inputText" class="col-sm-1 col-form-label">Foto</label>
                                <div class="col-sm-11">
                                    <img src="<?= base_url('foto_tentang/' . $tentang->foto_tentang) ?>" width="150px" height="150px">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="inputText" class="col-sm-1 col-form-label">Ganti Foto</label>
                                <div class="col-sm-11">
                                <input type="file" class="form-control" type="text" name="foto_tentang">
                                </div>
                            </div>

                            <div class="col-sm-12 text-center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success rounded-pill">Perbaharui</button>


                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->