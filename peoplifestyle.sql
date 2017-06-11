-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2016 at 07:31 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `peoplifestyle`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `id_posting` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `komentar` text NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_posting`, `username`, `tgl`, `komentar`) VALUES
(3, 9, 'megamendung', '2014-12-15 03:14:39', 'Toraja dimana sih? gatau nih'),
(4, 9, 'megamendung', '2014-12-15 03:32:18', 'toraja dimana sih? mohon pencerahannya'),
(5, 9, 'anedaiba', '2014-12-15 06:26:51', 'wah bagus'),
(6, 9, 'anedaiba', '2014-12-15 06:35:49', 'Toraja di deket Sulawasi @megamendung'),
(7, 9, 'yuliza17', '2014-12-15 06:40:09', '@megamendung liat aja Google, @anedaiba iya bener tuh Toraja deket Sulawasi. Terima kasih sudah berkunjung :) '),
(8, 9, 'hanum15', '2014-12-15 06:55:01', 'Waduh uwe jg gatau indang Toraja dimandang :@ padahal yg bikin nih artikel gue loh hehe'),
(10, 5, 'ajenglay', '2014-12-17 07:34:58', 'sangat mengispirasi gan. nitip lapak buat yang lagi nyari jersey couple jangan lupa mampir ke www.ajenkjersindo.com ;))'),
(14, 9, 'rianjombs', '2014-12-17 08:09:10', 'kece badai banget postingannyaaaaaaaaaaaaaaaa!!!!'),
(15, 9, 'Laela ', '2014-12-17 14:55:43', 'Kasih tiket gratis dong!!!!!'),
(16, 9, 'megamendung', '2015-05-16 16:59:38', 'oh toraja di sulawasi toh hehe maklum aku baru jadi WNI :)');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(5) NOT NULL AUTO_INCREMENT,
  `tipe` char(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban` varchar(50) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `tipe`, `date`, `username`, `email`, `password`, `pertanyaan`, `jawaban`) VALUES
(1, '1', '2014-12-17 07:50:29', 'yuliza17', 'yulizaa.rahmi@gmail.com', '17071995', '1', 'Nicholas Flamel'),
(2, '1', '2014-12-09 06:40:34', 'hanum15', 'hanum.aulia@gmail.com', '15071995', '1', 'Kamasutra'),
(16, '2', '2014-12-08 17:27:18', 'ajenglay', 'dini.ajeng@ymail.com', 'lopnadir', '2', 'si mpus'),
(17, '2', '2014-12-08 17:28:14', 'nisanasi', 'nisa.nasution@rocketmail.com', 'nisaajah', '2', 'tenyom'),
(18, '2', '2014-12-08 17:29:19', 'megamendung', 'mega.awan_mendung@live.com', 'gledek', '2', 'gukguk'),
(19, '2', '2014-12-08 17:30:20', 'dyahggirl', 'dyahtri@live.com', 'dyahaja', '2', 'yuliza si pintar'),
(20, '2', '2014-12-08 17:33:42', 'anedaiba', 'biadena@gmail.com', 'loplomi', '2', 'siapa ya?'),
(21, '2', '2014-12-08 17:34:13', 'abi', 'abi@gmail.com', 'abiaja', '2', 'yuliza si pintar'),
(22, '2', '2014-12-08 17:34:41', 'indah', 'indah@gmail.com', 'indahnus', '2', 'yuliza si pintar'),
(23, '2', '2014-12-08 17:36:39', 'jangkar', 'jangkar@gmail.com', 'janglay', '2', 'yuliza si pintar'),
(24, '2', '2014-12-09 06:41:35', 'whoisthis', 'whoareu@rocketmail.com', 'wowah', '3', 'tidak punya dosen'),
(25, '2', '2014-12-15 14:05:01', 'jeane', 'jeane@gmail.com', 'nevianti', '4', 'nonton'),
(26, '2', '2014-12-17 07:39:26', 'FiqiFat', 'fififiq@rocketmail.com', 'pikih', '1', 'supernova'),
(27, '2', '2014-12-17 07:41:00', 'henkering', 'hendrycleaning@yahoo.com', 'bersihbe', '2', 'amir'),
(28, '2', '2014-12-17 07:42:17', 'desoyoyjkt48', 'oyoyoy@live.com', 'alalong', '3', 'gatau'),
(29, '2', '2014-12-17 07:43:34', 'meipreneur', 'meilia@gmail.com', 'sukses', '3', 'Octaviano Pratama'),
(30, '2', '2014-12-17 08:07:25', 'rianjombs', 'riian@gmail.com', 'rianlay', '1', '50sog'),
(31, '2', '2014-12-17 14:52:17', 'Laela ', 'laelarosalia@gmail.com', 'lala', '1', 'aa'),
(32, '1', '1996-09-06 17:00:00', 'alif123', 'alif@gmail.com', '12345', 'siapa saya?', 'saya adalah alip'),
(33, '1', '1996-12-06 17:00:00', 'nandita14', 'nandit@gmail.com', '54321', 'siapa kamu?', 'kamu adalah kamu');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE IF NOT EXISTS `posting` (
  `id_posting` int(6) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `artikel` longtext NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id_posting`),
  KEY `date` (`date`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id_posting`, `judul`, `kriteria`, `artikel`, `gambar`, `date`) VALUES
