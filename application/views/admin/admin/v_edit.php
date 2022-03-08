<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title2 ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Home</a></li>
                <li class="breadcrumb-item active">Kelola Admin</li>
            </ol>
        </nav>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <?php
                            echo form_open_multipart('admin/edit/' . $admin->id);

                            if ($this->session->flashdata('error')) {
                                echo '<div class="pb-0 alert alert-warning alert-dismissible fade show" role="alert">';
                                echo $this->session->flashdata('error');
                                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                            }
                            ?>

                            <div class="row mb-2">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="<?= $admin->nama  ?>" type="text" name="nama" placeholder="Nama" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="<?= $admin->username  ?>" type="text" name="username" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="<?= $admin->email  ?>" type="text" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="inputText" class="col-sm-2 col-form-label">Level</label>
                                <div class="col-sm-10">
                                    <select name="as_id" class="form-control" required>
                                        <?php $as_id = $this->input->post('as_id') ? $this->input->post('as_id') : $row->as_id ?>
                                        <option value="">Pilihan</option>
                                        <option value="1" <?= $as_id == 1 ? 'selected' : null ?>> Admin </option>
                                        <option value="2" <?= $as_id == 2 ? 'selected' : null ?>> User </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="inputText" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="" type="password" name="password" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success rounded-pill">Simpan</button>
                                <a href="<?= site_url('admin') ?>"><button type="button" class="btn btn-dark rounded-pill">Kembali</button>
                            </div>

                            <?php echo form_close(); ?>

                        </div>
                    </div>

                </div>
        </section>
    </div>
</main>