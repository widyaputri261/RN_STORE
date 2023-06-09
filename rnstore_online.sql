-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 08:51 AM
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
-- Database: `rnstore_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `cookie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `cookie`) VALUES
(1, 'admin', '$2y$10$pKGfQG2etJ5lDW06PZncIOqY94RJTioYG4oM4n0/Up.cUpnX5HkRO', 'jVVei3128F6bfusLMDAJrdm2gHFoNlkOP4Mr5OvYWsmBjq6Wh8tGcQyaZSUpEBQT');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `img` varchar(30) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `img`, `url`) VALUES
(20, '1686459372444.jpg', '#');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `img` varchar(30) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `weight` int(11) NOT NULL,
  `ket` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user`, `id_product`, `product_name`, `price`, `qty`, `stock`, `img`, `slug`, `weight`, `ket`) VALUES
(123, 17, 73, 'CD Case', 5000, 1, 9, '1685284763854.jpeg', 'cd-case', 100, '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `slug` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`, `slug`) VALUES
(2, 'Bingkai Foto', '1685190740588.png', 'bingkai-foto'),
(3, 'album foto', '1685190869063.png', 'album-foto'),
(4, 'Kaligrafi', '1685191218755.png', 'kaligrafi'),
(6, 'Storage', '1685191363369.png', 'storage'),
(7, 'souvenir', '1685191426257.png', 'souvenir');

-- --------------------------------------------------------

--
-- Table structure for table `cod`
--

