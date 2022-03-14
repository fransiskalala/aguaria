<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title2 ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Home</a></li>
                <li class="breadcrumb-item active">Kelola Berita</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <a href="<?= base_url('berita/add'); ?>" class="btn btn-primary rounded-pill"><i class="fa fa-plus"></i>Add</a>


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
                                    <th>Judul Berita</th>
                                    <th>Slug</th>
                                    <th>Isi Berita</th>
                                    <th>Gambar Berita</th>
                                    <th>Tanggal</th>
                                    <th>Created By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($berita as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= wordwrap($value->judul_berita, 30, "<br>") ?></td>
                                        <td><?= wordwrap($value->slug, 30, "<br>") ?></td>
                                        <td><?= wordwrap($value->isi_berita, 30, "<br>") ?></td>

                                        <td><img src="<?= $value->gambar_berita != null ? base_url('gambar_berita/' . $value->gambar_berita) : base_url('images/NIA.png') ?>" width="100px" height="100px"></td>
                                        <td><?= date('d F Y | H:i', strtotime($value->created_at)) ?></td>
                                        <td><?= $value->id == 1 ? 'Admin' : 'User'; ?></td>

                                        <td class="text-center">
                                            <a href="<?= base_url('berita/edit/' . $value->id_berita) ?>" class="btn btn-outline-success">Edit</a>
                                            <a href="<?= base_url('berita/hapus/' . $value->id_berita) ?>" onclick="return confirm('Apakah data ini akan dihapus?')" class="btn btn-outline-danger">Hapus</a>
                                        </td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
    </section>

</main><!-- End #main -->