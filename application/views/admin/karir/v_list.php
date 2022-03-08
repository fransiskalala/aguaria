<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title2 ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Home</a></li>
                <li class="breadcrumb-item active">Kelola Karir</li>
            </ol>
        </nav>

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <a href="<?= base_url('karir/add'); ?>" class="btn btn-primary rounded-pill"><i class="fa fa-plus"></i>Add</a>



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
                                        <th>Judul </th>
                                        <th>Deskripsi</th>
                                        <th>Kriteria</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($karir as $key => $value) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= wordwrap($value->judul_karir, 30, "<br>") ?></td>
                                            <td><?= $value->deskripsi_karir ?></td>
                                            <td><?= $value->kriteria_karir ?></td>


                                            <td class="text-center">
                                                <a href="<?= base_url('karir/edit/' . $value->id_karir) ?>" class="btn btn-outline-success">Edit</a>
                                                <a href="<?= base_url('karir/hapus/' . $value->id_karir) ?>" onclick="return confirm('Apakah data ini akan dihapus?')" class="btn btn-outline-danger">Hapus</a>
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