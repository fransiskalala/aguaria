<main id="main">
	<section id="contact" class="contact pt-0">
		<div class="container">
			<div class="row">
				<div class="col col-md col-lg">
					<div class="informasi">
						<div class="section-title">
							<p class="pb-5">Informasi Perusahaan</p>
							<img src="<?= base_url(); ?>images/Gambar-kantor.png" alt="">
						</div>
						<div class="card informasi-perusahaan">
							<div class="card-body">
								<h3 class="card-title"><?= $informasi->nama_perusahaan ?></h3><br>
								<p class="card-text text-muted mb-0 underline">Alamat</p>
								<p class="card-text"><?= $informasi->alamat_perusahaan ?></p>
								<p class="card-text text-muted mb-0 underline">No. Telepon</p>
								<p class="card-text"><?= $informasi->no_telepon_perusahaan ?></p>
								<p class="card-text text-muted mb-0 underline">Email</p>
								<a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?= $informasi->email_perusahaan ?>" class="text-email" target="_blank" class="card-link"><?= $informasi->email_perusahaan ?></a>
								<!-- <p class="card-text text-muted mb-0 mt-3 underline">Cabang Perusahaan</p>
                  <div class="btn-group pt-1">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Cabang Perusahaan
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Cabang Perusahaan 1</a></li>
                      <li><a class="dropdown-item" href="#">Cabang Perusahaan 2</a></li>
                      <li><a class="dropdown-item" href="#">Cabang Perusahaan 3</a></li>
                    </ul>
                  </div> -->
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col col-md col-lg">
					<div class="section-title">
						<p>Informasi Pemesanan</p>
					</div>
					<form action="<?= site_url('home/add_feedback') ?>" method="post">
						<div class="row">
							<div class="form-group mt-3">
								<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Anda" value="<?= set_value('nama'); ?>" required>
							</div>
							<div class="form-group mt-3">
								<input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" value="<?= set_value('email'); ?>" required>
							</div>
						</div>
						<div class="form-group mt-3">
							<input type="text" class="form-control" name="telepon" id="telepon" placeholder="Telepon Anda" value="<?= set_value('telepon'); ?>" required>
						</div>
						<div class="form-group mt-3">
							<input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" value="<?= set_value('subject'); ?>" required>
						</div>
						<div class="form-group mt-3">
							<textarea class="form-control" name="pesan" rows="5" placeholder="Pesan Anda" value="<?= set_value('pesan'); ?>" required></textarea>
						</div>
						<br>
						<div class="text-center pb-5"><button class="btn btn-primary" type="submit">Send Message</button></div>
					</form>
				</div>
			</div>
		</div>
		<!-- <div class="col-md-12">
			<iframe style="border:0; width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.7740212454872!2d110.3934039822465!3d-7.114863105705905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7088eb82283931%3A0x2b3ff2de4eddf753!2sJl.%20BIma%20Raya%2C%20Mapagan%2C%20Lerep%2C%20Kec.%20Ungaran%20Bar.%2C%20Kabupaten%20Semarang%2C%20Jawa%20Tengah%2050519!5e0!3m2!1sid!2sid!4v1645753910128!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
		</div> -->
	</section>
</main>
