-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 05:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_tunashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `amount`
--

CREATE TABLE `amount` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `number_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `amount`
--

INSERT INTO `amount` (`id`, `product_id`, `size_id`, `number_size`) VALUES
(1, 1, 1, 7),
(2, 1, 2, 8),
(3, 1, 3, 9),
(4, 2, 1, 2),
(5, 2, 2, 5),
(6, 2, 3, 6),
(7, 2, 3, 2),
(8, 3, 1, 6),
(9, 3, 2, 2),
(10, 3, 3, 12),
(11, 4, 1, 0),
(12, 4, 2, 2),
(13, 4, 3, 5),
(14, 5, 1, 1),
(15, 5, 2, 5),
(16, 5, 3, 6),
(26, 6, 1, 5),
(27, 6, 2, 8),
(28, 6, 3, 7),
(29, 7, 1, 8),
(30, 7, 2, 6),
(31, 7, 3, 7),
(32, 8, 1, 8),
(33, 8, 2, 8),
(34, 8, 3, 6),
(35, 9, 1, 6),
(36, 9, 2, 6),
(37, 9, 3, 6),
(38, 10, 1, 6),
(39, 10, 2, 6),
(40, 10, 3, 8),
(41, 11, 1, 8),
(42, 11, 2, 5),
(43, 11, 3, 5),
(44, 12, 1, 5),
(45, 12, 2, 4),
(46, 12, 3, 6),
(47, 13, 1, 6),
(48, 13, 2, 8),
(49, 13, 3, 9),
(50, 14, 1, 3),
(51, 14, 2, 5),
(52, 14, 3, 8),
(53, 15, 1, 7),
(54, 15, 2, 9),
(55, 15, 3, 1),
(56, 16, 1, 0),
(57, 16, 2, 0),
(58, 16, 3, 0),
(59, 17, 1, 2),
(60, 17, 2, 2),
(61, 17, 3, 2),
(62, 18, 1, 2),
(63, 18, 2, 1),
(64, 18, 3, 9),
(65, 19, 1, 6),
(66, 19, 2, 10),
(67, 19, 3, 8),
(68, 20, 1, 15),
(69, 20, 2, 11),
(70, 20, 3, 17),
(71, 21, 1, 8),
(72, 21, 2, 8),
(73, 21, 3, 0),
(77, 24, 1, 8),
(78, 24, 2, 15),
(79, 24, 3, 8),
(80, 25, 1, 8),
(81, 25, 2, 6),
(82, 25, 3, 9),
(83, 26, 1, 8),
(84, 26, 2, 9),
(85, 26, 3, 10),
(86, 27, 1, 15),
(87, 27, 2, 0),
(88, 27, 3, 6),
(89, 28, 1, 8),
(90, 28, 2, 8),
(91, 28, 3, 8),
(92, 29, 1, 5),
(93, 29, 2, 6),
(94, 29, 3, 2),
(95, 30, 1, 15),
(96, 30, 2, 15),
(97, 30, 3, 12),
(98, 31, 1, 16),
(99, 31, 2, 9),
(100, 31, 3, 16),
(101, 32, 1, 9),
(102, 32, 2, 9),
(103, 32, 3, 15),
(104, 33, 1, 6),
(105, 33, 2, 7),
(106, 33, 3, 6),
(107, 34, 1, 9),
(108, 34, 2, 15),
(109, 34, 3, 7),
(110, 35, 1, 12),
(111, 35, 2, 11),
(112, 35, 3, 13),
(113, 36, 1, 12),
(114, 36, 2, 17),
(115, 36, 3, 14),
(116, 37, 1, 11),
(117, 37, 2, 11),
(118, 37, 3, 12),
(119, 38, 1, 9),
(120, 38, 2, 11),
(121, 38, 3, 16),
(122, 39, 1, 12),
(123, 39, 2, 16),
(124, 39, 3, 12),
(125, 40, 1, 12),
(126, 40, 2, 10),
(127, 40, 3, 6),
(128, 41, 1, 13),
(129, 41, 2, 16),
(130, 41, 3, 10),
(131, 42, 1, 0),
(132, 42, 2, 0),
(133, 42, 3, 0),
(134, 43, 1, 16),
(135, 43, 2, 2),
(136, 43, 3, 6),
(137, 44, 1, 0),
(138, 44, 2, 6),
(139, 44, 3, 8),
(140, 45, 1, 8),
(141, 46, 2, 8),
(142, 45, 2, 9),
(143, 45, 3, 7),
(144, 46, 1, 3),
(145, 46, 3, 9),
(146, 47, 1, 9),
(147, 47, 2, 8),
(148, 47, 3, 6),
(149, 48, 1, 7),
(150, 48, 2, 9),
(151, 48, 3, 12),
(152, 49, 1, 21),
(153, 49, 2, 18),
(154, 49, 3, 17),
(155, 50, 1, 6),
(156, 50, 2, 16),
(157, 50, 3, 11),
(158, 51, 1, 8),
(159, 51, 2, 7),
(160, 51, 3, 8),
(161, 52, 1, 9),
(162, 52, 2, 9),
(164, 53, 1, 9),
(167, 54, 1, 9),
(170, 55, 1, 9),
(176, 56, 1, 14),
(179, 57, 1, 15),
(182, 58, 1, 11),
(184, 52, 3, 0),
(185, 59, 1, 15),
(187, 60, 1, 18),
(188, 61, 1, 16),
(189, 62, 1, 18),
(190, 63, 1, 12),
(191, 64, 1, 18),
(192, 65, 1, 18),
(193, 66, 1, 8),
(194, 67, 1, 14),
(195, 68, 1, 28),
(198, 69, 1, 14),
(199, 69, 2, 11),
(200, 69, 3, 9),
(201, 70, 1, 8),
(202, 70, 2, 11),
(203, 70, 3, 12),
(204, 71, 1, 15),
(205, 71, 2, 14),
(206, 71, 3, 15),
(207, 72, 1, 15),
(208, 72, 2, 14),
(209, 72, 3, 15),
(210, 73, 1, 18),
(211, 73, 2, 18),
(212, 73, 3, 8),
(213, 74, 1, 5),
(214, 74, 2, 5),
(215, 74, 3, 6),
(216, 75, 1, 8),
(217, 75, 2, 8),
(218, 75, 3, 11),
(219, 76, 1, 8),
(220, 76, 2, 5),
(221, 76, 3, 6),
(222, 77, 1, 12),
(223, 77, 2, 14),
(224, 77, 3, 18),
(225, 78, 1, 17),
(226, 78, 2, 14),
(227, 78, 3, 18),
(228, 79, 1, 16),
(229, 79, 2, 18),
(230, 79, 3, 16),
(231, 80, 1, 9),
(232, 80, 2, 16),
(233, 80, 3, 17),
(234, 81, 1, 12),
(235, 81, 2, 14),
(236, 81, 3, 11),
(237, 82, 1, 8),
(238, 82, 2, 6),
(239, 82, 3, 6),
(240, 83, 1, 11),
(241, 83, 2, 12),
(242, 83, 3, 10),
(243, 84, 1, 0),
(244, 84, 2, 15),
(245, 84, 3, 10),
(246, 85, 1, 6),
(247, 85, 2, 7),
(248, 85, 3, 6),
(249, 86, 1, 11),
(250, 86, 2, 5),
(251, 86, 3, 12),
(252, 87, 1, 8),
(253, 88, 1, 14),
(254, 89, 1, 19),
(255, 90, 1, 18);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`) VALUES
(1, 'Áo', 0),
(2, 'Áo polo', 1),
(3, 'Áo thun', 1),
(4, 'Áo sơ mi', 1),
(5, 'Áo khoác', 1),
(6, 'Quần', 0),
(7, 'Quần short', 6),
(8, 'Quần jean', 6),
(9, 'Phụ kiện', 0),
(10, 'Thắt lưng', 9),
(11, 'Ví da', 9),
(13, 'Quần âu', 6);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `address`, `phone`, `password`) VALUES
(3, 'Nguyễn Văn A', 'nva@gmail.com', 'Hà nội', '123456789', '123456'),
(5, 'Test lan hai', 'test2@gmail.com', 'Hanoi', '0123455666', 'abc123\r\n'),
(6, 'tunganh', 'abc@gmail.com', 'xuan hoa', '0981585173', 'tunganh'),
(8, 'Đinh Nguyễn Tùng Anh', 'dnta@gmail.com', '111, Nguyễn Hoàng', '0915156555', 'ta123456');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `content` text NOT NULL,
  `hot` int(11) NOT NULL DEFAULT 0,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `description`, `content`, `hot`, `photo`) VALUES
