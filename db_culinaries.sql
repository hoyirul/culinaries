-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 25, 2021 at 04:27 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_culinaries`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category`, `created_at`, `updated_at`) VALUES
(2, 'Sate', '2021-12-22 02:41:11', '2021-12-25 16:48:44'),
(3, 'Soto', '2021-12-22 02:41:17', '2021-12-25 16:48:55'),
(4, 'Kering', '2021-12-22 19:29:55', '2021-12-25 16:49:46'),
(5, 'Mie', '2021-12-22 19:29:59', '2021-12-25 16:49:30'),
(6, 'Rujak', '2021-12-22 19:30:05', '2021-12-25 16:49:19'),
(7, 'Nasi Goreng', '2021-12-25 16:49:04', '2021-12-25 16:49:04'),
(8, 'Minuman', '2021-12-25 16:49:52', '2021-12-25 16:49:52'),
(9, 'Daging', '2021-12-25 16:50:32', '2021-12-25 16:50:32'),
(10, 'Pedas', '2021-12-25 16:50:47', '2021-12-25 16:50:47'),
(11, 'Rawon', '2021-12-25 16:51:10', '2021-12-25 16:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city`, `created_at`, `updated_at`) VALUES
(1, 'Semarang', '2021-12-22 00:00:00', '2021-12-22 02:07:35'),
(2, 'DKI Jakarta', '2021-12-22 01:48:17', '2021-12-22 02:08:50'),
(4, 'Madura', '2021-12-22 19:29:20', '2021-12-22 19:29:20'),
(5, 'Surabaya', '2021-12-22 19:29:26', '2021-12-22 19:29:26'),
(6, 'Palembang', '2021-12-22 19:29:44', '2021-12-22 19:29:44'),
(7, 'Padang', '2021-12-25 16:45:51', '2021-12-25 16:45:51'),
(8, 'Tegal', '2021-12-25 16:46:12', '2021-12-25 16:46:12'),
(9, 'Lamongan', '2021-12-25 16:46:21', '2021-12-25 16:46:21'),
(10, 'Betawi', '2021-12-25 16:46:31', '2021-12-25 16:46:31'),
(11, 'Kudus', '2021-12-25 16:46:38', '2021-12-25 16:46:38'),
(12, 'Aceh', '2021-12-25 16:46:57', '2021-12-25 16:46:57'),
(13, 'Malang', '2021-12-25 16:47:44', '2021-12-25 16:47:44'),
(14, 'Pulau Bangka', '2021-12-25 16:48:28', '2021-12-25 16:48:28'),
(15, 'Magelang', '2021-12-25 18:32:15', '2021-12-25 18:32:15');

-- --------------------------------------------------------

--
-- Table structure for table `culinary`
--

CREATE TABLE `culinary` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `culinary`
--

INSERT INTO `culinary` (`id`, `city_id`, `category_id`, `uid`, `title`, `content`, `img`, `created_at`, `updated_at`) VALUES
(3, 7, 2, 1, 'Sate Padang', '<p style=\"text-align: justify;\">Makanan khas Indonesia yang wajib dicoba pertama adalah Sate Padang. Makanan ini berasal dari Padang, Sumatera Barat. Makanan ini terkenal dengan bumbunya yang menggugah selera dengan isian rempah-rempah seperti jinten, jahe, lengkuas dan cabai.</p>\r\n<p style=\"text-align: justify;\">Bumbu-bumbu tersebut dihaluskan dan ditumis sehingga aromanya harum. Kemudian sebagian bumbu akan digunakan untuk merendam daging sate dan sausnya. Daging yang direndam kemudian dibakar di atas panggangan arang hingga matang dan disajikan di atas piring beserta ketupat serta saus yang lezat.</p>', 'sate-padang.jpg', '2021-12-22 19:28:16', '2021-12-25 16:52:37'),
(4, 4, 2, 1, 'Sate Madura', '<p style=\"text-align: justify;\">Makanan khas Indonesia selanjutnya adalah Sate Madura, dimana sate ini menjadi sangat populer sebagai sate khas Indoensia karena banyak penjual Sate Madura ini yang menjajakan dagangannya di seantero Wilayah Indonesia. Sate Madura disajikan dengan lontong dan irisan bawang merah serta irisan cabai rawit, selain lontong, bisa juga disajikan dengan nasi atau ketupat.</p>', 'sate-madura.jpg', '2021-12-22 19:29:09', '2021-12-25 16:55:00'),
(5, 8, 2, 1, 'Sate Tegal', '<p style=\"text-align: justify;\">Sate Tegal ini dinamai sesuai denga nasal daerahnya, yakni di Tegal. Sate Tegal terbuat dari daging domba atau kambing muda yang sering disebut sebagai balibul atau kambing berusia dibawah 5 bulan, sehingga dagingnya empuk, dipotong dadu lalu ditusuk dengan sayatan batang bambu yang kemudian dibakar di atas bara arang kayu atau arang batok kelapa.</p>', 'sate-tegal.jpg', '2021-12-22 19:30:34', '2021-12-25 16:56:39'),
(6, 9, 3, 1, 'Soto Lamongan', '<p style=\"text-align: justify;\">Seperti Namanya, soto ini berasal dari Lamongan, Jawa Timur. Soto ini adalah satu-satunya soto yang menggunakan bumbu koya. Bumbu koya sendiri terbuat dari kerupuk udang yang dihaluskan.</p>', 'soto-lamongan.jpg', '2021-12-25 17:39:18', '2021-12-25 17:39:18'),
(7, 5, 7, 1, 'Nasi Goreng Jawa', '<p style=\"text-align: justify;\">Nasi goreng khas Jaw aini memiliki cita rasa yang pedas karena campuran bumbu sambal uleknya. Salah satu nasi goreng khas Jawa yang terkenal adalah nasi goreng yang berasal dari Surabaya, dimana nasi goreng ini memiliki ciri khas berwarna merah kecokelatan dengan campuran lauk suwiran ayam potong dan telur dadar.</p>', 'nasi-goreng-jawa.jpg', '2021-12-25 18:27:33', '2021-12-25 18:27:33'),
(8, 5, 6, 1, 'Rujak Cingur', '<p style=\"text-align: justify;\">Rujak cingur adalah salah satu rujak yang ada di Indonesia yang berasal dari Surabaya. Rujak cingur ini menggunakan bahan cingur atau dalam Bahasa Jawa berarti mulut, bahan irisan mulut ini menggunakan mulut sapi yang sudah direbus dan dicampurkan ke rujak ini.&nbsp;</p>', 'rujak-cingur.jpg', '2021-12-25 18:29:30', '2021-12-25 18:29:30'),
(9, 12, 5, 1, 'Mie Goreng Aceh', '<p style=\"text-align: justify;\">Serambi Mekkah diujung Pulau Sumatera ini memiliki mie yang sangat populer. Mie Aceh sudah banyak dijajakan diluar provinsinya dan terkenal dengan bumbu rempah yang pedas. Mie ini terbuat dari mie kuning yang ditumis dengan bumbu rempah seperti bawang merah, bawang putih, adas, jinten, kapulaga, dan cabai. Selain bumbu, Mie Aceh juga diberi campuran udang, cumi dan irisan daging sapi.</p>', 'mie-aceh.jpg', '2021-12-25 18:30:07', '2021-12-25 18:30:07'),
(10, 6, 5, 1, 'Mie Celor Palembang', '<p style=\"text-align: justify;\">Mie Celor merupakan mie yang berasal dari daerah Palembang. Mie ini terbuat dari mie kuning yang kental dengan rasa seafoodnya, karena daerah Sumatera Selatan memang kaya akan hasil lautnya. Yang menjadi unik atau membedakan mie ini dengan mie lainnya adalah mie kuning sebagai bahan dasar sajian ini dimasak terpisah dengan kuahnya. Kuah mie celor terdiri dari santan, terigu, kuah kaldu udang, dan bumbu lainnya yang dimasak dengan cara ditumis, ketika akan disajikan kuah dari mie ini akan ditambahkan telur rebus sebagai topingnya.</p>', 'mie-celor.jpeg', '2021-12-25 18:30:46', '2021-12-25 18:30:46'),
(11, 13, 6, 1, 'Rujak Gobet', '<p style=\"text-align: justify;\">Rujak Gobet adalah rujak yang berasal dari Malang, dimana rujak ini memiliki perpaduan rasa pedas, manis dan asam. Rujak ini biasanya disajikan dengan di acara-acara khusus seperti acara kehamilan 7 bulan atau disebut tingkeban atau mitoni. Rujak ini terdiri dari beberapa jenis buah seperti bengkoang, jambu, belimbing dan nanas yang dipotong memanjang.</p>', 'rujak-gobet.jpg', '2021-12-25 18:31:30', '2021-12-25 18:31:30'),
(12, 15, 7, 1, 'Nasi Goreng Mawut', '<p style=\"text-align: justify;\">Tidak berbeda jauh dengan nasi goreng pada umumnya, nasi goreng yang berasal dari Magelang, Jawa Tengah ini memiliki ciri khas tersendiri dengan kombinasi mie dan berbagai topping lainnya seperti bakso, sosis, ayam dan masih banyak lagi. Hal ini yang membuat nasi goreng khas Indonesia ini dinamakan sebagai nasi goreng mawut adalah karena penampilan dan penyajiannya yang tampak berantakan karena memilih banyak topping di dalamnya.</p>', 'mawut.jpg', '2021-12-25 18:32:43', '2021-12-25 18:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `username`, `password`, `token`, `created_at`, `updated_at`) VALUES
(1, 'Mochammad Hairullah', 'admin', '1a145a23d6e47aadfe2063f1f951e691', '4ef73c0bb5a1b0cb19365369bb5f4f9d', '2021-12-21 18:48:39', '2021-12-23 01:56:14'),
(2, 'John Doe', 'johndoe', 'e10adc3949ba59abbe56e057f20f883e', '2aa2535b0c73e6e0a7c1c0768af5c7c0', '2021-12-24 19:08:16', '2021-12-24 19:18:22'),
(3, 'Rhodi Anam', 'anam', 'e10adc3949ba59abbe56e057f20f883e', '42ae17c6b88d807cb361917e9e1cb4cf', '2021-12-24 19:10:05', '2021-12-24 19:10:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `culinary`
--
ALTER TABLE `culinary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `culinary`
--
ALTER TABLE `culinary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `culinary`
--
ALTER TABLE `culinary`
  ADD CONSTRAINT `culinary_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `culinary_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `culinary_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `cities` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