CREATE TABLE `cod` (
  `id` int(11) NOT NULL,
  `regency_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cost_delivery`
--

CREATE TABLE `cost_delivery` (
  `id` int(11) NOT NULL,
  `destination` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cost_delivery`
--

INSERT INTO `cost_delivery` (`id`, `destination`, `price`) VALUES
(1, 243, 50000),
(2, 369, 0),
(4, 418, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `email_send`
--

CREATE TABLE `email_send` (
  `id` int(11) NOT NULL,
  `mail_to` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_send`
--

INSERT INTO `email_send` (`id`, `mail_to`, `subject`, `message`) VALUES
(42, 27, 'kunjungi kami', '<p>kunjungi kami di jahdkjhakhf</p>'),
(44, 26, 'kunjungi kami', '<p>segera kunjungi website kami untuk mendapatkan penawaran terbaru</p>');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `page` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fotografer`
--

CREATE TABLE `fotografer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fotografer`
--

INSERT INTO `fotografer` (`id`, `name`, `jk`, `alamat`, `no_telp`, `img`) VALUES
(4, 'Dzulkifli', 'Laki-Laki', 'Wonorejo', '081337544918', '1685255256804.png'),
(5, 'Slamet  Dwi ', 'Laki-Laki', 'Maron Kidul', '085236067267', '1685280999641.png');

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `id` int(11) NOT NULL,
  `app_name` varchar(50) NOT NULL,
  `slogan` varchar(150) NOT NULL,
  `navbar_color` varchar(10) NOT NULL,
  `api_rajaongkir` varchar(70) NOT NULL,
  `host_mail` varchar(50) NOT NULL,
  `port_mail` varchar(10) NOT NULL,
  `crypto_smtp` varchar(20) NOT NULL,
  `account_gmail` varchar(50) NOT NULL,
  `pass_gmail` varchar(50) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `whatsappv2` varchar(20) NOT NULL,
  `email_contact` varchar(50) NOT NULL,
  `server_api_midtrans` varchar(150) NOT NULL,
  `client_api_midtrans` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`id`, `app_name`, `slogan`, `navbar_color`, `api_rajaongkir`, `host_mail`, `port_mail`, `crypto_smtp`, `account_gmail`, `pass_gmail`, `whatsapp`, `whatsappv2`, `email_contact`, `server_api_midtrans`, `client_api_midtrans`) VALUES
(1, 'RN STORE', 'Partner Bisnis Berkualitas', '#FF4500', '927dd3414e464d4e77e4a60a5c44bc7a', 'smtp.gmail.com ', '465', 'ssl', 'storern08@gmail.com', 'vprkmjfcptcnnxuv', '082336170023', '6282336170023', 'storern08@gmail.com', 'SB-Mid-server-tUrWb5oWs1WwG95O1ufd9CyR', 'SB-Mid-client-XlgSVWepD0TuwVKz');

-- --------------------------------------------------------

--
-- Table structure for table `grosir`
--

CREATE TABLE `grosir` (
  `id` int(11) NOT NULL,
  `min` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grosir`
--

INSERT INTO `grosir` (`id`, `min`, `price`, `product`) VALUES
(11, 6, 19000, 69),
(13, 6, 17500, 67),
(14, 6, 17500, 66),
(15, 6, 17500, 65),
(16, 6, 17500, 64),
(17, 6, 17500, 63),
(18, 6, 17500, 62),
(19, 6, 17500, 61),
(20, 6, 17500, 60),
(21, 6, 15000, 59),
(22, 6, 15000, 58),
(23, 6, 15000, 57),
(24, 6, 15000, 56),
(25, 6, 15000, 55),
(26, 6, 15000, 54),
(27, 6, 15000, 53),
(28, 6, 15000, 52),
(29, 6, 15000, 51),
(30, 6, 17500, 50),
(31, 6, 17500, 49),
(32, 6, 17500, 48),
(33, 6, 17500, 47),
(34, 6, 17500, 46),
(35, 6, 17500, 45),
(36, 6, 17500, 44),
(37, 6, 17500, 43),
(38, 6, 17500, 42),
(39, 6, 63000, 74),
(40, 10, 4000, 73),
(41, 6, 33000, 72),
(42, 12, 70000, 71),
(43, 6, 17500, 68),
(44, 6, 19000, 70),
(45, 6, 19000, 75),
(46, 6, 19000, 76),
(47, 6, 19000, 78),
(48, 6, 19000, 77),
(49, 6, 19000, 79),
(50, 6, 19000, 80),
(51, 6, 19000, 81),
(52, 6, 35000, 82),
(53, 6, 35000, 83),
(54, 6, 35000, 84),
(55, 6, 35000, 85),
(56, 6, 35000, 86),
(58, 6, 35000, 87),
(59, 6, 35000, 88),
(60, 6, 35000, 89),
(61, 6, 35000, 90),
(62, 6, 38000, 91),
(63, 6, 38000, 92),
(64, 6, 38000, 93),
(65, 6, 38000, 94),
(66, 6, 38000, 95),
(67, 6, 38000, 96),
(68, 6, 38000, 97),
(69, 6, 38000, 98),
(70, 6, 38000, 99),
(71, 6, 90000, 100),
(72, 6, 90000, 101),
(73, 6, 90000, 102),
(74, 6, 90000, 103),
(75, 6, 90000, 104);

-- --------------------------------------------------------

--
-- Table structure for table `img_paket`
--

CREATE TABLE `img_paket` (
  `id` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `img_product`
--

CREATE TABLE `img_product` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img_product`
--

INSERT INTO `img_product` (`id`, `id_product`, `img`) VALUES
(1, 22, '1589840767903.jpg'),
(2, 22, '1589840786550.jpg'),
(5, 22, '1589840836102.jpg'),
(7, 29, '1621436002940.jpg'),
(8, 8, '1621436022420.jpg'),
(9, 8, '1621436027602.jpg'),
(10, 10, '1683777631069.png');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `invoice_code` varchar(10) NOT NULL,
  `label` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `province` int(11) NOT NULL,
  `regency` int(11) NOT NULL,
  `district` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `address` text NOT NULL,
  `courier` varchar(5) NOT NULL,
  `courier_service` varchar(70) NOT NULL,
  `ongkir` varchar(10) NOT NULL,
  `total_price` int(11) NOT NULL,
  `total_all` int(11) NOT NULL,
  `date_input` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL,
  `resi` varchar(30) NOT NULL,
  `pay_status` varchar(30) NOT NULL,
  `link_pay` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `user`, `invoice_code`, `label`, `name`, `email`, `telp`, `province`, `regency`, `district`, `village`, `zipcode`, `address`, `courier`, `courier_service`, `ongkir`, `total_price`, `total_all`, `date_input`, `status`, `resi`, `pay_status`, `link_pay`) VALUES
(78, 18, '1845564381', 'Rumah', 'Widya', 'widyaputri.pratama@gmail.com', '082336170023', 11, 369, 'Maron', 'Wonorejo', 67276, 'Dsn Gading RT 12 RW 04', 'antar', 'antar', '5000', 5000, 10000, '2023-06-07 15:59:41', 0, '0', 'expire', ''),
(79, 17, '1737704910', 'Rumah', 'Amelia', 'widyaputri.020601@gmail.com', '082332511151', 11, 369, 'Maron', 'Wonorejo', 67276, 'Dsn Candi RT 06 RW 02 Desa Wonorejo', 'antar', 'antar', '5000', 5000, 10000, '2023-06-10 12:11:50', 0, '0', 'expire', ''),
(80, 18, '1860825645', 'Rumah', 'Widya', 'widyaputri.pratama@gmail.com', '082336170023', 11, 369, 'Maron', 'Wonorejo', 67276, 'Dsn Gading RT 12 RW 04', 'antar', 'antar', '0', 5000, 5000, '2023-06-10 12:40:45', 4, '0', 'settlement', ''),
(81, 17, '1710555353', 'Rumah', 'Amelia Putri', 'widyaputri.020601@gmail.com', '085258364716', 11, 369, 'Maron', 'Wonorejo', 67276, 'Dsn. Candi RT 06 RW 02 Desa Wonorejo', 'jne', 'CTC', '7000', 20000, 27000, '2023-06-11 11:22:33', 2, '0', 'settlement', ''),
(82, 18, '1812792022', 'Rumah', 'Irmawati', 'widyaputri.pratama@gmail.com', '082316683706', 11, 369, 'Kraksaan', 'Alassumur Kulon', 67282, 'Dusun Krajan RT 03 RW 02 Desa Alassumur Kulon', 'antar', 'antar', '0', 45000, 45000, '2023-06-12 10:20:22', 1, '0', 'settlement', ''),
(83, 17, '1720422093', 'Rumah', 'Widya Putri', 'widyaputri.020601@gmail.com', '082336170023', 11, 369, 'Maron', 'Wonorejo', 67276, 'Dsn Gading RT 12 RW 04', 'antar', 'antar', '0', 20000, 20000, '2023-06-13 13:34:53', 4, '0', 'settlement', ''),
(84, 21, '2114215606', 'rumah', 'Widya', 'e31201146@student.polije.ac.id', '082336170023', 11, 369, 'Maron', 'Wonorejo', 67276, 'Dsn Gading RT 12 RW 4', 'jne', 'CTC', '42000', 291000, 333000, '2023-06-13 14:00:06', 2, '0', 'settlement', ''),
(85, 18, '1819878549', 'Rumah', 'Irmawati', 'widyaputri.pratama@gmail.com', '085603002867', 11, 369, 'maron', 'wonorejo', 67276, 'dsn gading rt 12 rw 04', 'antar', 'antar', '0', 40000, 40000, '2023-06-18 12:35:49', 2, '0', 'settlement', ''),
(88, 18, '1810342210', 'rumah', 'yaumisri', 'widyaputri.pratama@gmail.com', '082332511151', 11, 369, 'Maron', 'Wonorejo', 67276, 'Wonorejo', 'antar', 'antar', '0', 5000, 5000, '2023-06-24 09:53:30', 2, '0', 'settlement', ''),
(89, 17, '1797887479', 'Rumah', 'Imron', 'widyaputri.020601@gmail.com', '085252481865', 11, 369, 'Maron', 'Wonorejo', 67276, 'Wonorejo', 'antar', 'antar', '0', 25000, 25000, '2023-06-24 12:44:39', 1, '0', 'settlement', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `link`) VALUES
(1, 'Home', ''),
(4, 'Kontak', 'contact'),
(7, 'Pembayaran', 'payment/confirmation'),
(8, 'Produk', 'products');

-- --------------------------------------------------------

--
-- Table structure for table `order_paket`
--

CREATE TABLE `order_paket` (
  `id` int(11) NOT NULL,
  `invoice_code` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `jenis_acara` varchar(100) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `biaya_tambahan` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `total` int(11) NOT NULL,
  `jml_bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `date_input` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_paket`
--

INSERT INTO `order_paket` (`id`, `invoice_code`, `nama`, `email`, `telp`, `paket`, `price`, `jenis_acara`, `lokasi`, `alamat`, `kabupaten`, `biaya_tambahan`, `date`, `time`, `total`, `jml_bayar`, `kembalian`, `date_input`, `status`) VALUES
(19, 'MP23052800', 'Riski', 'riski12@gmail.com', '085336762591', 'paket prewedding 1', 400000, 'Prewedding', 'RN Studio', 'Dsn Gading RT 12 RW 04 Desa Wonorejo', 'KABUPATEN PROBOLINGGO', 0, '2023-06-13', '09:00:00', 400000, 400000, 0, '2023-05-28', 0),
(20, 'MP23052500', 'Aisyah', 'aisyah.putri@gmail.com', '082332876569', 'paket prewedding 1', 400000, 'Prewedding', 'RN Studio', 'Dsn Gading RT 12 RW 04 Desa Wonorejo', 'KABUPATEN PROBOLINGGO', 0, '2023-06-09', '09:00:00', 400000, 400000, 0, '2023-05-25', 1),
(21, 'MP23052801', 'Riski', 'riski12@gmail.com', '085336762591', 'paket wedding/album magnetic uk. 10RS', 1000000, 'Wedding', 'Wonorejo', 'Dsn Krajan Desa Wonorejo', 'KABUPATEN PROBOLINGGO', 0, '2023-06-24', '14:00:00', 1000000, 1000000, 0, '2023-05-28', 0),
(22, 'MP23052501', 'Aisyah', 'aisyah.putri@gmail.com', '082332876569', 'paket wedding/album magnetic uk. 10RS', 1000000, 'Wedding', 'Krucil', 'Dsn Kayu Gede Desa Krucil', 'KABUPATEN PROBOLINGGO', 0, '2023-06-21', '14:00:00', 1000000, 1000000, 0, '2023-05-25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `slug`) VALUES
(1, 'Tentang Kami', '<p>Lakukan tugas Anda dengan senang hati dan gunakan humor Anda di waktu kerja terutama saat sulit dan tegang-tegang, itulah salah satu budaya (fun) kami.</p><p>Religious, Passionate, Tough, Knowledgeable, Fun &amp; Customer Service adalah budaya-budaya yang ada di <a href=\"https://kincaimedia.net\">Kincaimedia.net</a>, dan kami sangat menjunjung tinggi budaya kami dengan cara memberikan yang terbaik bagi pelanggan, diri kita, keluarga, dan masyarakat.</p><p>&nbsp;</p><h2>Visi dan Misi</h2><h3>Visi</h3><p>\"Menjadi sebuah perusahaan kelas dunia dengan semangat pemanfaatan informasi teknologi, dan menjadi kebanggaan bangsa.\"</p><h3>Misi</h3><p>\"Menjadi webstore nomor satu di Indonesia yang menyediakan kelengkapan dan kemudahan belanja, serta memperhatikan dan memberikan pengalaman belanja yang berkesan kepada pelanggan, melalui nilai-nilai delapan dimensi pengalaman.\"</p><p>&nbsp;</p><h2>Sekapur Sirih</h2><p>Sejak awal <a href=\"https://kincaimedia.net\">Kincaimedia.net</a> berdiri, kami bertekad membangun bisnis yang berdaya tahan panjang. Mengutamakan citra merk dengan pelayanan dan menjadikannya bagian dari budaya kerja. Fokus pada pelayanan berarti memberi nilai tambah dalam setiap layanan. Sebab itulah mengapa pelanggan kami menekan tombol\'beli\' dan tetap kembali lagi di kemudian hari.</p><p>Menengok sejenak ke belakang, kami bersyukur fokus pada pelayanan dan \'human touch\' dalam membangun <a href=\"https://kincaimedia.net\">Kincaimedia.net</a>, yang dirumuskan dengan sebuah kalimat sederhana \'Pelayanan Dari Hati\'. Dan sekarang, kalimat ini telah menjadi esensi dalam setiap langkah yang kami lakukan, mudah dicerna tanpa perlu segala embel-embel dan frase-frase yang sulit untuk dipahami dalam melayani pelanggan kami.</p><p>Standar pelayanan kami pun semakin tinggi setiap tahun. Berinovasi dan menyajikan pengalamanan berbelanja yang berkesan, mulai dari produk yang lengkap, harga yang kompetitif, mudah dalam bertransaksi, jaminan purna jual, hingga kejutan-kejutan mengasyikkan untuk setiap pelanggan kami, yang menjadikan belanja di<a href=\"https://kincaimedia.net\">Kincaimedia.net</a> semakin nyaman, baik online maupun offline.</p><p>Untuk teman-teman komunitas <a href=\"https://kincaimedia.net\">Kincaimedia.net</a> yang bersama dengan kami sejak awal perkembangan internet dimulai di Indonesia, kami akan terus perhatikan dan senantiasa mengembangkan banyak fitur yang akan semakin asyik untuk saling bertemu, berbagi, berbincang, belajar, atau sekedar melakukan jual-beli produk. Offline store <a href=\"https://kincaimedia.net\">Kincaimedia.net</a> juga menjadi tempat untuk workshop, tempat berkumpul, dan ngobrol antar komunitas.</p><p>Akhirnya, saya sangat berbahagia <a href=\"https://kincaimedia.net\">Kincaimedia.net</a> dapat berkontribusi untuk negeri ini dan membawa nilai lebih untuk masyarakat Indonesia. Kami akan selalu berusaha dan mendorong diri kami sendiri untuk menjadi salah satu perusahaan berbasis teknologi yang menjadi kebanggaan bangsa Indonesia.</p>', 'about'),
(2, 'Kontak Kami', '<p>Hubungi Tim Penjualan Kami</p><p>&nbsp;</p><p><strong>Konsultan Penjualan</strong></p><p>Melayani kebutuhan Anda untuk seluruh kategori produk. Silakan hubungi 021-29292828 atau email kami.</p><p><strong>Korporasi &amp; Pemerintah.</strong></p><p>Melayani kebutuhan korporasi &amp; proyek. Silakan email kami ke support@kincaimedia.net</p><p><strong>Solusi Software &amp; Lisensi</strong></p><p>Melayani kebutuhan lisensi &amp; konsultasi software. Silakan email kami ke support@kincaimedia.net</p><p><strong>Solusi Percetakan &amp; Signage</strong></p><p>Melayani kebutuhan printer besar, signage, &amp; produk 3D. Silakan email support@kincaimedia.net</p><p>&nbsp;</p><p><strong>Kantor Pusat</strong><br>Jl. Gunung Sahari Raya 73C No. 5-6<br>Jakarta 10610, Indonesia</p><p>Hubungi Tim Pendukung Kami</p><p><strong>Layanan Klaim Garansi</strong></p><p>Untuk bantuan teknisi dan klaim garansi produk, silakan telepon ke (021) 2929-2828 atau email support@kincaimedia.net</p><p><strong>Layanan Pengembalian Barang &amp; Refund</strong></p><p>Jika produk yang diterima salah/cacat/rusak &amp; ingin mengurus pengembalian dana, untuk laporan dan bantuan dapat menghubungi kami email support@kincaimedia.net.</p><p><strong>Layanan Pelanggan</strong></p><p>Silakan berikan feedback atas pelayanan yang kurang berkenan dari tim kami. Tuliskan masukan Anda email support@kincaimedia.net.</p><p><strong>Status Pengiriman</strong></p><p>Untuk bantuan tracking status pesanan &amp; status pengiriman, silakan telepon ke (021) 2929-2828 atau Anda dapat menghubungi kami email support@kincaimedia.net.</p><p>&nbsp;</p><p><strong>Merchant&nbsp;</strong></p><p>Ingin memulai jualan di <a href=\"https://kincaimedia.net\">Kincaimedia.net</a>? Anda bisa mendaftar menjadi merchant &amp; bertanya seputar <a href=\"https://kincaimedia.net\">Kincaimedia.net</a> Marketplace email support@kincaimedia.net.</p><p><strong>Tidak Dapat Menemukan Tim yang Anda Cari?</strong></p><p>Anda dapat menghubungi kami email support@kincaimedia.net.</p>', 'contact'),
(3, 'Testimoni', '<p>redirect page</p>', 'testimoni'),
(4, 'Kebijakan Privasi', '<h2><strong>KEBIJAKAN PRIVASI SITUS DAN APLIKASI</strong></h2><p>MATAHARI memahami dan menghormati privasi Anda dan nilai hubungan kami dengan Anda. Kebijakan Privasi ini menjelaskan bagaimana Matahari mengumpulkan, mengatur dan melindungi informasi Anda ketika Anda mengunjungi dan/atau menggunakan situs atau aplikasi MATAHARI, bagaimana Matahari menggunakan informasi dan kepada siapa Matahari dapat berbagi. Kebijakan privasi ini juga memberitahu Anda bagaimana Anda dapat meminta Matahari untuk mengakses atau mengubah informasi Anda serta menjawab pertanyaan Anda sehubungan dengan Kebijakan Privasi ini.<br>Kata-kata yang dimulai dengan huruf besar dalam Kebijakan Privacy ini mempunyai pengertian yang sama dengan Syarat dan Ketentuan penggunaan situs dan aplikasi MATAHARI.</p><p>&nbsp;</p><h2><strong>Informasi yang kami kumpulkan</strong></h2><p>Matahari dapat memperoleh dan mengumpulkan informasi dan/atau konten dari situs dan aplikasi yang Anda atau pengguna lain sambungkan atau disambungkan oleh situs atau aplikasi MATAHARI dengan situs atau pengguna tertentu dan informasi dan/atau konten yang Anda berikan melalui penggunaan situs atau aplikasi MATAHARI dan/atau pengisian Aplikasi.</p><p><br>Ketika Anda mengunjungi situs atau aplikasi MATAHARI, Matahari dapat mengumpulkan informasi apapun yang telah dipilih bisa terlihat oleh semua orang dan setiap informasi publik yang tersedia. Informasi ini dapat mencakup nama Anda, gambar profil, jenis kelamin, kota saat ini, hari lahir, email, jaringan, daftar teman, dan informasi-informasi Anda lainnya yang tersedia dalam jaringan. Selain itu, ketika Anda menggunakan aplikasi MATAHARI, atau berinteraksi dengan alat terkait, widget atau plug-in, Matahari dapat mengumpulkan informasi tertentu dengan cara otomatis, seperti cookies dan web beacon. Informasi yang Matahari kumpulkan dengan cara ini termasuk alamat IP, perangkat pengenal unik, karakteristik perambah, karakteristik perangkat, sistem operasi, preferensi bahasa, URL, informasi tentang tindakan yang dilakukan, tanggal dan waktu kegiatan. Melalui metode pengumpulan otomatis ini, Matahari mendapatkan informasi mengenai Anda. Matahari mungkin menghubungkan unsur-unsur tertentu atas data yang telah dikumpulkan melalui sarana otomatis, seperti informasi browser Anda, dengan informasi lain yang diperoleh tentang Anda, misalnya, apakah Anda telah membuka email yang dikirimkan kepada Anda. Matahari juga dapat menggunakan alat analisis pihak ketiga yang mengumpulkan informasi tentang lalu lintas pengunjung situs atau aplikasi MATAHARI. Browser Anda mungkin memberitahu Anda ketika Anda menerima cookie jenis tertentu atau cara untuk membatasi atau menonaktifkan beberapa jenis cookies. Harap dicatat, bahwa tanpa cookie Anda mungkin tidak dapat menggunakan semua fitur dari situs atau aplikasi MATAHARI.</p><p><br>Situs atau aplikasi MATAHARI mungkin berisi link ke tempat pihak lain yang dapat dioperasikan oleh pihak lain tersebut yang mungkin tidak memiliki kebijakan privasi yang sama dengan Matahari. Matahari sangat menyarankan Anda untuk membaca dan mempelajari kebijakan privasi dan ketentuan-ketentuan pihak lain tersebut sebelum masuk atau menggunakannya. Matahari tidak bertanggung jawab atas pengumpulan dan/atau penyebaran informasi pribadi Anda oleh pihak lain atau yang berkaitan dengan penggunaan media sosial seperti Facebook dan Twitter dan Matahari dibebaskan dari segala akibat yang timbul atas penyebaran dan/atau penyalahgunaan informasi tersebut.</p><p>&nbsp;</p><h2><strong>BAGAIMANA MATAHARI MENGGUNAKAN INFORMASI</strong></h2><p>Matahari dapat menggunakan informasi Anda yang diperoleh untuk menyediakan produk dan layanan yang Anda minta, sebagai data riset atau berkomunikasi tentang dan/atau mengelola partisipasi Anda dalam survei atau undian atau kontes atau acara khusus lainnya yang diadakan oleh Matahari, pengoperasian Matahari, memberikan dukungan kepada Anda sebagai pengunjung dan/atau pengguna situs atau aplikasi MATAHARI, merespon dan berkomunikasi dengan Anda mengenai permintaan Anda, pertanyaan dan/atau komentar Anda, membiarkan Anda untuk meninggalkan komentar di situs atau aplikasi MATAHARI atau melalui media sosial lainnya, membangun dan mengelola Akun Anda, mengirimkan berita-berita dan/atau penawaran-penawaran yang berlaku bagi Anda selaku pengunjung dan penguna situs atau aplikasi MATAHARI, untuk mengoperasikan, mengevaluasi dan meningkatkan bisnis Matahari termasuk untuk mengembangkan produk dan layanan baru; untuk mengelola komunikasi Matahari, menentukan efektifitas layanan, pemasaran dan periklanan situs atau aplikasi MATAHARI, dan melakukan akutansi, audit, dan kegiatan Matahari lainnya, melakukan analisis data termasuk pasar dan pencarian konsumen, analisis trend, keuangan, dan informasi pribadi, melaksanakan kerjasama dengan mitra Matahari yang terkait dengan program-program yang diadakan oleh Matahari, melindungi, mengidentifikasi, dan mencegah penipuan dan kegiatan kriminal lainnya, klaim dan kewajiban lainnya, membantu mendiagnosa masalah teknis dan layanan, untuk memelihara, mengoperasikan, atau mengelola situs atau aplikasi MATAHARIyang dilakukan oleh Matahari atau pihak lain yang ditentukan oleh Matahari, mengidentifikasi pengguna situs atau aplikasi MATAHARI, serta mengumpulkan informasi demografis tentang pengguna situs atau aplikasi MATAHARI, untuk cara lain yang Matahari beritahukan pada saat pengumpulan informasi.</p><p><br>Matahari tidak akan menjual atau memberikan informasi pribadi Anda kepada pihak lain, kecuali seperti yang dijelaskan dalam kebijakan privasi ini. Matahari akan berbagi informasi dengan afiliasi Matahari atau pihak lain yang melakukan layanan berdasarkan petunjuk dari Matahari. Pihak lain tersebut tidak diizinkan untuk menggunakan atau mengungkapkan informasi tersebut kecuali diperlukan untuk melakukan layanan atas nama Matahari atau untuk mematuhi persyaratan hukum. Matahari juga dapat berbagi informasi dengan pihak lain yang merupakan mitra Matahari untuk menawarkan produk atau jasa yang mungkin menarik bagi Anda<br>Matahari dapat mengungkapkan informasi jika dianggap perlu dalam kebijakan tunggal Matahari, untuk mematuhi hukum yang berlaku, peraturan, proses hukum atau permintaan pemerintah, dan peraturan yang berlaku di Matahari. Selain itu, Matahari dapat mengungkapkan informasi ketika percaya, pengungkapan diperlukan atau wajib dilakukan untuk mencegah kerusakan fisik atau kerugian finansial atau hal lainnya sehubungan dengan dugaan atau terjadinya kegiatan ilegal. Matahari juga berhak untuk mengungkapkan dan/atau mengalihkan informasi yang dimiliki apabila sebagian atau seluruh bisnis atau aset Matahari dijual atau dialihkan.<br>Matahari dapat menyimpan dan/atau memusnahkan informasi tentang Anda sesuai kebijakan yang berlaku atau jika diperlukan.</p><p>&nbsp;</p><h2><strong>UPDATE KEBIJAKAN PRIVASI INI</strong></h2><p>Kebijakan Privasi ini mungkin diperbarui secara berkala dan tanpa pemberitahuan sebelumnya kepada Anda untuk mencerminkan perubahan dalam praktik informasi pribadi. Matahari akan menampilkan pemberitahuan di bagian info profil website untuk memberitahu Anda tentang perubahan terhadap Kebijakan Privasi dan menunjukkan di bagian atas Kebijakan saat ketika Kebijakan Privasi ini terakhir diperbarui. Kebijakan Privasi ini merupakan satu kesatuan dan menjadi bagian yang tidak terpisahkan dari Syarat dan Ketentuan Penggunaan situs dan aplikasi MATAHARI.</p>', 'privacy-policy'),
(5, 'Syarat dan Ketentuan', '<h2><strong>SYARAT DAN KETENTUAN SITUS DAN APLIKASI</strong></h2><p>Selamat datang dan terima kasih telah mengunjungi situs/aplikasi MATAHARI. Silahkan membaca Syarat dan Ketentuan ini dengan seksama. Syarat dan Ketentuan ini mengatur akses, penelusuran, penggunaan, dan pembelian barang-barang yang ditawarkan atau dijual di www.MATAHARI.com kepada Anda. Dengan mengakses, menelusuri, dan menggunakan situs/aplikasi MATAHARI ini, berarti Anda telah membaca, mengerti, dan setuju untuk tunduk dan terikat pada Syarat dan Ketentuan ini, dan Anda juga setuju untuk tidak mempengaruhi, mengganggu, atau berusaha mempengaruhi atau mengganggu jalannya situs/aplikasi MATAHARI dengan cara apapun. Jika Anda tidak menyetujui salah satu, sebagian, atau seluruh isi Syarat dan Ketentuan ini, maka Anda tidak diperkenankan untuk mengakses, menelusuri atau menggunakan situs/aplikasi MATAHARI ini. Akses, penelusuran, dan penggunaan situs/aplikasi MATAHARI ini hanya untuk penggunaan pribadi Anda. Anda tidak diperkenankan untuk mendistribusikan, memodifikasi, menjual, atau mengirimkan apapun yang Anda akses dari situs/aplikasi MATAHARI ini, termasuk tetapi tidak terbatas pada teks, gambar, audio, dan video untuk keperluan bisnis, komersial, publik atau kepeluan non-personal lainnya.</p><p><br>Penggunaan konten situs/aplikasi MATAHARI, logo MATAHARI, merek layanan dan/atau merek dagang yang tidak sah dapat melanggar undang-undang hak kekayaan intelektual, hak cipta, merek, privasi, publisitas, hukum perdata dan pidana tertentu. Syarat dan Ketentuan ini termasuk hak kekayaan intelektual milik MATAHARI yang dilindungi hak cipta. Setiap penggunaan Syarat dan Ketentuan ini oleh pihak manapun, baik sebagian maupun seluruhnya, tidak diizinkan. Pelanggaran atas hak atas kekayaan intelektual MATAHARI ini dapat dikenakan tindakan atau sanksi berdasarkan ketentuan hukum yang berlaku.<br>Anda perlu mengunjungi halaman ini secara berkala untuk mengetahui setiap perubahan Syarat dan Ketentuan ini.</p>', 'terms'),
(6, 'Cara Berbelanja', '<p>Anda bisa mengklik “Blanja sekarang” di blanja.com untuk membeli produk, atau Anda bisa menambahkan produk ke Favorit dahulu lalu menempatkan pesanan.</p><p><strong>1. Blanja sekarang</strong></p><p>1.1 Jika Anda ingin membeli produk langsung ketika Anda melihatnya di Product Detail Page (gambar di bawah), Anda bisa mengklik “Blanja sekarang” setelah Anda memilih atribut, jumlah, dll. dari produk tersebut.</p><p>&nbsp;</p><p>1.2 Setelah Anda mengkonfirmasi alamat pengiriman, informasi pesanan dan informasi lainnya, klik “Selanjutnya”.</p><p>&nbsp;</p><p>1.3 Anda bisa masuk ke “My blanja”-“Pesanan Saya” dan melihat pesanan yang telah ditempatkan. Jika Anda sudah mengkonfirmasi jumlah dari pesanan tersebut, klik “Bayar”.</p><p>&nbsp;</p><p>1.4 Masuk ke halaman pembayaran dan bayarkan pesanan. Status pemesanan akan berubah menjadi “Telah dibayar”, yang artinya barang sedang menunggu dikirim oleh penjual.</p><p>&nbsp;</p><p>1.5 Setelah penjual berhasil mengirimkan barang, status pemesanan akan berubah menjadi “Telah dikirim”. Ketika anda menerima barang dan mengkonfirmasi, mohon klik “Konfirmasi”.</p><p>&nbsp;</p><p>Anda harus memasukkan password Dompet Blanja sebelum mengklik “Konfirmasi”.</p><p>&nbsp;</p><p>1.6 Ketika status berubah ke \"Selesai\", maka berarti transaksi telah selesai</p><p>&nbsp;</p><p><strong>Checkout beberapa produk yang telah ditambahkan ke Troli blanja secara bersamaan</strong></p><p>Anda bisa menambahkan beberapa produk ke Troli blanja dan membelinya secara bersamaan, lalu menempatkan pesanan dan membayar sekali sekaligus. Prosesnya sama seperti proses “Blanja sekarang”.</p>', 'shopping-help'),
(7, 'Pengiriman Barang', '<ol><li>Pengiriman barang untuk setiap transaksi yang terjadi melalui Platform Bukalapak menggunakan layanan pengiriman barang yang disediakan Bukalapak atas kerjasama Bukalapak dengan pihak jasa ekspedisi pengiriman barang resmi.</li><li>Pengguna memahami dan menyetujui bahwa segala bentuk peraturan terkait dengan syarat dan ketentuan pengiriman barang sepenuhnya ditentukan oleh pihak jasa ekspedisi pengiriman barang dan sepenuhnya menjadi tanggung jawab pihak jasa ekspedisi pengiriman barang.</li><li>Bukalapak hanya berperan sebagai media perantara antara Pengguna dengan pihak jasa ekspedisi pengiriman barang.</li><li>Pengguna wajib memahami, menyetujui, serta mengikuti ketentuan-ketentuan pengiriman barang yang telah dibuat oleh pihak jasa ekspedisi pengiriman barang.</li><li>Pengiriman barang atas transaksi melalui sistem Bukalapak menggunakan jasa ekspedisi pengiriman barang dilakukan dengan tujuan agar barang dapat dipantau melalui sistem Bukalapak.</li><li>Pelapak (Penjual) wajib bertanggung jawab penuh atas barang yang dikirimnya.</li><li>Pengguna memahami dan menyetujui bahwa segala bentuk kerugian yang dapat timbul akibat kerusakan ataupun kehilangan pada barang, baik pada saat pengiriman barang tengah berlangsung maupun pada saat pengiriman barang telah selesai, adalah sepenuhnya tanggung jawab pihak jasa ekspedisi pengiriman barang.</li><li>Dalam hal diperlukan untuk dilakukan proses pengembalian barang, maka Pengguna, baik Pelapak (Penjual) maupun Pembeli, diwajibkan untuk melakukan pengiriman barang langsung ke masing-masing Pembeli maupun Pelapak (Penjual). Bukalapak tidak menerima pengembalian atau pengiriman barang atas transaksi yang dilakukan oleh Pengguna dalam kondisi apa pun.</li></ol>', 'pengiriman-barang');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date_submit` datetime NOT NULL,
  `publish` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `title`, `price`, `img`, `description`, `date_submit`, `publish`, `slug`) VALUES
(1, 'paket wedding/album magnetic uk. 10RS + video dokumentasi', 1500000, '1685281567425.JPG', '', '2023-05-12 19:30:47', 1, 'paket-weddingalbum-magnetic-uk-10rs-video-dokumentasi'),
(2, 'paket wedding/album jumbo', 1500000, '1685281533084.JPG', '', '2023-05-12 19:32:09', 1, 'paket-weddingalbum-jumbo'),
(3, 'paket wedding/album magnetic uk. 10RS', 1000000, '1685281500194.JPG', '', '2023-05-12 19:38:12', 1, 'paket-weddingalbum-magnetic-uk-10rs'),
(4, 'Paket akad nikah/album mini magnetic', 500000, '1685281450258.JPG', '', '2023-05-28 09:20:39', 1, 'paket-akad-nikahalbum-mini-magnetic'),
(5, 'Paket wedding/album jumbo +  video dokumentasi', 2000000, '1685281627936.jpg', '', '2023-05-28 20:47:07', 1, 'paket-weddingalbum-jumbo-video-dokumentasi'),
(6, 'paket wedding/album magnetic uk. 10RS + video dokumentasi + video cinema', 2300000, '1685281665571.jpg', '', '2023-05-28 20:47:45', 1, 'paket-weddingalbum-magnetic-uk-10rs-video-dokumentasi-video-cinema'),
(7, 'Paket wedding/album jumbo +  video dokumentasi + video cinema', 2800000, '1685281712728.JPG', '', '2023-05-28 20:48:32', 1, 'paket-weddingalbum-jumbo-video-dokumentasi-video-cinema'),
(8, 'paket prewedding 1', 400000, '1685282544400.jpeg', '', '2023-05-28 21:02:24', 1, 'paket-prewedding-1'),
(9, 'paket prewedding 2', 750000, '1685282565361.jpeg', '', '2023-05-28 21:02:45', 1, 'paket-prewedding-2'),
(10, 'paket prewedding 3', 1500000, '1685282600884.jpeg', '', '2023-05-28 21:03:20', 1, 'paket-prewedding-3'),
(11, 'Foto wisuda', 25000, '1685282758221.jpeg', '', '2023-05-28 21:05:58', 1, 'foto-wisuda'),
(12, 'pasfoto siswa smp', 20000, '1685283030270.jpeg', '', '2023-05-28 21:10:30', 1, 'pasfoto-siswa-smp'),
(13, 'pasfoto siswa sd', 15000, '1685283063504.jpeg', '', '2023-05-28 21:11:03', 1, 'pasfoto-siswa-sd'),
(14, 'Pasfoto siswa paud/tk', 10000, '1685286316100.jpeg', '', '2023-05-28 22:05:16', 1, 'pasfoto-siswa-paudtk'),
(15, 'Pasfoto siswa sma', 20000, '1685286346418.jpeg', '', '2023-05-28 22:05:46', 1, 'pasfoto-siswa-sma');

-- --------------------------------------------------------

--
-- Table structure for table `payment_proof`
--

CREATE TABLE `payment_proof` (
  `id` int(11) NOT NULL,
  `invoice` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_proof`
--

INSERT INTO `payment_proof` (`id`, `invoice`, `file`, `status`) VALUES
(8, '1860825645', '1686451431598.jpeg', 1),
(9, '1710555353', '1686457593408.jpeg', 1),
(10, '1812792022', '1686540546767.jpeg', 1),
(11, '1720422093', '1686638193691.jpeg', 1),
(12, '2114215606', '1686639920462.jpeg', 1),
(13, '1819878549', '1687066715698.jpeg', 1),
(14, '1810342210', '1687575417940.jpeg', 1),
(15, '1797887479', '1687585655422.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price_buy` double NOT NULL,
  `price_sell` double NOT NULL,
  `total` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `product_id`, `supplier_id`, `qty`, `price_buy`, `price_sell`, `total`, `date`) VALUES
(17, 70, 2, 5, 16000, 30000, 80000, '2023-05-28'),
(18, 73, 4, 10, 3500, 5000, 35000, '2023-06-18'),
(19, 73, 4, 10, 3500, 5000, 35000, '2023-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `title`, `price`, `date`, `ket`) VALUES
(3, 'Pengeluaran lain-lain', 25000, '2023-05-28 14:27:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price_buy` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `condit` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date_submit` datetime NOT NULL,
  `publish` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `transaction` int(11) NOT NULL,
  `promo_price` int(11) NOT NULL,
  `viewer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price_buy`, `price`, `stock`, `category`, `condit`, `weight`, `img`, `description`, `date_submit`, `publish`, `slug`, `transaction`, `promo_price`, `viewer`) VALUES
(42, 'Pigura 4 R x 3 Black Brown', 15000, 25000, 10, 2, 1, 1000, '1685195712298.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 10 x 15 cm</p><p>Ukuran kaca : 18 x 35 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 20:55:12', 1, 'pigura-4-r-x-3-black-brown', 0, 0, 2),
(43, 'Pigura 4 R x 3 Black', 15000, 25000, 10, 2, 1, 1000, '1685195748003.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 10 x 15 cm</p><p>Ukuran kaca : 18 x 35 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 20:55:48', 1, 'pigura-4-r-x-3-black', 0, 0, 2),
(44, 'Pigura 4 R x3 Brown', 15000, 25000, 10, 2, 1, 1000, '1685195776222.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 10 x 15 cm</p><p>Ukuran kaca : 18 x 35 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 20:56:16', 1, 'pigura-4-r-x3-brown', 0, 0, 1),
(45, 'Pigura 4 R x 3 Gold', 15000, 25000, 10, 2, 1, 1000, '1685195826199.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 10 x 15 cm</p><p>Ukuran kaca : 18 x 35 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 20:57:06', 1, 'pigura-4-r-x-3-gold', 0, 0, 0),
(46, 'Pigura 4 R x 3 Motif Kayu', 15000, 25000, 9, 2, 1, 1000, '1685195870215.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 10 x 15 cm</p><p>Ukuran kaca : 18 x 35 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 20:57:50', 1, 'pigura-4-r-x-3-motif-kayu', 0, 0, 1),
(47, 'Pigura 4 R x 3 Silver', 15000, 25000, 10, 2, 1, 1000, '1685195895783.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 10 x 15 cm</p><p>Ukuran kaca : 18 x 35 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 20:58:15', 1, 'pigura-4-r-x-3-silver', 0, 0, 0),
(48, 'Pigura 4 R x 3 White Gold polos', 15000, 25000, 10, 2, 1, 1000, '1685195931102.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 10 x 15 cm</p><p>Ukuran kaca : 18 x 35 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 20:58:51', 1, 'pigura-4-r-x-3-white-gold-polos', 0, 0, 0),
(49, 'Pigura 4 R x 3 White Gold Ukir', 15000, 25000, 10, 2, 1, 1000, '1685195962358.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 10 x 15 cm</p><p>Ukuran kaca : 18 x 35 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 20:59:22', 1, 'pigura-4-r-x-3-white-gold-ukir', 0, 0, 0),
(50, 'Pigura 4 R x 3 White', 15000, 25000, 10, 2, 1, 1000, '1685196014301.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 10 x 15 cm</p><p>Ukuran kaca : 18 x 35 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:00:14', 1, 'pigura-4-r-x-3-white', 0, 0, 0),
(51, 'Pigura 6 R Black Brown', 13000, 20000, 10, 2, 1, 700, '1685196052000.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 15 x 20 cm</p><p>Ukuran kaca : 20 x 25 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:00:52', 1, 'pigura-6-r-black-brown', 0, 0, 0),
(52, 'Pigura 6 R Black', 13000, 20000, 10, 2, 1, 700, '1685196085125.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 15 x 20 cm</p><p>Ukuran kaca : 20 x 25 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:01:25', 1, 'pigura-6-r-black', 0, 0, 0),
(53, 'Pigura 6 R Brown', 13000, 20000, 10, 2, 1, 700, '1685196119179.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 15 x 20 cm</p><p>Ukuran kaca : 20 x 25 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:01:59', 1, 'pigura-6-r-brown', 0, 0, 0),
(54, 'Pigura 6 R Gold', 13000, 20000, 10, 2, 1, 700, '1685196247293.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 15 x 20 cm</p><p>Ukuran kaca : 20 x 25 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:04:07', 1, 'pigura-6-r-gold', 0, 0, 0),
(55, 'Pigura 6 R Motif Kayu', 13000, 20000, 10, 2, 1, 700, '1685196287376.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 15 x 20 cm</p><p>Ukuran kaca : 20 x 25 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:04:47', 1, 'pigura-6-r-motif-kayu', 0, 0, 0),
(56, 'Pigura 6 R Silver', 13000, 20000, 10, 2, 1, 700, '1685196357448.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 15 x 20 cm</p><p>Ukuran kaca : 20 x 25 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:05:57', 1, 'pigura-6-r-silver', 0, 0, 0),
(57, 'Pigura 6 R White Gold Polos', 13000, 20000, 10, 2, 1, 700, '1685196401895.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 15 x 20 cm</p><p>Ukuran kaca : 20 x 25 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:06:41', 1, 'pigura-6-r-white-gold-polos', 0, 0, 0),
(58, 'Pigura 6 R White Gold ukir', 13000, 20000, 8, 2, 1, 700, '1685196430347.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 15 x 20 cm</p><p>Ukuran kaca : 20 x 25 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:07:10', 1, 'pigura-6-r-white-gold-ukir', 2, 0, 2),
(59, 'Pigura 6 R White', 13000, 20000, 10, 2, 1, 700, '1685196458656.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 15 x 20 cm</p><p>Ukuran kaca : 20 x 25 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:07:38', 1, 'pigura-6-r-white', 0, 0, 0),
(60, 'Pigura 10 R Black', 15000, 25000, 10, 2, 1, 1000, '1685196524799.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 20 x 25 cm</p><p>Ukuran kaca : 25 x 30 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:08:44', 1, 'pigura-10-r-black', 0, 0, 0),
(61, 'Pigura 10 R Black Brown', 15000, 25000, 10, 2, 1, 1000, '1685196575131.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 20 x 25 cm</p><p>Ukuran kaca : 25 x 30 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:09:35', 1, 'pigura-10-r-black-brown', 0, 0, 0),
(62, 'Pigura 10 R Brown', 15000, 25000, 10, 2, 1, 1000, '1685196606835.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 20 x 25 cm</p><p>Ukuran kaca : 25 x 30 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:10:06', 1, 'pigura-10-r-brown', 0, 0, 0),
(63, 'Pigura 10 R Gold', 15000, 25000, 10, 2, 1, 1000, '1685196654127.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 20 x 25 cm</p><p>Ukuran kaca : 25 x 30 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:10:54', 1, 'pigura-10-r-gold', 0, 0, 0),
(64, 'Pigura 10 R Motif Kayu', 15000, 25000, 10, 2, 1, 1000, '1685196681450.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 20 x 25 cm</p><p>Ukuran kaca : 25 x 30 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:11:21', 1, 'pigura-10-r-motif-kayu', 0, 0, 0),
(65, 'Pigura 10 R Silver', 15000, 25000, 10, 2, 1, 1000, '1685196847661.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 20 x 25 cm</p><p>Ukuran kaca : 25 x 30 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:14:07', 1, 'pigura-10-r-silver', 0, 0, 1),
(66, 'Pigura 10 R White Gold polos', 15000, 25000, 10, 2, 1, 1000, '1685196962630.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 20 x 25 cm</p><p>Ukuran kaca : 25 x 30 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:16:02', 1, 'pigura-10-r-white-gold-polos', 0, 0, 0),
(67, 'Pigura 10 R White Gold Ukir', 15000, 25000, 10, 2, 1, 1000, '1685197014128.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 20 x 25 cm</p><p>Ukuran kaca : 25 x 30 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:16:54', 1, 'pigura-10-r-white-gold-ukir', 0, 0, 0),
(68, 'Pigura 10 R White', 15000, 25000, 10, 2, 1, 1000, '1685197088437.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 20 x 25 cm</p><p>Ukuran kaca : 25 x 30 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:18:08', 1, 'pigura-10-r-white', 0, 0, 1),
(69, 'Pigura 10 RS Black Brown', 16000, 30000, 10, 2, 1, 1000, '1685197180868.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 20 x 25 cm</p><p>Ukuran kaca : 25 x 30 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:19:40', 1, 'pigura-10-rs-black-brown', 0, 0, 0),
(70, 'Pigura 10 RS Black', 16000, 30000, 15, 2, 1, 1000, '1685197211611.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 20 x 25 cm</p><p>Ukuran kaca : 25 x 30 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-05-27 21:20:11', 1, 'pigura-10-rs-black', 0, 0, 1),
(71, 'Album magnetic', 65000, 75000, 9, 3, 1, 1200, '1685284667045.jpeg', '<p>Album magnetic isi 80 foto ukuran 4R atau isi 20 foto ukuran 10RS</p>', '2023-05-28 21:37:47', 1, 'album-magnetic', 1, 0, 1),
(72, 'CD Label', 30000, 35000, 10, 6, 1, 500, '1685284719107.jpeg', '', '2023-05-28 21:38:39', 1, 'cd-label', 0, 0, 0),
(73, 'CD Case', 3500, 5000, 9, 6, 1, 100, '1685284763854.jpeg', '', '2023-05-28 21:39:23', 1, 'cd-case', 46, 3500, 207),
(74, 'Kertas foto silky 260 gsm', 59000, 65000, 10, 3, 1, 300, '1685284820544.jpeg', '', '2023-05-28 21:40:20', 1, 'kertas-foto-silky-260-gsm', 0, 0, 1),
(75, 'Pigura 10 RS Brown', 16000, 30000, 10, 2, 1, 1000, '1685762823164.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 20 x 30 cm</p><p>Ukuran kaca : 25 x 35 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 10:27:03', 1, 'pigura-10-rs-brown', 0, 0, 0),
(76, 'Pigura 10 RS Gold', 16000, 30000, 10, 2, 1, 1000, '1685763117058.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 20 x 30 cm</p><p>Ukuran kaca : 25 x 35 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 10:31:57', 1, 'pigura-10-rs-gold', 0, 0, 0),
(77, 'Pigura 10 RS Motif Kayu', 16000, 30000, 10, 2, 1, 1000, '1685763352723.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 20 x 30 cm</p><p>Ukuran kaca : 25 x 35 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 10:35:52', 1, 'pigura-10-rs-motif-kayu', 0, 0, 0),
(78, 'Pigura 10 RS Silver', 16000, 30000, 10, 2, 1, 1000, '1685763864801.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 20 x 30 cm</p><p>Ukuran kaca : 25 x 35 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 10:44:24', 1, 'pigura-10-rs-silver', 0, 0, 0),
(79, 'Pigura 10 RS White Gold Polos', 16000, 30000, 10, 2, 1, 1000, '1685764045130.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 20 x 30 cm</p><p>Ukuran kaca : 25 x 35 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 10:47:25', 1, 'pigura-10-rs-white-gold-polos', 0, 0, 0),
(80, 'Pigura 10 RS White Gold Ukir', 16000, 30000, 10, 2, 1, 1000, '1685764609589.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 20 x 30 cm</p><p>Ukuran kaca : 25 x 35 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 10:56:49', 1, 'pigura-10-rs-white-gold-ukir', 0, 0, 0),
(81, 'Pigura 10 RS White', 16000, 30000, 10, 2, 1, 1000, '1685764655428.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 20 x 30 cm</p><p>Ukuran kaca : 25 x 35 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 10:57:35', 1, 'pigura-10-rs-white', 0, 0, 0),
(82, 'Pigura 12 R Black', 30000, 45000, 10, 2, 1, 1800, '1685764753063.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 30 x 40 cm</p><p>Ukuran kaca : 45 x 45 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 10:59:13', 1, 'pigura-12-r-black', 0, 0, 0),
(83, 'Pigura 12 R Black Brown', 30000, 45000, 10, 2, 1, 1800, '1685764789016.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 30 x 40 cm</p><p>Ukuran kaca : 45 x 45 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 10:59:49', 1, 'pigura-12-r-black-brown', 0, 0, 0),
(84, 'Pigura 12 R Brown', 30000, 45000, 10, 2, 1, 1800, '1685765044146.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 30 x 40 cm</p><p>Ukuran kaca : 45 x 45 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 11:04:04', 1, 'pigura-12-r-brown', 0, 0, 0),
(85, 'Pigura 10 R Gold', 30000, 45000, 10, 2, 1, 1800, '1685768209640.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 30 x 40 cm</p><p>Ukuran kaca : 45 x 45 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 11:56:49', 1, 'pigura-10-r-gold', 0, 0, 0),
(86, 'Pigura 12 R Motif Kayu', 30000, 45000, 10, 2, 1, 1800, '1685768413212.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 30 x 40 cm</p><p>Ukuran kaca : 45 x 45 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 12:00:13', 1, 'pigura-12-r-motif-kayu', 0, 0, 0),
(87, 'Pigura 10 R Silver', 30000, 45000, 10, 2, 1, 1800, '1685768463505.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 30 x 40 cm</p><p>Ukuran kaca : 45 x 45 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 12:01:03', 1, 'pigura-10-r-silver', 0, 0, 0),
(88, 'Pigura 12 R White Gold Polos', 30000, 45000, 10, 2, 1, 1800, '1685768517442.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 30 x 40 cm</p><p>Ukuran kaca : 45 x 45 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 12:01:57', 1, 'pigura-12-r-white-gold-polos', 0, 0, 0),
(89, 'Pigura 12 R White Gold Ukir', 30000, 45000, 10, 2, 1, 1800, '1685768566159.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 30 x 40 cm</p><p>Ukuran kaca : 45 x 45 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 12:02:46', 1, 'pigura-12-r-white-gold-ukir', 0, 0, 1),
(90, 'Pigura 12 R White', 30000, 45000, 10, 2, 1, 1800, '1685768601009.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 30 x 40 cm</p><p>Ukuran kaca : 45 x 45 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 12:03:21', 1, 'pigura-12-r-white', 0, 0, 0),
(91, 'Pigura 12 RS Black Brown', 32000, 50000, 10, 2, 1, 1800, '1685768755235.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 30 x 45 cm</p><p>Ukuran kaca : 45 x 50 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 12:05:55', 1, 'pigura-12-rs-black-brown', 0, 0, 0),
(92, 'Pigura 12 RS Black', 32000, 50000, 10, 2, 1, 1800, '1685768808386.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 30 x 45 cm</p><p>Ukuran kaca : 45 x 50 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 12:06:48', 1, 'pigura-12-rs-black', 0, 0, 0),
(93, 'Pigura 12 RS Brown', 32000, 50000, 10, 2, 1, 1800, '1685768849138.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 30 x 45 cm</p><p>Ukuran kaca : 45 x 50 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 12:07:29', 1, 'pigura-12-rs-brown', 0, 0, 0),
(94, 'Pigura 12 RS Gold', 32000, 50000, 10, 2, 1, 1800, '1685768890926.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 30 x 45 cm</p><p>Ukuran kaca : 45 x 50 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 12:08:10', 1, 'pigura-12-rs-gold', 0, 0, 1),
(95, 'Pigura 12 RS Motif Kayu', 32000, 50000, 10, 2, 1, 1800, '1685768934196.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 30 x 45 cm</p><p>Ukuran kaca : 45 x 50 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 12:08:54', 1, 'pigura-12-rs-motif-kayu', 0, 0, 0),
(96, 'Pigura 12 RS Silver', 32000, 50000, 10, 2, 1, 1800, '1685768978960.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 30 x 45 cm</p><p>Ukuran kaca : 45 x 50 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 12:09:38', 1, 'pigura-12-rs-silver', 0, 0, 0),
(97, 'Pigura 12 RS White Gold Polos', 32000, 50000, 10, 2, 1, 1800, '1685769016304.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 30 x 45 cm</p><p>Ukuran kaca : 45 x 50 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 12:10:16', 1, 'pigura-12-rs-white-gold-polos', 0, 0, 0),
(98, 'Pigura 12 RS White Gold Ukir', 32000, 50000, 10, 2, 1, 1800, '1685769058174.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 30 x 45 cm</p><p>Ukuran kaca : 45 x 50 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 12:10:58', 1, 'pigura-12-rs-white-gold-ukir', 0, 0, 2),
(99, 'Pigura 12 RS White', 32000, 50000, 10, 2, 1, 1800, '1685769101390.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 3cm</p><p>Ukuran : 30 x 45 cm</p><p>Ukuran kaca : 45 x 50 cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 12:11:41', 1, 'pigura-12-rs-white', 0, 0, 0),
(100, 'Pigura 16RS Brown', 75000, 125000, 10, 2, 1, 2500, '1685769159470.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 4cm + 3cm</p><p>Ukuran : 40 x 60cm</p><p>Ukuran kaca : 40 x 60cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 12:12:39', 1, 'pigura-16rs-brown', 0, 0, 0),
(101, 'Pigura 16 RS Brown', 75000, 125000, 10, 2, 1, 2500, '1685769202801.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 4cm + 3cm</p><p>Ukuran : 40 x 60cm</p><p>Ukuran kaca : 40 x 60cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 12:13:22', 1, 'pigura-16-rs-brown', 0, 0, 0),
(102, 'Pigura 16 RS Gold', 75000, 125000, 10, 2, 1, 2500, '1685769255510.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 4cm + 3cm</p><p>Ukuran : 40 x 60cm</p><p>Ukuran kaca : 40 x 60cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 12:14:15', 1, 'pigura-16-rs-gold', 0, 0, 0),
(103, 'Pigura 16 RS Silver', 75000, 125000, 10, 2, 1, 2500, '1685769291607.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 4cm + 3cm</p><p>Ukuran : 40 x 60cm</p><p>Ukuran kaca : 40 x 60cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 12:14:51', 1, 'pigura-16-rs-silver', 0, 0, 11),
(104, 'Pigura 16 RS White', 75000, 125000, 9, 2, 1, 2500, '1685769332393.jpeg', '<p>Bahan : Fiber</p><p>Lebar : 4cm + 3cm</p><p>Ukuran : 40 x 60cm</p><p>Ukuran kaca : 40 x 60cm</p><p>Tebal kaca : 2mm</p><p>Bagian Belakang : Triplek</p><p>Tebal Triplek : 3mm</p>', '2023-06-03 12:15:32', 1, 'pigura-16-rs-white', 1, 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `regencies`
--

CREATE TABLE `regencies` (
  `id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regencies`
--

INSERT INTO `regencies` (`id`, `name`) VALUES
('1101', 'KABUPATEN SIMEULUE'),
('1102', 'KABUPATEN ACEH SINGKIL'),
('1103', 'KABUPATEN ACEH SELATAN'),
('1104', 'KABUPATEN ACEH TENGGARA'),
('1105', 'KABUPATEN ACEH TIMUR'),
('1106', 'KABUPATEN ACEH TENGAH'),
('1107', 'KABUPATEN ACEH BARAT'),
('1108', 'KABUPATEN ACEH BESAR'),
('1109', 'KABUPATEN PIDIE'),
('1110', 'KABUPATEN BIREUEN'),
('1111', 'KABUPATEN ACEH UTARA'),
('1112', 'KABUPATEN ACEH BARAT DAYA'),
('1113', 'KABUPATEN GAYO LUES'),
('1114', 'KABUPATEN ACEH TAMIANG'),
('1115', 'KABUPATEN NAGAN RAYA'),
('1116', 'KABUPATEN ACEH JAYA'),
('1117', 'KABUPATEN BENER MERIAH'),
('1118', 'KABUPATEN PIDIE JAYA'),
('1171', 'KOTA BANDA ACEH'),
('1172', 'KOTA SABANG'),
('1173', 'KOTA LANGSA'),
('1174', 'KOTA LHOKSEUMAWE'),
('1175', 'KOTA SUBULUSSALAM'),
('1201', 'KABUPATEN NIAS'),
('1202', 'KABUPATEN MANDAILING NATAL'),
('1203', 'KABUPATEN TAPANULI SELATAN'),
('1204', 'KABUPATEN TAPANULI TENGAH'),
('1205', 'KABUPATEN TAPANULI UTARA'),
('1206', 'KABUPATEN TOBA SAMOSIR'),
('1207', 'KABUPATEN LABUHAN BATU'),
('1208', 'KABUPATEN ASAHAN'),
('1209', 'KABUPATEN SIMALUNGUN'),
('1210', 'KABUPATEN DAIRI'),
('1211', 'KABUPATEN KARO'),
('1212', 'KABUPATEN DELI SERDANG'),
('1213', 'KABUPATEN LANGKAT'),
('1214', 'KABUPATEN NIAS SELATAN'),
('1215', 'KABUPATEN HUMBANG HASUNDUTAN'),
('1216', 'KABUPATEN PAKPAK BHARAT'),
('1217', 'KABUPATEN SAMOSIR'),
('1218', 'KABUPATEN SERDANG BEDAGAI'),
('1219', 'KABUPATEN BATU BARA'),
('1220', 'KABUPATEN PADANG LAWAS UTARA'),
('1221', 'KABUPATEN PADANG LAWAS'),
('1222', 'KABUPATEN LABUHAN BATU SELATAN'),
('1223', 'KABUPATEN LABUHAN BATU UTARA'),
('1224', 'KABUPATEN NIAS UTARA'),
('1225', 'KABUPATEN NIAS BARAT'),
('1271', 'KOTA SIBOLGA'),
('1272', 'KOTA TANJUNG BALAI'),
('1273', 'KOTA PEMATANG SIANTAR'),
('1274', 'KOTA TEBING TINGGI'),
('1275', 'KOTA MEDAN'),
('1276', 'KOTA BINJAI'),
('1277', 'KOTA PADANGSIDIMPUAN'),
('1278', 'KOTA GUNUNGSITOLI'),
('1301', 'KABUPATEN KEPULAUAN MENTAWAI'),
('1302', 'KABUPATEN PESISIR SELATAN'),
('1303', 'KABUPATEN SOLOK'),
('1304', 'KABUPATEN SIJUNJUNG'),
('1305', 'KABUPATEN TANAH DATAR'),
('1306', 'KABUPATEN PADANG PARIAMAN'),
('1307', 'KABUPATEN AGAM'),
('1308', 'KABUPATEN LIMA PULUH KOTA'),
('1309', 'KABUPATEN PASAMAN'),
('1310', 'KABUPATEN SOLOK SELATAN'),
('1311', 'KABUPATEN DHARMASRAYA'),
('1312', 'KABUPATEN PASAMAN BARAT'),
('1371', 'KOTA PADANG'),
('1372', 'KOTA SOLOK'),
('1373', 'KOTA SAWAH LUNTO'),
('1374', 'KOTA PADANG PANJANG'),
('1375', 'KOTA BUKITTINGGI'),
('1376', 'KOTA PAYAKUMBUH'),
('1377', 'KOTA PARIAMAN'),
('1401', 'KABUPATEN KUANTAN SINGINGI'),
('1402', 'KABUPATEN INDRAGIRI HULU'),
('1403', 'KABUPATEN INDRAGIRI HILIR'),
('1404', 'KABUPATEN PELALAWAN'),
('1405', 'KABUPATEN S I A K'),
('1406', 'KABUPATEN KAMPAR'),
('1407', 'KABUPATEN ROKAN HULU'),
('1408', 'KABUPATEN BENGKALIS'),
('1409', 'KABUPATEN ROKAN HILIR'),
('1410', 'KABUPATEN KEPULAUAN MERANTI'),
('1471', 'KOTA PEKANBARU'),
('1473', 'KOTA D U M A I'),
('1501', 'KABUPATEN KERINCI'),
('1502', 'KABUPATEN MERANGIN'),
('1503', 'KABUPATEN SAROLANGUN'),
('1504', 'KABUPATEN BATANG HARI'),
('1505', 'KABUPATEN MUARO JAMBI'),
('1506', 'KABUPATEN TANJUNG JABUNG TIMUR'),
('1507', 'KABUPATEN TANJUNG JABUNG BARAT'),
('1508', 'KABUPATEN TEBO'),
('1509', 'KABUPATEN BUNGO'),
('1571', 'KOTA JAMBI'),
('1572', 'KOTA SUNGAI PENUH'),
('1601', 'KABUPATEN OGAN KOMERING ULU'),
('1602', 'KABUPATEN OGAN KOMERING ILIR'),
('1603', 'KABUPATEN MUARA ENIM'),
('1604', 'KABUPATEN LAHAT'),
('1605', 'KABUPATEN MUSI RAWAS'),
('1606', 'KABUPATEN MUSI BANYUASIN'),
('1607', 'KABUPATEN BANYU ASIN'),
('1608', 'KABUPATEN OGAN KOMERING ULU SELATAN'),
('1609', 'KABUPATEN OGAN KOMERING ULU TIMUR'),
('1610', 'KABUPATEN OGAN ILIR'),
('1611', 'KABUPATEN EMPAT LAWANG'),
('1612', 'KABUPATEN PENUKAL ABAB LEMATANG ILIR'),
('1613', 'KABUPATEN MUSI RAWAS UTARA'),
('1671', 'KOTA PALEMBANG'),
('1672', 'KOTA PRABUMULIH'),
('1673', 'KOTA PAGAR ALAM'),
('1674', 'KOTA LUBUKLINGGAU'),
('1701', 'KABUPATEN BENGKULU SELATAN'),
('1702', 'KABUPATEN REJANG LEBONG'),
('1703', 'KABUPATEN BENGKULU UTARA'),
('1704', 'KABUPATEN KAUR'),
('1705', 'KABUPATEN SELUMA'),
('1706', 'KABUPATEN MUKOMUKO'),
('1707', 'KABUPATEN LEBONG'),
('1708', 'KABUPATEN KEPAHIANG'),
('1709', 'KABUPATEN BENGKULU TENGAH'),
('1771', 'KOTA BENGKULU'),
('1801', 'KABUPATEN LAMPUNG BARAT'),
('1802', 'KABUPATEN TANGGAMUS'),
('1803', 'KABUPATEN LAMPUNG SELATAN'),
('1804', 'KABUPATEN LAMPUNG TIMUR'),
('1805', 'KABUPATEN LAMPUNG TENGAH'),
('1806', 'KABUPATEN LAMPUNG UTARA'),
('1807', 'KABUPATEN WAY KANAN'),
('1808', 'KABUPATEN TULANGBAWANG'),
('1809', 'KABUPATEN PESAWARAN'),
('1810', 'KABUPATEN PRINGSEWU'),
('1811', 'KABUPATEN MESUJI'),
('1812', 'KABUPATEN TULANG BAWANG BARAT'),
('1813', 'KABUPATEN PESISIR BARAT'),
('1871', 'KOTA BANDAR LAMPUNG'),
('1872', 'KOTA METRO'),
('1901', 'KABUPATEN BANGKA'),
('1902', 'KABUPATEN BELITUNG'),
('1903', 'KABUPATEN BANGKA BARAT'),
('1904', 'KABUPATEN BANGKA TENGAH'),
('1905', 'KABUPATEN BANGKA SELATAN'),
('1906', 'KABUPATEN BELITUNG TIMUR'),
('1971', 'KOTA PANGKAL PINANG'),
('2101', 'KABUPATEN KARIMUN'),
('2102', 'KABUPATEN BINTAN'),
('2103', 'KABUPATEN NATUNA'),
('2104', 'KABUPATEN LINGGA'),
('2105', 'KABUPATEN KEPULAUAN ANAMBAS'),
('2171', 'KOTA B A T A M'),
('2172', 'KOTA TANJUNG PINANG'),
('3101', 'KABUPATEN KEPULAUAN SERIBU'),
('3171', 'KOTA JAKARTA SELATAN'),
('3172', 'KOTA JAKARTA TIMUR'),
('3173', 'KOTA JAKARTA PUSAT'),
('3174', 'KOTA JAKARTA BARAT'),
('3175', 'KOTA JAKARTA UTARA'),
('3201', 'KABUPATEN BOGOR'),
('3202', 'KABUPATEN SUKABUMI'),
('3203', 'KABUPATEN CIANJUR'),
('3204', 'KABUPATEN BANDUNG'),
('3205', 'KABUPATEN GARUT'),
('3206', 'KABUPATEN TASIKMALAYA'),
('3207', 'KABUPATEN CIAMIS'),
('3208', 'KABUPATEN KUNINGAN'),
('3209', 'KABUPATEN CIREBON'),
('3210', 'KABUPATEN MAJALENGKA'),
('3211', 'KABUPATEN SUMEDANG'),
('3212', 'KABUPATEN INDRAMAYU'),
('3213', 'KABUPATEN SUBANG'),
('3214', 'KABUPATEN PURWAKARTA'),
('3215', 'KABUPATEN KARAWANG'),
('3216', 'KABUPATEN BEKASI'),
('3217', 'KABUPATEN BANDUNG BARAT'),
('3218', 'KABUPATEN PANGANDARAN'),
('3271', 'KOTA BOGOR'),
('3272', 'KOTA SUKABUMI'),
('3273', 'KOTA BANDUNG'),
('3274', 'KOTA CIREBON'),
('3275', 'KOTA BEKASI'),
('3276', 'KOTA DEPOK'),
('3277', 'KOTA CIMAHI'),
('3278', 'KOTA TASIKMALAYA'),
('3279', 'KOTA BANJAR'),
('3301', 'KABUPATEN CILACAP'),
('3302', 'KABUPATEN BANYUMAS'),
('3303', 'KABUPATEN PURBALINGGA'),
('3304', 'KABUPATEN BANJARNEGARA'),
('3305', 'KABUPATEN KEBUMEN'),
('3306', 'KABUPATEN PURWOREJO'),
('3307', 'KABUPATEN WONOSOBO'),
('3308', 'KABUPATEN MAGELANG'),
('3309', 'KABUPATEN BOYOLALI'),
('3310', 'KABUPATEN KLATEN'),
('3311', 'KABUPATEN SUKOHARJO'),
('3312', 'KABUPATEN WONOGIRI'),
('3313', 'KABUPATEN KARANGANYAR'),
('3314', 'KABUPATEN SRAGEN'),
('3315', 'KABUPATEN GROBOGAN'),
('3316', 'KABUPATEN BLORA'),
('3317', 'KABUPATEN REMBANG'),
('3318', 'KABUPATEN PATI'),
('3319', 'KABUPATEN KUDUS'),
('3320', 'KABUPATEN JEPARA'),
('3321', 'KABUPATEN DEMAK'),
('3322', 'KABUPATEN SEMARANG'),
('3323', 'KABUPATEN TEMANGGUNG'),
('3324', 'KABUPATEN KENDAL'),
('3325', 'KABUPATEN BATANG'),
('3326', 'KABUPATEN PEKALONGAN'),
('3327', 'KABUPATEN PEMALANG'),
('3328', 'KABUPATEN TEGAL'),
('3329', 'KABUPATEN BREBES'),
('3371', 'KOTA MAGELANG'),
('3372', 'KOTA SURAKARTA'),
('3373', 'KOTA SALATIGA'),
('3374', 'KOTA SEMARANG'),
('3375', 'KOTA PEKALONGAN'),
('3376', 'KOTA TEGAL'),
('3401', 'KABUPATEN KULON PROGO'),
('3402', 'KABUPATEN BANTUL'),
('3403', 'KABUPATEN GUNUNG KIDUL'),
('3404', 'KABUPATEN SLEMAN'),
('3471', 'KOTA YOGYAKARTA'),
('3501', 'KABUPATEN PACITAN'),
('3502', 'KABUPATEN PONOROGO'),
('3503', 'KABUPATEN TRENGGALEK'),
('3504', 'KABUPATEN TULUNGAGUNG'),
('3505', 'KABUPATEN BLITAR'),
('3506', 'KABUPATEN KEDIRI'),
('3507', 'KABUPATEN MALANG'),
('3508', 'KABUPATEN LUMAJANG'),
('3509', 'KABUPATEN JEMBER'),
('3510', 'KABUPATEN BANYUWANGI'),
('3511', 'KABUPATEN BONDOWOSO'),
('3512', 'KABUPATEN SITUBONDO'),
('3513', 'KABUPATEN PROBOLINGGO'),
('3514', 'KABUPATEN PASURUAN'),
('3515', 'KABUPATEN SIDOARJO'),
('3516', 'KABUPATEN MOJOKERTO'),
('3517', 'KABUPATEN JOMBANG'),
('3518', 'KABUPATEN NGANJUK'),
('3519', 'KABUPATEN MADIUN'),
('3520', 'KABUPATEN MAGETAN'),
('3521', 'KABUPATEN NGAWI'),
('3522', 'KABUPATEN BOJONEGORO'),
('3523', 'KABUPATEN TUBAN'),
('3524', 'KABUPATEN LAMONGAN'),
('3525', 'KABUPATEN GRESIK'),
('3526', 'KABUPATEN BANGKALAN'),
('3527', 'KABUPATEN SAMPANG'),
('3528', 'KABUPATEN PAMEKASAN'),
('3529', 'KABUPATEN SUMENEP'),
('3571', 'KOTA KEDIRI'),
('3572', 'KOTA BLITAR'),
('3573', 'KOTA MALANG'),
('3574', 'KOTA PROBOLINGGO'),
('3575', 'KOTA PASURUAN'),
('3576', 'KOTA MOJOKERTO'),
('3577', 'KOTA MADIUN'),
('3578', 'KOTA SURABAYA'),
('3579', 'KOTA BATU'),
('3601', 'KABUPATEN PANDEGLANG'),
('3602', 'KABUPATEN LEBAK'),
('3603', 'KABUPATEN TANGERANG'),
('3604', 'KABUPATEN SERANG'),
('3671', 'KOTA TANGERANG'),
('3672', 'KOTA CILEGON'),
('3673', 'KOTA SERANG'),
('3674', 'KOTA TANGERANG SELATAN'),
('5101', 'KABUPATEN JEMBRANA'),
('5102', 'KABUPATEN TABANAN'),
('5103', 'KABUPATEN BADUNG'),
('5104', 'KABUPATEN GIANYAR'),
('5105', 'KABUPATEN KLUNGKUNG'),
('5106', 'KABUPATEN BANGLI'),
('5107', 'KABUPATEN KARANG ASEM'),
('5108', 'KABUPATEN BULELENG'),
('5171', 'KOTA DENPASAR'),
('5201', 'KABUPATEN LOMBOK BARAT'),
('5202', 'KABUPATEN LOMBOK TENGAH'),
('5203', 'KABUPATEN LOMBOK TIMUR'),
('5204', 'KABUPATEN SUMBAWA'),
('5205', 'KABUPATEN DOMPU'),
('5206', 'KABUPATEN BIMA'),
('5207', 'KABUPATEN SUMBAWA BARAT'),
('5208', 'KABUPATEN LOMBOK UTARA'),
('5271', 'KOTA MATARAM'),
('5272', 'KOTA BIMA'),
('5301', 'KABUPATEN SUMBA BARAT'),
('5302', 'KABUPATEN SUMBA TIMUR'),
('5303', 'KABUPATEN KUPANG'),
('5304', 'KABUPATEN TIMOR TENGAH SELATAN'),
('5305', 'KABUPATEN TIMOR TENGAH UTARA'),
('5306', 'KABUPATEN BELU'),
('5307', 'KABUPATEN ALOR'),
('5308', 'KABUPATEN LEMBATA'),
('5309', 'KABUPATEN FLORES TIMUR'),
('5310', 'KABUPATEN SIKKA'),
('5311', 'KABUPATEN ENDE'),
('5312', 'KABUPATEN NGADA'),
('5313', 'KABUPATEN MANGGARAI'),
('5314', 'KABUPATEN ROTE NDAO'),
('5315', 'KABUPATEN MANGGARAI BARAT'),
('5316', 'KABUPATEN SUMBA TENGAH'),
('5317', 'KABUPATEN SUMBA BARAT DAYA'),
('5318', 'KABUPATEN NAGEKEO'),
('5319', 'KABUPATEN MANGGARAI TIMUR'),
('5320', 'KABUPATEN SABU RAIJUA'),
('5321', 'KABUPATEN MALAKA'),
('5371', 'KOTA KUPANG'),
('6101', 'KABUPATEN SAMBAS'),
('6102', 'KABUPATEN BENGKAYANG'),
('6103', 'KABUPATEN LANDAK'),
('6104', 'KABUPATEN MEMPAWAH'),
('6105', 'KABUPATEN SANGGAU'),
('6106', 'KABUPATEN KETAPANG'),
('6107', 'KABUPATEN SINTANG'),
('6108', 'KABUPATEN KAPUAS HULU'),
('6109', 'KABUPATEN SEKADAU'),
('6110', 'KABUPATEN MELAWI'),
('6111', 'KABUPATEN KAYONG UTARA'),
('6112', 'KABUPATEN KUBU RAYA'),
('6171', 'KOTA PONTIANAK'),
('6172', 'KOTA SINGKAWANG'),
('6201', 'KABUPATEN KOTAWARINGIN BARAT'),
('6202', 'KABUPATEN KOTAWARINGIN TIMUR'),
('6203', 'KABUPATEN KAPUAS'),
('6204', 'KABUPATEN BARITO SELATAN'),
('6205', 'KABUPATEN BARITO UTARA'),
('6206', 'KABUPATEN SUKAMARA'),
('6207', 'KABUPATEN LAMANDAU'),
('6208', 'KABUPATEN SERUYAN'),
('6209', 'KABUPATEN KATINGAN'),
('6210', 'KABUPATEN PULANG PISAU'),
('6211', 'KABUPATEN GUNUNG MAS'),
('6212', 'KABUPATEN BARITO TIMUR'),
('6213', 'KABUPATEN MURUNG RAYA'),
('6271', 'KOTA PALANGKA RAYA'),
('6301', 'KABUPATEN TANAH LAUT'),
('6302', 'KABUPATEN KOTA BARU'),
('6303', 'KABUPATEN BANJAR'),
('6304', 'KABUPATEN BARITO KUALA'),
('6305', 'KABUPATEN TAPIN'),
('6306', 'KABUPATEN HULU SUNGAI SELATAN'),
('6307', 'KABUPATEN HULU SUNGAI TENGAH'),
('6308', 'KABUPATEN HULU SUNGAI UTARA'),
('6309', 'KABUPATEN TABALONG'),
('6310', 'KABUPATEN TANAH BUMBU'),
('6311', 'KABUPATEN BALANGAN'),
('6371', 'KOTA BANJARMASIN'),
('6372', 'KOTA BANJAR BARU'),
('6401', 'KABUPATEN PASER'),
('6402', 'KABUPATEN KUTAI BARAT'),
('6403', 'KABUPATEN KUTAI KARTANEGARA'),
('6404', 'KABUPATEN KUTAI TIMUR'),
('6405', 'KABUPATEN BERAU'),
('6409', 'KABUPATEN PENAJAM PASER UTARA'),
('6411', 'KABUPATEN MAHAKAM HULU'),
('6471', 'KOTA BALIKPAPAN'),
('6472', 'KOTA SAMARINDA'),
('6474', 'KOTA BONTANG'),
('6501', 'KABUPATEN MALINAU'),
('6502', 'KABUPATEN BULUNGAN'),
('6503', 'KABUPATEN TANA TIDUNG'),
('6504', 'KABUPATEN NUNUKAN'),
('6571', 'KOTA TARAKAN'),
('7101', 'KABUPATEN BOLAANG MONGONDOW'),
('7102', 'KABUPATEN MINAHASA'),
('7103', 'KABUPATEN KEPULAUAN SANGIHE'),
('7104', 'KABUPATEN KEPULAUAN TALAUD'),
('7105', 'KABUPATEN MINAHASA SELATAN'),
('7106', 'KABUPATEN MINAHASA UTARA'),
('7107', 'KABUPATEN BOLAANG MONGONDOW UTARA'),
('7108', 'KABUPATEN SIAU TAGULANDANG BIARO'),
('7109', 'KABUPATEN MINAHASA TENGGARA'),
('7110', 'KABUPATEN BOLAANG MONGONDOW SELATAN'),
('7111', 'KABUPATEN BOLAANG MONGONDOW TIMUR'),
('7171', 'KOTA MANADO'),
('7172', 'KOTA BITUNG'),
('7173', 'KOTA TOMOHON'),
('7174', 'KOTA KOTAMOBAGU'),
('7201', 'KABUPATEN BANGGAI KEPULAUAN'),
('7202', 'KABUPATEN BANGGAI'),
('7203', 'KABUPATEN MOROWALI'),
('7204', 'KABUPATEN POSO'),
('7205', 'KABUPATEN DONGGALA'),
('7206', 'KABUPATEN TOLI-TOLI'),
('7207', 'KABUPATEN BUOL'),
('7208', 'KABUPATEN PARIGI MOUTONG'),
('7209', 'KABUPATEN TOJO UNA-UNA'),
('7210', 'KABUPATEN SIGI'),
('7211', 'KABUPATEN BANGGAI LAUT'),
('7212', 'KABUPATEN MOROWALI UTARA'),
('7271', 'KOTA PALU'),
('7301', 'KABUPATEN KEPULAUAN SELAYAR'),
('7302', 'KABUPATEN BULUKUMBA'),
('7303', 'KABUPATEN BANTAENG'),
('7304', 'KABUPATEN JENEPONTO'),
('7305', 'KABUPATEN TAKALAR'),
('7306', 'KABUPATEN GOWA'),
('7307', 'KABUPATEN SINJAI'),
('7308', 'KABUPATEN MAROS'),
('7309', 'KABUPATEN PANGKAJENE DAN KEPULAUAN'),
('7310', 'KABUPATEN BARRU'),
('7311', 'KABUPATEN BONE'),
('7312', 'KABUPATEN SOPPENG'),
('7313', 'KABUPATEN WAJO'),
('7314', 'KABUPATEN SIDENRENG RAPPANG'),
('7315', 'KABUPATEN PINRANG'),
('7316', 'KABUPATEN ENREKANG'),
('7317', 'KABUPATEN LUWU'),
('7318', 'KABUPATEN TANA TORAJA'),
('7322', 'KABUPATEN LUWU UTARA'),
('7325', 'KABUPATEN LUWU TIMUR'),
('7326', 'KABUPATEN TORAJA UTARA'),
('7371', 'KOTA MAKASSAR'),
('7372', 'KOTA PAREPARE'),
('7373', 'KOTA PALOPO'),
('7401', 'KABUPATEN BUTON'),
('7402', 'KABUPATEN MUNA'),
('7403', 'KABUPATEN KONAWE'),
('7404', 'KABUPATEN KOLAKA'),
('7405', 'KABUPATEN KONAWE SELATAN'),
('7406', 'KABUPATEN BOMBANA'),
('7407', 'KABUPATEN WAKATOBI'),
('7408', 'KABUPATEN KOLAKA UTARA'),
('7409', 'KABUPATEN BUTON UTARA'),
('7410', 'KABUPATEN KONAWE UTARA'),
('7411', 'KABUPATEN KOLAKA TIMUR'),
('7412', 'KABUPATEN KONAWE KEPULAUAN'),
('7413', 'KABUPATEN MUNA BARAT'),
('7414', 'KABUPATEN BUTON TENGAH'),
('7415', 'KABUPATEN BUTON SELATAN'),
('7471', 'KOTA KENDARI'),
('7472', 'KOTA BAUBAU'),
('7501', 'KABUPATEN BOALEMO'),
('7502', 'KABUPATEN GORONTALO'),
('7503', 'KABUPATEN POHUWATO'),
('7504', 'KABUPATEN BONE BOLANGO'),
('7505', 'KABUPATEN GORONTALO UTARA'),
('7571', 'KOTA GORONTALO'),
('7601', 'KABUPATEN MAJENE'),
('7602', 'KABUPATEN POLEWALI MANDAR'),
('7603', 'KABUPATEN MAMASA'),
('7604', 'KABUPATEN MAMUJU'),
('7605', 'KABUPATEN MAMUJU UTARA'),
('7606', 'KABUPATEN MAMUJU TENGAH'),
('8101', 'KABUPATEN MALUKU TENGGARA BARAT'),
('8102', 'KABUPATEN MALUKU TENGGARA'),
('8103', 'KABUPATEN MALUKU TENGAH'),
('8104', 'KABUPATEN BURU'),
('8105', 'KABUPATEN KEPULAUAN ARU'),
('8106', 'KABUPATEN SERAM BAGIAN BARAT'),
('8107', 'KABUPATEN SERAM BAGIAN TIMUR'),
('8108', 'KABUPATEN MALUKU BARAT DAYA'),
('8109', 'KABUPATEN BURU SELATAN'),
('8171', 'KOTA AMBON'),
('8172', 'KOTA TUAL'),
('8201', 'KABUPATEN HALMAHERA BARAT'),
('8202', 'KABUPATEN HALMAHERA TENGAH'),
('8203', 'KABUPATEN KEPULAUAN SULA'),
('8204', 'KABUPATEN HALMAHERA SELATAN'),
('8205', 'KABUPATEN HALMAHERA UTARA'),
('8206', 'KABUPATEN HALMAHERA TIMUR'),
('8207', 'KABUPATEN PULAU MOROTAI'),
('8208', 'KABUPATEN PULAU TALIABU'),
('8271', 'KOTA TERNATE'),
('8272', 'KOTA TIDORE KEPULAUAN'),
('9101', 'KABUPATEN FAKFAK'),
('9102', 'KABUPATEN KAIMANA'),
('9103', 'KABUPATEN TELUK WONDAMA'),
('9104', 'KABUPATEN TELUK BINTUNI'),
('9105', 'KABUPATEN MANOKWARI'),
('9106', 'KABUPATEN SORONG SELATAN'),
('9107', 'KABUPATEN SORONG'),
('9108', 'KABUPATEN RAJA AMPAT'),
('9109', 'KABUPATEN TAMBRAUW'),
('9110', 'KABUPATEN MAYBRAT'),
('9111', 'KABUPATEN MANOKWARI SELATAN'),
('9112', 'KABUPATEN PEGUNUNGAN ARFAK'),
('9171', 'KOTA SORONG'),
('9401', 'KABUPATEN MERAUKE'),
('9402', 'KABUPATEN JAYAWIJAYA'),
('9403', 'KABUPATEN JAYAPURA'),
('9404', 'KABUPATEN NABIRE'),
('9408', 'KABUPATEN KEPULAUAN YAPEN'),
('9409', 'KABUPATEN BIAK NUMFOR'),
('9410', 'KABUPATEN PANIAI'),
('9411', 'KABUPATEN PUNCAK JAYA'),
('9412', 'KABUPATEN MIMIKA'),
('9413', 'KABUPATEN BOVEN DIGOEL'),
('9414', 'KABUPATEN MAPPI'),
('9415', 'KABUPATEN ASMAT'),
('9416', 'KABUPATEN YAHUKIMO'),
('9417', 'KABUPATEN PEGUNUNGAN BINTANG'),
('9418', 'KABUPATEN TOLIKARA'),
('9419', 'KABUPATEN SARMI'),
('9420', 'KABUPATEN KEEROM'),
('9426', 'KABUPATEN WAROPEN'),
('9427', 'KABUPATEN SUPIORI'),
('9428', 'KABUPATEN MAMBERAMO RAYA'),
('9429', 'KABUPATEN NDUGA'),
('9430', 'KABUPATEN LANNY JAYA'),
('9431', 'KABUPATEN MAMBERAMO TENGAH'),
('9432', 'KABUPATEN YALIMO'),
('9433', 'KABUPATEN PUNCAK'),
('9434', 'KABUPATEN DOGIYAI'),
('9435', 'KABUPATEN INTAN JAYA'),
('9436', 'KABUPATEN DEIYAI'),
('9471', 'KOTA JAYAPURA');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id` int(11) NOT NULL,
  `rekening` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id`, `rekening`, `name`, `number`) VALUES
(1, 'DANA', 'Irmawati', '082316683706'),
(3, 'GOPAY', 'Abdul Manan', '082330515981'),
(8, 'BRI', 'Abdul Manan', '6511010117247533');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `promo` int(11) NOT NULL,
  `promo_time` varchar(40) NOT NULL,
  `short_desc` text NOT NULL,
  `address` text NOT NULL,
  `regency_id` int(11) NOT NULL,
  `verify` int(11) NOT NULL,
  `logo` varchar(30) NOT NULL,
  `favicon` varchar(30) NOT NULL,
  `default_ongkir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `promo`, `promo_time`, `short_desc`, `address`, `regency_id`, `verify`, `logo`, `favicon`, `default_ongkir`) VALUES
(1, 0, '2023-06-26T09:43', 'Toko pigura terlengkap dan terpercaya. Dapatkan penawaran dengan kualitas terbaik. RN Store hadir untuk memenuhi kebutuhan Anda.', 'Dsn. Gading RT 12 RW 04 Desa Wonorejo Kec. Maron Kab. Probolinggo Jawa Timur 67276', 369, 1, '1675923514961.JPG', '1675923527658.JPG', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `icon` varchar(20) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id`, `name`, `icon`, `link`) VALUES
(1, 'Facebook', 'facebook-f', 'https://www.facebook.com/manan.monthakendikpesseh?'),
(5, 'Instagram', 'instagram', 'https://instagram.com/rn_pigura?igshid=MzRlODBiNWF');

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `submenu` int(11) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_subs` datetime NOT NULL,
  `code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`, `date_subs`, `code`) VALUES
(0, 'Semua Email', '2023-02-01 10:45:32', ''),
(26, 'widyaputri.020601@gmail.com', '2023-02-09 14:26:13', '16759275731614198883'),
(27, 'widyaputri.pratama@gmail.com', '2023-02-09 14:36:29', '1675928189948944172'),
(30, 'e31201146@srudent.polije.ac.id', '2023-06-13 13:44:54', '16866386941418052466'),
(31, 'e31201146@student.polije.ac.id', '2023-06-13 13:47:13', '1686638833279071015');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `nama`, `jk`, `no_telp`, `alamat`) VALUES
(2, 'Muriyanto', 'Laki-Laki', '085252481865', 'Wonorejo'),
(3, 'Memori Album', 'Laki-Laki', '085603002867', 'Semarang'),
(4, 'IQ Tronic', 'Laki-Laki', '082332511151', 'Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `photo`, `content`) VALUES
(1, 'Aliyah Wati - Jakarta', '', 'Sist makasih barangnya udah sampe, bagus dan lucu2. Temenku aja pada ngiri. Semoga sukses selalu buat eveshopashopnya. Sory baru bisa kasih kabar.'),
(2, 'Een Enarsih - Banten', '', 'Sis barang ny dh sya trima,mkasih bnyak untuk layan’n ny sngat m’muaskan untuk sya,smu prtanya’n di jwab…\r\nRespon ny jga sngat baek,smoga usaha ny smakin brkembang'),
(3, 'Ayung Darma - Pekalongan', '', 'Oia mf sis,Nich brg nya brsan aja ampe, mksh ya\r\nBrg nya bgs banget, sesuai yg digambarnya, makasih ya'),
(4, 'Via Garolita - Cimahi', '', 'Sistaaaa……\r\nbaju nyaa udah smpee…\r\nbguss dechh…suka bgt…\r\nmaaksiih yaa'),
(5, 'Dewanti - Solo', '', 'Barang tidak mengecewakan.. cs nya fast respon, resi besoknya langsung di share tanpa kita tanya.. mantap tokohijabku'),
(6, 'Dina - Malang', '', 'Respon cs baik, tapi untuk pengirimannya agak lama, padahal pakai ekspedisi ”sicepat”\r\nharusnya bisa cepat sampainya.');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `id_invoice`, `user`, `product_name`, `price`, `qty`, `slug`, `ket`, `img`) VALUES
(76, 1858745447, 18, 'CD Case', 5000, 1, 'cd-case', '', '1685284763854.jpeg'),
(77, 1845564381, 18, 'CD Case', 5000, 1, 'cd-case', '', '1685284763854.jpeg'),
(78, 1737704910, 17, 'CD Case', 5000, 1, 'cd-case', '', '1685284763854.jpeg'),
(79, 1860825645, 18, 'CD Case', 5000, 1, 'cd-case', '', '1685284763854.jpeg'),
(80, 1710555353, 17, 'Pigura 6 R White Gold ukir', 20000, 1, 'pigura-6-r-white-gold-ukir', '', '1685196430347.jpeg'),
(81, 1812792022, 18, 'Pigura 12 R White Gold Ukir', 45000, 1, 'pigura-12-r-white-gold-ukir', '', '1685768566159.jpeg'),
(82, 1720422093, 17, 'Pigura 6 R White Gold ukir', 20000, 1, 'pigura-6-r-white-gold-ukir', '', '1685196430347.jpeg'),
(83, 2114215606, 21, 'Pigura 16 RS White', 120000, 1, 'pigura-16-rs-white', '', '1685769332393.jpeg'),
(84, 2114215606, 21, 'Album magnetic', 75000, 1, 'album-magnetic', '', '1685284667045.jpeg'),
(85, 2114215606, 21, 'CD Case', 4000, 24, 'cd-case', '', '1685284763854.jpeg'),
(86, 1819878549, 18, 'CD Case', 4000, 10, 'cd-case', '', '1685284763854.jpeg'),
(90, 1810342210, 18, 'CD Case', 5000, 1, 'cd-case', '', '1685284763854.jpeg'),
(91, 1797887479, 17, 'CD Case', 5000, 5, 'cd-case', '', '1685284763854.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date_register` datetime NOT NULL,
  `is_activate` int(1) NOT NULL,
  `token` varchar(100) NOT NULL,
  `token_reset` varchar(100) NOT NULL,
  `cookie` varchar(100) NOT NULL,
  `photo_profile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `date_register`, `is_activate`, `token`, `token_reset`, `cookie`, `photo_profile`) VALUES
(12, '401XD Group', '401xd-group', 'member@gmail.com', '$2y$10$cIJ4gL/TvfCzvhlFIlS96uCB8.1erZ.4m0PCuqgthorGXqex37iNm', '2021-05-19 22:20:52', 1, 'ef68bc405b7e534fb2010ef57ca1f020cb29653f', '', 'SfhZSWn56LyY2qDH6nMocwj38JKbNcltGsQhIv9duUXBROzTG4f77xLgHAlvFWm0', 'default.png'),
(17, 'widya', 'widya', 'widyaputri.020601@gmail.com', '$2y$10$rSa9v4BSUQizxIx3rg0z9ugkEcNVPRqUeiRm1CSzmwDrH4jV/2wVm', '2023-02-09 14:26:13', 1, 'd11bf94b7d8fc1c2fb2815f3f54d8d5c6b692791', '', '', 'default.png'),
(18, 'putri', 'putri', 'widyaputri.pratama@gmail.com', '$2y$10$oo9APNFLTD9nYrl.CLoee.SQ7S66hj52rVpmxLnoPKYkCT7KGZ51y', '2023-02-09 14:36:29', 1, '8f6c172456bea189440b46e07ac46c7211c41e38', '', '', 'default.png'),
(20, 'Widya Putri Pratama', 'widya-putri-pratama', 'e31201146@srudent.polije.ac.id', '$2y$10$J4zQVEvpbDUPhI608K9l1.M9NLhYHEbpUjAAbK/RPpRxDKWA9g7v.', '2023-06-13 13:44:54', 0, 'c60f0e8789670b58de99e829c0136f0ab1374a50', '', '', 'default.png'),
(21, 'Widya ', 'widya208', 'e31201146@student.polije.ac.id', '$2y$10$c2sqLW0Im1egntWAsD2Np.WjSG4iL/RQEoHvTAjSRS.QbUqC4hNfO', '2023-06-13 13:47:13', 1, '089fe39aa2e494ce777cb5aadcca93115749c939', '', '', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cod`
--
ALTER TABLE `cod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cost_delivery`
--
ALTER TABLE `cost_delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_send`
--
ALTER TABLE `email_send`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fotografer`
--
ALTER TABLE `fotografer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grosir`
--
ALTER TABLE `grosir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img_paket`
--
ALTER TABLE `img_paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img_product`
--
ALTER TABLE `img_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_paket`
--
ALTER TABLE `order_paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_proof`
--
ALTER TABLE `payment_proof`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regencies`
--
ALTER TABLE `regencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cod`
--
ALTER TABLE `cod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cost_delivery`
--
ALTER TABLE `cost_delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `email_send`
--
ALTER TABLE `email_send`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fotografer`
--
ALTER TABLE `fotografer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `general`
--
ALTER TABLE `general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grosir`
--
ALTER TABLE `grosir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `img_paket`
--
ALTER TABLE `img_paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `img_product`
--
ALTER TABLE `img_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_paket`
--
ALTER TABLE `order_paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payment_proof`
--
ALTER TABLE `payment_proof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
