<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title2 ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Home</a></li>
                <li class="breadcrumb-item active">Informasi Perusahaan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kelola Informasi Perusahaan</h5>
                        <?php
                        echo form_open_multipart('informasi');

                        if ($this->session->flashdata('pesan')) {
                            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">';
                            echo $this->session->flashdata('pesan');
                            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        }
                        ?>

                        <div class="col-sm-12">
                            <div class="row mb-1">
                                <label for="inputText" class="col-sm-2 col-md-2 col-form-label">Nama</label>
                                <div class="col-sm-10 col-md-10">
                                    <input class="form-control" type="text" value="<?= $informasi->nama_perusahaan ?>" name="nama_perusahaan" placeholder="Nama Perusahaan">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="inputText" class="col-sm-2 col-md-2 col-form-label">Alamat</label>
                                <div class="col-sm-10 col-md-10">
                                    <input class="form-control" type="text" value="<?= $informasi->alamat_perusahaan ?>" name="alamat_perusahaan" placeholder="Alamat Perusahaan">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="inputText" class="col-sm-2 col-md-2 col-form-label">No. Telepon</label>
                                <div class="col-sm-10 col-md-10">
                                    <input class="form-control" type="text" value="<?= $informasi->no_telepon_perusahaan ?>" name="no_telepon_perusahaan" placeholder="No. Telepon">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="inputText" class="col-sm-2 col-md-2 col-form-label">Email</label>
                                <div class="col-sm-10 col-md-10">
                                    <input class="form-control" type="text" value="<?= $informasi->email_perusahaan ?>" name="email_perusahaan" placeholder="Email">
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

</main>