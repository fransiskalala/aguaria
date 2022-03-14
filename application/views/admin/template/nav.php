 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

 	<ul class="sidebar-nav" id="sidebar-nav">

 		<li class="nav-item">
 			<a <?= $this->uri->segment(1) == 'user' ? 'class="nav-link active"' : '' ?> class="nav-link collapsed" href="<?= base_url('user') ?>">
 				<i class="bi bi-grid"></i>
 				<span>Dashboard</span>
 			</a>
 		</li>

 		<li class="nav-item">
 			<a <?= $this->uri->segment(1) == 'sejarah' || $this->uri->segment(1) == 'visi_misi' || $this->uri->segment(1) == 'tentang' || $this->uri->segment(1) == 'organisasi' ? 'class="nav-link"' : '' ?> class="nav-link collapsed" data-bs-target="#perusahaan-nav" data-bs-toggle="collapse" href="#" aria-expanded="true">
 				<i class="bi bi-menu-button-wide"></i><span>Perusahaan</span><i class="bi bi-chevron-down ms-auto"></i>
 			</a>
 			<ul id="perusahaan-nav" <?= $this->uri->segment(1) == 'sejarah' || $this->uri->segment(1) == 'visi_misi' || $this->uri->segment(1) == 'tentang' || $this->uri->segment(1) == 'organisasi' ? 'class=nav-content collapse show"' : '' ?> class="nav-content collapse" data-bs-parent="#sidebar-nav">
 				<li class="nav-item">
 					<a <?= $this->uri->segment(1) == 'sejarah' ? 'class="nav-link active"' : '' ?> class="nav-link collapsed" href="<?= base_url('sejarah') ?>">
 						<i class="ri-globe-line"></i>
 						<span>Sejarah</span>
 					</a>
 				</li>
 				<li class="nav-item">
 					<a <?= $this->uri->segment(1) == 'visi_misi' ? 'class="nav-link active"' : '' ?> class="nav-link collapsed" href="<?= base_url('visi_misi') ?>">
 						<i class="ri-group-2-line"></i>
 						<span>Visi & Misi</span>
 					</a>
 				</li>
 				<li class="nav-item">
 					<a <?= $this->uri->segment(1) == 'tentang' ? 'class="nav-link active"' : '' ?> class="nav-link collapsed" href="<?= base_url('tentang') ?>">
 						<i class="bi bi-card-checklist"></i>
 						<span>Tentang Aguaria</span>
 					</a>
 				</li>
 				<li class="nav-item">
 					<a <?= $this->uri->segment(1) == 'organisasi' ? 'class="nav-link active"' : '' ?> class="nav-link collapsed" href="<?= base_url('organisasi') ?>">
 						<i class="ri-globe-line"></i>
 						<span>Organisasi</span>
 					</a>
 				</li>
 			</ul>
 		</li>

 		<li class="nav-item">
 			<a <?= $this->uri->segment(1) == 'produk' ? 'class="nav-link active"' : '' ?> class="nav-link collapsed" href="<?= base_url('produk') ?>">
 				<i class="ri-folder-3-fill"></i>
 				<span>Produk</span>
 			</a>
 		</li>

 		<li class="nav-item">
 			<a <?= $this->uri->segment(1) == 'proses' || $this->uri->segment(1) == 'prosesg' ? 'class="nav-link"' : '' ?> class="nav-link collapsed" data-bs-target="#proses-nav" data-bs-toggle="collapse" href="#" aria-expanded="true">
 				<i class="bi bi-menu-button-wide"></i><span>Proses</span><i class="bi bi-chevron-down ms-auto"></i>
 			</a>
 			<ul id="proses-nav" <?= $this->uri->segment(1) == 'proses' || $this->uri->segment(1) == 'prosesg' ? 'class=nav-content collapse show"' : '' ?> class="nav-content collapse" data-bs-parent="#sidebar-nav">
 				<li class="nav-item">
 					<a <?= $this->uri->segment(1) == 'proses' ? 'class="nav-link active"' : '' ?> class="nav-link collapsed" href="<?= base_url('proses') ?>">
 						<i class="bi bi-gear"></i>
 						<span>Produk Smallpack</span>
 					</a>
 				</li>
 				<li class="nav-item">
 					<a <?= $this->uri->segment(1) == 'prosesg' ? 'class="nav-link active"' : '' ?> class="nav-link collapsed" href="<?= base_url('prosesg') ?>">
 						<i class="bi bi-gear-fill"></i>
 						<span>Produk Galon</span>
 					</a>
 				</li>
 			</ul>
 		</li>

 		<li class="nav-item">
 			<a <?= $this->uri->segment(1) == 'berita' ? 'class="nav-link active"' : '' ?> class="nav-link collapsed" href="<?= base_url('berita') ?>">
 				<i class="bi bi-newspaper"></i>
 				<span>Berita</span>
 			</a>
 		</li>
 		<li class="nav-item">
 			<a <?= $this->uri->segment(1) == 'galeri' ? 'class="nav-link active"' : '' ?> class="nav-link collapsed" href="<?= base_url('galeri') ?>">
 				<i class="bi bi-card-image"></i>
 				<span>Galeri</span>
 			</a>
 		</li>
 		<li class="nav-item">
 			<a <?= $this->uri->segment(1) == 'karir' ? 'class="nav-link active"' : '' ?> class="nav-link collapsed" href="<?= base_url('karir') ?>">
 				<i class="bi bi-wallet-fill"></i>
 				<span>Karir</span>
 			</a>
 		</li>
 		<li class="nav-item">
 			<a <?= $this->uri->segment(1) == 'feedback' ? 'class="nav-link active"' : '' ?> class="nav-link collapsed" href="<?= base_url('feedback') ?>">
 				<i class="bi bi-emoji-smile"></i>
 				<span>Feedback</span>
 			</a>
 		</li>
 		<li class="nav-item">
 			<a <?= $this->uri->segment(1) == 'informasi' ? 'class="nav-link active"' : '' ?> class="nav-link collapsed" href="<?= base_url('informasi') ?>">
 				<i class="ri-home-3-fill"></i>
 				<span>Informasi</span>
 			</a>
 		</li>
 		<li class="nav-item">
 			<a <?= $this->uri->segment(1) == 'faq' ? 'class="nav-link active"' : '' ?> class="nav-link collapsed" href="<?= base_url('faq') ?>">
 				<i class="ri-questionnaire-line"></i>
 				<span>Faq</span>
 			</a>
 		</li>
 		<li class="nav-item">
 			<a <?= $this->uri->segment(1) == 'slider' ? 'class="nav-link active"' : '' ?> class="nav-link collapsed" href="<?= base_url('slider') ?>">
 				<i class="ri-slideshow-2-line"></i>
 				<span>Slider</span>
 			</a>
 		</li>
 	</ul>

 </aside>