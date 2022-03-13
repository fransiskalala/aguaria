-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 05:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aguaria`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gambar_berita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `slug`, `isi_berita`, `id`, `created_at`, `gambar_berita`) VALUES
(16, 'Aguaria Mematenkan Logo Baru', 'aguaria-mematenkan-logo-baru', '<p>AGUARIA berhasil melakukan pembaharuan logo setelah bertahun tahun menggunakan logo lamanya. Tujuannya adalah dengan memperbaharui logo, maka diharapkan adanya perubahan kearah yang lebih baik.</p>\r\n', '1', '2022-03-01 16:31:15', '1151205.png'),
(17, 'Aguaria Meluncurkan Produk Baru', 'aguaria-meluncurkan-produk-baru', '<p>AGUARIA berhasil menghasilkan inovasi produk baru. &quot;Demineral&quot; merupakan inovasi yang di ciptakan dengan menerapkan proses Reverse Osmosis didalam proses pembuatannya.</p>\r\n', '1', '2022-03-02 01:34:16', 'Pelangi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `judul_faq` varchar(500) NOT NULL,
  `penjelasan_faq` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_faq`, `judul_faq`, `penjelasan_faq`) VALUES
(1, 'Memiliki pH Netral', '<p><span style=\"font-size:18px\">Dengan kondisi tubuh normal, AGUARIA sangat tepat untuk dikonsumsi demi menjaga kenetralan pH tubuh dan menjaga kondisi tubuh agar tetap sehat dan bugar, karena AGUARIA mengandung pH netral yaitu 6,0-8,5</span></p>\r\n'),
(3, 'Kadar Oksigen Alami yang Tinggi', '<p><span style=\"font-size:18px\">Oksigen merupakan salah satu komponen penting yang dibutuhkan oleh tubuh yang bisa diperoleh dengan cara menghirup dari udara sekitar. AGUARIA dapat memberikan banyak manfaat yang dibutuhkan untuk menjaga keseimbangan cairan dalam tubuh, diantaranya melindungi fungsi ginjal, melancarkan pencernaan dan meningkatkan energi.</span></p>\r\n'),
(4, 'Sumber Mata Air Pegunungan Dengan Kandungan Mineral Terbaik', '<p><span style=\"font-size:18px\">Penyaringan yang terjadi secara alami didalam perut bumi ketika air menuju ke permukaan menghasilkan air dengan kandungan mineral terbaik, bersih dan menyehatkan.</span></p>\r\n'),
(5, 'Proses Produksi yang Higienis', '<p><span style=\"font-size:18px\">AGUARIA diproduksi langsung dari sumbernya dengan menerapkan prosedur sesuai Standar Nasional Indonesia(SNI), Good Manufacturing Practice(GMP) dan Bersertifikat Halal pada fasilitas produksi dengan sistem teknologi otomatis terkini.</span></p>\r\n'),
(6, 'Kemasan Dapat Didaur Ulang', '<p><span style=\"font-size:18px\">Kemasan AGUARIA terbuat dari bahan yang aman digunakan untuk makanan dan minuman serta dapat didaur ulang. Dengan demikian, AGUARIA ikut serta didalam menjaga kelestarian lingkungan.</span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` int(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `nama`, `email`, `telepon`, `subject`, `pesan`, `date`) VALUES
(1, 'ad', 'ada@d.com', 12312, '12312', '123', '2022-02-11 20:10:16'),
(2, 'e3', 'zxc@gmail.com', 2334, '3424ewr', '24wer', '2022-03-04 09:20:42'),
(3, 'Shila Mukti Marhaeni', 'shilamuktim@gmail.com', 12312, 'Kritik', 'ini adalah kritik untuk tes saja, halo selamst siang semuanya mark kota kritik isi eebsite yang bagus ini hehe huehue halo loha halo ikan emas jstoh ke laut ikan lumba lumba masuk aquarium aduh awaw heem lorep imsum blaaa blaaa', '2022-03-05 01:35:31'),
(4, 'asas', 'kkrismantari@gmail.com', 1111, 'wqw', 'qwq', '2022-03-07 18:39:12');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `caption_galeri` varchar(255) NOT NULL,
  `sampul_galeri` varchar(255) NOT NULL,
  `tgl_dibuat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `caption_galeri`, `sampul_galeri`, `tgl_dibuat`) VALUES
(7, 'Penanaman Bibit Pohon dan Konservasi Sumber Mata Air Desa Keji', 'Konservasi_Sumber_Mata_Air_Desa_Keji1.JPG', '2022-03-10 00:53:38'),
(8, 'Factory Visit SMK Nusa Putera', 'Factory_Visit_Dari_SMK_Nusput.jpg', '2022-03-09 04:47:03'),
(9, 'Bantuan Bakti Sosial di Beberapa Sektor', 'Penyerahan_Bantuan_Beras.JPG', '2022-03-09 04:47:29');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_foto`
--

CREATE TABLE `galeri_foto` (
  `id_foto` int(11) NOT NULL,
  `id_galeri` int(11) NOT NULL,
  `keterangan_foto` text NOT NULL,
  `foto_galeri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri_foto`
--

INSERT INTO `galeri_foto` (`id_foto`, `id_galeri`, `keterangan_foto`, `foto_galeri`) VALUES
(0, 9, 'fafafa', 'Dr__Strange.jpg'),
(28, 7, '', 'Penyerahan_dan_Penanaman_Bibit_di_lereng_Gunung_Ungaran1.jpg'),
(29, 7, '', 'Konservasi_Sumber_Mata_Air_Desa_Keji11.JPG'),
(30, 7, '', 'Penanaman_di_area_sumber_mata_air1.jpg'),
(31, 7, '', 'Konservasi_Sumber_Mata_Air_Desa_Keji2.JPG'),
(32, 8, '', 'Factory_Visit_SMK_Nusput1.jpg'),
(33, 9, 'verervergrvgereeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', 'Bantua_Kegiatan_Baksos_SMA_Bina_Amal1.jpg'),
(34, 9, '', 'Penyerahan_Bantuan_Bakti_Sosial1.jpg'),
(35, 9, '', 'Penyaluran_Air_Bersih_Desa_Keji1.jpg'),
(36, 9, '', 'Penyerahan_Bantuan_Banjir_Grobogan1.jpg'),
(37, 9, '', 'Penyerahan_Bantuan_Beras_Kepada_Karyawan1.jpeg'),
(38, 9, '', 'Penyerahan_Bantuan_Beras1.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `alamat_perusahaan` varchar(255) NOT NULL,
  `no_telepon_perusahaan` varchar(15) NOT NULL,
  `email_perusahaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `nama_perusahaan`, `alamat_perusahaan`, `no_telepon_perusahaan`, `email_perusahaan`) VALUES
(1, 'PT. Tirta Empat Satu Berkah', 'Jl. Bimasakti Raya RT. 06 RW.01, Kel. Keji, Kec. Ungaran Barat, Kab. Semarang', '(024) 7691 4673', 'tirta41berkah@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `karir`
--

CREATE TABLE `karir` (
  `id_karir` int(11) NOT NULL,
  `judul_karir` varchar(255) NOT NULL,
  `deskripsi_karir` text NOT NULL,
  `kriteria_karir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karir`
--

INSERT INTO `karir` (`id_karir`, `judul_karir`, `deskripsi_karir`, `kriteria_karir`) VALUES
(7, 'Admin Operasional', '<p><u>Deskripsi Pekerjaan</u> :</p>\r\n\r\n<ol>\r\n	<li>Melakukan seluruh tugas administrasi.</li>\r\n	<li>Bertanggung jawab dalam melakukan pendataan secara berkala.</li>\r\n	<li>Bertanggung jawab atas tugas operasional harian perusahaan.</li>\r\n</ol>\r\n', '<p><u>Persyaratan</u> :</p>\r\n\r\n<ol>\r\n	<li>Diutamakan memiliki pengalaman kerja dibidang yang sama minimal satu (1) tahun.</li>\r\n	<li>Fasih menggunakan komputer, internet dan juga menguasai Ms.Office.</li>\r\n	<li>Memiliki keahlian dalam berkomunikasi dengan baik.</li>\r\n	<li>Jujur dan bertanggung jawab</li>\r\n</ol>\r\n'),
(8, 'Sales Officer', '<p><u>Deskripsi</u> :</p>\r\n\r\n<ol>\r\n	<li>Membuat simulasi kredit dan melakukan negosiasi.</li>\r\n	<li>Menjalankan aktivitas penunjang penjuualan untuk meningkatkan pencapaian sales.</li>\r\n	<li>Memberikan pelayanan kepada pelanggan sesuai dengan standar service perusahaan</li>\r\n</ol>\r\n', '<p><u>Kualifikasi</u> :</p>\r\n\r\n<ol>\r\n	<li>Minimal Pendidikan D3, semua jurusan.</li>\r\n	<li>Pengalaman minimal 1 Tahun.</li>\r\n	<li>IPK Minimal 3.00.</li>\r\n	<li>Memiliki SIM C/A.</li>\r\n	<li>Penempatan di Semarang.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `id_organisasi` int(11) NOT NULL,
  `judul_organisasi` varchar(255) NOT NULL,
  `isi_organisasi` text NOT NULL,
  `foto_organisasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id_organisasi`, `judul_organisasi`, `isi_organisasi`, `foto_organisasi`) VALUES
(1, 'Organisasi Aguaria', '<p>Lalalldskddja</p>\r\n', 'aspadin_logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `foto_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `keterangan`, `foto_produk`) VALUES
(6, 'Aguaria 120ml', '<p>Air minum dalam kemasan gelas dari Aguaria yang memiliki ukuran paling mungil diantara yang lainnya.&nbsp;</p>\r\n', '120ml1.png'),
(7, 'Aguaria 220ml', '<p>Air minum dalam kemasan gelas dari Aguaria yang praktis untuk digenggam.</p>\r\n', '220ml1.png'),
(8, 'Aguaria 330ml', '<p>Air minum dalam kemasan botol dari Aguaria dengan ukuran mini dan tidak memakan tempat ketika dibawa kemanapun.&nbsp;</p>\r\n', '330ml1.png'),
(9, 'Aguaria 600ml', '<p>Air minum dalam kemasan botol dari Aguaria yang berukuran sedang, namun kesegarannya melimpah.</p>\r\n', '600ml1.png'),
(10, 'Aguaria 1500ml', '<p>Air minum dalam kemasan botol dari Aguaria yang memiliki ukuran besar, nyaman untuk dibawa ketika bepergian jauh.</p>\r\n', '1500ml1.png'),
(11, 'Aguaria Galon 19Liter', '<p>Air minum dalam kemasan galon dari Aguaria yang setia menemani kebutuhan air di rumah anda.</p>\r\n', 'Galon1.png'),
(12, 'Aguaria Galon 19Liter (Demineral)', '<p>Air minum dalam kemasan galon dari Aguaria dengan desain galon yang trendi, selalu menyegarkan keluarga anda.</p>\r\n', 'Galon_Demineral1.png'),
(14, 'Aguaria 500ml (Demineral)', '<p>Air minum dalam kemasan botol dari Aguaria yang menerapkan proses Reverse Osmosis didalam proses produksinya.</p>\r\n', 'Demin1.png');

-- --------------------------------------------------------

--
-- Table structure for table `proses`
--

CREATE TABLE `proses` (
  `id_proses` int(11) NOT NULL,
  `nama_proses` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `foto_proses` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proses`
--

INSERT INTO `proses` (`id_proses`, `nama_proses`, `keterangan`, `foto_proses`) VALUES
(1, 'Sumber Mata Air ', '<p>Aguaria berasal dari sumber mata air pegunungan terpilih.</p>\r\n', 'Sumber.jpg'),
(2, 'Proses Penampungan Sementara', '<p>Sebelum di lakukannya rangkaian proses pengolahan mata iar, yang pertama kali di lakukan adalah menampung air sementara pada Tangki Spiral.</p>\r\n', 'Tangki_Spiral.jpg'),
(3, 'Proses Filtrasi dengan Filter Bag', '<p>Proses ini berguna untuk melakukan penyaringan pada padatan yang berukuran besar.</p>\r\n', 'Filter_Bag.jpg'),
(4, 'Proses Filtrasi dengan Carbon Filter', '<p>Di dalam Carbon Filter terdapat 3 komponen penting dalam proses filtrasi, di antaranya ialah Strainer, Karbon Aktif dan Sand.&nbsp;<span style=\"color:#2980b9\">Strainer</span> berfungsi untuk menyating karbon yang berukuran besar. <span style=\"color:#2980b9\">Karbon Aktif</span> berfungsi untuk menyerap rasa, bau, warna dan menghilangkan klorin didalam air.&nbsp;Sedangkan <span style=\"color:#2980b9\">Sand</span> berguna untuk menahan Karbon Aktif agar tidak terbuang.</p>\r\n', 'Carbon_Filter.jpg'),
(6, 'Proses Reverse Osmosis (RO)', '<p>Proses ini hanya di lakukan pada produk Aguaria De Mineral. Berfungsi untuk melepaskan mineral sehingga di hasilkan air murni dengan nilai jumlah zat padat terlarut atau Total Dissolve Solid (TDS) kurang dari 10ppm.</p>\r\n', 'RO1.jpg'),
(7, 'Proses Filtrasi dengan Filter Micron', '<p>Filter Micron merupakan tabung yang berukuran 30 inch dan 20 inch dengan masing-masing memiliki 5 filter catridge didalamnya. Berguna untuk proses penyaringan.</p>\r\n', 'Filter_Mikron.jpg'),
(8, 'Proses Ozonisasi', '<p>Merupakan prosesn desinfeksi atau sterilisasi air minum. Teknologi ini sangat efektif untuk menghancurkan kuman, bakter dan zat organik lainnya. Pada proses ini juga berguna untuk menambahkan kadar oksigen agar air lebih segar dan menyehatkan.</p>\r\n', '2022-02-26_10_15_24_1.jpg'),
(9, 'Penampungan Air Terakhir', '<p>Proses ini berada pada Tangki Reaksi yang berguna untuk menampung air yang siap untuk di konsumsi sebelum di masukan ke dalam kemasan.</p>\r\n', 'Tangki_Grafity1.jpg'),
(10, 'Proses Filling Cup & Bottle', '<p>Di tahap ini merupakan pengisian air minum ke dalam kemasan cup (gelas) dan bottle (botol).</p>\r\n', 'Filling_Smallpack1.png'),
(11, 'Proses Coding', '<p>Merupakan tahap di mana pemberian kode produksi ke produk jadi.</p>\r\n', 'Coding.png');

-- --------------------------------------------------------

--
-- Table structure for table `proses_g`
--

CREATE TABLE `proses_g` (
  `id_prosesg` int(11) NOT NULL,
  `nama_prosesg` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `foto_prosesg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proses_g`
--

INSERT INTO `proses_g` (`id_prosesg`, `nama_prosesg`, `keterangan`, `foto_prosesg`) VALUES
(3, 'Sumber Mata Air', '<p>Aguaria berasal dari sumber mata air pegunungan terpilih.</p>\r\n', 'Sumber.jpg'),
(4, 'Proses Filtrasi dengan Unit VAF', '<p>Unit VAF (Valve and Filter) merupakan jenis penyaringan permanen yang berfungsi sebagai penyaring tahap awal.</p>\r\n', 'Valve1.jpg'),
(5, 'Proses Ultra Violet', '<p>Merupakan proses desinfeksi atau sterilisasi air minum. Ultra Violet berfungsi untuk membunuh bakteri, virus dan bakteri.</p>\r\n', 'UV.png'),
(6, 'Proses Filtrasi dengan Ultra Filtrasi', '<p>Proses ini berfungsi untuk menyaring microba dengan skala yang kecil. Sehingga akan dihasilkan air yang berkualitas.&nbsp;</p>\r\n', '2022-02-26_10_15_50_1.jpg'),
(7, 'Proses Mixing', '<p>Merupakan proses di mana terjadi pencampuran air minum dengan ozon. Sehingga air terasa lebih segar dan menyehatkan.</p>\r\n', '2022-02-26_10_21_49_1.jpg'),
(8, 'Penampungan Air Terakhir', '<p>Proses ini berada pada Tangki Buffer yang berguna untuk menampung air yang siap untuk di konsumsi sebelum di masukan ke dalam galon.</p>\r\n', 'Buffer_Tank.jpg'),
(9, 'Proses Pembersihan Galon Kosong', '<p>Sebelum di lakukan proses filling, galon di bersihkan dengan beberapa tahapan yaitu External Brusher, External Rinser, Prewash, Washer. Tahap External Brusher berguna untuk pembersihan kotoran pada galon bagian luar. Tahap External Rinser berguna untuk penghilangan sisa koding pada galon. Prewash berguna untuk memberikan bagian dalam dan luar dengan menggunakan desinfektan. Sedangkan tahap Washer berfungsi untuk pembersihan galon bagian dalam untuk memastikan bagian dalam galon bersih.</p>\r\n', 'Washer_Galon.png'),
(10, 'Proses Filling Galon', '<p>Di tahap ini merupakan pengisian air minum ke dalam galon.</p>\r\n', 'Filling_Galon.png');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id_sejarah` int(11) NOT NULL,
  `judul_sejarah` varchar(255) NOT NULL,
  `isi_sejarah` text NOT NULL,
  `foto_sejarah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id_sejarah`, `judul_sejarah`, `isi_sejarah`, `foto_sejarah`) VALUES
(1, 'Sejarah Singkat', '<p style=\"text-align:justify\"><span style=\"font-size:16px\">AGUARIA pertama kali didirikan dengan menggunakan merk dagang AQUARIA pada tanggal 25 April 1984 di Semarang. Kemudian pada tanggal 1993 AQUARIA berganti menjadi AGUARIA dan digunakan hingga kini. PT. Indotirta Jaya Abadi yang saat itu masih merupakan pemilik pertama merasakan pasang surut dalam segala pelaksanaan pengoperasian produksi AGUARIA. Hingga pada puncaknya pada tanggal 25 Januari 2018, PT. Indotirta Jaya Abadi dinyatakan pailit berdasarkan putusan Pengadilan Niaga pada Pengadilan Negeri Semarang. Sejak saat itu, segala jenis proses produksi dan distribusi dijalankan oleh beberapa pihak rekan sembari menunggu proses lelang selesai. Dan di bulan Februari 2021, akhirnya AGUARIA menemui titik terang. Proses lelang berhasil dimenangkan oleh PT. Tirta Empat Satu Berkah. Dengan kemenangan PT. Tirta Empat Satu Berkah, maka segala proses produksi dan distribusi produk AGUARIA menjadi tanggung jawab PT.Tirta Empat Satu Berkah.</span></p>\r\n', 'Produk_semua.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `nama_slider` varchar(50) NOT NULL,
  `foto_slider` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `nama_slider`, `foto_slider`) VALUES
(2, 'Foto1', 'Header-1edit.png'),
(3, 'Foto 2', 'HEADER-CREATE1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(11) NOT NULL,
  `nama_tentang` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `foto_tentang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `nama_tentang`, `keterangan`, `foto_tentang`) VALUES
(1, 'Tentang Aguaria', '<p style=\"text-align:center\">Aguaria merupakan Air Mineral Dalam Kemasan yang berasal dari sumber air mata terbaik, serta diproses menggunakan fasilitas industri dengan mengikuti prosedur yang sesuai Standart Nasional Indonesia(SNI), Good Manufacturing Practice(GMP), Serta bersertifikat HALAL. Didalam proses produksinya pun menerapkan sistem CPPOB (Cara Produksi Pangan Olahan yang Baik).</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Emblem1.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `as_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `as_id`) VALUES
(1, 'Shila', 'admin', 'shilamuktim@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, '123', '123', 'Lala@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(3, 'qwe', 'qwe', 'qwe@gm.com', '76d80224611fc919a5d54f0ff9fba446', 2),
(4, 'ewq', 'ewq', 'ewq@gma.com', 'e7f5bfd77f339f3adf83464ff16e22fe', 2),
(6, 'zxczxc', 'zxczxc', 'zxc@gmail.com', '64999cf5d9bdc37b43094f13292b9480', 2),
(7, 'qaz', 'qaz', 'Lala@gmail.com', '09cd426c5c8c1d706d88157c4f4061ff', 2),
(8, 'eee', 'eee', 'ewq@gma.com', 'd2f2297d6e829cd3493aa7de4416a18f', 2),
(9, 'aaaa', 'aaa', 'kkrismantari@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', 1),
(10, 'are', 'req', 'ateng@gmail.com', 'ab4d0a658aef644a039b90c2067b45c0', 1),
(11, 'falah', 'tqer', 'req@gmail.com', '6bdcbb606161c47eab0615ff6e13313f', 1),
(12, 'qwrqwr', 'qwreqwe', 'rakbuku97@gmail.com', 'efe6398127928f1b2e9ef3207fb82663', 2);

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id_visimisi` int(11) NOT NULL,
  `judul_visi` varchar(255) NOT NULL,
  `isi_visi` text NOT NULL,
  `judul_misi` varchar(255) NOT NULL,
  `isi_misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id_visimisi`, `judul_visi`, `isi_visi`, `judul_misi`, `isi_misi`) VALUES
(1, 'Visi', '<p style=\"text-align:center\"><span style=\"font-size:16px\">Menjadi produsen produk yang baik bagi konsumen dan dapat terus bertumbuh secara bersinambungan serta menjadi pilar masa depan yang sehat.</span></p>\r\n', 'Misi', '<p><span style=\"font-size:16px\">1. Memberikan pelayanan terbaik kepada semua konsumen,</span></p>\r\n\r\n<p><span style=\"font-size:16px\">2. Menghasilkan produk sesuai kualitas yang ditetapkan,</span></p>\r\n\r\n<p><span style=\"font-size:16px\">3. Melakukan inovasi produk sesuai kebutuhan konsumen,</span></p>\r\n\r\n<p><span style=\"font-size:16px\">4. Meningkatkan kompetensi dari sumber daya manusa yang dimiliki secara berkelanjutan,</span></p>\r\n\r\n<p><span style=\"font-size:16px\">5. Menjaga dan melestarikan lingkungan.</span></p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `galeri_foto`
--
ALTER TABLE `galeri_foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_galeri` (`id_galeri`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `karir`
--
ALTER TABLE `karir`
  ADD PRIMARY KEY (`id_karir`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id_organisasi`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `proses`
--
ALTER TABLE `proses`
  ADD PRIMARY KEY (`id_proses`);

--
-- Indexes for table `proses_g`
--
ALTER TABLE `proses_g`
  ADD PRIMARY KEY (`id_prosesg`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
