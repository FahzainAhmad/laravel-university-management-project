-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 08:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uni_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `anncontent` varchar(200) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `anncontent`, `date`) VALUES
(1, 'This is to announce a holiday tomorrow', '2023-02-23'),
(2, 'bhjkb', '2023-02-23'),
(3, 'ghghjgj hihih', '2023-02-23'),
(4, 'bjhjhvv', '2023-02-23'),
(5, 'bjhjhvv', '2023-02-23'),
(6, 'bjhjhvv', '2023-02-23'),
(7, 'bjhjhvv', '2023-02-23'),
(8, 'bjhjhvv', '2023-02-23'),
(9, 'bjhjhvv', '2023-02-23'),
(10, 'bjhjhvv', '2023-02-23'),
(11, 'gjvhj', '2023-02-23'),
(12, 'qqqqqq', '2023-02-23'),
(13, 'bjkbjbk', '2023-02-23'),
(14, 'bjkbjbk', '2023-02-23'),
(15, 'bjkbjbk', '2023-02-23'),
(16, 'bjkbjbk', '2023-02-23'),
(17, 'sdfd', '2023-02-23'),
(18, 'sdfd', '2023-02-23'),
(19, 'sdfd', '2023-02-23'),
(20, 'sdfd', '2023-02-23'),
(21, 'sdfd', '2023-02-23'),
(22, 'sdfd', '2023-02-23'),
(23, 'sdfd', '2023-02-23'),
(24, 'sdfd', '2023-02-23'),
(25, 'sdfd', '2023-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stud_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) NOT NULL,
  `attend` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `stud_id`, `date`, `attend`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-02-01', 'P', NULL, NULL),
(2, 2, '2023-02-01', 'A', NULL, NULL),
(3, 3, '2023-02-01', 'P', NULL, NULL),
(4, 4, '2023-02-01', 'P', NULL, NULL),
(5, 5, '2023-02-01', 'P', NULL, NULL),
(6, 6, '2023-02-01', 'A', NULL, NULL),
(7, 7, '2023-02-01', 'A', NULL, NULL),
(8, 8, '2023-02-01', 'P', NULL, NULL),
(9, 9, '2023-02-01', 'P', NULL, NULL),
(10, 10, '2023-02-01', 'P', NULL, NULL),
(11, 11, '2023-02-01', 'A', NULL, NULL),
(12, 12, '2023-02-01', 'P', NULL, NULL),
(13, 13, '2023-02-01', 'P', NULL, NULL),
(14, 14, '2023-02-01', 'P', NULL, NULL),
(15, 15, '2023-02-01', 'A', NULL, NULL),
(16, 16, '2023-02-01', 'P', NULL, NULL),
(17, 17, '2023-02-01', 'P', NULL, NULL),
(18, 18, '2023-02-01', 'P', NULL, NULL),
(19, 19, '2023-02-01', 'A', NULL, NULL),
(20, 20, '2023-02-01', 'P', NULL, NULL),
(21, 21, '2023-02-01', 'P', NULL, NULL),
(22, 22, '2023-02-01', 'A', NULL, NULL),
(23, 23, '2023-02-01', 'P', NULL, NULL),
(24, 24, '2023-02-01', 'P', NULL, NULL),
(25, 1, '2023-02-02', 'P', NULL, NULL),
(26, 2, '2023-02-02', 'P', NULL, NULL),
(27, 3, '2023-02-02', 'P', NULL, NULL),
(28, 4, '2023-02-02', 'A', NULL, NULL),
(29, 5, '2023-02-02', 'A', NULL, NULL),
(30, 6, '2023-02-02', 'P', NULL, NULL),
(31, 7, '2023-02-02', 'P', NULL, NULL),
(32, 8, '2023-02-02', 'P', NULL, NULL),
(33, 9, '2023-02-02', 'A', NULL, NULL),
(34, 10, '2023-02-02', 'A', NULL, NULL),
(35, 11, '2023-02-02', 'A', NULL, NULL),
(36, 12, '2023-02-02', 'P', NULL, NULL),
(37, 13, '2023-02-02', 'P', NULL, NULL),
(38, 14, '2023-02-02', 'P', NULL, NULL),
(39, 15, '2023-02-02', 'P', NULL, NULL),
(40, 16, '2023-02-02', 'A', NULL, NULL),
(41, 17, '2023-02-02', 'A', NULL, NULL),
(42, 18, '2023-02-02', 'P', NULL, NULL),
(43, 19, '2023-02-02', 'P', NULL, NULL),
(44, 20, '2023-02-02', 'P', NULL, NULL),
(45, 21, '2023-02-02', 'A', NULL, NULL),
(46, 22, '2023-02-02', 'A', NULL, NULL),
(47, 23, '2023-02-02', 'A', NULL, NULL),
(48, 24, '2023-02-02', 'P', NULL, NULL),
(49, 1, '2023-02-03', 'P', NULL, NULL),
(50, 2, '2023-02-03', 'P', NULL, NULL),
(51, 3, '2023-02-03', 'P', NULL, NULL),
(52, 4, '2023-02-03', 'P', NULL, NULL),
(53, 5, '2023-02-03', 'P', NULL, NULL),
(54, 6, '2023-02-03', 'P', NULL, NULL),
(55, 7, '2023-02-03', 'P', NULL, NULL),
(56, 8, '2023-02-03', 'P', NULL, NULL),
(57, 9, '2023-02-03', 'A', NULL, NULL),
(58, 10, '2023-02-03', 'A', NULL, NULL),
(59, 11, '2023-02-03', 'P', NULL, NULL),
(60, 12, '2023-02-03', 'P', NULL, NULL),
(61, 13, '2023-02-03', 'P', NULL, NULL),
(62, 14, '2023-02-03', 'P', NULL, NULL),
(63, 15, '2023-02-03', 'P', NULL, NULL),
(64, 16, '2023-02-03', 'P', NULL, NULL),
(65, 17, '2023-02-03', 'A', NULL, NULL),
(66, 18, '2023-02-03', 'A', NULL, NULL),
(67, 19, '2023-02-03', 'P', NULL, NULL),
(68, 20, '2023-02-03', 'P', NULL, NULL),
(69, 21, '2023-02-03', 'P', NULL, NULL),
(70, 22, '2023-02-03', 'A', NULL, NULL),
(71, 23, '2023-02-03', 'P', NULL, NULL),
(72, 24, '2023-02-03', 'P', NULL, NULL),
(73, 1, '2023-02-04', 'P', NULL, NULL),
(74, 2, '2023-02-04', 'P', NULL, NULL),
(75, 3, '2023-02-04', 'P', NULL, NULL),
(76, 4, '2023-02-04', 'A', NULL, NULL),
(77, 5, '2023-02-04', 'A', NULL, NULL),
(78, 6, '2023-02-04', 'A', NULL, NULL),
(79, 7, '2023-02-04', 'A', NULL, NULL),
(80, 8, '2023-02-04', 'P', NULL, NULL),
(81, 9, '2023-02-04', 'P', NULL, NULL),
(82, 10, '2023-02-04', 'P', NULL, NULL),
(83, 11, '2023-02-04', 'P', NULL, NULL),
(84, 12, '2023-02-04', 'A', NULL, NULL),
(85, 13, '2023-02-04', 'P', NULL, NULL),
(86, 14, '2023-02-04', 'P', NULL, NULL),
(87, 15, '2023-02-04', 'A', NULL, NULL),
(88, 16, '2023-02-04', 'A', NULL, NULL),
(89, 17, '2023-02-04', 'P', NULL, NULL),
(90, 18, '2023-02-04', 'P', NULL, NULL),
(91, 19, '2023-02-04', 'P', NULL, NULL),
(92, 20, '2023-02-04', 'P', NULL, NULL),
(93, 21, '2023-02-04', 'P', NULL, NULL),
(94, 22, '2023-02-04', 'A', NULL, NULL),
(95, 23, '2023-02-04', 'P', NULL, NULL),
(96, 24, '2023-02-04', 'P', NULL, NULL),
(97, 1, '2023-02-05', 'P', NULL, NULL),
(98, 2, '2023-02-05', 'P', NULL, NULL),
(99, 3, '2023-02-05', 'P', NULL, NULL),
(100, 4, '2023-02-05', 'A', NULL, NULL),
(101, 5, '2023-02-05', 'P', NULL, NULL),
(102, 6, '2023-02-05', 'P', NULL, NULL),
(103, 7, '2023-02-05', 'P', NULL, NULL),
(104, 8, '2023-02-05', 'P', NULL, NULL),
(105, 9, '2023-02-05', 'P', NULL, NULL),
(106, 10, '2023-02-05', 'A', NULL, NULL),
(107, 11, '2023-02-05', 'A', NULL, NULL),
(108, 12, '2023-02-05', 'P', NULL, NULL),
(109, 13, '2023-02-05', 'P', NULL, NULL),
(110, 14, '2023-02-05', 'P', NULL, NULL),
(111, 15, '2023-02-05', 'P', NULL, NULL),
(112, 16, '2023-02-05', 'P', NULL, NULL),
(113, 17, '2023-02-05', 'P', NULL, NULL),
(114, 18, '2023-02-05', 'A', NULL, NULL),
(115, 19, '2023-02-05', 'P', NULL, NULL),
(116, 20, '2023-02-05', 'P', NULL, NULL),
(117, 21, '2023-02-05', 'P', NULL, NULL),
(118, 22, '2023-02-05', 'A', NULL, NULL),
(119, 23, '2023-02-05', 'P', NULL, NULL),
(120, 24, '2023-02-05', 'P', NULL, NULL),
(121, 1, '2023-02-06', 'A', NULL, NULL),
(122, 2, '2023-02-06', 'A', NULL, NULL),
(123, 3, '2023-02-06', 'A', NULL, NULL),
(124, 4, '2023-02-06', 'A', NULL, NULL),
(125, 5, '2023-02-06', 'A', NULL, NULL),
(126, 6, '2023-02-06', 'P', NULL, NULL),
(127, 7, '2023-02-06', 'P', NULL, NULL),
(128, 8, '2023-02-06', 'P', NULL, NULL),
(129, 9, '2023-02-06', 'A', NULL, NULL),
(130, 10, '2023-02-06', 'A', NULL, NULL),
(131, 11, '2023-02-06', 'A', NULL, NULL),
(132, 12, '2023-02-06', 'P', NULL, NULL),
(133, 13, '2023-02-06', 'P', NULL, NULL),
(134, 14, '2023-02-06', 'P', NULL, NULL),
(135, 15, '2023-02-06', 'P', NULL, NULL),
(136, 16, '2023-02-06', 'P', NULL, NULL),
(137, 17, '2023-02-06', 'A', NULL, NULL),
(138, 18, '2023-02-06', 'A', NULL, NULL),
(139, 19, '2023-02-06', 'P', NULL, NULL),
(140, 20, '2023-02-06', 'P', NULL, NULL),
(141, 21, '2023-02-06', 'P', NULL, NULL),
(142, 22, '2023-02-06', 'P', NULL, NULL),
(143, 23, '2023-02-06', 'A', NULL, NULL),
(144, 24, '2023-02-06', 'A', NULL, NULL),
(145, 1, '2023-02-07', 'P', NULL, NULL),
(146, 2, '2023-02-07', 'P', NULL, NULL),
(147, 3, '2023-02-07', 'P', NULL, NULL),
(148, 4, '2023-02-07', 'A', NULL, NULL),
(149, 5, '2023-02-07', 'A', NULL, NULL),
(150, 6, '2023-02-07', 'P', NULL, NULL),
(151, 7, '2023-02-07', 'P', NULL, NULL),
(152, 8, '2023-02-07', 'P', NULL, NULL),
(153, 9, '2023-02-07', 'P', NULL, NULL),
(154, 10, '2023-02-07', 'P', NULL, NULL),
(155, 11, '2023-02-07', 'P', NULL, NULL),
(156, 12, '2023-02-07', 'P', NULL, NULL),
(157, 13, '2023-02-07', 'P', NULL, NULL),
(158, 14, '2023-02-07', 'A', NULL, NULL),
(159, 15, '2023-02-07', 'A', NULL, NULL),
(160, 16, '2023-02-07', 'A', NULL, NULL),
(161, 17, '2023-02-07', 'A', NULL, NULL),
(162, 18, '2023-02-07', 'A', NULL, NULL),
(163, 19, '2023-02-07', 'A', NULL, NULL),
(164, 20, '2023-02-07', 'P', NULL, NULL),
(165, 21, '2023-02-07', 'P', NULL, NULL),
(166, 22, '2023-02-07', 'P', NULL, NULL),
(167, 23, '2023-02-07', 'P', NULL, NULL),
(168, 24, '2023-02-07', 'A', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stud_id` varchar(255) DEFAULT NULL,
  `complaintcontent` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Unresolved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `stud_id`, `complaintcontent`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'sfdasdsa', 'Resolved', '2023-02-21 22:16:05', '2023-02-22 12:30:52'),
(2, '1', 'dfsdfds', 'Resolved', '2023-02-21 22:16:28', '2023-02-23 00:59:42'),
(3, '1', 'dfsdf', 'Resolved', '2023-02-21 22:17:46', '2023-02-22 12:28:53'),
(4, '2', 'hehehe', 'Resolved', '2023-02-21 22:25:07', '2023-02-22 12:28:45'),
(5, '2', 'In this example, the @if statement checks if the price of the product is greater than 100. If it is, it adds the text-danger class to the p element, which sets the text color to red. If the price is not greater than 100', 'Resolved', '2023-02-22 04:58:17', '2023-02-22 12:28:34'),
(6, '4', 'In this example, the @if statement checks if the price of the product is greater than 200. If it is, it adds the text-danger class to the p element, which sets the text color to red. If the price is less than or equal to 200,', 'Unresolved', '2023-02-22 04:58:44', '2023-02-22 04:58:44'),
(7, '1', 'The filter needs some repairing, Thank you', 'Unresolved', '2023-02-22 12:44:54', '2023-02-22 12:48:49'),
(8, '1', 'Needs plumbing', 'Resolved', '2023-02-23 01:34:01', '2023-02-23 01:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `cmsg` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `mobile`, `cmsg`, `created_at`, `updated_at`) VALUES
(1, 'Fahzain Ahmed', 'aa@gmail.com', '97987899', 'hjg ghj sgugh', '2023-02-21 15:17:23', '2023-02-21 15:17:23'),
(2, 'Fahzain Ahmed', 'aa@gmail.com', '97987899', 'hjg ghj sgugh', '2023-02-21 15:18:24', '2023-02-21 15:18:24'),
(3, 'Sarjil Sheth', 'shethhh@gmail.com', '09876543211', 'Lorem ipsum is the filler text that typically demonstrates the font and style of a text in a document or visual demonstration. It serves as a place holder indicating where the text will be in the final iteration.\r\n\r\nOriginally from Latin, Lorem ipsum has ', '2023-02-21 20:30:11', '2023-02-21 20:30:11'),
(4, 'Arshil Vahora', 'av@gmail.com', '9897986896', 'Lorem ipsum is the filler text that typically demonstrates the font and style of a text in a document or visual demonstration. It serves as a place holder indicating where the text will be in the final iteration.\n\nOriginally from Latin, Lorem ipsum has', '2023-02-21 20:31:40', '2023-02-21 20:31:40'),
(5, 'Arshad Vora', 'avv@gmail.com', '675646767', 'Lorem ipsum is the filler text that typically demonstrates the font and style of a text in a document or visual demonstration. It serves as a place holder indicating where the text will be in the final iteration.\n\nOriginally from Latin, Lorem ipsum has no intelligible meaning. It is simply a display of letters to be viewed as a sample with given graphical elements in a file.\n\n\"Lipsum\" (a portmanteau of lorem and ip', '2023-02-21 20:34:53', '2023-02-21 20:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `full_form` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `fees` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `name`, `full_form`, `duration`, `fees`, `created_at`, `updated_at`) VALUES
(1, 'BSc.IT', 'Bachelor\'s of Science in IT', '4', '30000', NULL, NULL),
(2, 'MSc.IT', 'Master\'s of Science in IT', '4', '32000', NULL, NULL),
(3, 'BCA', 'Bachelor\'s of Computer Application', '6', '24000', NULL, NULL),
(4, 'MCA', 'Master\'s of Computer Application', '4', '31000', NULL, NULL),
(5, 'B.Tech', 'Bachelor\'s of Technology', '6', '25000', NULL, NULL),
(6, 'M.Tech', 'Master\'s of Technology', '4', 'Master\'s of Technology', NULL, NULL),
(7, 'ICS', 'Introduction to Computer Science', '6', '15000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marksheets`
--

CREATE TABLE `marksheets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stud_id` bigint(20) UNSIGNED NOT NULL,
  `exam_date` varchar(255) NOT NULL,
  `Soodam` varchar(255) NOT NULL,
  `BS` varchar(255) NOT NULL,
  `Laravel` varchar(255) NOT NULL,
  `PE` varchar(255) NOT NULL,
  `Java` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `percent` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marksheets`
--

INSERT INTO `marksheets` (`id`, `stud_id`, `exam_date`, `Soodam`, `BS`, `Laravel`, `PE`, `Java`, `total`, `percent`, `grade`, `created_at`, `updated_at`) VALUES
(1, 5, '2022-07-09', '7', '49', '12', '8', '19', '95', '19', 'E', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(2, 8, '2022-04-13', '16', '95', '48', '67', '83', '309', '61.8', 'D', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(3, 15, '2022-11-14', '37', '48', '23', '26', '49', '183', '36.6', 'E', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(4, 22, '2022-08-20', '44', '18', '86', '93', '92', '333', '66.6', 'D', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(5, 16, '2023-02-04', '43', '74', '87', '93', '17', '314', '62.8', 'D', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(6, 1, '2023-01-16', '93', '2', '95', '17', '2', '209', '41.8', 'E', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(7, 16, '2022-07-25', '97', '40', '41', '22', '81', '281', '56.2', 'E', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(8, 1, '2022-05-02', '50', '94', '86', '94', '4', '328', '65.6', 'D', '2023-02-22 21:54:24', '2023-02-23 01:27:36'),
(9, 24, '2022-09-29', '51', '89', '13', '16', '59', '228', '45.6', 'E', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(10, 6, '2023-01-19', '25', '57', '62', '37', '40', '221', '44.2', 'E', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(11, 4, '2022-07-07', '73', '83', '44', '27', '3', '230', '46', 'E', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(12, 11, '2022-03-23', '20', '70', '60', '19', '27', '196', '39.2', 'E', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(13, 23, '2023-01-21', '16', '45', '27', '43', '20', '151', '30.2', 'E', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(14, 13, '2022-08-03', '77', '46', '55', '5', '76', '259', '51.8', 'E', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(15, 8, '2022-08-20', '5', '85', '21', '62', '81', '254', '50.8', 'E', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(16, 5, '2022-07-31', '20', '56', '36', '12', '33', '157', '31.4', 'E', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(17, 7, '2022-06-24', '77', '31', '54', '28', '37', '227', '45.4', 'E', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(18, 3, '2022-04-22', '62', '86', '83', '32', '93', '356', '71.2', 'C', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(19, 15, '2023-02-16', '65', '70', '76', '2', '22', '235', '47', 'E', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(20, 17, '2022-08-22', '79', '48', '7', '59', '15', '208', '41.6', 'E', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(21, 6, '2022-05-08', '48', '12', '25', '47', '18', '150', '30', 'E', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(22, 4, '2023-01-10', '81', '87', '84', '36', '12', '300', '60', 'D', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(23, 24, '2022-12-08', '86', '28', '72', '68', '57', '311', '62.2', 'D', '2023-02-22 21:54:24', '2023-02-22 21:54:24'),
(24, 5, '2022-05-01', '53', '40', '15', '12', '74', '194', '38.8', 'E', '2023-02-22 21:54:24', '2023-02-22 21:54:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(14, '2023_02_02_064350_create_contacts_table', 1),
(15, '2023_02_22_032057_complaints', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time_tables`
--

CREATE TABLE `time_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `sem` varchar(255) NOT NULL,
  `div` varchar(255) NOT NULL,
  `from_date` varchar(255) NOT NULL,
  `to_date` varchar(255) NOT NULL,
  `timet` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_tables`
--

INSERT INTO `time_tables` (`id`, `dept_id`, `sem`, `div`, `from_date`, `to_date`, `timet`, `created_at`, `updated_at`) VALUES
(2, 2, '3', 'A', '2023-02-09', '2023-02-17', 'tt1.jpeg', '2023-02-21 14:59:39', '2023-02-21 14:59:39'),
(3, 2, '1', 'B', '2023-02-15', '2023-02-18', 'tt8.jpg', '2023-02-21 15:00:04', '2023-02-21 15:00:04'),
(4, 6, '2', 'C', '2023-02-08', '2023-02-20', 'tt3.jpg', '2023-02-21 15:00:38', '2023-02-21 15:00:38'),
(5, 5, '4', 'B', '2023-02-06', '2023-02-11', 'tt4.jpg', '2023-02-21 15:03:55', '2023-02-21 15:03:55'),
(6, 7, '3', 'B', '2023-02-15', '2023-02-13', 'tt5.jpg', '2023-02-21 15:04:34', '2023-02-21 15:04:34'),
(7, 3, '6', 'B', '2023-02-14', '2023-02-17', 'tt6.jpg', '2023-02-21 15:04:59', '2023-02-21 15:04:59'),
(8, 6, '2', 'D', '2023-02-07', '2023-02-23', 'tt9.jpg', '2023-02-21 15:05:23', '2023-02-21 15:05:23'),
(9, 1, '1', 'E', '2023-02-01', '2023-02-07', 'tt6.jpg', '2023-02-21 15:05:50', '2023-02-21 15:05:50'),
(10, 2, '6', 'E', '2023-02-07', '2023-02-16', 'tt8.jpg', '2023-02-21 15:06:21', '2023-02-21 15:06:21'),
(11, 4, '2', 'D', '2023-02-22', '2023-02-28', 'tt9.jpg', '2023-02-21 15:06:52', '2023-02-21 15:06:52'),
(12, 4, '2', 'C', '2023-02-06', '2023-02-08', 'tt10.jpg', '2023-02-21 15:07:19', '2023-02-21 15:07:19'),
(13, 3, '3', 'B', '2023-02-15', '2023-02-16', 'tt3.jpg', '2023-02-21 15:09:52', '2023-02-21 15:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `sem` varchar(255) NOT NULL,
  `pfp` varchar(255) NOT NULL,
  `div` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `last_school` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `gender`, `dept_id`, `sem`, `pfp`, `div`, `mobile`, `bloodgroup`, `last_school`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Olaf', '50', 'male', 3, '3', '2.jpg', 'B', '3508002602', 'O-', 'Considine, Cartwright and Metz', 'rusty02@example.com', '2023-02-21 11:05:07', '$2y$10$jni4u/jgGbc8cMw4awpgqu31RKETXx6.4K7/1ihpHtLne5JIJjWze', 'pUZFjxSgv4', '2023-02-21 11:05:07', '2023-02-21 11:05:07'),
(2, 'Estevan', '19', 'male', 5, '4', '5.jpg', 'D', '4568681697', 'B+', 'West, Gerhold and Runte', 'alyce.murazik@example.org', '2023-02-21 11:05:07', '$2y$10$9MLClmkkFzqrFJuH99jQM.T2cPj.W0n1OMu9Sz1QSAY/J40NAJv6u', 'OmoGjf7ta9', '2023-02-21 11:05:07', '2023-02-21 11:05:07'),
(3, 'Rosalee', '48', 'male', 5, '2', '4.jpg', 'D', '2083027073', 'A+', 'Dicki PLC', 'price.curt@example.com', '2023-02-21 11:05:07', '$2y$10$Dn.WetXZ4W.8Plvt0QzJKuLgrA7mXPJerFDb4xmwmlmUeoI5Np4/W', 'IYs53FCHoc', '2023-02-21 11:05:07', '2023-02-21 11:05:07'),
(4, 'Adelle', '23', 'male', 5, '5', '3.jpg', 'C', '9882568480', 'A+', 'Goldner, Miller and Kovacek', 'nolan.dulce@example.net', '2023-02-21 11:05:07', '$2y$10$v/ly785Mipbs/UVZWlxRm.U.g16hVz6mxwa94ldpOWnKnpROjZPEa', 'XiU8FnDN4T', '2023-02-21 11:05:07', '2023-02-21 11:05:07'),
(5, 'Amina', '48', 'male', 5, '6', '1.jpg', 'E', '4355184297', 'A+', 'Hermiston, Boyle and Mosciski', 'ymitchell@example.org', '2023-02-21 11:05:07', '$2y$10$Y0QH8L5AbjUssJhSskE.L.Ps5LL9twxActSRNzNx7Sjjm1H8Nxd/q', 'jm8q8k9b3u', '2023-02-21 11:05:07', '2023-02-21 11:05:07'),
(6, 'Cyrus', '30', 'male', 1, '2', '7.jpg', 'E', '7879342831', 'AB+', 'Aufderhar PLC', 'ava.reynolds@example.org', '2023-02-21 11:12:34', '$2y$10$YdzB3htrgqocL3F9NcdYPeZbw6OUlarU//ulC/hFdkaewiBpeR3Hy', 'YtlLRF3vqL', '2023-02-21 11:12:36', '2023-02-21 11:12:36'),
(7, 'Otis', '25', 'female', 3, '3', '4.jpg', 'A', '4639558961', 'O-', 'Wiza-Russel', 'laisha.koepp@example.net', '2023-02-21 11:12:34', '$2y$10$pv5JgbByhV4dJv2lx0q8YOjU7yJUMzCRePkUYdg9nk1ecN3OudHKm', 'eJl7AZHeqv', '2023-02-21 11:12:36', '2023-02-21 11:12:36'),
(8, 'Graciela', '34', 'male', 6, '2', '3.jpg', 'A', '7543397845', 'A-', 'Moore, Orn and Anderson', 'lstark@example.org', '2023-02-21 11:12:34', '$2y$10$xM8Xz2gKlHOCHsrZkNu37OGCXf.UAQnVt.Cgwj6ur8inVqAlCD4GC', 'JzOcL2bkI3', '2023-02-21 11:12:36', '2023-02-21 11:12:36'),
(9, 'Merlin', '58', 'female', 3, '3', '18.jpg', 'A', '2777289872', 'AB-', 'Ondricka and Sons', 'brodriguez@example.org', '2023-02-21 11:12:35', '$2y$10$uZr5hoHTGJjm6QPvKYwOM.lfmU8nMNZjPUPAntqWeQb5DAvpeYOEu', 'csSQcK2t97', '2023-02-21 11:12:36', '2023-02-21 11:12:36'),
(10, 'Elwin', '36', 'male', 6, '3', '14.jpg', 'C', '9720394048', 'A+', 'Fisher-Russel', 'donnelly.robin@example.org', '2023-02-21 11:12:35', '$2y$10$k6TdpTN4Si/QICvUf4GiMu4F8mSsZ2FJrLwAbHFJ37Mn/TDVrxci6', 'dsGe7S5DfS', '2023-02-21 11:12:36', '2023-02-21 11:12:36'),
(11, 'Chanel', '30', 'male', 7, '6', '8.jpg', 'E', '5202310782', 'O+', 'Hahn-Dietrich', 'umonahan@example.com', '2023-02-21 11:12:35', '$2y$10$RHnFfd8JPZGPECtwBz9vdO7Or5VdIhyVS0E2E4.w8PT1Tpr/rf7xa', 'XoYsmSx5oK', '2023-02-21 11:12:36', '2023-02-21 11:12:36'),
(12, 'Jaclyn', '36', 'male', 7, '4', '13.jpg', 'E', '9564050794', 'O-', 'Green-Koch', 'farrell.bonita@example.net', '2023-02-21 11:12:35', '$2y$10$.DWbXuzFUmvzgkzE6BR5K.AGof0X.oHjZYBN84I8kWclnSrvuEL3m', 'qvcns85eWP', '2023-02-21 11:12:36', '2023-02-21 11:12:36'),
(13, 'Ariel', '51', 'female', 7, '4', '12.jpg', 'B', '4760439240', 'B-', 'Mante, Nitzsche and Haag', 'reynold.champlin@example.net', '2023-02-21 11:12:35', '$2y$10$G9ABrBuIMWh8IGAo1GWhqOMxgkFO6RmLxNL3bQpXF7XCEhHS0nKKe', 'OICBAFrHcq', '2023-02-21 11:12:36', '2023-02-21 11:12:36'),
(14, 'Franco', '48', 'female', 6, '6', '10.jpg', 'E', '5833374366', 'AB-', 'Borer, Carter and Fritsch', 'orn.bessie@example.net', '2023-02-21 11:12:35', '$2y$10$cDPpNpBfWmqJQCa46ar4Pud2wMrexfweKLTmAcn3QcmW8FemRktlu', 'FHeLqKVCZi', '2023-02-21 11:12:36', '2023-02-21 11:12:36'),
(15, 'Janae', '65', 'female', 1, '1', '16.jpg', 'A', '7876087904', 'O+', 'Johnston LLC', 'flatley.kelvin@example.org', '2023-02-21 11:12:35', '$2y$10$uHRpLApaBLGyvwIrW/EQUeLpzhuM3zNcW.Hsolbobcb2RZwD9Oz6q', 'MGZOjmoC5K', '2023-02-21 11:12:36', '2023-02-21 11:12:36'),
(16, 'Juana', '56', 'male', 1, '4', '11.jpg', 'A', '5435761287', 'B-', 'Shields, Halvorson and West', 'mayra74@example.net', '2023-02-21 11:12:35', '$2y$10$YpUOfPL88/IZr08Hx24zReDOKBbk4RN7u3Xn2NaeC7lyMjHnaZQqi', 'pilMlvQO1y', '2023-02-21 11:12:36', '2023-02-21 11:12:36'),
(17, 'Karelle', '41', 'male', 6, '5', '6.jpg', 'D', '4511182330', 'AB+', 'Fay, Koelpin and Keebler', 'shaniya.zulauf@example.net', '2023-02-21 11:12:35', '$2y$10$K6kagSCpdEXStRbZQ3snVObUhXEIWi79RKuR/by4I1N7giUzYc.Fe', 'vTgKIaVBwC', '2023-02-21 11:12:36', '2023-02-21 11:12:36'),
(18, 'Ethelyn', '65', 'female', 5, '3', '9.jpg', 'A', '4977722617', 'AB-', 'Gibson-Gaylord', 'brianne.sporer@example.org', '2023-02-21 11:12:35', '$2y$10$6zYGdllvb.ctjXAJ1hy6NOiGDGkgGR99cUhLcQx88mD9.377.DYs6', 'HdkeXSiOHF', '2023-02-21 11:12:36', '2023-02-21 11:12:36'),
(19, 'Claudie', '53', 'female', 5, '1', '5.jpg', 'B', '6617644109', 'AB-', 'Daniel, Marks and Hane', 'karen.monahan@example.com', '2023-02-21 11:12:35', '$2y$10$UN5PAkeHrike1PJWbTlFTulu0VqNpOnG/cl6LKa.u/Fo3DzEkGCgC', 'wExud9jzOw', '2023-02-21 11:12:36', '2023-02-21 11:12:36'),
(20, 'Dasia', '58', 'female', 7, '1', '1.jpg', 'C', '2870644808', 'A+', 'O\'Reilly and Sons', 'muller.claudie@example.net', '2023-02-21 11:12:35', '$2y$10$hjR56e1ZvrLVnGPDp1wIkOpfFk8Z9vTvl5zgnVOCDwTYBdTUW8FHO', 'uQS9x8shKB', '2023-02-21 11:12:36', '2023-02-21 11:12:36'),
(21, 'Reilly', '64', 'male', 4, '2', '19.jpg', 'A', '6809324689', 'AB-', 'Jenkins, Kshlerin and Haag', 'moore.kolby@example.com', '2023-02-21 11:12:35', '$2y$10$fDwG.5vyOU1UQaa27VqYmu1hqVKBhUcBGNNPQAAp8uQRkU/ZkVO0m', '3E7WnhLRUd', '2023-02-21 11:12:36', '2023-02-21 11:12:36'),
(22, 'Luella', '64', 'male', 6, '6', '20.jpg', 'E', '2767883656', 'O+', 'Schroeder Ltd', 'sandra53@example.com', '2023-02-21 11:12:35', '$2y$10$SBBwTTJwV4nq1rNWldPQo.sJnmBl3e2A.G7AevxEm72YPcw5e8Bmu', 'YsegUSpcXm', '2023-02-21 11:12:36', '2023-02-21 11:12:36'),
(23, 'Golden', '20', 'male', 6, '1', '15.jpg', 'B', '7338168417', 'O-', 'Hartmann LLC', 'dannie43@example.com', '2023-02-21 11:12:35', '$2y$10$Q3qisou.qylPltAwFQqLY.8papZJlFOw8Hd/56RgSyYv/4orXRl7e', 'gARgzMZJNr', '2023-02-21 11:12:36', '2023-02-21 11:12:36'),
(24, 'Geoffrey', '31', 'female', 2, '3', '17.jpg', 'B', '3655001393', 'AB-', 'Mertz LLC', 'ferry.billy@example.net', '2023-02-21 11:12:36', '$2y$10$Rb3SayN/Dgtl9tu8fTpr2OEO8wJcGuLGTSiJiac8JFeEm7AOic7Yq', 'KVF8FjqlAY', '2023-02-21 11:12:36', '2023-02-21 11:12:36'),
(27, 'Fahzain', '19', 'Male', 4, '4', '1670992374910.jpeg', 'D', '9898987686', 'O+', 'NSES', 'fa@gmail.com', NULL, '$2y$10$3u20H1uicvhJA80XU0pgPuut.HskpHijHmQ3VJvgIvbzULuEyMNFm', NULL, '2023-02-22 13:23:09', '2023-02-22 13:23:09'),
(28, 'Fahzain Ahmed', '19', 'Male', 2, '4', '1670992374910.jpeg', 'D', '9878675875', 'O+', 'NSES', 'saiyedfahzain191@gmail.com', NULL, '$2y$10$YFX8rlBifA0SBTuWJ2RALOUeUedL39USfMitedcooqPvfbCcXspey', NULL, '2023-02-22 13:28:17', '2023-02-22 13:28:17'),
(29, 'znsss', '80', 'Male', 4, '6', 'canvas.png', 'B', '787987897', 'O+', 'Nses', 'theknightlolonetwothree@gmail.com', NULL, '$2y$10$lgSimdUL5l6l1aIg8WC7reftN4Y.eB93tHDvYVhIdKpfe6ZsKR1Je', 'lZ3XjrnrhGRtFrEI5v3uQMUw1czrE7aBIPyOfr3l0OiGgrSY7GOlCPnRNLrb', '2023-02-22 13:35:55', '2023-02-22 13:44:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `marksheets`
--
ALTER TABLE `marksheets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `time_tables`
--
ALTER TABLE `time_tables`
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
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marksheets`
--
ALTER TABLE `marksheets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `time_tables`
--
ALTER TABLE `time_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