(6, 'New Collection 2023', '<p>Khi di chuyển bằng &ocirc; t&ocirc;, &iacute;t nhiều sẽ c&oacute; trường hợp bạn gặp phải c&aacute;c t&igrave;nh huống rắc rối, thậm ch&iacute; nguy cấp. Đ&oacute; l&agrave; l&yacute; do v&igrave; sao bạn n&ecirc;n trang bị những kiến thức v&agrave; phụ kiện cứu hộ cần thiết. Video dưới đ&acirc;y l&agrave; một mẹo nhỏ sẽ gi&uacute;p bạn trong một v&agrave;i trường hợp khẩn cấp khi sử dụng xe &ocirc; t&ocirc; con.</p>\r\n', '<p>Chiếc xe đầu ti&ecirc;n bị ch&aacute;y v&agrave;o th&aacute;ng 9-2018, nhưng do t&igrave;nh trạng huỷ hoại nặng của xe n&ecirc;n h&atilde;ng kh&ocirc;ng thể t&igrave;m ra manh m&ocirc;i n&agrave;o.</p>\r\n\r\n<p>T&igrave;nh trạng n&agrave;y diễn ra li&ecirc;n tục sau đ&oacute; nhưng việc t&igrave;m kiếm mọi đầu mối nguy&ecirc;n nh&acirc;n vẫn thất bại. Đến đầu năm 2020, Hyundai buộc phải thu&ecirc; b&ecirc;n thứ 3 để t&igrave;m lỗi v&agrave; cuối c&ugrave;ng nguy&ecirc;n nh&acirc;n được x&aacute;c định do chập điện.</p>\r\n\r\n<p>Theo đ&oacute;, dầu phanh ABS bị r&ograve; rỉ, rớt v&agrave;o bộ điều khiển điện tử ECU, dẫn đến ăn m&ograve;n bảng mạch in của ECU g&acirc;y chập điện.</p>\r\n\r\n<p>Dầu thuỷ lực cũng chảy tr&agrave;n l&ecirc;n vỏ động cơ, n&ecirc;n Hyundai đưa ra cảnh b&aacute;o chủ xe Santa Fe n&ecirc;n để &yacute; đến m&ugrave;i kh&eacute;t, kh&oacute;i từ động cơ bốc ra, v&agrave; kết hợp c&aacute;c cảnh b&aacute;o đ&egrave;n trong xe để nhanh ch&oacute;ng đưa xe đến đại l&yacute; sửa chữa.</p>\r\n\r\n<p>Bắt đầu v&agrave;o cuối th&aacute;ng 10 đến, Hyundai y&ecirc;u cầu c&aacute;c xe Santa Fe đời 2013-2015 đến c&aacute;c đại l&yacute; để thay thế cụm thắng ABS bị lỗi.</p>\r\n\r\n<p><strong>Theo Phương Minh (Ph&aacute;p Luật TPHCM)</strong></p>\r\n', 1, '1679024594_532651.jpg'),
(7, ' Bộ sưu tập xuân hè 2023', '<p>Tại Việt Nam, McLaren 720S l&agrave; một trong những d&ograve;ng si&ecirc;u xe phổ biến nhất với số lượng hơn 10 chiếc, cả bản Coupe v&agrave; Spider. Đặc biệt nhất l&agrave; chiếc 720S Coupe của đại gia Vũng T&agrave;u với m&agrave;u t&iacute;m Lantana Purple độc nhất Việt Nam.</p>\r\n', '<p><img alt=\"McLaren 720S với gói độ độc nhất Việt Nam - 1\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/the-gioi/mclaren-720s-1.jpg\" title=\"McLaren 720S với gói độ độc nhất Việt Nam - 1\" /></p>\r\n\r\n<p>Vẫn chưa h&agrave;i l&ograve;ng với m&agrave;u sơn đặc biệt, đại gia n&agrave;y đ&atilde; chi khoản tiền khủng để lột x&aacute;c ho&agrave;n to&agrave;n chiếc si&ecirc;u xe. Cụ thể, chiếc 720S được n&acirc;ng cấp g&oacute;i độ N-Largo của Novitec.</p>\r\n\r\n<p><img alt=\"McLaren 720S với gói độ độc nhất Việt Nam - 2\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/the-gioi/mclaren-720s-2.jpg\" title=\"McLaren 720S với gói độ độc nhất Việt Nam - 2\" /></p>\r\n\r\n<p>Nếu c&aacute;c g&oacute;i độ kh&aacute;c chỉ lắp đặt v&agrave;i chi tiết tăng t&iacute;nh kh&iacute; động học th&igrave; g&oacute;i độ N-Largo thay đổi gần như to&agrave;n bộ ngoại thất xe. Phần th&acirc;n vỏ mới được l&agrave;m bằng carbon, vừa tăng t&iacute;nh thẩm mỹ vừa giảm khối lượng cho xe.</p>\r\n\r\n<p><img alt=\"McLaren 720S với gói độ độc nhất Việt Nam - 3\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/the-gioi/mclaren-720s-3.jpg\" title=\"McLaren 720S với gói độ độc nhất Việt Nam - 3\" /></p>\r\n\r\n<p>Sau khi n&acirc;ng cấp bodykit mới, chiều rộng th&acirc;n xe tăng đ&ocirc;i ch&uacute;t. Cụ thể, v&ograve;m b&aacute;nh trước rộng hơn 60 mm v&agrave; v&ograve;m b&aacute;nh sau rộng hơn 130 mm. Sự thay đổi n&agrave;y vừa tăng vẻ hầm hố cho xe, vừa cung cấp th&ecirc;m kh&ocirc;ng gian để bổ sung c&aacute;c chi tiết kh&iacute; động học.</p>\r\n\r\n<p><img alt=\"McLaren 720S với gói độ độc nhất Việt Nam - 4\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/the-gioi/mclaren-720s-4.jpg\" title=\"McLaren 720S với gói độ độc nhất Việt Nam - 4\" /></p>\r\n\r\n<p>Do si&ecirc;u xe mang m&agrave;u Lantana Purple độc quyền của bộ phận MSO, chủ nh&acirc;n phải đặt h&agrave;ng m&agrave;u sơn n&agrave;y từ McLaren để phủ l&ecirc;n bodykit mới. D&ugrave; kh&ocirc;ng tiết lộ, mức gi&aacute; cho những hộp sơn từ bộ phận MSO kh&aacute; đắt đỏ.</p>\r\n\r\n<p><img alt=\"McLaren 720S với gói độ độc nhất Việt Nam - 5\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/the-gioi/mclaren-720s-5.jpg\" title=\"McLaren 720S với gói độ độc nhất Việt Nam - 5\" /></p>\r\n\r\n<p>Điểm thay đổi nhiều nhất l&agrave; nửa th&acirc;n trước của xe. Nhờ bộ kit mới, phần đầu xe trở n&ecirc;n hầm hố hơn với cảm hứng từ đ&agrave;n anh Senna. V&ograve;m b&aacute;nh xe được bổ sung khe gi&oacute; kh&iacute; động học mới.</p>\r\n\r\n<p><img alt=\"McLaren 720S với gói độ độc nhất Việt Nam - 6\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/the-gioi/mclaren-720s-6.jpg\" title=\"McLaren 720S với gói độ độc nhất Việt Nam - 6\" /></p>\r\n\r\n<p>Bộ m&acirc;m nguy&ecirc;n bản được thay bằng la-zăng đa chấu của Vossen với k&iacute;ch thước 20 inch ở ph&iacute;a trước v&agrave; 21 inch ở ph&iacute;a sau.</p>\r\n\r\n<p><img alt=\"McLaren 720S với gói độ độc nhất Việt Nam - 7\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/the-gioi/mclaren-720s-7.jpg\" title=\"McLaren 720S với gói độ độc nhất Việt Nam - 7\" /></p>\r\n\r\n<p>Để tạo điểm nhấn cho ngoại thất, một số chi tiết được phủ m&agrave;u v&agrave;ng như viền cản trước/sau, viền ốp h&ocirc;ng, khe gi&oacute; tr&ecirc;n v&ograve;m b&aacute;nh trước, kh&oacute;a t&acirc;m b&aacute;nh xe v&agrave; kẹp phanh.</p>\r\n\r\n<p><img alt=\"McLaren 720S với gói độ độc nhất Việt Nam - 8\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/the-gioi/mclaren-720s-8.jpg\" title=\"McLaren 720S với gói độ độc nhất Việt Nam - 8\" /></p>\r\n\r\n<p>Ở ph&iacute;a sau, xe được trang bị c&aacute;nh gi&oacute; mới l&agrave;m bằng carbon. Hệ thống ống xả cũng được n&acirc;ng cấp l&ecirc;n thương hiệu FI Exhaust. Hệ thống ống xả n&agrave;y thuộc d&ograve;ng Signature Titanium, được l&agrave;m từ titanium m&agrave;u v&agrave;ng v&agrave; phần chụp ống xả bằng carbon.</p>\r\n\r\n<p><img alt=\"McLaren 720S với gói độ độc nhất Việt Nam - 9\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/the-gioi/mclaren-720s-9.jpg\" title=\"McLaren 720S với gói độ độc nhất Việt Nam - 9\" /></p>\r\n\r\n<p>Đ&aacute;ng tiếc l&agrave; si&ecirc;u xe n&agrave;y kh&ocirc;ng được n&acirc;ng cấp động cơ. Cung cấp sức mạnh cho 720S vẫn l&agrave; động cơ tăng &aacute;p k&eacute;p V8 4.0L cho c&ocirc;ng suất tối đa 720 m&atilde; lực v&agrave; m&ocirc;-men xoắn 770 Nm. Nhờ sức mạnh n&agrave;y, 720S c&oacute; thể tăng tốc 0-100 km/h chỉ trong 2,9 gi&acirc;y. Nếu được n&acirc;ng cấp hiệu suất theo cấu h&igrave;nh N-Largo, 720S sẽ cho ra c&ocirc;ng suất hơn 800 m&atilde; lực.</p>\r\n\r\n<p><img alt=\"McLaren 720S với gói độ độc nhất Việt Nam - 10\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/the-gioi/mclaren-720s-10.jpg\" title=\"McLaren 720S với gói độ độc nhất Việt Nam - 10\" /></p>\r\n\r\n<p>Qu&aacute; tr&igrave;nh n&acirc;ng cấp g&oacute;i độ N-Largo cho 720S được thực hiện trong khoảng 1 th&aacute;ng với chi ph&iacute; kh&ocirc;ng được tiết lộ. Novitec chỉ sản xuất 15 bộ bodykit N-Largo cho McLaren 720S. Với độ đặc biệt n&agrave;y, chi ph&iacute; cho g&oacute;i độ N-Largo kh&ocirc;ng thấp hơn con số 1 tỷ đồng.</p>\r\n', 1, 'bgbanner2.jpg'),
(8, 'Hướng dẫn phối đồ', '<p>Mặc d&ugrave; Kia Seltos đ&atilde; ra mắt c&aacute;ch đ&acirc;y hơn 1 th&aacute;ng nhưng đến nay, trang chủ fanpage Kia Motors Việt Nam mới c&ocirc;ng bố &quot;ch&iacute;nh thức ra mắt v&agrave; tiến h&agrave;nh b&agrave;n giao xe&quot; từ ng&agrave;y 9/9 tới đ&acirc;y. Nhiều khả năng, đ&acirc;y l&agrave; sự kiện ra mắt xe tổ chức tại đại l&yacute; d&agrave;nh ri&ecirc;ng cho kh&aacute;ch h&agrave;ng, đồng thời l&agrave; sự kiện b&agrave;n giao xe cho những kh&aacute;ch h&agrave;ng đặt đầu ti&ecirc;n.</p>\r\n', '<p>Hiện tại, những chiếc Kia Seltos xuất xưởng đầu ti&ecirc;n đ&atilde; được đưa về đại l&yacute; tr&ecirc;n to&agrave;n quốc. Hầu hết xe thuộc c&aacute;c bản 1.4 Premium v&agrave; 1.4 Luxury. Trong đợt n&agrave;y, những kh&aacute;ch đặt mua bản 1.4 Deluxe v&agrave; 1.6 Premium sẽ chưa c&oacute; xe m&agrave; c&oacute; thể phải đợi sang th&aacute;ng 10. Trong thời gian gần đ&acirc;y, kh&aacute;ch h&agrave;ng cũng kh&ocirc;ng thể đặt cọc được bản 1.6 Premium nữa. Phi&ecirc;n bản n&agrave;y được cho l&agrave; thiếu nguồn cung v&agrave; chưa hẹn ng&agrave;y trở lại.</p>\r\n\r\n<p><iframe scrolling=\"no\"></iframe>X</p>\r\n\r\n<p>Những kh&aacute;ch h&agrave;ng đặt xe đợt đầu sẽ được hưởng mức gi&aacute; ưu đ&atilde;i, với c&aacute;c bản 1.4 Deluxe, 1.4 Luxury, 1.6 Premium v&agrave; 1.4 Premium c&oacute; gi&aacute; lần lượt l&agrave; 589 triệu, 649 triệu, 699 triệu v&agrave; 719 triệu đồng. Theo th&ocirc;ng tin từ đại l&yacute;, kể từ sau ng&agrave;y 9/9, gi&aacute; xe c&oacute; thể sẽ tăng tới cả chục triệu đồng. THACO cũng cho biết mức gi&aacute; c&ocirc;ng bố ban đầu l&agrave; gi&aacute; ưu đ&atilde;i.</p>\r\n\r\n<p><img alt=\"Kia Seltos ồ ạt về đại lý, rục rịch tăng giá, vừa chốt ngày giao đã có phiên bản ‘cháy hàng’ - 1\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/kia-seltos-dl-1-1599381020699842033670-crop-15993811032441209604726.jpg\" title=\"Kia Seltos ồ ạt về đại lý, rục rịch tăng giá, vừa chốt ngày giao đã có phiên bản ‘cháy hàng’ - 1\" /></p>\r\n\r\n<p><img alt=\"Kia Seltos ồ ạt về đại lý, rục rịch tăng giá, vừa chốt ngày giao đã có phiên bản ‘cháy hàng’ - 2\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/kia-seltos-dl-2-15993810207161319403356-crop-1599381125936644499717.jpg\" title=\"Kia Seltos ồ ạt về đại lý, rục rịch tăng giá, vừa chốt ngày giao đã có phiên bản ‘cháy hàng’ - 2\" /></p>\r\n\r\n<p>Kia Seltos l&agrave; một trong những mẫu SUV hạng B mới nhất tr&ecirc;n thị trường v&agrave; cũng l&agrave; mẫu xe ho&agrave;n to&agrave;n mới m&agrave; Kia mang tới Việt Nam. Xe nổi bật với một số trang bị như thiết kế hiện đại, đ&egrave;n chiếu s&aacute;ng LED ho&agrave;n to&agrave;n, như ghế chỉnh điện 10 hướng, l&agrave;m m&aacute;t ghế, đồng hồ t&iacute;ch hợp m&agrave;n h&igrave;nh 7 inch, m&agrave;n h&igrave;nh 10,25 inch hỗ trợ Apple CarPlay/Android Auto, đ&egrave;n nội thất 8 m&agrave;u chỉnh theo điệu nhạc...</p>\r\n\r\n<p>C&oacute; 2 tuỳ chọn động cơ tr&ecirc;n Kia Seltos. M&aacute;y 1,4 l&iacute;t tăng &aacute;p c&oacute; mặt tr&ecirc;n 3 phi&ecirc;n bản, cho c&ocirc;ng suất 138 m&atilde; lực v&agrave; m&ocirc;-men xoắn 242 Nm, kết hợp số 7 cấp ly hợp k&eacute;p. M&aacute;y 1,6 l&iacute;t h&uacute;t kh&iacute; tự nhi&ecirc;n cho c&ocirc;ng suất 121 m&atilde; lực v&agrave; m&ocirc;-men xoắn 151 Nm, kết hợp số tự động 6 cấp. Xe c&oacute; c&aacute;c t&iacute;nh năng an to&agrave;n cơ bản đầy đủ như hỗ trợ phanh (ABS, EBD, BA), c&acirc;n bằng điện tử, hỗ trợ khởi h&agrave;nh ngang dốc v&agrave; kiểm so&aacute;t lực k&eacute;o 3 chế độ...</p>\r\n\r\n<p>Theo dự kiến, từ th&aacute;ng 10 trở đi, Kia Seltos sẽ về th&ecirc;m c&aacute;c phi&ecirc;n bản c&ograve;n lại để giao kh&aacute;ch h&agrave;ng tại đại l&yacute;. Mẫu xe n&agrave;y từ nay đến cuối năm được hưởng ưu đ&atilde;i 50% lệ ph&iacute; trước bạ bởi l&agrave; xe lắp r&aacute;p trong nước.</p>\r\n\r\n<p><strong>Theo Đức Kh&ocirc;i (Ph&aacute;p luật &amp; Bạn đọc)</strong></p>\r\n', 1, 'bgbanner3.jpg'),
(9, 'Siêu khuyến mại 2023', '<p>Trong một v&agrave;i năm qua, việc mua &ocirc;t&ocirc; chạy dịch vụ trở n&ecirc;n phổ biến ở Việt Nam nhờ sự ph&aacute;t triển của c&aacute;c h&igrave;nh thức gọi xe c&ocirc;ng nghệ. B&ecirc;n cạnh xe đ&ocirc; thị tầm gi&aacute; 400 triệu đồng, &ocirc;t&ocirc; 600 triệu đồng cũng l&agrave; ph&acirc;n kh&uacute;c được nhiều người d&ugrave;ng chọn lựa để đầu tư, với c&aacute;c điểm cộng về kh&ocirc;ng gian rộng r&atilde;i, trang bị v&agrave; an to&agrave;n.</p>\r\n', '<p>Ba c&aacute;i t&ecirc;n đ&aacute;ng ch&uacute; &yacute; đại diện cho nh&oacute;m xe dịch vụ tầm 600 triệu đồng hiện nay c&oacute; thể kể đến Toyota Vios, Kia Cerato v&agrave; Suzuki Ertiga.</p>\r\n\r\n<p><strong>Toyota Vios - 470-570 triệu đồng</strong></p>\r\n\r\n<p>Từ l&acirc;u, Toyota Vios lu&ocirc;n l&agrave; c&aacute;i t&ecirc;n được nhắc đến đầu khi c&acirc;n nhắc mua xe hạng B. Kh&ocirc;ng chỉ c&oacute; chi ph&iacute; sử dụng hợp l&yacute; v&agrave; thuận tiện trong việc bảo tr&igrave; bảo dưỡng, Vios c&ograve;n mang thương hiệu Toyota với t&iacute;nh thanh khoản cao. C&aacute;c yếu tố n&agrave;y gi&uacute;p người d&ugrave;ng Vios tối ưu được hiệu quả đầu tư.</p>\r\n\r\n<p>Đầu năm nay, Toyota Việt Nam ra mắt c&aacute;c phi&ecirc;n bản n&acirc;ng cấp 2020 của Vios trước sức &eacute;p cạnh tranh doanh số từ 2 mẫu xe H&agrave;n Quốc l&agrave; Hyundai Accent (426-542 triệu đồng) v&agrave; Kia Soluto (369-469 triệu đồng).</p>\r\n\r\n<p>H&atilde;ng xe Nhật Bản bổ sung trang bị cho c&aacute;c model mới, đồng thời cung cấp th&ecirc;m t&ugrave;y chọn 3 t&uacute;i kh&iacute; hoặc 7 t&uacute;i kh&iacute; cho bản E MT v&agrave; E CVT. Điều n&agrave;y nhằm giảm mức gi&aacute; khởi điểm 20 triệu đồng v&agrave; tiếp cận th&ecirc;m nh&oacute;m kh&aacute;ch h&agrave;ng mua xe chạy dịch vụ. Cụ thể, 5 biến thể Toyota Vios hiện c&oacute; gi&aacute; đề xuất dao động từ 470 đến 570 triệu đồng.</p>\r\n\r\n<p>Những t&iacute;nh năng mới gi&uacute;p Vios bớt phần thua thiệt so với Hyundai Accent hay Honda City (559-599 triệu đồng) về mặt trang bị, gồm c&oacute; hệ thống giải tr&iacute; hỗ trợ kết nối Apple CarPlay/Android Auto, ga tự động, camera l&ugrave;i v&agrave; cảm biến l&ugrave;i. Tuy vậy, thiết kế nội ngoại thất trung t&iacute;nh của Toyota Vios được giữ nguy&ecirc;n. Ưu điểm của Vios l&agrave; kh&ocirc;ng gian cabin rộng r&atilde;i v&agrave; thoải m&aacute;i cho h&agrave;nh kh&aacute;ch.</p>\r\n\r\n<p><img alt=\"Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/the-gioi/xe-dich-vu.jpg\" title=\"Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ\" /></p>\r\n\r\n<p>Toyota Vios vẫn trang bị động cơ xăng I4 1.5L c&oacute; van biến thi&ecirc;n Dual i-VVT, c&ocirc;ng suất đạt 107 m&atilde; lực c&ugrave;ng m&ocirc;-men xoắn 140 Nm. Đi k&egrave;m với đ&oacute; l&agrave; t&ugrave;y chọn hộp số v&ocirc; cấp CVT hoặc hộp số s&agrave;n 5 cấp. Mức ti&ecirc;u thụ nhi&ecirc;n liệu ở điều kiện kết hợp theo nh&agrave; sản xuất c&ocirc;ng bố tương ứng l&agrave; 5,7-5,8 l&iacute;t/100 km.</p>\r\n\r\n<p><iframe scrolling=\"no\"></iframe>X</p>\r\n\r\n<p>T&iacute;nh từ đầu năm đến nay, Toyota Vios vẫn l&agrave; d&ograve;ng xe b&aacute;n tốt nhất tại thị trường Việt Nam. Tổng cộng đ&atilde; c&oacute; hơn 14.055 model Vios được b&aacute;n ra đến hết th&aacute;ng 7, doanh số trung b&igrave;nh 2.000 xe mỗi th&aacute;ng. Trong khi đ&oacute;, doanh số của Accent, City c&ugrave;ng Soluto l&agrave; 9.568, 4.915 v&agrave; 3.606 chiếc.</p>\r\n\r\n<p><strong>Kia Cerato - 529-665 triệu đồng</strong></p>\r\n\r\n<p>Với mức gi&aacute; khởi điểm tương đương một v&agrave;i mẫu xe hạng B, Kia Cerato trội hơn về kh&ocirc;ng gian cũng như c&oacute; khung gầm vững chắc hơn. Ngo&agrave;i ra, t&iacute;nh năng trang bị ở mức kh&aacute; tốt để phục vụ h&agrave;nh kh&aacute;ch gi&uacute;p mẫu sedan H&agrave;n Quốc được chọn lựa để sử dụng l&agrave;m xe dịch vụ.</p>\r\n\r\n<p>Trong c&ugrave;ng nh&oacute;m xe hạng C, Cerato c&oacute; lợi thế về gi&aacute; b&aacute;n cạnh tranh hơn Mazda3 sedan (669-869 triệu đồng), Hyundai Elantra (580-769 triệu đồng), Honda Civic (729-934 triệu đồng) v&agrave; Toyota Corolla Altis (733-763 triệu đồng).</p>\r\n\r\n<p><img alt=\"Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ - 1\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/the-gioi/xe-dich-vu-1.jpg\" title=\"Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ - 1\" /></p>\r\n\r\n<p>Hiện tại, bản Cerato 1.6 MT ti&ecirc;u chuẩn c&oacute; gi&aacute; 529 triệu đồng, trong khi model 2.0 Premium cao cấp c&oacute; gi&aacute; 665 triệu đồng. B&ecirc;n cạnh đ&oacute;, Cerato c&oacute; thiết kế trẻ trung, c&aacute; t&iacute;nh ở cả ngoại thất lẫn khoang l&aacute;i.</p>\r\n\r\n<p>C&aacute;c trang bị đ&aacute;ng ch&uacute; &yacute; ở bản Cerato 2.0 AT Premium c&oacute; thể kể đến như m&agrave;n h&igrave;nh trung t&acirc;m 8 inch, dẫn đường tiếng Việt, sạc điện thoại kh&ocirc;ng d&acirc;y, cửa sổ trời, đ&egrave;n chiếu s&aacute;ng LED&hellip; Tuy nhi&ecirc;n, Kia Cerato ra mắt từ 2018 đến nay chưa c&oacute; đợt n&acirc;ng cấp n&agrave;o n&ecirc;n c&oacute; phần thua thiệt về mặt c&ocirc;ng nghệ an to&agrave;n so với c&aacute;c đối thủ.</p>\r\n\r\n<p><img alt=\"Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ - 2\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/the-gioi/xe-dich-vu-2.jpg\" title=\"Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ - 2\" /></p>\r\n\r\n<p>Kia Cerato c&oacute; 2 t&ugrave;y chọn động cơ xăng, gồm động cơ Gamma 1.6L MPI (128 m&atilde; lực v&agrave; 157 Nm) v&agrave; động cơ Nu 2.0L MPI (159 m&atilde; lực v&agrave; 194 Nm). Đi c&ugrave;ng với đ&oacute; l&agrave; hộp số s&agrave;n 6 cấp ở bản ti&ecirc;u chuẩn v&agrave; hộp số tự động 6 cấp ở 3 phi&ecirc;n bản AT.</p>\r\n\r\n<p>T&iacute;nh đến cuối th&aacute;ng 7/2020, Kia Cerato đang l&agrave; c&aacute;i t&ecirc;n đứng đầu nh&oacute;m xe hạng C, xếp tr&ecirc;n một mẫu xe kh&aacute;c cũng được Thaco lắp r&aacute;p v&agrave; ph&acirc;n phối l&agrave; Mazda3. Cụ thể, Cerato b&aacute;n được 4.815 chiếc, nhỉnh hơn Mazda3 với 4.675 xe (382 chiếc hatchback v&agrave; 4.293 mẫu sedan). Xếp sau c&ograve;n c&oacute; Hyundai Elantra (2.141 chiếc), Honda Civic (1.464 chiếc) v&agrave; Toyota Corolla Altis (1.037 chiếc).</p>\r\n\r\n<p><strong>Suzuki Ertiga - 499-559 triệu đồng</strong></p>\r\n\r\n<p>Ởph&acirc;n kh&uacute;c MPV 7 chỗ cỡ nhỏ, Suzuki Ertiga l&agrave; c&aacute;i t&ecirc;n s&aacute;ng gi&aacute; cho mục đ&iacute;ch sử dụng l&agrave;m xe dịch vụ khi c&oacute; gi&aacute; b&aacute;n thấp hơn c&aacute;c đối thủ. Cụ thể, Suzuki hiện b&aacute;n 3 model l&agrave; Ertiga GL, Limited v&agrave; Sport, với mức gi&aacute; lần lượt 499, 555 v&agrave; 559 triệu đồng.</p>\r\n\r\n<p>Trong khi đ&oacute;, mức gi&aacute; của Toyota Avanza l&agrave; 544-612 triệu đồng, Kia Rondo c&oacute; gi&aacute; dao động 559-655 triệu đồng v&agrave; Mitsubishi Xpander được b&aacute;n với gi&aacute; đề xuất 555-630 triệu đồng.</p>\r\n\r\n<p><img alt=\"Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ - 3\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/the-gioi/xe-dich-vu-3.jpg\" title=\"Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ - 3\" /></p>\r\n\r\n<p>So với mẫu xe đang b&aacute;n chạy nhất ph&acirc;n kh&uacute;c l&agrave; Mitsubishi Xpander, Ertiga c&oacute; thiết kế trung t&iacute;nh hơn. Trong khi đ&oacute;, t&iacute;nh đa dụng l&agrave; tương đương, với cabin thiết kế kiểu 5+2 c&oacute; thể đ&aacute;p được được nhiều nhu cầu di chuyển kh&aacute;c nhau.</p>\r\n\r\n<p>Ở đợt n&acirc;ng cấp th&aacute;ng 6/2020, Suzuki trang bị cho Ertiga 2 chức năng an to&agrave;n l&agrave; hệ thống c&acirc;n bằng điện tử v&agrave; hỗ trợ khởi h&agrave;nh ngang dốc. B&ecirc;n cạnh đ&oacute;, Ertiga 2020 c&oacute; cụm giải tr&iacute; nổi bật với m&agrave;n h&igrave;nh 10 inch lớn nhất ph&acirc;n kh&uacute;c v&agrave; hỗ trợ kết nối Apple CarPlay/Android Auto. Điểm hạn chế của Suzuki Ertiga l&agrave; vẫn chưa c&oacute; t&iacute;nh năng ga tự động v&agrave; ghế bọc da như Xpander.</p>\r\n\r\n<p><img alt=\"Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ - 4\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/the-gioi/xe-dich-vu-4.jpg\" title=\"Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ - 4\" /></p>\r\n\r\n<p>Suzuki trang bị cho Ertiga động cơ xăng I4 dung t&iacute;ch 1.5L, c&ocirc;ng suất tối đa 103 m&atilde; lực v&agrave; m&ocirc;-men xoắn cực đại 138 Nm. Đi c&ugrave;ng với đ&oacute; l&agrave; hộp số tự động 4 cấp hoặc số s&agrave;n 5 cấp. So với c&aacute;c đối thủ, Ertiga c&oacute; mức ti&ecirc;u thụ nhi&ecirc;n liệu tốt hơn, đạt 5,95 l&iacute;t/100 km ở điều kiện hỗn hợp theo c&ocirc;ng bố của nh&agrave; sản xuất.</p>\r\n\r\n<p>Doanh số t&iacute;nh đến hết th&aacute;ng 7/2020 của Suzuki Ertiga l&agrave; 1.651 xe, &iacute;t hơn Mitsubishi Xpander với 7.493 chiếc. Xếp sau mẫu MPV của Suzuki l&agrave; Kia Rondo (640 chiếc) v&agrave; Toyota Avanza (185 chiếc).</p>\r\n\r\n<p><strong>Theo Ho&agrave;ng Phạm (Tri Thức Trực Tuyến)</strong></p>\r\n', 1, 'bgbanner4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `size` int(1) NOT NULL,
  `amount` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(25) NOT NULL,
  `date` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `date`, `price`, `status`, `customer_id`) VALUES
