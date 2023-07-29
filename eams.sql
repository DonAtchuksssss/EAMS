-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 05:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ears`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=visible,1=hidden',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Men', 'Evacuation', 'Evacuation', 'uploads/category/1667211691.jpg', 'Evacuation', 'This is a Men', 'This is a Men', 0, '2022-10-31 02:21:31', '2022-10-31 02:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `evacuation`
--

CREATE TABLE `evacuation` (
  `id` int(255) NOT NULL,
  `category_id` int(255) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barangay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agency_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slugs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `capacity` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `evacuation`
--

INSERT INTO `evacuation` (`id`, `category_id`, `name`, `barangay`, `agency_slug`, `slugs`, `brand`, `status`, `capacity`, `created_at`, `updated_at`) VALUES
(1, 5, 'Annafunan East Barangay Hall', 'Annafunan', 'annafunanhall', 'AnnafunanEastBarangayHall', 'Unavailable', 0, 300, NULL, NULL),
(2, 5, 'Annafunan Elementary School', 'Annafunan', 'annafunanelem', 'AnnafunanElementarySchool', 'Available', 0, 300, NULL, NULL),
(3, 5, 'Atulayan Elementary School', 'Atulayan', 'atulayanelem', 'AtulayanElementarySchool', 'Available', 0, 300, NULL, NULL),
(4, 5, 'Atulayan Norte Multi-Purpose Hall', 'Atulayan', 'atulayannhall', 'AtulayanNorteMulti-PurposeHall', 'Available', 0, 300, '2022-10-31 06:33:15', '2022-10-31 16:44:06'),
(5, 5, 'Atulayan Sur Multi-Purpose Hall', 'Atulayan', 'atulayanshall', 'AtulayanSurMulti-PurposeHall', 'Available', 0, 300, '2022-10-31 15:56:43', '2022-10-31 15:56:43'),
(6, 5, 'Bagay Elementary School', 'Bagay', 'bagay', 'BagayElementarySchool', 'Available', 0, 3001, '2022-10-31 15:58:41', '2022-10-31 15:58:41'),
(7, 5, 'Balzain East Multi-Purpose Hall', 'Balzain', 'balzainehall', 'BalzainEastMulti-PurposeHall', 'Available', 0, 300, NULL, NULL),
(8, 5, 'Balzain Elementary School', 'Balzain', 'balzainelem', 'BalzainElementarySchool', 'Available', 0, 300, NULL, NULL),
(9, 5, 'Balzain West Multi-Purpose Hall', 'Balzain', 'balzainwhall', 'BalzainWestMulti-PurposeHall', 'Available', 0, 300, NULL, NULL),
(10, 5, 'Buntun Multi-Purpose Hall', 'Buntun', 'buntunmulti', 'BuntunMulti-PurposeHall', 'Available', 0, 300, NULL, NULL),
(11, 5, 'Capatan Multi-Purpose Hall', 'Capatan', 'capatanmulti', 'CapatanMulti-PurposeHall', 'Available', 0, 300, NULL, NULL),
(12, 5, 'Cataggaman Elementary School Main', 'Cataggaman', 'cataggamanelem', 'CataggamanElementarySchoolMain', 'Available', 0, 300, NULL, NULL),
(13, 5, 'Cataggaman Nuevo Elementary School', 'Cataggaman', 'cataggamannuevo', 'CataggamanNuevoElementarySchool', 'Available', 0, 300, NULL, NULL),
(14, 5, 'Cataggaman Pardo Multi-Purpose Hall', 'Cataggaman', 'cataggamanpardo', 'CataggamanPardoMulti-PurposeHall', 'Available', 0, 300, NULL, NULL),
(15, 5, 'Cataggaman Viejo Multi-Purpose Hall', 'Cataggaman', 'cataggamanviejo', 'CataggamanViejoMulti-PurposeHall', 'Available', 0, 300, NULL, NULL),
(16, 5, 'Centro 01 Multi-Purpose Hall', 'Centro', 'centro01', 'Centro01Multi-PurposeHall', 'Available', 0, 300, NULL, NULL),
(17, 5, 'Centro 09 Multi-Purpose Hall', 'Centro', 'centro09', 'Centro09Multi-PurposeHall', 'Available', 0, 300, NULL, NULL),
(18, 5, 'Centro 10 Multi-Purpose Hall', 'Centro', 'centro10', 'Centro10Multi-PurposeHall', 'Available', 0, 300, NULL, NULL),
(19, 5, 'Gosi National High School', 'Gosi', 'gosischool', 'GosiNationalHighSchool', 'Available', 0, 300, NULL, NULL),
(20, 5, 'Gosi Norte Multi-Purpose Hall', 'Gosi', 'gosinhall', 'GosiNorteMulti-PurposeHall', 'Available', 0, 300, NULL, NULL),
(21, 5, 'Gosi Sur Multi-Purpose Hall', 'Gosi', 'gosishall', 'GosiSurMulti-PurposeHall', 'Available', 0, 300, NULL, NULL),
(22, 5, 'Larion Bajo Multi-Purpose Hall', 'Larion', 'larionhall', 'LarionBajoMulti-PurposeHall', 'Available', 0, 300, NULL, NULL),
(23, 5, 'Larion Elementary School', 'Larion', 'larionelem', 'LarionElementarySchool', 'Available', 0, 300, NULL, NULL),
(24, 5, 'Libag Norte Multi-Purpose Hall', 'Libag', 'libagnorte', 'LibagNorteMulti-PurposeHall', 'Available', 0, 300, NULL, NULL),
(25, 5, 'Libag Sur Multi-Purpose Hall', 'Libag', 'libagsur', 'LibagSurMulti-PurposeHall', 'Available', 0, 300, NULL, NULL),
(26, 5, 'Namabbalan Norte Multi-Purpose Hall', 'Namabbalan', 'namabbalannorte', 'NamabbalanNorteMulti-PurposeHall', 'Available', 0, 3001, NULL, NULL),
(27, 5, 'Namabbalan Sur Multi-Purpose Hall', 'Namabbalan', 'namabbalansur', 'NamabbalanSurMulti-PurposeHall', 'Available', 0, 300, NULL, NULL),
(28, 5, 'San Gabriel Multi-Purpose Hall', 'San Gabriel', 'sangab', 'SanGabrielMulti-PurposeHall', 'Available', 0, 300, NULL, NULL),
(29, 5, 'Tagga-Dadda Elementary School', 'Tagga', 'taggadaddaelem', 'Tagga-DaddaElementarySchool', 'Available', 0, 300, NULL, NULL),
(30, 5, 'Tagga Multi-Purpose Hall', 'Tagga', 'taggahall', 'TaggaMulti-PurposeHall', 'Available', 0, 300, NULL, NULL),
(31, 5, 'Tuguegarao City People\'s Gymnasium', 'Ugac', 'tcpg', 'TuguegaraoCityPeoplesGymnasium', 'Available', 0, 300, NULL, NULL),
(32, 5, 'Tuguegarao City Science High School', 'Ugac', 'tcshs', 'TuguegaraoScienceHighSchool', 'Available', 0, 300, NULL, NULL),
(33, 5, 'Tuguegarao East Central School', 'Bagumbayan', 'tecs', 'TuguegaraoEastCentralSchool', 'Available', 0, 300, NULL, NULL),
(34, 5, 'Tuguegarao North Central School', 'Caritan', 'tncs', 'TuguegaraoNorthCentralSchool', 'Available', 0, 0, '0000-00-00 00:00:00', NULL),
(35, 5, 'Tuguegarao North-East Central School', 'Tanza', 'tnecs', 'TuguegaraoNorth-EastCentral', 'Available', 0, 300, NULL, NULL),
(36, 5, 'Tuguegarao West Central School', 'Ugac', 'twcs', 'TuguegaraoWestCentralSchool', 'Available', 0, 300, NULL, NULL),
(37, 5, 'Ugac Norte Multi-Purpose Hall', 'Ugac', 'ugacnorte', 'UgacNorteMulti-PurposeHall', 'Available', 0, 300, NULL, NULL),
(38, 5, 'Ugac Sur Multi-Purpose Hall', 'Ugac', 'ugacsur', 'UgacSurMultiPurposeHall', 'Available', 0, 300, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `evacuation_images`
--

CREATE TABLE `evacuation_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `evacuation_images`
--

