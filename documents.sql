-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2017 at 01:57 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `versions` int(11) NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `name`, `path`, `topic`, `author`, `editors`, `versions`, `tags`, `created_at`, `updated_at`) VALUES
(1, 'test2.htm', 'documents/arts_culture.txt', 'test2', 'admin', 'none', 0, 'YTozOntpOjA7czo0OiJBcnRzIjtpOjE7czo3OiJDdWx0dXJlIjtpOjI7czo0OiJXb3JrIjt9', '2017-09-07 21:08:36', '2017-09-07 21:08:36'),
(2, 'test3.htm', 'documents/arts_culture1.txt', 'test3', 'admin', 'none', 0, 'YTozOntpOjA7czo0OiJBcnRzIjtpOjE7czo3OiJDdWx0dXJlIjtpOjI7czo0OiJXb3JrIjt9', '2017-09-07 21:09:40', '2017-09-07 21:09:40'),
(3, 'test4.htm', 'documents/arts_culture2.txt', 'test4', 'admin', 'none', 0, 'YTozOntpOjA7czo0OiJBcnRzIjtpOjE7czo3OiJDdWx0dXJlIjtpOjI7czo0OiJXb3JrIjt9', '2017-09-07 21:10:05', '2017-09-07 21:10:05'),
(4, 'test5.htm', 'documents/arts_film.txt', 'test5', 'admin', 'none', 0, 'YTozOntpOjA7czo0OiJBcnRzIjtpOjE7czo3OiJDdWx0dXJlIjtpOjI7czo0OiJXb3JrIjt9', '2017-09-07 21:10:34', '2017-09-07 21:10:34'),
(5, 'test5.htm', 'documents/arts_music.txt', 'test5', 'admin', 'none', 0, 'YTo0OntpOjA7czo0OiJBcnRzIjtpOjE7czo3OiJDdWx0dXJlIjtpOjI7czo1OiJNdXNpYyI7aTozO3M6NDoiV29yayI7fQ==', '2017-09-07 21:12:03', '2017-09-07 21:12:03'),
(6, 'test5.htm', 'documents/arts_music2.txt', 'test5', 'admin', 'none', 0, 'YTo0OntpOjA7czo0OiJBcnRzIjtpOjE7czo3OiJDdWx0dXJlIjtpOjI7czo1OiJNdXNpYyI7aTozO3M6NDoiV29yayI7fQ==', '2017-09-07 21:12:30', '2017-09-07 21:12:30'),
(7, 'test5.htm', 'documents/arts_photo.txt', 'test5', 'admin', 'none', 0, 'YTo0OntpOjA7czo0OiJBcnRzIjtpOjE7czo3OiJDdWx0dXJlIjtpOjI7czoxMToiUGhvdG9ncmFwaHkiO2k6MztzOjQ6IldvcmsiO30=', '2017-09-07 21:13:40', '2017-09-07 21:13:40'),
(8, 'test5.htm', 'documents/arts_science.txt', 'test5', 'admin', 'none', 0, 'YTo0OntpOjA7czo0OiJBcnRzIjtpOjE7czo3OiJDdWx0dXJlIjtpOjI7czoxMToiUGhvdG9ncmFwaHkiO2k6MztzOjQ6IldvcmsiO30=', '2017-09-07 21:14:30', '2017-09-07 21:14:30'),
(9, 'test5.htm', 'documents/arts1.txt', 'test5', 'admin', 'none', 0, 'YTozOntpOjA7czo0OiJBcnRzIjtpOjE7czo3OiJDdWx0dXJlIjtpOjI7czo0OiJXb3JrIjt9', '2017-09-07 21:15:01', '2017-09-07 21:15:01'),
(10, 'test5.htm', 'documents/arts2.txt', 'test5', 'admin', 'none', 0, 'YTozOntpOjA7czo0OiJBcnRzIjtpOjE7czo3OiJDdWx0dXJlIjtpOjI7czo0OiJXb3JrIjt9', '2017-09-07 21:15:10', '2017-09-07 21:15:10'),
(11, 'test5.htm', 'documents/arts3.txt', 'test5', 'admin', 'none', 0, 'YTozOntpOjA7czo0OiJBcnRzIjtpOjE7czo3OiJDdWx0dXJlIjtpOjI7czo0OiJXb3JrIjt9', '2017-09-07 21:15:18', '2017-09-07 21:15:18'),
(12, 'test5.htm', 'documents/arts4.txt', 'test5', 'admin', 'none', 0, 'YTozOntpOjA7czo0OiJBcnRzIjtpOjE7czo3OiJDdWx0dXJlIjtpOjI7czo0OiJXb3JrIjt9', '2017-09-07 21:15:25', '2017-09-07 21:15:25'),
(13, 'test5.htm', 'documents/arts5.txt', 'test5', 'admin', 'none', 0, 'YTozOntpOjA7czo0OiJBcnRzIjtpOjE7czo3OiJDdWx0dXJlIjtpOjI7czo0OiJXb3JrIjt9', '2017-09-07 21:15:33', '2017-09-07 21:15:33'),
(14, 'test5.htm', 'documents/arts6.txt', 'test5', 'admin', 'none', 0, 'YTozOntpOjA7czo0OiJBcnRzIjtpOjE7czo3OiJDdWx0dXJlIjtpOjI7czo0OiJXb3JrIjt9', '2017-09-07 21:15:47', '2017-09-07 21:15:47'),
(15, 'test5.htm', 'documents/arts7.txt', 'test5', 'admin', 'none', 0, 'YTozOntpOjA7czo0OiJBcnRzIjtpOjE7czo3OiJDdWx0dXJlIjtpOjI7czo0OiJXb3JrIjt9', '2017-09-07 21:15:54', '2017-09-07 21:15:54'),
(16, 'test5.htm', 'documents/business_work.txt', 'test5', 'none', 'admin', 0, 'YToyOntpOjA7czo4OiJCdXNpbmVzcyI7aToxO3M6NDoiV29yayI7fQ==', '2017-09-07 21:16:44', '2017-09-07 21:16:44'),
(17, 'test5.htm', 'documents/business_work1.txt', 'test5', 'admin', 'none', 0, 'YToyOntpOjA7czo4OiJCdXNpbmVzcyI7aToxO3M6NDoiV29yayI7fQ==', '2017-09-07 21:16:52', '2017-09-07 21:16:52'),
(18, 'test5.htm', 'documents/business_work2.txt', 'test5', 'admin', 'none', 0, 'YToyOntpOjA7czo4OiJCdXNpbmVzcyI7aToxO3M6NDoiV29yayI7fQ==', '2017-09-07 21:17:03', '2017-09-07 21:17:03'),
(19, 'test5.htm', 'documents/business_work3.txt', 'test5', 'admin', 'none', 0, 'YToyOntpOjA7czo4OiJCdXNpbmVzcyI7aToxO3M6NDoiV29yayI7fQ==', '2017-09-07 21:17:11', '2017-09-07 21:17:11'),
(20, 'test5.htm', 'documents/business_work4.txt', 'test5', 'admin', 'none', 0, 'YToyOntpOjA7czo4OiJCdXNpbmVzcyI7aToxO3M6NDoiV29yayI7fQ==', '2017-09-07 21:17:19', '2017-09-07 21:17:19'),
(21, 'test5.htm', 'documents/business_work5.txt', 'test5', 'admin', 'none', 0, 'YToyOntpOjA7czo4OiJCdXNpbmVzcyI7aToxO3M6NDoiV29yayI7fQ==', '2017-09-07 21:17:26', '2017-09-07 21:17:26'),
(22, 'test5.htm', 'documents/business_work6.txt', 'test5', 'admin', 'none', 0, 'YToyOntpOjA7czo4OiJCdXNpbmVzcyI7aToxO3M6NDoiV29yayI7fQ==', '2017-09-07 21:17:35', '2017-09-07 21:17:35'),
(23, 'test5.htm', 'documents/business_work7.txt', 'test5', 'admin', 'none', 0, 'YToyOntpOjA7czo4OiJCdXNpbmVzcyI7aToxO3M6NDoiV29yayI7fQ==', '2017-09-07 21:17:48', '2017-09-07 21:17:48'),
(24, 'test5.htm', 'documents/business_work8.txt', 'test5', 'admin', 'none', 0, 'YToyOntpOjA7czo4OiJCdXNpbmVzcyI7aToxO3M6NDoiV29yayI7fQ==', '2017-09-07 21:17:56', '2017-09-07 21:17:56'),
(25, 'test5.htm', 'documents/child1.txt', 'test5', 'admin', 'none', 0, 'YTo1OntpOjA7czo4OiJDaGlsZHJlbiI7aToxO3M6NzoiQ3VsdHVyZSI7aToyO3M6NjoiRmFtaWx5IjtpOjM7czo4OiJIb2xpZGF5cyI7aTo0O3M6NDoiSG9tZSI7fQ==', '2017-09-07 21:18:55', '2017-09-07 21:18:55'),
(26, 'test5.htm', 'documents/child2.txt', 'test5', 'admin', 'none', 0, 'YTo1OntpOjA7czo4OiJDaGlsZHJlbiI7aToxO3M6NzoiQ3VsdHVyZSI7aToyO3M6NjoiRmFtaWx5IjtpOjM7czo4OiJIb2xpZGF5cyI7aTo0O3M6NDoiSG9tZSI7fQ==', '2017-09-07 21:19:03', '2017-09-07 21:19:03'),
(27, 'test5.htm', 'documents/child3.txt', 'test5', 'admin', 'none', 0, 'YTo1OntpOjA7czo4OiJDaGlsZHJlbiI7aToxO3M6NzoiQ3VsdHVyZSI7aToyO3M6NjoiRmFtaWx5IjtpOjM7czo4OiJIb2xpZGF5cyI7aTo0O3M6NDoiSG9tZSI7fQ==', '2017-09-07 21:19:15', '2017-09-07 21:19:15'),
(28, 'test5.htm', 'documents/child4.txt', 'test5', 'admin', 'none', 0, 'YTo1OntpOjA7czo4OiJDaGlsZHJlbiI7aToxO3M6NzoiQ3VsdHVyZSI7aToyO3M6NjoiRmFtaWx5IjtpOjM7czo4OiJIb2xpZGF5cyI7aTo0O3M6NDoiSG9tZSI7fQ==', '2017-09-07 21:19:23', '2017-09-07 21:19:23'),
(29, 'test5.htm', 'documents/child5.txt', 'test5', 'admin', 'none', 0, 'YTo1OntpOjA7czo4OiJDaGlsZHJlbiI7aToxO3M6NzoiQ3VsdHVyZSI7aToyO3M6NjoiRmFtaWx5IjtpOjM7czo4OiJIb2xpZGF5cyI7aTo0O3M6NDoiSG9tZSI7fQ==', '2017-09-07 21:19:31', '2017-09-07 21:19:31'),
(30, 'test5.htm', 'documents/fam1.txt', 'test5', 'admin', 'none', 0, 'YTo2OntpOjA7czo4OiJDaGlsZHJlbiI7aToxO3M6NzoiQ3VsdHVyZSI7aToyO3M6NjoiRmFtaWx5IjtpOjM7czo4OiJIb2xpZGF5cyI7aTo0O3M6NDoiSG9tZSI7aTo1O3M6NDoiV29yayI7fQ==', '2017-09-07 21:19:54', '2017-09-07 21:19:54'),
(31, 'test5.htm', 'documents/fam2.txt', 'test5', 'admin', 'none', 0, 'YTo2OntpOjA7czo4OiJDaGlsZHJlbiI7aToxO3M6NzoiQ3VsdHVyZSI7aToyO3M6NjoiRmFtaWx5IjtpOjM7czo4OiJIb2xpZGF5cyI7aTo0O3M6NDoiSG9tZSI7aTo1O3M6NDoiV29yayI7fQ==', '2017-09-07 21:20:06', '2017-09-07 21:20:06'),
(32, 'test5.htm', 'documents/fam3.txt', 'test5', 'admin', 'none', 0, 'YTo2OntpOjA7czo4OiJDaGlsZHJlbiI7aToxO3M6NzoiQ3VsdHVyZSI7aToyO3M6NjoiRmFtaWx5IjtpOjM7czo4OiJIb2xpZGF5cyI7aTo0O3M6NDoiSG9tZSI7aTo1O3M6NDoiV29yayI7fQ==', '2017-09-07 21:20:12', '2017-09-07 21:20:12'),
(33, 'test5.htm', 'documents/fam4.txt', 'test5', 'admin', 'none', 0, 'YTo2OntpOjA7czo4OiJDaGlsZHJlbiI7aToxO3M6NzoiQ3VsdHVyZSI7aToyO3M6NjoiRmFtaWx5IjtpOjM7czo4OiJIb2xpZGF5cyI7aTo0O3M6NDoiSG9tZSI7aTo1O3M6NDoiV29yayI7fQ==', '2017-09-07 21:20:20', '2017-09-07 21:20:20'),
(34, 'test5.htm', 'documents/holiday.txt', 'test5', 'admin', 'none', 0, 'YTo2OntpOjA7czo4OiJDaGlsZHJlbiI7aToxO3M6NzoiQ3VsdHVyZSI7aToyO3M6NjoiRmFtaWx5IjtpOjM7czo4OiJIb2xpZGF5cyI7aTo0O3M6NDoiSG9tZSI7aTo1O3M6NDoiV29yayI7fQ==', '2017-09-07 21:20:51', '2017-09-07 21:20:51'),
(35, 'test5.htm', 'documents/music1.txt', 'test5', 'admin', 'none', 0, 'YTo2OntpOjA7czo0OiJBcnRzIjtpOjE7czo4OiJDaGlsZHJlbiI7aToyO3M6NzoiQ3VsdHVyZSI7aTozO3M6NjoiRmFtaWx5IjtpOjQ7czo1OiJNdXNpYyI7aTo1O3M6NDoiV29yayI7fQ==', '2017-09-07 21:21:27', '2017-09-07 21:21:27'),
(36, 'test5.htm', 'documents/music2.txt', 'test5', 'admin', 'none', 0, 'YTo2OntpOjA7czo0OiJBcnRzIjtpOjE7czo4OiJDaGlsZHJlbiI7aToyO3M6NzoiQ3VsdHVyZSI7aTozO3M6NjoiRmFtaWx5IjtpOjQ7czo1OiJNdXNpYyI7aTo1O3M6NDoiV29yayI7fQ==', '2017-09-07 21:21:35', '2017-09-07 21:21:35'),
(37, 'test5.htm', 'documents/photo1.txt', 'test5', 'admin', 'none', 0, 'YTo2OntpOjA7czo0OiJBcnRzIjtpOjE7czo4OiJDaGlsZHJlbiI7aToyO3M6NzoiQ3VsdHVyZSI7aTozO3M6NjoiRmFtaWx5IjtpOjQ7czoxMToiUGhvdG9ncmFwaHkiO2k6NTtzOjQ6IldvcmsiO30=', '2017-09-07 21:22:06', '2017-09-07 21:22:06'),
(38, 'test5.htm', 'documents/photo2.txt', 'test5', 'admin', 'none', 0, 'YTo2OntpOjA7czo0OiJBcnRzIjtpOjE7czo4OiJDaGlsZHJlbiI7aToyO3M6NzoiQ3VsdHVyZSI7aTozO3M6NjoiRmFtaWx5IjtpOjQ7czoxMToiUGhvdG9ncmFwaHkiO2k6NTtzOjQ6IldvcmsiO30=', '2017-09-07 21:22:14', '2017-09-07 21:22:14'),
(39, 'test5.htm', 'documents/photo3.txt', 'test5', 'admin', 'none', 0, 'YTo2OntpOjA7czo0OiJBcnRzIjtpOjE7czo4OiJDaGlsZHJlbiI7aToyO3M6NzoiQ3VsdHVyZSI7aTozO3M6NjoiRmFtaWx5IjtpOjQ7czoxMToiUGhvdG9ncmFwaHkiO2k6NTtzOjQ6IldvcmsiO30=', '2017-09-07 21:22:23', '2017-09-07 21:22:23'),
(40, 'test5.htm', 'documents/photo4.txt', 'test5', 'admin', 'none', 0, 'YTo2OntpOjA7czo0OiJBcnRzIjtpOjE7czo4OiJDaGlsZHJlbiI7aToyO3M6NzoiQ3VsdHVyZSI7aTozO3M6NjoiRmFtaWx5IjtpOjQ7czoxMToiUGhvdG9ncmFwaHkiO2k6NTtzOjQ6IldvcmsiO30=', '2017-09-07 21:22:30', '2017-09-07 21:22:30'),
(41, 'test5.htm', 'documents/science1.txt', 'test5', 'admin', 'none', 0, 'YToyOntpOjA7czo3OiJTY2llbmNlIjtpOjE7czo0OiJXb3JrIjt9', '2017-09-07 21:23:33', '2017-09-07 21:23:33'),
(42, 'test5.htm', 'documents/science2.txt', 'test5', 'admin', 'none', 0, 'YToyOntpOjA7czo3OiJTY2llbmNlIjtpOjE7czo0OiJXb3JrIjt9', '2017-09-07 21:23:44', '2017-09-07 21:23:44'),
(43, 'test5.htm', 'documents/science3.txt', 'test5', 'admin', 'none', 0, 'YToyOntpOjA7czo3OiJTY2llbmNlIjtpOjE7czo0OiJXb3JrIjt9', '2017-09-07 21:23:50', '2017-09-07 21:23:50'),
(44, 'test5.htm', 'documents/science4.txt', 'test5', 'admin', 'none', 0, 'YToyOntpOjA7czo3OiJTY2llbmNlIjtpOjE7czo0OiJXb3JrIjt9', '2017-09-07 21:23:58', '2017-09-07 21:23:58'),
(45, 'test5.htm', 'documents/science5.txt', 'test5', 'admin', 'none', 0, 'YToyOntpOjA7czo3OiJTY2llbmNlIjtpOjE7czo0OiJXb3JrIjt9', '2017-09-07 21:24:07', '2017-09-07 21:24:07'),
(46, 'test5.htm', 'documents/science6.txt', 'test5', 'admin', 'none', 0, 'YToyOntpOjA7czo3OiJTY2llbmNlIjtpOjE7czo0OiJXb3JrIjt9', '2017-09-07 21:24:18', '2017-09-07 21:24:18'),
(47, 'test5.htm', 'documents/science7.txt', 'test5', 'admin', 'none', 0, 'YToyOntpOjA7czo3OiJTY2llbmNlIjtpOjE7czo0OiJXb3JrIjt9', '2017-09-07 21:24:26', '2017-09-07 21:24:26'),
(48, 'test5.htm', 'documents/science8.txt', 'test5', 'admin', 'none', 0, 'YToyOntpOjA7czo3OiJTY2llbmNlIjtpOjE7czo0OiJXb3JrIjt9', '2017-09-07 21:24:33', '2017-09-07 21:24:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
