-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2024 at 09:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_angkatan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `intro`
--

CREATE TABLE `intro` (
  `id` int(11) NOT NULL,
  `judulWebsite` varchar(45) DEFAULT NULL,
  `judul` varchar(45) DEFAULT NULL,
  `subJudul` varchar(45) DEFAULT NULL,
  `isiKonten` varchar(255) DEFAULT NULL,
  `gambar` varchar(70) DEFAULT NULL,
  `gambar2` varchar(70) DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `intro`
--

INSERT INTO `intro` (`id`, `judulWebsite`, `judul`, `subJudul`, `isiKonten`, `gambar`, `gambar2`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Fadli_Ganteng-PPKDJP', 'Cara ganteng by Fadli', 'bagaimana sih caranya ganteng?', 'Apa ya caranya gimana siapa?', 'php.jpeg', 'random.png', 0, '2024-07-22', NULL, NULL),
(2, 'Doni Digidaw -PPKDJP', 'Cara nama anda berubah menjadi marga Digidaw', 'Caranya adalah anda harus ...', 'Untuk mengetahui atau mendapatkan marga Digidaw, langkah-langkahnya meliputi:\r\n\r\nMeneliti asal usul keluarga dan sejarahnya.\r\nMelakukan penelitian genealogi dan mengumpulkan informasi dari arsip keluarga atau sumber daya genealogi.\r\nBerkomunikasi dengan a', 'php.jpeg', 'random.png', 1, '2024-07-22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` int(11) NOT NULL,
  `id_intro` int(11) NOT NULL,
  `pilihedisi` varchar(45) DEFAULT NULL,
  `harga` int(20) DEFAULT NULL,
  `deskripsi` varchar(65) DEFAULT NULL,
  `card_class` varchar(25) DEFAULT NULL,
  `header` varchar(30) DEFAULT NULL,
  `subtitle` varchar(30) DEFAULT NULL,
  `btn_class` varchar(30) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `id_intro`, `pilihedisi`, `harga`, `deskripsi`, `card_class`, `header`, `subtitle`, `btn_class`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Pro', 100000, 'Paket lumayan hemat', 'card mb-4 rounded-3 shado', 'Most Popular', 'eVBook Download & all updateds', 'w-100 btn btn-lg btn-primary', '2024-07-22', NULL, NULL),
(2, 1, 'Jagoan Neon', 1000000, 'Paket paling hemat, jika anda hemat, pasti anda orang jagoan neon', 'card mb-4 rounded-3 shado', NULL, 'All new Data', 'w-100 btn btn-lg btn-primary', '2024-07-22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pricing_intro` (`id_intro`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `intro`
--
ALTER TABLE `intro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pricing`
--
ALTER TABLE `pricing`
  ADD CONSTRAINT `fk_pricing_intro` FOREIGN KEY (`id_intro`) REFERENCES `intro` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
