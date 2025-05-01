-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 30, 2025 at 02:14 PM
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
(18, 'Iphone 16 Pro Max', 'banners/RzmdTPyRiovT2waMDC1XxvSgbOizO5RfhVQWym4v.png', 'Iphone 16 Pro Max', '76', 'active', '2025-04-12 07:33:34', '2025-04-12 07:45:51');

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
(52, 2, 227, 3, '2025-04-30 10:25:52', '2025-04-30 13:30:35'),
(53, 2, 224, 1, '2025-04-30 11:03:41', '2025-04-30 12:20:03');

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
(1, 'iPhone Mới (100% New)', 'uploads/categories/1743649909_iphone-16-pro-max-sa-mac-thumb-1-600x600.jpg', 'Là sản phẩm điện thoại thông minh của hãng Apple', 'active', '2025-03-30 10:10:36', '2025-04-24 02:00:29'),
(2, 'iPhone Cũ (99% Like New)', 'uploads/categories/1744452222_iphone-15-hong-thumb-1-600x600.jpg', 'Điện thoại thông minh đến từ hãng samsung', 'active', '2025-04-04 05:05:05', '2025-04-24 01:55:44'),
(3, 'iPhone Lock (Bản khóa mạng)', 'uploads/categories/1744452242_iPhone-14-plus-thumb-den-600x600.jpg', 'Đẹp', 'active', '2025-04-04 05:06:01', '2025-04-23 15:21:01'),
(9, 'Iphone Cũ (90-95%)', 'uploads/categories/1744452259_iphone-12-tim-1-600x600.jpg', 'Đẹp', 'active', '2025-04-07 10:40:49', '2025-04-24 01:55:26'),
(10, 'iPhone Giá Rẻ (80-90%)', 'uploads/categories/1744173917_iphone-16-plus-hong-thumb-1-600x600.jpg', 'Hãng Apple', 'active', '2025-04-09 04:45:17', '2025-04-24 01:56:11'),
(11, 'Phụ Kiện Điện Thoại', 'uploads/categories/1745460116_cap-type-c-type-c-2m-xmobile-dr-t11-thumb-01-600x600.jpg', 'Quá đẹp', 'active', '2025-04-09 04:45:38', '2025-04-24 02:01:56');

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
(22, 'G42F45DS5', 'percentage', 1000000, '20.00', 20000000, '2025-04-06', '2025-05-10', '2025-04-04 01:56:32', '2025-04-23 15:57:57'),
(23, 'G42F45DS7', 'fixed', NULL, '800000.00', 20000000, '2025-04-06', '2025-05-10', '2025-04-06 22:16:36', '2025-04-23 15:58:09'),
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

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `thumbnail_path`, `is_active`, `user_id`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Hướng dẫn cách tạo hình ảnh minh họa cho bài viết bằng Napkin AI cực đơn giản', '<div class=\"userdetail\">&nbsp;</div>\r\n<div class=\"imgwrap\"><img src=\"https://cdnv2.tgdd.vn/mwg-static/common/News/1573861/minh-hoa-12.jpg\" alt=\"Napkin AI\"></div>\r\n<h2>H&igrave;nh ảnh minh họa đ&oacute;ng vai tr&ograve; quan trọng trong việc tăng sức hấp dẫn v&agrave; truyền tải th&ocirc;ng điệp cho b&agrave;i viết. Tuy nhi&ecirc;n, kh&ocirc;ng phải ai cũng c&oacute; khả năng thiết kế hoặc t&igrave;m kiếm được h&igrave;nh ảnh ph&ugrave; hợp. Napkin AI sẽ gi&uacute;p bạn dễ d&agrave;ng tạo ra những h&igrave;nh ảnh minh họa độc đ&aacute;o tr&ecirc;n&nbsp;<a title=\"m&aacute;y t&iacute;nh\" href=\"https://www.thegioididong.com/laptop\" target=\"_blank\" rel=\"noopener\">m&aacute;y t&iacute;nh</a>&nbsp;chỉ trong v&agrave;i bước đơn giản. Trong b&agrave;i viết n&agrave;y, m&igrave;nh sẽ hướng dẫn bạn&nbsp;<a title=\"c&aacute;ch tạo h&igrave;nh ảnh minh họa cho b&agrave;i viết bằng Napkin AI\" href=\"https://www.thegioididong.com/tin-tuc/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-1573861\" target=\"_blank\" rel=\"noopener\">c&aacute;ch tạo h&igrave;nh ảnh minh họa cho b&agrave;i viết bằng Napkin AI</a>&nbsp;gi&uacute;p b&agrave;i viết của bạn trở n&ecirc;n sinh động v&agrave; cuốn h&uacute;t hơn nh&eacute;!</h2>\r\n<h3><strong>C&aacute;ch tạo h&igrave;nh ảnh minh họa cho b&agrave;i viết bằng Napkin AI</strong></h3>\r\n<p><strong>Bước 1:</strong>&nbsp;Truy cập v&agrave;o&nbsp;<strong>trang chủ của Napkin AI</strong>&nbsp;b&ecirc;n dưới &gt; Nhấn chọn v&agrave;o mục&nbsp;<strong>D&ugrave;ng thử bản miễn ph&iacute;</strong>.</p>\r\n<ul>\r\n<li><a title=\"Trang chủ của Napkin AI\" href=\"https://app.napkin.ai/\" target=\"_blank\" rel=\"noopener\">Trang chủ của Napkin AI</a></li>\r\n</ul>\r\n<div class=\"imgwrap\"><img src=\"https://cdnv2.tgdd.vn/mwg-static/common/News/0/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-1.jpg\" alt=\"C&aacute;ch tạo h&igrave;nh ảnh minh họa cho b&agrave;i viết bằng Napkin AI\" data-original=\"https://cdnv2.tgdd.vn/mwg-static/common/News/0/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-1.jpg\"></div>\r\n<p><strong>Bước 2:</strong>&nbsp;Tiến h&agrave;nh<strong>&nbsp;đăng nhập t&agrave;i khoản</strong>&nbsp;của bạn v&agrave;o Napkin AI &gt;&nbsp;<strong>X&aacute;c nhận th&ocirc;ng tin đăng nhập&nbsp;</strong>để bạn c&oacute; thể ho&agrave;n tất nha.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdnv2.tgdd.vn/mwg-static/common/News/0/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-2.jpg\" alt=\"C&aacute;ch tạo h&igrave;nh ảnh minh họa cho b&agrave;i viết bằng Napkin AI\" data-original=\"https://cdnv2.tgdd.vn/mwg-static/common/News/0/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-2.jpg\"></div>\r\n<p><strong>Bước 3:</strong>&nbsp;Nhấn chọn tiếp v&agrave;o mục&nbsp;<strong>Create my first Nakin</strong>&nbsp;để bắt đầu tạo ảnh minh họa bằng AI.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdnv2.tgdd.vn/mwg-static/common/News/0/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-4.jpg\" alt=\"C&aacute;ch tạo h&igrave;nh ảnh minh họa cho b&agrave;i viết bằng Napkin AI\" data-original=\"https://cdnv2.tgdd.vn/mwg-static/common/News/0/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-4.jpg\"></div>\r\n<p><strong>Bước 4:</strong>&nbsp;Nhấn chọn v&agrave;o mục&nbsp;<strong>By pasting my text content</strong>&nbsp;để d&aacute;n đoạn văn bản hoặc b&agrave;i viết m&agrave; bạn muốn tạo ảnh minh họa v&agrave;o.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdnv2.tgdd.vn/mwg-static/common/News/0/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-5.jpg\" alt=\"C&aacute;ch tạo h&igrave;nh ảnh minh họa cho b&agrave;i viết bằng Napkin AI\" data-original=\"https://cdnv2.tgdd.vn/mwg-static/common/News/0/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-5.jpg\"></div>\r\n<p><strong>Bước 5:</strong>&nbsp;Tiến h&agrave;nh&nbsp;<strong>d&aacute;n đoạn văn của bạn</strong>&nbsp;v&agrave;o Napkin AI để tạo ảnh minh họa nha.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdnv2.tgdd.vn/mwg-static/common/News/0/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-6.jpg\" alt=\"C&aacute;ch tạo h&igrave;nh ảnh minh họa cho b&agrave;i viết bằng Napkin AI\" data-original=\"https://cdnv2.tgdd.vn/mwg-static/common/News/0/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-6.jpg\"></div>\r\n<p><strong>Bước 6:</strong>&nbsp;H&atilde;y&nbsp;<strong>di chuyển chuột đến đầu của đoạn văn bản</strong>&nbsp;của bạn &gt; L&uacute;c n&agrave;y bạn sẽ thấy một&nbsp;<strong>biểu tượng như h&igrave;nh</strong>&nbsp;hiện ra, h&atilde;y nhấn v&agrave;o n&oacute; để Napkin AI l&agrave;m việc nh&eacute;.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdnv2.tgdd.vn/mwg-static/common/News/0/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-7.jpg\" alt=\"C&aacute;ch tạo h&igrave;nh ảnh minh họa cho b&agrave;i viết bằng Napkin AI\" data-original=\"https://cdnv2.tgdd.vn/mwg-static/common/News/0/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-7.jpg\"></div>\r\n<p><strong>Bước 7:</strong>&nbsp;Napkin AI sẽ ph&acirc;n t&iacute;ch v&agrave; tạo cho bạn c&aacute;c h&igrave;nh ảnh biểu đồ minh họa ph&ugrave; hợp, bạn c&oacute; thể lựa chọn thay đổi trong thanh c&ocirc;ng cụ b&ecirc;n tr&aacute;i nha.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdnv2.tgdd.vn/mwg-static/common/News/0/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-8.jpg\" alt=\"C&aacute;ch tạo h&igrave;nh ảnh minh họa cho b&agrave;i viết bằng Napkin AI\" data-original=\"https://cdnv2.tgdd.vn/mwg-static/common/News/0/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-8.jpg\"></div>\r\n<p><strong>Bước 8:</strong>&nbsp;Sau khi đ&atilde; chỉnh sửa xong theo &yacute; th&iacute;ch, bạn h&atilde;y nhấn chọn v&agrave;o&nbsp;<strong>biểu tượng dấu mũi t&ecirc;n</strong>&nbsp;để tải h&igrave;nh ảnh minh họa về m&aacute;y t&iacute;nh.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdnv2.tgdd.vn/mwg-static/common/News/0/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-9.jpg\" alt=\"C&aacute;ch tạo h&igrave;nh ảnh minh họa cho b&agrave;i viết bằng Napkin AI\" data-original=\"https://cdnv2.tgdd.vn/mwg-static/common/News/0/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-9.jpg\"></div>\r\n<p><strong>Bước 9:</strong>&nbsp;H&atilde;y&nbsp;<strong>chọn định dạng của ảnh minh họa</strong>&nbsp;v&agrave; tải về nh&eacute;.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdnv2.tgdd.vn/mwg-static/common/News/0/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-10.jpg\" alt=\"C&aacute;ch tạo h&igrave;nh ảnh minh họa cho b&agrave;i viết bằng Napkin AI\" data-original=\"https://cdnv2.tgdd.vn/mwg-static/common/News/0/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-10.jpg\"></div>\r\n<p>B&ecirc;n dưới l&agrave; h&igrave;nh ảnh minh họa m&igrave;nh nhờ Napkin AI thực hiện.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdnv2.tgdd.vn/mwg-static/common/News/0/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-11.jpg\" alt=\"C&aacute;ch tạo h&igrave;nh ảnh minh họa cho b&agrave;i viết bằng Napkin AI\" data-original=\"https://cdnv2.tgdd.vn/mwg-static/common/News/0/cach-tao-hinh-anh-minh-hoa-cho-bai-viet-bang-napkin-ai-11.jpg\"></div>\r\n<p>Hy vọng với hướng dẫn tr&ecirc;n, bạn đ&atilde; biết c&aacute;ch tạo h&igrave;nh ảnh minh họa cho b&agrave;i viết bằng Napkin AI một c&aacute;ch dễ d&agrave;ng v&agrave; s&aacute;ng tạo. H&atilde;y thử ngay để b&agrave;i viết của bạn th&ecirc;m cuốn h&uacute;t, chuy&ecirc;n nghiệp v&agrave; truyền tải th&ocirc;ng điệp hiệu quả hơn nh&eacute;!</p>\r\n<p>Bạn đang t&igrave;m kiếm một chiếc laptop mạnh mẽ, th&ocirc;ng minh với khả năng xử l&yacute; đồ họa v&agrave; AI vượt trội? Đừng bỏ lỡ những mẫu laptop AI ti&ecirc;n tiến tại Thế Giới Di Động! Với c&ocirc;ng nghệ hiện đại v&agrave; hiệu suất ấn tượng, ch&uacute;ng sẽ l&agrave; trợ thủ đắc lực cho c&ocirc;ng việc v&agrave; giải tr&iacute; của bạn. Nhấp v&agrave;o n&uacute;t cam b&ecirc;n dưới để kh&aacute;m ph&aacute; ngay!</p>', 'news_thumbnails/CkLhgITA2KTRbCWxMbDbDtcstHqV6eQi01FHwPa5.jpg', 1, 1, '2025-04-24 02:14:12', '2025-04-24 02:14:12', '2025-04-24 02:24:48'),
(2, 'Cách tải ảnh lên Instagram chất lượng cao cho bạn những bài viết ấn tượng hơn', '<h1 class=\"titledetail\">&nbsp;</h1>\r\n<div class=\"imgwrap\"><img src=\"https://cdn.tgdd.vn/News/1558961/ins-1280x720-1.jpg\" alt=\"C&aacute;ch tải ảnh l&ecirc;n Instagram chất lượng cao\"></div>\r\n<h2>Bạn đ&atilde; từng trải qua t&igrave;nh trạng khi tải ảnh l&ecirc;n Instagram v&agrave; ch&uacute;ng trở n&ecirc;n mờ, vỡ ảnh,... n&oacute; kh&ocirc;ng như bạn mong muốn? Đừng qu&aacute; lo lắng, đ&acirc;y cũng l&agrave; một t&igrave;nh trạng m&igrave;nh thường xuy&ecirc;n gặp phải v&agrave; thật may m&igrave;nh đ&atilde; t&igrave;m ra c&aacute;ch giải quyết n&oacute;. H&atilde;y c&ugrave;ng m&igrave;nh t&igrave;m ngay&nbsp;<a title=\"c&aacute;ch tải ảnh l&ecirc;n Instagram chất lượng cao\" href=\"https://www.thegioididong.com/tin-tuc/cach-tai-anh-len-instagram-chat-luong-cao-1558961\">c&aacute;ch tải ảnh l&ecirc;n Instagram chất lượng cao</a>&nbsp;bằng&nbsp;<a title=\"điện thoại\" href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" rel=\"noopener\" type=\"điện thoại\">điện thoại</a>&nbsp;qua b&agrave;i viết n&agrave;y nh&eacute;.</h2>\r\n<h3><strong>C&aacute;ch tải ảnh l&ecirc;n Instagram chất lượng cao</strong></h3>\r\n<p><strong>Bước 1</strong>: Để c&oacute; thể chọn được chất lượng ảnh tải l&ecirc;n th&igrave; đầu ti&ecirc;n bạn h&atilde;y mở ứng dụng Instagram tr&ecirc;n điện thoại của m&igrave;nh l&ecirc;n v&agrave; ngay sau đ&oacute; h&atilde;y&nbsp;<strong>chọn v&agrave;o biểu tượng trang c&aacute; nh&acirc;n</strong>&nbsp;ở ph&iacute;a cuối thanh điều hướng của ứng dụng. Tại trang c&aacute; nh&acirc;n của m&igrave;nh, h&atilde;y&nbsp;<strong>ấn v&agrave;o biểu tượng menu</strong>&nbsp;ở g&oacute;c tr&ecirc;n b&ecirc;n phải m&agrave;n h&igrave;nh.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdn.tgdd.vn/News/1558961/taianhinstagramclc-1280x1280.jpg\" alt=\"C&aacute;ch gh&eacute;p ảnh trong Google Photos\" data-original=\"https://cdn.tgdd.vn/News/1558961/taianhinstagramclc-1280x1280.jpg\"></div>\r\n<p><strong>Bước 2</strong>: Tiếp theo, h&atilde;y lướt xuống ph&iacute;a b&ecirc;n dưới m&agrave;n h&igrave;nh v&agrave; t&igrave;m rồi&nbsp;<strong>ấn tiếp cho m&igrave;nh v&agrave;o mục Mức sử dụng dữ liệu v&agrave; chất lượng file phương tiện</strong>.&nbsp;Tại đ&acirc;y bạn chỉ cần để &yacute; cho m&igrave;nh&nbsp;<strong>c&ocirc;ng tắc ở t&iacute;nh năng Tải l&ecirc;n ở chất lượng cao nhất</strong>. H&atilde;y&nbsp;<strong>gạt c&ocirc;ng tắc đ&oacute; qua b&ecirc;n phải</strong>&nbsp;để k&iacute;ch hoạt t&iacute;nh năng n&agrave;y v&agrave; để cho những tấm ảnh sau n&agrave;y của bạn lu&ocirc;n n&eacute;t nhất d&ugrave; chất lượng mạng l&uacute;c đ&oacute; c&oacute; k&eacute;m đi chăng nữa.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdn.tgdd.vn/News/1558961/taianhinstagramclc1-1280x1280.jpg\" alt=\"C&aacute;ch gh&eacute;p ảnh trong Google Photos\" data-original=\"https://cdn.tgdd.vn/News/1558961/taianhinstagramclc1-1280x1280.jpg\"></div>\r\n<p>Qua b&agrave;i viết c&aacute;ch tải ảnh l&ecirc;n Instagram chất lượng cao b&ecirc;n tr&ecirc;n m&igrave;nh ch&uacute;c c&aacute;c bạn c&oacute; được những b&agrave;i viết với những bức ảnh c&oacute; chất lượng thật cao. Nếu bạn thấy b&agrave;i viết n&agrave;y hữu &iacute;ch, đừng qu&ecirc;n chia sẻ n&oacute; với mọi người. Cảm ơn c&aacute;c bạn đ&atilde; theo d&otilde;i b&agrave;i viết.</p>\r\n<p>H&atilde;y ấn ngay v&agrave;o n&uacute;t m&agrave;u cam b&ecirc;n dưới nếu bạn l&agrave; một người th&iacute;ch đọc, cập nhật những th&ocirc;ng tin mới nhất trong l&agrave;ng c&ocirc;ng nghệ trong nước v&agrave; cả ngo&agrave;i nước. Thực hiện ngay nh&eacute;.</p>', 'news_thumbnails/gtXWEKWMzi5nUX4HUZ8fHBP1JmNjG6EwCPVzhKdP.jpg', 1, 1, '2025-04-24 02:18:51', '2025-04-24 02:18:51', '2025-04-24 02:24:14'),
(3, 'Mua iPhone 15 là phải mua kèm dây sạc Type C mới, nên đây sẽ là bài viết bạn cần!', '<h1 class=\"titledetail\">Mua iPhone 15 l&agrave; phải mua k&egrave;m d&acirc;y sạc Type C mới, n&ecirc;n đ&acirc;y sẽ l&agrave; b&agrave;i viết bạn cần!</h1>\r\n<div class=\"userdetail\">&nbsp;</div>\r\n<div class=\"imgwrap\"><img src=\"https://cdn.tgdd.vn/Files/2023/09/23/1548738/capsac-230923-151628-800-resize.jpg\" alt=\"TOP 5 c&aacute;p sạc cho iPhone 15, l&agrave; h&agrave;ng ch&iacute;nh h&atilde;ng nhưng qu&aacute; y&ecirc;u thương!\" data-original=\"https://cdn.tgdd.vn/Files/2023/09/23/1548738/capsac-230923-151628-800-resize.jpg\"></div>\r\n<div class=\"captionnews\">TOP 5 c&aacute;p sạc cho iPhone 15, l&agrave; h&agrave;ng ch&iacute;nh h&atilde;ng nhưng qu&aacute; y&ecirc;u thương!</div>\r\n<h2>Kh&oacute; thể tin đ&atilde; c&oacute; hơn 30.000 kh&aacute;ch h&agrave;ng đặt trước&nbsp;<a title=\"iPhone 15 series\" href=\"https://www.thegioididong.com/dtdd-apple-iphone-15-series\" target=\"_blank\" rel=\"noopener\" type=\"iPhone 15 series\">iPhone 15 series</a>, c&oacute; lẽ đ&acirc;y l&agrave; d&ograve;ng&nbsp;<a title=\"điện thoại\" href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" rel=\"noopener\" type=\"điện thoại\">điện thoại</a>&nbsp;sẽ g&acirc;y được nhiều tiếng vang mới d&agrave;nh cho h&atilde;ng chăng? Nhắc đến iPhone 15 series th&igrave; năm nay Apple đ&atilde; quyết định chuyển từ cổng sạc Lightning sang cổng sạc Type C rồi đ&oacute;, bạn đ&atilde; sắm&nbsp;<a title=\"c&aacute;p sạc\" href=\"https://www.thegioididong.com/cap-dien-thoai\" target=\"_blank\" rel=\"noopener\" type=\"c&aacute;p sạc\">c&aacute;p sạc</a>&nbsp;mới cho mẫu&nbsp;<a title=\"iPhone\" href=\"https://www.thegioididong.com/dtdd-apple-iphone\" target=\"_blank\" rel=\"noopener\" type=\"iPhone\">iPhone</a>&nbsp;&lsquo;sắp được tr&ecirc;n tay&rsquo; chưa. Nếu vẫn chưa, bạn n&ecirc;n tham khảo b&agrave;i viết giới thiệu về những mẫu&nbsp;<a title=\"c&aacute;p sạc cho iPhone 15\" href=\"https://www.thegioididong.com/tin-tuc/cap-sac-cho-iphone-15-1548738\" target=\"_blank\" rel=\"noopener\" type=\"c&aacute;p sạc cho iPhone 15\">c&aacute;p sạc cho iPhone 15</a>&nbsp;mới nhất của bọn m&igrave;nh, đ&uacute;ng chuẩn v&agrave; c&oacute; đủ mức gi&aacute; cho bạn lựa chọn.</h2>\r\n<p>Thế c&ograve;n chờ đợi g&igrave; nữa, kh&ocirc;ng c&ugrave;ng&nbsp;<a title=\"24h C&ocirc;ng nghệ\" href=\"https://www.thegioididong.com/tin-tuc\" target=\"_blank\" rel=\"noopener\" type=\"24h C&ocirc;ng nghệ\">24h C&ocirc;ng nghệ</a>&nbsp;tham khảo danh s&aacute;ch sản phẩm dưới đ&acirc;y ngay th&ocirc;i n&agrave;o!</p>\r\n<p><em>*Danh s&aacute;ch n&agrave;y cập nhật ng&agrave;y 22/09/2023, bạn nha.</em></p>\r\n<h3><strong>1. Apple MUF72: C&aacute;p sạc cho iPhone 15, mới v&agrave; ch&iacute;nh h&atilde;ng c&ograve;n lo g&igrave;!</strong></h3>\r\n<p>Nếu bạn đang băn khoăn, chưa biết n&ecirc;n chọn mẫu d&acirc;y sạc n&agrave;o sẽ ph&ugrave; hợp nhất cho mẫu iPhone 15 m&agrave; bạn vừa chọn mua th&igrave; theo m&igrave;nh, bạn n&ecirc;n tham khảo ngay mẫu c&aacute;p sạc&nbsp;<a title=\"Apple MUF72\" href=\"https://www.thegioididong.com/cap-dien-thoai/cap-type-c-type-c-1m-apple-muf72-trang\" target=\"_blank\" rel=\"noopener\" type=\"Apple MUF72\">Apple MUF72</a>&nbsp;hỗ trợ cổng kết nối Type C.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdn.tgdd.vn/Files/2023/09/23/1548738/apple-230923-151535-800-resize.jpg\" alt=\"Apple MUF72: C&aacute;p sạc cho iPhone 15, mới v&agrave; ch&iacute;nh h&atilde;ng c&ograve;n lo g&igrave;!\" data-original=\"https://cdn.tgdd.vn/Files/2023/09/23/1548738/apple-230923-151535-800-resize.jpg\"></div>\r\n<p>L&agrave; một sản phẩm ch&iacute;nh h&atilde;ng được Apple ph&acirc;n phối, n&ecirc;n mẫu c&aacute;p sạc Apple MUF72 ho&agrave;n to&agrave;n c&oacute; thể hỗ trợ sạc nhanh cho c&aacute;c thiết bị sử dụng củ sạc c&oacute; c&ocirc;ng suất cao, như tr&ecirc;n những sản phẩm thuộc thế hệ iPhone 15.</p>\r\n<p>B&ecirc;n cạnh đ&oacute;, Apple MUF72 c&ograve;n c&oacute; thể sử dụng c&ugrave;ng&nbsp;<a title=\"Adapter sạc\" href=\"https://www.thegioididong.com/adapter-sac\" target=\"_blank\" rel=\"noopener\" type=\"Adapter sạc\">Adapter sạc</a>&nbsp;v&agrave; một số sản phẩm d&ograve;ng&nbsp;<a title=\"MacBook\" href=\"https://www.thegioididong.com/laptop-apple-macbook\" target=\"_blank\" rel=\"noopener\" type=\"MacBook\">MacBook</a>,&nbsp;<a title=\"iPad\" href=\"https://www.thegioididong.com/may-tinh-bang-apple-ipad\" target=\"_blank\" rel=\"noopener\" type=\"iPad\">iPad</a>,... Đ&uacute;ng chuẩn, mua cho iPhone 15 m&agrave; c&oacute; thể sử dụng cho c&aacute;c thiết bị sử dụng cổng Type C của Apple.</p>\r\n<div class=\"infoprod item2020 new2021\">\r\n<div class=\"image image-v2\"><a href=\"https://www.thegioididong.com/cap-dien-thoai/cap-type-c-type-c-1m-apple-muf72-trang\"><img src=\"https://cdn.tgdd.vn/Products/Images/58/203760/cap-type-c-type-c-1m-apple-muf72-trang-thumb-600x600.jpeg\" data-proid=\"203760\"></a></div>\r\n<div class=\"infor\"><a href=\"https://www.thegioididong.com/cap-dien-thoai/cap-type-c-type-c-1m-apple-muf72-trang\" data-s=\"Nomal\" data-site=\"1\" data-pro=\"3\" data-cache=\"False\"><span class=\"productname\">C&aacute;p Type C - Type C 1m Apple MUF72</span></a>\r\n<h6 class=\"textkm stopsale\" data-gtm-vis-first-on-screen1070012_397=\"82158\" data-gtm-vis-total-visible-time1070012_397=\"100\" data-gtm-vis-has-fired1070012_397=\"1\">Ngừng kinh doanh</h6>\r\n<a class=\"viewdetail\" href=\"https://www.thegioididong.com/cap-dien-thoai/cap-type-c-type-c-1m-apple-muf72-trang\">Xem chi tiết</a></div>\r\n</div>\r\n<h3><strong>2. Mazer C2C125: Mẫu c&aacute;p sạc iPhone 15 đ&aacute;ng mua tại TGDĐ</strong></h3>\r\n<p>B&ecirc;n cạnh sạc &lsquo;zin&rsquo; đến từ vị tr&iacute; của &lsquo;nh&agrave; ph&aacute;t h&agrave;nh&rsquo; iPhone 15 th&igrave; bạn cũng c&oacute; thể lựa chọn mẫu c&aacute;p sạc&nbsp;<a title=\"Mazer C2C125\" href=\"https://www.thegioididong.com/cap-dien-thoai/cap-type-c-type-c-1-25m-mazer-c2c125\" target=\"_blank\" rel=\"noopener\" type=\"Mazer C2C125\">Mazer C2C125</a>. Sản phẩm vẫn được trang bị cổng sạc Type C hỗ trợ cho iPhone 15, nhưng c&oacute; mức gi&aacute; tốt hơn b&ecirc;n cạnh sự bền bỉ m&agrave; bạn n&ecirc;n sở hữu.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdn.tgdd.vn/Files/2023/09/23/1548738/cap-type-c-type-c-1-25m-mazer-c2c125-5-2-230923-151520-800-resize.jpg\" alt=\"Mazer C2C125: Mẫu c&aacute;p sạc iPhone 15 đ&aacute;ng mua tại TGDĐ\" data-original=\"https://cdn.tgdd.vn/Files/2023/09/23/1548738/cap-type-c-type-c-1-25m-mazer-c2c125-5-2-230923-151520-800-resize.jpg\"></div>\r\n<p>Sự bền bỉ m&agrave; m&igrave;nh nhắc đến ở đ&acirc;y l&agrave; do Mazer C2C125 được bao phủ chất liệu nylon tốt ở b&ecirc;n ngo&agrave;i c&aacute;p sạc, sẵn s&agrave;ng bảo vệ c&aacute;p sạc của bạn trong một số t&igrave;nh huống kh&ocirc;ng tốt c&oacute; thể ảnh hưởng đến chất lượng kết nối giữa hai đầu d&acirc;y cũng như g&acirc;y nguy hiểm cho bạn.</p>\r\n<p>Mazer C2C125 c&oacute; chiều d&agrave;i khoảng 1.25 m - kh&aacute; ổn cho một sản phẩm c&aacute;p sạc điện thoại, đồng thời c&ocirc;ng suất tối đa của c&aacute;p sạc cũng đạt con số 100 W, n&ecirc;n ho&agrave;n to&agrave;n c&oacute; thể tăng c&ocirc;ng suất sạc cho c&aacute;c thiết bị c&oacute; hỗ trợ sạc nhanh ngo&agrave;i iPhone 15 series.</p>\r\n<div class=\"infoprod item2020 new2021\">\r\n<div class=\"image image-v2\"><a href=\"https://www.thegioididong.com/cap-dien-thoai/cap-type-c-type-c-1-25m-mazer-c2c125\"><img src=\"https://cdn.tgdd.vn/Products/Images/58/308532/cap-type-c-type-c-1-25m-mazer-c2c125-thumb-1-600x600.jpg\" data-proid=\"308532\"></a></div>\r\n<div class=\"infor\">\r\n<aside class=\"result-label temp6\"><img src=\"https://cdnv2.tgdd.vn/mwg-static/common/Campaign/74/b8/74b8a3cc412eb4d783e740e901d1925e.png\" alt=\"label template\" width=\"20\" height=\"20\"><span class=\"text\">MUA TRẢ CHẬM</span></aside>\r\n<a href=\"https://www.thegioididong.com/cap-dien-thoai/cap-type-c-type-c-1-25m-mazer-c2c125\" data-s=\"Nomal\" data-site=\"1\" data-pro=\"3\" data-cache=\"False\"><span class=\"productname\">C&aacute;p Type C - Type C 1.25m Mazer C2C125</span></a>\r\n<h6 class=\"textkm delivery\" data-gtm-vis-first-on-screen1070012_397=\"82780\" data-gtm-vis-total-visible-time1070012_397=\"100\" data-gtm-vis-has-fired1070012_397=\"1\">H&agrave;ng phải chuyển về</h6>\r\n<div class=\"price\"><strong>235.000₫</strong><br><span class=\"priceline\">470.000₫&nbsp;<em class=\"percent\">-50%</em></span></div>\r\n<a class=\"viewdetail\" href=\"https://www.thegioididong.com/cap-dien-thoai/cap-type-c-type-c-1-25m-mazer-c2c125\">Xem chi tiết</a></div>\r\n</div>\r\n<h3><strong>3. Xmobile DS101: C&aacute;p sạc Type C gi&aacute; rẻ nhưng chất lượng cao!</strong></h3>\r\n<div class=\"youtube\"><img src=\"https://www.thegioididong.com/tin-tuc/cap-sac-cho-iphone-15-1548738\" alt=\"\"></div>\r\n<div class=\"captionnews\">Video đ&aacute;nh gi&aacute; nhanh Xmobile DS101 được thực hiện bởi k&ecirc;nh Youtube Thế Giới Phụ Kiện.</div>\r\n<p>Bạn cần mua c&aacute;p sạc&nbsp;<a title=\"Type C\" href=\"https://www.thegioididong.com/cap-dien-thoai/cap-type-c-type-c-1m-xmobile-ds101\" target=\"_blank\" rel=\"noopener\" type=\"Type C\">Type C</a>&nbsp;gi&aacute; rẻ cho ti&ecirc;u chuẩn cổng kết nối mới tr&ecirc;n iPhone 15, nhưng phải đ&aacute;p ứng đủ chất lượng cao?</p>\r\n<p>Theo m&igrave;nh, sự lựa chọn hợp nhất m&agrave; m&igrave;nh c&oacute; thể kể t&ecirc;n ngay l&uacute;c n&agrave;y chỉ c&oacute; thể l&agrave; mẫu Xmobile DS101. Bởi, sản phẩm vừa sở hữu ti&ecirc;u ch&iacute; gi&aacute; rẻ ph&ugrave; hợp với t&agrave;i ch&iacute;nh &lsquo;đ&ocirc;i ch&uacute;t hạn hẹp&rsquo; sau khi bạn vừa sắm mẫu iPhone 15 mới nhất, vừa sở hữu ti&ecirc;u ch&iacute; chất lượng đỉnh cao do được bảo vệ một phần nhờ lớp nylon b&ecirc;n ngo&agrave;i.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdn.tgdd.vn/Files/2023/09/23/1548738/vs--youtube-ds101-0%E2%80%9933%E2%80%9D-230923-151422-800-resize.jpg\" alt=\"Xmobile DS101: C&aacute;p sạc Type C gi&aacute; rẻ nhưng chất lượng cao!\" data-original=\"https://cdn.tgdd.vn/Files/2023/09/23/1548738/vs--youtube-ds101-0&rsquo;33&rdquo;-230923-151422-800-resize.jpg\"></div>\r\n<p>Điểm đặc biệt của Xmobile DS101 l&agrave; c&oacute; ngoại h&igrave;nh tối giản với hai đầu Type C trong suốt, đồng thời c&ograve;n hỗ trợ nhận diện c&ocirc;ng suất sạc để t&ugrave;y chỉnh tốc độ sạc ph&ugrave; hợp với điện thoại, để đảm bảo an to&agrave;n tuyệt đối cho thiết bị nhận sạc&hellip;</p>\r\n<div class=\"infoprod item2020 new2021\">\r\n<div class=\"image image-v2\"><a href=\"https://www.thegioididong.com/cap-dien-thoai/cap-type-c-type-c-1m-xmobile-ds101?utm_flashsale=1\"><img src=\"https://cdn.tgdd.vn/Products/Images/58/307838/cap-type-c-type-c-1m-xmobile-ds101-thumb-600x600.jpg\" data-proid=\"307838\"></a></div>\r\n<div class=\"infor\">\r\n<aside class=\"result-label temp6\"><img src=\"https://cdnv2.tgdd.vn/mwg-static/common/Campaign/74/b8/74b8a3cc412eb4d783e740e901d1925e.png\" alt=\"label template\" width=\"20\" height=\"20\"><span class=\"text\">MUA TRẢ CHẬM</span></aside>\r\n<a href=\"https://www.thegioididong.com/cap-dien-thoai/cap-type-c-type-c-1m-xmobile-ds101?utm_flashsale=1\" data-s=\"TwoPriceDetailCMS\" data-site=\"1\" data-pro=\"3\" data-cache=\"False\"><span class=\"productname\">C&aacute;p Type C - Type C 1m Xmobile DS101</span></a>\r\n<h6 class=\"textkm \" data-gtm-vis-first-on-screen1070012_397=\"83369\" data-gtm-vis-total-visible-time1070012_397=\"100\" data-gtm-vis-has-fired1070012_397=\"1\">Online giá rẻ qu&aacute;</h6>\r\n<div class=\"price\"><strong>130.000₫</strong><br><span class=\"priceline\">220.000₫&nbsp;<em class=\"percent\">-40%</em></span></div>\r\n<a class=\"viewdetail\" href=\"https://www.thegioididong.com/cap-dien-thoai/cap-type-c-type-c-1m-xmobile-ds101?utm_flashsale=1\">Xem chi tiết</a></div>\r\n</div>\r\n<h3><strong>4. Hydrus DS464: C&aacute;p sạc &lsquo;m&agrave;u sắc&rsquo; cho iPhone 15 mới</strong></h3>\r\n<p>Nếu bạn đ&atilde; t&igrave;m kiếm những mẫu&nbsp;<a title=\"phụ kiện\" href=\"https://www.thegioididong.com/phu-kien\" target=\"_blank\" rel=\"noopener\" type=\"phụ kiện\">phụ kiện</a>&nbsp;thật đẹp, thật lộng lẫy cho mẫu iPhone 15 sắp đến tay của bạn th&igrave; xin ch&uacute;c mừng bạn đ&atilde; v&agrave;o &ocirc; th&iacute;ch l&agrave;m đẹp cho điện thoại.</p>\r\n<p>N&ecirc;n chắc hẳn bạn sẽ kh&ocirc;ng thể n&agrave;o từ chối mẫu c&aacute;p sạc&nbsp;<a title=\"Hydrus DS464\" href=\"https://www.thegioididong.com/cap-dien-thoai/cap-type-c-type-c-1m-hydrus-ds464\" target=\"_blank\" rel=\"noopener\" type=\"Hydrus DS464\">Hydrus DS464</a>&nbsp;đ&acirc;u, do sản phẩm sở hữu cổng sạc Type C ph&ugrave; hợp d&agrave;nh cho iPhone 15 nhưng vẫn đ&aacute;p ứng nhu cầu &lsquo;l&agrave;m đẹp&rsquo; cho sản phẩm với hai m&agrave;u sắc d&acirc;y t&ugrave;y chọn l&agrave; Xanh mint m&aacute;t lạnh v&agrave; Cam si&ecirc;u độc đ&aacute;o.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdn.tgdd.vn/Files/2023/09/23/1548738/cap-type-c-type-c-1m-hydrus-ds464-5-3-230923-151613-800-resize.jpg\" alt=\"Hydrus DS464: C&aacute;p sạc &lsquo;m&agrave;u sắc&rsquo; cho iPhone 15 mới\" data-original=\"https://cdn.tgdd.vn/Files/2023/09/23/1548738/cap-type-c-type-c-1m-hydrus-ds464-5-3-230923-151613-800-resize.jpg\"></div>\r\n<p>Th&ocirc;ng tin về c&aacute;p sạc Hydrus DS464 m&agrave; bạn c&oacute; thể quan t&acirc;m kh&aacute;c, c&oacute; thể kể đến như sản phẩm c&oacute; hỗ trợ sạc nhanh tối đa 60 W, c&aacute;p sạc d&agrave;i 1 m, hỗ trợ hầu hết c&aacute;c thiết bị c&oacute; cổng Type C phổ biến tr&ecirc;n thị trường,...</p>\r\n<div class=\"infoprod item2020 new2021\">\r\n<div class=\"image image-v2\"><a href=\"https://www.thegioididong.com/cap-dien-thoai/cap-type-c-type-c-1m-hydrus-ds464\"><img src=\"https://cdn.tgdd.vn/Products/Images/58/278298/cap-type-c-type-c-1m-hydrus-ds464-xanh-thumb-600x600-1-600x600.jpg\" data-proid=\"278298\"></a></div>\r\n<div class=\"infor\"><a href=\"https://www.thegioididong.com/cap-dien-thoai/cap-type-c-type-c-1m-hydrus-ds464\" data-s=\"Nomal\" data-site=\"1\" data-pro=\"3\" data-cache=\"False\"><span class=\"productname\">C&aacute;p Type C - Type C 1m Hydrus DS464</span></a>\r\n<h6 class=\"textkm stopsale\" data-gtm-vis-first-on-screen1070012_397=\"83496\" data-gtm-vis-total-visible-time1070012_397=\"100\" data-gtm-vis-has-fired1070012_397=\"1\">Ngừng kinh doanh</h6>\r\n<a class=\"viewdetail\" href=\"https://www.thegioididong.com/cap-dien-thoai/cap-type-c-type-c-1m-hydrus-ds464\">Xem chi tiết</a></div>\r\n</div>\r\n<h3><strong>5. Baseus CoolPlay CB000047: C&aacute;p sạc Type gi&aacute; rẻ ph&ugrave; hợp với mọi đối tượng!</strong></h3>\r\n<p>Đừng nghi ngờ khi chọn mua&nbsp;<a title=\"Baseus CoolPlay CB000047\" href=\"https://www.thegioididong.com/cap-dien-thoai/cap-type-c-type-c-1m-baseus-coolplay-cb000047\" target=\"_blank\" rel=\"noopener\" type=\"Baseus CoolPlay CB000047\">Baseus CoolPlay CB000047</a>&nbsp;với mức gi&aacute; qu&aacute; tốt như thế sẽ kh&ocirc;ng an to&agrave;n cho mẫu iPhone 15 mới toanh của bạn, sản phẩm được trang bị những t&iacute;nh năng - c&ocirc;ng nghệ khủng m&agrave; bạn c&oacute; thể sẽ bất ngờ khi được nhắc đến đ&oacute;.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdn.tgdd.vn/Files/2023/09/23/1548738/baseus-230923-151554-800-resize.jpg\" alt=\"Baseus CoolPlay CB000047: C&aacute;p sạc Type gi&aacute; rẻ ph&ugrave; hợp với mọi đối tượng!\" data-original=\"https://cdn.tgdd.vn/Files/2023/09/23/1548738/baseus-230923-151554-800-resize.jpg\"></div>\r\n<p>D&ugrave; c&oacute; mức gi&aacute; rẻ đến kinh ngạc nhưng Baseus CoolPlay CB000047 vẫn hỗ trợ c&ocirc;ng suất đầu ra tối đa l&ecirc;n đến 100 W - con số cực ấn tượng m&agrave; kh&ocirc;ng phải sản phẩm c&ugrave;ng ph&acirc;n kh&uacute;c n&agrave;o cũng c&oacute; thể được trang bị.</p>\r\n<p>Hơn thế, Baseus CoolPlay CB000047 c&ograve;n được t&iacute;ch hợp con chip E-Maker gi&uacute;p kiểm so&aacute;t d&ograve;ng điện tốt hơn, d&ugrave; c&oacute; sạc nhanh ở c&ocirc;ng suất tối đa vẫn cứ l&agrave; an to&agrave;n&hellip;</p>', 'news_thumbnails/L8kcwNucfXLlWsXSNmLme0OXXDgsJbEcayUkBaEa.jpg', 1, 1, '2025-04-24 02:23:19', '2025-04-24 02:23:19', '2025-04-24 02:23:19'),
(4, 'Cách xem lịch âm trên điện thoại dành cho cả Android và iOS (2024), xem ngay bài viết bên dưới để biết cách làm nhé', '<h1 class=\"titledetail\">&nbsp;</h1>\r\n<div class=\"imgwrap\"><img src=\"https://cdn.tgdd.vn/Files/2020/08/13/1279702/cach-cai-lich-am-cho-dien-thoai_800x450.jpg\" alt=\"Cach-cai-lich-am-cho-dien-thoai\" data-original=\"https://cdn.tgdd.vn/Files/2020/08/13/1279702/cach-cai-lich-am-cho-dien-thoai_800x450.jpg\"></div>\r\n<h2>Ở c&aacute;c nước phương Đ&ocirc;ng v&agrave; cả Việt Nam ch&uacute;ng ta hầu hết đều sử dụng lịch &Acirc;m. Đ&oacute;ng vai tr&ograve; quan trọng gắn liền với c&aacute;c sự kiện t&acirc;m linh quan trọng như ng&agrave;y cưới, giỗ chạp, Tết Nguy&ecirc;n Đ&aacute;n. Việc c&oacute; thể xem lịch &Acirc;m 2022 ngay tr&ecirc;n&nbsp;<a title=\"Điện thoại\" href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" rel=\"noopener\">điện thoại</a>&nbsp;sẽ rất tiện &iacute;ch, gi&uacute;p bạn kh&ocirc;ng qu&ecirc;n đi những ng&agrave;y lễ quan trọng. V&igrave; thế, sau đ&acirc;y sẽ l&agrave;&nbsp;<a title=\"Hướng dẫn th&ecirc;m lịch &Acirc;m tr&ecirc;n điện thoại\" href=\"https://www.thegioididong.com/tin-tuc/huong-dan-cach-xem-lich-am-tren-dien-thoai-danh-cho-ca-android-va-ios-1279702\" target=\"_blank\" rel=\"noopener\">hướng dẫn th&ecirc;m lịch &Acirc;m tr&ecirc;n điện thoại của bạn d&agrave;nh cho Android v&agrave; iOS</a>.&nbsp;V&agrave; kh&ocirc;ng để c&aacute;c bạn chờ l&acirc;u nữa, c&ugrave;ng m&igrave;nh t&igrave;m hiểu ngay th&ocirc;i n&agrave;o.</h2>\r\n<p><span data-sheets-root=\"1\" data-sheets-value=\"{\" data-sheets-userformat=\"{\" data-sheets-hyperlink=\"https://www.thegioididong.com/tin-tuc/cach-cap-nhat-ios-18-beta-1566744\"><a class=\"in-cell-link\" href=\"https://www.thegioididong.com/tin-tuc/cach-cap-nhat-ios-18-beta-1566744\" target=\"_blank\" rel=\"noopener\">Hướng dẫn c&aacute;ch cập nhật iOS 18 Beta với nhiều t&iacute;nh năng mới si&ecirc;u hay v&agrave; bảo mật hơn</a></span></p>\r\n<p><em><strong>*Lưu &yacute;</strong>: Nếu bạn đang x&agrave;i ứng dụng Google Lịch th&igrave; c&oacute; thể bị che c&aacute;c sự kiện được th&ecirc;m trước đ&oacute; trong lịch. N&ecirc;n h&atilde;y&nbsp;c&acirc;n nhắc trước khi sử dụng c&aacute;ch trong b&agrave;i viết nh&eacute;.</em></p>\r\n<h3><strong>1. C&aacute;ch c&agrave;i lịch &Acirc;m 2022 cho iPhone</strong></h3>\r\n<p><strong>Bước 1</strong>. Bạn v&agrave;o&nbsp;<strong>C&agrave;i đặt</strong>&nbsp;&gt;&nbsp;<strong>Lịch</strong>&nbsp;&gt;&nbsp;<strong>T&agrave;i khoản</strong>.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdn.tgdd.vn/Files/2020/08/13/1279702/cach-cai-lich-am-cho-dien-thoai-1-_1500x1334-800-resize.jpg\" alt=\"Cach-cai-lich-am-cho-dien-thoai\" data-original=\"https://cdn.tgdd.vn/Files/2020/08/13/1279702/cach-cai-lich-am-cho-dien-thoai-1-_1500x1334-800-resize.jpg\"></div>\r\n<p><strong>Bước 2</strong>. Trong mục&nbsp;<strong>Th&ecirc;m t&agrave;i khoản</strong>, bạn chọn&nbsp;<strong>Kh&aacute;c</strong>&nbsp;&gt;&nbsp;<strong>Th&ecirc;m t&agrave;i khoản</strong>.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdn.tgdd.vn/Files/2020/08/13/1279702/cach-cai-lich-am-cho-dien-thoai-2-_1500x1334-800-resize.jpg\" alt=\"Cach-cai-lich-am-cho-dien-thoai\" data-original=\"https://cdn.tgdd.vn/Files/2020/08/13/1279702/cach-cai-lich-am-cho-dien-thoai-2-_1500x1334-800-resize.jpg\"></div>\r\n<p><strong>Bước 3</strong>. Bạn chọn&nbsp;<strong>Th&ecirc;m Lịch đ&atilde; đăng k&yacute;</strong>, sau đ&oacute;, điền địa chỉ m&aacute;y chủ cung cấp lịch &Acirc;m.</p>\r\n<ul>\r\n<li>https://bit.ly/amlich2011-2021</li>\r\n<li>https://bit.ly/amlich2022-2032</li>\r\n</ul>\r\n<div class=\"imgwrap\"><img src=\"https://cdn.tgdd.vn/Files/2020/08/13/1279702/cach-cai-lich-am-cho-dien-thoai-3-_2250x1334-800-resize.jpg\" alt=\"Cach-cai-lich-am-cho-dien-thoai\" data-original=\"https://cdn.tgdd.vn/Files/2020/08/13/1279702/cach-cai-lich-am-cho-dien-thoai-3-_2250x1334-800-resize.jpg\"></div>\r\n<p><strong>Bước 4</strong>. Cuối c&ugrave;ng, bạn nhấn&nbsp;<strong>Tiếp</strong>&nbsp;v&agrave;&nbsp;<strong>Lưu lịch &Acirc;m</strong>&nbsp;v&agrave;o m&aacute;y.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdn.tgdd.vn/Files/2020/08/13/1279702/cach-cai-lich-am-cho-dien-thoai-4-_1500x1334-800-resize.jpg\" alt=\"Cach-cai-lich-am-cho-dien-thoai\" data-original=\"https://cdn.tgdd.vn/Files/2020/08/13/1279702/cach-cai-lich-am-cho-dien-thoai-4-_1500x1334-800-resize.jpg\"></div>\r\n<p>Giờ đ&acirc;y, bạn v&agrave;o ứng dụng&nbsp;<strong>Lịch</strong>&nbsp;sẽ thấy xuất hiện th&ecirc;m phần lịch &Acirc;m. Bạn c&oacute; thể nhấn v&agrave;o n&oacute; để t&ugrave;y biến nhiều thứ hơn.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdn.tgdd.vn/Files/2020/08/13/1279702/cach-cai-lich-am-cho-dien-thoai-5-_1500x1334-800-resize.jpg\" alt=\"Cach-cai-lich-am-cho-dien-thoai\" data-original=\"https://cdn.tgdd.vn/Files/2020/08/13/1279702/cach-cai-lich-am-cho-dien-thoai-5-_1500x1334-800-resize.jpg\"></div>\r\n<h3><strong>2. C&aacute;ch c&agrave;i lịch &Acirc;m 2022 cho điện thoại Android</strong></h3>\r\n<p>Đối với d&ograve;ng điện thoại Samsung th&igrave; đ&atilde; c&oacute; sẵn lịch &Acirc;m mặc định trong m&aacute;y. C&ograve;n với c&aacute;c điện thoại h&atilde;ng kh&aacute;c th&igrave; bạn c&oacute; thể d&ugrave;ng Google Lịch theo hướng dẫn sau.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdn.tgdd.vn/Files/2020/08/13/1279702/cach-cai-lich-am-cho-dien-thoai-6_800x800.jpg\" alt=\"Cach-cai-lich-am-cho-dien-thoai\" data-original=\"https://cdn.tgdd.vn/Files/2020/08/13/1279702/cach-cai-lich-am-cho-dien-thoai-6_800x800.jpg\"></div>\r\n<p><strong>Bước 1</strong>. Bạn c&agrave;i ứng dụng Google Lịch về điện thoại của m&igrave;nh theo link b&ecirc;n dưới.</p>\r\n<ul>\r\n<li><a title=\"Lịch Google - Ứng dụng tr&ecirc;n Google Play\" href=\"https://play.google.com/store/apps/details?id=com.google.android.calendar&amp;hl=vi\" target=\"_blank\" rel=\"nofollow noopener\">Lịch Google - Ứng dụng tr&ecirc;n Google Play</a></li>\r\n</ul>\r\n<p><strong>Bước 2</strong>. Mở tr&igrave;nh duyệt web, truy cập v&agrave;o trang web b&ecirc;n dưới.</p>\r\n<ul>\r\n<li><a title=\"googlelich\" href=\"https://bit.ly/googlelich\" target=\"_blank\" rel=\"nofollow noopener\">https://bit.ly/googlelich</a></li>\r\n</ul>\r\n<div class=\"imgwrap\"><img src=\"https://cdn.tgdd.vn/Files/2020/08/13/1279702/cach-cai-lich-am-cho-dien-thoai-7_800x800.jpg\" alt=\"Cach-cai-lich-am-cho-dien-thoai\" data-original=\"https://cdn.tgdd.vn/Files/2020/08/13/1279702/cach-cai-lich-am-cho-dien-thoai-7_800x800.jpg\"></div>\r\n<p><strong>Bước 3</strong>. Tại trang web lịch Google, bạn tiến h&agrave;nh đăng nhập t&agrave;i khoản Google nếu l&agrave; lần đầu ti&ecirc;n. Tại mục&nbsp;<strong>Lịch kh&aacute;c</strong>, bạn chọn dấu \'<strong>+</strong>\' v&agrave;&nbsp;<strong>Nhập</strong>. Chọn File từ m&aacute;y của bạn v&agrave; th&ecirc;m hai lịch &Acirc;m tải về sẵn b&ecirc;n dưới.</p>\r\n<ul>\r\n<li><a title=\"amlich2011-2021\" href=\"https://bit.ly/amlich2011-2021\" target=\"_blank\" rel=\"nofollow noopener\">https://bit.ly/amlich2011-2021</a></li>\r\n<li><a title=\"amlich2022-2032\" href=\"https://bit.ly/amlich2022-2032\" target=\"_blank\" rel=\"nofollow noopener\">https://bit.ly/amlich2022-2032</a></li>\r\n</ul>\r\n<div class=\"imgwrap\"><img src=\"https://cdn.tgdd.vn/Files/2020/08/13/1279702/cach-cai-lich-am-cho-dien-thoai-8_800x800.jpg\" alt=\"Cach-cai-lich-am-cho-dien-thoai\" data-original=\"https://cdn.tgdd.vn/Files/2020/08/13/1279702/cach-cai-lich-am-cho-dien-thoai-8_800x800.jpg\"></div>\r\n<p><strong>Bước 4</strong>. Th&ecirc;m xong, bạn nhấn&nbsp;<strong>Nhập</strong>&nbsp;trong trang web. Sau đ&oacute;, quay trở lại ứng dụng Google Lịch, nhấn&nbsp;<strong>L&agrave;m mới</strong>, bạn sẽ thấy lịch &Acirc;m xuất hiện tại đ&acirc;y.</p>\r\n<div class=\"imgwrap\"><img src=\"https://cdn.tgdd.vn/Files/2020/08/13/1279702/cach-cai-lich-am-cho-dien-thoai-9_1221x783-800-resize.jpg\" alt=\"Cach-cai-lich-am-cho-dien-thoai\" data-original=\"https://cdn.tgdd.vn/Files/2020/08/13/1279702/cach-cai-lich-am-cho-dien-thoai-9_1221x783-800-resize.jpg\"></div>\r\n<p>Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng. Nhớ ấn Like v&agrave; Chia sẻ ủng hộ m&igrave;nh nh&eacute;. Rất cảm ơn c&aacute;c bạn đ&atilde; xem b&agrave;i viết. Nếu c&oacute; g&igrave; thắc mắc h&atilde;y để lại b&igrave;nh luận b&ecirc;n dưới để chia sẻ với mọi người nh&eacute;. Hẹn gặp lại c&aacute;c b&agrave;i v&agrave;o những b&agrave;i viết tiếp theo nh&eacute;.</p>', 'news_thumbnails/KfUELiBZh05uu58J2gctoWzuE5dF0jLhKV6rzr4V.jpg', 1, 1, '2025-04-24 02:25:50', '2025-04-24 02:25:50', '2025-04-24 02:28:47');

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

