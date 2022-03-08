<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title2 ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Home</a></li>
                <li class="breadcrumb-item active">Kelola Galeri</li>
            </ol>
        </nav>

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <a href="<?= base_url('galeri/add'); ?>" class="btn btn-primary rounded-pill"><i class="fa fa-plus"></i>Add</a>



                            <?php

                            if ($this->session->flashdata('pesan')) {
                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                                echo $this->session->flashdata('pesan');
                                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                            }

                            ?>

                            <table class="table table-hover" id="dataTables">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Galeri</th>
                                        <th class="text-center">Sampul</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($galeri as $key => $value) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value->caption_galeri ?></td>
                                            <td class="text-center">
                                                <img src="<?= base_url('foto_galeri_sampul/' . $value->sampul_galeri) ?>" width="100px" height="100px"><br>
                                                <i class="fa fa-image"> <?= $value->jml_foto ?> foto</i><br>
                                                <a href="<?= base_url('galeri/add_foto/' . $value->id_galeri) ?>" class="btn btn-outline-primary"> Tambah Foto </a>
                                            </td>
                                            <td class="text-center">
                                                <a href="<?= base_url('galeri/edit/' . $value->id_galeri) ?>" class="btn btn-outline-success">Edit</a>
                                                <a href="<?= base_url('galeri/hapus/' . $value->id_galeri) ?>" onclick="return confirm('Apakah data ini akan dihapus?')" class="btn btn-outline-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>


                        </div>
                    </div>

                </div>
        </section>
    </div>
</main>