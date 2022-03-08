<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title2 ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Home</a></li>
                <li class="breadcrumb-item active">Kelola Tentang Aguaria</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <a href="<?= base_url('tentang/add'); ?>" class="btn btn-primary rounded-pill"><i class="fa fa-plus"></i>Add</a>
                   


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
                                <th>Judul</th>
                                <th>Keterangan</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($tentang as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $value->nama_tentang ?></td>
                                    <td><?= $value->keterangan ?></td>
                                    <td><img src="<?= base_url('foto_tentang/' . $value->foto_tentang) ?>" width="100px" height="100px"></td>

                                    <td class="text-center">
                                        <a href="<?= base_url('tentang/edit/' . $value->id_tentang) ?>" class="btn btn-outline-success">Edit</a>
                                        <a href="<?= base_url('tentang/hapus/' . $value->id_tentang) ?>" onclick="return confirm('Apakah data ini akan dihapus?')" class="btn btn-outline-danger">Hapus</a>
                                    </td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>

</main>