(22, '2023-04-16 20:20:29', 396000, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `hot` int(11) NOT NULL DEFAULT 0,
  `photo` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `discount` int(11) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `hot`, `photo`, `price`, `discount`, `description`, `category_id`) VALUES
(1, 'Áo Polo trơn trắng', 1, 'pl1.jpg', 190000, 5, '<p>Chất liệu : Cotton 250 gsm</p><p>Form dáng : Sleeveless</p><p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p><p>Công nghệ in ấn / thiết kế : in tram</p><p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p> ', 2),
(2, 'Áo Polo trơn sám', 1, 'pl2.jpg', 200000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 2),
(3, 'Áo Polo trơn đen', 1, 'pl3.jpg', 250000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 2),
(4, 'Áo Polo trơn xanh', 1, 'pl4.jpg', 190000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 2),
(5, 'Áo Polo sọc', 0, 'pl5.jpg', 330000, 15, '<p>Chất liệu : Cotton 250 gsm</p><p>Form dáng : Sleeveless</p><p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p><p>Công nghệ in ấn / thiết kế : in tram</p><p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>', 2),
(6, 'Áo Polo sọc đen', 0, 'pl6.jpg', 220000, 10, '<p>Chất liệu : Cotton 250 gsm</p><p>Form dáng : Sleeveless</p><p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p><p>Công nghệ in ấn / thiết kế : in tram</p><p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>', 2),
(7, 'Áo Polo in logo', 0, 'pl7.jpg', 480000, 20, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 2),
(8, 'Áo Polo trơn green', 0, 'pl8.jpg', 250000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 2),
(9, 'Áo Polo full blue', 0, 'pl9.jpg', 248000, 15, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 2),
(10, 'Áo Polo full white', 0, 'pl10.jpg', 348000, 0, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 2),
(11, 'Áo Polo trơn thêu logo ', 0, 'pl11.jpg', 290000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 2),
(12, 'Áo Polo phối sọc white', 0, 'pl12.jpg', 460000, 20, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 2),
(13, 'Áo Polo trơn black', 0, 'pl13.jpg', 620000, 25, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 2),
(14, 'Áo Polo cổ điển xanh', 0, 'pl14.jpg', 330000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 2),
(15, 'Áo Polo coolmade blue', 0, 'pl15.jpg', 180000, 5, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 2),
(16, 'Áo Polo trơn xám ', 1, 'pl16.jpg', 310000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 2),
(17, 'Áo thun ngắn tay trơn', 1, 'at1.jpg', 600000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 3),
(18, 'Áo thun ngắn tay họa tiết 86', 1, 'at2.jpg', 330000, 15, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 3),
(19, 'Áo thun ngắn tay họa tiết white1', 1, 'at3.jpg', 220000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 3),
(20, 'Áo thun ngắn tay họa tiết white2', 1, 'at4.jpg', 480000, 20, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 3),
(21, 'Áo thun ngắn tay họa tiết white3', 1, 'at5.jpg', 250000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 3),
(24, 'Áo thun ngắn tay họa tiết white6', 0, 'at7.jpg', 290000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 3),
(25, 'Áo thun ngắn tay họa tiết white7', 0, 'at8.jpg', 460000, 25, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 3),
(26, 'Áo thun ngắn tay họa tiết white8', 0, 'at9.jpg', 620000, 25, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 3),
(27, 'Áo thun ngắn tay họa tiết black2', 0, 'at10.jpg', 330000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 3),
(28, 'Áo thun ngắn tay họa tiết black1', 0, 'at11.jpg', 180000, 5, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 3),
(29, 'Áo thun ngắn tay họa tiết white', 0, 'at12.jpg', 310000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 3),
(30, 'Áo thun ngắn tay họa tiết black3', 0, 'at13.jpg', 380000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 3),
(31, 'Áo thun ngắn tay họa tiết black4', 0, 'at14.jpg', 650000, 15, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 3),
(32, 'Áo thun ngắn tay họa tiết black6', 0, 'at16.jpg', 220000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 3),
(33, 'Áo sơ mi ngắn tay họa tiết 1', 0, 'sm4.jpg', 480000, 20, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 4),
(34, 'Áo sơ mi ngắn tay họa tiết 2', 1, 'sm5.jpg', 250000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 4),
(35, 'Áo sơ mi ngắn tay phối sọc', 0, 'sm6.jpg', 248000, 15, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 4),
(36, 'Áo sơ mi ngắn tay trắng', 0, 'sm7.jpg', 348000, 0, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 4),
(37, 'Áo sơ mi ngắn tay white', 1, 'sm8.jpg', 290000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 4),
(38, 'Áo sơ mi ngắn tay hàng công sở xanh nhạt', 0, 'sm9.jpg', 460000, 20, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 4),
(39, 'Áo sơ mi ngắn tay black', 0, 'sm10.jpg', 620000, 25, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 4),
(40, 'Áo sơ mi ngắn tay full white cao cấp', 0, 'sm11.jpg', 330000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 4),
(41, 'Áo sơ mi ngắn tay phối kẻ ô', 0, 'sm12.jpg', 180000, 5, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 4),
(42, 'Áo sơ mi ngắn tay thanh lịch', 0, 'sm13.jpg', 310000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 4),
(43, 'Áo sơ mi ngắn tay công sở', 0, 'sm14.jpg', 280000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 4),
(44, 'Áo sơ mi ngắn tay công sở lịch lãm', 0, 'sm15.jpg', 180000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 4),
(45, 'Áo sơ mi ngắn tay phối kẻ', 0, 'sm16.jpg', 580000, 20, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 4),
(46, 'Áo sơ mi ngắn tay đi biển', 1, 'sm3.jpg', 190000, 10, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 4),
(47, 'Áo sơ mi ngắn tay công sở black', 0, 'sm2.jpg', 500000, 20, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 4),
(48, 'Áo sơ mi ngắn tay công sở white', 1, 'sm1.jpg', 600000, 20, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 4),
(49, 'Quần Short thể thao black ', 1, 'q1.jpg', 450000, 20, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 7),
(50, 'Quần Short thể thao ST2', 0, 'q2.jpg', 330000, 15, '<p>Chất liệu : Cotton 250 gsm</p>\r\n<p>Form dáng : Sleeveless</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 7),
(51, 'Quần Short thể thao ST1', 0, 'q3.jpg', 220000, 10, '<p>Chất liệu : Vải dù</p>\r\n<p>Form dáng : Jogger pant</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 7),
(52, 'Quần Short thể thao ST1', 0, 'q4.jpg', 480000, 20, '<p>Chất liệu : Vải dù</p>\r\n<p>Form dáng : Jogger pant</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 7),
(53, 'Thắt lưng da bò xịn', 1, 'pk1.jpg', 500000, 25, '<p>Chất liệu : Da PVU</p>\r\n<p>Form dáng : Không</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 10),
(54, 'Thắt lưng da bò 2', 1, 'pk2.jpg', 330000, 15, '•	Chất liệu : Da PVU\r\n•	Form dáng : Ví gập\r\n•	Cảm hứng thiết kế : Mẫu Sleeveless với phối màu đặc trưng phù hợp với style Punk Rock. Mặt trước được in text theo font chữ gothic, kết hợp với hoạ tiết lửa và hiệu ứng outter glow, tạo nên một thiết kế ấn tượng đối với dáng áo sleeveless này.\r\n•	Công nghệ in ấn / thiết kế : in tram\r\n•	Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow \r\n', 10),
(55, 'Thắt lưng da thật cao cấp', 1, 'pk3.jpg', 220000, 10, '<p>Chất liệu : Da PVU</p>\r\n<p>Form dáng : Không</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 10),
(56, 'Thắt lưng da bò mặt logo', 1, 'pk4.jpg', 480000, 20, '<p>Chất liệu : Da PVU</p>\r\n<p>Form dáng : Không</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 10),
(57, 'Thắt lưng da bò mặt hãng', 0, 'pk5.jpg', 250000, 10, '<p>Chất liệu : Da PVU</p><p>Form dáng : Không</p><p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p><p>Công nghệ in ấn / thiết kế : in tram</p><p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>', 10),
(58, 'Thắt lưng da bò trơn', 0, 'pk6.jpg', 248000, 15, '<p>Chất liệu : Da PVU</p><p>Form dáng : Không</p><p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p><p>Công nghệ in ấn / thiết kế : in tram</p><p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>', 10),
(59, 'Thắt lưng da cá sấu đen', 0, 'pk7.jpg', 348000, 0, '<p>Chất liệu : Da PVU</p><p>Form dáng : Không</p><p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p><p>Công nghệ in ấn / thiết kế : in tram</p><p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>', 10),
(60, 'Thắt lưng da cá sấu  màu nâu', 0, 'pk8.jpg', 290000, 10, '<p>Chất liệu : Da PVU</p>\r\n<p>Form dáng : Không</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 10),
(61, 'Thắt lưng da bò đơn giản', 0, 'pk9.jpg', 460000, 20, '<p>Chất liệu : Da PVU</p>\r\n<p>Form dáng : Không</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 10),
(62, 'Thắt lưng da cá sấu DG', 0, 'pk10.jpg', 620000, 25, '<p>Chất liệu : Da PVU</p>\r\n<p>Form dáng : Không</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 10),
(63, 'Thắt lưng da bò Gucci', 0, 'pk11.jpg', 330000, 10, '<p>Chất liệu : Da PVU</p>\r\n<p>Form dáng : Không</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 10),
(64, 'Thắt lưng da cá sấu cổ điển', 0, 'pk12.jpg', 180000, 5, '<p>Chất liệu : Da PVU</p>\r\n<p>Form dáng : Không</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 10),
(65, 'Thắt lưng da bò cổ điển', 0, 'pk13.jpg', 310000, 10, '<p>Chất liệu : Da PVU</p>\r\n<p>Form dáng : Không</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 10),
(66, 'Thắt lưng da bò I', 0, 'pk14.jpg', 180000, 5, '<p>Chất liệu : Da PVU</p>\r\n<p>Form dáng : Không</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 10),
(67, 'Thắt lưng da cá sấu Gucci G', 0, 'pk15.jpg', 270000, 15, '<p>Chất liệu : Da PVU</p>\r\n<p>Form dáng : Không</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 10),
(68, 'Thắt lưng da cá sấu H', 0, 'pk16.jpg', 570000, 30, '<p>Chất liệu : Da PVU</p>\r\n<p>Form dáng : Không</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 10),
(69, 'Áo khoác chất gió black', 1, 'ak1.jpg', 960000, 10, '<p>Chất liệu : Vải dù</p>\r\n<p>Form dáng : Jogger pant</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 5),
(70, 'Áo khoác nâu cafe', 1, 'ak2.jpg', 990000, 5, '<p>Chất liệu : Vải dù</p>\r\n<p>Form dáng : Over-size</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 5),
(71, 'Áo khoác Vip pro Ak49', 1, 'ak3.jpg', 980000, 10, '<p>Chất liệu : Vải dù</p>\r\n<p>Form dáng : Over-size</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 5),
(72, 'Áo khoác Vip ', 1, 'ak4.jpg', 960000, 10, '<p>Chất liệu : Vải dù</p>\r\n<p>Form dáng : Over-size</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 5),
(73, 'Áo khoác chất phao giữ ấm', 1, 'ak5.jpg', 960000, 5, '<p>Chất liệu : Vải dù</p>\r\n<p>Form dáng : Over-size</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 5),
(74, 'Áo sơ mi dài tay họa tiết chấm bi', 0, 'sm22.jpg', 499000, 11, '<p>Chất liệu : Vải dù</p>\r\n<p>Form dáng : Over-size</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 4),
(75, 'Áo sơ mi dài tay trơn xanh', 0, 'sm21.jpg', 390000, 34, '<p>Chất liệu : Vải dù</p>\r\n<p>Form dáng : Over-size</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 4),
(76, 'Áo sơ mi dài tay trơn white', 0, 'sm23.jpg', 390000, 34, '<p>Chất liệu : Vải dù</p>\r\n<p>Form dáng : Over-size</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 4),
(77, 'Áo sơ mi dài tay họa tiết chấm bi', 0, 'sm20.jpg', 499000, 11, '<p>Chất liệu : Vải dù</p>\r\n<p>Form dáng : Over-size</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 4),
(78, 'Quần âu white', 0, 'qa2.jpg', 499000, 23, '<p>Chất liệu : Vải dù</p>\r\n<p>Form dáng : Over-size</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 13),
(79, 'Quần âu black', 0, 'qa3.jpg', 390000, 12, '<p>Chất liệu : Vải dù</p>\r\n<p>Form dáng : Over-size</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 13),
(80, 'Quần âu xanh than', 0, 'qa4.jpg', 500000, 34, '<p>Chất liệu : Vải dù</p>\r\n<p>Form dáng : Over-size</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 13),
(81, 'Quần âu kẻ sọc', 0, 'qa1.jpg', 499000, 54, '<p>Chất liệu : Vải dù</p>\r\n<p>Form dáng : Over-size</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 13),
(82, 'Quần jean rách gối 1', 0, 'qj1.jpg', 390000, 23, '<p>Chất liệu : Vải dù</p>\r\n<p>Form dáng : Over-size</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 13),
(83, 'Quần jean rách gối blue', 0, 'qj2.jpg', 299000, 50, '<p>Chất liệu : Vải dù</p>\r\n<p>Form dáng : Over-size</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 8),
(84, 'Quần jean basic black', 0, 'qj3.jpg', 399000, 20, '<p>Chất liệu : Vải dù</p>\r\n<p>Form dáng : Over-size</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 8),
(85, 'Quần jean basic blue', 0, 'qj4.jpg', 399000, 60, '<p>Chất liệu : Vải dù</p>\r\n<p>Form dáng : Over-size</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 8),
(86, 'Quần jean basic mèo cào', 0, 'qj5.jpg', 499000, 30, '<p>Chất liệu : Vải dù</p>\r\n<p>Form dáng : Over-size</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 8),
(87, 'Ví da bò nâu', 0, 'v2.jpg', 200000, 10, '<p>Chất liệu : Da PVU</p>\r\n<p>Form dáng : Ví gập</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 11),
(88, 'Ví da bò đen', 0, 'v1.jpg', 190000, 20, '<p>Chất liệu : Da PVU</p>\r\n<p>Form dáng : Ví gập</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 11),
(89, 'Ví LV ngắn', 0, 'v8.jpg', 299000, 40, '<p>Chất liệu : Da PVU</p>\r\n<p>Form dáng : Ví gập</p>\r\n<p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p>\r\n<p>Công nghệ in ấn / thiết kế : in tram</p>\r\n<p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>\r\n', 11),
(90, 'Ví LV dài', 0, 'v6.jpg', 399000, 10, '<p>Chất liệu : Da PVU</p><p>Form dáng : Ví gập</p><p>Cảm hứng thiết kế : Mẫu Sleeveless với phối màu xám wash đặc trưng phù hợp với style Punk Rock.</p><p>Công nghệ in ấn / thiết kế : in tram</p><p>Chi tiết đặc biệt : Graphic được thiết kế in tạo hiệu ứng glow</p>', 11);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id_s` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id_s`, `name`) VALUES
(1, 'M'),
(2, 'L'),
(3, 'XL');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `isadmin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `isadmin`) VALUES
(1, 'Nguyễn Văn A', 'anha@gmail.com', '123456', 1),
(2, 'Nguyễn Văn B', 'nvb@gmail.com', '123456', 1),
(3, 'Nguyễn Văn C', 'nvc@gmail.com', 'abcdef', 2),
(4, 'Nguyễn Văn D', 'nvD@gmail.com', 'abc1234', 2),
(5, 'Nguyễn Văn E ', 'nve@gmail.com', '123456', 2),
(6, 'admin', 'admin@gmail.com', 'admin123', 0),
(7, 'Nguyen Thi G', 'ngthig@gmail.com', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amount`
--
ALTER TABLE `amount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id_s`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amount`
--
ALTER TABLE `amount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id_s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
