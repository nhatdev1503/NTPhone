-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 06, 2025 at 02:28 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wd-32b`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `image`, `product_name`, `product_url`, `status`, `created_at`, `updated_at`) VALUES
(12, 'Banner điện thoại Iphone 16e', 'banners/EogxWj9h4cy3roUQylIUJO0oqxmTT6QJ9DoJNpAq.jpg', 'Iphone 16 Pro Max', '/product_detail/76', 'inactive', '2025-04-04 01:41:35', '2025-04-04 02:07:41');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_variant_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_variant_id`, `quantity`, `created_at`, `updated_at`) VALUES
(33, 1, 190, 3, NULL, NULL),
(34, 1, 188, 3, NULL, NULL),
(36, 1, 190, 3, NULL, NULL),
(37, 2, 188, 5, NULL, '2025-04-05 19:25:54'),
(39, 2, 190, 3, NULL, NULL),
(42, 1, 190, 3, NULL, NULL),
(43, 1, 188, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'iPhone', 'uploads/categories/1743649909_iphone-16-pro-max-sa-mac-thumb-1-600x600.jpg', 'Là sản phẩm điện thoại thông minh của hãng Apple', 'active', '2025-03-30 10:10:36', '2025-04-02 20:11:49'),
(2, 'Samsung', 'uploads/categories/1743768305_z6114773208644_9f09949e6792ec96b73b83040bd3805e.jpg', 'Đẹp', 'active', '2025-04-04 05:05:05', '2025-04-04 05:05:05'),
(3, 'Oppo', 'uploads/categories/1743768361_z6114769426427_5cbb00fe239402c3c70f67b62ae25251 - Copy.jpg', 'Đẹp', 'active', '2025-04-04 05:06:01', '2025-04-04 05:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` bigint UNSIGNED NOT NULL,
  `sender_id` bigint UNSIGNED NOT NULL,
  `receiver_id` bigint UNSIGNED NOT NULL,
  `room_id` bigint UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `media_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hax_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `hax_code`, `created_at`, `updated_at`) VALUES
(8, 'Red', '#FF0000', '2025-04-02 20:29:50', '2025-04-02 20:29:50'),
(11, 'Black', '#1D1D1F', '2025-04-02 20:31:48', '2025-04-02 20:31:48'),
(12, 'Blue', '#98A7C1', '2025-04-02 20:32:09', '2025-04-02 20:32:09'),
(13, 'Yellow', '#FDE58D', '2025-04-02 20:32:33', '2025-04-02 20:32:33'),
(14, 'Purple', '#DDD6F3', '2025-04-02 20:34:26', '2025-04-02 20:34:26'),
(15, 'Black Titanium', '#3F3A3C', '2025-04-02 20:34:45', '2025-04-02 20:34:45'),
(16, 'Pink', '#F3BFCA', '2025-04-02 20:35:03', '2025-04-02 20:35:03');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `address`, `phone`, `facebook`, `created_at`, `updated_at`) VALUES
(1, 'gjkgdslj@gmail.com', '5465646556', '12645646546', '544654', '2025-04-02 04:34:40', '2025-04-02 04:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_type` enum('percentage','fixed') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_discount_value` int DEFAULT NULL,
  `discount_value` decimal(10,2) NOT NULL,
  `min_order_value` int DEFAULT NULL,
  `start_date` date NOT NULL,
  `expiration_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `code`, `discount_type`, `max_discount_value`, `discount_value`, `min_order_value`, `start_date`, `expiration_date`, `created_at`, `updated_at`) VALUES
(22, 'G42F45DS5', 'percentage', 500000, '20.00', 20000000, '2025-04-04', '2025-04-07', '2025-04-04 01:56:32', '2025-04-04 01:56:32');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint UNSIGNED NOT NULL,
  `sender_id` bigint UNSIGNED NOT NULL,
  `receiver_id` bigint UNSIGNED NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'Alias eum velit at quaerat aliquam asperiores harum.', 0, '2025-03-30 10:10:37', NULL),
