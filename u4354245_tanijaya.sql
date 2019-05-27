-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 30, 2019 at 06:39 AM
-- Server version: 10.2.23-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u4354245_tanijaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `foto`) VALUES
(1, 'buah', 'buah-buahan.png'),
(2, 'rimpang', 'rimpang.png'),
(3, 'sayur', '50f8a-ce22f-sayur.jpeg'),
(4, 'pangan', 'tanaman-pangan.png'),
(5, 'umbi', 'umbi-umbian.png'),
(7, 'Kacang', '0f2a1-kacang-hijau.png');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(18, '118.97.16.154', ' admin@tanijaya.com', 1556499351);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_pemesan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE `pemesan` (
  `id_pemesan` int(11) NOT NULL,
  `nama_pemesan` varchar(230) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `alamat_pemesan` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `isi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `nama`, `isi`) VALUES
(1, 'no_wa', '823929388421'),
(2, 'alamat', 'Jl. Jembatan Merah No. 84C Gejayan, \r\nJakarta 55283'),
(3, 'ig', 'bungamatahari');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kota` varchar(128) NOT NULL,
  `harga` int(11) NOT NULL,
  `per` int(11) NOT NULL,
  `satuan` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(128) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `kota`, `harga`, `per`, `satuan`, `deskripsi`, `foto`, `id_kategori`) VALUES