INSERT INTO `evacuation_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'img/annafunanB.jpg', '2022-10-31 06:33:15', '2022-10-31 06:33:15'),
(2, 2, 'img/AnnafunanS.jpg', '2022-10-31 15:56:43', '2022-10-31 15:56:43'),
(3, 3, 'img/AtulayanS.jpg', '2022-10-31 15:58:41', '2022-10-31 15:58:41'),
(4, 4, 'img/AtulayanB.jpg', NULL, NULL),
(5, 5, 'img/AtulayanM.jpg', NULL, NULL),
(6, 6, 'img/BagayS.jpg', NULL, NULL),
(7, 7, 'img/BalzainM.jpg', NULL, NULL),
(8, 8, 'img/BalzainS.jpg', NULL, NULL),
(9, 9, 'img/BalzainW.jpg', NULL, NULL),
(10, 10, 'img/BuntunM.jpg', NULL, NULL),
(11, 11, 'img/CapatanM.jpg', NULL, NULL),
(12, 12, 'img/CataggamanS.jpg', NULL, NULL),
(13, 13, 'img/CataggamanNuevo.jpg', NULL, NULL),
(14, 14, 'img/CataggamanPM.jpg', NULL, NULL),
(15, 15, 'img/CataggamanVM.jpg', NULL, NULL),
(16, 16, 'img/Centro1.jpg', NULL, NULL),
(17, 17, 'img/Centro9.jpg', NULL, NULL),
(18, 18, 'img/Centro10.jpg', NULL, NULL),
(19, 19, 'img/GosiS.jpg', NULL, NULL),
(20, 20, 'img/GosiNM.jpg', NULL, NULL),
(21, 21, 'img/GosiSm.jpg', NULL, NULL),
(22, 22, 'img/LarionM.jpg', NULL, NULL),
(23, 23, 'img/LarionS.jpg', NULL, NULL),
(24, 24, 'img/LibagN.jpg', NULL, NULL),
(25, 25, 'img/LibagS.jpg', NULL, NULL),
(26, 26, 'img/Namabbalan.jpg\r\n', NULL, NULL),
(27, 27, 'img/NamabbalanS.png', NULL, NULL),
(28, 28, 'img/SG.jpg', NULL, NULL),
(29, 29, 'img/Tagga-Dadda.jpg', NULL, NULL),
(30, 30, 'img/tagga.jpg', NULL, NULL),
(31, 31, 'img/PG.jpg', NULL, NULL),
(32, 32, 'img/TS.jpg', NULL, NULL),
(33, 33, 'img/TE.jpg\n', NULL, NULL),
(34, 34, 'img/TNCS.jpg', NULL, NULL),
(35, 35, 'img/NE.jpg', NULL, NULL),
(36, 36, 'img/TW.jpg', NULL, NULL),
(37, 37, 'img/UgacN.jpg', NULL, NULL),
(38, 38, 'img/UgacS.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `evacuees`
--

CREATE TABLE `evacuees` (
  `id` int(255) NOT NULL,
  `loc_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `Evacuation` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `member` varchar(255) NOT NULL,
  `date_entered` varchar(255) NOT NULL,
  `date_leave` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evacuees`
--

INSERT INTO `evacuees` (`id`, `loc_id`, `fname`, `lname`, `address`, `Evacuation`, `room`, `member`, `date_entered`, `date_leave`, `deleted_at`) VALUES
(130, 9, 'Carl John', 'Tamayao', 'Balzain ', 'Balzain West Multi-Purpose Hall', '12', 'none', '2022-11-30', '2022-12-01', NULL),
(161, 35, 'Carl Johns', 'Tamayao', 'Atulayan', 'Tuguegarao North-East Central School', '', 'none', '2022-12-02', '2022-12-02', NULL),
(165, 38, 'Carl John', 'Tamayao', 'Ugac', 'Ugac Sur Multi-Purpose Hall', '', 'none', '2022-12-02', '2022-12-02', NULL),
(192, 2, 'Carl Johns', 'Tamayao', 'Annafunan', 'Annafunan Elementary School', 'dsa', 'none', '2022-12-07', '2022-12-07', NULL),
(196, 31, 'Carl John', 'Tamayao', 'Centro', 'Tuguegarao City People\'s Gymnasium', '', 'none', '2022-12-08', '2022-12-08', '2022-12-09 09:03:13'),
(197, 31, 'Carl John', 'Tamayao', 'Centro', 'Tuguegarao City People\'s Gymnasium', '', 'none', '2022-12-08', '2022-12-08', '2022-12-09 09:03:16'),
(198, 3, 'Carl John', 'Tamayao', 'Atulayan', 'Atulayan Elementary School', 'dsf', 'none', '2022-12-08', '2022-12-08', '2022-12-30 02:39:20'),
(199, 4, 'Carl John', 'Tamayao', 'Atulayan', 'Atulayan Norte Multi-Purpose Hall', '', 'none', '2022-12-08', '2022-12-08', NULL),
(200, 5, 'Carl John', 'Tamayao', 'Atulayan', 'Atulayan Sur Multi-Purpose Hall', '', 'none', '2022-12-08', '2022-12-08', NULL),
(201, 26, 'Carl John', 'Tamayao', 'Namabbalan', 'Namabbalan Norte Multi-Purpose Hall', '', 'none', '2022-12-08', '2022-12-08', NULL),
(206, 1, 'wa', 'wa', 'Atulayan', 'Annafunan East Barangay Hall', '', 'wa', '2001-03-13', '2001-03-12', NULL),
(210, 4, 'd', 'd', 'Centro 10', 'Atulayan Norte Multi-Purpose Hall', '', 'd', '2022-12-16', '2022-12-16', NULL),
(211, 5, 'd', 'd', 'Centro 06', 'Atulayan Sur Multi-Purpose Hall', '', 'd', '2022-12-16', '2022-12-16', '2022-12-17 01:30:19'),
(212, 6, 'eq', 'wd', 'Annafunan', 'Bagay Elementary School', '', 'd', '2022-12-16', '2022-12-16', '2022-12-17 01:31:12'),
(213, 1, 'qwer', 'qwe', 'Centro 08', 'Annafunan East Barangay Hall', '', 'wqe', '2022-12-18', '2022-12-18', NULL),
(214, 1, 'xax', 'xaC', 'Annafunan', 'Annafunan East Barangay Hall', 'DQS', 'C', '2022-12-27', '2022-12-27', NULL),
(215, 2, 'sda', 'asd', 'Centro 07', 'Annafunan Elementary School', 'dsa', 'sda', '2022-12-27', '2022-12-27', NULL),
(216, 2, 'dsa', 'ds', 'San Gabriel', 'Annafunan Elementary School', 'sds', 'sd', '2022-12-29', '2022-12-29', NULL),
(217, 3, 'ds', 'sd', 'Centro 05', 'Atulayan Elementary School', 'ds', 'ds', '2022-12-29', '2022-12-29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `id` int(255) NOT NULL,
  `loc_id` int(255) NOT NULL,
  `evacuation_name` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `access` varchar(255) NOT NULL,
  `number_of_evacuees` varchar(255) NOT NULL,
  `available_evacuees` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`id`, `loc_id`, `evacuation_name`, `barangay`, `access`, `number_of_evacuees`, `available_evacuees`, `image`, `status`, `url`) VALUES
(1, 1, 'Annafunan Elementary School', 'Annafunan', 'Unavailable', '123', '312', 'AnnafunanS.jpg', 1, 'annafunan_E.php'),
(2, 2, 'Annafunan West Barangay Hall', 'Annafunan', 'Unavailable', '666', '11\r\n', 'annafunanB.jpg', 1, 'annafunanB.php'),
(3, 3, 'Atulayan Norte Multi-Purpose Hall', 'Atulayan', 'Available', '12', '123', 'AtulayanB.jpg', 1, 'atulayanN_multi.PHP'),
(4, 4, 'Atulayan Elementary School', 'Atulayan', 'Available', '123', '312', 'AtulayanS.jpg', 1, 'Atulayan_elem.php'),
(5, 5, 'Atulayan Sur Multi-Purpose Hall', 'Atulayan', 'Available', '213', '213', 'AtulayanM.jpg', 1, 'AtulayanS_multi.php'),
(6, 6, 'Bagay Elementary School', 'Bagay', 'Available', '31', '2', 'BagayS.jpg', 1, 'bagay_elem.php'),
(7, 7, 'Balzain East Multi-Purpose Hall', 'Balzain', 'Available', '2', '2', 'BalzainM.jpg', 1, 'balzainE_multi.php'),
(8, 8, 'Balzain Elementary School', 'Balzain', 'Available', '2', '2', 'BalzainS.jpg', 1, 'balzain_elem.php'),
(9, 9, 'Balzain West Multi-Purpose Hall', 'Balzain', 'Available', '21', '12', 'BalzainW.jpg', 1, 'balzainW_multi.php'),
(10, 10, 'Buntun Multi-Purpose Hall', 'Buntun', 'Available', '21', '12', 'BuntunM.jpg', 1, 'buntun_multi.php'),
(11, 11, 'Capatan Multi-Purpose Hall', 'Capatan', 'Available', '21', '21', 'CapatanM.jpg', 1, 'capatan_multi.php'),
(12, 12, 'Cataggaman Elementary School Main', 'Cataggaman', 'Unavailable', '21', '1', 'CataggamanS.jpg', 1, 'cataggaman_elem.php'),
(13, 13, 'Cataggaman Nuevo Elementary School', 'Cataggaman', 'Available', '21', '21', 'CataggamanNuevo.jpg', 1, 'cataggamanN_elem.php'),
(14, 14, 'Cataggaman Pardo Multi-Purpose Hall', 'Cataggaman', 'Available', '12', '12', 'CataggamanPM.jpg', 1, 'cataggamanP_multi.php'),
(15, 15, 'Cataggaman Viejo Multi-purpose Hall', 'Cataggaman', 'Available', '21', '21', 'CataggamanVM.jpg', 1, 'cataggamanV_multi.php'),
(16, 16, 'Centro 01 Multi-purpose Hall', 'Centro', 'Available', '12', '21', 'Centro1.jpg', 1, 'centro01_multi.php'),
(17, 17, 'Centro 09 Multi-Purpose Hall', 'Centro', 'Available', '21', '21', 'Centro9.jpg', 1, 'centro09_multi.php'),
(18, 18, 'Centro 10 Multi-Purpose Hall', 'Centro', 'Available', '212', '1', 'Centro10.jpg', 1, 'centro10_multi.php'),
(19, 19, 'Gosi National High School', 'Gosi', 'Available', '12', '12', 'GosiS.jpg', 1, 'gosi.php'),
(20, 20, 'Gosi Norte Multi-Purpose Hall', 'Gosi', 'Available', '22', '12', 'GosiNM.jpg', 1, 'gosiN_multi.php'),
(21, 21, 'Gosi Sur Multi-Purpose Hall', 'Gosi', 'Available', '21', '21', 'GosiSm.jpg', 1, 'gosiS_multi.php'),
(22, 22, 'Larion Bajo Multi-purpose Hall', 'Larion', 'Available', '21', '21', 'LarionM.jpg', 1, 'larionB_multi.php'),
(23, 23, 'Larion Elementary school', 'Larion', 'Available', '31', '31', 'LarionS.jpg', 1, 'larion_elem.php'),
(24, 24, 'Libag Norte Multi-Purpose Hall', 'Libag', 'Available', '21', '1', 'LibagN.jpg', 1, 'libagN_multi.php'),
(25, 25, 'Libag Sur Multi-Purpose Hal', 'Libag', 'Available', '1', '1', 'LibagS.jpg', 1, 'libagS_multi.php'),
(26, 26, 'Namabbalan Norte Multi-Purpose Hall', 'Namabbalan', 'Available', '21', '12', 'Namabbalan.jpg', 1, 'namabbalanN_multi.php'),
(27, 27, 'Namabbalan Sur Multi-Purpose Hall', 'Namabbalan', 'Available', '21', '21', 'NamabbalanS.png', 1, 'namabbalanS_multi.php'),
(28, 28, 'Tuguegarao North Central School', 'Caritan', 'Available', '21', '121', 'TNCS.jpg', 1, 'TNCS.php'),
(29, 29, 'Tuguegarao North-East Central', 'Tanza', 'Available', '21', '21', 'NE.jpg', 1, 'tnes.php'),
(30, 30, 'Tuguegarao City People\'s Gymnasium', 'Centro', 'Available', '21', '21', 'PG.jpg', 1, 'tcpg.php'),
(31, 31, 'San Gabriel Multi-Purpose Hall', 'San Gabriel', 'Available', '12', '12', 'SG.jpg', 1, 'sangab_multi'),
(32, 32, 'Tagga Multi-Purpose Hall', 'Tagga', 'Available', '21', '21', 'TaggaM.png', 1, 'tagga_multi'),
(33, 33, 'Tagga-Dadda Elementary School', 'Tagga', 'Available', '21', '21', 'Tagga-Dadda.jpg', 1, 'taggaD_elem'),
(34, 34, 'Tuguegarao East Central School', 'Centro', 'Available', '12', '1', 'TE.jpg', 1, 'tecs.php'),
(35, 35, 'Tuguegarao Science High School', 'Centro', 'Available', '1', '1', 'TS.jpg', 1, 'tshs.php'),
(36, 36, 'Tuguegarao West Central School', 'Ugac', 'Available', '12', '1', 'TW.jpg', 1, 'twcs.php'),
(37, 37, 'Ugac Norte Multi-Purpose Hall', 'Ugac', 'Available', '1', '1', 'UgacN.jpg', 1, ''),
(38, 38, 'Ugac Sur Multi-Purpose Hall', 'Ugac', 'Available', '1', '1', 'UgacS.jpg', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotline`
--

