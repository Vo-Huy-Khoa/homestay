-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2022 at 01:28 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestay`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 3, 'Loving homestay â€“ homestay ÄÃ  Náºµng gáº§n bÃ£i biá»ƒn', 'Tá»a láº¡c táº¡i sá»‘ 41 An CÆ° 7, SÆ¡n TrÃ ,  ÄÃ  Náºµng, Loving Homestay lÃ  cÆ¡ sá»Ÿ má»›i vá»›i Ä‘áº§y Ä‘á»§ tiá»‡n nghi vÃ  sáº¡ch sáº½. á»ž vá»‹ trÃ­ nÃ y, du khÃ¡ch cÃ³ thá»ƒ  ghÃ© thÄƒm bÃ£i biá»ƒn Pháº¡m VÄƒn Äá»“ng vÃ  thÆ°á»Ÿng thá»©c cÃ¡c mÃ³n háº£i sáº£n Ä‘áº·c trÆ°ng xá»© biá»ƒn táº¡i Ä‘Ã¢y.Loving Homestay cÃ³ khÃ´ng gian khÃ¡ yÃªn bÃ¬nh vÃ  lÃ£ng máº¡n. Bá»Ÿi homestay ÄÃ  Náºµng nÃ y náº±m giá»¯a nhá»¯ng cung Ä‘Æ°á»ng nhiá»u cÃ¢y xanh vÃ  hoa lÃ¡. Má»—i lÃºc hoÃ ng hÃ´n vÃ  chiá»u tá»‘i, á»Ÿ Loving Homestay du khÃ¡ch cÃ³ thá»ƒ cáº£m nháº­n Ä‘Æ°á»£c mÃ¹i thÆ¡m lÃ£ng Ä‘Ã£ng cá»§a hoa hÃ²a cÃ¹ng vá»‹ máº·n cá»§a giÃ³ biá»ƒn. Táº¥t cáº£ chÃºng táº¡o nÃªn má»™t Loving Homestay gáº§n gÅ©i vÃ  hÃ²a nháº­p vÃ o thiÃªn nhiÃªn.', 'f92d22.jpg', NULL, NULL),
(3, 2, 'Memory Hostel â€“ homestay ÄÃ  Náºµng cho cÃ¡c cáº·p Ä‘Ã´i mÃª kiáº¿n trÃºc Retro', 'ÄÃ¢y lÃ  má»™t hostel káº¿t há»£p cafÃ© vá»›i phong cÃ¡ch Ä‘á»™c Ä‘Ã¡o, phÃ¹ há»£p cho nhá»¯ng nhÃ³m báº¡n Ä‘i Ä‘Ã´ng, hostel cÅ©ng cÃ³ view khÃ¡ Ä‘áº¹p vá»›i nhá»¯ng gÃ³c nhÃ¬n bao quÃ¡t ra nhá»¯ng cÃ¢y cáº§u Ä‘áº·c trÆ°ng cá»§a ÄÃ  Náºµng. Äáº·c biá»‡t, Ä‘iá»ƒm ná»•i trá»™i cá»§a Barneyâ€™s Danang Backpackers Hostel so vá»›i nhá»¯ng hostel cÃ¹ng dáº¡ng lÃ  má»—i phÃ²ng Ä‘á»u cÃ³ 1 nhÃ  vá»‡ sinh nhÆ°ng cÃ³ nhiá»u buá»“ng ráº¥t sáº¡ch sáº½ vÃ  hiá»‡n Ä‘áº¡i, vÃ¬ tháº¿ báº¡n sáº½ khÃ´ng pháº£i ngá»“i chá» Ä‘á»£i nhau khi dÃ¹ng chung phÃ²ng ná»¯a.', '9fa8c0.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `room_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `people` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `room_id`, `name`, `email`, `phone`, `people`, `check_in`, `check_out`, `message`, `status`, `created_at`, `updated_at`) VALUES
(3, 6, 'VÃµ Huy Khoa', 'huykhoa630@gmail.com', '0977425396', '1', '2022-03-11', '2022-03-15', 'chot phong', 2, '2022-03-11 13:41:13', '2022-03-11 13:41:13'),
(4, 11, 'VÃµ Huy Khoa', 'huykhoa630@gmail.com', '0977425396', '1', '2022-03-09', '2022-03-18', 'khoa dat phong', 2, '2022-03-11 13:49:39', '2022-03-11 13:49:39'),
(6, 5, 'VÃµ Huy Khoa', 'huykhoa630@gmail.com', '0977425396', '1', '2022-03-11', '2022-03-14', NULL, 2, '2022-03-11 14:24:20', '2022-03-11 14:24:20'),
(8, 5, 'VÃµ Huy Khoa', 'huykhoa630@gmail.com', '0977425396', '1', '2022-03-12', '2022-03-17', 'Äáº·t phÃ²ng rá»“i nhÃ©!  báº¡n kiá»ƒm tra giÃºp mÃ¬nh', 2, '2022-03-12 02:48:59', '2022-03-12 02:48:59'),
(9, 5, 'VÃµ Huy Khoa', 'huykhoa630@gmail.com', '0977425396', '1', '2022-03-12', '2022-03-16', 'Ä‘á»•i thÃ nh ngÃ y 16', 2, '2022-03-12 02:51:20', '2022-03-12 02:51:20'),
(10, 8, 'VÃµ Huy Khoa', 'huykhoa630@gmail.com', '0977425396', '1', '2022-03-13', '2022-03-12', NULL, 2, '2022-03-12 02:53:34', '2022-03-12 02:53:34'),
(11, 5, 'VÃµ Huy Khoa', 'huykhoa630@gmail.com', '0977425396', '1', '2022-03-12', '2022-03-12', NULL, 1, '2022-03-12 02:54:29', '2022-03-12 02:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sang Trá»ng', 'd0a624.jpg', '2022-03-11 10:14:27', '2022-03-11 10:14:27'),
(2, 'PhÃ²ng ÄÃ´i', '641c84.jpg', '2022-03-11 10:14:08', '2022-03-11 10:14:08'),
(3, 'PhÃ²ng ÄÆ¡n', '10fe04.jpg', '2022-03-11 10:14:18', '2022-03-11 10:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `bed` int(1) DEFAULT NULL,
  `bath` int(1) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `category_id`, `name`, `description`, `bed`, `bath`, `price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(5, 3, 'PhÃ²ng 101', '- PhÃ²ng khÃ¡ch lÃ  má»™t khÃ´ng gian tuyá»‡t Ä‘áº¹p vá»›i cá»­a sá»• cao cao vÃ  Ä‘áº§y náº¯ng  - Chá»— á»Ÿ cá»§a chÃºng tÃ´i cÃ³ má»™t giÃ¡ sÃ¡ch vÃ  bÃ n lÃ m viá»‡c cho báº¡n náº¿u báº¡n cáº§n má»™t nÆ¡i lÃ m viá»‡c tiá»‡n lá»£i  - ÄÆ°á»£c trang bá»‹ Ä‘áº§y Ä‘á»§ cÃ¡c tiá»‡n nghi hiá»‡n Ä‘áº¡i  Neo-Classic lÃ  nÆ¡i lÃ½ tÆ°á»Ÿng Ä‘á»ƒ báº¡n nghá»‰ ngÆ¡i, thiáº¿t káº¿ vá»›i phong cÃ¡ch tÃ¢n cá»• Ä‘iá»ƒn, cÃ¹ng 2 phÃ²ng ngá»§ lá»›n vÃ  nhÃ  báº¿p. Ráº¥t gáº§n vá»›i biá»ƒn vÃ  cÃ¡c Ä‘iá»ƒm tham quan du lá»‹ch ná»•i tiáº¿ng.  Chá»‰ máº¥t 1 phÃºt Ä‘i bá»™ Ä‘áº¿n bÃ£i biá»ƒn Pháº¡m VÄƒn Äá»“ng vÃ  nhÃ  hÃ ng háº£i sáº£n BÃ© Máº·n, 10 phÃºt Ä‘i bá»™ Ä‘áº¿n bÃ£i biá»ƒn Má»¹ KhÃª. Hay máº¥t 5 phÃºt lÃ¡i xe Ä‘áº¿n nÃºi Khá»‰ vÃ  10 phÃºt lÃ¡i xe Ä‘áº¿n trung tÃ¢m thÃ nh phá»‘.  Chá»— á»Ÿ cá»§a chÃºng tÃ´i gá»“m 2 phÃ²ng ngá»§ cÃ³ 2 giÆ°á»ng cá»¡ King, thÃ­ch há»£p cho gia Ä‘Ã¬nh Ä‘i du lá»‹ch hoáº·c lÃ m viá»‡c. KhÃ¡ch cÃ³ thá»ƒ sá»­ dá»¥ng thiáº¿t bá»‹ nhÃ  báº¿p Ä‘á»ƒ náº¥u Äƒn hÃ ng ngÃ y.', 1, 1, '175000.00', 'dc67a7.jpg', 1, '2022-03-12 02:54:29', '2022-03-12 02:54:29'),
(6, 3, 'PhÃ²ng 102', 'NÆ¡i nhá»¯ng cÃ¢u chuyá»‡n cá»§a chÃºng tÃ´i gáº·p báº¡n cá»§a báº¡n  NÆ¡i mÃ  báº¡n cáº£m tháº¥y nhÆ° á»Ÿ nhÃ .  NÆ¡i mÃ  báº¡n cáº£m tháº¥y thÆ° giÃ£n.  NÆ¡i mÃ  báº¡n cáº£m tháº¥y thanh lá»‹ch.  áº¨n mÃ¬nh trong má»™t thung lÅ©ng yÃªn tÄ©nh á»Ÿ trung tÃ¢m ÄÃ  Náºµng, áº©n sau má»™t khu vÆ°á»n yÃªn tÄ©nh thuáº§n khiáº¿t, The Kaia Residence, má»™t nÆ¡i lÆ°u trÃº Ä‘Æ°á»£c thiáº¿t káº¿ cÃ¡ nhÃ¢n hÃ³a cao chá»‰ vá»›i 10 cÄƒn há»™, lÃ  má»™t lá»i nháº¯c nhá»Ÿ khÃ´ng ngá»«ng vá» váº» Ä‘áº¹p cá»§a kiáº¿n â€‹â€‹trÃºc hiá»‡n Ä‘áº¡i tháº¿ ká»· 20.  Trá»ng tÃ¢m chÃ­nh cá»§a thiáº¿t káº¿ lÃ  báº£o tá»“n táº¥t cáº£ cÃ¡c kiáº¿n â€‹â€‹trÃºc ban Ä‘áº§u cá»§a biá»‡t thá»± Grandpa cá»§a chÃºng tÃ´i Ä‘Æ°á»£c xÃ¢y dá»±ng vÃ o nhá»¯ng nÄƒm 1960, báº¯t Ä‘áº§u tá»« sÃ¢n thÆ°á»£ng Ä‘áº¿n cá»­a sá»• sáº¯t vÃ  táº¥t cáº£ cÃ¡c cÃ¢y Äƒn quáº£ trong vÆ°á»n, mang láº¡i cáº£m giÃ¡c hoÃ i cá»•, cáº£m giÃ¡c nhá»¯ng ngÃ y xÆ°a tá»‘t Ä‘áº¹p, Ä‘áº¿n vá»›i cÆ° dÃ¢n.  Má»—i phÃ²ng Ä‘á»u cÃ³ ban cÃ´ng riÃªng, nhÃ¬n ra khung cáº£nh vÆ°á»n xanh, nhÃ  báº¿p Ä‘Æ°á»£c trang bá»‹ tá»‘t vÃ  bÃ n viáº¿t tÃ¹y chá»‰nh káº¿t há»£p vá»›i nhiá»u loáº¡i gháº¿ bÃ nh vÃ  gháº¿ sofa, mang Ä‘áº¿n khÃ´ng gian sá»‘ng thÆ° giÃ£n nhÆ°ng áº¥m cÃºng nhÆ° á»Ÿ nhÃ .  Ãnh sÃ¡ng Ä‘Æ°á»£c thiáº¿t láº­p vÃ  mÃ n hÃ¬nh ná»™i tháº¥t tÃ¹y chá»‰nh mang Ä‘áº¿n cáº£m giÃ¡c áº¥m Ã¡p Ä‘áº·c biá»‡t cá»§a tÃ¬nh yÃªu, Ä‘áº¿n tá»« táº¥t cáº£ nhá»¯ng kÃ½ á»©c vá» phÃ´ng chá»¯ cá»§a Ã”ng ná»™i thÃ¢n yÃªu nháº¥t cá»§a chÃºng ta.', 1, 1, '300000.00', 'cb7e3d.jpg', 0, '2022-03-11 14:20:37', '2022-03-11 14:20:37'),
(7, 2, 'PhÃ²ng 103', 'CÄƒn há»™ cá»§a chÃºng tÃ´i thuá»™c cÄƒn há»™ cao cáº¥p MÆ°á»ng Thanh ÄÃ  Náºµng, cÄƒn há»™ náº±m sÃ¡t bÃ£i biá»ƒn Ä‘áº¹p nháº¥t vÃ  Ä‘Ã´ng khÃ¡ch du lá»‹ch tham quan nháº¥t ÄÃ  Náºµng.  CÄƒn há»™ cá»§a chÃºng tÃ´i Ä‘áº§y Ä‘á»§ tiá»‡n nghi sáº¡ch sáº½, sáº½ táº¡o cho báº¡n vÃ  gia Ä‘Ã¬nh má»™t ká»³ nghÄ© tháº¥t tuyá»‡t vá»i  Sáº½ linh hoáº¡t giáº£i quyáº¿t má»i tháº¯c máº¯c cho báº¡n  ChÃºng tÃ´i dÃ nh táº¥t cáº£ nhá»¯ng gÃ¬ tuyá»‡t vá»i nháº¥t cho cÄƒn há»™ xinh Ä‘áº¹p nÃ y Ä‘á»ƒ chá» Ä‘áº¿n ngÃ y Ä‘Æ°á»£c chÃ o Ä‘Ã³n báº¡n. Thiáº¿t káº¿ vá»›i tÃ´ng mÃ u tráº¯ng-vÃ ng chá»§ Ä‘áº¡o khiáº¿n cho ngÃ´i nhÃ  tháº­t hiá»‡n Ä‘áº¡i, sang trá»ng nhÆ°ng cÅ©ng khÃ´ng kÃ©m pháº§n áº¥m cÃºng mang Ä‘áº¿n cho báº¡n cáº£m giÃ¡c nhÆ° Ä‘ang á»Ÿ trong chÃ­nh ngÃ´i nhÃ  cá»§a mÃ¬nh váº­y.  BÃªn cáº¡nh Ä‘Ã³, tÃ´i cÅ©ng lÃ  má»™t ngÆ°á»i vÃ´ cÃ¹ng thÃ¢n thiá»‡n vÃ  thoáº£i mÃ¡i. ChÃ­nh vÃ¬ váº­y Ä‘á»«ng ngáº¡i ngáº§n mÃ  chia sáº» vá»›i chÃºng tÃ´i nhá»¯ng Ä‘iá»u báº¡n Ä‘ang tháº¯c máº¯c hoáº·c nhá»¯ng khÃ³ khÄƒn báº¡n gáº·p pháº£i khi á»Ÿ Ä‘Ã¢y.  ChÃºng tÃ´i cÅ©ng luÃ´n mong muá»‘n Ä‘Æ°á»£c cÃ¹ng báº¡n khÃ¡m phÃ¡ nhiá»u Ä‘á»‹a Ä‘iá»ƒm tá»‘t Ä‘áº¹p nháº¥t táº¡i Ä‘Ã¢y.', 2, 2, '500000.00', 'f92d22.jpg', 0, '2022-03-11 14:21:06', '2022-03-11 14:21:06'),
(8, 2, 'PhÃ²ng 104', '- Dragon Bridge View Apartment Ä‘Æ°á»£c tá»‘i giáº£n vá»›i gam mÃ u Ä‘Æ¡n giáº£n mÃ  sang trá»ng lÃ  Ä‘en vÃ  tráº¯ng  - Dragon Bridge vá»›i view nhÃ¬n tá»« táº§ng cao xuá»‘ng vÃ  bao quÃ¡t Ä‘Æ°á»£c toÃ n bá»™ thÃ nh phá»‘  - Ban cÃ´ng khÃ¡ rá»™ng Ä‘á»ƒ báº¡n cÃ³ thá»ƒ thoáº£i mÃ¡i Ä‘á»c sÃ¡ch hoáº·c nhÃ¢m nhi má»™t tÃ¡ch trÃ  nhá»¯ng ngÃ y cuá»‘i tuáº§n  - ChÃºng tÃ´i thÃ¢n thiá»‡n vÃ  ráº¥t dá»… gáº§n, sáºµn sÃ ng giÃºp Ä‘á»¡ báº¡n trong nhá»¯ng hoÃ n cáº£nh báº¥t ngá»  LÃ  má»™t lá»±a chá»n Ä‘áº§y thÃº vá»‹ khi khÃ¡m phÃ¡ ÄÃ  Náºµng, Dragon Bridge View vá»›i khÃ´ng gian mÃ u tráº¯ng lÃ  chá»§ Ä‘áº¡o. Äem láº¡i cáº£m giÃ¡c thÆ° thÃ¡i vÃ  nháº¹ nhÃ ng, thÃ­ch máº¯t. Äá»“ váº­t Ä‘Æ°á»£c bÃ i trÃ­ Ä‘Æ¡n giáº£n vÃ  gá»n gÃ ng, tá»‘i giáº£n bá»›t chi tiáº¿t thá»«a Ä‘á»ƒ khÃ´ng bá»‹ rá»‘i máº¯t trong má»™t khÃ´ng gian thoÃ¡ng Ä‘Ã£ng vÃ  mÃ¡t máº».', 2, 2, '500000.00', '448968.jpg', 0, '2022-03-12 02:53:34', '2022-03-12 02:53:34'),
(9, 3, 'PhÃ²ng 105', 'Táº¡i Lemâ€™s Coffee & Apartment, báº¡n sáº½ Ä‘Æ°á»£c tráº£i nghiá»‡m má»™t khÃ´ng gian tinh táº¿ vÃ  Ä‘áº³ng cáº¥p vá»›i:  â€¢ Nhiá»u loáº¡i phÃ²ng vá»›i khÃ´ng gian Ä‘áº¹p trang nhÃ£ Ä‘á»ƒ du khÃ¡ch thoáº£i mÃ¡i lá»±a chá»n.  â€¢ ÄÃ¢Ì€y Ä‘uÌ‰ tiÃªÌ£n nghi: tuÌ‰ laÌ£nh, maÌy laÌ£nh, TV, â€¦ hay caÌc nÃ´Ì£i thÃ¢Ìt bÄƒÌ€ng gÃ´Ìƒ: baÌ€n ghÃªÌ, giÆ°Æ¡Ì€ng, tuÌ‰â€¦ vÃ´ cuÌ€ng sang troÌ£ng vaÌ€ tinh tÃªÌ.    â€¢ ÄÆ°á»£c thiáº¿t káº¿ vÃ  trang bá»‹ Ä‘áº§y Ä‘á»§ nhá»¯ng tiá»‡n Ã­ch nhÆ°: quáº§y bar, sÃ¢n vÆ°á»n  , sÃ¢n thÆ°á»£ng view Ä‘áº¹p thá»a thÃ­ch check-in Facebook, phÃ¹ há»£p vá»›i báº¡n tráº» lÃ£ng máº¡n yÃªu khÃ´ng gian xanh.    â€¢ Náº±m á»Ÿ khu trung tÃ¢m giá»¯a cÃ¡c Ä‘á»‹a Ä‘iá»ƒm vui chÆ¡i ná»•i tiáº¿ng: Cáº§u SÃ´  ng HÃ n, Báº£o tÃ ng ChÄƒm, Cáº§u tÃ u tÃ¬nh yÃªuâ€¦  VÃ  cÃ²n nhiá»u Ä‘iá»ƒm Ä‘áº·c biá»‡t khÃ¡c chá»‰ cÃ³ du khÃ¡ch cá»§a Lemâ€™s má»›i cÃ³ thá»ƒ tráº£i ng  hiá»‡m. Äáº¿n Ä‘Ã¢y ngay hÃ´m nay Ä‘á»ƒ táº­n hÆ°á»Ÿng cÃ¹ng báº¡n bÃ¨, ngÆ°á»i yÃªu hay gia Ä‘Ã¬nh nhÃ©!    HÃ£y Ä‘á»ƒ Lemâ€™s phá»¥c vá»¥ giáº¥c ngá»§ vÃ  sá»± an yÃªn cá»§a báº¡n  khi Ä‘áº·t chÃ¢n Ä‘áº¿n ÄÃ  Náºµng du lá»‹ch mÃ¹a thu nÃ y.', 1, 1, '300000.00', '0487ab.jpg', 0, '2022-03-11 14:21:37', '2022-03-11 14:21:37'),
(10, 1, 'PhÃ²ng 106', 'NhÃ  Daisy Ä‘Æ°á»£c xem lÃ  má»™t trong nhá»¯ng Ä‘á»‹a Ä‘iÃªm nghá»‰ ngÆ¡i Ä‘á»™c Ä‘Ã¡o vÃ  tuyá»‡t vá»i, dÃ nh cho khÃ¡ch du lá»‹ch Ä‘áº¿n thÃ nh phá»‘ biá»ƒn ÄÃ  Náºµng. Daisy náº±m á»Ÿ má»™t vá»‹ trÃ­ cá»±c ká»³ thuáº­n lá»£i. BÃªn cáº¡nh lá»£i tháº¿ vá» vá»‹ trÃ­, Daisy cÃ²n lÃ m hÃ i lÃ²ng du khÃ¡ch nhá» thiáº¿t káº¿Ä‘á»™c Ä‘Ã¡o vÃ  tinh táº¿, Sang trá»ng, tiá»‡n nghi. Daisy Ä‘Æ°á»£c chÄƒm sÃ³c bá»Ÿi sá»± tÃ¢m huyáº¿t cá»§a chá»§ nhÃ , Daisyâ€™home Ä‘Æ°á»£c thiáº¿t káº¿ vá»›i mÃ u sáº¯c nghá»‡ thuáº­t hiá»‡n Ä‘áº¡i nhÆ°ng váº«n mang Ä‘áº¿n cho khÃ¡ch hÃ ng cáº£m giÃ¡c bÃ¬nh yÃªn, thoáº£i mÃ¡i vÃ  áº¥m Ã¡p nhÆ° trong chÃ­nh ngÃ´i nhÃ  cá»§a há»  CÄƒn há»™ nÃ y cÃ³ diá»‡n tÃ­ch khoáº£ng 70m2, 2 phÃ²ng ngá»§, 2 phÃ²ng vá»‡ sinh  PhÃ²ng khÃ¡ch cÃ³ mÃ¡y láº¡nh, gháº¿ sofa thoáº£i mÃ¡i, TV thÃ´ng minh vá»›i mÃ n hÃ¬nh pháº³ng, káº¿t ná»‘i internet vÃ  Wifi Ä‘Æ°á»£c báº­t 24/24.  BÃªn cáº¡nh Ä‘Ã³, báº¿p Ä‘Æ°á»£c trang bá»‹ Ä‘áº§y Ä‘á»§nhÆ° tá»§ láº¡nh, lÃ² vi sÃ³ng, ná»“i cÆ¡m Ä‘iá»‡n, áº¥m Ä‘un nÆ°á»›c Ä‘iá»‡n vÃ  má»™t sá»‘ dá»¥ng cá»¥ náº¥u Äƒn khÃ¡c. Báº¡n cÃ³ thá»ƒ lÃ m má»™t bá»¯a Äƒn vui váº» cho gia Ä‘Ã¬nh trong chuyáº¿n Ä‘i cá»§a mÃ¬nh, Daisy sáº½ ráº¥t vui vÃ  biáº¿t Æ¡n náº¿u báº¡n cÃ³ thá»ƒ dá»n dáº¹p sau khi Äƒn xong.  BÃªn trong phÃ²ng ngá»§, Má»—i phÃ²ng ngá»§ cÃ³ giÆ°á»ng lá»›n (1m6 - 1m8) cÃ³ Ä‘iá»u hÃ²a, ná»‡m vÃ  ga tráº£i giÆ°á»ng lÃ  váº­t liá»‡u tá»± nhiÃªn vÃ  cháº¥t lÆ°á»£ng cao. NhÃ  Daisy luÃ´n luÃ´n dá»n dáº¹p sáº¡ch sáº½ trÆ°á»›c khi báº¡n tá»›i. Daisy muá»‘n cháº¯c cháº¯n ráº±ng báº¡n cÃ³ má»™t giáº¥c ngá»§ sÃ¢u tuyá»‡t vá»i khi á»Ÿ nhÃ  Daisy.  CÃ¡c phÃ²ng táº¯m Ä‘Æ°á»£c cung cáº¥p mÃ¡y nÆ°á»›c nÃ³ng Ä‘á»ƒ báº¡n cÃ³ thá»ƒ sá»­ dá»¥ng nÆ°á»›c áº¥m Ä‘á»ƒ táº¯m sau má»™t ngÃ y dÃ i khÃ¡m phÃ¡ trong thÃ nh phá»‘ tuyá»‡t vá»i. KhÄƒn, dáº§u gá»™i, sá»¯a táº¯m, kem Ä‘Ã¡nh rÄƒng, kem Ä‘Ã¡nh rÄƒng tiá»‡n dá»¥ng vá»›i tiÃªu chuáº©n 5 sao.  Khu vá»±c giáº·t lÃ : NhÃ  Daisy Ä‘Ã£ Ä‘áº·t mÃ¡y giáº·t vá»›i há»‡ thá»‘ng giÃ n phÆ¡i thÃ´ng minh trÃªn ban cÃ´ng thoÃ¡ng mÃ¡t, báº¡n khÃ´ng cáº§n pháº£i tráº£ tiá»n cho dá»‹ch vá»¥ giáº·t á»§i nhÆ° má»™t sá»‘ khÃ¡ch sáº¡n. Báº¡n chá»‰ cáº§n Ä‘áº·t quáº§n Ã¡o báº©n vÃ  khÄƒn báº©n cá»§a báº¡n vÃ o mÃ¡y giáº·t, báº­t cÃ´ng táº¯c vÃ  quáº§n Ã¡o cá»§a báº¡n sáº½ Ä‘Æ°á»£c lÃ m sáº¡ch nhÆ° báº¡n Ä‘ang á»Ÿ chÃ­nh ngÃ´i nhÃ  cá»§a mÃ¬nh.  NgoÃ i ra, nhÃ  Daisy luÃ´n chá»n nhá»¯ng sáº£n pháº©m tá»‘t nháº¥t cho báº¡n nhÆ° mÃ¡y sáº¥y tÃ³c Ä‘á»ƒ báº¡n cÃ³ thá»ƒ sáº¥y tÃ³c. CÄƒn há»™ Vip sáº½ cÃ³ bÃ n á»§i Ä‘á»ƒ giá»¯ cho quáº§n Ã¡o cá»§a báº¡n luÃ´n luÃ´n tháº³ng..  Äiá»u tuyá»‡t vá»i nháº¥t khÃ´ng thá»ƒ khÃ´ng nháº¯c tá»›i lÃ  táº§m nhÃ¬n tá»« ban cÃ´ng cá»§a cÃ¡c cÄƒn há»™ sea view. Daisy Ä‘á»ƒ sáºµn gháº¿ ngá»“ ivÃ  bÃ n trÃ  nhá» ngoÃ i ban cÃ´ng ban cÃ´ng. CÃ²n gÃ¬ tuyá»‡t vá»i hÆ¡n khi vá»«a uá»‘ng trÃ , thÆ°á»Ÿng thá»©c ly bia cÃ¹ng ngÆ°á»i thÃ¢n thÆ°Æ¡ng, cÃ¹ng ngáº¯m view biá»ƒn tuyá»‡t vá»i.', 2, 2, '1000000.00', 'f36b8f.jpg', 0, '2022-03-11 14:22:20', '2022-03-11 14:22:20'),
(11, 2, 'PhÃ²ng 107', 'NhÃ  Daisy Ä‘Æ°á»£c xem lÃ  má»™t trong nhá»¯ng Ä‘á»‹a Ä‘iÃªm nghá»‰ ngÆ¡i Ä‘á»™c Ä‘Ã¡o vÃ  tuyá»‡t vá»i, dÃ nh cho khÃ¡ch du lá»‹ch Ä‘áº¿n thÃ nh phá»‘ biá»ƒn ÄÃ  Náºµng. Daisy náº±m á»Ÿ má»™t vá»‹ trÃ­ cá»±c ká»³ thuáº­n lá»£i. BÃªn cáº¡nh lá»£i tháº¿ vá» vá»‹ trÃ­, Daisy cÃ²n lÃ m hÃ i lÃ²ng du khÃ¡ch nhá» thiáº¿t káº¿Ä‘á»™c Ä‘Ã¡o vÃ  tinh táº¿, Sang trá»ng, tiá»‡n nghi. Daisy Ä‘Æ°á»£c chÄƒm sÃ³c bá»Ÿi sá»± tÃ¢m huyáº¿t cá»§a chá»§ nhÃ , Daisyâ€™home Ä‘Æ°á»£c thiáº¿t káº¿ vá»›i mÃ u sáº¯c nghá»‡ thuáº­t hiá»‡n Ä‘áº¡i nhÆ°ng váº«n mang Ä‘áº¿n cho khÃ¡ch hÃ ng cáº£m giÃ¡c bÃ¬nh yÃªn, thoáº£i mÃ¡i vÃ  áº¥m Ã¡p nhÆ° trong chÃ­nh ngÃ´i nhÃ  cá»§a há»  CÄƒn há»™ nÃ y náº±m á»Ÿ táº§ng 12a. CÃ³ diá»‡n tÃ­ch khoáº£ng 70m2, 2 phÃ²ng ngá»§, 2 phÃ²ng vá»‡ sinh  PhÃ²ng khÃ¡ch cÃ³ mÃ¡y láº¡nh, gháº¿ sofa thoáº£i mÃ¡i, TV thÃ´ng minh vá»›i mÃ n hÃ¬nh pháº³ng, káº¿t ná»‘i internet vÃ  Wifi Ä‘Æ°á»£c báº­t 24/24.  BÃªn cáº¡nh Ä‘Ã³, báº¿p Ä‘Æ°á»£c trang bá»‹ Ä‘áº§y Ä‘á»§nhÆ° tá»§ láº¡nh, lÃ² vi sÃ³ng, ná»“i cÆ¡m Ä‘iá»‡n, áº¥m Ä‘un nÆ°á»›c Ä‘iá»‡n vÃ  má»™t sá»‘ dá»¥ng cá»¥ náº¥u Äƒn khÃ¡c. Báº¡n cÃ³ thá»ƒ lÃ m má»™t bá»¯a Äƒn vui váº» cho gia Ä‘Ã¬nh trong chuyáº¿n Ä‘i cá»§a mÃ¬nh, Daisy sáº½ ráº¥t vui vÃ  biáº¿t Æ¡n náº¿u báº¡n cÃ³ thá»ƒ dá»n dáº¹p sau khi Äƒn xong.  BÃªn trong phÃ²ng ngá»§, Má»—i phÃ²ng ngá»§ cÃ³ giÆ°á»ng lá»›n (1m6 - 1m8) cÃ³ Ä‘iá»u hÃ²a, ná»‡m vÃ  ga tráº£i giÆ°á»ng lÃ  váº­t liá»‡u tá»± nhiÃªn vÃ  cháº¥t lÆ°á»£ng cao. NhÃ  Daisy luÃ´n luÃ´n dá»n dáº¹psáº¡ch sáº½ trÆ°á»›c khi báº¡n tá»›i. Daisy muá»‘n cháº¯c cháº¯n ráº±ng báº¡n cÃ³ má»™t giáº¥c ngá»§ sÃ¢u tuyá»‡t vá»i khi á»Ÿ nhÃ  Daisy.  CÃ¡c phÃ²ng táº¯m Ä‘Æ°á»£c cung cáº¥p mÃ¡y nÆ°á»›c nÃ³ng Ä‘á»ƒ báº¡n cÃ³ thá»ƒ sá»­ dá»¥ng nÆ°á»›c áº¥m Ä‘á»ƒ táº¯m sau má»™t ngÃ y dÃ i khÃ¡m phÃ¡ trong thÃ nh phá»‘ tuyá»‡t vá»i. KhÄƒn, dáº§u gá»™i, sá»¯a táº¯m, kem Ä‘Ã¡nh rÄƒng, kem Ä‘Ã¡nh rÄƒng tiá»‡n dá»¥ng vá»›i tiÃªu chuáº©n 5 sao.  Khu vá»±c giáº·t lÃ : NhÃ  Daisy Ä‘Ã£ Ä‘áº·t mÃ¡y giáº·t vá»›i há»‡ thá»‘ng giÃ n phÆ¡i thÃ´ng minh trÃªn ban cÃ´ng thoÃ¡ng mÃ¡t, báº¡n khÃ´ng cáº§n pháº£i tráº£ tiá»n cho dá»‹ch vá»¥ giáº·t á»§i nhÆ° má»™t sá»‘ khÃ¡ch sáº¡n. Báº¡n chá»‰ cáº§n Ä‘áº·t quáº§n Ã¡o báº©n vÃ  khÄƒn báº©n cá»§a báº¡n vÃ o mÃ¡y giáº·t, báº­t cÃ´ng táº¯c vÃ  quáº§n Ã¡o cá»§a báº¡n sáº½ Ä‘Æ°á»£c lÃ m sáº¡ch nhÆ° báº¡n Ä‘ang á»Ÿ chÃ­nh ngÃ´i nhÃ  cá»§a mÃ¬nh.  NgoÃ i ra, nhÃ  Daisy luÃ´n chá»n nhá»¯ng sáº£n pháº©m tá»‘t nháº¥t cho báº¡n nhÆ° mÃ¡y sáº¥y tÃ³c Ä‘á»ƒ báº¡n cÃ³ thá»ƒ sáº¥y tÃ³c.  CÄƒn 12a08 Daisy háº¡ng 2 cÄƒn há»™ gáº§n gÅ©i áº¥m Ã¡p, cÃ³ view ngáº¯m thÃ nh phá»‘. Náº±m á»Ÿ táº§ng 12 cá»§a tÃ²a nhÃ , cÄƒn há»™ cÃ³ 2 phÃ²ng ngá»§, 2 phÃ²ng vá»‡ sinh, báº¿p náº¥u Äƒn vá»›i Ä‘áº§y Ä‘á»§ dá»¥ng cá»¥ náº¥u báº¿p lÃ  lá»±a chá»n tá»‘t nháº¥t cho nhá»¯ng gia Ä‘Ã¬nh cÃ³ sá»Ÿ thÃ­ch náº¥u Äƒn khi Ä‘i du lá»‹ch, táº­n hÆ°á»Ÿng má»™t ká»³ nghá»‰ thÃº vá»‹ vÃ  dinh dÆ°á»¡ng. PhÃ¹ há»£p cho 4,5 ngÆ°á»i trong gia Ä‘Ã¬nh hoáº·c nhÃ³m báº¡n cho ká»³ nghá»‰ tuyá»‡t vá»i táº¡i thÃ nh phá»‘ xinh Ä‘áº¹p', 2, 2, '500000.00', '2e7e28.jpg', 0, '2022-03-11 14:22:01', '2022-03-11 14:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `created_at`, `updated_at`) VALUES
(1, 'vohuykhoa', 'huykhoa630@gmail.com', 'vohuykhoa', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