(1, 'Apel', 'Madura', 450000, 1, 'kg', '<p>\n	Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas sed diam eget risus varius blandit sit amet magna charta.</p>\n', '30296-5ec35-iconfinder_apple_56029.png', 1),
(2, 'Tomat', 'Bantul', 240000, 1, 'kg', 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue.', 'iconfinder_Tomato_56019.png', 1),
(3, 'Pisang', 'Flores', 370000, 2, 'kg', 'Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis.', 'iconfinder_Banana_56018.png', 1),
(4, 'Jeruk', 'Sleman', 129000, 1, 'kg', 'Maecenas faucibus mollis interdum. Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'iconfinder_Lemon_56022.png', 1),
(5, 'Pear', 'Gunung Kidul', 350000, 1, 'kg', 'Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit sit amet non magna.', 'iconfinder_Pear_56020.png', 1),
(7, 'Cherry', 'Ponorogo', 137000, 10, 'kg', '<p>\r\n	Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis. Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>\r\n', '79fee-iconfinder_cherry_56023.png', 1),
(8, 'Kunyit', 'Yogyakarta', 8000, 1, 'kg', '<p>\n	Kunyit atau kunyit termasuk tanaman rempah-rempah dan obat asli dari wilayah Asia Tenggara. Tanaman ini kemudian mengalamai penyebaran daerah Malaysia, Indonesia, Australia bahkan Afrika. Kunyit ini mengandung banyak manfaat. Kunyit ini juga sering digunakan sebagai bumbu dalam masakan karena dapat memberikan warna kuning alami pada masakan atau sebagai&nbsp;</p>\n', '', 2),
(9, 'Kacang hijau', 'Klaten', 21000, 1, 'kg', '<p>\n	Kacang hijau adalah sejenis palawija yang dikenal luas di daerah tropis. Tumbuhan yang termasu ke dalam polong-polongan ini memiliki banyak manfaat dan sebagai sumber bahan pangan berprotein nabati tinggi. Kacang hijau memiliki protein yang cukup tinggi dan merupakan sumber mineral penting antara lain kalsium dan fosfor. sedangkan kandungan lemaknya merupakan asam lemak tak jenuh. Kacang hijau mengandung vitamin B1 yang berguna untuk pertumbuhan dan vitalitas pria. Kacang hijau juga mengandung multi protein yang berfungsi mengganti sel mati dan membantu pertumbuhan sel tubuh, oleh karena itu anak-anak dan wanita pasca melahirkan dianjurkan untuk mengkonsumsinya.</p>\n', '60fe1-kacang-hijau.png', 7),
(14, 'Sawi Hijau', 'Wonosobo', 12000, 1, 'Kg', '<p>\n	Tanaman sawi memilikia nama latin &ldquo; Brassica juncea L.&rdquo; Merupakan tanaman jenis sayuran semusim. ... Oleh karena itu, tanaman sawi ini memiliki morfologi yang hampir sama , terumaanya di bagian akar, batang, daun, bunga, buah dan juga biji.</p>\n', 'd3e09-sawi.png', 3),
(15, 'Delima', 'Malang', 35000, 1, 'Kg', '<p>\n	Delima adalah tanaman buah-buahan yang dapat tumbuh hingga 5&ndash;8 m. Tanaman ini diperkirakan berasal dari Iran, namun telah lama dikembangbiakkan di&nbsp;</p>\n', 'b429f-delima.png', 1),
(18, 'Strawbery', 'Temanggung', 27000, 1, 'Kg', '<p>\n	Buah ini dipercaya berasal dari benua Amerika, tepatnya dari daerah yang sekarang bernama Chile. Bentuknya yang manis dan memikat membuat buah&nbsp;</p>\n', '5459b-strawberry_png2598.png', 1),
(19, 'Rambutan', 'Sleman', 20000, 1, 'Kg', '<p>\n	Rambutan adalah tanaman tropis yang tergolong ke dalam suku lerak-lerakan atau Sapindaceae, berasal dari daerah di Asia Tenggara. Kata &quot;rambutan&quot; berasal&nbsp;</p>\n', 'daa4f-rambutan-600.png', 1),
(21, 'Wortel', 'Tawangmangu', 14000, 1, 'Kg', '<p>\n	Batang bunga tumbuh setinggi sekitar 1 m, dengan bunga berwarna putih, dan rasa yang manis langu. Bagian yang dapat dimakan dari wortel adalah bagian umbi&nbsp;</p>\n', '690f9-carrots-2667337_1280.png', 3),
(22, 'Anggur', 'Bandung', 73000, 1, 'Kg', '<p>\n	Anggur merupakan tanaman buah berupa perdu merambat yang termasuk ke dalam keluarga Vitaceae. Buah ini biasanya digunakan untuk membuat jus anggur,&nbsp;</p>\n', 'b2538-grapes.png', 1),
(23, 'Kiwi', 'Bogor', 83000, 1, 'Kg', '<p>\n	Kiwi adalah sejenis buah beri yang dapat dimakan dari tanaman merambat berkayu dalam genus Actinidia. Actinidia asli berasal dari Shaanxi, Tiongkok.</p>\n', '879bf-kiwi_png4029.png', 1),
(24, 'Alpukat', 'Yogyakarta', 35000, 1, 'Kg', '<p>\n	Avokad ialah tumbuhan penghasil buah meja dengan nama sama. Tumbuhan ini berasal dari Meksiko dan Amerika Tengah dan kini banyak dibudidayakan di&nbsp;</p>\n', '5b598-alpukat.png', 1),
(27, 'Terong Ungu', 'Bantul', 4000, 1, 'Kg', '<p>\n	Terung(Solanum melongena, di Pulau Jawa lebih dikenal sebagai terong) adalah tumbuhan penghasil buah yang dijadikan sayur-sayuran. Asalnya adalah India&nbsp;</p>\n', 'e7616-terong.jpeg', 3),
(28, 'Sawi Putih', 'Cilacap', 40000, 1, 'Kg', '<p>\n	Sawi putih (Brassica rapa Kelompok Pekinensis; suku sawi-sawian atau Brassicaceae ) dikenal sebagai sayuran olahan dalam masakan Tionghoa; karena itu disebut&nbsp;</p>\n', '21ac2-sawi-pitoh.png', 3),
(29, 'Petai', 'Magelang', 200000, 1, 'kg', '<p>\n	Petai, pete, atau mlanding merupakan pohon tahunan tropika dari suku polong-polongan, anak-suku petai-petaian. Tumbuhan ini tersebar luas di Nusantara bagian barat. Bijinya, yang disebut &quot;petai&quot; juga, dikonsumsi ketika masih muda, baik segar maupun direbus</p>\n', '759ad-petai.png', 3),
(30, 'Asparagus', 'Malang', 80000, 1, 'kg', '<p>\r\n	Asparagus, dalam pengertian umum, adalah suatu jenis sayuran dari satu spesies tumbuhan genus Asparagus, terutama batang muda dari Asparagus officinalis. ... Asparagus merupakan sumber terbaik asam folat nabati, sangat rendah kalori, tidak mengandung lemak atau kolesterol, serta mengandung sangat sedikit natrium.</p>\r\n', 'e3f70-asparagus.png', 3),
(31, 'Pare', 'Malang', 3500, 1, 'kg', '<p>\r\n	Peria atau pare adalah tumbuhan merambat yang berasal dari wilayah Asia Tropis, terutama daerah India bagian barat, yaitu Assam dan Burma. Anggota suku labu-labuan atau Cucurbitaceae ini biasa dibudidayakan untuk dimanfaatkan sebagai sayuran maupun bahan pengobatan.Nama Momordica yang melekat pada nama binomialnya berarti &quot;gigitan&quot; yang menunjukkan pemerian tepi daunnya yang bergerigi menyerupai bekas gigitan</p>\r\n', '81de2-pare.png', 3),
(32, 'Buncis', 'Wonosobo', 15000, 1, 'kg', '<p>\r\n	Tanaman kacang buncis (Phaseolus vulgaris L.) adalah tanaman sayuran polong semusim yang berumur pendek dan merupakan merupakan salah satu tanaman hortikultura yang penting. Tanaman ini bukan berasal dari Indonesia, melainkan berasal dari daerah Amerika Latin dan Amerika Tengah, lalu menyebar ke wilayah Eropa dan Asia.</p>\r\n', 'ecc38-buncis.png', 3),
(33, 'Jagung', 'Batu', 8000, 1, 'kg', '<p>\r\n	Jagung (Zea mays ssp. mays) adalah salah satu tanaman pangan penghasil karbohidrat yang terpenting di dunia, selain gandum dan padi. Bagi penduduk Amerika Tengah dan Selatan, bulir jagung adalah pangan pokok, sebagaimana bagi sebagian penduduk Afrika dan beberapa daerah di Indonesia. Pada masa kini, jagung juga sudah menjadi komponen penting pakan ternak. Penggunaan lainnya adalah sebagai sumber minyak pangan dan bahan dasar tepung maizena. Berbagai produk turunan hasil jagung menjadi bahan baku berbagai produk industri farmasi, kosmetika, dan kimia.</p>\r\n', '86b87-jagung.png', 4),
(34, 'Kacang Tanah', 'Yogyakarta', 11000, 1, 'kg', '<p>\r\n	Kacang tanah (Arachis hypogaea L.) adalah tanaman polong-polongan atau legum anggota suku Fabaceae yang dibudidayakan, serta menjadi kacang-kacangan kedua terpenting setelah kedelai di Indonesia.Tanaman yang berasal dari benua Amerika ini tumbuh secara perdu setinggi 30 hingga 50 cm (1 hingga 1&frac12; kaki) dengan daun-daun kecil tersusun majemuk.</p>\r\n', 'b6810-kacang-tanah.png', 7),
(35, 'Kacang Kedelai', 'Yogyakarta', 15000, 1, 'kg', '<p>\r\n	Kedelai, atau kacang kedelai, adalah salah satu tanaman jenis polong-polongan yang menjadi bahan dasar banyak makanan dari Asia Timur seperti kecap, tahu, dan tempe. Berdasarkan peninggalan arkeologi, tanaman ini telah dibudidayakan sejak 3500 tahun yang lalu di Asia Timur.</p>\r\n', 'f3663-kacang-kedelai.png', 7),
(37, 'Beras', 'Lamongan', 12000, 1, 'kg', '<p>\r\n	Padi (bahasa latin: Oryza sativa L.) merupakan salah satu tanaman budidaya terpenting dalam peradaban. Meskipun terutama mengacu pada jenis tanaman budidaya, padi juga digunakan untuk mengacu pada beberapa jenis dari marga (genus) yang sama, yang biasa disebut sebagai padi liar. Padi diduga berasal dari India atau Indocina dan masuk ke Indonesia dibawa oleh nenek moyang yang migrasi dari daratan Asia sekitar 1500 SM.</p>\r\n', 'a44e7-beras.png', 4),
(38, 'Ubi Jalar', 'Kediri', 3500, 1, 'kg', '<p>\r\n	ubi jalar atau dalam bahasa Inggrisnya sweet potato adalah sejenis tanaman budidaya. Bagian yang dimanfaatkan adalah akarnya yang membentuk umbi dengan kadar gizi yang tinggi. Di Afrika, umbi ubi jalar menjadi salah satu sumber makanan pokok yang penting.</p>\r\n', '1833c-ubi-jalar.png', 5),
(39, 'Singkong kuning', 'Semarang', 2000, 1, 'kg', '<p>\n	singkong adalah nama lokal di kawasan Jawa Barat untuk tanaman ini. Dalam bahasa melayu secara luas disebut ketela pohon. Singkong ini dapat dimasak dengan berbagai cara dan banyak digunakan pada berbagai macam masakan. Direbus untuk menggantikan kentang dan pelengkap masakan. tepung singkong dpat digunakan untuk mengganti tpung gandum, cocok untuk pengidap alergi gluten.</p>\n', 'e03e3-singkong.png', 5),
(40, 'Kentang', 'Malang', 18000, 1, 'kg', '<p>\r\n	Kentang adalah tanaman dari suku Solanaceae yang memiliki umbi batang yang dapat dimakan dan disebut &quot;kentang&quot; pula. Umbi kentang sekarang telah menjadi salah satu makanan pokok penting di Eropa walaupun pada awalnya didatangkan dari Amerika. Kentang memiliki banyak manfaat dan dapat diolah menjadi aneka macam makanan.</p>\r\n', 'dc4b1-kentang.png', 5),
(41, 'Singkong mentega', 'Padang', 85000, 10, 'kg', '<p>\n	<span style=\"font-family: arial, sans-serif; font-size: small;\">Singkong adalah perdu tahunan tropika dan subtropika dari suku Euphorbiaceae. Umbinya dikenal luas sebagai makanan pokok penghasil karbohidrat dan daunnya sebagai sayuran.</span></p>\n', 'bb0ac-singkong.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sub_kategori`
--

CREATE TABLE `sub_kategori` (
  `Id_sub_kategori` int(11) NOT NULL,
  `nama_sub_kategori` varchar(200) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$sh1YJv5hm9ft.LZTJaTHqOUKDJ79l3ZPmdGNahjRKeoFIKpMD0Aum', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1556130457, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '36.84.0.43', 'admin@tanijaya.com', '$2y$10$q8NF2T0Sx4gQe7ClMf9edey3KXByWIlVxQ2PRCQIxhgdtx3oG4ka2', 'admin@tanijaya.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1556130524, 1556566733, 1, 'Tani', 'Jaya', 'Tani Jaya', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`id_pemesan`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD PRIMARY KEY (`Id_sub_kategori`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pemesan`
--
ALTER TABLE `pemesan`
  MODIFY `id_pemesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`);

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