CREATE TABLE `hotline` (
  `id` int(255) NOT NULL,
  `agency` char(255) NOT NULL,
  `hotline` varchar(255) NOT NULL,
  `deleted_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotline`
--

INSERT INTO `hotline` (`id`, `agency`, `hotline`, `deleted_at`) VALUES
(58, 'Rescue 1111', '09066229924', NULL),
(59, 'CDRRMO Operations Center', '09458357924', NULL),
(60, 'Tuguegarao City Command Center', '09168872897', NULL),
(61, 'Tuguegarao City Police Station', '09058005118', NULL),
(62, 'Bureau of Fire Protection', '09178113474', NULL),
(63, 'Tuguegarao Water District', '09178743635', '2022-12-10 06:58:44'),
(64, 'Cagelco', '09175782437', NULL),
(65, 'Tuguegarao City Peoples General Hospital', '09068493668', NULL),
(93, 'carr', '221321', '2022-12-10 19:23:55'),
(94, 'qwew123', '123', '2022-12-14 00:40:22'),
(95, 'e', 'eee', '2022-12-14 02:55:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2022_10_10_034308_annaf_elem_table', 2),
(4, '2022_11_27_225802_create_verify_users_table', 3),
(5, '2022_12_07_040502_add_soft_delete_columns_to_annafhall', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `news` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`) VALUES
(1, 'No news as of present time');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`, `slug`, `status`, `type`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'Available', 'Unavailable', 0, 'Annafunan', NULL, NULL, 5),
(2, 'Unavailable', 'Unavailable', 0, 'Atulayan', NULL, NULL, 5),
(3, NULL, '', 0, 'Bagay', NULL, NULL, 5),
(4, NULL, '', 0, 'Bagumbayan', NULL, NULL, 5),
(5, NULL, '', 0, 'Balzain', NULL, NULL, 5),
(6, NULL, '', 0, 'Buntun', NULL, NULL, 5),
(7, NULL, '', 0, 'Caritan', NULL, NULL, 5),
(8, NULL, '', 0, 'Capatan', NULL, NULL, 5),
(9, NULL, '', 0, 'Cataggaman', NULL, NULL, 5),
(10, NULL, '', 0, 'Centro', NULL, NULL, 5),
(11, NULL, '', 0, 'Gosi', NULL, NULL, 5),
(12, NULL, '', 0, 'Larion', NULL, NULL, 5),
(13, NULL, '', 0, 'Libag', NULL, NULL, 5),
(14, NULL, '', 0, 'Namabbalan', NULL, NULL, 5),
(15, NULL, '', 0, 'San Gabriel', NULL, NULL, 5),
(16, NULL, '', 0, 'Tagga', NULL, NULL, 5),
(17, NULL, '', 0, 'Tanza', NULL, NULL, 5),
(18, NULL, '', 0, 'Ugac', NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthDate` date NOT NULL,
  `civilStatus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `municipality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barangay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified` int(11) NOT NULL DEFAULT 0,
  `mobileNum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fName`, `mName`, `lName`, `sex`, `birthDate`, `civilStatus`, `street`, `region`, `province`, `municipality`, `barangay`, `username`, `password`, `email`, `email_verified`, `mobileNum`, `profile`, `role`, `deleted_at`, `remember_token`) VALUES
(1, 'Carl John', 'Quilang', 'Tamayao', 'Male', '2022-12-01', 'single', 'ATULAYAN NORTE', 'Region II', 'Cagayan', 'Tuguegarao', 'Caritan', 'system', '$2y$10$Z9fr4FwpI2vzMv6tZ25kQe5IWGGH3Nc2ixt.RrQYK.nTzj8HSpagi', 'cj@gmail.com', 0, '09123456789', NULL, 2, NULL, NULL),
(7, 'Carl John', 'Quilang', 'Tamayao', 'MALE', '2020-01-27', 'SINGLE', 'ATULAYAN NORTE', 'REGION VI (WESTERN VISAYAS)', 'AKLAN', 'MADALAG', 'Alas-as', 'admin', '$2y$10$Cy05i6u2bA20IBmnDPo8xOIUnxdn.O5LCDI.6PJ.3MXbgZJYWsPzO', 'carljohn@gmail.com', 0, '09123456789', NULL, 1, NULL, 'Kl0SdL34Z1wO6HOcq0deCrF6i14ZAzvw06LF7wZQFGTpuMEFOhRFuinEx8Kz'),
(13, 'CARL JOHN', 'Quilang', 'TAMAYAO', 'MALE', '2001-06-28', 'SINGLE', 'ATULAYAN NORTE', 'Region II', 'Cagayan', 'Tuguegarao', 'Centro', 'carl', '$2y$10$kgQcK5k3YdhyRUskPKWll.O7aS9i.4Ss1vj/1R3nBscqhbNaus8fC', '1900600@usl.edu.ph', 0, '09976649549', NULL, 0, NULL, 'CIHwqlJOKkwnwgMHB7cXGYwl4bnhPahciF3dtB4I3uZFwzshhQLfOjHJloWy'),
(27, 'ed', NULL, 'e', 'MALE', '2022-12-18', 'Select a Status', 'd', 'd', 'd', 'd', 'dff', 'qwer123', '$2y$10$HdSyTwsGG/xzzyv8oVJRuedE5HH.FLNIWSg1m/1Obo4kTvcnDODJW', 'e@gmail.com', 0, '213123', NULL, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `user_id` int(11) NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `waterlevel`
--

CREATE TABLE `waterlevel` (
  `id` int(11) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waterlevel`
--

INSERT INTO `waterlevel` (`id`, `level`) VALUES
(1, 'Alert level 15.5 meters.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evacuation`
--
ALTER TABLE `evacuation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `evacuation_images`
--
ALTER TABLE `evacuation_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evacuees`
--
ALTER TABLE `evacuees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loc_id` (`loc_id`),
  ADD KEY `loc_id_2` (`loc_id`),
  ADD KEY `loc_id_3` (`loc_id`),
  ADD KEY `Evacuation` (`Evacuation`),
  ADD KEY `Evacuation_2` (`Evacuation`);
ALTER TABLE `evacuees` ADD FULLTEXT KEY `Evacuation_3` (`Evacuation`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `person_id` (`loc_id`),
  ADD UNIQUE KEY `loc_id_3` (`loc_id`),
  ADD KEY `loc_id` (`loc_id`),
  ADD KEY `loc_id_2` (`loc_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hotline`
--
ALTER TABLE `hotline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `waterlevel`
--
ALTER TABLE `waterlevel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evacuees`
--
ALTER TABLE `evacuees`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotline`
--
ALTER TABLE `hotline`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `waterlevel`
--
ALTER TABLE `waterlevel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `evacuees`
--
ALTER TABLE `evacuees`
  ADD CONSTRAINT `evac` FOREIGN KEY (`loc_id`) REFERENCES `evacuation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
