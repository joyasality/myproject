-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2013 at 11:23 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `pakarcinta`
--

-- --------------------------------------------------------

--
-- Table structure for table `tanya`
--

CREATE TABLE IF NOT EXISTS `tanya` (
  `kd_tanya` char(3) NOT NULL,
  `tanya` varchar(100) NOT NULL,
  PRIMARY KEY  (`kd_tanya`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanya`
--

INSERT INTO `tanya` (`kd_tanya`, `tanya`) VALUES
('T01', 'pernah mengucapkan sayang'),
('T02', 'sms 3x sehari'),
('T03', 'pengertian'),
('T04', 'bersikap manis sama kamu'),
('T05', 'perhatian'),
('T06', 'manjain kamu'),
('T07', 'menelpon 2-3 jam perhari'),
('T08', 'suka menepati janji'),
('T09', 'setia atau tidak pernah melirik cewe/cowo lain '),
('T10', 'orang pertama yang mengucapkan happy birthday'),
('T11', 'pernah memberikan kejutan'),
('T12', 'pernah memberikan hadiah'),
('T13', 'pernah cemburu'),
('T14', 'mengajak kamu bertemu orang tuanya'),
('T15', 'mengajak kamu jalan-jalan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_zodiak`
--

CREATE TABLE IF NOT EXISTS `tbl_zodiak` (
  `kd_zodiak` char(3) NOT NULL,
  `nm_zodiak` varchar(50) NOT NULL,
  `tanggal` varchar(500) NOT NULL,
  `umum` varchar(500) character set utf8 NOT NULL,
  `rezeki` varchar(500) NOT NULL,
  `asmara` varchar(500) NOT NULL,
  `hr_baik` varchar(500) NOT NULL,
  `fisik` varchar(500) NOT NULL,
  `warna` varchar(500) NOT NULL,
  PRIMARY KEY  (`kd_zodiak`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_zodiak`
--

INSERT INTO `tbl_zodiak` (`kd_zodiak`, `nm_zodiak`, `tanggal`, `umum`, `rezeki`, `asmara`, `hr_baik`, `fisik`, `warna`) VALUES
('Z01', 'CAPRICORN', '21 Desember - 20 Januari', 'Dalam bekerja penting melibatkan emosi, bukan semata pikiran. Jika pikiran yang lebih mendominasi, Anda cepat bosan dan ingin buru-buru selesai. Nikmati saja tiap proses yang berlangsung. Selagi mengikuti prosedur yang ditentukan tak perlu khawatir. Segalanya akan baik-baik saja.', 'Cobalah tentukan tujuan lain yang tidak melibatkan uang. ', 'Pilih salah satu, sukses secara ekonomi atau dalam urusan cinta?', 'Jumat.', 'Sakit kepala sebelah kanan, terasa mengganggu.', 'Putih.'),
('Z02', 'AQUARIUS', '21 Januari - 18 Februari', 'Banyak masalah bukan alasan untuk tidak bersikap ramah kepada orang lain. Jangan berharap semua orang tahu, Anda sedang punya banyak masalah. Semua orang punya masalah, tapi mereka menyimpannya sendiri. ', 'Kalau sudah rezeki, tak akan ke mana.', 'Sekali waktu berkorban untuk pasangan itu baik.', 'Senin. ', 'Psikosomatik. ', 'Hijau muda, lebih segar dan bersemangat. '),
('Z03', 'PISCES', '19 Februari - 20 Maret', 'Hanya dibutuhkan konsistensi dalam melangkah. Setelah yakin bahwa itulah arah yang benar untuk mencapai tujuan, selebihnya tetap melangkah ke depan. Jangan  tergoda untuk berhenti atau berbelok ke arah lain. Tak ada jalan yang mulus. Tak ada jalan tanpa godaan. Justru godaan itu tanda, Anda belum sampai di tujuan. ', 'Buat daftar prioritas dalam berbelanja. ', 'Bahagia itu cepat menular.', 'Jumat.', 'Konsisten menjaga kesehatan. ', 'Biru muda.'),
('Z04', 'ARIES', '21 Maret - 20 April', 'Baik juga meluangkan waktu untuk bertemu dengan teman-teman lama. Selain bisa menyegarkan ingatan, juga menambah semangat dan bikin awet muda. Ingat jangan menanam rumput. Tapi tanamlah padi, nanti rumput akan ikut tumbuh. Kejar tujuan yang lebih mulia, harta akan datang dengan sendirinya. ', 'Target tercapai setelah berjuang keras.', 'Sudah lama tidak berdialog dengan perasaan. ', 'Minggu, kumpul dengan keluarga.', 'Jangan begadang. Paru-paru Anda bisa kambuh lagi. ', 'Biru.  '),
('Z05', 'TAURUS', '21 April - 20 Mei', 'Tuhan lebih tahu apa yang terbaik. Jadi tak usah memaksakan kehendak. Renungkan peristiwa yang terjadi belakangan ini. Anda ingin apa, tapi dapatnya apa. Syukuri saja, memang Anda lebih tepat berbisnis daripada bekerja kantoran. Sementara  di luar sana banyak orang kantoran yang ingin berbinis. ', 'Mengalir deras. Ada rezeki lebih, sehingga bisa pergi ke luar negeri.', 'Saat yang tepat untuk merayakan kebersamaan. ', 'Minggu, istirahat dari kesibukan yang memberatkan. ', 'Stabil, kondisi masih sebaik yang kemarin. ', 'Merah marun.  '),
('Z06', 'GEMINI ', '21 Mei - 20 Juni', 'Segala sesuatu ada kelasnya. Ada tingkatan-tingkatannya. Tapi tingkatan-tingkatan itu sebaiknya bukan diukur dengan materi. Ada nilai-nilai luhur yang tak bisa diukur dengan uang. Di dunia ini masih ada ketulusan, kejujuran, dan kegigihan. Ada juga pihak-pihak yang berbuat untuk kemaslahatan. ', 'Ada pasar, berarti harus ada suplai biar terjadi transaksi. Itulah cara rezeki bekerja. ', 'Deketin doi biar jadi lengket lagi.', 'Jumat. ', 'Sehat karena tetap menjaga makanan. Utamanya kurangi makanan yang mengandung gula.', 'Putih.'),
('Z07', 'CANCER', '21 Juni - 20 Juli', 'Hati-hati dalam membelanjakan uang. Jangan karena tergiur keinginan, tak memperhatikan hal-hal lain yang kemudian bisa menjadi masalah. Keputusan Anda untuk investasi di properti sungguh langkah yang tepat. Tapi surat-surat mesti jelas. Lebih penting lagi teliti pengembangnya, jelas atau tidak. Hati-hati, di kantor ada yang iri dengan Anda. ', 'Mengalir dari dua sumber.', 'Cinta juga kadang butuh spontanitas.', 'Senin.', 'Terlalu capek bekerja. ', 'Cokelat muda.'),
('Z08', 'LEO', '21 Juli - 20 Agustus', 'Karena satu dan lain hal, program pekan ini tidak berjalan dengan baik. Tak perlu khawatir, masih bisa diselamatkan. Paling tidak Anda masih bisa melakukan perjalanan walaupun tak seideal yang diharapkan. Artinya ada beberapa tujuan yang harus dibatalkan. ', 'Tabungan membengkak. ', 'Tempat-tempat indah bisa menumbuhkan rasa cinta. ', 'Selasa, bisa mengutarakan semua yang jadi unek-unek.', 'Badan terasa berat.', 'Merah.   '),
('Z09', 'VIRGO', '21 Agustus - 20 September', 'Masalah muncul justru di detik-detik terakhir, saat pekerjaan hampir rampung. Tak ada gading yang tak retak. Tak perlu menyesali. Paling tidak Anda sudah melakukan dan mempersiapkan sebaik mungkin. Hasil akhir, tetap Tuhan yang menentukan. ', 'Segala sesuatu harus diperhitungkan agar tidak kebablasan. ', 'Memang masih percaya pada cinta?', 'Rabu.', 'Tenggorokan sakit lagi. ', 'Putih.'),
('Z10', 'LIBRA', '21 September - 20 Oktober', 'Kadang perlu juga bersikap tegas dan kaku. Jika terus berkompromi, ke depannya Anda yang akan merasa berat sendiri. Tapi tentu saja mesti dilihat kasus per kasus. Pasangan marah kepada Anda karena dianggap kurang maksimal dalam mengatasi masalah. Sementara Anda nyaris kehabisan energi, karena pekerjaan yang terlalu panjang.', 'Menikmati berkah dari Tuhan.', 'Tiap hari bertemu, jadi kehilangan misteri rindu.', 'Kamis. ', 'Capek fisik, tapi pikiran sehat. ', 'Hitam.'),
('Z11', 'SCORPIO ', '21 Oktober - 20 November', 'Nikmati saja perhatian tulusnya. Dalam waktu dekat Anda akan bertemu dengan seseorang. Tak harus ada rencana-rencana besar. Buat rencana kecil pun tak mengapa. Yang penting bisa dilakukan berdua dan Anda bisa bercerita apa saja.', 'Tak akan lari gunung dikejar. ', 'Yang dibutuhkan, seorang teman yang mau mendengar.', 'Minggu, bicara penting dengan dia.', 'Berat badan menurun drastis. ', 'Abu-abu.'),
('Z12', 'SAGITARIUS	', '21 November - 20 Desember', 'Kesabaran selalu memberi hadiah lebih dari yang diharapkan. Karena Anda sabar dan tak terburu nafsu, Anda bisa memetik hasil yang maksimal. Malah melampaui dari yang diharapkan. ', 'Jalan-jalan ke luar kota bersama keluarga.', 'Bukan saat yang tepat bicara cinta.', 'Minggu, recharge energi. ', 'Makan tak teratur membuat penyakit mudah datang.', 'Merah.');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_no`
--

CREATE TABLE IF NOT EXISTS `tmp_no` (
  `noip` varchar(60) NOT NULL,
  `kd_tanya` char(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_no`
--


-- --------------------------------------------------------

--
-- Table structure for table `tmp_pasien`
--

CREATE TABLE IF NOT EXISTS `tmp_pasien` (
  `nama_1` varchar(60) NOT NULL,
  `tgl_1` date NOT NULL,
  `nama_2` varchar(60) NOT NULL,
  `tgl_2` date NOT NULL,
  `noip` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_pasien`
--

INSERT INTO `tmp_pasien` (`nama_1`, `tgl_1`, `nama_2`, `tgl_2`, `noip`) VALUES
('dfdf', '1980-01-01', 'asas', '1980-01-01', '127.0.0.1'),
('Iman firmansyah', '1996-05-23', 'Risma mahmudah', '1996-05-23', '192.168.0.8'),
('angga firmansyah', '1997-01-09', 'resa purnama sari', '1996-09-04', '192.168.0.20');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_yes`
--

CREATE TABLE IF NOT EXISTS `tmp_yes` (
  `noip` varchar(60) NOT NULL,
  `kd_tanya` char(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_yes`
--

