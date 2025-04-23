-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2025 at 01:52 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.28

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
(14, 'Đẹp', 'banners/nJ0BrOJUbQz5AqLAmwLtdbtpkoCoKDCtxwWdiqFt.jpg', 'Iphone 16', '149', 'inactive', '2025-04-06 20:31:13', '2025-04-12 07:33:41'),
(15, 'Banner Iphone 11', 'banners/dBrOtP1C74ZC1RHDOBPG4BKccotsAndS8dHz9rpY.jpg', 'Iphone 16e', '75', 'inactive', '2025-04-07 10:29:36', '2025-04-12 07:33:41'),
(16, 'Banner iphone 15', 'banners/a73j5chKQgzzmHKcS5LDZdroZZJYvtJSrtZsf8va.jpg', 'Iphone 15', '152', 'inactive', '2025-04-07 10:35:22', '2025-04-12 07:33:41'),
(17, 'Banner Iphone 15', 'banners/wXVnszeEyXVLHbj1BO8jm2FaKhlq7IBKpqr6XqPI.png', 'Iphone 15 Plus', '151', 'inactive', '2025-04-12 07:20:37', '2025-04-12 07:33:41'),
(18, 'Iphone 16 Pro Max', 'banners/RLgBnZr81aiZyFbsc8s2Ki5EHfAMrUTaBKYCp9M0.png', 'Iphone 16 Pro Max', '76', 'active', '2025-04-12 07:33:34', '2025-04-13 04:56:50'),
(19, 'iphone', 'banners/mDyxnOYg6bGEEuW07Y4TNAT4YHsxl5EvEd3KKUeX.png', 'Iphone 16 Plus', '78', 'inactive', '2025-04-13 04:58:28', '2025-04-13 04:58:28');

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
(103, 2, 188, 5, '2025-04-21 14:19:37', '2025-04-21 14:20:49');

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
(1, 'iPhone 11 Mới', 'uploads/categories/1743649909_iphone-16-pro-max-sa-mac-thumb-1-600x600.jpg', 'Là sản phẩm điện thoại thông minh của hãng Apple', 'active', '2025-03-30 10:10:36', '2025-04-12 10:02:30'),
(2, 'Iphone 11 Cũ', 'uploads/categories/1744452222_iphone-15-hong-thumb-1-600x600.jpg', 'Điện thoại thông minh đến từ hãng samsung', 'active', '2025-04-04 05:05:05', '2025-04-12 10:03:42'),
(3, 'Iphone 12 Cũ', 'uploads/categories/1744452242_iPhone-14-plus-thumb-den-600x600.jpg', 'Đẹp', 'active', '2025-04-04 05:06:01', '2025-04-12 10:04:02'),
(9, 'Iphone 12 Mới', 'uploads/categories/1744452259_iphone-12-tim-1-600x600.jpg', 'Đẹp', 'active', '2025-04-07 10:40:49', '2025-04-12 10:04:19'),
(10, 'Iphone 13 Cũ', 'uploads/categories/1744173917_iphone-16-plus-hong-thumb-1-600x600.jpg', 'Hãng Apple', 'active', '2025-04-09 04:45:17', '2025-04-09 04:45:17'),
(11, 'Iphone 13 Mới', 'uploads/categories/1744173938_iphone-16-pro-max-sa-mac-thumb-1-600x600.jpg', 'Quá đẹp', 'active', '2025-04-09 04:45:38', '2025-04-09 04:45:38'),
(12, 'Iphone 14 Cũ', 'uploads/categories/1744173969_iphone-15-pro-max-black-thumbnew-600x600.jpg', 'Đẹp', 'active', '2025-04-09 04:46:09', '2025-04-09 04:46:09'),
(13, 'Iphone 14 Mới', 'uploads/categories/1744173989_iphone-15-plus-xanh-la-128gb-thumb-600x600.jpg', 'Đẹp', 'active', '2025-04-09 04:46:29', '2025-04-09 04:46:29'),
(14, 'Iphone 15 Cũ', 'uploads/categories/1744174015_iphone-16-xanh-mong-ket-thumbnew-600x600.png', 'Quá đẹp', 'active', '2025-04-09 04:46:55', '2025-04-09 04:46:55'),
(15, 'Iphone 15 Mới', 'uploads/categories/1744174045_iphone-13-midnight-2-600x600.jpg', 'Đẹp', 'active', '2025-04-09 04:47:25', '2025-04-09 04:47:25'),
(16, 'Iphone 16 Cũ', 'uploads/categories/1744174066_iPhone-14-thumb-trang-600x600.jpg', 'Iphone', 'active', '2025-04-09 04:47:46', '2025-04-09 04:47:46'),
(17, 'Iphone 16 Mới', 'uploads/categories/1744174160_iphone-15-hong-thumb-1-600x600.jpg', 'Đẹp', 'active', '2025-04-09 04:49:20', '2025-04-09 04:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` bigint UNSIGNED NOT NULL,
  `sender_id` bigint UNSIGNED NOT NULL,
  `receiver_id` bigint UNSIGNED NOT NULL,
  `room_id` bigint UNSIGNED NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `media_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`id`, `sender_id`, `receiver_id`, `room_id`, `message`, `media_type`, `media_path`, `read_at`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 2, 'Hello em', NULL, NULL, NULL, '2025-04-06 16:58:13', '2025-04-06 16:58:13'),
(2, 1, 2, 2, 'Hello anh yêu', NULL, NULL, NULL, '2025-04-06 16:58:25', '2025-04-06 16:58:25'),
(3, 2, 1, 2, 'Ok em', NULL, NULL, NULL, '2025-04-06 22:56:05', '2025-04-06 22:56:05'),
(4, 1, 2, 2, 'Chào bạn', NULL, NULL, NULL, '2025-04-07 10:54:15', '2025-04-07 10:54:15'),
(5, 1, 2, 2, 'Bạn khỏe không ?', NULL, NULL, NULL, '2025-04-07 10:54:20', '2025-04-07 10:54:20'),
(6, 2, 1, 2, 'Chào bạn', NULL, NULL, NULL, '2025-04-07 11:15:57', '2025-04-07 11:15:57'),
(7, 1, 2, 2, 'hello bro', NULL, NULL, NULL, '2025-04-10 14:09:38', '2025-04-10 14:09:38'),
(8, 2, 1, 2, 'okeee', NULL, NULL, NULL, '2025-04-10 14:09:51', '2025-04-10 14:09:51'),
(9, 1, 5, 5, 'Hello ạ', NULL, NULL, NULL, '2025-04-10 14:11:07', '2025-04-10 14:11:07'),
(10, 1, 2, 2, 'alooo', NULL, NULL, NULL, '2025-04-10 14:15:06', '2025-04-10 14:15:06'),
(11, 1, 2, 2, 'Nghe không bro', NULL, NULL, NULL, '2025-04-10 14:15:12', '2025-04-10 14:15:12');

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

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `content`, `created_at`, `updated_at`) VALUES
(101, 2, 75, 'Đẹp quá ní ơi\r\n', '2025-04-09 06:23:06', NULL);

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
(22, 'G42F45DS5', 'percentage', 1000000, '20.00', 20000000, '2025-04-06', '2025-04-25', '2025-04-04 01:56:32', '2025-04-06 21:42:23'),
(23, 'G42F45DS7', 'fixed', NULL, '800000.00', 20000000, '2025-04-06', '2025-04-12', '2025-04-06 22:16:36', '2025-04-06 22:16:36'),
(24, 'GFGF4DG5', 'percentage', 1000000, '99.00', 20000000, '2025-04-08', '2025-04-12', '2025-04-10 12:33:13', '2025-04-10 12:35:46');

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
(10, '2025_02_20_062944_create_messages_table', 1),
(11, '2025_02_20_062950_create_banners_table', 1),
(12, '2025_02_20_063002_create_comments_table', 1),
(14, '2025_02_20_063021_create_notifications_table', 1),
(15, '2025_02_20_063028_create_favorites_table', 1),
(16, '2025_03_10_103743_create_contacts_table', 1),
(17, '2025_03_19_055735_create_product_images_table', 1),
(18, '2025_03_27_170343_create_colors_table', 1),
(19, '2025_03_27_170637_create_storages_table', 1),
(22, '2025_03_30_141248_create_posts_table', 2),
(23, '2025_03_26_071356_create_order_details_table', 3),
(24, '2025_03_26_084755_create_payments_table', 3),
(25, '2025_04_05_132051_create_chat_messages_table', 3),
(28, '2025_02_20_062932_create_order_items_table', 4),
(29, '2025_02_20_063004_create_ratings_table', 4),
(30, '2025_04_07_162758_create_news_table', 5),
(31, '2025_04_07_195043_create_news_images_table', 5),
(32, '2025_04_10_203829_add_soft_deletes_to_users_table', 6),
(33, '2025_04_10_205541_add_soft_deletes_to_products_table', 7),
(34, '2025_04_10_101805_add_rating_to_order_items_table', 8),
(35, '2025_04_10_102138_add_review_to_order_items_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` bigint UNSIGNED NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_images`
--

CREATE TABLE `news_images` (
  `id` bigint UNSIGNED NOT NULL,
  `news_id` bigint UNSIGNED NOT NULL,
  `image_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(23, 'ORD17437', 2, 1, NULL, 'Customer', '43784 Luettgen GlensNorth Derrick, IL 54948', '678.301.3889', 'customer@example.com', 35800000, 0, 'cancelled', 'Quá tuyệt vời', 'COD', 'pending', '2025-04-03 22:27:35', '2025-04-07 04:36:48'),
(24, 'ORD17435', 2, 1, NULL, 'Customer', '43784 Luettgen GlensNorth Derrick, IL 54948', '678.301.3889', 'customer@example.com', 35800000, 0, 'cancelled', 'Ngu', 'COD', 'pending', '2025-04-03 22:33:15', '2025-04-06 22:02:26'),
(31, 'ORD17433', 2, 1, 22, 'Customer', '43784 Luettgen Glens\r\nNorth Derrick, IL 54948', '678.301.3889', 'customer@example.com', 36000000, 1000000, 'cancelled', 'Ngu', 'COD', 'pending', '2025-04-05 20:58:25', '2025-04-06 22:04:38'),
(39, 'ORD51913', 2, NULL, NULL, 'Customer', '43784 Luettgen GlensNorth Derrick, IL 54948', '678.301.3889', 'customer@example.com', 17800000, 0, 'pending', NULL, 'COD', 'pending', '2025-04-09 01:51:16', '2025-04-09 01:51:16'),
(40, 'ORD39903', 2, NULL, 22, 'Customer', '43784 Luettgen GlensNorth Derrick, IL 54948', '678.301.3889', 'customer@example.com', 45500000, 1000000, 'pending', NULL, 'COD', 'pending', '2025-04-09 01:53:02', '2025-04-09 01:53:02'),
(41, 'ORD69270', 2, NULL, 22, 'Customer', '43784 Luettgen GlensNorth Derrick, IL 54948', '678.301.3889', 'customer@example.com', 30200000, 1000000, 'pending', NULL, 'COD', 'pending', '2025-04-10 11:40:31', '2025-04-10 11:40:31'),
(42, 'ORD17446', 2, 1, NULL, 'Customer', '43784 Luettgen GlensNorth Derrick, IL 54948', '678.301.3889', 'customer@example.com', 35600000, 0, 'completed', NULL, 'COD', 'paid', '2025-04-10 12:24:15', '2025-04-11 10:25:34'),
(43, 'ORD92057', 2, 1, NULL, 'Customer', '43784 Luettgen GlensNorth Derrick, IL 54948', '678.301.3889', 'customer@example.com', 17800000, 0, 'completed', NULL, 'COD', 'paid', '2025-04-12 07:03:41', '2025-04-12 07:05:14'),
(44, 'ORD30264', 2, NULL, NULL, 'Customer', '43784 Luettgen GlensNorth Derrick, IL 54948', '678.301.3889', 'customer@example.com', 15600000, 0, 'pending', NULL, 'COD', 'pending', '2025-04-13 05:01:43', '2025-04-13 05:01:43'),
(45, 'ORD30554', 2, NULL, 22, 'Customer', '43784 Luettgen GlensNorth Derrick, IL 54948', '678.301.3889', 'customer@example.com', 50000000, 1000000, 'pending', NULL, 'COD', 'pending', '2025-04-13 11:15:00', '2025-04-13 11:15:00'),
(46, 'ORD59869', 2, NULL, NULL, 'Customer', '43784 Luettgen GlensNorth Derrick, IL 54948', '678.301.3889', 'customer@example.com', 17800000, 0, 'pending', NULL, 'COD', 'pending', '2025-04-20 04:21:39', '2025-04-20 04:21:39'),
(47, 'ORD56144', 2, NULL, NULL, 'Customer', '43784 Luettgen GlensNorth Derrick, IL 54948', '678.301.3889', 'customer@example.com', 35600000, 0, 'pending', NULL, 'COD', 'pending', '2025-04-20 04:22:20', '2025-04-20 04:22:20'),
(48, 'ORD19721', 2, NULL, NULL, 'Customer', '43784 Luettgen GlensNorth Derrick, IL 54948', '678.301.3889', 'customer@example.com', 15600000, 0, 'pending', NULL, 'COD', 'pending', '2025-04-20 10:08:53', '2025-04-20 10:08:53');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_variant_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL,
  `rating` int DEFAULT NULL,
  `review` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_variant_id`, `name`, `image`, `color`, `storage`, `quantity`, `price`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(1, 31, 229, 'Iphone 16', 'image.png', 'Red', '8GB', 2, 19500000, NULL, NULL, '2025-04-08 02:49:41', '2025-04-08 02:49:41'),
(13, 23, 226, 'Iphone 16', 'image.png', 'Red', '8GB', 2, 19500000, NULL, NULL, '2025-04-08 02:49:41', '2025-04-08 02:49:41'),
(14, 24, 227, 'Iphone 16', 'image.png', 'Red', '8GB', 2, 19500000, NULL, NULL, '2025-04-08 02:49:41', '2025-04-08 02:49:41'),
(15, 39, 187, 'Iphone 16 Pro Max', 'uploads/products/1743650719_iphone-16-plus-hong-thumb-1-600x600.jpg', 'Red', '8GB', 1, 17800000, NULL, NULL, '2025-04-09 01:51:16', '2025-04-09 01:51:16'),
(16, 40, 227, 'Iphone 12 Test', 'uploads/products/1743948857_iphone-12-tim-1-600x600.jpg', 'Black', '64GB', 3, 15500000, NULL, NULL, '2025-04-09 01:53:02', '2025-04-09 01:53:02'),
(17, 41, 212, 'Iphone 15', 'uploads/products/1743946273_iphone-15-hong-thumb-1-600x600.jpg', 'Black Titanium', '32GB', 2, 15600000, NULL, NULL, '2025-04-10 11:40:31', '2025-04-10 11:40:31'),
(18, 42, 187, 'Iphone 16 Pro Max', 'uploads/products/1743650719_iphone-16-plus-hong-thumb-1-600x600.jpg', 'Red', '8GB', 2, 17800000, 5, 'Quá oki', '2025-04-10 12:24:15', '2025-04-12 06:57:39'),
(19, 43, 187, 'Iphone 16 Pro Max', 'uploads/products/1743650719_iphone-16-plus-hong-thumb-1-600x600.jpg', 'Red', '8GB', 1, 17800000, 2, 'Oke đấy', '2025-04-12 07:03:41', '2025-04-12 07:05:29'),
(20, 44, 185, 'Iphone 16e', 'uploads/products/1743650286_iPhone-14-plus-thumb-den-600x600.jpg', 'Blue', '8GB', 1, 15600000, NULL, NULL, '2025-04-13 05:01:43', '2025-04-13 05:01:43'),
(21, 45, 190, 'Iphone 16 Plus', 'uploads/products/1743654863_iphone-16-pro-max-sa-mac-thumb-1-600x600.jpg', 'Red', '16GB', 3, 17000000, NULL, NULL, '2025-04-13 11:15:00', '2025-04-13 11:15:00'),
(22, 46, 187, 'Iphone 16 Pro Max', 'uploads/products/1743650719_iphone-16-plus-hong-thumb-1-600x600.jpg', 'Red', '8GB', 1, 17800000, NULL, NULL, '2025-04-20 04:21:39', '2025-04-20 04:21:39'),
(23, 47, 187, 'Iphone 16 Pro Max', 'uploads/products/1743650719_iphone-16-plus-hong-thumb-1-600x600.jpg', 'Red', '8GB', 2, 17800000, NULL, NULL, '2025-04-20 04:22:20', '2025-04-20 04:22:20'),
(24, 48, 185, 'Iphone 16e', 'uploads/products/1743650286_iPhone-14-plus-thumb-den-600x600.jpg', 'Blue', '8GB', 1, 15600000, NULL, NULL, '2025-04-20 10:08:53', '2025-04-20 10:08:53');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_price` int DEFAULT NULL,
  `sale_price` int DEFAULT NULL,
  `sold` int DEFAULT NULL,
  `view` int DEFAULT '0',
  `priority` int DEFAULT '0',
  `have_variant` tinyint(1) DEFAULT '0',
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `image`, `base_price`, `sale_price`, `sold`, `view`, `priority`, `have_variant`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(75, 1, 'Iphone 16e', 'Là sản phẩm cực kì chất lượng đến từ thương hiệu Apple', 'uploads/products/1743650286_iPhone-14-plus-thumb-den-600x600.jpg', 16500000, 15600000, 15, 34, 13, 1, 'active', '2025-04-02 20:18:06', '2025-04-21 14:18:33', NULL),
(76, 17, 'Iphone 16 Pro Max', 'Sản phẩm cực tốt đến từ thương hiệu Apple', 'uploads/products/1743650719_iphone-16-plus-hong-thumb-1-600x600.jpg', 18500000, 17500000, 165, 152, 14, 1, 'active', '2025-04-02 20:22:22', '2025-04-21 14:19:00', NULL),
(78, 1, 'Iphone 16 Plus', 'Chip 18A nhân siêu mạnh', 'uploads/products/1743654863_iphone-16-pro-max-sa-mac-thumb-1-600x600.jpg', 18500000, 17900000, 515, 1532, 12, 1, 'active', '2025-04-02 21:34:23', '2025-04-20 05:39:54', NULL),
(149, 1, 'Iphone 16', 'Đẹp quá nhở', 'uploads/products/1743945139_iphone-16-xanh-mong-ket-thumbnew-600x600 (1).png', 16500000, 15600000, 12, 2809, 0, 1, 'active', '2025-04-06 13:12:19', '2025-04-13 11:31:44', NULL),
(150, 1, 'Iphone 15 Pro Max', 'Đẹp lắm', 'uploads/products/1743945590_iphone-15-pro-max-black-thumbnew-600x600.jpg', 15900000, 14900000, 1, 135, 0, 1, 'active', '2025-04-06 13:19:50', '2025-04-20 03:28:39', NULL),
(151, 1, 'Iphone 15 Plus', 'Đẹp nhất 2024', 'uploads/products/1743946087_iphone-15-plus-xanh-la-128gb-thumb-600x600 (1).jpg', 18500000, 17400000, 15, 158, 0, 1, 'active', '2025-04-06 13:28:07', '2025-04-20 01:48:15', NULL),
(152, 1, 'Iphone 15', 'Sản phẩm cực kì đẹp', 'uploads/products/1743946273_iphone-15-hong-thumb-1-600x600.jpg', 16500000, 15600000, 13, 791, 0, 1, 'active', '2025-04-06 13:31:13', '2025-04-20 05:38:56', NULL),
(153, 1, 'Iphone 14 Plus', 'đẹp quá ạ', 'uploads/products/1743946664_iPhone-14-plus-thumb-den-600x600.jpg', 16500000, 15900000, 4, 793, 0, 1, 'active', '2025-04-06 13:37:44', '2025-04-20 06:13:12', NULL),
(154, 1, 'Iphone 14', 'Đẹp quá ạ', 'uploads/products/1743947111_iPhone-14-thumb-trang-600x600.jpg', 16500000, 15900000, 16, 794, 0, 1, 'active', '2025-04-06 13:45:11', '2025-04-20 02:58:42', NULL),
(155, 1, 'Iphone 13', 'Quá chi tiết', 'uploads/products/1743947585_iphone-13-midnight-2-600x600.jpg', 14990000, 11900000, 7, 117, 0, 1, 'active', '2025-04-06 13:53:05', '2025-04-19 17:02:04', NULL),
(156, 1, 'Iphone 12 Test', 'Dòng điện thoại thông minh được sản xuất bởi Apple Inc', 'uploads/products/1743948857_iphone-12-tim-1-600x600.jpg', 16500000, 15900000, 20, 236, 0, 1, 'active', '2025-04-06 14:14:17', '2025-04-20 06:49:43', NULL);

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
(43, 78, 'uploads/products/1743654863_mini_iphone-15-plus-tem-99-4-750x500.jpg', '2025-04-02 21:34:23', '2025-04-02 21:34:23'),
(57, 149, 'uploads/products/1743945139_mini_iphone-15-plus-128gb-xanh-la-3-750x500.jpg', '2025-04-06 13:12:19', '2025-04-06 13:12:19'),
(58, 149, 'uploads/products/1743945139_mini_iphone-15-plus-green-2-638629458412751972-750x500.jpg', '2025-04-06 13:12:19', '2025-04-06 13:12:19'),
(59, 149, 'uploads/products/1743945139_mini_iphone-15-plus-tem-99-4-750x500.jpg', '2025-04-06 13:12:19', '2025-04-06 13:12:19'),
(60, 150, 'uploads/products/1743945590_mini_iphone-15-plus-128gb-xanh-la-3-750x500.jpg', '2025-04-06 13:19:50', '2025-04-06 13:19:50'),
(61, 150, 'uploads/products/1743945590_mini_iphone-15-plus-green-2-638629458412751972-750x500.jpg', '2025-04-06 13:19:50', '2025-04-06 13:19:50'),
(62, 150, 'uploads/products/1743945590_mini_iphone-15-plus-tem-99-4-750x500.jpg', '2025-04-06 13:19:51', '2025-04-06 13:19:51'),
(63, 151, 'uploads/products/1743946087_mini_iphone-15-plus-128gb-xanh-la-3-750x500.jpg', '2025-04-06 13:28:07', '2025-04-06 13:28:07'),
(64, 151, 'uploads/products/1743946087_mini_iphone-15-plus-green-2-638629458412751972-750x500.jpg', '2025-04-06 13:28:07', '2025-04-06 13:28:07'),
(65, 151, 'uploads/products/1743946087_mini_iphone-15-plus-tem-99-4-750x500.jpg', '2025-04-06 13:28:07', '2025-04-06 13:28:07'),
(66, 152, 'uploads/products/1743946273_mini_iphone-15-plus-128gb-xanh-la-3-750x500.jpg', '2025-04-06 13:31:13', '2025-04-06 13:31:13'),
(67, 152, 'uploads/products/1743946273_mini_iphone-15-plus-green-2-638629458412751972-750x500.jpg', '2025-04-06 13:31:13', '2025-04-06 13:31:13'),
(68, 152, 'uploads/products/1743946273_mini_iphone-15-plus-tem-99-4-750x500.jpg', '2025-04-06 13:31:13', '2025-04-06 13:31:13'),
(69, 153, 'uploads/products/1743946664_mini_iphone-15-plus-128gb-xanh-la-3-750x500.jpg', '2025-04-06 13:37:44', '2025-04-06 13:37:44'),
(70, 153, 'uploads/products/1743946664_mini_iphone-15-plus-green-2-638629458412751972-750x500.jpg', '2025-04-06 13:37:44', '2025-04-06 13:37:44'),
(71, 153, 'uploads/products/1743946664_mini_iphone-15-plus-tem-99-4-750x500.jpg', '2025-04-06 13:37:44', '2025-04-06 13:37:44'),
(72, 154, 'uploads/products/1743947111_mini_iphone-15-plus-128gb-xanh-la-3-750x500.jpg', '2025-04-06 13:45:11', '2025-04-06 13:45:11'),
(73, 154, 'uploads/products/1743947111_mini_iphone-15-plus-green-2-638629458412751972-750x500.jpg', '2025-04-06 13:45:11', '2025-04-06 13:45:11'),
(74, 154, 'uploads/products/1743947111_mini_iphone-15-plus-tem-99-4-750x500.jpg', '2025-04-06 13:45:11', '2025-04-06 13:45:11'),
(75, 155, 'uploads/products/1743947585_mini_iphone-15-plus-128gb-xanh-la-3-750x500.jpg', '2025-04-06 13:53:05', '2025-04-06 13:53:05'),
(76, 155, 'uploads/products/1743947585_mini_iphone-15-plus-green-2-638629458412751972-750x500.jpg', '2025-04-06 13:53:05', '2025-04-06 13:53:05'),
(77, 155, 'uploads/products/1743947585_mini_iphone-15-plus-tem-99-4-750x500.jpg', '2025-04-06 13:53:05', '2025-04-06 13:53:05'),
(78, 156, 'uploads/products/1743948857_mini_iphone-15-plus-128gb-xanh-la-3-750x500.jpg', '2025-04-06 14:14:17', '2025-04-06 14:14:17'),
(79, 156, 'uploads/products/1743948857_mini_iphone-15-plus-green-2-638629458412751972-750x500.jpg', '2025-04-06 14:14:17', '2025-04-06 14:14:17'),
(80, 156, 'uploads/products/1743948857_mini_iphone-15-plus-tem-99-4-750x500.jpg', '2025-04-06 14:14:17', '2025-04-06 14:14:17');

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
(184, 75, 'Red', '#FF0000', '16GB', 17500000, 16500000, 0, 'active', '2025-04-02 20:18:06', '2025-04-06 18:43:41'),
(185, 75, 'Blue', '#98A7C1', '8GB', 16500000, 15600000, 0, 'active', '2025-04-02 20:18:06', '2025-04-20 10:08:53'),
(186, 75, 'Black', '#1D1D1F', '8GB', 17500000, 16500000, 0, 'active', '2025-04-02 20:18:06', '2025-04-05 00:07:02'),
(187, 76, 'Red', '#FF0000', '8GB', 18900000, 17800000, 0, 'active', '2025-04-02 20:22:22', '2025-04-20 04:22:20'),
(188, 76, 'Red', '#FF0000', '16GB', 19500000, 18500000, 15, 'active', '2025-04-02 20:22:22', '2025-04-06 22:04:38'),
(189, 78, 'Red', '#FF0000', '8GB', 18500000, 16900000, 12, 'active', '2025-04-02 21:34:23', '2025-04-07 04:36:48'),
(190, 78, 'Red', '#FF0000', '16GB', 19000000, 17000000, 7, 'active', '2025-04-02 21:34:23', '2025-04-13 11:15:00'),
(200, 149, 'Black', '#1D1D1F', '32GB', 16500000, 15600000, 10, 'active', '2025-04-06 13:12:19', '2025-04-06 13:12:19'),
(201, 149, 'Black', '#1D1D1F', '64GB', 17500000, 16600000, 15, 'active', '2025-04-06 13:12:19', '2025-04-06 13:12:19'),
(202, 149, 'Purple', '#DDD6F3', '32GB', 16900000, 16000000, 5, 'active', '2025-04-06 13:12:19', '2025-04-06 13:12:19'),
(203, 149, 'Purple', '#DDD6F3', '64GB', 17900000, 16500000, 5, 'active', '2025-04-06 13:12:19', '2025-04-06 13:12:19'),
(204, 150, 'Red', '#FF0000', '32GB', 15900000, 14900000, 10, 'active', '2025-04-06 13:19:51', '2025-04-06 13:19:51'),
(205, 150, 'Red', '#FF0000', '64GB', 16500000, 15500000, 10, 'active', '2025-04-06 13:19:51', '2025-04-06 13:19:51'),
(206, 150, 'Black', '#1D1D1F', '32GB', 16000000, 15100000, 5, 'active', '2025-04-06 13:19:51', '2025-04-06 13:19:51'),
(207, 150, 'Black', '#1D1D1F', '64GB', 16700000, 15900000, 6, 'active', '2025-04-06 13:19:51', '2025-04-06 13:19:51'),
(208, 151, 'Blue', '#98A7C1', '32GB', 18500000, 17400000, 15, 'active', '2025-04-06 13:28:07', '2025-04-06 13:28:07'),
(209, 151, 'Blue', '#98A7C1', '64GB', 19400000, 18100000, 5, 'active', '2025-04-06 13:28:07', '2025-04-06 13:28:07'),
(210, 151, 'Yellow', '#FDE58D', '32GB', 18500000, 17900000, 6, 'active', '2025-04-06 13:28:07', '2025-04-06 13:28:07'),
(211, 151, 'Yellow', '#FDE58D', '64GB', 19500000, 17300000, 8, 'active', '2025-04-06 13:28:07', '2025-04-06 13:28:07'),
(212, 152, 'Black Titanium', '#3F3A3C', '32GB', 16500000, 15600000, 8, 'active', '2025-04-06 13:31:13', '2025-04-10 11:40:31'),
(213, 152, 'Black Titanium', '#3F3A3C', '64GB', 17500000, 16900000, 5, 'active', '2025-04-06 13:31:13', '2025-04-06 13:31:13'),
(214, 152, 'Pink', '#F3BFCA', '32GB', 16000000, 15100000, 9, 'active', '2025-04-06 13:31:13', '2025-04-06 13:31:13'),
(215, 152, 'Pink', '#F3BFCA', '64GB', 17500000, 16800000, 7, 'active', '2025-04-06 13:31:13', '2025-04-06 13:31:13'),
(216, 153, 'Black', '#1D1D1F', '16GB', 16600000, 16000000, 10, 'active', '2025-04-06 13:37:44', '2025-04-06 13:37:44'),
(217, 153, 'Black', '#1D1D1F', '32GB', 17500000, 16900000, 10, 'active', '2025-04-06 13:37:44', '2025-04-06 13:37:44'),
(218, 153, 'Blue', '#98A7C1', '16GB', 16600000, 15900000, 5, 'active', '2025-04-06 13:37:44', '2025-04-06 13:37:44'),
(219, 154, 'Black Titanium', '#3F3A3C', '16GB', 16500000, 15900000, 5, 'active', '2025-04-06 13:45:11', '2025-04-06 13:45:11'),
(220, 154, 'Black Titanium', '#3F3A3C', '32GB', 17500000, 16900000, 6, 'active', '2025-04-06 13:45:11', '2025-04-06 13:45:11'),
(221, 154, 'Pink', '#F3BFCA', '16GB', 16700000, 15500000, 6, 'active', '2025-04-06 13:45:11', '2025-04-06 13:45:11'),
(222, 154, 'Pink', '#F3BFCA', '32GB', 17700000, 16500000, 15, 'active', '2025-04-06 13:45:11', '2025-04-06 13:45:11'),
(223, 155, 'Red', '#FF0000', '8GB', 14990000, 11900000, 3, 'active', '2025-04-06 13:53:05', '2025-04-06 21:42:40'),
(224, 155, 'Red', '#FF0000', '16GB', 15500000, 12500000, 9, 'active', '2025-04-06 13:53:05', '2025-04-06 13:53:05'),
(225, 155, 'Black', '#1D1D1F', '8GB', 14990000, 11900000, 6, 'active', '2025-04-06 13:53:05', '2025-04-06 13:53:05'),
(226, 156, 'Blue', '#98A7C1', '32GB', 15500000, 14000000, 0, 'active', '2025-04-06 14:14:17', '2025-04-07 11:25:56'),
(227, 156, 'Black', '#1D1D1F', '64GB', 16500000, 15500000, 7, 'active', '2025-04-06 14:14:17', '2025-04-09 01:53:02'),
(229, 156, 'Black', '#1D1D1F', '16GB', 15000000, 14100000, 5, 'active', '2025-04-07 10:51:30', '2025-04-07 10:51:30');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_variant_id` bigint UNSIGNED NOT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` tinyint UNSIGNED NOT NULL,
  `review` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `product_variant_id`, `color`, `storage`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(1, 2, 184, 'Red', '8GB', 4, 'Okeee', '2025-04-09 02:03:02', '2025-04-09 02:03:02'),
(2, 2, 184, 'Red', '8GB', 5, 'Okeee', '2025-04-09 02:03:02', '2025-04-09 02:03:02');

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
  `role` enum('admin','staff','customer') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'customer',
  `block_reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `username`, `password`, `phone`, `address`, `avatar`, `status`, `role`, `block_reason`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin User', 'admin@example.com', 'admin', '$2y$12$GMgyCxop3apil.srP9gGUew9Od78qZR7Iun5LbeVVSCzd8SXKI45a', '+1-856-372-7176', '492 Reba Gardens Suite 060\r\nKarianeburgh, AL 85523-9007', 'uploads/avatars/1744290076.jpg', 'active', 'admin', NULL, '2025-03-30 10:10:35', '2025-04-10 13:04:51', NULL),
(2, 'Customer', 'customer@example.com', 'customer', '$2y$10$NixDc.1/.difFIGvF2nY.uYt4mXFbOno7vAZe89cSGXQPGtwbTXdy', '678.301.3889', '43784 Luettgen GlensNorth Derrick, IL 54948', 'uploads/avatars/1744292881.jpg', 'active', 'customer', NULL, '2025-03-30 10:10:36', '2025-04-10 13:48:01', NULL),
(4, 'Cao Văn Nhật', 'nhatnobi1503@gmail.com', 'nhatnobi1503', '$2y$12$Astq1WXxSHuLnhesRN63I.4VOXsD1MjohETPkI1T19eGrBvEaT9SK', '085965163', 'Nguyễn Hoàng ....', 'avatars/OEQ3Ao9d4AO7rsPzcwY2xt6TQcDf8rx5p2yhYggD.jpg', 'inactive', 'customer', 'Quá ghê gớm', '2025-04-04 00:42:34', '2025-04-10 13:39:03', '2025-04-10 13:39:03'),
(5, 'Trần Văn Quyết', 'quyet123@gmail.com', 'quyet123', '$2y$12$il8sSlwsR1xCa3WeuXRX6OZhMWGEkvDXBTapfDwy8XpItNXsH7Fm2', NULL, NULL, NULL, 'inactive', 'customer', 'Okeeee', '2025-04-05 04:46:16', '2025-04-10 13:39:18', NULL),
(6, 'Cao Văn Nhật', 'nhatkdks51@gmail.com', 'nhatnobi123', '$2y$12$wkz6u9MMWDNcZtFHP7/yD.AKJSaexky7dPV6qPUCPIIaAN5Hw5QZC', '0651465163', '1111', 'avatars/nhPmQi3TByidmR0PUcGxuSR9OF1UWnEf2yh8hN5D.jpg', 'active', 'customer', NULL, '2025-04-10 13:51:07', '2025-04-10 13:51:07', NULL);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_user_id_foreign` (`user_id`);

--
-- Indexes for table `news_images`
--
ALTER TABLE `news_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_images_news_id_foreign` (`news_id`);

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
  ADD KEY `ratings_user_id_foreign` (`user_id`),
  ADD KEY `ratings_product_variant_id_foreign` (`product_variant_id`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_images`
--
ALTER TABLE `news_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `storages`
--
ALTER TABLE `storages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `news_images`
--
ALTER TABLE `news_images`
  ADD CONSTRAINT `news_images_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `ratings_product_variant_id_foreign` FOREIGN KEY (`product_variant_id`) REFERENCES `product_variants` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
