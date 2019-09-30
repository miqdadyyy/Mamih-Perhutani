-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 30, 2019 at 11:13 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `your-land`
--

-- --------------------------------------------------------

--
-- Table structure for table `bos`
--

CREATE TABLE `bos` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_tanah`
--

CREATE TABLE `kriteria_tanah` (
  `id` bigint(20) NOT NULL,
  `keasaman` int(11) NOT NULL,
  `suhu` int(11) NOT NULL,
  `kelembaban` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mandor`
--

CREATE TABLE `mandor` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `username` varchar(191) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `nohp` int(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mandor`
--

INSERT INTO `mandor` (`id`, `user_id`, `username`, `nama_lengkap`, `nohp`, `alamat`, `created_at`, `updated_at`) VALUES
(12056, 11119, 'veve', 'valentino rossi', 12313, 'asass', '2019-09-30 00:49:59', '2019-09-30 00:49:59'),
(12449, 14495, 'alfian271', 'alfian ferdiansyah', 822756, 'sadad', '2019-09-29 09:03:19', '2019-09-29 09:03:19'),
(14672, 12403, 'alfian27', 'alfianalfian', 822756, 'sadad', '2019-09-29 09:02:30', '2019-09-29 09:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrant`
--

CREATE TABLE `registrant` (
  `id` bigint(20) NOT NULL,
  `status` varchar(200) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nohp` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `id` bigint(20) NOT NULL,
  `nama_tanaman` varchar(200) NOT NULL,
  `keasaman` int(11) NOT NULL,
  `suhu` int(11) NOT NULL,
  `kelembaban` int(11) NOT NULL,
  `oksigen` int(11) NOT NULL,
  `tekstur` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(10188, 'mandor', 'Amalia Wahyuni', 'Amalia Wahyuni@gmail.com', NULL, '$2y$10$Mxxcn/E9mnPm/cjznAYqdecloCW.Ad56pfuI/Uvg5OxP4sOi2nf/K', NULL, '2019-09-12 03:38:40', '2019-09-12 03:38:40'),
(10402, 'mandor', 'Yessi Mayasari', 'Yessi Mayasari@gmail.com', NULL, '$2y$10$mb7IidORnHE.6K38p7VhkOVrrLbi4TEHS6HimS52VLYNtb5OsDmTC', NULL, '2019-09-12 03:38:37', '2019-09-12 03:38:37'),
(10403, 'mandor', 'Pia Nasyiah', 'Pia Nasyiah@gmail.com', NULL, '$2y$10$zSaRgFuzEHGA6VRrBvuq6eAU80WZ2QdICHUDGigpQ.FW7OFmJvmB6', NULL, '2019-09-12 03:38:36', '2019-09-12 03:38:36'),
(10458, 'mandor', 'Aurora Nurdiyanti', 'Aurora Nurdiyanti@gmail.com', NULL, '$2y$10$E77BEYjBCbeKXIBxP..FZ.XZ4Fd6THljHqUG.Odze6eRHvzbhtLG2', NULL, '2019-09-12 03:38:36', '2019-09-12 03:38:36'),
(10459, 'mandor', 'Mustika Jamal Waskita S.Psi', 'Mustika Jamal Waskita S.Psi@gmail.com', NULL, '$2y$10$Wks6.1yVjbPj0IfoOTzXTumcDc8Jonk2vhZF34OCCPmHtIN/jWGsa', NULL, '2019-09-12 03:38:45', '2019-09-12 03:38:45'),
(10630, 'mandor', 'Ulva Ajeng Safitri M.TI.', 'Ulva Ajeng Safitri M.TI.@gmail.com', NULL, '$2y$10$awekbQf5PAMpqW/OY/8as.B1BV/IqylP1/U96BjdQ4v3fjsXWzNNS', NULL, '2019-09-12 03:38:40', '2019-09-12 03:38:40'),
(10696, 'mandor', 'Danuja Karman Winarno S.H.', 'Danuja Karman Winarno S.H.@gmail.com', NULL, '$2y$10$BMFLzlCb/K9vO/QAH.cYquZkK0StWqZDA2nQzmSJVe7Oxk4eVOBfW', NULL, '2019-09-12 03:38:36', '2019-09-12 03:38:36'),
(10784, 'mandor', 'Widya Olivia Zulaika', 'Widya Olivia Zulaika@gmail.com', NULL, '$2y$10$oDKX/Qgdf1ctBSeEtugT/O2M9HIWgWsuUqk3HFJAJkaqxnxVStIum', NULL, '2019-09-12 03:38:36', '2019-09-12 03:38:36'),
(11119, 'mandor', 'valentinovalentino', 'aaalimpes12@gmail.com', NULL, '$2y$10$Z6oraP/iOn.En8h9siifLOK8dW1AgXiwGPmpWeocWs5ZoK.nEsyrG', NULL, '2019-09-30 00:49:59', '2019-09-30 00:49:59'),
(11795, 'mandor', 'Cinta Permata', 'Cinta Permata@gmail.com', NULL, '$2y$10$KFLCeylVmJOh6qSLCRwb5.hVmkVMlJOmCO9WUoxHG.7HpTpTsqv9O', NULL, '2019-09-12 03:38:37', '2019-09-12 03:38:37'),
(11907, 'mandor', 'Zulaikha Mandasari', 'Zulaikha Mandasari@gmail.com', NULL, '$2y$10$Hiz8La5xmUyJIaY7Jey4N.vmjiq/RbD9G/dLNtj6BglWG2e2OJqyO', NULL, '2019-09-12 03:38:46', '2019-09-12 03:38:46'),
(12007, 'mandor', 'Hesti Lailasari', 'Hesti Lailasari@gmail.com', NULL, '$2y$10$7VZVl918/FLQkGxCT3/I9.LX2C/BJLNeIk1mOTGbYZBBn9FKevA6a', NULL, '2019-09-12 03:38:44', '2019-09-12 03:38:44'),
(12391, 'mandor', 'Budi Irawan', 'Budi Irawan@gmail.com', NULL, '$2y$10$nDVRL/DNfHSwmOf7I2S3ieJmBym2crbUJWlQLyy9jnR4//VVpudIq', NULL, '2019-09-12 03:38:35', '2019-09-12 03:38:35'),
(12403, 'mandor', 'alfianalfian', 'alfian000000@gmail.com', NULL, '$2y$10$x9I2XjSOfwhjM21ad9ND4.zyeBWIaBVdU4EoeTnDZ1cor3zu2Z9py', NULL, '2019-09-29 09:02:31', '2019-09-29 09:02:31'),
(12820, 'mandor', 'Kemal Darijan Maulana', 'Kemal Darijan Maulana@gmail.com', NULL, '$2y$10$fD7AGD8C3simpBpzQVTj7OHqznfb6N0NAJAuYtiU6sGFok7.fIZs2', NULL, '2019-09-12 03:38:35', '2019-09-12 03:38:35'),
(12824, 'mandor', 'Kiandra Hariyah', 'Kiandra Hariyah@gmail.com', NULL, '$2y$10$HWEquJTwoV.BxASPu4CWy.AsXUPkQqhIJcWKF39XijQR80Lxz6ZvG', NULL, '2019-09-12 03:38:45', '2019-09-12 03:38:45'),
(13065, 'mandor', 'Caturangga Wibowo', 'Caturangga Wibowo@gmail.com', NULL, '$2y$10$dx5C8p23kDKEenM.FfcPQOX4G5HfkdGyVHgy2u7rmsVNhxykPFUHW', NULL, '2019-09-12 03:38:36', '2019-09-12 03:38:36'),
(13165, 'mandor', 'Ghaliyati Amalia Maryati S.E.', 'Ghaliyati Amalia Maryati S.E.@gmail.com', NULL, '$2y$10$6EL3xzSnBS6Se8oY.bd07ugS.pxsurIN8Ep4p3p5cPVJiOqPR.Qte', NULL, '2019-09-12 03:38:46', '2019-09-12 03:38:46'),
(13521, 'mandor', 'Nova Pudjiastuti', 'Nova Pudjiastuti@gmail.com', NULL, '$2y$10$cJXBW2Nc1hLAMoOf1GJRu.J42lxdhniakng41jeJuFt4qW26ivt/6', NULL, '2019-09-12 03:38:39', '2019-09-12 03:38:39'),
(13754, 'mandor', 'Damu Januar', 'Damu Januar@gmail.com', NULL, '$2y$10$8OBA0dwVUHW1yclBDI/QVeC2F2wIRO5DKUh4S6/j/kU/5yKH4lW96', NULL, '2019-09-12 03:38:39', '2019-09-12 03:38:39'),
(13763, 'mandor', 'Makuta Natsir M.Farm', 'Makuta Natsir M.Farm@gmail.com', NULL, '$2y$10$LPCdHubKGKLPr3ooufIvLOmzKI346/fq/8/xoEbJX2CcsTRoFhGRi', NULL, '2019-09-12 03:38:40', '2019-09-12 03:38:40'),
(13962, 'mandor', 'Hartana Januar', 'Hartana Januar@gmail.com', NULL, '$2y$10$DmGeMnXK40dXlW3o96U4y.YxFgafzjaugVFWyemYtT.Vxxi1KbyTK', NULL, '2019-09-12 03:38:43', '2019-09-12 03:38:43'),
(14106, 'mandor', 'Sakura Rahimah M.Farm', 'Sakura Rahimah M.Farm@gmail.com', NULL, '$2y$10$0Y4Vo2UW11Pbrgd.CF2HS.89nV.eSKEqB57nDxs3zCC7kYoPx6Nui', NULL, '2019-09-12 03:38:46', '2019-09-12 03:38:46'),
(14133, 'mandor', 'Sari Rachel Pratiwi S.Sos', 'Sari Rachel Pratiwi S.Sos@gmail.com', NULL, '$2y$10$znqJSj12ginLfbo6KLJnLeXZhIFvLZJSyV.tr6krTAJ0V3JENzk/2', NULL, '2019-09-12 03:38:45', '2019-09-12 03:38:45'),
(14276, 'mandor', 'Elisa Mardhiyah', 'Elisa Mardhiyah@gmail.com', NULL, '$2y$10$iR8mgB7GuVkzQ4UaNXHiRuiYse2YTsJdY43Ycsr.nbLW8fT8cGaMy', NULL, '2019-09-12 03:38:36', '2019-09-12 03:38:36'),
(14355, 'mandor', 'Rina Tiara Winarsih', 'Rina Tiara Winarsih@gmail.com', NULL, '$2y$10$H4Pffo2vqPnoPyiYKNeXaugUqhOSge6IeDlTM.7txbMjRBTWhwaji', NULL, '2019-09-12 03:38:43', '2019-09-12 03:38:43'),
(14466, 'mandor', 'Zahra Nuraini', 'Zahra Nuraini@gmail.com', NULL, '$2y$10$exVOuoveQcC6t9Fromlsgu0.MLNsFguC8LO5UxhlNmsS5pTO.auqS', NULL, '2019-09-12 03:38:39', '2019-09-12 03:38:39'),
(14495, 'mandor', 'alfianalfian', 'alfian00a0000@gmail.com', NULL, '$2y$10$ThwWwTXmDJ1sEGLM.5lLUOfWGzRKwXwlH1Oakxan9u9JSaKhObCrK', NULL, '2019-09-29 09:03:19', '2019-09-29 09:03:19'),
(15004, 'mandor', 'Vivi Shania Zulaika M.Pd', 'Vivi Shania Zulaika M.Pd@gmail.com', NULL, '$2y$10$U.jHfhZJ9194Yvf9NXFc8OsIlrpuXwLNw1Xi8E3e2/Nwumn9KOqUC', NULL, '2019-09-12 03:38:45', '2019-09-12 03:38:45'),
(15334, 'mandor', 'Laksana Gamani Natsir', 'Laksana Gamani Natsir@gmail.com', NULL, '$2y$10$GIgBJYrPOVaum5xHXAUo5OTn3MJEfDFyUYpwS8e8LD4Hr5vsiHe8W', NULL, '2019-09-12 03:38:44', '2019-09-12 03:38:44'),
(15767, 'mandor', 'Vanya Wastuti', 'Vanya Wastuti@gmail.com', NULL, '$2y$10$uEWv8bi9u8NxCT.HMj4k7umd24UQfpeCJARJ7JBi0SyukWsPe4yua', NULL, '2019-09-12 03:38:39', '2019-09-12 03:38:39'),
(16100, 'mandor', 'Ifa Nurdiyanti', 'Ifa Nurdiyanti@gmail.com', NULL, '$2y$10$.4iY9Kkj9zsxE2s7.eX7jOrjphaTpODKeMLjtWkfN.g3/AaQC7rSG', NULL, '2019-09-12 03:38:37', '2019-09-12 03:38:37'),
(16347, 'mandor', 'Prabawa Rajata', 'Prabawa Rajata@gmail.com', NULL, '$2y$10$ubBR1h4lgEgA8U04Kd9BluHmQNofYJgVjzOOyZBPVSD88FltfLc8O', NULL, '2019-09-12 03:38:46', '2019-09-12 03:38:46'),
(16546, 'mandor', 'Muhammad Bakiadi Ardianto', 'Muhammad Bakiadi Ardianto@gmail.com', NULL, '$2y$10$90kqywUkNwy23N6ODiTn6OXpHpyUoZPYp1McTAKdZa0Ovydzqj1jW', NULL, '2019-09-12 03:38:34', '2019-09-12 03:38:34'),
(16588, 'mandor', 'Hasim Paiman Nababan', 'Hasim Paiman Nababan@gmail.com', NULL, '$2y$10$whdj4bLXnYWojK3XW4cKvuBKxQZ09/qo6c0sQ5z/J37twtfgH/j/W', NULL, '2019-09-12 03:38:36', '2019-09-12 03:38:36'),
(16633, 'mandor', 'Aswani Lazuardi', 'Aswani Lazuardi@gmail.com', NULL, '$2y$10$YQ3iw4gUzQ9NdwBDWaj1Me5Qt2IAUYMQZsXt6rkVzx2pecQmd9TnK', NULL, '2019-09-12 03:38:40', '2019-09-12 03:38:40'),
(16851, 'mandor', 'Asmadi Hutagalung', 'Asmadi Hutagalung@gmail.com', NULL, '$2y$10$Cn1dRkQxIkJ5YTVv6E2SY.QMD3bzyRqYinq/Sfcfk1AXMAEzbath.', NULL, '2019-09-12 03:38:38', '2019-09-12 03:38:38'),
(16993, 'mandor', 'Pandu Winarno', 'Pandu Winarno@gmail.com', NULL, '$2y$10$OFh5goz3uGYMBCKVcf4sc.0G.ike.jVo5EiBwLBR4vAyKh8sMaRN6', NULL, '2019-09-12 03:38:43', '2019-09-12 03:38:43'),
(16995, 'mandor', 'Bagiya Halim', 'Bagiya Halim@gmail.com', NULL, '$2y$10$t8rUGzKYO4UJ0fiZaa2c7unZD36iYIKvCOjcsGGP.L.0dIFa5VO8i', NULL, '2019-09-12 03:38:35', '2019-09-12 03:38:35'),
(17619, 'mandor', 'Purwadi Tamba', 'Purwadi Tamba@gmail.com', NULL, '$2y$10$E8qyW5oboGhBrJhjqAqrKugsO6bk.03/2OuA4omihH57vSi9rqfde', NULL, '2019-09-12 03:38:39', '2019-09-12 03:38:39'),
(17786, 'mandor', 'Hasan Firmansyah', 'Hasan Firmansyah@gmail.com', NULL, '$2y$10$9rxxe2b1jAmjOXtLVLkdg.NitjQSisvyI8otl8haBpeslXPwDNnvG', NULL, '2019-09-12 03:38:34', '2019-09-12 03:38:34'),
(17972, 'mandor', 'Ajimat Eman Ardianto S.T.', 'Ajimat Eman Ardianto S.T.@gmail.com', NULL, '$2y$10$XKZmsT84q99X6tlXBnKDK.y0IIsTNS1Mx2MB.63h7Yr9WrR9ZPzcG', NULL, '2019-09-12 03:38:35', '2019-09-12 03:38:35'),
(18126, 'mandor', 'Julia Belinda Mayasari M.M.', 'Julia Belinda Mayasari M.M.@gmail.com', NULL, '$2y$10$D.yq0dO64et4Pg6Vw92tmuK.tz8cPwSClFfPJrTuNsHtayiKp3cEG', NULL, '2019-09-12 03:38:34', '2019-09-12 03:38:34'),
(18291, 'mandor', 'Artanto Pradana', 'Artanto Pradana@gmail.com', NULL, '$2y$10$d66N8UkV7RPyQxee5w/Z..AZMx7GqhebJOYUwQjFGQZRt5ZkXfLAu', NULL, '2019-09-12 03:38:35', '2019-09-12 03:38:35'),
(18803, 'mandor', 'Yance Fujiati', 'Yance Fujiati@gmail.com', NULL, '$2y$10$No8MoM.oyFMyVKG.mb7jFucKgwS8Gl44ARmGIdXeh31v5pBXC831i', NULL, '2019-09-12 03:38:45', '2019-09-12 03:38:45'),
(18808, 'mandor', 'Iriana Hasanah', 'Iriana Hasanah@gmail.com', NULL, '$2y$10$aiEK2Yky12lYMt7iC3Qkj.gPTKx5qmQmrT5QNIMysdAmDT9XLALL.', NULL, '2019-09-12 03:38:37', '2019-09-12 03:38:37'),
(19115, 'mandor', 'Anita Pratiwi', 'Anita Pratiwi@gmail.com', NULL, '$2y$10$IUgdnb2G1Bdhk5FiBp3rL.nBSg2dcmnkuE3Ll3P4CYi78DIV8Xxea', NULL, '2019-09-12 03:38:39', '2019-09-12 03:38:39'),
(19368, 'mandor', 'Maida Mandasari', 'Maida Mandasari@gmail.com', NULL, '$2y$10$PFyWjowgP.iD5HrmujdTq..Ayba5eSeakW9u35r/pGAgcDSxMHsF6', NULL, '2019-09-12 03:38:35', '2019-09-12 03:38:35'),
(19469, 'mandor', 'Zahra Ayu Yulianti S.E.', 'Zahra Ayu Yulianti S.E.@gmail.com', NULL, '$2y$10$TPsfPCT5F9nfrLBOmsnMje1tR0UoMLl8RYa27jo53VvmDzLQYXNSq', NULL, '2019-09-12 03:38:43', '2019-09-12 03:38:43'),
(19676, 'mandor', 'Umaya Suryono M.Ak', 'Umaya Suryono M.Ak@gmail.com', NULL, '$2y$10$LMskcpsIK3Od6loh3rNbnuWTX/lB3VNemCBXJTIsPTnCzAgY6d6sS', NULL, '2019-09-12 03:38:40', '2019-09-12 03:38:40'),
(19702, 'mandor', 'Sari Yuliarti S.Sos', 'Sari Yuliarti S.Sos@gmail.com', NULL, '$2y$10$Y3FgwqDQ7bCYfsuyQqdhjOUZo3b3QYPh/DOccxJ5Kh7rZaS0AaQEq', NULL, '2019-09-12 03:38:41', '2019-09-12 03:38:41'),
(19949, 'mandor', 'Vanya Aryani M.M.', 'Vanya Aryani M.M.@gmail.com', NULL, '$2y$10$n8vs2zH16PGA5ZAnAiXjauuhBGY3B1gjAcyH0VaVWIpgfkv7m.XXm', NULL, '2019-09-12 03:38:39', '2019-09-12 03:38:39'),
(19960, 'mandor', 'Titin Mardhiyah', 'Titin Mardhiyah@gmail.com', NULL, '$2y$10$HPbpiO2uTga0yDgKZJSAYu1sA3pU138TmNyBOr1ibJ33mwM/XXXfO', NULL, '2019-09-12 03:38:37', '2019-09-12 03:38:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bos`
--
ALTER TABLE `bos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mandor`
--
ALTER TABLE `mandor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `registrant`
--
ALTER TABLE `registrant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bos`
--
ALTER TABLE `bos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mandor`
--
ALTER TABLE `mandor`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14673;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registrant`
--
ALTER TABLE `registrant`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tanaman`
--
ALTER TABLE `tanaman`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19961;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bos`
--
ALTER TABLE `bos`
  ADD CONSTRAINT `bos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