(5, 2, 1, 'Aspernatur dignissimos blanditiis quas quibusdam molestias laborum.', 0, '2025-03-30 10:10:37', NULL),
(7, 2, 1, 'Ullam quaerat ex ut molestias esse nisi voluptas.', 1, '2025-03-30 10:10:37', NULL),
(9, 2, 2, 'Assumenda est unde nemo et blanditiis.', 0, '2025-03-30 10:10:37', NULL),
(10, 2, 2, 'Temporibus nihil fugit tempora.', 0, '2025-03-30 10:10:37', NULL),
(12, 2, 2, 'Dicta qui voluptates debitis nobis id cupiditate non.', 0, '2025-03-30 10:10:37', NULL),
(13, 2, 1, 'Adipisci officiis alias aut autem perspiciatis et.', 1, '2025-03-30 10:10:37', NULL),
(14, 2, 2, 'Distinctio ipsa distinctio sint cum.', 1, '2025-03-30 10:10:37', NULL),
(15, 1, 1, 'Eum qui labore perferendis et eum neque molestiae.', 0, '2025-03-30 10:10:37', NULL),
(16, 1, 1, 'Esse sit nemo nulla.', 0, '2025-03-30 10:10:37', NULL),
(17, 2, 1, 'Alias iure tempora laudantium officia.', 0, '2025-03-30 10:10:37', NULL),
(18, 2, 1, 'Error nihil facilis reprehenderit deleniti dolor ipsa.', 1, '2025-03-30 10:10:37', NULL),
(19, 2, 1, 'Beatae quos ipsam adipisci reprehenderit tempore aut.', 1, '2025-03-30 10:10:37', NULL),
(20, 2, 2, 'Non delectus quidem numquam.', 0, '2025-03-30 10:10:37', NULL),
(21, 1, 2, 'Perspiciatis voluptates unde aut at.', 0, '2025-03-30 10:10:37', NULL),
(22, 2, 1, 'Quibusdam et accusantium vero in sint excepturi aspernatur.', 1, '2025-03-30 10:10:37', NULL),
(23, 1, 2, 'Aut ut accusamus nesciunt voluptatem itaque necessitatibus laborum.', 0, '2025-03-30 10:10:37', NULL),
(24, 2, 1, 'Rerum nihil tempora omnis occaecati.', 0, '2025-03-30 10:10:37', NULL),
(25, 2, 2, 'Assumenda sed reprehenderit est ab.', 1, '2025-03-30 10:10:37', NULL),
(26, 1, 1, 'Aut consequuntur omnis adipisci voluptatem.', 1, '2025-03-30 10:10:37', NULL),
(27, 2, 1, 'Omnis quis quia voluptas.', 1, '2025-03-30 10:10:37', NULL),
(28, 1, 2, 'Modi qui natus fugiat odio repudiandae.', 0, '2025-03-30 10:10:37', NULL),
(29, 2, 2, 'Quo facere amet rem laboriosam illum qui.', 0, '2025-03-30 10:10:37', NULL),
(30, 1, 2, 'Itaque vero tempora recusandae libero.', 1, '2025-03-30 10:10:37', NULL),
(31, 1, 2, 'Assumenda dolorem odio ut error repudiandae iste non.', 1, '2025-03-30 10:10:37', NULL),
(32, 1, 1, 'A earum nostrum necessitatibus neque adipisci laborum.', 0, '2025-03-30 10:10:37', NULL),
(33, 1, 1, 'Sed cupiditate voluptas omnis quos et dolor alias.', 0, '2025-03-30 10:10:37', NULL),
(34, 1, 1, 'Libero repellat omnis ab dolorum.', 0, '2025-03-30 10:10:37', NULL),
(35, 2, 1, 'Unde dignissimos recusandae autem totam.', 1, '2025-03-30 10:10:37', NULL),
(36, 1, 1, 'Qui accusamus consectetur debitis suscipit sed.', 0, '2025-03-30 10:10:37', NULL),
(37, 1, 2, 'Ab qui et sed necessitatibus.', 1, '2025-03-30 10:10:37', NULL),
(38, 1, 1, 'Ut non ratione fugiat et qui.', 0, '2025-03-30 10:10:37', NULL),
(39, 2, 1, 'Accusamus unde est neque mollitia sunt voluptates.', 1, '2025-03-30 10:10:37', NULL),
(40, 2, 2, 'Vero a eum nesciunt voluptatum.', 0, '2025-03-30 10:10:37', NULL),
(41, 2, 1, 'Odio ea labore quibusdam voluptatem soluta.', 0, '2025-03-30 10:10:37', NULL),
(42, 2, 1, 'Natus id voluptate incidunt quo.', 0, '2025-03-30 10:10:37', NULL),
(43, 2, 1, 'Itaque aliquid omnis consequatur autem.', 1, '2025-03-30 10:10:37', NULL),
(44, 1, 2, 'Officiis totam dolores enim.', 1, '2025-03-30 10:10:37', NULL),
(45, 2, 1, 'Et dignissimos quas et et molestiae.', 0, '2025-03-30 10:10:37', NULL),
(46, 2, 2, 'Accusantium doloremque illum rerum recusandae laborum possimus ipsam.', 1, '2025-03-30 10:10:37', NULL),
(47, 2, 1, 'Magnam nam consequuntur iste.', 0, '2025-03-30 10:10:37', NULL),
(48, 2, 1, 'Molestiae quod sint est aut eligendi quo voluptatem.', 1, '2025-03-30 10:10:37', NULL),
(49, 2, 1, 'Sunt ea natus pariatur vel.', 0, '2025-03-30 10:10:37', NULL),
(50, 1, 2, 'Fugit id commodi dolor pariatur quidem odio ut assumenda.', 1, '2025-03-30 10:10:37', NULL),
(53, 1, 2, 'Ê thằng ngu', 0, '2025-04-02 09:26:32', '2025-04-02 09:26:32'),
(54, 2, 1, 'Cmm', 0, '2025-04-02 09:28:28', '2025-04-02 09:28:28'),
(55, 2, 1, 'đm', 0, '2025-04-02 09:36:44', '2025-04-02 09:36:44'),
(56, 2, 1, 'ngu vậy?', 0, '2025-04-02 09:37:26', '2025-04-02 09:37:26'),
(57, 2, 1, 'đủ chưa', 0, '2025-04-02 09:44:23', '2025-04-02 09:44:23'),
(58, 2, 1, '?', 0, '2025-04-02 09:46:35', '2025-04-02 09:46:35'),
(59, 2, 1, 'thằng ngu', 0, '2025-04-02 09:53:11', '2025-04-02 09:53:11'),
(60, 2, 1, 'đmm', 0, '2025-04-02 10:00:42', '2025-04-02 10:00:42'),
(61, 2, 1, 'đm', 0, '2025-04-02 10:27:36', '2025-04-02 10:27:36'),
(62, 2, 1, '?', 0, '2025-04-02 10:27:43', '2025-04-02 10:27:43'),
(63, 1, 2, '?', 0, '2025-04-02 10:32:01', '2025-04-02 10:32:01'),
(64, 1, 2, '?', 0, '2025-04-02 10:34:40', '2025-04-02 10:34:40'),
(65, 1, 2, 'oke chưa', 0, '2025-04-02 10:34:51', '2025-04-02 10:34:51'),
(66, 2, 1, 'dm', 0, '2025-04-02 10:35:43', '2025-04-02 10:35:43'),
(67, 2, 1, 'khó nhỉ ?', 0, '2025-04-02 10:41:53', '2025-04-02 10:41:53'),
(68, 1, 2, 'haizz', 0, '2025-04-02 11:07:23', '2025-04-02 11:07:23'),
(69, 1, 2, 'thật sao ?', 0, '2025-04-02 11:08:00', '2025-04-02 11:08:00'),
(70, 1, 2, 'Vail', 0, '2025-04-02 11:08:43', '2025-04-02 11:08:43'),
(71, 1, 2, 'Chịu luôn', 0, '2025-04-02 11:09:11', '2025-04-02 11:09:11'),
(72, 2, 1, 'Là sao?', 0, '2025-04-02 11:10:07', '2025-04-02 11:10:07'),
(73, 2, 1, 'tôi bị ngu\'', 0, '2025-04-02 11:17:20', '2025-04-02 11:17:20'),
(74, 2, 1, '?', 0, '2025-04-02 11:23:27', '2025-04-02 11:23:27'),
(75, 2, 1, '?', 0, '2025-04-02 11:31:12', '2025-04-02 11:31:12'),
(76, 2, 1, 'ngu', 0, '2025-04-02 11:31:35', '2025-04-02 11:31:35'),
(77, 2, 1, '?', 0, '2025-04-02 11:34:28', '2025-04-02 11:34:28'),
(78, 2, 1, '1', 0, '2025-04-02 11:36:58', '2025-04-02 11:36:58'),
(79, 2, 1, 'ngu hả', 0, '2025-04-02 11:42:36', '2025-04-02 11:42:36'),
(80, 2, 1, '2222', 0, '2025-04-02 11:43:46', '2025-04-02 11:43:46'),
(81, 2, 1, '?', 0, '2025-04-02 11:46:26', '2025-04-02 11:46:26'),
(82, 2, 1, '22222', 0, '2025-04-02 11:46:41', '2025-04-02 11:46:41'),
(83, 2, 1, 'fkfksfks', 0, '2025-04-02 11:50:59', '2025-04-02 11:50:59'),
(84, 2, 1, '1111', 0, '2025-04-02 11:53:29', '2025-04-02 11:53:29'),
(85, 2, 1, '3333', 0, '2025-04-02 11:55:07', '2025-04-02 11:55:07'),
(86, 2, 1, '1111', 0, '2025-04-02 12:32:44', '2025-04-02 12:32:44'),
(87, 2, 1, '222', 0, '2025-04-02 12:40:16', '2025-04-02 12:40:16'),
(88, 2, 1, 'hithe', 0, '2025-04-02 16:47:13', '2025-04-02 16:47:13'),
(89, 2, 1, 'how old are you', 0, '2025-04-02 16:47:29', '2025-04-02 16:47:29'),
(90, 2, 1, 'sao rồi', 0, '2025-04-02 16:49:34', '2025-04-02 16:49:34'),
(91, 1, 2, 'đụ má', 0, '2025-04-02 16:51:36', '2025-04-02 16:51:36'),
(92, 1, 2, 'gì vậy?', 0, '2025-04-02 16:51:51', '2025-04-02 16:51:51'),
(93, 2, 1, 'con mẹ mày ?', 0, '2025-04-02 16:53:49', '2025-04-02 16:53:49'),
(94, 2, 1, 'ngu vãi l', 0, '2025-04-02 17:00:57', '2025-04-02 17:00:57'),
(95, 1, 2, 'm ngu lắm', 0, '2025-04-02 17:01:13', '2025-04-02 17:01:13'),
(96, 2, 1, '?', 0, '2025-04-02 17:20:37', '2025-04-02 17:20:37'),
(97, 2, 1, '?', 0, '2025-04-02 17:26:16', '2025-04-02 17:26:16'),
(98, 2, 1, 'Là sao ?', 0, '2025-04-02 17:26:36', '2025-04-02 17:26:36'),
(99, 2, 1, '222', 0, '2025-04-02 17:29:13', '2025-04-02 17:29:13'),
(100, 2, 1, '?', 0, '2025-04-02 17:32:19', '2025-04-02 17:32:19'),
(101, 2, 1, '?', 0, '2025-04-02 17:38:13', '2025-04-02 17:38:13'),
(102, 2, 1, 'con aca', 0, '2025-04-02 17:38:22', '2025-04-02 17:38:22'),
(103, 2, 1, 'helo', 0, '2025-04-02 17:40:03', '2025-04-02 17:40:03'),
(104, 2, 1, '?', 0, '2025-04-02 17:48:56', '2025-04-02 17:48:56'),
(105, 2, 1, 'ngu', 0, '2025-04-02 17:53:15', '2025-04-02 17:53:15'),
(106, 2, 1, '?', 0, '2025-04-02 17:54:08', '2025-04-02 17:54:08'),
(107, 2, 1, '222', 0, '2025-04-02 22:28:03', '2025-04-02 22:28:03'),
(108, 2, 1, 'Sao m ngu vậy?', 0, '2025-04-03 19:23:24', '2025-04-03 19:23:24'),
(109, 1, 2, 'ngu gì ?', 0, '2025-04-03 19:57:08', '2025-04-03 19:57:08'),
(110, 1, 2, 'Ê?', 0, '2025-04-03 20:24:31', '2025-04-03 20:24:31'),
(111, 1, 2, '?', 0, '2025-04-03 20:25:57', '2025-04-03 20:25:57'),
(112, 1, 2, '?', 0, '2025-04-03 20:43:03', '2025-04-03 20:43:03'),
(113, 1, 2, 'Ngu', 0, '2025-04-03 20:43:52', '2025-04-03 20:43:52'),
(114, 1, 2, '?', 0, '2025-04-03 20:46:03', '2025-04-03 20:46:03'),
(115, 1, 2, '???', 0, '2025-04-03 20:48:55', '2025-04-03 20:48:55'),
(116, 2, 1, 'Alooo', 0, '2025-04-03 22:57:10', '2025-04-03 22:57:10'),
(117, 2, 1, 'heloo', 0, '2025-04-03 22:57:26', '2025-04-03 22:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2025_02_20_062008_create_discounts_table', 1),
(3, '2025_02_20_062841_create_users_table', 1),
(4, '2025_02_20_062850_create_categories_table', 1),
(5, '2025_02_20_062857_create_products_table', 1),
(6, '2025_02_20_062903_create_product_variants_table', 1),
(7, '2025_02_20_062921_create_carts_table', 1),
(8, '2025_02_20_062927_create_orders_table', 1),
(9, '2025_02_20_062932_create_order_items_table', 1),
(10, '2025_02_20_062944_create_messages_table', 1),
(11, '2025_02_20_062950_create_banners_table', 1),
(12, '2025_02_20_063002_create_comments_table', 1),
(13, '2025_02_20_063004_create_ratings_table', 1),
(14, '2025_02_20_063021_create_notifications_table', 1),
(15, '2025_02_20_063028_create_favorites_table', 1),
(16, '2025_03_10_103743_create_contacts_table', 1),
(17, '2025_03_19_055735_create_product_images_table', 1),
(18, '2025_03_27_170343_create_colors_table', 1),
(19, '2025_03_27_170637_create_storages_table', 1),
(22, '2025_03_30_141248_create_posts_table', 2),
(23, '2025_04_05_132051_create_chat_messages_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `order_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `staff_id` bigint UNSIGNED DEFAULT NULL,
  `discount_id` bigint UNSIGNED DEFAULT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` int NOT NULL,
  `discount_amount` int NOT NULL DEFAULT '0',
  `status` enum('pending','processing','shipped','delivered','completed','cancelled') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `cancel_reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payment_method` enum('COD','VNPay') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` enum('pending','paid','failed') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_code`, `user_id`, `staff_id`, `discount_id`, `fullname`, `address`, `phone`, `email`, `total_price`, `discount_amount`, `status`, `cancel_reason`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(35, 'ORD1743887175', 2, NULL, 22, 'aaaaaaaaaaa', 'cccccccccccccccc', '678.301.3889', 'bbbbbbbbbbbbbb@example.com', 36500000, 500000, 'pending', NULL, 'COD', 'pending', '2025-04-05 14:06:15', '2025-04-05 14:06:15'),
(36, 'ORD1743887840', 2, NULL, 22, 'bb', 'cccccccccccccc', '678.301.3889', 'bbbbb@example.com', 55000000, 500000, 'pending', NULL, 'COD', 'pending', '2025-04-05 14:17:20', '2025-04-05 14:17:20'),
(37, 'ORD1743888278', 2, NULL, 22, 'Customer', '43784 Luettgen Glens\r\nNorth Derrick, IL 54948', '678.301.3889', 'customer@example.com', 53200000, 500000, 'pending', NULL, 'COD', 'pending', '2025-04-05 14:24:38', '2025-04-05 14:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_variant_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_variant_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(117, 35, 188, 2, 18500000, '2025-04-05 14:06:15', '2025-04-05 14:06:15'),
(118, 36, 188, 3, 18500000, '2025-04-05 14:17:20', '2025-04-05 14:17:20'),
(119, 37, 187, 3, 17900000, '2025-04-05 14:24:38', '2025-04-05 14:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('draft','published') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `screen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rear_camera` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `front_camera` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `battery` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_price` int DEFAULT NULL,
  `sale_price` int DEFAULT NULL,
  `sold` int DEFAULT NULL,
  `priority` int DEFAULT '0',
  `have_variant` tinyint(1) DEFAULT '0',
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `image`, `screen`, `os`, `rear_camera`, `front_camera`, `cpu`, `ram`, `battery`, `base_price`, `sale_price`, `sold`, `priority`, `have_variant`, `status`, `created_at`, `updated_at`) VALUES
(75, 1, 'Iphone 16e', 'Là sản phẩm cực kì chất lượng đến từ thương hiệu Apple', 'uploads/products/1743650286_iPhone-14-plus-thumb-den-600x600.jpg', '6.8 inches', 'iOS', '48MP', '12MP', 'A16 Bionic', '6GB', '5000mAh', 16500000, 15600000, NULL, 0, 0, 'active', '2025-04-02 20:18:06', '2025-04-02 21:21:48'),
(76, 1, 'Iphone 16 Pro Max', 'Sản phẩm cực tốt đến từ thương hiệu Apple', 'uploads/products/1743650719_iphone-16-plus-hong-thumb-1-600x600.jpg', '6.5 inches', 'iOS', '48MP', '12MP', 'A16 Bionic', '12GB', '5000mAh', 18500000, 17500000, NULL, 0, 0, 'active', '2025-04-02 20:22:22', '2025-04-02 21:21:02'),
(78, 1, 'Iphone 16 Plus', 'Chip 18A nhân siêu mạnh', 'uploads/products/1743654863_iphone-16-pro-max-sa-mac-thumb-1-600x600.jpg', '6.8 inches', 'iOS', '48MP', '12MP', 'A16 Bionic', '6GB', '5000mAh', 18500000, 17900000, NULL, 0, 0, 'active', '2025-04-02 21:34:23', '2025-04-02 21:34:23'),
(88, 2, 'error', 'Ducimus vel blanditiis sapiente assumenda rerum consequatur.', 'product.jpg', '6.5 inches', 'Android', '48MP', '32MP', 'Exynos 2200', '6GB', '5000mAh', NULL, NULL, 59, 2, 1, 'active', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(89, 1, 'eos', 'Culpa facilis sed magnam exercitationem ea.', 'product.jpg', '6.1 inches', 'Android', '48MP', '8MP', 'Exynos 2200', '6GB', '4500mAh', NULL, NULL, 31, 5, 0, 'inactive', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(90, 1, 'consectetur', 'Ratione neque nemo sequi et iste quod itaque a.', 'product.jpg', '6.5 inches', 'iOS', '108MP', '32MP', 'A16 Bionic', '12GB', '5000mAh', NULL, NULL, 44, 3, 0, 'inactive', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(91, 3, 'aut', 'Odio deserunt inventore tempora iure quia.', 'product.jpg', '6.5 inches', 'iOS', '108MP', '32MP', 'Exynos 2200', '8GB', '5000mAh', NULL, NULL, 23, 7, 0, 'active', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(92, 2, 'et', 'Illum sint mollitia repellat.', 'product.jpg', '6.5 inches', 'Android', '12MP', '32MP', 'Snapdragon 8 Gen 2', '4GB', '4500mAh', NULL, NULL, 37, 2, 1, 'inactive', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(93, 1, 'pariatur', 'Soluta aliquid ex amet temporibus dolor voluptatum voluptas.', 'product.jpg', '6.8 inches', 'Android', '12MP', '32MP', 'A16 Bionic', '4GB', '4500mAh', NULL, NULL, 36, 5, 0, 'inactive', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(94, 3, 'accusantium', 'Blanditiis minus laborum dolorum.', 'product.jpg', '6.5 inches', 'iOS', '108MP', '8MP', 'Exynos 2200', '12GB', '4500mAh', NULL, NULL, 5, 4, 1, 'inactive', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(95, 1, 'maxime', 'Odit veritatis nobis ut illo assumenda dignissimos natus.', 'product.jpg', '6.8 inches', 'Android', '108MP', '32MP', 'Exynos 2200', '6GB', '5000mAh', NULL, NULL, 1, 2, 1, 'inactive', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(96, 1, 'officiis', 'Aliquid inventore earum corporis quod cumque architecto dolorem.', 'product.jpg', '6.5 inches', 'iOS', '48MP', '12MP', 'Snapdragon 8 Gen 2', '12GB', '4500mAh', NULL, NULL, 17, 4, 0, 'active', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(97, 2, 'nobis', 'Vero veniam eos et omnis architecto alias.', 'product.jpg', '6.8 inches', 'Android', '12MP', '12MP', 'A16 Bionic', '12GB', '4500mAh', NULL, NULL, 96, 3, 1, 'inactive', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(98, 3, 'et', 'Commodi nulla nemo veniam temporibus.', 'product.jpg', '6.8 inches', 'Android', '48MP', '8MP', 'Exynos 2200', '4GB', '5000mAh', NULL, NULL, 8, 3, 0, 'inactive', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(99, 2, 'unde', 'Ut et consequatur ut.', 'product.jpg', '6.1 inches', 'Android', '48MP', '12MP', 'Exynos 2200', '8GB', '4000mAh', NULL, NULL, 60, 8, 1, 'active', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(100, 1, 'ullam', 'Rem commodi delectus rem impedit et.', 'product.jpg', '6.1 inches', 'Android', '12MP', '8MP', 'A16 Bionic', '8GB', '4000mAh', NULL, NULL, 3, 3, 0, 'active', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(101, 1, 'vitae', 'Culpa dicta enim enim commodi alias.', 'product.jpg', '6.8 inches', 'Android', '12MP', '8MP', 'Snapdragon 8 Gen 2', '12GB', '5000mAh', NULL, NULL, 4, 1, 1, 'inactive', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(102, 3, 'et', 'Et quia laudantium eveniet odio eum in porro.', 'product.jpg', '6.1 inches', 'Android', '108MP', '8MP', 'Snapdragon 8 Gen 2', '12GB', '4500mAh', NULL, NULL, 42, 4, 0, 'active', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(103, 1, 'sunt', 'Eveniet sit et laborum.', 'product.jpg', '6.8 inches', 'Android', '108MP', '8MP', 'A16 Bionic', '8GB', '5000mAh', NULL, NULL, 55, 10, 0, 'active', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(104, 3, 'et', 'Vitae ut rerum et facilis in praesentium et.', 'product.jpg', '6.1 inches', 'iOS', '48MP', '8MP', 'Snapdragon 8 Gen 2', '8GB', '4500mAh', NULL, NULL, 83, 4, 0, 'inactive', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(105, 1, 'nemo', 'Fugiat numquam sed consequatur et minima quam est.', 'product.jpg', '6.8 inches', 'iOS', '48MP', '12MP', 'Snapdragon 8 Gen 2', '4GB', '4500mAh', NULL, NULL, 62, 2, 1, 'active', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(106, 3, 'ea', 'Totam dolor expedita voluptatibus laudantium.', 'product.jpg', '6.8 inches', 'iOS', '48MP', '8MP', 'A16 Bionic', '12GB', '5000mAh', NULL, NULL, 63, 2, 0, 'inactive', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(107, 2, 'voluptate', 'Commodi sunt placeat blanditiis sed facere.', 'product.jpg', '6.1 inches', 'Android', '12MP', '32MP', 'Exynos 2200', '12GB', '4000mAh', NULL, NULL, 59, 2, 1, 'active', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(108, 1, 'ut', 'Sit eos impedit totam consequuntur aut minima.', 'product.jpg', '6.5 inches', 'iOS', '12MP', '12MP', 'Exynos 2200', '6GB', '4500mAh', NULL, NULL, 21, 7, 0, 'active', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(109, 3, 'aspernatur', 'Tenetur autem neque vitae harum et magnam odio.', 'product.jpg', '6.8 inches', 'Android', '12MP', '32MP', 'Exynos 2200', '8GB', '4500mAh', NULL, NULL, 66, 2, 1, 'inactive', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(110, 1, 'eveniet', 'Doloribus eaque impedit unde recusandae quae facilis.', 'product.jpg', '6.5 inches', 'Android', '48MP', '12MP', 'Snapdragon 8 Gen 2', '8GB', '4000mAh', NULL, NULL, 65, 8, 1, 'active', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(111, 2, 'qui', 'Omnis enim qui rerum id voluptate nesciunt.', 'product.jpg', '6.8 inches', 'iOS', '12MP', '32MP', 'Snapdragon 8 Gen 2', '12GB', '5000mAh', NULL, NULL, 74, 3, 0, 'active', '2025-04-04 05:07:59', '2025-04-04 05:07:59'),
(112, 3, 'nihil', 'Eaque corporis ex voluptatibus eligendi eos reiciendis architecto.', 'product.jpg', '6.5 inches', 'iOS', '48MP', '12MP', 'A16 Bionic', '4GB', '4500mAh', NULL, NULL, 21, 7, 0, 'active', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(113, 2, 'quos', 'Dignissimos enim amet vel dolorem.', 'product.jpg', '6.1 inches', 'Android', '48MP', '8MP', 'A16 Bionic', '12GB', '5000mAh', NULL, NULL, 8, 1, 0, 'inactive', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(114, 2, 'et', 'Placeat quasi sint fugit est autem.', 'product.jpg', '6.5 inches', 'iOS', '108MP', '32MP', 'A16 Bionic', '4GB', '4000mAh', NULL, NULL, 22, 7, 1, 'active', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(115, 1, 'et', 'Placeat optio sunt quisquam.', 'product.jpg', '6.8 inches', 'iOS', '108MP', '12MP', 'A16 Bionic', '6GB', '4500mAh', NULL, NULL, 52, 8, 1, 'active', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(116, 1, 'vero', 'Quae molestiae distinctio illum.', 'product.jpg', '6.5 inches', 'Android', '48MP', '12MP', 'Snapdragon 8 Gen 2', '4GB', '4500mAh', NULL, NULL, 72, 8, 0, 'inactive', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(117, 2, 'qui', 'Rerum earum sed odit nam ullam.', 'product.jpg', '6.8 inches', 'Android', '12MP', '12MP', 'A16 Bionic', '12GB', '4500mAh', NULL, NULL, 2, 8, 1, 'inactive', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(118, 1, 'dolor', 'Numquam et soluta culpa molestiae ut ut.', 'product.jpg', '6.5 inches', 'Android', '108MP', '32MP', 'Snapdragon 8 Gen 2', '8GB', '4000mAh', NULL, NULL, 21, 5, 1, 'inactive', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(119, 3, 'est', 'Sed eveniet hic aut delectus.', 'product.jpg', '6.1 inches', 'Android', '12MP', '8MP', 'Snapdragon 8 Gen 2', '12GB', '4000mAh', NULL, NULL, 43, 5, 1, 'active', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(120, 1, 'dolor', 'Perferendis est ipsam ut et enim voluptatem modi quibusdam.', 'product.jpg', '6.8 inches', 'iOS', '108MP', '12MP', 'A16 Bionic', '6GB', '5000mAh', NULL, NULL, 89, 10, 1, 'inactive', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(121, 1, 'eos', 'Natus recusandae mollitia ipsum.', 'product.jpg', '6.1 inches', 'iOS', '48MP', '12MP', 'A16 Bionic', '6GB', '4500mAh', NULL, NULL, 79, 6, 0, 'active', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(122, 2, 'et', 'Enim veritatis et amet labore autem molestiae.', 'product.jpg', '6.8 inches', 'Android', '12MP', '32MP', 'Exynos 2200', '4GB', '4500mAh', NULL, NULL, 62, 10, 0, 'active', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(123, 1, 'qui', 'Eos vel reiciendis dolor totam aperiam id.', 'product.jpg', '6.5 inches', 'Android', '48MP', '12MP', 'Exynos 2200', '12GB', '4000mAh', NULL, NULL, 41, 1, 1, 'inactive', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(124, 1, 'voluptas', 'Cumque excepturi enim occaecati dolor ad atque.', 'product.jpg', '6.8 inches', 'Android', '108MP', '32MP', 'Snapdragon 8 Gen 2', '4GB', '5000mAh', NULL, NULL, 71, 6, 1, 'active', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(125, 1, 'omnis', 'Ea facere est placeat soluta.', 'product.jpg', '6.8 inches', 'iOS', '108MP', '12MP', 'A16 Bionic', '6GB', '4000mAh', NULL, NULL, 88, 2, 1, 'active', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(126, 1, 'dolores', 'Molestiae veniam beatae adipisci rerum.', 'product.jpg', '6.5 inches', 'Android', '12MP', '32MP', 'Snapdragon 8 Gen 2', '8GB', '4000mAh', NULL, NULL, 36, 9, 1, 'active', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(127, 2, 'non', 'Ex voluptate quis debitis hic qui.', 'product.jpg', '6.8 inches', 'iOS', '108MP', '32MP', 'Snapdragon 8 Gen 2', '4GB', '5000mAh', NULL, NULL, 45, 4, 0, 'active', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(128, 3, 'expedita', 'Enim incidunt praesentium qui voluptas ullam.', 'product.jpg', '6.1 inches', 'Android', '48MP', '12MP', 'A16 Bionic', '12GB', '5000mAh', NULL, NULL, 63, 8, 0, 'active', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(129, 2, 'magnam', 'Cupiditate quia est officiis aspernatur doloremque.', 'product.jpg', '6.1 inches', 'iOS', '108MP', '32MP', 'A16 Bionic', '12GB', '4500mAh', NULL, NULL, 38, 8, 1, 'inactive', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(130, 1, 'quos', 'Debitis natus iusto excepturi autem sed.', 'product.jpg', '6.8 inches', 'Android', '12MP', '8MP', 'Exynos 2200', '8GB', '4000mAh', NULL, NULL, 67, 5, 1, 'active', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(131, 1, 'corrupti', 'Natus non et sed veniam omnis et deleniti.', 'product.jpg', '6.1 inches', 'iOS', '108MP', '8MP', 'Snapdragon 8 Gen 2', '4GB', '4000mAh', NULL, NULL, 16, 5, 0, 'active', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(132, 1, 'nihil', 'Quas assumenda neque optio consequuntur sunt.', 'product.jpg', '6.5 inches', 'Android', '48MP', '12MP', 'A16 Bionic', '4GB', '4500mAh', NULL, NULL, 90, 1, 0, 'inactive', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(133, 3, 'at', 'Et vel pariatur omnis.', 'product.jpg', '6.5 inches', 'Android', '12MP', '32MP', 'A16 Bionic', '6GB', '4500mAh', NULL, NULL, 77, 3, 0, 'active', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(134, 3, 'et', 'Eveniet voluptatem quos dolor vel.', 'product.jpg', '6.1 inches', 'iOS', '48MP', '8MP', 'Snapdragon 8 Gen 2', '12GB', '4500mAh', NULL, NULL, 12, 6, 1, 'active', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(135, 3, 'ea', 'Sit atque aliquid eos voluptate corporis animi magnam.', 'product.jpg', '6.8 inches', 'Android', '108MP', '8MP', 'Snapdragon 8 Gen 2', '8GB', '4500mAh', NULL, NULL, 18, 7, 1, 'active', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(136, 1, 'ab', 'Repellendus itaque quia impedit mollitia cupiditate doloribus.', 'product.jpg', '6.1 inches', 'iOS', '48MP', '8MP', 'Snapdragon 8 Gen 2', '6GB', '4500mAh', NULL, NULL, 94, 7, 0, 'active', '2025-04-04 05:08:00', '2025-04-04 05:08:00'),
(137, 3, 'ducimus', 'Id repudiandae quis quae quibusdam.', 'product.jpg', '6.1 inches', 'Android', '48MP', '8MP', 'Snapdragon 8 Gen 2', '6GB', '5000mAh', NULL, NULL, 93, 4, 1, 'active', '2025-04-04 05:08:00', '2025-04-04 05:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `mini_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `mini_image`, `created_at`, `updated_at`) VALUES
(32, 75, 'uploads/products/1743650648_mini_iphone-15-plus-128gb-xanh-la-3-750x500.jpg', '2025-04-02 20:24:08', '2025-04-02 20:24:08'),
(33, 75, 'uploads/products/1743650648_mini_iphone-15-plus-green-2-638629458412751972-750x500.jpg', '2025-04-02 20:24:08', '2025-04-02 20:24:08'),
(34, 75, 'uploads/products/1743650648_mini_iphone-15-plus-tem-99-4-750x500.jpg', '2025-04-02 20:24:08', '2025-04-02 20:24:08'),
(35, 76, 'uploads/products/1743653763_mini_iphone-15-pro-max-black-thumbnew-600x600.jpg', '2025-04-02 21:16:03', '2025-04-02 21:16:03'),
(36, 76, 'uploads/products/1743653763_mini_iphone-15-pro-max-titan-den-2-638629415797228950-750x500.jpg', '2025-04-02 21:16:03', '2025-04-02 21:16:03'),
(37, 76, 'uploads/products/1743653763_mini_iphone-15-xanh-la-1.png', '2025-04-02 21:16:03', '2025-04-02 21:16:03'),
(41, 78, 'uploads/products/1743654863_mini_iphone-15-plus-128gb-xanh-la-3-750x500.jpg', '2025-04-02 21:34:23', '2025-04-02 21:34:23'),
(42, 78, 'uploads/products/1743654863_mini_iphone-15-plus-green-2-638629458412751972-750x500.jpg', '2025-04-02 21:34:23', '2025-04-02 21:34:23'),
(43, 78, 'uploads/products/1743654863_mini_iphone-15-plus-tem-99-4-750x500.jpg', '2025-04-02 21:34:23', '2025-04-02 21:34:23');

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hax_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin_price` int DEFAULT NULL,
  `price` int DEFAULT NULL,
  `stock` int DEFAULT NULL,
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `color`, `hax_code`, `storage`, `origin_price`, `price`, `stock`, `status`, `created_at`, `updated_at`) VALUES
(184, 75, 'Red', '#FF0000', '16GB', 17500000, 16500000, 5, 'active', '2025-04-02 20:18:06', '2025-04-02 20:18:06'),
(185, 75, 'Blue', '#98A7C1', '8GB', 16500000, 15600000, 3, 'active', '2025-04-02 20:18:06', '2025-04-02 20:18:06'),
(186, 75, 'Blue', '#98A7C1', '16GB', 17500000, 16500000, 2, 'active', '2025-04-02 20:18:06', '2025-04-02 20:18:06'),
(187, 76, 'Red', '#FF0000', '8GB', 18900000, 17900000, 10, 'active', '2025-04-02 20:22:22', '2025-04-02 20:22:22'),
(188, 76, 'Red', '#FF0000', '16GB', 19500000, 18500000, 15, 'active', '2025-04-02 20:22:22', '2025-04-02 20:22:22'),
(189, 78, 'Red', '#FF0000', '8GB', 18500000, 17900000, 10, 'active', '2025-04-02 21:34:23', '2025-04-02 21:34:23'),
(190, 78, 'Red', '#FF0000', '16GB', 19000000, 18500000, 10, 'active', '2025-04-02 21:34:23', '2025-04-02 21:34:23');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `rating` tinyint UNSIGNED NOT NULL,
  `review` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `product_id`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(1, 2, 75, 4, 'Đẹp quá bạn ơiiiii', '2025-04-01 07:38:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `storages`
--

CREATE TABLE `storages` (
  `id` bigint UNSIGNED NOT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `storages`
--

INSERT INTO `storages` (`id`, `size`, `created_at`, `updated_at`) VALUES
(1, '8GB', NULL, NULL),
(2, '16GB', NULL, NULL),
(3, '32GB', NULL, NULL),
(4, '64GB', NULL, NULL),
(5, '128GB', NULL, NULL),
(6, '256GB', NULL, NULL),
(7, '512GB', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `role` enum('admin','staff','customer') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `block_reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `username`, `password`, `phone`, `address`, `avatar`, `status`, `role`, `block_reason`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@example.com', 'admin', '$2y$12$JfCPIg9hIZGAJBWw.wWbjuou.fanYY9PcpmWKeEQK5WpGG82jmMLO', '+1-856-372-7176', '492 Reba Gardens Suite 060\nKarianeburgh, AL 85523-9007', 'default.jpg', 'active', 'admin', NULL, '2025-03-30 10:10:35', '2025-03-30 10:10:35'),
(2, 'Customer', 'customer@example.com', 'customer', '$2y$12$G9a6cSTqI0vO1dMyw/2CG.iQJUQZnRXqjgS6zm0KOofUnQ704L.8y', '678.301.3889', '43784 Luettgen Glens\nNorth Derrick, IL 54948', 'default.jpg', 'active', 'customer', NULL, '2025-03-30 10:10:36', '2025-04-04 02:06:13'),
(4, 'Cao Văn Nhật', 'nhatnobi1503@gmail.com', 'nhatnobi1503', '$2y$12$Astq1WXxSHuLnhesRN63I.4VOXsD1MjohETPkI1T19eGrBvEaT9SK', '085965163', 'Nguyễn Hoàng ....', 'avatars/OEQ3Ao9d4AO7rsPzcwY2xt6TQcDf8rx5p2yhYggD.jpg', 'active', 'customer', NULL, '2025-04-04 00:42:34', '2025-04-04 02:05:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_variant_id_foreign` (`product_variant_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `colors_name_unique` (`name`),
  ADD UNIQUE KEY `colors_hax_code_unique` (`hax_code`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_product_id_foreign` (`product_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `discounts_code_unique` (`code`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_user_id_foreign` (`user_id`),
  ADD KEY `favorites_product_id_foreign` (`product_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_sender_id_foreign` (`sender_id`),
  ADD KEY `messages_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_user_id_foreign` (`user_id`),
  ADD KEY `notifications_order_id_foreign` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_code_unique` (`order_code`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_staff_id_foreign` (`staff_id`),
  ADD KEY `orders_discount_id_foreign` (`discount_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_variant_id_foreign` (`product_variant_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variants_product_id_foreign` (`product_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ratings_user_id_product_id_unique` (`user_id`,`product_id`),
  ADD KEY `ratings_product_id_foreign` (`product_id`);

--
-- Indexes for table `storages`
--
ALTER TABLE `storages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `storages_size_unique` (`size`);

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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `storages`
--
ALTER TABLE `storages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_variant_id_foreign` FOREIGN KEY (`product_variant_id`) REFERENCES `product_variants` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_discount_id_foreign` FOREIGN KEY (`discount_id`) REFERENCES `discounts` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `orders_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_variant_id_foreign` FOREIGN KEY (`product_variant_id`) REFERENCES `product_variants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD CONSTRAINT `product_variants_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