--
-- Dumping data for table `news_images`
--

INSERT INTO `news_images` (`id`, `news_id`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 1, '../..news_images/g17pkQeaQsVhM0oD1sPaYDfnXFGRDb94bJhuqJyD.jpg', '2025-04-24 02:14:12', '2025-04-24 02:14:12'),
(2, 1, '../..news_images/N0AflKPzCtKoaIdk7EE6AAN8caL47PAARkm3SXCa.jpg', '2025-04-24 02:14:12', '2025-04-24 02:14:12'),
(3, 2, '../..news_images/D6MCYZU8QjoFS4DAeOfUOwjOsuCEXUkgt9egMrDt.jpg', '2025-04-24 02:18:51', '2025-04-24 02:18:51'),
(4, 2, '../..news_images/o09xFnMN8FyEE3sUV7SOtGgFZ5TW3MxhP7uSefYF.jpg', '2025-04-24 02:18:51', '2025-04-24 02:18:51');

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
(44, 'ORD92211', 2, 1, 22, 'Customer', '43784 Luettgen GlensNorth Derrick, IL 54948', '0867023153', 'nhatcvph47316@fpt.edu.vn', 45300000, 1000000, 'delivered', NULL, 'COD', 'paid', '2025-04-24 03:26:04', '2025-04-24 04:02:48'),
(45, 'ORD81534', 2, 1, 23, 'Customer', '43784 Luettgen GlensNorth Derrick, IL 54948', '0867023153', 'nhatcvph47316@fpt.edu.vn', 33200000, 800000, 'processing', NULL, 'COD', 'pending', '2025-04-24 03:26:46', '2025-04-24 04:04:57'),
(46, 'ORD76200', 2, NULL, NULL, 'Customer', '43784 Luettgen GlensNorth Derrick, IL 54948', '0867023153', 'nhatcvph47316@fpt.edu.vn', 28200000, 0, 'pending', NULL, 'COD', 'pending', '2025-04-24 03:43:21', '2025-04-24 03:43:21'),
(47, 'ORD69010', 2, NULL, 22, 'Customer', '43784 Luettgen GlensNorth Derrick, IL 54948', '0867023153', 'nhatcvph47316@fpt.edu.vn', 26000000, 1000000, 'pending', NULL, 'COD', 'pending', '2025-04-24 03:43:42', '2025-04-24 03:43:42'),
(48, 'ORD58641', 2, NULL, 22, 'Customer', '43784 Luettgen GlensNorth Derrick, IL 54948', '0867023153', 'nhatcvph47316@fpt.edu.vn', 27200000, 1000000, 'cancelled', 'Không muốn mua nữa', 'COD', 'pending', '2025-04-24 03:44:04', '2025-04-24 03:44:34'),
(49, 'ORD08753', 2, NULL, NULL, 'Customer', '43784 Luettgen GlensNorth Derrick, IL 54948', '0867023153', 'nhatcvph47316@fpt.edu.vn', 15600000, 0, 'pending', NULL, 'COD', 'pending', '2025-04-24 03:52:01', '2025-04-24 03:52:01');

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
(20, 44, 186, 'Iphone 16e', 'uploads/products/1743650286_iPhone-14-plus-thumb-den-600x600.jpg', 'Black', '8GB', 1, 16500000, NULL, NULL, '2025-04-24 03:26:04', '2025-04-24 03:26:04'),
(21, 44, 245, 'Iphone 16 99%', 'uploads/products/1745463623_z6114760130706_5dec820758245951ba9f2fd10e07fe71.jpg', 'Black', '128GB', 2, 14900000, NULL, NULL, '2025-04-24 03:26:04', '2025-04-24 03:26:04'),
(22, 45, 190, 'Iphone 16 Plus', 'uploads/products/1743654863_iphone-16-pro-max-sa-mac-thumb-1-600x600.jpg', 'Red', '16GB', 2, 17000000, NULL, NULL, '2025-04-24 03:26:46', '2025-04-24 03:26:46'),
(23, 46, 243, 'Iphone 15 99%', 'uploads/products/1745463385_iphone-15-hong-thumb-1-600x600.jpg', 'Red', '64GB', 2, 14100000, NULL, NULL, '2025-04-24 03:43:21', '2025-04-24 03:43:21'),
(24, 47, 240, 'Iphone 14 99%', 'uploads/products/1745463133_iPhone-14-thumb-trang-600x600.jpg', 'Black', '32GB', 2, 13500000, NULL, NULL, '2025-04-24 03:43:42', '2025-04-24 03:43:42'),
(25, 48, 229, 'Iphone 12 Test', 'uploads/products/1743948857_iphone-12-tim-1-600x600.jpg', 'Black', '16GB', 2, 14100000, NULL, NULL, '2025-04-24 03:44:04', '2025-04-24 03:44:04'),
(26, 49, 185, 'Iphone 16e', 'uploads/products/1743650286_iPhone-14-plus-thumb-den-600x600.jpg', 'Blue', '8GB', 1, 15600000, NULL, NULL, '2025-04-24 03:52:01', '2025-04-24 03:52:01');

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
(75, 1, 'Iphone 16e', '<p>L&agrave; sản phẩm cực k&igrave; chất lượng đến từ thương hiệu Apple</p>', 'uploads/products/1743650286_iPhone-14-plus-thumb-den-600x600.jpg', 16500000, 15600000, 15, 2, 13, 1, 'active', '2025-04-02 20:18:06', '2025-04-24 03:51:37', NULL),
(76, 1, 'Iphone 16 Pro Max', 'Sản phẩm cực tốt đến từ thương hiệu Apple', 'uploads/products/1743650719_iphone-16-plus-hong-thumb-1-600x600.jpg', 18500000, 17500000, 165, 114, 14, 1, 'active', '2025-04-02 20:22:22', '2025-04-30 11:37:06', NULL),
(78, 1, 'Iphone 16 Plus', '<p>Chip 18A nh&acirc;n si&ecirc;u mạnh</p>', 'uploads/products/1743654863_iphone-16-pro-max-sa-mac-thumb-1-600x600.jpg', 18500000, 17900000, 515, 1504, 12, 1, 'active', '2025-04-02 21:34:23', '2025-04-30 13:29:50', NULL),
(149, 1, 'Iphone 16', '<p>Đẹp qu&aacute; nhở</p>', 'uploads/products/1743945139_iphone-16-xanh-mong-ket-thumbnew-600x600 (1).png', 16500000, 15600000, 12, 2803, 0, 1, 'active', '2025-04-06 13:12:19', '2025-04-24 01:54:02', NULL),
(150, 1, 'Iphone 15 Pro Max', '<p>Đẹp lắm</p>', 'uploads/products/1743945590_iphone-15-pro-max-black-thumbnew-600x600.jpg', 15900000, 14900000, 1, 126, 0, 1, 'active', '2025-04-06 13:19:50', '2025-04-24 01:53:44', NULL),
(151, 1, 'Iphone 15 Plus', 'Đẹp nhất 2024', 'uploads/products/1743946087_iphone-15-plus-xanh-la-128gb-thumb-600x600 (1).jpg', 18500000, 17400000, 15, 156, 0, 1, 'active', '2025-04-06 13:28:07', '2025-04-06 13:28:07', NULL),
(152, 1, 'Iphone 15', 'Sản phẩm cực kì đẹp', 'uploads/products/1743946273_iphone-15-hong-thumb-1-600x600.jpg', 16500000, 15600000, 13, 789, 0, 1, 'active', '2025-04-06 13:31:13', '2025-04-06 13:31:13', NULL),
(153, 1, 'Iphone 14 Plus', 'đẹp quá ạ', 'uploads/products/1743946664_iPhone-14-plus-thumb-den-600x600.jpg', 16500000, 15900000, 4, 778, 0, 1, 'active', '2025-04-06 13:37:44', '2025-04-06 13:37:44', NULL),
(154, 1, 'Iphone 14', 'Đẹp quá ạ', 'uploads/products/1743947111_iPhone-14-thumb-trang-600x600.jpg', 16500000, 15900000, 16, 774, 0, 1, 'active', '2025-04-06 13:45:11', '2025-04-06 13:45:11', NULL),
(155, 1, 'Iphone 13', 'Quá chi tiết', 'uploads/products/1743947585_iphone-13-midnight-2-600x600.jpg', 14990000, 11900000, 7, 115, 0, 1, 'active', '2025-04-06 13:53:05', '2025-04-30 11:03:39', NULL),
(156, 1, 'Iphone 12 Test', 'Dòng điện thoại thông minh được sản xuất bởi Apple Inc', 'uploads/products/1743948857_iphone-12-tim-1-600x600.jpg', 16500000, 15900000, 20, 225, 0, 1, 'active', '2025-04-06 14:14:17', '2025-04-12 08:07:09', NULL),
(166, 2, 'Iphone X 99%', '<ul class=\"text-specifi active\">\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/he-dieu-hanh-la-gi-804907#hmenuid1\" target=\"_blank\" rel=\"noopener\">Hệ điều h&agrave;nh:</a></aside>\r\n<aside><span class=\"\">iOS 18</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Chip xử l&yacute; (CPU):</strong></aside>\r\n<aside><span class=\"\">Apple A18 Pro 6 nh&acirc;n</span></aside>\r\n</li>\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/toc-do-cpu-la-gi-co-y-nghia-gi-trong-cac-thiet-bi-dien-tu-1299483\" target=\"_blank\" rel=\"noopener\">Tốc độ CPU:</a></aside>\r\n<aside><span class=\"\">H&atilde;ng kh&ocirc;ng c&ocirc;ng bố</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Chip đồ họa (GPU):</strong></aside>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-chip-xu-ly-apple-a14-bionic-hieu-nang-manh-den-1302095\" target=\"_blank\" rel=\"noopener\">Apple GPU 6 nh&acirc;n</a></aside>\r\n</li>\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/ram-la-gi-co-y-nghia-gi-trong-cac-thiet-bi-dien-t-1216259\" target=\"_blank\" rel=\"noopener\">RAM:</a></aside>\r\n<aside><span class=\"\">8 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Dung lượng lưu trữ:</strong></aside>\r\n<aside><span class=\"\">256 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Dung lượng c&ograve;n lại (khả dụng) khoảng:</strong></aside>\r\n<aside><span class=\"\">241 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Danh bạ:</strong></aside>\r\n<aside><span class=\"\">Kh&ocirc;ng giới hạn</span></aside>\r\n</li>\r\n</ul>', 'uploads/products/1745462486_iphone-15-hong-thumb-1-600x600.jpg', 11000000, 9500000, NULL, 1, 0, 1, 'active', '2025-04-24 02:41:26', '2025-04-30 10:00:51', NULL),
(167, 2, 'Iphone 11 99%', '<ul class=\"text-specifi active\">\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/he-dieu-hanh-la-gi-804907#hmenuid1\" target=\"_blank\" rel=\"noopener\">Hệ điều h&agrave;nh:</a></aside>\r\n<aside><span class=\"\">iOS 18</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Chip xử l&yacute; (CPU):</strong></aside>\r\n<aside><span class=\"\">Apple A18 Pro 6 nh&acirc;n</span></aside>\r\n</li>\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/toc-do-cpu-la-gi-co-y-nghia-gi-trong-cac-thiet-bi-dien-tu-1299483\" target=\"_blank\" rel=\"noopener\">Tốc độ CPU:</a></aside>\r\n<aside><span class=\"\">H&atilde;ng kh&ocirc;ng c&ocirc;ng bố</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Chip đồ họa (GPU):</strong></aside>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-chip-xu-ly-apple-a14-bionic-hieu-nang-manh-den-1302095\" target=\"_blank\" rel=\"noopener\">Apple GPU 6 nh&acirc;n</a></aside>\r\n</li>\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/ram-la-gi-co-y-nghia-gi-trong-cac-thiet-bi-dien-t-1216259\" target=\"_blank\" rel=\"noopener\">RAM:</a></aside>\r\n<aside><span class=\"\">8 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Dung lượng lưu trữ:</strong></aside>\r\n<aside><span class=\"\">256 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Dung lượng c&ograve;n lại (khả dụng) khoảng:</strong></aside>\r\n<aside><span class=\"\">241 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Danh bạ:</strong></aside>\r\n<aside><span class=\"\">Kh&ocirc;ng giới hạn</span></aside>\r\n</li>\r\n</ul>', 'uploads/products/1745462757_iphone-15-hong-thumb-1-600x600.jpg', 12100000, 10500000, NULL, 5, 0, 1, 'active', '2025-04-24 02:45:57', '2025-04-30 13:22:37', NULL),
(168, 2, 'Iphone 12 99%', '<ul class=\"text-specifi active\">\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/he-dieu-hanh-la-gi-804907#hmenuid1\" target=\"_blank\" rel=\"noopener\">Hệ điều h&agrave;nh:</a></aside>\r\n<aside><span class=\"\">iOS 18</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Chip xử l&yacute; (CPU):</strong></aside>\r\n<aside><span class=\"\">Apple A18 Pro 6 nh&acirc;n</span></aside>\r\n</li>\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/toc-do-cpu-la-gi-co-y-nghia-gi-trong-cac-thiet-bi-dien-tu-1299483\" target=\"_blank\" rel=\"noopener\">Tốc độ CPU:</a></aside>\r\n<aside><span class=\"\">H&atilde;ng kh&ocirc;ng c&ocirc;ng bố</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Chip đồ họa (GPU):</strong></aside>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-chip-xu-ly-apple-a14-bionic-hieu-nang-manh-den-1302095\" target=\"_blank\" rel=\"noopener\">Apple GPU 6 nh&acirc;n</a></aside>\r\n</li>\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/ram-la-gi-co-y-nghia-gi-trong-cac-thiet-bi-dien-t-1216259\" target=\"_blank\" rel=\"noopener\">RAM:</a></aside>\r\n<aside><span class=\"\">8 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Dung lượng lưu trữ:</strong></aside>\r\n<aside><span class=\"\">256 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Dung lượng c&ograve;n lại (khả dụng) khoảng:</strong></aside>\r\n<aside><span class=\"\">241 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Danh bạ:</strong></aside>\r\n<aside><span class=\"\">Kh&ocirc;ng giới hạn</span></aside>\r\n</li>\r\n</ul>', 'uploads/products/1745462918_iphone-13-midnight-2-600x600.jpg', 13200000, 11500000, NULL, 0, 0, 1, 'active', '2025-04-24 02:48:38', '2025-04-24 02:48:38', NULL),
(169, 2, 'Iphone 13 99%', '<ul class=\"text-specifi active\">\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/he-dieu-hanh-la-gi-804907#hmenuid1\" target=\"_blank\" rel=\"noopener\">Hệ điều h&agrave;nh:</a></aside>\r\n<aside><span class=\"\">iOS 18</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Chip xử l&yacute; (CPU):</strong></aside>\r\n<aside><span class=\"\">Apple A18 Pro 6 nh&acirc;n</span></aside>\r\n</li>\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/toc-do-cpu-la-gi-co-y-nghia-gi-trong-cac-thiet-bi-dien-tu-1299483\" target=\"_blank\" rel=\"noopener\">Tốc độ CPU:</a></aside>\r\n<aside><span class=\"\">H&atilde;ng kh&ocirc;ng c&ocirc;ng bố</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Chip đồ họa (GPU):</strong></aside>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-chip-xu-ly-apple-a14-bionic-hieu-nang-manh-den-1302095\" target=\"_blank\" rel=\"noopener\">Apple GPU 6 nh&acirc;n</a></aside>\r\n</li>\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/ram-la-gi-co-y-nghia-gi-trong-cac-thiet-bi-dien-t-1216259\" target=\"_blank\" rel=\"noopener\">RAM:</a></aside>\r\n<aside><span class=\"\">8 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Dung lượng lưu trữ:</strong></aside>\r\n<aside><span class=\"\">256 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Dung lượng c&ograve;n lại (khả dụng) khoảng:</strong></aside>\r\n<aside><span class=\"\">241 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Danh bạ:</strong></aside>\r\n<aside><span class=\"\">Kh&ocirc;ng giới hạn</span></aside>\r\n</li>\r\n</ul>', 'uploads/products/1745463039_iPhone-14-plus-thumb-den-600x600.jpg', 13500000, 12900000, NULL, 0, 0, 1, 'active', '2025-04-24 02:50:39', '2025-04-24 02:50:39', NULL),
(170, 2, 'Iphone 14 99%', '<ul class=\"text-specifi active\">\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/he-dieu-hanh-la-gi-804907#hmenuid1\" target=\"_blank\" rel=\"noopener\">Hệ điều h&agrave;nh:</a></aside>\r\n<aside><span class=\"\">iOS 18</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Chip xử l&yacute; (CPU):</strong></aside>\r\n<aside><span class=\"\">Apple A18 Pro 6 nh&acirc;n</span></aside>\r\n</li>\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/toc-do-cpu-la-gi-co-y-nghia-gi-trong-cac-thiet-bi-dien-tu-1299483\" target=\"_blank\" rel=\"noopener\">Tốc độ CPU:</a></aside>\r\n<aside><span class=\"\">H&atilde;ng kh&ocirc;ng c&ocirc;ng bố</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Chip đồ họa (GPU):</strong></aside>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-chip-xu-ly-apple-a14-bionic-hieu-nang-manh-den-1302095\" target=\"_blank\" rel=\"noopener\">Apple GPU 6 nh&acirc;n</a></aside>\r\n</li>\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/ram-la-gi-co-y-nghia-gi-trong-cac-thiet-bi-dien-t-1216259\" target=\"_blank\" rel=\"noopener\">RAM:</a></aside>\r\n<aside><span class=\"\">8 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Dung lượng lưu trữ:</strong></aside>\r\n<aside><span class=\"\">256 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Dung lượng c&ograve;n lại (khả dụng) khoảng:</strong></aside>\r\n<aside><span class=\"\">241 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Danh bạ:</strong></aside>\r\n<aside><span class=\"\">Kh&ocirc;ng giới hạn</span></aside>\r\n</li>\r\n</ul>', 'uploads/products/1745463133_iPhone-14-thumb-trang-600x600.jpg', 14100000, 13200000, NULL, 2, 0, 1, 'active', '2025-04-24 02:52:13', '2025-04-30 10:10:06', NULL),
(171, 2, 'Iphone 15 99%', '<ul class=\"text-specifi active\">\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/he-dieu-hanh-la-gi-804907#hmenuid1\" target=\"_blank\" rel=\"noopener\">Hệ điều h&agrave;nh:</a></aside>\r\n<aside><span class=\"\">iOS 18</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Chip xử l&yacute; (CPU):</strong></aside>\r\n<aside><span class=\"\">Apple A18 Pro 6 nh&acirc;n</span></aside>\r\n</li>\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/toc-do-cpu-la-gi-co-y-nghia-gi-trong-cac-thiet-bi-dien-tu-1299483\" target=\"_blank\" rel=\"noopener\">Tốc độ CPU:</a></aside>\r\n<aside><span class=\"\">H&atilde;ng kh&ocirc;ng c&ocirc;ng bố</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Chip đồ họa (GPU):</strong></aside>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-chip-xu-ly-apple-a14-bionic-hieu-nang-manh-den-1302095\" target=\"_blank\" rel=\"noopener\">Apple GPU 6 nh&acirc;n</a></aside>\r\n</li>\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/ram-la-gi-co-y-nghia-gi-trong-cac-thiet-bi-dien-t-1216259\" target=\"_blank\" rel=\"noopener\">RAM:</a></aside>\r\n<aside><span class=\"\">8 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Dung lượng lưu trữ:</strong></aside>\r\n<aside><span class=\"\">256 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Dung lượng c&ograve;n lại (khả dụng) khoảng:</strong></aside>\r\n<aside><span class=\"\">241 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Danh bạ:</strong></aside>\r\n<aside><span class=\"\">Kh&ocirc;ng giới hạn</span></aside>\r\n</li>\r\n</ul>', 'uploads/products/1745463385_iphone-15-hong-thumb-1-600x600.jpg', 14500000, 13900000, NULL, 0, 0, 1, 'active', '2025-04-24 02:56:25', '2025-04-24 02:56:25', NULL),
(172, 2, 'Iphone 16 99%', '<ul class=\"text-specifi active\">\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/he-dieu-hanh-la-gi-804907#hmenuid1\" target=\"_blank\" rel=\"noopener\">Hệ điều h&agrave;nh:</a></aside>\r\n<aside><span class=\"\">iOS 18</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Chip xử l&yacute; (CPU):</strong></aside>\r\n<aside><span class=\"\">Apple A18 Pro 6 nh&acirc;n</span></aside>\r\n</li>\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/toc-do-cpu-la-gi-co-y-nghia-gi-trong-cac-thiet-bi-dien-tu-1299483\" target=\"_blank\" rel=\"noopener\">Tốc độ CPU:</a></aside>\r\n<aside><span class=\"\">H&atilde;ng kh&ocirc;ng c&ocirc;ng bố</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Chip đồ họa (GPU):</strong></aside>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-chip-xu-ly-apple-a14-bionic-hieu-nang-manh-den-1302095\" target=\"_blank\" rel=\"noopener\">Apple GPU 6 nh&acirc;n</a></aside>\r\n</li>\r\n<li>\r\n<aside><a class=\"tzLink\" href=\"https://www.thegioididong.com/hoi-dap/ram-la-gi-co-y-nghia-gi-trong-cac-thiet-bi-dien-t-1216259\" target=\"_blank\" rel=\"noopener\">RAM:</a></aside>\r\n<aside><span class=\"\">8 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Dung lượng lưu trữ:</strong></aside>\r\n<aside><span class=\"\">256 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Dung lượng c&ograve;n lại (khả dụng) khoảng:</strong></aside>\r\n<aside><span class=\"\">241 GB</span></aside>\r\n</li>\r\n<li>\r\n<aside><strong>Danh bạ:</strong></aside>\r\n<aside><span class=\"\">Kh&ocirc;ng giới hạn</span></aside>\r\n</li>\r\n</ul>', 'uploads/products/1745463623_z6114760130706_5dec820758245951ba9f2fd10e07fe71.jpg', 15900000, 14500000, NULL, 0, 0, 1, 'active', '2025-04-24 03:00:23', '2025-04-24 03:00:23', NULL);

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
(80, 156, 'uploads/products/1743948857_mini_iphone-15-plus-tem-99-4-750x500.jpg', '2025-04-06 14:14:17', '2025-04-06 14:14:17'),
(85, 166, 'uploads/products/1745462486_mini_iphone-15-plus-green-2-638629458412751972-750x500.jpg', '2025-04-24 02:41:27', '2025-04-24 02:41:27'),
(86, 166, 'uploads/products/1745462487_mini_iphone-15-plus-tem-99-4-750x500.jpg', '2025-04-24 02:41:27', '2025-04-24 02:41:27'),
(87, 166, 'uploads/products/1745462487_mini_iphone-15-plus-xanh-la-128gb-thumb-600x600 (1).jpg', '2025-04-24 02:41:27', '2025-04-24 02:41:27'),
(88, 167, 'uploads/products/1745462757_mini_iphone-15-plus-green-2-638629458412751972-750x500.jpg', '2025-04-24 02:45:57', '2025-04-24 02:45:57'),
(89, 167, 'uploads/products/1745462757_mini_iphone-15-plus-tem-99-4-750x500.jpg', '2025-04-24 02:45:57', '2025-04-24 02:45:57'),
(90, 167, 'uploads/products/1745462757_mini_iphone-15-plus-xanh-la-128gb-thumb-600x600 (1).jpg', '2025-04-24 02:45:57', '2025-04-24 02:45:57'),
(91, 168, 'uploads/products/1745462918_mini_iphone-15-plus-green-2-638629458412751972-750x500.jpg', '2025-04-24 02:48:38', '2025-04-24 02:48:38'),
(92, 168, 'uploads/products/1745462918_mini_iphone-15-plus-tem-99-4-750x500.jpg', '2025-04-24 02:48:38', '2025-04-24 02:48:38'),
(93, 168, 'uploads/products/1745462918_mini_iphone-15-plus-xanh-la-128gb-thumb-600x600 (1).jpg', '2025-04-24 02:48:38', '2025-04-24 02:48:38'),
(94, 169, 'uploads/products/1745463039_mini_iphone-15-plus-green-2-638629458412751972-750x500.jpg', '2025-04-24 02:50:39', '2025-04-24 02:50:39'),
(95, 169, 'uploads/products/1745463039_mini_iphone-15-plus-tem-99-4-750x500.jpg', '2025-04-24 02:50:39', '2025-04-24 02:50:39'),
(96, 169, 'uploads/products/1745463039_mini_iphone-15-plus-xanh-la-128gb-thumb-600x600 (1).jpg', '2025-04-24 02:50:39', '2025-04-24 02:50:39'),
(97, 170, 'uploads/products/1745463133_mini_iphone-15-plus-green-2-638629458412751972-750x500.jpg', '2025-04-24 02:52:13', '2025-04-24 02:52:13'),
(98, 170, 'uploads/products/1745463133_mini_iphone-15-plus-tem-99-4-750x500.jpg', '2025-04-24 02:52:13', '2025-04-24 02:52:13'),
(99, 170, 'uploads/products/1745463133_mini_iphone-15-plus-xanh-la-128gb-thumb-600x600 (1).jpg', '2025-04-24 02:52:13', '2025-04-24 02:52:13'),
(100, 171, 'uploads/products/1745463385_mini_iphone-15-plus-green-2-638629458412751972-750x500.jpg', '2025-04-24 02:56:25', '2025-04-24 02:56:25'),
(101, 171, 'uploads/products/1745463385_mini_iphone-15-plus-tem-99-4-750x500.jpg', '2025-04-24 02:56:25', '2025-04-24 02:56:25'),
(102, 171, 'uploads/products/1745463385_mini_iphone-15-plus-xanh-la-128gb-thumb-600x600 (1).jpg', '2025-04-24 02:56:25', '2025-04-24 02:56:25'),
(103, 172, 'uploads/products/1745463623_mini_iphone-15-plus-green-2-638629458412751972-750x500.jpg', '2025-04-24 03:00:23', '2025-04-24 03:00:23'),
(104, 172, 'uploads/products/1745463623_mini_iphone-15-plus-tem-99-4-750x500.jpg', '2025-04-24 03:00:23', '2025-04-24 03:00:23'),
(105, 172, 'uploads/products/1745463623_mini_iphone-15-plus-xanh-la-128gb-thumb-600x600 (1).jpg', '2025-04-24 03:00:23', '2025-04-24 03:00:23');

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
(185, 75, 'Blue', '#98A7C1', '8GB', 16500000, 15600000, 1, 'active', '2025-04-02 20:18:06', '2025-04-24 03:52:01'),
(186, 75, 'Black', '#1D1D1F', '8GB', 17500000, 16500000, 2, 'active', '2025-04-02 20:18:06', '2025-04-24 03:26:04'),
(187, 76, 'Red', '#FF0000', '8GB', 18900000, 17800000, 3, 'active', '2025-04-02 20:22:22', '2025-04-12 07:03:41'),
(188, 76, 'Red', '#FF0000', '16GB', 19500000, 18500000, 15, 'active', '2025-04-02 20:22:22', '2025-04-06 22:04:38'),
(189, 78, 'Red', '#FF0000', '8GB', 18500000, 16900000, 12, 'active', '2025-04-02 21:34:23', '2025-04-07 04:36:48'),
(190, 78, 'Red', '#FF0000', '16GB', 19000000, 17000000, 8, 'active', '2025-04-02 21:34:23', '2025-04-24 03:26:46'),
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
(226, 156, 'Blue', '#98A7C1', '32GB', 15500000, 14000000, 5, 'active', '2025-04-06 14:14:17', '2025-04-07 11:25:56'),
(227, 156, 'Black', '#1D1D1F', '64GB', 16500000, 15500000, 7, 'active', '2025-04-06 14:14:17', '2025-04-09 01:53:02'),
(229, 156, 'Black', '#1D1D1F', '16GB', 15000000, 14100000, 5, 'active', '2025-04-07 10:51:30', '2025-04-24 03:44:34'),
(235, 166, 'Red', '#FF0000', '8GB', 11000000, 9500000, 11, 'active', '2025-04-24 02:41:27', '2025-04-24 02:41:27'),
(236, 167, 'Red', '#FF0000', '8GB', 12100000, 10500000, 15, 'active', '2025-04-24 02:45:57', '2025-04-24 02:45:57'),
(237, 168, 'Red', '#FF0000', '8GB', 13200000, 11500000, 12, 'active', '2025-04-24 02:48:38', '2025-04-24 02:48:38'),
(238, 168, 'Red', '#FF0000', '16GB', 13600000, 11900000, 11, 'active', '2025-04-24 02:48:38', '2025-04-24 02:48:38'),
(239, 169, 'Black', '#1D1D1F', '8GB', 13500000, 12900000, 15, 'active', '2025-04-24 02:50:39', '2025-04-24 02:50:39'),
(240, 170, 'Black', '#1D1D1F', '32GB', 14100000, 13500000, 9, 'active', '2025-04-24 02:52:13', '2025-04-24 03:43:42'),
(241, 170, 'Black', '#1D1D1F', '64GB', 14500000, 13900000, 16, 'active', '2025-04-24 02:52:13', '2025-04-24 02:52:13'),
(242, 171, 'Red', '#FF0000', '32GB', 14500000, 13900000, 9, 'active', '2025-04-24 02:56:25', '2025-04-24 02:56:25'),
(243, 171, 'Red', '#FF0000', '64GB', 14900000, 14100000, 9, 'active', '2025-04-24 02:56:25', '2025-04-24 03:43:21'),
(244, 172, 'Black', '#1D1D1F', '64GB', 15900000, 14500000, 9, 'active', '2025-04-24 03:00:23', '2025-04-24 03:00:23'),
(245, 172, 'Black', '#1D1D1F', '128GB', 16500000, 14900000, 9, 'active', '2025-04-24 03:00:23', '2025-04-24 03:26:04');

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
(1, 'Admin User', 'admin@example.com', 'admin', '$2y$12$GMgyCxop3apil.srP9gGUew9Od78qZR7Iun5LbeVVSCzd8SXKI45a', '0867023153', '492 Reba Gardens Suite 060\r\nKarianeburgh, AL 85523-9007', 'uploads/avatars/1744290076.jpg', 'active', 'admin', NULL, '2025-03-30 10:10:35', '2025-04-10 13:04:51', NULL),
(2, 'Customer', 'nhatcvph47316@fpt.edu.vn', 'customer', '$2y$10$NixDc.1/.difFIGvF2nY.uYt4mXFbOno7vAZe89cSGXQPGtwbTXdy', '0867023153', '43784 Luettgen GlensNorth Derrick, IL 54948', 'uploads/avatars/1744292881.jpg', 'active', 'customer', NULL, '2025-03-30 10:10:36', '2025-04-24 03:59:05', NULL),
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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news_images`
--
ALTER TABLE `news_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

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
