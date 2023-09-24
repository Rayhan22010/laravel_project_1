-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 05:49 PM
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
-- Database: `laravel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_universities`
--

CREATE TABLE `about_universities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_learn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_universities`
--

INSERT INTO `about_universities` (`id`, `heading`, `description`, `btn_learn`, `created_at`, `updated_at`) VALUES
(2, 'About University', 'North Western University, established in 2012, is the first private university of Khulna, Bangladesh. It offers bachelor\'s degrees in ten subjects and master\'s degrees in six. One of the founders of the university was Talukder Abdul Khaleque, Bangladesh Awami League politician', 'Read More', '2023-09-08 19:38:15', '2023-09-11 05:18:52');

-- --------------------------------------------------------

--
-- Table structure for table `academic_works`
--

CREATE TABLE `academic_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_learn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_works`
--

INSERT INTO `academic_works` (`id`, `image`, `heading`, `description`, `btn_learn`, `created_at`, `updated_at`) VALUES
(5, '1694185611.png', 'Personalize Learning', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit', 'Read More', '2023-09-08 19:06:51', '2023-09-11 05:13:02'),
(6, '1694185624.png', 'Trusted Courses', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit', 'Read More', '2023-09-08 19:07:04', '2023-09-11 05:12:55'),
(7, '1694185670.png', 'Tools for Students', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit', 'Read More', '2023-09-08 19:07:50', '2023-09-11 05:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admission_requis`
--

CREATE TABLE `admission_requis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `requiHeading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requiPicture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requiText` varchar(2500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transHeading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transText` varchar(2500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transPicture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admission_requis`
--

INSERT INTO `admission_requis` (`id`, `requiHeading`, `requiPicture`, `requiText`, `transHeading`, `transText`, `transPicture`, `created_at`, `updated_at`) VALUES
(14, 'Collage Requirment', '1694396119.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam dicta unde laudantium quaerat cupiditate accusantium vel modi magni eaque repellat!', 'Transferees', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam dicta unde laudantium quaerat cupiditate accusantium vel modi magni eaque repellat!', '1694396119.jpg', '2023-09-11 05:35:19', '2023-09-11 05:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `courseregs`
--

CREATE TABLE `courseregs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coursename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courseregs`
--

INSERT INTO `courseregs` (`id`, `username`, `email`, `address`, `coursename`, `created_at`, `updated_at`) VALUES
(1, 'hridayscw2qq', 'admin@gmail.com', 'khulna', 'web development', '2023-07-26 21:47:05', '2023-07-26 21:47:05'),
(2, 'hriday4eds2', 'rayhan1234@gmailcom', 'satkhira', 'web development', '2023-07-26 21:49:48', '2023-07-26 21:49:48'),
(3, 'rayhan', 'rayhanparvezshuvro@gmail.com', 'khulna', 'web development', '2023-07-26 21:51:30', '2023-07-26 21:51:30'),
(4, 'rayhan', 'abc@gmail.com', 'satkhira', 'design', '2023-07-26 21:53:09', '2023-07-26 21:53:09');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `C_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C_star` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `C_image`, `C_title`, `C_subtitle`, `C_price`, `C_star`, `created_at`, `updated_at`) VALUES
(1, '1694164536.jpg', 'web desing', 'Lorem ipsum dolor', '$30', 'five', '2023-09-08 13:15:36', '2023-09-08 13:15:36'),
(2, '1694165425.jpg', 'Word press development', 'Lorem ipsum dolor', '$50', 'five', '2023-09-08 13:30:25', '2023-09-08 13:30:25'),
(3, '1694165437.jpg', 'Web development', 'Lorem ipsum dolor', '$40', 'Five', '2023-09-08 13:30:37', '2023-09-08 13:30:37'),
(4, '1694165455.jpg', 'Graphic design', 'Lorem ipsum dolor', '$50', 'Five', '2023-09-08 13:30:55', '2023-09-11 05:46:47'),
(6, '1694165489.jpg', 'Laravel', 'Lorem ipsum dolor', '$50', 'Five', '2023-09-08 13:31:29', '2023-09-08 13:31:29'),
(7, '1694172897.jpg', 'web design', 'Lorem ipsum dolor', '$35', 'Five', '2023-09-08 15:34:57', '2023-09-08 15:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `course_headings`
--

CREATE TABLE `course_headings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `C_catagories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enroll_courses`
--

CREATE TABLE `enroll_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coursename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `frontend_contacts`
--

CREATE TABLE `frontend_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(255) NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontend_contacts`
--

INSERT INTO `frontend_contacts` (`id`, `name`, `email`, `phone`, `subject`, `description`, `created_at`, `updated_at`) VALUES
(2, 'rayhan', 'rayhanparvezshuvro@gmail.com', 1701137914, 'abc', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat recusandae esse obcaecati,\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Placeat recusandae esse obcaecati,Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat recusandae esse obcaecati,', '2023-09-09 19:36:46', '2023-09-09 19:36:46'),
(3, 'RAYHAN PARVEZ', 'rayhan1234@gmailcom', 1701137914, 'Application for the post of jr.engineer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat recusandae esse obcaecati, Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat recusandae esse obcaecati,Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat recusandae esse obcaecati,', '2023-09-09 21:06:44', '2023-09-09 21:06:44'),
(4, 'anik', 'bival59057@anwarb.com', 1735428644, 'Application for the post of jr.engineer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat recusandae esse obcaecati, Lorem ipsum dolor sit amet consectetur', '2023-09-11 05:49:24', '2023-09-11 05:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `hero_carousels`
--

CREATE TABLE `hero_carousels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `H_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Carousel_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hero_carousels`
--

INSERT INTO `hero_carousels` (`id`, `H_image`, `Carousel_heading`, `btn_name`, `created_at`, `updated_at`) VALUES
(4, '1694171823.jpg', 'Academic University', 'Read More', '2023-09-08 15:17:03', '2023-09-11 05:04:18'),
(5, '1694173141.jpg', 'Academic University', 'Read More', '2023-09-08 15:39:01', '2023-09-11 05:04:28'),
(6, '1694173203.jpg', 'Academic University', 'Read More', '2023-09-08 15:40:03', '2023-09-11 05:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `email`, `address`, `city`, `state`, `created_at`, `updated_at`) VALUES
(1, 'abc@gmail.com', '123 mashhs', 'khulna', 'khulna', '2023-07-24 19:22:37', '2023-07-24 19:22:37'),
(2, 'admin@gmail.com', '12334 dfgetr', 'aasaaa', 'asssss', '2023-07-24 19:22:50', '2023-07-24 19:22:50'),
(22, 'rayhan11@gmail.com', 'ARONGPARA', 'MIRZAPUR', 'Khulna', '2023-07-24 19:23:32', '2023-07-24 19:23:32'),
(23, 'rayhanparvezshuvro@gmail.com', 'ARONGPARA', 'MIRZAPUR', 'Khulnaddd', '2023-07-27 19:44:01', '2023-07-27 20:32:01');

-- --------------------------------------------------------

--
-- Table structure for table `key_features`
--

CREATE TABLE `key_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `key_features`
--

INSERT INTO `key_features` (`id`, `image`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(2, '1694268771.png', 'Academics Principle', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam dicta unde laudantium quaerat cupiditate accusantium vel modi magni eaque repellat!', '2023-09-09 18:12:52', '2023-09-09 18:12:52'),
(5, '1694269703.png', 'Our philospy', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam dicta unde laudantium quaerat cupiditate accusantium vel modi magni eaque repellat', '2023-09-09 18:28:23', '2023-09-09 18:28:23'),
(7, '1694269837.png', 'Key of success', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam dicta unde laudantium quaerat cupiditate accusantium vel modi magni eaque repellat!ok', '2023-09-09 18:30:37', '2023-09-11 05:24:35');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_08_142952_create_students_table', 2),
(6, '2023_07_24_074543_create_information_table', 3),
(7, '2023_07_26_152655_create_admins_table', 4),
(8, '2023_07_26_172729_create_enroll_courses_table', 5),
(9, '2023_07_26_174440_create_courseregs_table', 6),
(10, '2023_07_29_161342_create_studentinfos_table', 7),
(11, '2023_07_29_163836_create_results_table', 8),
(12, '2023_07_29_165523_create_results_table', 9),
(13, '2023_08_07_073305_create_student_information_table', 10),
(14, '2023_08_07_073342_create_student_rresults_table', 10),
(15, '2023_08_30_154429_create_popular_courses_table', 11),
(16, '2023_08_30_163428_create_course_headings_table', 12),
(17, '2023_09_02_132009_create_testimonials_table', 13),
(18, '2023_09_02_141002_create_admission_requis_table', 14),
(19, '2023_09_08_085906_create_courses_table', 15),
(20, '2023_09_08_101329_create_hero_carousels_table', 16),
(21, '2023_09_08_123119_create_academic_works_table', 17),
(22, '2023_09_08_152150_create_about_universities_table', 18),
(23, '2023_09_09_140457_create_key_features_table', 19),
(24, '2023_09_09_150238_create_frontend_contacts_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `popular_courses`
--

CREATE TABLE `popular_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `C_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C_star` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `popular_courses`
--

INSERT INTO `popular_courses` (`id`, `C_image`, `C_title`, `C_subtitle`, `C_price`, `C_star`, `created_at`, `updated_at`) VALUES
(8, '1693557626.jpg', 'web desing', 'aaaaaa', '$30', 'five', '2023-09-01 12:40:26', '2023-09-01 12:40:26'),
(9, '1693560880.jpg', 'Web development', 'Lorem ipsum dolor', '$50', 'five', '2023-09-01 13:34:40', '2023-09-01 13:34:40'),
(10, '1693560895.jpg', 'Word press development', 'Lorem ipsum dolor', '$30', 'five', '2023-09-01 13:34:55', '2023-09-01 13:34:55'),
(11, '1693560922.jpg', 'Laravel', 'Lorem ipsum dolor', '$40', 'five', '2023-09-01 13:35:22', '2023-09-11 04:56:08');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `name`, `result`, `remark`, `created_at`, `updated_at`) VALUES
(1, 'parvez', '3.5', 'good', '2023-07-29 20:59:03', '2023-07-29 20:59:03'),
(2, 'parvez', '3.5', 'good', '2023-07-29 20:59:40', '2023-07-29 20:59:40'),
(3, 'rayhan', '3.66', 'good', '2023-07-29 22:05:22', '2023-07-29 22:05:22'),
(4, 'rayhan', '3.66', 'good', '2023-07-30 21:20:15', '2023-07-30 21:20:15'),
(5, 'anik', '3.5', 'good', '2023-07-30 22:06:51', '2023-07-30 22:06:51'),
(6, 'sudas', '3.66', 'good', '2023-07-30 22:06:56', '2023-07-30 22:06:56'),
(7, 'opu', '3.5', 'good', '2023-07-30 22:07:03', '2023-07-30 22:07:03'),
(8, 'aaaaaaaaa', '4.00', 'good', '2023-08-01 21:53:36', '2023-08-01 21:53:36'),
(9, 'bbbbb', '3.66', 'good', '2023-08-01 22:05:33', '2023-08-01 22:05:33');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfos`
--

CREATE TABLE `studentinfos` (
  `studentid` int(20) DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentinfos`
--

INSERT INTO `studentinfos` (`studentid`, `id`, `email`, `department`, `group`, `address`, `created_at`, `updated_at`) VALUES
(3, 5, 'admin@gmail.com', 'cse', 'B', 'ARONGPARA', '2023-07-30 22:02:22', '2023-07-30 22:02:22'),
(1, 7, 'admin@gmail.com', 'kkk', 'A', 'satkhira', '2023-07-30 22:05:40', '2023-07-30 22:05:40'),
(2, 8, 'rayhan1234@gmailcom', 'cse', 'A', 'satkhira', '2023-07-30 22:06:20', '2023-07-30 22:06:20'),
(5, 9, 'bival59057@anwarb.com', 'EEE', 'A', 'khulna sadar', '2023-07-30 22:07:18', '2023-08-01 23:03:46'),
(4, 14, 'bival59057@anwarb.com', 'eee', 'A', 'khulna', '2023-08-02 20:56:13', '2023-08-02 20:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `student_information`
--

CREATE TABLE `student_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `studentid` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_information`
--

INSERT INTO `student_information` (`id`, `studentid`, `email`, `department`, `group`, `address`, `image`, `created_at`, `updated_at`) VALUES
(6, 1, 'abc@gmail.com', 'cse', 'A', 'khulna', '1691598135.jpg', '2023-08-09 20:22:15', '2023-08-09 20:22:15'),
(9, 3, 'rayhan1234@gmail.com', 'eee', 'A', 'satkhira', '1691601617.png', '2023-08-09 21:20:17', '2023-08-09 22:29:46'),
(10, 5, 'bival59057@anwarb.com', 'IT', 'A', 'satkhira', '1691606553.jpg', '2023-08-09 21:30:56', '2023-08-09 22:42:33'),
(11, 4, 'rayhan1234@gmail.com', 'ICT', 'C', 'satkhira', '1691603437.jpg', '2023-08-09 21:50:37', '2023-08-09 23:06:54'),
(12, 6, 'rayhan11@gmail.com', 'EEE', 'B', 'jessore', '1691607922.png', '2023-08-09 23:04:20', '2023-08-09 23:05:22'),
(13, 7, 'abc@gmail.com', 'EEE', 'C', 'satkhira', '1691607973.png', '2023-08-09 23:06:13', '2023-08-09 23:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `student_rresults`
--

CREATE TABLE `student_rresults` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_rresults`
--

INSERT INTO `student_rresults` (`id`, `name`, `result`, `remark`, `created_at`, `updated_at`) VALUES
(1, 'rayhan', '3.5', 'good', '2023-08-07 11:52:02', '2023-08-07 11:52:02'),
(2, 'parvez', '3.66', 'very good', '2023-08-07 11:52:12', '2023-08-07 11:52:12'),
(3, 'anik', '4.00', 'very good', '2023-08-07 11:52:19', '2023-08-07 11:52:19'),
(4, 'sudas', '3.5', 'good', '2023-08-07 11:52:25', '2023-08-07 11:52:25'),
(5, 'opu', '3.66', 'very good', '2023-08-07 11:52:31', '2023-08-07 11:52:31'),
(6, 'parvez', '4.00', 'very good', '2023-08-07 11:52:37', '2023-08-07 11:52:37'),
(7, 'rayhan', '4.00', 'very good', '2023-08-07 11:52:43', '2023-08-07 11:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clintName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workField` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clintPicture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clintReview` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `clintName`, `workField`, `clintPicture`, `clintReview`, `created_at`, `updated_at`) VALUES
(1, 'rayhan', 'desing', '1693661727.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam dicta unde laudantium quaerat', '2023-09-02 17:35:28', '2023-09-02 17:35:28'),
(3, 'parvez', 'wordpress', '1693662274.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam dicta unde laudantium quaerat', '2023-09-02 17:44:35', '2023-09-02 17:44:35'),
(4, 'angelina', 'develpment', '1693662935.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam dicta unde laudantium quaerat', '2023-09-02 17:55:35', '2023-09-02 17:55:35'),
(5, 'Jems watson', 'develpment', '1693662974.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam dicta unde laudantium quaerat', '2023-09-02 17:56:14', '2023-09-11 04:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_universities`
--
ALTER TABLE `about_universities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `academic_works`
--
ALTER TABLE `academic_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_requis`
--
ALTER TABLE `admission_requis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courseregs`
--
ALTER TABLE `courseregs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_headings`
--
ALTER TABLE `course_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enroll_courses`
--
ALTER TABLE `enroll_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `frontend_contacts`
--
ALTER TABLE `frontend_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_carousels`
--
ALTER TABLE `hero_carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `key_features`
--
ALTER TABLE `key_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `popular_courses`
--
ALTER TABLE `popular_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentinfos`
--
ALTER TABLE `studentinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_information`
--
ALTER TABLE `student_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_rresults`
--
ALTER TABLE `student_rresults`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `about_universities`
--
ALTER TABLE `about_universities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `academic_works`
--
ALTER TABLE `academic_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission_requis`
--
ALTER TABLE `admission_requis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `courseregs`
--
ALTER TABLE `courseregs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course_headings`
--
ALTER TABLE `course_headings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enroll_courses`
--
ALTER TABLE `enroll_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontend_contacts`
--
ALTER TABLE `frontend_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hero_carousels`
--
ALTER TABLE `hero_carousels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `key_features`
--
ALTER TABLE `key_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `popular_courses`
--
ALTER TABLE `popular_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `studentinfos`
--
ALTER TABLE `studentinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student_information`
--
ALTER TABLE `student_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_rresults`
--
ALTER TABLE `student_rresults`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