(1, 'Siap-Siap, Awal 2015 Michael Buble Konser di Indonesia!', 'Info Terkini', 'Kapanlagi.com - Penyanyi tampan Michael Buble siap menggelar konser di Indonesia untuk pertama kalinya. Bertajuk Michael Buble Live In Jakarta 2015, konser tersebut akan berlangsung pada tanggal 29 Januari 2015 di Indonesia Convention Exhibition, BSD City, Tangerang Selatan.\r\n\r\nDyandra Entertainment selaku promotor mengaku senang saat pelantun tembang Home ini mengonfirmasi kehadirannya. Pasalnya sudah sejak lama mereka mengejar Michael agar mau menyapa para fans di Indonesia.\r\n\r\n"Kita sudah lama mengincar dia. Namun baru tembus sekitar awal tahun dan pada Mei kemarin pihak manajemen Michael melakukan konfirmasi. Prosesnya panjang sekali," kata Roderick Tjandra dari Dyandra Entertainment pada jumpa pers di BlitzMegaplex, Jakarta, Rabu (26/11).\r\n\r\nMengingat lokasi konser berada di venue baru dan cukup jauh dari Jakarta, pihak promotor tidak takut penonton bakal sepi. Terbukti sejak penjualan tiket dibuka online pada 7 November kemarin, sudah terjual sebanyak 4000 dari 9000 tiket yang disediakan.\r\n\r\nPromotor ini mengungkapkan, kalau mereka optimis dengan antusiasme yang diberikan penonton atas konser mereka ini. "Kami tidak khawatir, karena para penggemar pasti mengejar Michael," sambungnya.\r\n\r\nSementara 5000 tiket tersisa masih bisa dipesan mulai Kamis (27/11) secara online maupun offline. Pre-order tersebut dapat kalian lakukan melalui Kiostix yang mana proses pembayarannya menggunakan kartu kredit dan debit BRI.\r\nFrederick menambahkan agar para penonton yang ingin mendapatkan tiket tersebut diharap bergegas, siapa tahu layanannya ditutup sewaktu-waktu. \r\n\r\n"Pembelian ditutupnya belum tahu, yang jelas cepat-cepatan saja karena dalam berapa hari saja kami yakin tiket sudah akan sold out," tutupnya.', '25.jpg', '2014-12-04 21:08:38'),
(4, '3 Cara Memotivasi Diri Sendiri Agar Selalu Semangat', 'Tips & Trik', 'Vemale.com - Meski kelihatan prima dan senang di luar, setiap orang pasti punya problem sendiri dalam kepala mereka. Bagaimana ya supaya bisa menjalani semua itu dengan tetap bergairah?\r\n \r\nYang pasti kita memang harus menjadi sosok yang selalu semangat. Ada kalanya kita kerap kali murung karena dirundung problem dari berbagai arah yang bertubi-ttubi. mungkin ini saatnya untuk... menyemangati diri Anda sendiri. \r\n\r\nâ€¢ Beri Reward Pada Usaha Anda\r\nSesekali traktir diri Anda perawatan pijat di spa, makanan favorit atau benda yang sangat Anda inginkan. Hiburan-hiburan kecil seperti ini bisa membuat Anda selalu semangat. Kado tak harus datang dari orang lain atau menunggu ulang tahun tiba kan? \r\nâ€¢  Tantang Diri Sendiri\r\nJangan kehilangan semangat untuk menantang diri Anda sendiri. Cara ini bisa membuat Anda selalu semangat menghadapi langkah dan hari menuju goal yang Anda punya. Bersikaplah bahwa Anda termotivasi dan iyakan tantangan yang Anda terima. Kita tak pernah tahu kalau tak mencoba, Ladies.  \r\nâ€¢  Have Fun\r\nAgar semua aspek hidup Anda seimbang, jangan lupa untuk bersenang-senang. Bukan dengan menghamburkan uang saja, namun melakukan hal yang membuat Anda senang secara jasmani dan rohani. misalnya olahraga yoga, berbuat kebaikan, piknik, hangout dan sebagainya. Jangan lupa tertawa dan bercanda. Hal-hal tersebut bisa membuang kejenuhan Anda. \r\nDapatkan semangat Anda kembali dengan melakukan beberapa hal di atas. Keep spirited, Ladies. \r\n', '31.jpg', '2014-12-04 21:15:01'),
(5, '5 Hal Inspiratif Yang Dilakukan Oleh Wanita Sukses', 'Tips & Trik', 'Vemale.com - Wanita yang sukses adalah wanita yang bisa menjadi ibu dan istri. Lepas dari mereka berkarir atau tidak, karena setiap wanita punya pakemnya sendiri-sendiri. Jadi, apapun karir Anda, sekalipun Anda ibu rumah tangga, jangan berhenti bermimpi untuk sukses. \r\n\r\nDilansir dari Quint Careers, ada beberapa hal yang selalu dilakukan oleh wanita sukses. Baik mereka bekerja di kantor, di rumah atau sepenuhnya menjadi ibu rumah tangga. Ingin tahu juga? Pelajari jurus mereka di sini. \r\n\r\nâ€¢ Mengembangkan Diri Dan Skill\r\nTak pernah mati gaya dalam sehari, selalu ada yang bisa Anda lakukan dan hasilkan. Misalnya Anda punya keahlian menjahit. Selain mendalami, Anda juga mengembangkannya secara art dan komersil atau bisa juga mengikuti edukasi dan kursus tertentu. Belajar dari orang-orang yang ahli di bidangnya juga termasuk pengembangan diri. Tak peduli berapapun usia Anda, tak pernah terlambat untuk mengembangkan diri seperti ini. \r\nâ€¢  Networking Dan Komunikasi\r\nKemampuan berkomunikasi, bicara dan menjaga relasi dengan orang lain bisa menjadi salah satu cara untuk mengembangkan networking. Setelah Anda mendapatkannya, jangan lupa untuk mempertahankannya. Jangan berpikir untuk kepentingan Anda sendiri. Santai saja dan sesekali ajak ngobrol santai sambil minum teh atau merasakan eksperimen masakan yang Anda buat.  \r\nâ€¢ Terjun ke Lapangan \r\nSemakin banyak pengalaman akan semakin bagus manfaatnya bagi Anda. Oleh karena itu, singkirkan ketakutan Anda dan coba lebih banyak hal baru. Selain bisa menjadi inspirasi juga bisa membuat waktu Anda terasa lebih bermanfaat. Anda juga bisa makin mendalami bidang yang Anda tekuni sehingga bisa sharing pengalaman yang bermanfaat atau setidaknya, mengatasi masalah itu sendiri bila terjadi lagi. \r\nâ€¢  Menemukan Karakter\r\nTemukan karakter Anda. Kalau Anda terlalu banyak mendengar apa yang dikatakan orang lain, Anda akan sulit menemukan kesesuaian dengan diri sendiri. Percaya diri pada potensi dan pertimbangan yang Anda miliki. Lama-lama Anda akan menemukan karakter yang membuat kredibilitas Anda tertanam dengan baik di benak relasi yang mengenal Anda. \r\nâ€¢ Doa\r\nSalah satu rahasia yang sangat personal namun menjadi kunci kesuksesan adalah bagaimana kita mengelola hubungan secara vertikal dengan baik dan harmonis. Keseimbangan spiritual dan kehidupan nyata menjadi kunci sukses banyak orang. Dan hal ini tak terbantahkan diakui oleh banyak orang. \r\nSemua orang ingin sukses dengan jalan yang flawless. Sukses itu bisa didapat, namun lika-likunya akan membuat kesuksesan Anda terasa bermanfaat dan bernilai. Semoga sukses menjadi dan meraih apa yang Anda inginkan. \r\n', '32.jpg', '2014-12-04 21:16:51'),
(9, 'Jangan Mati Sebelum ke Toraja', 'Travelling', 'RANTEPAO, KOMPAS.com - Ucapan "Jangan mati sebelum ke Toraja" bukan basa-basi. Pasalnya Kabupaten Toraja Utara, Provinsi Sulawesi Selatan menyimpan keunikan budaya yang sukar dicari tandingannya di dunia. Inilah yang menyebabkan nama Toraja sangat dikenal di kalangan wisatawan mancanegara.\r\n\r\nMemasuki Kota Rantepao, ibu kota Kabupaten Toraja Utara, wisatawan akan diajak menyaksikan deretan rumah adat khas Toraja yang dihiasi susunan tanduk kerbau yang begitu memukau terutama bagi wisatawan yang baru pertama kali datang ke kota ini. Perjalanan yang dilakukan Kompas.com dalam kegiatan yang dinamakan Famtrip Destination Management Organization (DMO) Toraja bersama para biro perjalanan dari Bali, Yogyakarta dan Jakarta berlangsung Minggu (16/11/2014) sampai Rabu (19/11/2014).\r\n\r\nPerjalanan selama sekitar 8 jam dari Makassar, ibu kota Provinsi Sulawesi Selatan menuju Rantepao memang melelahkan. Syukurlah pemandangan pantai dan bukit yang menjulang tinggi di kiri-kanan jalan mampu membunuh rasa bosan tersebut. \r\n\r\nToraja menyimpan tradisi unik yang masih tetap terjaga dan diwariskan secara turun temurun. Upacara kematian dan penyimpanan jenazah di bukit-bukit sekitar desa selalu menarik perhatian wisman. Daya tarik Kabupaten Toraja Utara ini memang dimanfaatkan betul bagaimana menarik wisatawan dan sekaligus menyejahterakan masyarakat dari sektor pariwisata.\r\n\r\nWakil Bupati Toraja Utara Frederik Buntang Rombelayuk mengakui kabupaten ini tidak memiliki tambang dan laut. "Kami hanya memiliki alam dan budaya. Ini daya tarik kami. Gubernur Sulsel mengatakan: Jangan mati sebelum ke Toraja", kata Frederik di rumah dinasnya saat menerima rombongan Famtrip Destination Management Organization (DMO) Toraja, Senin (17/11/2014) malam.\r\n\r\nMenurut Frederik, jumlah penduduk Kabupaten Toraja Utara sebanyak 240.000 jiwa yang tersebar di 21 kecamatan dan 151 desa/kelurahan. Selain alam dan budaya yang mampu menyedot kunjungan wisatawan, Toraja Utara juga memiliki minuman khas yakni kopi toraja dan terong toraja.\r\n\r\n"Minum kopi di Toraja lebih nikmat," kata Frederik.\r\n\r\n"Apalagi meneguk terong toraja, sama nikmatnya," sambungnya.\r\n\r\nTerong toraja berwarna merah, hampir mirip dengan markisa. Dua produk ini menjadi andalan wisatawan untuk dibawa pulang sebagai oleh-oleh usai mengunjungi Toraja.\r\n\r\nFrederik menuturkan warga Toraja sangat terbuka terhadap kunjungan tamu atau wisatawan. Mereka tak segan-segan menyambut tamu dengan ramah. Tak tanggung-tanggung masyarakat secara terbuka menawarkan makanan bagi tamu yang lewat. "Bagi warga Toraja tamu membawa berkah," katanya seraya tersenyum.\r\n\r\nKetua Asita Bali, I Ketut Ardana, menyebut sosok Frederik cocok sebagai pelaku pariwisata karena pandai bertutur dan selalu tersenyum.\r\n\r\nBagi Ardana, Toraja merupakan salah satu destinasi wisata di Indonesia yang selalu menarik wisatawan tak ubahnya seperti keelokan Raja Ampat, Taman Nasional Komodo, Danau Toba, Derawan dan masih banyak lagi. "Nama Toraja sudah harum di mancanegara dan layak jual," katanya.\r\n\r\nArdana mengakui, pihaknya sering mengirimkan wisman dari Bali ke Toraja. Namun dia juga menyebutkan beberapa kendala dalam memajukan pariwisata Toraja. Masalah aksesibilitas menuju obyek wisata perlu ditangani Pemkab Toraja Utara. Berikutnya kejelasan atau petunjuk menuju obyek wisata. "Hal utama yang juga tak kalah penting adalah soal kebersihan. Sampah berserakan di mana-mana. Ini perlu jadi perhatian," tambah Ardana.', '39.jpg', '2014-12-08 00:32:37'),
(10, 'Chelsea Islan Bermain Film 3 Srikandi', 'Info Terkini', '<p><span style="font-family: Times New Roman; font-size: medium;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.</span></p>\r\n<p><span style="font-family: Times New Roman; font-size: medium;">Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.</span></p>\r\n<p><span style="font-family: Times New Roman; font-size: medium;">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.</span></p>\r\n<p><span style="font-family: Times New Roman; font-size: medium;">Aenean nec lorem. In porttitor. Donec laoreet nonummy augue.</span></p>\r\n<p><span style="font-family: Times New Roman; font-size: medium;">Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.</span></p>\r\n<p>&nbsp;</p>\r\n<p style="margin: 0in 0in 10pt;"><span style="font-family: Times New Roman; font-size: medium;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.</span></p>\r\n<p><span style="font-family: Times New Roman; font-size: medium;">Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.</span></p>\r\n<p><span style="font-family: Times New Roman; font-size: medium;">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.</span></p>\r\n<p><span style="font-family: Times New Roman; font-size: medium;">Aenean nec lorem. In porttitor. Donec laoreet nonummy augue.</span></p>\r\n<p><span style="font-family: Times New Roman; font-size: medium;">Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.</span></p>', '29.jpg', '2016-05-07 23:31:34');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
