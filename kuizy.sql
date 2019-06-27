-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2019 at 11:44 AM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id4982417_kuizy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'kuizy', 'b80bae18a69c4a0b82e9b1d91c8b8f92'),
(2, 'su', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `bot_main`
--

CREATE TABLE `bot_main` (
  `id` int(11) NOT NULL,
  `chatId` varchar(255) NOT NULL,
  `nomor` int(11) NOT NULL,
  `kd_soal` int(11) NOT NULL,
  `jawaban` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bot_nilai`
--

CREATE TABLE `bot_nilai` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_kategori` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `nilai` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `waktu` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bot_nilai`
--

INSERT INTO `bot_nilai` (`id`, `username`, `id_kategori`, `nilai`, `waktu`, `tanggal`) VALUES
(1, 'Safriansah', '1', '7', '0', '2018-05-01 00:00:00'),
(2, 'yollafrdl', '2', '40', '0', '2018-05-01 00:00:00'),
(3, 'Safriansah', '5', '20', '0', '2018-05-01 00:00:00'),
(4, 'Safriansah', '1', '20', '0', '2018-05-01 00:00:00'),
(5, 'Safriansah', '3', '0', '0', '2018-05-01 00:00:00'),
(6, 'Safriansah', '5', '0', '0', '2018-05-01 00:00:00'),
(7, 'Safriansah', '1', '13', '0', '2018-05-01 00:00:00'),
(8, 'Safriansah', '1', '80', '0', '2018-05-02 00:00:00'),
(9, 'Safriansah', '1', '27', '18', '2018-05-02 00:00:00'),
(10, 'Safriansah', '2', '20', '35', '2018-05-02 15:14:11'),
(11, 'yollafrdl', '3', '7', '0', '2018-05-02 15:50:07'),
(12, 'drizward', '4', '13', '0', '2018-05-03 02:19:00'),
(13, 'Diananur67', '2', '13', '0', '2018-05-09 13:42:55'),
(14, 'Diananur67', '4', '33', '0', '2018-05-09 14:43:52'),
(15, 'Diananur67', '3', '13', '0', '2018-05-09 15:20:53'),
(16, 'Diananur67', '4', '33', '0', '2018-05-10 05:35:08'),
(17, 'Diananur67', '2', '7', '0', '2018-05-10 05:57:02'),
(18, 'Diananur67', '4', '27', '0', '2018-05-10 06:16:01');

-- --------------------------------------------------------

--
-- Table structure for table `bot_pointer`
--

CREATE TABLE `bot_pointer` (
  `id` int(11) NOT NULL,
  `chatId` varchar(255) NOT NULL,
  `nomor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bot_pointer`
--

INSERT INTO `bot_pointer` (`id`, `chatId`, `nomor`) VALUES
(1, '', 0),
(2, '260920894', 0),
(19, '541258470', 0),
(25, '555530901', 5),
(60, '579397257', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bot_user`
--

CREATE TABLE `bot_user` (
  `id` int(11) NOT NULL,
  `chatId` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nomor` int(11) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bot_user`
--

INSERT INTO `bot_user` (`id`, `chatId`, `username`, `nomor`, `waktu`) VALUES
(1, '260920894', 'Safriansah', 0, '2018-05-02 15:13:26'),
(7, '541258470', 'yollafrdl', 0, '2018-05-02 15:48:48'),
(33, '555530901', 'Diananur67', 0, '2018-05-10 06:14:40'),
(34, '558347530', 'drizward', 0, '2018-05-03 02:17:54'),
(35, '505239863', '', 0, '0000-00-00 00:00:00'),
(52, '475786810', '', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `forbot`
--

CREATE TABLE `forbot` (
  `id` int(11) NOT NULL,
  `pesan` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `jawab` varchar(1024) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `forbot`
--

INSERT INTO `forbot` (`id`, `pesan`, `jawab`) VALUES
(1, '/start', 'selamat datang di Kuizy! \\n /help untuk cara bermain \\n /choose untuk memilih kategori permainan'),
(2, '/help', 'pilih /choose lalu pilih jawaban yang sesuai dengan soal yang ada, kerjakan soal tersebut dengan batas waktu yang telah ditentukan, selesai!');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kd_kat` int(11) NOT NULL,
  `nama_kat` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kd_kat`, `nama_kat`) VALUES
(1, 'Alat Musik'),
(2, 'Lagu'),
(3, 'Pakaian'),
(4, 'Rumah'),
(5, 'Tari');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nilai` double NOT NULL,
  `waktu` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_user`, `id_kategori`, `nilai`, `waktu`, `tgl`) VALUES
(1, 2, 4, 53, 5, '2018-04-01'),
(2, 3, 5, 40, 88, '2018-04-01'),
(3, 2, 3, 27, 54, '2018-04-01'),
(4, 2, 1, 60, 42, '2018-04-01'),
(5, 2, 5, 40, 23, '2018-04-01'),
(6, 2, 2, 47, 48, '2018-04-01'),
(7, 3, 5, 60, 57, '2018-04-01'),
(8, 3, 1, 40, 112, '2018-04-01'),
(9, 3, 2, 67, 35, '2018-04-02'),
(10, 9, 2, 20, 1, '2018-04-02'),
(11, 9, 4, 40, 5, '2018-04-02'),
(12, 9, 1, 40, 3, '2018-04-02'),
(13, 4, 4, 87, 50, '2018-04-02'),
(14, 4, 2, 60, 1, '2018-04-02'),
(15, 4, 3, 53, 41, '2018-04-02'),
(16, 16, 2, 40, 1, '2018-04-02'),
(17, 17, 2, 47, 1, '2018-04-02'),
(18, 3, 3, 20, 110, '2018-04-02'),
(19, 17, 2, 87, 24, '2018-04-02'),
(20, 19, 3, 0, 1, '2018-04-02'),
(21, 17, 3, 13, 81, '2018-04-02'),
(22, 20, 2, 40, 1, '2018-04-02'),
(23, 21, 5, 33, 19, '2018-04-02'),
(24, 21, 2, 47, 1, '2018-04-02'),
(25, 21, 4, 60, 16, '2018-04-02'),
(26, 21, 3, 47, 21, '2018-04-02'),
(27, 21, 1, 47, 36, '2018-04-02'),
(28, 19, 4, 67, 11, '2018-04-03'),
(29, 19, 3, 53, 23, '2018-04-03'),
(30, 2, 2, 53, 1, '2018-04-03'),
(31, 1, 2, 80, 10, '2018-04-03'),
(32, 3, 4, 40, 1, '2018-04-03'),
(33, 3, 2, 40, 1, '2018-04-03'),
(34, 3, 2, 40, 114, '2018-04-03'),
(35, 3, 5, 33, 116, '2018-04-03'),
(36, 17, 2, 47, 1, '2018-04-09'),
(37, 21, 5, 40, 11, '2018-04-09'),
(38, 2, 2, 73, 1, '2018-04-11'),
(39, 17, 3, 20, 55, '2018-04-12'),
(40, 23, 2, 40, 1, '2018-04-12'),
(41, 23, 2, 47, 2, '2018-04-12'),
(42, 23, 5, 40, 82, '2018-04-12'),
(43, 23, 4, 27, 86, '2018-04-12'),
(44, 23, 1, 27, 21, '2018-04-12'),
(45, 23, 2, 47, 1, '2018-04-12'),
(46, 23, 2, 67, 7, '2018-04-12'),
(47, 23, 1, 53, 19, '2018-04-12'),
(48, 23, 4, 60, 1, '2018-04-12'),
(49, 23, 4, 40, 99, '2018-04-12'),
(50, 23, 5, 33, 115, '2018-04-12'),
(51, 23, 5, 13, 106, '2018-04-12'),
(52, 23, 5, 53, 23, '2018-04-12'),
(53, 23, 3, 7, 109, '2018-04-12'),
(54, 23, 3, 47, 3, '2018-04-12'),
(55, 17, 2, 80, 1, '2018-04-15'),
(56, 17, 4, 47, 36, '2018-04-15'),
(57, 27, 2, 53, 11, '2018-04-15'),
(58, 28, 2, 53, 6, '2018-04-15'),
(59, 3, 1, 7, 100, '2018-04-19'),
(60, 3, 4, 13, 116, '2018-04-19'),
(61, 3, 5, 13, 111, '2018-04-19'),
(62, 3, 2, 13, 79, '2018-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `kd_soal` int(11) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `pil_a` varchar(255) NOT NULL,
  `pil_b` varchar(255) NOT NULL,
  `pil_c` varchar(255) NOT NULL,
  `pil_d` varchar(255) NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`kd_soal`, `soal`, `pil_a`, `pil_b`, `pil_c`, `pil_d`, `jawaban`, `kategori`, `gambar`) VALUES
(1, 'Rumah adat yang berasal dari daerah Kalimantan Tengah adalah', 'Rumah Joglo ', 'Rumah Betang ', 'Rumah Krong Bae ', 'Rumah Bolon ', 'b', '4', 'https://i.imgur.com/uw6RLe7.jpg'),
(2, 'Rumah Gadang adalah rumah adat yang berasal dari', 'Sumatera Barat', 'Sulawesi Tengah', 'DKI Jakarta', 'Jawa Timur', 'a', '4', 'https://i.imgur.com/J6j50GT.jpg'),
(3, 'Rumah adat yang terbuat dari kayu dan ilalang adalah', 'Rumah Balieo dari Maluku', 'Rumah Tongkonan dari Gorontalo', 'Rumah Buton Malige dari Sulawesi Tenggara', 'Rumah Honai dari Papua', 'd', '4', 'https://i.imgur.com/vC2ca24.jpg'),
(4, 'Berasal dari provinsi manakah rumah Dulohupa', 'Nusa Tenggara Timur', 'Kalimantan Tengah', 'Gorontalo', 'Jawa Tengah', 'c', '4', 'https://i.imgur.com/aV8n7et.jpg'),
(6, 'Rumah adat yang dindingnya terbuat dari kayu dan dihiasi dengan lukisan dan berasal dari Provinsi Aceh adalah', 'Rumah Gadang', 'Rumah Honai', 'Rumah Joglo', 'Rumah Krong Bade', 'd', '4', 'https://i.imgur.com/2mW70m8.jpg'),
(7, 'Alat musik ketipung dipukul dengan ', 'Tangan', 'Kaki', 'Lutut', 'Siku', 'a', '1', ''),
(8, 'Rumah yang berasal dari provinsi Riau adalah', 'Rumah Doluhupa', 'Rumah Melayu Selaso', 'Rumah Badui', 'Rumah Joglo', 'b', '4', 'https://i.imgur.com/Zd7ilZ1.jpg'),
(9, 'Alat musik yang berasal dari NTT adalah', 'Gendang', 'Seruling', 'Sasando', 'Kecapi', 'c', '1', ''),
(10, 'potongan lirik lagu diatas berasal dari daerah....', 'Kalimantan Selatan', 'Kalimantan Tengah', 'Kalimantan Utara', 'Kalimantan Timur', 'a', '2', 'http://docs.google.com/uc?export=open&id=1lUhPkgRP-xqTDLGEO2y0HNV_9VomC8hG'),
(11, 'Apa judul lagu dari potongan lirik lagu tersebut?', 'Apuse', 'Gundul-Gundul Pacul', 'Suwe Ora Jamu', 'Soleram', 'b', '2', 'http://docs.google.com/uc?export=open&id=1meeqU1PZyh23pgP9IKUS5iC5sxt60NoF'),
(12, 'Tari kecak berasal dari', 'Jawa', 'Bali', 'Sumatra', 'NTB', 'b', '5', ''),
(13, 'Tari yang berasal dari jawa barat adalah ', 'Monong', 'Jaipong', 'Legong', 'Pendet', 'b', '5', ''),
(14, 'Dibawah ini lagu daerah yang berasal dari Papua Adalah', 'E Mambo  Simbo & Apuse', 'Anak Kukang & Angin Mamiri', 'Ayo Mama & Buka Pintu', 'Cublak-Cublak Suweng & Gambang Suling', 'a', '2', ''),
(15, 'Tari remo menggambarkan tentang', 'Kehidupan', 'Kemiskinan', 'Kepahlawanan', 'Kesejahteraan', 'c', '5', ''),
(16, 'Lagu diatas berasal dari daerah....', 'Maluku', 'Jawa Timur', 'Jakarta', 'Papua', 'c', '2', 'http://docs.google.com/uc?export=open&id=1kQRqs1BvW8vcjEt4x2m5TV2NyRP1HxeB'),
(17, 'Potongan lagu diatas berasal dari daerah?', 'Sulawesi Selatan', 'Maluku', 'Sumatera Barat', 'Jawa Tengah', 'b', '2', 'http://docs.google.com/uc?export=open&id=1787jnrBqGyBJy3l7RVgrLr9DRWMJkr1l'),
(18, 'Tari reog adalah tari yang berasal dari kota', 'Surabaya', 'Malang', 'Banyuwangi', 'Ponorogo', 'd', '5', ''),
(19, 'Yang bukan merupakan tari tradisional dari Bali adalah ', 'Legong', 'Pendet', 'Gambuh', 'Monong', 'd', '5', ''),
(20, 'Apa lirik selanjutnya dari potongan lagu diatas?', 'Apuse kokon dao', 'Pisang ku belum masak', 'Wuf lenso bani nema baki pase', 'Jamu Godong Telo', 'c', '2', 'http://docs.google.com/uc?export=open&id=1wlioxG4y-tnheR6BSWvIBuntAuTzkhVJ'),
(21, 'Alat musik yang berasal dari daerah jambi, dan terbuat dari tanduk kerbau adalah', 'Seruling', 'Serangko', 'Bende', 'Kecapi', 'b', '1', ''),
(24, 'Tari yang merupakan tarian sesembahan untuk dewa karena memberikan hasil panen yang berlimpah dalam setaun adalah ', 'Tari Saman', 'Tari Remo ', 'Tari Merak', 'Tari Piring', 'd', '5', ''),
(25, 'Alat musik Kecapi berasa dari daerah', 'Maluku', 'Jawa Barat', 'Lampung ', 'Sulawesi Barat', 'd', '1', ''),
(26, 'Sebutan untuk pakaian yang dipakalai oleh pria pada pakaian adat aceh adalah', 'Lanta Biro', 'Linta Baro', 'Lenta Baro', 'Lonta Boro', 'b', '3', ''),
(27, 'Dibawah ini alat musik yang berasal dari Nusa Tenggara Barat adalah', 'Genceng', 'Bonang', 'Serunai', 'Gendang', 'c', '1', ''),
(28, 'Pakaian adat biasanya digunakan untuk ', 'Pesta', 'Pernikahan', 'Berbelasungkawa', 'Ibadah', 'b', '3', ''),
(29, 'Darimanakah pakaian ewer berasal ', 'NTB', 'Papua Timur', 'Papua Barat', 'NTT', 'c', '3', ''),
(30, 'Apakah nama pakaian adat Madura', 'Pesaan ', 'Kebaya', 'Ewer', 'Sukapura', 'a', '3', ''),
(31, 'Blankon adalah penutup kepala yang biasa digunakan pada pakaian adat daerah ', 'Jawa', 'Kalimantan', 'Sulawesi', 'Sumatra', 'a', '3', ''),
(32, 'Pakaian adat dari provinsi nanggro aceh Darussalam, ulee balang, biasa digunakan oleh', 'Pelayan', 'Raja dan Keluarganya', 'Rakyat Jelata', 'Prajurit', 'b', '3', ''),
(33, 'Alat musik angklung berasal dari daerah ', 'Jawa Timur', 'Jawa Barat', 'Sumatra Utara', 'Kalimantan Selatan', 'b', '1', ''),
(39, 'Lagu tersebut berasal dari Provinsi aceh. Apa judul lagu diatas?', 'Bungong Jeumpa', 'Leleng Ma Hupaima', 'Sengko - Sengko', 'Nyok Miak', 'a', '2', 'http://docs.google.com/uc?export=open&id=1_qUbmlMP-sLBjMQTm2pDHOlz2bof6_wv'),
(40, 'Lagu \"Lir- Ilir\" berasa dari provinsi?', 'Jakarta', 'Jogjakarta', 'Jawa Tengah', 'Kalimantan', 'c', '2', ''),
(41, 'Dibawah ini yang bukan lagu dari provinsi Gorontalo adalah...', 'Dabu - Dabu', 'Moholunga', 'Tahuli Li Mama', 'Lenggang Kangkong', 'd', '2', ''),
(42, 'Alat musik Serune Kale berasal dari', 'Nanggroe Aceh Darussalam', 'Sumatra Utara', 'Sumatra Barat', 'Jawa Barat', 'a', '1', ''),
(43, 'Alat musik yang berasal dari Pulau Nias adalah', 'Aromba', 'Aramba', 'Aremba', 'Arimba', 'b', '1', ''),
(44, '\"mana dimana anak kambing saya\r\nanak kambing tuan ada di pohon waru\" lagu dari lirik disamping berasal dari provinsi?', 'Jawa Timur', 'NTT', 'Maluku', 'Papua', 'b', '2', ''),
(45, 'Berapa jumlah senar yang terdapat pada alat musik gambus', '2 - 10 Senar', '3 - 13 Senar', '3 - 12 Senar', '4 - 12 Senar', 'c', '1', ''),
(46, 'Alat musik berasal dari Minangkabau yang cara memainkannya sama dengan seruling adalah', 'Serangko', 'Saluang', 'Serune Kale', 'Serunai', 'b', '1', ''),
(47, '\"Gambang suling,\r\nKumandhang suarane\" lanjutan liri dari lagu disamping adalah...', 'Sigrak kendhangane', 'Ketemu pisan gawe gelo', 'Thulat thulit kepenak unine', 'Tandure wes sumilir', 'c', '2', ''),
(48, 'Alat musik Serangko terbuat dari', 'Tanduk Kerbau', 'Cula Badak', 'Gading Gajah', 'Tanduk Rusa', 'a', '1', ''),
(51, 'Dibawah ini yang termasuk lagu dari provinsi Jawa Barat adalah?', 'Ronggeng', 'Manuk Dadali', 'Rek Ayo Rek', 'Suwe Ora Jamu', 'b', '2', ''),
(52, 'Lagu \"Indung-Indung\" berasal dari provisi?', 'Kalimntan Barat', 'Kalimantan Tengah', 'Kalimantan Timur', 'Kalimanran Utara', 'c', '2', ''),
(53, 'Lagu diatas berasal dari provinsi?', 'Sulawesi Tenggara', 'Lampung', 'Kalimantan Timur', 'Sulawesi Selatan', 'd', '2', 'http://docs.google.com/uc?export=open&id=13D-HSKUlkWVSHEOkdRRaM5dAL8r8kHBZ'),
(54, 'Dibawah lagu yang berasal dari NTT adalah....', 'O Nina Noi & Potong Bebek Angsa', 'Helele U Ala De Teang & Tutu Koda', 'E Mambo Simbo & Sajojo', 'Sinom & Suwe Ora Jamu', 'a', '2', ''),
(55, 'Terusan dari lirik potongan lagu diatas adalah....', 'Kuserai, kusaserai rai rai rai rai', 'Pia sore, piasa sore ye ye', 'Samuna muna muna keke', 'Sajojo, sajojo', 'c', '2', 'http://docs.google.com/uc?export=open&id=1Xuiap41OgzmGVNbxOBdxg6_vPoiZtYjZ'),
(56, 'Dibawah ini lagu yang berasal dari provinsi Maluku adalah...', 'Meyong-Meyong', 'Kadal Nongaq', 'Burung Tantina', 'Peia Tawa-Tawa', 'c', '2', ''),
(57, '\"Potong bebek angsa, masak di kuali\" lirik lagu disamping adalah lagu dari provinsi?', 'NTT', 'NTB', 'Maluku', 'Papua', 'a', '2', ''),
(58, 'Lagu \"Timang-Timang Anakku Sayang\" berasal dari provinsi', 'Bengkulu', 'Jawa Barat', 'Maluku', 'Jambi', 'd', '2', ''),
(59, 'Lagu \"Bungong Jeumpa\" berasal dari provinsi?', 'Bali', 'Sumatera Barat', 'Aceh', 'Sumatera Utara', 'c', '2', ''),
(60, '\"Anak manis janganlah dicium sayang\" Apa judul lagu dari lirik lagu disamping?', 'Anak Mama', 'Anak Manis', 'Sajojo', 'Soleram', 'd', '2', ''),
(61, 'Dibawah ini lagu yang berasal dari Provinsi Riau adalah?', 'Ocu Maantau & Soleram', 'Madekdek Magambiri & Mariam Tomong', 'Kicir-Kicir & Lenggang ', 'Cik Cik Periuk & Aek Kapuas', 'a', '2', ''),
(62, 'Lanjutan dari lirik potongan lagu diatas adalah?', 'Sir sir pong dele bodong', 'Cublak cublak suweng', 'Tak gento lela lelo', 'Sapa ngguyu ndelek ake', 'c', '2', 'http://docs.google.com/uc?export=open&id=1dDhlFo0LuzZBcX1eVgWkftMFlTxWQgK1'),
(63, 'Potongan lirik lagu diatas adalah lagu dari provinsi?', 'Jawa Tengah', 'Banten', 'Jawa Timur', 'Jawa Barat', 'd', '2', 'http://docs.google.com/uc?export=open&id=1_CV8yutREW15dyATu9sOausrNGEbS2IY'),
(64, 'Lanjutan lirik dari potongan lagu diatas adalah....', 'Resep ngahiji rukun sakabehna', 'Manuk dadali pangkakon carana', 'Manuk dadali ngandung siloka sinatria', 'Keur sakumna bangsa di nagara indonesia', 'b', '2', 'http://docs.google.com/uc?export=open&id=1Zv9j-oawtxxyVme7Ny3TuE-YPi2nN6dT'),
(65, 'Apakah nama alat musik diatas ?', 'Kendang', 'Kecapi', 'Sasando', 'Nafiri', 'b', '1', 'https://i.imgur.com/yMhfvaO.jpg'),
(66, '\"Bapak Pucung dudu watu dudu gunung, Sangkane ing sebrang\" Apa judul lagu dari lirik lagu disamping?', 'Gambang Suling', 'Sinom', 'Padhang Wulan', 'Bapak Pucung', 'd', '2', ''),
(67, 'Apakah nama alat musik yang dimainkan oleh bapak diatas ?', 'Kecapi', 'Kendang', 'Gendang Melayu', 'Gendang Panjang', 'b', '1', 'https://i.imgur.com/2oxJHIJ.jpg'),
(68, 'Lagu \"Cik Cik Periuk\" berasal dari Provinsi?', 'Kalimantan Utara', 'Kalimantan Barat', 'Kalimantan Selatan', 'Kalimantan Timur', 'b', '2', ''),
(69, 'Darimanakah asal alat musik diatas', 'Sumatera Selatan', 'Sumatera Utara', 'Sumatera Barat', 'Sumatera Timur', 'a', '1', 'https://i.imgur.com/UVdk2vK.jpg'),
(70, 'Dibawah ini lagu yang berasal dari Provinsi Bali adalah....', 'Orlen-orlen', 'Lerang Wutun', 'E Mambo Simbo', 'Putri cening Ayu', 'd', '2', ''),
(71, 'Apakah nama alat musik diatas ?', 'Kelintang', 'Kalontang', 'Kolintang', 'Kelontang', 'c', '1', 'https://i.imgur.com/nO1JIC8.jpg'),
(72, '\"Rek ayo rek rame rame bebarengan\r\nCak ayo cak sopo gelem melu aku\" lirik lagu disamping berasal dari provinsi?', 'Jawa Timur', 'Jawa Barat', 'Jawa Tengah', 'Yogyakarta', 'a', '2', ''),
(73, 'Lagu \"Si Patokaan\" berasal dari provinsi?', 'Sulawesi Tenggara', 'Sulawesi Tengah', 'Sulawesi Utara', 'Sulawesi Selatan', 'c', '2', ''),
(74, 'Alat musik Panting berasal dari ', 'Kalimantan Timur', 'Kalimantan Selatan', 'Sumatera Timur', 'Sumatera Selatan', 'b', '1', 'https://i.imgur.com/UB5QSKm.jpg'),
(75, 'Alat musik Keso yang berasal dari Sulawesi Selatan memiliki jenis musik ?', 'Kordofon', 'Membranofon', 'Ideofon', 'Aerofon', 'a', '1', ''),
(76, 'Tehyan berasal dari ', 'Surabaya', 'Medan', 'Solo', 'Jakarta', 'd', '1', 'https://i.imgur.com/HqhsQoX.jpg'),
(77, 'Bagaimana cara memainkan alat musik Sampe berasal dari Kalimantan Timur yang mempunyai jenis bunyi Kordofon', 'Dipukul', 'Dipetik', 'Ditiup', 'Digesek', 'b', '1', ''),
(80, 'Alat musik diatas berasal dari daerah', 'Jawa Tengah', 'Jawa Timur', 'Sumatera Utara', 'Jawa Barat', 'd', '1', 'https://i.imgur.com/R7zAgET.jpg'),
(81, 'Alat musik diatas berasal dari daerah Jawa Tengah. Apa nama alat musik tersebut ?', 'Gendang', 'Gamelan', 'Sasando', 'Gamalan', 'b', '1', 'https://i.imgur.com/0QxfrcX.jpg'),
(82, 'Alat musik diatas bernama Gong, berasal dari ?', 'Jawa Tengah', 'Jawa Timur', 'Jawa Barat', 'DIY', 'c', '1', 'https://i.imgur.com/9zfEh4s.jpg'),
(83, 'Nama alat musik yang biasanya digunakan sebagai pengiring Gong adalah', 'Jengglong', 'Jangglong', 'Jungglong', 'Jingglang', 'a', '1', ''),
(84, 'Seperti apakah bentuk alat musik Rebab ?', 'Pedang', 'Tameng', 'Busur Panah', 'Pisau', 'c', '1', ''),
(85, 'Apa nama alat musik dari Sumatera Barat yang bentuknya mirip dengan alat musik Bonang dari Jawa Tengah ?', 'Talempong', 'Telampong', 'Telimpang', 'Talempang', 'a', '1', ''),
(86, 'Bagaimanakah cara memainkan alat musik Fu diatas ?', 'Ditiup', 'Dipukul', 'Dipetik', 'Dilihat', 'a', '1', 'https://i.imgur.com/sMm8yoo.jpg'),
(87, 'Apakah nama alat musik diatas ?', 'Kulintar', 'Kulontar', 'Kulonter', 'Kulanter', 'd', '1', 'https://i.imgur.com/1QLUIzf.jpg'),
(88, 'Darimanakah alat musik Tenun berasal ?', 'Sumatera Utara', 'Kalimantan Utara', 'Sumatera Selatan', 'Kalimantan Selatan', 'c', '1', 'https://i.imgur.com/c6H9UE6.jpg'),
(89, 'Terbuat dari apakah alat musik Kenong Basemah ?', 'Kuningan', 'Tembaga', 'Emas', 'Besi', 'b', '1', ''),
(90, 'Bagaimanakah cara memainkan alat musik Tuma yang berasal dari  Kalimantan Barat ?', 'Ditepuk dengan siku', 'Ditepuk dengan telapak tangan', 'Ditepuk dengan kaki', 'Ditepuk dengan kepala', 'b', '1', ''),
(91, 'Darimanakah asal alat musik Gengceng', 'Jakarta', 'Surabaya', 'Bandung', 'Bali', 'd', '1', ''),
(92, 'Apakah nama tarian diatas ?', 'Sedati', 'Seudati', 'Saedati', 'Sadati', 'b', '5', 'https://i.imgur.com/TrhqGOV.png'),
(93, 'Apakah latar belakang tari Legong dari Bali', 'Kisah cinta raja dari lasem', 'Kisah keluarga raja dari lasem', 'Kisah sedih raja dari lasem', 'Kisah kematian raja dari lasem', 'a', '5', ''),
(94, 'Manakah tarian dibawah ini yang berasal dari Bengkulu Selatan', 'Seudati', 'Legong', 'Andun', 'Jaipong', 'c', '5', ''),
(95, 'Darimanakah asal tari Bidadari Teminang Anak ?', 'Rejang Lebong', 'Rajang Lebong', 'Rejang Labong', 'Rajang Labong', 'a', '5', ''),
(96, 'Apakah nama tari yang berasal dari daerah DKI Jakarta diatas ?', 'Andun', 'Sekapur Sirih', 'Yapong', 'Reog', 'c', '5', 'https://i.imgur.com/YYEqseS.jpg'),
(97, 'Tari diatas berasal dari jambi yang bernama ?', 'Tari Saman', 'Tari Jipong', 'Tari Andun', 'Tari Sekapur Sirih', 'd', '5', 'https://i.imgur.com/j7rS1Qd.jpg'),
(98, 'Tari Selampir Delapan menggambarkan tentang', 'Muda - Mudi di Jambi', 'Muda - Mudi di Bengkulu', 'Muda - Mudi di Aceh', 'Muda - Mudi di Lampung', 'a', '5', ''),
(99, 'Darimanakah asal tarian di atas ?', 'DKI Jakarta', 'Jawa Barat', 'Jawa Timur', 'Jawa Tengah', 'b', '5', 'https://i.imgur.com/2W0FPVt.jpg'),
(100, 'Apakah nama tarian diatas ?', 'Jaipong', 'Kecak', 'Serimpi', 'Remong', 'c', '5', 'https://i.imgur.com/BPGlYpd.jpg'),
(101, 'Manakah dibawah ini yang bukan tarian dari Jawa tengah', 'Serimpi', 'Blambang Cakil', 'Gambyong', 'Malinting', 'd', '5', ''),
(102, 'Tari Monong diatas merupakan tari ...', 'Penolak Rezeki', 'Penolak Jodoh', 'Penolak Penyakit', 'Penolak Bala', 'c', '5', 'https://i.imgur.com/MgNDX81.jpg'),
(103, 'Manakah dibawah ini yang merupakan nama dan daerah asal tarian diatas ', 'Zapin Tembung - Kalimantan Barat', 'Zapin Tembung - Kalimantan Timur', 'Baksa Kembang - Kalimantan Barat', 'Baksa Kembang - Kalimantan Timur', 'a', '5', 'https://i.imgur.com/NUUTVWw.jpg'),
(104, 'Tari Radab Rahayu bertujuan untuk ?', 'Rasa syukur dan doa agar nelayan mendapat banyak ikan', 'Rasa syukur dan doa agar kapal tidak tenggelam', 'Rasa syukur dan doa agar kapal kembali dengan selamat', 'Rasa syukur dan doa agar nelayan tidak tersesat di laut', 'b', '5', ''),
(105, 'Manakah dibawah ini yang merupakan tarian dari Kalimantan Tengah ?', 'Tari Balean Dadas', 'Tari Radab Rahayu', 'Tari Baksa Kembang', 'Tari Jangget', 'a', '5', ''),
(106, 'Apakah nama tarian diatas ?', 'Kipas', 'Malinting', 'Jangget', 'Lenso', 'b', '5', 'https://i.imgur.com/lrgkFVf.jpg'),
(107, 'Darimanakah tari Cakalele berasal ?', 'Papua', 'NTB', 'NTT', 'Maluku', 'd', '5', 'https://i.imgur.com/StuUFFt.jpg'),
(108, 'Apakah nama tarian diatas ?', 'Mpaa Lenggogo', 'Jaipong', 'Gandrung', 'Saman', 'c', '5', 'https://i.imgur.com/GWdpv5t.jpg'),
(109, 'Darimanakah asal tari Caci diatas ?', 'NTB', 'NTT', 'Papua Barat', 'Papua Timur', 'b', '5', 'https://i.imgur.com/O14Vems.jpg'),
(110, 'Tari Suanggi diatas mengisahkan tentang ...', 'Seorang anak ditinggal mati ayahnya yang menjadi korban angi-angi (jejadian)', 'Seorang anak ditinggal mati ibunya yang menjadi korban angi-angi (jejadian)', 'Seorang istri ditinggal mati suaminya yang menjadi korban angi-angi (jejadian)', 'Seorang suami ditinggal mati istrinya yang menjadi korban angi-angi (jejadian)', 'd', '5', 'https://i.imgur.com/RgTPcsI.jpg'),
(111, 'Tari Musyoh dari Papua Timur digunakan untuk', 'Mengusir arwah orang meninggal karena kecelakaan', 'Mengusir arwah orang meninggal karena bunuh diri', 'Mengusir arwah orang meninggal karena dibunuh', 'Mengusir arwah orang meninggal karena sakit', 'a', '5', ''),
(112, 'Tari Tandak berasal dari ?', 'Maluku', 'Papua', 'NTT', 'Riau', 'd', '5', ''),
(113, 'Dalam menampilkan tari Makan Sirih, Baju yang digunakan adalah baju adat ...', 'Sunda', 'Melayu', 'Jawa', 'Gowa', 'b', '5', ''),
(114, 'Tari kipas berasal dari ?', 'Sulawesi Utara', 'Kalimantan Selatan', 'Sulawesi Selatan', 'Kalimantan Utara', 'c', '5', ''),
(115, 'Tari Payung ditarikan oleh sepasang muda - mudi dengan payung di tangan sang pria yang melindungi kepala sang wanita, hal tersebut menggambarkan ?', 'Kejahatan laki - laki terhadap wanita', 'Kejahatan wanita terhadap laki - laki', 'Perlindungan laki - laki terhadap wanita', 'Perlindungan wanita dari hujan', 'c', '5', ''),
(116, 'Tari Tor - tor merupakan tarian dari suku ?', 'Madura', 'Banjar', 'Batak', 'Bonai', 'c', '5', ''),
(118, 'Apa nama pakaian adat diatas yang berasal dari Sumatera Utara', 'Ulos', 'Bundo Kaduang', 'Aesan Gede', 'Belanga', 'a', '3', 'https://i.imgur.com/heZiLJh.jpg'),
(119, 'Pakaian adat Tradisional Perang dari Kalimantan Barat diatas kain yang digunakan terbuat dari ', 'Kulit Kayu Jati', 'Kulit Kayu Mahoni', 'Kulit Kayu Ampuro', 'Akar Pohon', 'c', '3', 'https://i.imgur.com/aScgQIe.jpg'),
(120, 'Pakaian adat \"Mandar\" berasal dari Provinsi?', 'Sumatera Selatan', 'Sulawesi Barat', 'Sumatera barat', 'Sulawesi Tengah', 'b', '3', ''),
(121, 'Pakaian adat berasal dari Provinsi Sulawesi Selatan yang dikenal sebagai salah satu busana tertua di Indonesia adalah....', 'Pakaian Adat Nggembe', 'Pakaian Adat Kulavi', 'Pakaian Adat Manteren Lamo', 'Pakaian Adat Bodo', 'd', '3', ''),
(122, 'Apa nama baju adat diatas dan berasal dari Provinsi?', 'Nggembe dari Sulawesi Tengah', 'Ulos dari Sumatera Utara', 'Minangkabau dari Sumatera Barat', 'Suku Tolaki dari Sulawesi Tenggara', 'a', '3', 'https://i.imgur.com/cpudj37.jpg'),
(123, 'Dibawah ini yang termasuk pakaian resmi dari daerah Kepualauan Riau adalah', 'Baju Adat Seting dan Kain Cual.', 'Baju Tradisional Ewer', 'Kebaya Labuh dan Teluk Belanga', 'Pakaian Penghulu dan Pakaian Bundo Kanduang', 'c', '3', ''),
(124, 'Pakaian adat \"Mukuta dan Biliu\" berasal dari Provinsi?', 'Maluku', 'Sulawesi Selatan', 'Sulawesi Utara', 'Gorontalo', 'd', '3', ''),
(125, 'Apa nama pakian adat dari Provinsi Papua Barat seperti gambar diatas?', 'Cele', 'Ewer', 'Nggembe', 'Pesa an', 'b', '3', 'https://i.imgur.com/ghAPxOL.jpg'),
(126, 'Pakaian adat Provinsi Gorontalo biasanya ditemui dengan warna tertentu antara lain...', 'Warna Kuning, Ungu, Hijau, dan Merah Tua', 'Warna Biru, Ungu, Hitam, dan Orange', 'Warna Kuning, Coklat, Hijau, dan Hitam', 'Warna Merah, Biru, Hijau, dan Ungu Muda', 'a', '3', ''),
(129, 'Rumah adat Panjang berasal dari...', 'Jambi', 'Sulawesi Utara', 'Banten', 'Kalimantan Barat', 'a', '4', 'https://i.imgur.com/ksNUks6.jpg'),
(130, 'Nama rumah adat dari kalimantan utara adalah ....', 'Bubungan Tinggi', 'Baloy', 'Banjar', 'Lamin', 'b', '4', 'https://i.imgur.com/8EcZquZ.jpg'),
(131, 'Rumah adat Nowou Sesat berasala dari Lampung. Sesat dari kata Nowou Sesat mempunyai arti ...', 'Tempat bermain', 'Tempat  belajar', 'Tempat ibadah', 'Tempat pemakaman', 'c', '4', 'https://i.imgur.com/ScpotPk.jpg'),
(132, 'Rumah adat yang berasal dari Madura adalah .....', 'Bubungan Tinggi', 'Joglo Situbondo', 'Lamin', 'Tanean Lanjhan', 'd', '4', 'https://i.imgur.com/Swpv8sB.jpg'),
(133, 'Rumah adat Pewaris, Sulawesi Utara dikenal dengan sebutan', 'Walewangkoa', 'Pores', 'Sangkor', 'Setup Emperan', 'a', '4', 'https://i.imgur.com/OsyrzIc.jpg'),
(134, 'Rumah adat yang tidak hanya digunakan untuk hunian, tetapi juga dapat digunakan penyimpanan mayat adalah rumah adat ...', 'Buton', 'Tongkonan', 'Tambi', 'Pewaris', 'b', '4', 'https://i.imgur.com/umxroke.jpg'),
(135, 'Suku Sasak, Sumbawa, Dongu dan Dompu di NTB memiliki rumah adat yang bernama ...', 'Taenan Lanjhan', 'Baileo', 'Dalam Loka', 'Musalaki', 'c', '4', 'https://i.imgur.com/Hk34t7X.jpg'),
(136, 'Warna kuning yang diterapkan pada rumah adat Lamin mempunyai arti  .....  ', 'Suci', 'Kesetiaan', 'Keberanian', 'Kewibawaan', 'd', '4', 'https://i.imgur.com/ivGmyy9.jpg'),
(137, 'Warna yang mempunyai arti kebersihan jiwa pada rumah adat Lamin adalah warna ....', 'Biru', 'Putih', 'Merah', 'Kuning', 'b', '4', 'https://i.imgur.com/ivGmyy9.jpg'),
(138, 'Rumah adat yang mendapatkan penghargaan tertinggi dari UNESCO pada tahun 2012, rumah adat yang berasal dari ...', 'Kalimantan Timur', 'D.I. Yogyakarta', 'Nusa Tenggara Timur', 'Madura', 'c', '4', ''),
(139, 'Suku manakah yang berasal dari Kalimantan Barat yang memiliki pakaian adat King Bibinge dan King Baba.', 'Suku Bugis', 'Suku Dayak', 'Suku Banjar', 'Suku Melayu', 'b', '3', 'https://i.imgur.com/zuDFdDd.jpg'),
(140, 'Pakaian adat dari Maluku Utara yang dipakai oleh permaisuri kerajaan Ternate dan Tidore adalah...', 'Manteren Lamo ', 'King Bibinge ', 'Kimun Gia', ' Pegon', 'c', '3', ''),
(141, 'Pakaian adat Bali yang digunakan oleh pria terdiri dari beberapa aksesoris, aksesoris yang berguna sebagai ikat kepala disebut?', 'Udeng', 'Umpai', 'Saput', 'Blangkon', 'a', '3', ''),
(142, 'Pakaian adat NTB yang digunakan untuk para wanita pada acara adat dan  terkenal di kancah nasional dan sekaligus menjadi ikon adalah.....', 'Pegon', 'Kebaya', 'Lambung', 'King Baba', 'c', '3', 'https://i.imgur.com/UAlRVD8.jpg'),
(143, 'Pakaian dari Provinsi Jawa Tengah yang dipakai oleh suku jawa seperti gambar diatas adalah...', 'Penghulu dan  Bundo Kanduang', 'Jawi Jangkep dan Kebaya.', 'Manteren Lamo dan Kimun Gia \r\n', 'Lambung dan Pegon.', 'b', '3', 'https://i.imgur.com/YiFg9vC.jpg'),
(144, 'Pakaian adat Jawa Tengah \"Kebaya\" biasanya tarbuat dari bahan?', 'Bahan Syfon, Kain Sutra, Beludru, dan Nilon', 'Bahan Katun, Kain Sutra,  dan Nilon', 'Bahan Beludru, Kain Sutra, Sutera Brokat, dan Wol', 'Bahan Beludru, Kain Katun, Sutera Brokat, dan Nilon ', 'd', '3', ''),
(145, 'Pakaian adat \"cele\" biasanya dipakai dalam upacara adat, Pakaian adat \"cele\" berasal dari provinsi.....', 'Maluku Utara', 'Kalimantan Barat', 'Jambi', 'Maluku', 'd', '3', 'https://i.imgur.com/XWweGUT.jpg'),
(146, 'Baju adat seperti gambar diatas berasal dari daerah?', 'Jawa Tengah', 'Maluku', 'Madura\r\n', 'NTT', 'c', '3', 'https://i.imgur.com/2NQoEGy.jpg'),
(147, 'Gambar diatas adalah pakaian adat berasal dari Provinsi?', 'Sulawesi Utara', 'Kalimantan Timur', 'Bali', 'Lombok', 'c', '3', 'https://i.imgur.com/uPVy9HP.jpg'),
(148, 'Apa nama aksesoris pada pakaian adat tradisional untuk pria Rote dari Provinsi Nusa Tenggara Timur?', 'Ti langga', 'Udeng', 'Sorban', 'Kain Tenun', 'a', '3', ''),
(149, 'Dibawah ini yang termasuk pakaian adat suku banjar dari Kalimantan Selatan adalah...', 'Tradisional Kulavi (Donggala)', 'Nggembe.', 'Pengantin Babaju Kubaya Panjang.', 'Manteren Lamo', 'c', '3', ''),
(150, 'Pakaian adat \"Tradisioanal Lombok\" seperti gambar diatas berasal dari Provinsi?', 'NTT', 'NTB', 'Sulawesi Utara', 'Kalimantan Tengah', 'b', '3', 'https://i.imgur.com/m7EFWM4.jpg'),
(151, 'Sebutan rumah Bagonjong dan Rumah Baanjung adalah rumah adat ...', 'Honai', 'Gadang', 'Lamin', 'Limas', 'b', '4', 'https://i.imgur.com/qxVFe4n.jpg'),
(152, 'Rumah adat yang berasal dari pulau Nias, Sumatera Utara adalah ...', 'Krongo Bae', 'Malige', 'Omo Sebua', 'Benteng', 'c', '4', 'https://i.imgur.com/yiBEkmX.jpg'),
(153, 'Rumah adat yang tidak menggunak sama sekali paku dan terdiri empat lantai berasal dari ... ', 'Sulawesi Utara', 'Sulawesi Selatan', 'Maluku', 'Sulawesi Tenggara', 'd', '4', 'https://i.imgur.com/7RSoofG.jpg'),
(154, 'Rumah adat Rakit yang dibuat diatas sungai adalah rumah adat yang berasal ...', 'Kalimantan Selatan', 'Bangka Belitung', 'Jawa Timur', 'Lombok', 'b', '4', 'https://i.imgur.com/2IuQvlD.jpg'),
(155, 'Apa sebutan pakaian seperti gambar diatas yang berasal dari Provinsi Bangka Belitung', 'Aesan Besar', 'Melayu Jambi', 'Paksian', 'Tulang Bawang', 'c', '3', 'https://i.imgur.com/XcM29LE.jpg'),
(156, 'Baju adat \"Tradisional Tulang Bawang\" diatas berasal dari Provinsi?', 'Jambi', 'Gorontalo', 'Aceh', 'Lampung', 'd', '3', 'https://i.imgur.com/tKrxqHt.jpg'),
(157, 'Baju Adat Betawi pada gambar diatas dipengaruhi oleh budaya mana saja?', 'Arab, China, Melayu & Budaya Barat', 'Timur, Belanda, Melayu & China', 'Belanda, China, Inggris & Arab', 'China, Belanda & Budaya Barat', 'a', '3', 'https://i.imgur.com/2DtGxD8.jpg'),
(158, 'Rumah Hanoi di Papua sengaja dibuat sempit karena suhu disana sangat dingin terutama pada  daerah ....', 'Pantai', 'Kota', 'Pegunungan', 'Savana', 'c', '4', ''),
(159, 'Bagian dapur pada rumah Betang, Kalimantan Tengah selalu menghadap ke sungai, dikarenakan ...', 'Mudah membuang sampah', 'Mendatangkan rezeki', 'Mudah bertemu tamu', 'Tempat datangnya tamu', 'b', '4', ''),
(160, 'Rumah adat Baileo terdapat ornamen yang bergambar ...', 'Ayam dan anjing', 'Kuda dan Sapi', 'Anjing', 'Monyet', 'a', '4', ''),
(161, 'Rumah adat yang tidak mempunyai jendela dan hanya mempunyai satu pintu adalah ...', 'Joglo', 'Tongkonan', 'Honai', 'Limas', 'c', '4', ''),
(162, 'Rumah adat Sulah Nyanda asal Banten mempunyai bagian depan rumah yang dinamakan ...', 'Ipah', 'Tepas', 'Topas', 'Sosoro', 'd', '4', ''),
(163, 'Sirkulasi udara yang dilubangi pada sisi lantai rumah adat Banten yang disebut ...', 'Pupuluh', 'Papaluh', 'Palupuh', 'Palaluh', 'c', '4', ''),
(164, 'Ruangan di rumah adat Banten untuk beristirahat keluarga dan tempat untuk pertemuan keluarga disebut ...', 'Teras', 'Tepas', 'Ipah', 'Sasoro', 'b', '4', ''),
(165, 'Selain rumah adat joglo, jawa tengah mempunyai rumah adat lainnya seperti ...', 'Betang', 'Panjang', 'Panggang Pe', 'Panggung', 'c', '4', ''),
(166, 'Pada rumah adat kebaya dari DKI Jakarta terdapat bagian dapur yang sering disebut ...', 'Serabi', 'Srandyin', 'Sorondan', 'Srondoyan', 'd', '4', ''),
(167, 'Lantai pada teras depan rumah kebaya disebut dengan ...', 'Gejogan', 'Gelega', 'Gegegan', 'Gelegak', 'a', '4', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `vEmail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `vEmail`) VALUES
(1, 'Mithaa', 'danamitha@gmail.com', 'd29ac84777f0b73c6f5426c921a7f4a7', '1'),
(2, 'safriansah', 'safriansah@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '1'),
(3, 'yolla', 'yollafrdl@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '1'),
(4, 'rais', 'raisz.borneo25@gmail.com', 'ac43724f16e9241d990427ab7c8f4228', '1'),
(9, 'wahid', 'mgnfc16@gmail.com', 'c44a471bd78cc6c2fea32b9fe028d30a', '1'),
(16, 'Mbah', 'ridhoaji91@gmail.com', '0ad6e928d314958a427a2f943172da13', '1'),
(17, 'Diana Nur', 'diananur67@gmail.com', '4e4d6c332b6fe62a63afe56171fd3725', '1'),
(19, 'Faiz Rizky', 'faizrizkyr@gmail.com', 'b6cfc11c01458333448276eeaf2140d3', '1'),
(20, 'vavavava', 'afwazami@gmail.com', 'eb569d159e1ed53c69af09149ac75ade', '1'),
(21, 'Vinka Utari Meidiningtiyas ', 'vinkautarimei@gmail.com ', 'c1b91845cb0bffac1ea79969166c41fe', '1'),
(22, 'bianca', 'accadesti@gmail.com', '356299e0bfa51979e48b26f241aaa496', '1'),
(23, 'Arum', 'arumpm@rocketmail.com', '39d8e1a1a14670b0a3be357c318867ac', '1'),
(28, 'lala', 'diananuranggreini.if@gmail.com', '202cb962ac59075b964b07152d234b70', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bot_main`
--
ALTER TABLE `bot_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bot_nilai`
--
ALTER TABLE `bot_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bot_pointer`
--
ALTER TABLE `bot_pointer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `chatId` (`chatId`);

--
-- Indexes for table `bot_user`
--
ALTER TABLE `bot_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `chatId` (`chatId`);

--
-- Indexes for table `forbot`
--
ALTER TABLE `forbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kd_kat`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`kd_soal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bot_main`
--
ALTER TABLE `bot_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bot_nilai`
--
ALTER TABLE `bot_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `bot_pointer`
--
ALTER TABLE `bot_pointer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `bot_user`
--
ALTER TABLE `bot_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `forbot`
--
ALTER TABLE `forbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `kd_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
