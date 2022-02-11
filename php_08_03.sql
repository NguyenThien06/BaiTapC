-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 14, 2021 lúc 12:41 PM
-- Phiên bản máy phục vụ: 5.7.24
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php_08_03`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_thumb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `customer_id`, `product_id`, `price`, `qty`, `product_name`, `product_thumb`) VALUES
(4, 2, 37, 2500000, 2, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(5, 2, 39, 289000, 5, 'Set Son và Nước Hoa Charme', '/uploads/2021/05/31/product-01.jpg'),
(6, 2, 47, 2500000, 4, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(7, 3, 37, 2500000, 2, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(8, 3, 39, 289000, 5, 'Set Son và Nước Hoa Charme', '/uploads/2021/05/31/product-01.jpg'),
(9, 3, 47, 2500000, 4, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(10, 4, 37, 2500000, 2, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(11, 4, 39, 289000, 5, 'Set Son và Nước Hoa Charme', '/uploads/2021/05/31/product-01.jpg'),
(12, 4, 47, 2500000, 4, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(13, 5, 42, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(14, 5, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(15, 6, 42, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(16, 6, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(17, 7, 42, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(18, 7, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(19, 8, 42, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(20, 8, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(21, 9, 42, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(22, 9, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(23, 10, 42, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(24, 10, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(25, 11, 42, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(26, 11, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(27, 12, 42, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(28, 12, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(29, 13, 42, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(30, 13, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(31, 14, 42, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(32, 14, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(33, 15, 42, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(34, 15, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(35, 16, 42, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(36, 16, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(37, 17, 42, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(38, 17, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(39, 18, 42, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(40, 18, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(41, 19, 42, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(42, 19, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(43, 20, 42, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(44, 20, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(45, 21, 42, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(46, 21, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(47, 22, 42, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(48, 22, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(49, 23, 42, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(50, 23, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(51, 24, 42, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(52, 24, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(53, 25, 47, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(54, 26, 47, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(55, 27, 47, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg'),
(56, 28, 48, 190000, 1, 'Front Pocket Jumper', '/uploads/2021/05/31/product-05.jpg'),
(57, 29, 47, 2500000, 1, 'Classic Trench Coat', '/uploads/2021/05/31/product-04.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `is_view` int(1) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `code`, `phone`, `address`, `email`, `content`, `is_view`, `created_at`, `updated_at`) VALUES
(2, 'Phan Hồng Văn', '0G4vFk', '2986598755', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'Giao hàng trong giờ hành chính', 0, '2021-06-09 13:36:23', '2021-06-09 13:36:23'),
(3, 'Phan Hồng Văn', 'QMh4lm', '2986598755', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'Giao hàng trong giờ hành chính', 0, '2021-06-09 13:37:23', '2021-06-09 13:37:23'),
(4, 'Phan Hồng Văn', 'HJe8RS', '2986598755', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'Giao hàng trong giờ hành chính', 0, '2021-06-09 13:39:21', '2021-06-09 13:39:21'),
(5, 'Bộ Sưu Tập Mùa Thu', 'HxuHoh', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', '', 0, '2021-06-09 13:52:06', '2021-06-09 13:52:06'),
(6, 'Bộ Sưu Tập Mùa Hè', 'R4zmcC', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'sdsd', 0, '2021-06-09 13:52:34', '2021-06-09 13:52:34'),
(7, 'Bộ Sưu Tập Mùa Hè', 'RYbj3O', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'sdsd', 0, '2021-06-09 13:52:59', '2021-06-09 13:52:59'),
(8, 'Bộ Sưu Tập Mùa Hè', '6vLCG9', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'sdsd', 0, '2021-06-09 13:53:33', '2021-06-09 13:53:33'),
(9, 'Bộ Sưu Tập Mùa Thu', 'mvJq8D', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'sdsds', 0, '2021-06-09 14:04:53', '2021-06-09 14:04:53'),
(10, 'Bộ Sưu Tập Mùa Thu', '0ge5pn', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'sdsds', 0, '2021-06-09 14:07:00', '2021-06-09 14:07:00'),
(11, 'Bộ Sưu Tập Mùa Thu', 'eRROI3', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'sdsds', 0, '2021-06-09 14:07:36', '2021-06-09 14:07:36'),
(12, 'Bộ Sưu Tập Mùa Thu', 'ORGd3z', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'sdsds', 0, '2021-06-09 14:07:59', '2021-06-09 14:07:59'),
(13, 'Bộ Sưu Tập Mùa Thu', 'getSVT', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'sdsds', 0, '2021-06-09 14:08:40', '2021-06-09 14:08:40'),
(14, 'Bộ Sưu Tập Mùa Thu', 'm6FHkD', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'sdsds', 0, '2021-06-09 14:09:52', '2021-06-09 14:09:52'),
(15, 'Bộ Sưu Tập Mùa Thu', 'uhIkfy', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'sdsds', 0, '2021-06-09 14:10:54', '2021-06-09 14:10:54'),
(16, 'Bộ Sưu Tập Mùa Thu', '9WsEIU', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'sdsds', 0, '2021-06-09 14:12:06', '2021-06-09 14:12:06'),
(17, 'Bộ Sưu Tập Mùa Thu', 'p9kOIg', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'sdsdsd', 0, '2021-06-09 14:13:29', '2021-06-09 14:13:29'),
(18, 'Bộ Sưu Tập Mùa Thu', 'CojY7t', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'sdsdsd', 0, '2021-06-09 14:14:58', '2021-06-09 14:14:58'),
(19, 'Bộ Sưu Tập Mùa Hè', '0313Fl', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'sdsdsdsd', 0, '2021-06-09 14:15:39', '2021-06-09 14:15:39'),
(20, 'Bộ Sưu Tập Mùa Hè', 'ijA3tn', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'sdsdsd', 0, '2021-06-09 14:17:44', '2021-06-09 14:17:44'),
(21, 'Bộ Sưu Tập Mùa Thu', 't3D1ES', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'sdsdsd', 0, '2021-06-09 14:19:01', '2021-06-09 14:19:01'),
(22, 'Bộ Sưu Tập Mùa Hè', 'XLh31u', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', '', 0, '2021-06-09 14:32:43', '2021-06-09 14:32:43'),
(23, 'Bộ Sưu Tập Mùa Thu', 'nARiJf', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'sdsdsd@gmail.com', '', 0, '2021-06-09 14:36:43', '2021-06-09 14:36:43'),
(24, 'Bộ Sưu Tập Mùa Thu', 'qMpHn3', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'sdsdsd@gmail.com', '', 0, '2021-06-09 14:37:17', '2021-06-09 14:37:17'),
(25, 'Bộ Sưu Tập Mùa Hè', '70o3W1', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', '', 0, '2021-06-09 14:38:08', '2021-06-09 14:38:08'),
(26, 'Bộ Sưu Tập Mùa Hè', '5wNfLj', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', '', 0, '2021-06-09 14:38:23', '2021-06-09 14:38:23'),
(27, 'Bộ Sưu Tập Mùa Hè', 'onktbH', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', '', 0, '2021-06-09 14:38:59', '2021-06-09 14:38:59'),
(28, 'Bộ Sưu Tập Mùa Hè', 'JXSE9m', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'sdsd', 0, '2021-06-09 14:52:34', '2021-06-09 14:52:34'),
(29, 'Bộ Sưu Tập Mùa Thu', 'yXg7YK', '0123456789', '758 Phạm Văn Chiêu Gò Vấp', 'phanhongvan1992@gmail.com', 'dsads', 0, '2021-06-09 14:55:29', '2021-06-09 14:55:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(20) NOT NULL,
  `description` text NOT NULL,
  `order_by` int(20) NOT NULL,
  `active` int(1) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `parent_id`, `description`, `order_by`, `active`, `created_at`, `updated_at`) VALUES
(12, 'Nước Hoa Nam', 0, 'sdsd', 0, 1, '2021-05-21 14:16:45', '2021-05-24 12:58:45'),
(13, 'Bộ Sưu Tập Mùa Hè', 12, 'Bộ Sưu Tập Mùa Hè', 1, 1, '2021-05-28 13:13:58', '2021-05-28 13:13:58'),
(14, 'Bộ Sưu Tập Mùa Xuân', 12, 'Bộ Sưu Tập Mùa Xuân', 1, 1, '2021-05-28 13:14:06', '2021-05-28 13:14:06'),
(15, 'Bộ Sưu Tập Mùa Thu', 12, 'Bộ Sưu Tập Mùa Thu', 1, 1, '2021-05-28 13:14:14', '2021-05-28 13:14:14'),
(16, 'Bộ Sưu Tập Mùa Đông', 12, 'Bộ Sưu Tập Mùa Đông', 1, 1, '2021-05-28 13:14:22', '2021-05-28 13:14:22'),
(17, 'Nước Hoa Nữ', 0, 'Nước Hoa Nữ', 1, 1, '2021-05-28 13:14:29', '2021-05-28 13:14:29'),
(18, 'Bộ Sưu Tập Mùa Xuân', 17, 'Bộ Sưu Tập Mùa Xuân', 1, 1, '2021-05-28 13:14:38', '2021-05-28 13:14:38'),
(19, 'Bộ Sưu Tập Mùa Hè', 17, 'Bộ Sưu Tập Mùa Hè', 1, 1, '2021-05-28 13:14:46', '2021-05-28 13:14:46'),
(20, 'Bộ Sưu Tập Mùa Thu', 17, 'Bộ Sưu Tập Mùa Thu', 1, 1, '2021-05-28 13:14:55', '2021-05-28 13:14:55'),
(21, 'Bộ Sưu Tập Mùa Đông', 17, 'Bộ Sưu Tập Mùa Đông', 1, 1, '2021-05-28 13:15:07', '2021-05-28 13:15:07'),
(22, 'Nước Hoa Khuyến Mãi', 0, 'Nước Hoa Khuyến Mãi', 1, 1, '2021-05-28 13:15:41', '2021-05-28 13:15:41'),
(23, 'Nước Hoa ABC', 0, 'Mô tả về nước hoa', 1, 1, '2021-06-14 13:20:48', '2021-06-14 13:20:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `menu_id` int(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(255) NOT NULL,
  `price_sale` int(255) NOT NULL,
  `content` longtext NOT NULL,
  `file` varchar(255) NOT NULL,
  `active` int(1) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `menu_id`, `description`, `price`, `price_sale`, `content`, `file`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Set Son và Nước Hoa Charme', 12, 'Set son và nước hoa Charme là bộ sản phẩm với 3 mùi hương khác nhau dễ dàng thay thế cho việc sử dụng nước hoa khác nhau ở nhiều bối cảnh như dạo phố, dạ tiệc, liên hoan. Kèm theo son môi cũng là lựa chọn khá tiện lợi cho Bạn làm đẹp bờ môi của mình nhanh chóng và đơn giãn. Với thiết kế nhỏ gọn kèm theo vừa là nước hoa vừa son môi. Rất tiện lợi khi mang theo bộ Set son và nước hoa charme này.', 299000, 289000, '&lt;p&gt;&lt;strong&gt;Set son v&amp;agrave; nước hoa Charme l&amp;agrave; bộ sản phẩm với 3 m&amp;ugrave;i hương kh&amp;aacute;c nhau dễ d&amp;agrave;ng thay thế cho việc sử dụng nước hoa kh&amp;aacute;c nhau ở nhiều bối cảnh như dạo phố, dạ tiệc, li&amp;ecirc;n hoan. K&amp;egrave;m theo son m&amp;ocirc;i cũng l&amp;agrave; lựa chọn kh&amp;aacute; tiện lợi cho Bạn l&amp;agrave;m đẹp bờ m&amp;ocirc;i của m&amp;igrave;nh nhanh ch&amp;oacute;ng v&amp;agrave; đơn gi&amp;atilde;n. Với thiết kế nhỏ gọn k&amp;egrave;m theo vừa l&amp;agrave; nước hoa vừa son m&amp;ocirc;i. Rất tiện lợi khi mang theo bộ Set son v&amp;agrave; nước hoa charme n&amp;agrave;y.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Set Son V&amp;agrave; Nước Hoa Charme c&amp;oacute; 2 đầu sử dụng, 1 đầu l&amp;agrave; son c&amp;oacute; sẵn m&amp;agrave;u hồng, đầu kia để gắn nước hoa v&amp;agrave; bạn c&amp;oacute; thể thay đổi 1 trong 3 ống nước hoa c&amp;oacute; sẵn.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;Set son và nước hoa Charme &quot; src=&quot;https://nuochoacharme.top/upload/product/set-son-nuoc-hoa.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Nước Hoa th&amp;igrave; c&amp;oacute; 3 m&amp;ugrave;i hương tổng hợp kh&amp;aacute;c nhau, từ nhẹ nh&amp;agrave;ng đến sexy quyến rũ. C&amp;oacute; thể thay thế ph&amp;ugrave; hợp khi cần sử dụng chỉ cần r&amp;uacute;t đầu ống ra v&amp;agrave; gắn ống kh&amp;aacute;c v&amp;agrave;o l&amp;agrave; đ&amp;atilde; d&amp;ugrave;ng được rồi.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;BỘ GỒM 1 SON M&amp;Agrave;U ĐỎ CAM V&amp;Agrave; 3 LOẠI NƯỚC HOA NỮ:&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- Good Girl:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- Omnia:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- So Sexy:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;blockquote&gt;\r\n&lt;p&gt;&lt;strong&gt;Nồng độ:&lt;/strong&gt; Eau De Parfum&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Dung t&amp;iacute;ch&lt;/strong&gt;: 4.5ml/1 chai&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Loại nước hoa:&lt;/strong&gt; Nữ&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ tuổi khuy&amp;ecirc;n d&amp;ugrave;ng:&lt;/strong&gt; ph&amp;ugrave; hợp với mọi độ tuổi&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Phong c&amp;aacute;ch:&lt;/strong&gt; đa phong c&amp;aacute;ch&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Bối cảnh sử dụng:&lt;/strong&gt; Mọi trường hợp, dạ tiệc, hẹn h&amp;ograve;, tham gia sự kiện,...&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ lưu hương:&lt;/strong&gt; L&amp;acirc;u - 7 giờ đến 12 giờ tr&amp;ecirc;n da v&amp;agrave; 3-5 ng&amp;agrave;y tr&amp;ecirc;n quần &amp;aacute;o.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ tỏa hương:&lt;/strong&gt; Xa - tỏa hương trong v&amp;ograve;ng b&amp;aacute;n k&amp;iacute;nh 2m&lt;/p&gt;\r\n&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;C&amp;Aacute;CH SỬ DỤNG:&lt;/strong&gt; Xịt ở v&amp;ugrave;ng cổ tay, g&amp;oacute;t ch&amp;acirc;n, n&amp;aacute;ch, cổ, ngực, sau g&amp;aacute;y tai, t&amp;oacute;c, rốn. N&amp;ecirc;n thoa kem dưỡng da sau đ&amp;oacute; xịt nước hoa sẽ gi&amp;uacute;p lưu giữ m&amp;ugrave;i hương l&amp;acirc;u hơn.&lt;/p&gt;\r\n\r\n&lt;p&gt;Bảo quản: Để nơi kh&amp;ocirc; r&amp;aacute;o, tho&amp;aacute;ng m&amp;aacute;t. Tr&amp;aacute;nh tiếp x&amp;uacute;c trực tiếp với mắt v&amp;agrave; tr&amp;aacute;nh xa tầm tay trẻ em.&lt;/p&gt;\r\n\r\n&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;', '/uploads/2021/05/31/product-01.jpg', 1, '2021-05-24 13:51:26', '2021-05-31 13:08:09'),
(5, 'Herschel supply', 12, 'Herschel supply', 250000, 240000, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Herschel supply &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-02.jpg', 1, '2021-05-31 13:08:31', '2021-05-31 13:08:31'),
(6, 'Only Check Trouser', 12, 'Only Check Trouser', 0, 0, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Only Check Trouser &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-03.jpg', 1, '2021-05-31 13:08:44', '2021-05-31 13:08:44'),
(7, 'Classic Trench Coat', 12, 'Classic Trench Coat', 2500000, 0, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Classic Trench Coat &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-04.jpg', 1, '2021-05-31 13:08:57', '2021-05-31 13:08:57'),
(8, 'Front Pocket Jumper', 12, 'Front Pocket Jumper', 200000, 190000, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Front Pocket Jumper &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-05.jpg', 1, '2021-05-31 13:09:16', '2021-05-31 13:09:16'),
(9, 'Set Son và Nước Hoa Charme', 12, 'Set son và nước hoa Charme là bộ sản phẩm với 3 mùi hương khác nhau dễ dàng thay thế cho việc sử dụng nước hoa khác nhau ở nhiều bối cảnh như dạo phố, dạ tiệc, liên hoan. Kèm theo son môi cũng là lựa chọn khá tiện lợi cho Bạn làm đẹp bờ môi của mình nhanh chóng và đơn giãn. Với thiết kế nhỏ gọn kèm theo vừa là nước hoa vừa son môi. Rất tiện lợi khi mang theo bộ Set son và nước hoa charme này.', 299000, 289000, '&lt;p&gt;&lt;strong&gt;Set son v&amp;agrave; nước hoa Charme l&amp;agrave; bộ sản phẩm với 3 m&amp;ugrave;i hương kh&amp;aacute;c nhau dễ d&amp;agrave;ng thay thế cho việc sử dụng nước hoa kh&amp;aacute;c nhau ở nhiều bối cảnh như dạo phố, dạ tiệc, li&amp;ecirc;n hoan. K&amp;egrave;m theo son m&amp;ocirc;i cũng l&amp;agrave; lựa chọn kh&amp;aacute; tiện lợi cho Bạn l&amp;agrave;m đẹp bờ m&amp;ocirc;i của m&amp;igrave;nh nhanh ch&amp;oacute;ng v&amp;agrave; đơn gi&amp;atilde;n. Với thiết kế nhỏ gọn k&amp;egrave;m theo vừa l&amp;agrave; nước hoa vừa son m&amp;ocirc;i. Rất tiện lợi khi mang theo bộ Set son v&amp;agrave; nước hoa charme n&amp;agrave;y.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Set Son V&amp;agrave; Nước Hoa Charme c&amp;oacute; 2 đầu sử dụng, 1 đầu l&amp;agrave; son c&amp;oacute; sẵn m&amp;agrave;u hồng, đầu kia để gắn nước hoa v&amp;agrave; bạn c&amp;oacute; thể thay đổi 1 trong 3 ống nước hoa c&amp;oacute; sẵn.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;Set son và nước hoa Charme &quot; src=&quot;https://nuochoacharme.top/upload/product/set-son-nuoc-hoa.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Nước Hoa th&amp;igrave; c&amp;oacute; 3 m&amp;ugrave;i hương tổng hợp kh&amp;aacute;c nhau, từ nhẹ nh&amp;agrave;ng đến sexy quyến rũ. C&amp;oacute; thể thay thế ph&amp;ugrave; hợp khi cần sử dụng chỉ cần r&amp;uacute;t đầu ống ra v&amp;agrave; gắn ống kh&amp;aacute;c v&amp;agrave;o l&amp;agrave; đ&amp;atilde; d&amp;ugrave;ng được rồi.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;BỘ GỒM 1 SON M&amp;Agrave;U ĐỎ CAM V&amp;Agrave; 3 LOẠI NƯỚC HOA NỮ:&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- Good Girl:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- Omnia:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- So Sexy:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;blockquote&gt;\r\n&lt;p&gt;&lt;strong&gt;Nồng độ:&lt;/strong&gt; Eau De Parfum&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Dung t&amp;iacute;ch&lt;/strong&gt;: 4.5ml/1 chai&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Loại nước hoa:&lt;/strong&gt; Nữ&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ tuổi khuy&amp;ecirc;n d&amp;ugrave;ng:&lt;/strong&gt; ph&amp;ugrave; hợp với mọi độ tuổi&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Phong c&amp;aacute;ch:&lt;/strong&gt; đa phong c&amp;aacute;ch&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Bối cảnh sử dụng:&lt;/strong&gt; Mọi trường hợp, dạ tiệc, hẹn h&amp;ograve;, tham gia sự kiện,...&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ lưu hương:&lt;/strong&gt; L&amp;acirc;u - 7 giờ đến 12 giờ tr&amp;ecirc;n da v&amp;agrave; 3-5 ng&amp;agrave;y tr&amp;ecirc;n quần &amp;aacute;o.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ tỏa hương:&lt;/strong&gt; Xa - tỏa hương trong v&amp;ograve;ng b&amp;aacute;n k&amp;iacute;nh 2m&lt;/p&gt;\r\n&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;C&amp;Aacute;CH SỬ DỤNG:&lt;/strong&gt; Xịt ở v&amp;ugrave;ng cổ tay, g&amp;oacute;t ch&amp;acirc;n, n&amp;aacute;ch, cổ, ngực, sau g&amp;aacute;y tai, t&amp;oacute;c, rốn. N&amp;ecirc;n thoa kem dưỡng da sau đ&amp;oacute; xịt nước hoa sẽ gi&amp;uacute;p lưu giữ m&amp;ugrave;i hương l&amp;acirc;u hơn.&lt;/p&gt;\r\n\r\n&lt;p&gt;Bảo quản: Để nơi kh&amp;ocirc; r&amp;aacute;o, tho&amp;aacute;ng m&amp;aacute;t. Tr&amp;aacute;nh tiếp x&amp;uacute;c trực tiếp với mắt v&amp;agrave; tr&amp;aacute;nh xa tầm tay trẻ em.&lt;/p&gt;\r\n\r\n&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;', '/uploads/2021/05/31/product-01.jpg', 1, '2021-05-24 06:51:26', '2021-05-31 06:08:09'),
(10, 'Herschel supply', 12, 'Herschel supply', 250000, 240000, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Herschel supply &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-02.jpg', 1, '2021-05-31 06:08:31', '2021-05-31 06:08:31'),
(11, 'Only Check Trouser', 12, 'Only Check Trouser', 0, 0, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Only Check Trouser &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-03.jpg', 1, '2021-05-31 06:08:44', '2021-05-31 06:08:44'),
(12, 'Classic Trench Coat', 12, 'Classic Trench Coat', 2500000, 0, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Classic Trench Coat &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-04.jpg', 1, '2021-05-31 06:08:57', '2021-05-31 06:08:57'),
(13, 'Front Pocket Jumper', 12, 'Front Pocket Jumper', 200000, 190000, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Front Pocket Jumper &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-05.jpg', 1, '2021-05-31 06:09:16', '2021-05-31 06:09:16'),
(14, 'Set Son và Nước Hoa Charme', 12, 'Set son và nước hoa Charme là bộ sản phẩm với 3 mùi hương khác nhau dễ dàng thay thế cho việc sử dụng nước hoa khác nhau ở nhiều bối cảnh như dạo phố, dạ tiệc, liên hoan. Kèm theo son môi cũng là lựa chọn khá tiện lợi cho Bạn làm đẹp bờ môi của mình nhanh chóng và đơn giãn. Với thiết kế nhỏ gọn kèm theo vừa là nước hoa vừa son môi. Rất tiện lợi khi mang theo bộ Set son và nước hoa charme này.', 299000, 289000, '&lt;p&gt;&lt;strong&gt;Set son v&amp;agrave; nước hoa Charme l&amp;agrave; bộ sản phẩm với 3 m&amp;ugrave;i hương kh&amp;aacute;c nhau dễ d&amp;agrave;ng thay thế cho việc sử dụng nước hoa kh&amp;aacute;c nhau ở nhiều bối cảnh như dạo phố, dạ tiệc, li&amp;ecirc;n hoan. K&amp;egrave;m theo son m&amp;ocirc;i cũng l&amp;agrave; lựa chọn kh&amp;aacute; tiện lợi cho Bạn l&amp;agrave;m đẹp bờ m&amp;ocirc;i của m&amp;igrave;nh nhanh ch&amp;oacute;ng v&amp;agrave; đơn gi&amp;atilde;n. Với thiết kế nhỏ gọn k&amp;egrave;m theo vừa l&amp;agrave; nước hoa vừa son m&amp;ocirc;i. Rất tiện lợi khi mang theo bộ Set son v&amp;agrave; nước hoa charme n&amp;agrave;y.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Set Son V&amp;agrave; Nước Hoa Charme c&amp;oacute; 2 đầu sử dụng, 1 đầu l&amp;agrave; son c&amp;oacute; sẵn m&amp;agrave;u hồng, đầu kia để gắn nước hoa v&amp;agrave; bạn c&amp;oacute; thể thay đổi 1 trong 3 ống nước hoa c&amp;oacute; sẵn.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;Set son và nước hoa Charme &quot; src=&quot;https://nuochoacharme.top/upload/product/set-son-nuoc-hoa.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Nước Hoa th&amp;igrave; c&amp;oacute; 3 m&amp;ugrave;i hương tổng hợp kh&amp;aacute;c nhau, từ nhẹ nh&amp;agrave;ng đến sexy quyến rũ. C&amp;oacute; thể thay thế ph&amp;ugrave; hợp khi cần sử dụng chỉ cần r&amp;uacute;t đầu ống ra v&amp;agrave; gắn ống kh&amp;aacute;c v&amp;agrave;o l&amp;agrave; đ&amp;atilde; d&amp;ugrave;ng được rồi.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;BỘ GỒM 1 SON M&amp;Agrave;U ĐỎ CAM V&amp;Agrave; 3 LOẠI NƯỚC HOA NỮ:&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- Good Girl:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- Omnia:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- So Sexy:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;blockquote&gt;\r\n&lt;p&gt;&lt;strong&gt;Nồng độ:&lt;/strong&gt; Eau De Parfum&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Dung t&amp;iacute;ch&lt;/strong&gt;: 4.5ml/1 chai&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Loại nước hoa:&lt;/strong&gt; Nữ&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ tuổi khuy&amp;ecirc;n d&amp;ugrave;ng:&lt;/strong&gt; ph&amp;ugrave; hợp với mọi độ tuổi&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Phong c&amp;aacute;ch:&lt;/strong&gt; đa phong c&amp;aacute;ch&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Bối cảnh sử dụng:&lt;/strong&gt; Mọi trường hợp, dạ tiệc, hẹn h&amp;ograve;, tham gia sự kiện,...&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ lưu hương:&lt;/strong&gt; L&amp;acirc;u - 7 giờ đến 12 giờ tr&amp;ecirc;n da v&amp;agrave; 3-5 ng&amp;agrave;y tr&amp;ecirc;n quần &amp;aacute;o.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ tỏa hương:&lt;/strong&gt; Xa - tỏa hương trong v&amp;ograve;ng b&amp;aacute;n k&amp;iacute;nh 2m&lt;/p&gt;\r\n&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;C&amp;Aacute;CH SỬ DỤNG:&lt;/strong&gt; Xịt ở v&amp;ugrave;ng cổ tay, g&amp;oacute;t ch&amp;acirc;n, n&amp;aacute;ch, cổ, ngực, sau g&amp;aacute;y tai, t&amp;oacute;c, rốn. N&amp;ecirc;n thoa kem dưỡng da sau đ&amp;oacute; xịt nước hoa sẽ gi&amp;uacute;p lưu giữ m&amp;ugrave;i hương l&amp;acirc;u hơn.&lt;/p&gt;\r\n\r\n&lt;p&gt;Bảo quản: Để nơi kh&amp;ocirc; r&amp;aacute;o, tho&amp;aacute;ng m&amp;aacute;t. Tr&amp;aacute;nh tiếp x&amp;uacute;c trực tiếp với mắt v&amp;agrave; tr&amp;aacute;nh xa tầm tay trẻ em.&lt;/p&gt;\r\n\r\n&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;', '/uploads/2021/05/31/product-01.jpg', 1, '2021-05-24 06:51:26', '2021-05-31 06:08:09'),
(15, 'Herschel supply', 12, 'Herschel supply', 250000, 240000, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Herschel supply &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-02.jpg', 1, '2021-05-31 06:08:31', '2021-05-31 06:08:31'),
(16, 'Only Check Trouser', 12, 'Only Check Trouser', 0, 0, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Only Check Trouser &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-03.jpg', 1, '2021-05-31 06:08:44', '2021-05-31 06:08:44'),
(17, 'Classic Trench Coat', 12, 'Classic Trench Coat', 2500000, 0, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Classic Trench Coat &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-04.jpg', 1, '2021-05-31 06:08:57', '2021-05-31 06:08:57'),
(18, 'Front Pocket Jumper', 12, 'Front Pocket Jumper', 200000, 190000, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Front Pocket Jumper &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-05.jpg', 1, '2021-05-31 06:09:16', '2021-05-31 06:09:16'),
(19, 'Set Son và Nước Hoa Charme', 12, 'Set son và nước hoa Charme là bộ sản phẩm với 3 mùi hương khác nhau dễ dàng thay thế cho việc sử dụng nước hoa khác nhau ở nhiều bối cảnh như dạo phố, dạ tiệc, liên hoan. Kèm theo son môi cũng là lựa chọn khá tiện lợi cho Bạn làm đẹp bờ môi của mình nhanh chóng và đơn giãn. Với thiết kế nhỏ gọn kèm theo vừa là nước hoa vừa son môi. Rất tiện lợi khi mang theo bộ Set son và nước hoa charme này.', 299000, 289000, '&lt;p&gt;&lt;strong&gt;Set son v&amp;agrave; nước hoa Charme l&amp;agrave; bộ sản phẩm với 3 m&amp;ugrave;i hương kh&amp;aacute;c nhau dễ d&amp;agrave;ng thay thế cho việc sử dụng nước hoa kh&amp;aacute;c nhau ở nhiều bối cảnh như dạo phố, dạ tiệc, li&amp;ecirc;n hoan. K&amp;egrave;m theo son m&amp;ocirc;i cũng l&amp;agrave; lựa chọn kh&amp;aacute; tiện lợi cho Bạn l&amp;agrave;m đẹp bờ m&amp;ocirc;i của m&amp;igrave;nh nhanh ch&amp;oacute;ng v&amp;agrave; đơn gi&amp;atilde;n. Với thiết kế nhỏ gọn k&amp;egrave;m theo vừa l&amp;agrave; nước hoa vừa son m&amp;ocirc;i. Rất tiện lợi khi mang theo bộ Set son v&amp;agrave; nước hoa charme n&amp;agrave;y.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Set Son V&amp;agrave; Nước Hoa Charme c&amp;oacute; 2 đầu sử dụng, 1 đầu l&amp;agrave; son c&amp;oacute; sẵn m&amp;agrave;u hồng, đầu kia để gắn nước hoa v&amp;agrave; bạn c&amp;oacute; thể thay đổi 1 trong 3 ống nước hoa c&amp;oacute; sẵn.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;Set son và nước hoa Charme &quot; src=&quot;https://nuochoacharme.top/upload/product/set-son-nuoc-hoa.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Nước Hoa th&amp;igrave; c&amp;oacute; 3 m&amp;ugrave;i hương tổng hợp kh&amp;aacute;c nhau, từ nhẹ nh&amp;agrave;ng đến sexy quyến rũ. C&amp;oacute; thể thay thế ph&amp;ugrave; hợp khi cần sử dụng chỉ cần r&amp;uacute;t đầu ống ra v&amp;agrave; gắn ống kh&amp;aacute;c v&amp;agrave;o l&amp;agrave; đ&amp;atilde; d&amp;ugrave;ng được rồi.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;BỘ GỒM 1 SON M&amp;Agrave;U ĐỎ CAM V&amp;Agrave; 3 LOẠI NƯỚC HOA NỮ:&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- Good Girl:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- Omnia:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- So Sexy:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;blockquote&gt;\r\n&lt;p&gt;&lt;strong&gt;Nồng độ:&lt;/strong&gt; Eau De Parfum&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Dung t&amp;iacute;ch&lt;/strong&gt;: 4.5ml/1 chai&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Loại nước hoa:&lt;/strong&gt; Nữ&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ tuổi khuy&amp;ecirc;n d&amp;ugrave;ng:&lt;/strong&gt; ph&amp;ugrave; hợp với mọi độ tuổi&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Phong c&amp;aacute;ch:&lt;/strong&gt; đa phong c&amp;aacute;ch&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Bối cảnh sử dụng:&lt;/strong&gt; Mọi trường hợp, dạ tiệc, hẹn h&amp;ograve;, tham gia sự kiện,...&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ lưu hương:&lt;/strong&gt; L&amp;acirc;u - 7 giờ đến 12 giờ tr&amp;ecirc;n da v&amp;agrave; 3-5 ng&amp;agrave;y tr&amp;ecirc;n quần &amp;aacute;o.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ tỏa hương:&lt;/strong&gt; Xa - tỏa hương trong v&amp;ograve;ng b&amp;aacute;n k&amp;iacute;nh 2m&lt;/p&gt;\r\n&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;C&amp;Aacute;CH SỬ DỤNG:&lt;/strong&gt; Xịt ở v&amp;ugrave;ng cổ tay, g&amp;oacute;t ch&amp;acirc;n, n&amp;aacute;ch, cổ, ngực, sau g&amp;aacute;y tai, t&amp;oacute;c, rốn. N&amp;ecirc;n thoa kem dưỡng da sau đ&amp;oacute; xịt nước hoa sẽ gi&amp;uacute;p lưu giữ m&amp;ugrave;i hương l&amp;acirc;u hơn.&lt;/p&gt;\r\n\r\n&lt;p&gt;Bảo quản: Để nơi kh&amp;ocirc; r&amp;aacute;o, tho&amp;aacute;ng m&amp;aacute;t. Tr&amp;aacute;nh tiếp x&amp;uacute;c trực tiếp với mắt v&amp;agrave; tr&amp;aacute;nh xa tầm tay trẻ em.&lt;/p&gt;\r\n\r\n&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;', '/uploads/2021/05/31/product-01.jpg', 1, '2021-05-24 06:51:26', '2021-05-31 06:08:09'),
(20, 'Herschel supply', 12, 'Herschel supply', 250000, 240000, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Herschel supply &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-02.jpg', 1, '2021-05-31 06:08:31', '2021-05-31 06:08:31'),
(21, 'Only Check Trouser', 12, 'Only Check Trouser', 0, 0, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Only Check Trouser &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-03.jpg', 1, '2021-05-31 06:08:44', '2021-05-31 06:08:44'),
(22, 'Classic Trench Coat', 12, 'Classic Trench Coat', 2500000, 0, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Classic Trench Coat &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-04.jpg', 1, '2021-05-31 06:08:57', '2021-05-31 06:08:57'),
(23, 'Front Pocket Jumper', 12, 'Front Pocket Jumper', 200000, 190000, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Front Pocket Jumper &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-05.jpg', 1, '2021-05-31 06:09:16', '2021-05-31 06:09:16'),
(24, 'Set Son và Nước Hoa Charme', 12, 'Set son và nước hoa Charme là bộ sản phẩm với 3 mùi hương khác nhau dễ dàng thay thế cho việc sử dụng nước hoa khác nhau ở nhiều bối cảnh như dạo phố, dạ tiệc, liên hoan. Kèm theo son môi cũng là lựa chọn khá tiện lợi cho Bạn làm đẹp bờ môi của mình nhanh chóng và đơn giãn. Với thiết kế nhỏ gọn kèm theo vừa là nước hoa vừa son môi. Rất tiện lợi khi mang theo bộ Set son và nước hoa charme này.', 299000, 289000, '&lt;p&gt;&lt;strong&gt;Set son v&amp;agrave; nước hoa Charme l&amp;agrave; bộ sản phẩm với 3 m&amp;ugrave;i hương kh&amp;aacute;c nhau dễ d&amp;agrave;ng thay thế cho việc sử dụng nước hoa kh&amp;aacute;c nhau ở nhiều bối cảnh như dạo phố, dạ tiệc, li&amp;ecirc;n hoan. K&amp;egrave;m theo son m&amp;ocirc;i cũng l&amp;agrave; lựa chọn kh&amp;aacute; tiện lợi cho Bạn l&amp;agrave;m đẹp bờ m&amp;ocirc;i của m&amp;igrave;nh nhanh ch&amp;oacute;ng v&amp;agrave; đơn gi&amp;atilde;n. Với thiết kế nhỏ gọn k&amp;egrave;m theo vừa l&amp;agrave; nước hoa vừa son m&amp;ocirc;i. Rất tiện lợi khi mang theo bộ Set son v&amp;agrave; nước hoa charme n&amp;agrave;y.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Set Son V&amp;agrave; Nước Hoa Charme c&amp;oacute; 2 đầu sử dụng, 1 đầu l&amp;agrave; son c&amp;oacute; sẵn m&amp;agrave;u hồng, đầu kia để gắn nước hoa v&amp;agrave; bạn c&amp;oacute; thể thay đổi 1 trong 3 ống nước hoa c&amp;oacute; sẵn.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;Set son và nước hoa Charme &quot; src=&quot;https://nuochoacharme.top/upload/product/set-son-nuoc-hoa.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Nước Hoa th&amp;igrave; c&amp;oacute; 3 m&amp;ugrave;i hương tổng hợp kh&amp;aacute;c nhau, từ nhẹ nh&amp;agrave;ng đến sexy quyến rũ. C&amp;oacute; thể thay thế ph&amp;ugrave; hợp khi cần sử dụng chỉ cần r&amp;uacute;t đầu ống ra v&amp;agrave; gắn ống kh&amp;aacute;c v&amp;agrave;o l&amp;agrave; đ&amp;atilde; d&amp;ugrave;ng được rồi.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;BỘ GỒM 1 SON M&amp;Agrave;U ĐỎ CAM V&amp;Agrave; 3 LOẠI NƯỚC HOA NỮ:&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- Good Girl:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- Omnia:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- So Sexy:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;blockquote&gt;\r\n&lt;p&gt;&lt;strong&gt;Nồng độ:&lt;/strong&gt; Eau De Parfum&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Dung t&amp;iacute;ch&lt;/strong&gt;: 4.5ml/1 chai&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Loại nước hoa:&lt;/strong&gt; Nữ&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ tuổi khuy&amp;ecirc;n d&amp;ugrave;ng:&lt;/strong&gt; ph&amp;ugrave; hợp với mọi độ tuổi&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Phong c&amp;aacute;ch:&lt;/strong&gt; đa phong c&amp;aacute;ch&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Bối cảnh sử dụng:&lt;/strong&gt; Mọi trường hợp, dạ tiệc, hẹn h&amp;ograve;, tham gia sự kiện,...&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ lưu hương:&lt;/strong&gt; L&amp;acirc;u - 7 giờ đến 12 giờ tr&amp;ecirc;n da v&amp;agrave; 3-5 ng&amp;agrave;y tr&amp;ecirc;n quần &amp;aacute;o.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ tỏa hương:&lt;/strong&gt; Xa - tỏa hương trong v&amp;ograve;ng b&amp;aacute;n k&amp;iacute;nh 2m&lt;/p&gt;\r\n&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;C&amp;Aacute;CH SỬ DỤNG:&lt;/strong&gt; Xịt ở v&amp;ugrave;ng cổ tay, g&amp;oacute;t ch&amp;acirc;n, n&amp;aacute;ch, cổ, ngực, sau g&amp;aacute;y tai, t&amp;oacute;c, rốn. N&amp;ecirc;n thoa kem dưỡng da sau đ&amp;oacute; xịt nước hoa sẽ gi&amp;uacute;p lưu giữ m&amp;ugrave;i hương l&amp;acirc;u hơn.&lt;/p&gt;\r\n\r\n&lt;p&gt;Bảo quản: Để nơi kh&amp;ocirc; r&amp;aacute;o, tho&amp;aacute;ng m&amp;aacute;t. Tr&amp;aacute;nh tiếp x&amp;uacute;c trực tiếp với mắt v&amp;agrave; tr&amp;aacute;nh xa tầm tay trẻ em.&lt;/p&gt;\r\n\r\n&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;', '/uploads/2021/05/31/product-01.jpg', 1, '2021-05-24 06:51:26', '2021-05-31 06:08:09'),
(25, 'Herschel supply', 12, 'Herschel supply', 250000, 240000, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Herschel supply &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-02.jpg', 1, '2021-05-31 06:08:31', '2021-05-31 06:08:31'),
(26, 'Only Check Trouser', 12, 'Only Check Trouser', 0, 0, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Only Check Trouser &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-03.jpg', 1, '2021-05-31 06:08:44', '2021-05-31 06:08:44'),
(27, 'Classic Trench Coat', 12, 'Classic Trench Coat', 2500000, 0, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Classic Trench Coat &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-04.jpg', 1, '2021-05-31 06:08:57', '2021-05-31 06:08:57'),
(28, 'Front Pocket Jumper', 12, 'Front Pocket Jumper', 200000, 190000, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Front Pocket Jumper &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-05.jpg', 1, '2021-05-31 06:09:16', '2021-05-31 06:09:16'),
(29, 'Set Son và Nước Hoa Charme', 12, 'Set son và nước hoa Charme là bộ sản phẩm với 3 mùi hương khác nhau dễ dàng thay thế cho việc sử dụng nước hoa khác nhau ở nhiều bối cảnh như dạo phố, dạ tiệc, liên hoan. Kèm theo son môi cũng là lựa chọn khá tiện lợi cho Bạn làm đẹp bờ môi của mình nhanh chóng và đơn giãn. Với thiết kế nhỏ gọn kèm theo vừa là nước hoa vừa son môi. Rất tiện lợi khi mang theo bộ Set son và nước hoa charme này.', 299000, 289000, '&lt;p&gt;&lt;strong&gt;Set son v&amp;agrave; nước hoa Charme l&amp;agrave; bộ sản phẩm với 3 m&amp;ugrave;i hương kh&amp;aacute;c nhau dễ d&amp;agrave;ng thay thế cho việc sử dụng nước hoa kh&amp;aacute;c nhau ở nhiều bối cảnh như dạo phố, dạ tiệc, li&amp;ecirc;n hoan. K&amp;egrave;m theo son m&amp;ocirc;i cũng l&amp;agrave; lựa chọn kh&amp;aacute; tiện lợi cho Bạn l&amp;agrave;m đẹp bờ m&amp;ocirc;i của m&amp;igrave;nh nhanh ch&amp;oacute;ng v&amp;agrave; đơn gi&amp;atilde;n. Với thiết kế nhỏ gọn k&amp;egrave;m theo vừa l&amp;agrave; nước hoa vừa son m&amp;ocirc;i. Rất tiện lợi khi mang theo bộ Set son v&amp;agrave; nước hoa charme n&amp;agrave;y.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Set Son V&amp;agrave; Nước Hoa Charme c&amp;oacute; 2 đầu sử dụng, 1 đầu l&amp;agrave; son c&amp;oacute; sẵn m&amp;agrave;u hồng, đầu kia để gắn nước hoa v&amp;agrave; bạn c&amp;oacute; thể thay đổi 1 trong 3 ống nước hoa c&amp;oacute; sẵn.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;Set son và nước hoa Charme &quot; src=&quot;https://nuochoacharme.top/upload/product/set-son-nuoc-hoa.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Nước Hoa th&amp;igrave; c&amp;oacute; 3 m&amp;ugrave;i hương tổng hợp kh&amp;aacute;c nhau, từ nhẹ nh&amp;agrave;ng đến sexy quyến rũ. C&amp;oacute; thể thay thế ph&amp;ugrave; hợp khi cần sử dụng chỉ cần r&amp;uacute;t đầu ống ra v&amp;agrave; gắn ống kh&amp;aacute;c v&amp;agrave;o l&amp;agrave; đ&amp;atilde; d&amp;ugrave;ng được rồi.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;BỘ GỒM 1 SON M&amp;Agrave;U ĐỎ CAM V&amp;Agrave; 3 LOẠI NƯỚC HOA NỮ:&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- Good Girl:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- Omnia:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- So Sexy:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;blockquote&gt;\r\n&lt;p&gt;&lt;strong&gt;Nồng độ:&lt;/strong&gt; Eau De Parfum&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Dung t&amp;iacute;ch&lt;/strong&gt;: 4.5ml/1 chai&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Loại nước hoa:&lt;/strong&gt; Nữ&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ tuổi khuy&amp;ecirc;n d&amp;ugrave;ng:&lt;/strong&gt; ph&amp;ugrave; hợp với mọi độ tuổi&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Phong c&amp;aacute;ch:&lt;/strong&gt; đa phong c&amp;aacute;ch&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Bối cảnh sử dụng:&lt;/strong&gt; Mọi trường hợp, dạ tiệc, hẹn h&amp;ograve;, tham gia sự kiện,...&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ lưu hương:&lt;/strong&gt; L&amp;acirc;u - 7 giờ đến 12 giờ tr&amp;ecirc;n da v&amp;agrave; 3-5 ng&amp;agrave;y tr&amp;ecirc;n quần &amp;aacute;o.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ tỏa hương:&lt;/strong&gt; Xa - tỏa hương trong v&amp;ograve;ng b&amp;aacute;n k&amp;iacute;nh 2m&lt;/p&gt;\r\n&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;C&amp;Aacute;CH SỬ DỤNG:&lt;/strong&gt; Xịt ở v&amp;ugrave;ng cổ tay, g&amp;oacute;t ch&amp;acirc;n, n&amp;aacute;ch, cổ, ngực, sau g&amp;aacute;y tai, t&amp;oacute;c, rốn. N&amp;ecirc;n thoa kem dưỡng da sau đ&amp;oacute; xịt nước hoa sẽ gi&amp;uacute;p lưu giữ m&amp;ugrave;i hương l&amp;acirc;u hơn.&lt;/p&gt;\r\n\r\n&lt;p&gt;Bảo quản: Để nơi kh&amp;ocirc; r&amp;aacute;o, tho&amp;aacute;ng m&amp;aacute;t. Tr&amp;aacute;nh tiếp x&amp;uacute;c trực tiếp với mắt v&amp;agrave; tr&amp;aacute;nh xa tầm tay trẻ em.&lt;/p&gt;\r\n\r\n&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;', '/uploads/2021/05/31/product-01.jpg', 1, '2021-05-24 06:51:26', '2021-05-31 06:08:09'),
(30, 'Herschel supply', 12, 'Herschel supply', 250000, 240000, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Herschel supply &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-02.jpg', 1, '2021-05-31 06:08:31', '2021-05-31 06:08:31'),
(31, 'Only Check Trouser', 12, 'Only Check Trouser', 0, 0, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Only Check Trouser &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-03.jpg', 1, '2021-05-31 06:08:44', '2021-05-31 06:08:44'),
(32, 'Classic Trench Coat', 12, 'Classic Trench Coat', 2500000, 0, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Classic Trench Coat &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-04.jpg', 1, '2021-05-31 06:08:57', '2021-05-31 06:08:57'),
(33, 'Front Pocket Jumper', 12, 'Front Pocket Jumper', 200000, 190000, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Front Pocket Jumper &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-05.jpg', 1, '2021-05-31 06:09:16', '2021-05-31 06:09:16'),
(34, 'Set Son và Nước Hoa Charme', 12, 'Set son và nước hoa Charme là bộ sản phẩm với 3 mùi hương khác nhau dễ dàng thay thế cho việc sử dụng nước hoa khác nhau ở nhiều bối cảnh như dạo phố, dạ tiệc, liên hoan. Kèm theo son môi cũng là lựa chọn khá tiện lợi cho Bạn làm đẹp bờ môi của mình nhanh chóng và đơn giãn. Với thiết kế nhỏ gọn kèm theo vừa là nước hoa vừa son môi. Rất tiện lợi khi mang theo bộ Set son và nước hoa charme này.', 299000, 289000, '&lt;p&gt;&lt;strong&gt;Set son v&amp;agrave; nước hoa Charme l&amp;agrave; bộ sản phẩm với 3 m&amp;ugrave;i hương kh&amp;aacute;c nhau dễ d&amp;agrave;ng thay thế cho việc sử dụng nước hoa kh&amp;aacute;c nhau ở nhiều bối cảnh như dạo phố, dạ tiệc, li&amp;ecirc;n hoan. K&amp;egrave;m theo son m&amp;ocirc;i cũng l&amp;agrave; lựa chọn kh&amp;aacute; tiện lợi cho Bạn l&amp;agrave;m đẹp bờ m&amp;ocirc;i của m&amp;igrave;nh nhanh ch&amp;oacute;ng v&amp;agrave; đơn gi&amp;atilde;n. Với thiết kế nhỏ gọn k&amp;egrave;m theo vừa l&amp;agrave; nước hoa vừa son m&amp;ocirc;i. Rất tiện lợi khi mang theo bộ Set son v&amp;agrave; nước hoa charme n&amp;agrave;y.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Set Son V&amp;agrave; Nước Hoa Charme c&amp;oacute; 2 đầu sử dụng, 1 đầu l&amp;agrave; son c&amp;oacute; sẵn m&amp;agrave;u hồng, đầu kia để gắn nước hoa v&amp;agrave; bạn c&amp;oacute; thể thay đổi 1 trong 3 ống nước hoa c&amp;oacute; sẵn.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;Set son và nước hoa Charme &quot; src=&quot;https://nuochoacharme.top/upload/product/set-son-nuoc-hoa.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Nước Hoa th&amp;igrave; c&amp;oacute; 3 m&amp;ugrave;i hương tổng hợp kh&amp;aacute;c nhau, từ nhẹ nh&amp;agrave;ng đến sexy quyến rũ. C&amp;oacute; thể thay thế ph&amp;ugrave; hợp khi cần sử dụng chỉ cần r&amp;uacute;t đầu ống ra v&amp;agrave; gắn ống kh&amp;aacute;c v&amp;agrave;o l&amp;agrave; đ&amp;atilde; d&amp;ugrave;ng được rồi.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;BỘ GỒM 1 SON M&amp;Agrave;U ĐỎ CAM V&amp;Agrave; 3 LOẠI NƯỚC HOA NỮ:&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- Good Girl:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- Omnia:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- So Sexy:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;blockquote&gt;\r\n&lt;p&gt;&lt;strong&gt;Nồng độ:&lt;/strong&gt; Eau De Parfum&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Dung t&amp;iacute;ch&lt;/strong&gt;: 4.5ml/1 chai&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Loại nước hoa:&lt;/strong&gt; Nữ&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ tuổi khuy&amp;ecirc;n d&amp;ugrave;ng:&lt;/strong&gt; ph&amp;ugrave; hợp với mọi độ tuổi&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Phong c&amp;aacute;ch:&lt;/strong&gt; đa phong c&amp;aacute;ch&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Bối cảnh sử dụng:&lt;/strong&gt; Mọi trường hợp, dạ tiệc, hẹn h&amp;ograve;, tham gia sự kiện,...&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ lưu hương:&lt;/strong&gt; L&amp;acirc;u - 7 giờ đến 12 giờ tr&amp;ecirc;n da v&amp;agrave; 3-5 ng&amp;agrave;y tr&amp;ecirc;n quần &amp;aacute;o.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ tỏa hương:&lt;/strong&gt; Xa - tỏa hương trong v&amp;ograve;ng b&amp;aacute;n k&amp;iacute;nh 2m&lt;/p&gt;\r\n&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;C&amp;Aacute;CH SỬ DỤNG:&lt;/strong&gt; Xịt ở v&amp;ugrave;ng cổ tay, g&amp;oacute;t ch&amp;acirc;n, n&amp;aacute;ch, cổ, ngực, sau g&amp;aacute;y tai, t&amp;oacute;c, rốn. N&amp;ecirc;n thoa kem dưỡng da sau đ&amp;oacute; xịt nước hoa sẽ gi&amp;uacute;p lưu giữ m&amp;ugrave;i hương l&amp;acirc;u hơn.&lt;/p&gt;\r\n\r\n&lt;p&gt;Bảo quản: Để nơi kh&amp;ocirc; r&amp;aacute;o, tho&amp;aacute;ng m&amp;aacute;t. Tr&amp;aacute;nh tiếp x&amp;uacute;c trực tiếp với mắt v&amp;agrave; tr&amp;aacute;nh xa tầm tay trẻ em.&lt;/p&gt;\r\n\r\n&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;', '/uploads/2021/05/31/product-01.jpg', 1, '2021-05-24 06:51:26', '2021-05-31 06:08:09'),
(35, 'Herschel supply', 12, 'Herschel supply', 250000, 240000, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Herschel supply &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-02.jpg', 1, '2021-05-31 06:08:31', '2021-05-31 06:08:31'),
(36, 'Only Check Trouser', 12, 'Only Check Trouser', 0, 0, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Only Check Trouser &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-03.jpg', 1, '2021-05-31 06:08:44', '2021-05-31 06:08:44'),
(37, 'Classic Trench Coat', 12, 'Classic Trench Coat', 2500000, 0, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Classic Trench Coat &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-04.jpg', 1, '2021-05-31 06:08:57', '2021-05-31 06:08:57'),
(38, 'Front Pocket Jumper', 12, 'Front Pocket Jumper', 200000, 190000, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Front Pocket Jumper &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-05.jpg', 1, '2021-05-31 06:09:16', '2021-05-31 06:09:16'),
(39, 'Set Son và Nước Hoa Charme', 12, 'Set son và nước hoa Charme là bộ sản phẩm với 3 mùi hương khác nhau dễ dàng thay thế cho việc sử dụng nước hoa khác nhau ở nhiều bối cảnh như dạo phố, dạ tiệc, liên hoan. Kèm theo son môi cũng là lựa chọn khá tiện lợi cho Bạn làm đẹp bờ môi của mình nhanh chóng và đơn giãn. Với thiết kế nhỏ gọn kèm theo vừa là nước hoa vừa son môi. Rất tiện lợi khi mang theo bộ Set son và nước hoa charme này.', 299000, 289000, '&lt;p&gt;&lt;strong&gt;Set son v&amp;agrave; nước hoa Charme l&amp;agrave; bộ sản phẩm với 3 m&amp;ugrave;i hương kh&amp;aacute;c nhau dễ d&amp;agrave;ng thay thế cho việc sử dụng nước hoa kh&amp;aacute;c nhau ở nhiều bối cảnh như dạo phố, dạ tiệc, li&amp;ecirc;n hoan. K&amp;egrave;m theo son m&amp;ocirc;i cũng l&amp;agrave; lựa chọn kh&amp;aacute; tiện lợi cho Bạn l&amp;agrave;m đẹp bờ m&amp;ocirc;i của m&amp;igrave;nh nhanh ch&amp;oacute;ng v&amp;agrave; đơn gi&amp;atilde;n. Với thiết kế nhỏ gọn k&amp;egrave;m theo vừa l&amp;agrave; nước hoa vừa son m&amp;ocirc;i. Rất tiện lợi khi mang theo bộ Set son v&amp;agrave; nước hoa charme n&amp;agrave;y.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Set Son V&amp;agrave; Nước Hoa Charme c&amp;oacute; 2 đầu sử dụng, 1 đầu l&amp;agrave; son c&amp;oacute; sẵn m&amp;agrave;u hồng, đầu kia để gắn nước hoa v&amp;agrave; bạn c&amp;oacute; thể thay đổi 1 trong 3 ống nước hoa c&amp;oacute; sẵn.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;Set son và nước hoa Charme &quot; src=&quot;https://nuochoacharme.top/upload/product/set-son-nuoc-hoa.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Nước Hoa th&amp;igrave; c&amp;oacute; 3 m&amp;ugrave;i hương tổng hợp kh&amp;aacute;c nhau, từ nhẹ nh&amp;agrave;ng đến sexy quyến rũ. C&amp;oacute; thể thay thế ph&amp;ugrave; hợp khi cần sử dụng chỉ cần r&amp;uacute;t đầu ống ra v&amp;agrave; gắn ống kh&amp;aacute;c v&amp;agrave;o l&amp;agrave; đ&amp;atilde; d&amp;ugrave;ng được rồi.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;BỘ GỒM 1 SON M&amp;Agrave;U ĐỎ CAM V&amp;Agrave; 3 LOẠI NƯỚC HOA NỮ:&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- Good Girl:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- Omnia:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- So Sexy:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;blockquote&gt;\r\n&lt;p&gt;&lt;strong&gt;Nồng độ:&lt;/strong&gt; Eau De Parfum&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Dung t&amp;iacute;ch&lt;/strong&gt;: 4.5ml/1 chai&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Loại nước hoa:&lt;/strong&gt; Nữ&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ tuổi khuy&amp;ecirc;n d&amp;ugrave;ng:&lt;/strong&gt; ph&amp;ugrave; hợp với mọi độ tuổi&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Phong c&amp;aacute;ch:&lt;/strong&gt; đa phong c&amp;aacute;ch&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Bối cảnh sử dụng:&lt;/strong&gt; Mọi trường hợp, dạ tiệc, hẹn h&amp;ograve;, tham gia sự kiện,...&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ lưu hương:&lt;/strong&gt; L&amp;acirc;u - 7 giờ đến 12 giờ tr&amp;ecirc;n da v&amp;agrave; 3-5 ng&amp;agrave;y tr&amp;ecirc;n quần &amp;aacute;o.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ tỏa hương:&lt;/strong&gt; Xa - tỏa hương trong v&amp;ograve;ng b&amp;aacute;n k&amp;iacute;nh 2m&lt;/p&gt;\r\n&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;C&amp;Aacute;CH SỬ DỤNG:&lt;/strong&gt; Xịt ở v&amp;ugrave;ng cổ tay, g&amp;oacute;t ch&amp;acirc;n, n&amp;aacute;ch, cổ, ngực, sau g&amp;aacute;y tai, t&amp;oacute;c, rốn. N&amp;ecirc;n thoa kem dưỡng da sau đ&amp;oacute; xịt nước hoa sẽ gi&amp;uacute;p lưu giữ m&amp;ugrave;i hương l&amp;acirc;u hơn.&lt;/p&gt;\r\n\r\n&lt;p&gt;Bảo quản: Để nơi kh&amp;ocirc; r&amp;aacute;o, tho&amp;aacute;ng m&amp;aacute;t. Tr&amp;aacute;nh tiếp x&amp;uacute;c trực tiếp với mắt v&amp;agrave; tr&amp;aacute;nh xa tầm tay trẻ em.&lt;/p&gt;\r\n\r\n&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;', '/uploads/2021/05/31/product-01.jpg', 1, '2021-05-24 06:51:26', '2021-05-31 06:08:09'),
(40, 'Herschel supply', 12, 'Herschel supply', 250000, 240000, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Herschel supply &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-02.jpg', 1, '2021-05-31 06:08:31', '2021-05-31 06:08:31'),
(41, 'Only Check Trouser', 12, 'Only Check Trouser', 0, 0, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Only Check Trouser &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-03.jpg', 1, '2021-05-31 06:08:44', '2021-05-31 06:08:44'),
(42, 'Classic Trench Coat', 12, 'Classic Trench Coat', 2500000, 0, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Classic Trench Coat &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-04.jpg', 1, '2021-05-31 06:08:57', '2021-05-31 06:08:57'),
(43, 'Front Pocket Jumper', 12, 'Front Pocket Jumper', 200000, 190000, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Front Pocket Jumper &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-05.jpg', 1, '2021-05-31 06:09:16', '2021-05-31 06:09:16'),
(44, 'Set Son và Nước Hoa Charme', 12, 'Set son và nước hoa Charme là bộ sản phẩm với 3 mùi hương khác nhau dễ dàng thay thế cho việc sử dụng nước hoa khác nhau ở nhiều bối cảnh như dạo phố, dạ tiệc, liên hoan. Kèm theo son môi cũng là lựa chọn khá tiện lợi cho Bạn làm đẹp bờ môi của mình nhanh chóng và đơn giãn. Với thiết kế nhỏ gọn kèm theo vừa là nước hoa vừa son môi. Rất tiện lợi khi mang theo bộ Set son và nước hoa charme này.', 299000, 289000, '&lt;p&gt;&lt;strong&gt;Set son v&amp;agrave; nước hoa Charme l&amp;agrave; bộ sản phẩm với 3 m&amp;ugrave;i hương kh&amp;aacute;c nhau dễ d&amp;agrave;ng thay thế cho việc sử dụng nước hoa kh&amp;aacute;c nhau ở nhiều bối cảnh như dạo phố, dạ tiệc, li&amp;ecirc;n hoan. K&amp;egrave;m theo son m&amp;ocirc;i cũng l&amp;agrave; lựa chọn kh&amp;aacute; tiện lợi cho Bạn l&amp;agrave;m đẹp bờ m&amp;ocirc;i của m&amp;igrave;nh nhanh ch&amp;oacute;ng v&amp;agrave; đơn gi&amp;atilde;n. Với thiết kế nhỏ gọn k&amp;egrave;m theo vừa l&amp;agrave; nước hoa vừa son m&amp;ocirc;i. Rất tiện lợi khi mang theo bộ Set son v&amp;agrave; nước hoa charme n&amp;agrave;y.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Set Son V&amp;agrave; Nước Hoa Charme c&amp;oacute; 2 đầu sử dụng, 1 đầu l&amp;agrave; son c&amp;oacute; sẵn m&amp;agrave;u hồng, đầu kia để gắn nước hoa v&amp;agrave; bạn c&amp;oacute; thể thay đổi 1 trong 3 ống nước hoa c&amp;oacute; sẵn.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;Set son và nước hoa Charme &quot; src=&quot;https://nuochoacharme.top/upload/product/set-son-nuoc-hoa.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Nước Hoa th&amp;igrave; c&amp;oacute; 3 m&amp;ugrave;i hương tổng hợp kh&amp;aacute;c nhau, từ nhẹ nh&amp;agrave;ng đến sexy quyến rũ. C&amp;oacute; thể thay thế ph&amp;ugrave; hợp khi cần sử dụng chỉ cần r&amp;uacute;t đầu ống ra v&amp;agrave; gắn ống kh&amp;aacute;c v&amp;agrave;o l&amp;agrave; đ&amp;atilde; d&amp;ugrave;ng được rồi.&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;strong&gt;BỘ GỒM 1 SON M&amp;Agrave;U ĐỎ CAM V&amp;Agrave; 3 LOẠI NƯỚC HOA NỮ:&lt;/strong&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- Good Girl:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- Omnia:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;- So Sexy:&lt;/strong&gt; Hương hoa cỏ, tr&amp;aacute;i c&amp;acirc;y&lt;/p&gt;\r\n\r\n&lt;blockquote&gt;\r\n&lt;p&gt;&lt;strong&gt;Nồng độ:&lt;/strong&gt; Eau De Parfum&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Dung t&amp;iacute;ch&lt;/strong&gt;: 4.5ml/1 chai&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Loại nước hoa:&lt;/strong&gt; Nữ&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ tuổi khuy&amp;ecirc;n d&amp;ugrave;ng:&lt;/strong&gt; ph&amp;ugrave; hợp với mọi độ tuổi&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Phong c&amp;aacute;ch:&lt;/strong&gt; đa phong c&amp;aacute;ch&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Bối cảnh sử dụng:&lt;/strong&gt; Mọi trường hợp, dạ tiệc, hẹn h&amp;ograve;, tham gia sự kiện,...&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ lưu hương:&lt;/strong&gt; L&amp;acirc;u - 7 giờ đến 12 giờ tr&amp;ecirc;n da v&amp;agrave; 3-5 ng&amp;agrave;y tr&amp;ecirc;n quần &amp;aacute;o.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Độ tỏa hương:&lt;/strong&gt; Xa - tỏa hương trong v&amp;ograve;ng b&amp;aacute;n k&amp;iacute;nh 2m&lt;/p&gt;\r\n&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;C&amp;Aacute;CH SỬ DỤNG:&lt;/strong&gt; Xịt ở v&amp;ugrave;ng cổ tay, g&amp;oacute;t ch&amp;acirc;n, n&amp;aacute;ch, cổ, ngực, sau g&amp;aacute;y tai, t&amp;oacute;c, rốn. N&amp;ecirc;n thoa kem dưỡng da sau đ&amp;oacute; xịt nước hoa sẽ gi&amp;uacute;p lưu giữ m&amp;ugrave;i hương l&amp;acirc;u hơn.&lt;/p&gt;\r\n\r\n&lt;p&gt;Bảo quản: Để nơi kh&amp;ocirc; r&amp;aacute;o, tho&amp;aacute;ng m&amp;aacute;t. Tr&amp;aacute;nh tiếp x&amp;uacute;c trực tiếp với mắt v&amp;agrave; tr&amp;aacute;nh xa tầm tay trẻ em.&lt;/p&gt;\r\n\r\n&lt;div class=&quot;clearfix&quot;&gt;&amp;nbsp;&lt;/div&gt;', '/uploads/2021/05/31/product-01.jpg', 1, '2021-05-24 06:51:26', '2021-05-31 06:08:09'),
(45, 'Herschel supply', 12, 'Herschel supply', 250000, 240000, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Herschel supply &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-02.jpg', 1, '2021-05-31 06:08:31', '2021-05-31 06:08:31'),
(46, 'Only Check Trouser', 12, 'Only Check Trouser', 0, 0, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Only Check Trouser &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-03.jpg', 1, '2021-05-31 06:08:44', '2021-05-31 06:08:44'),
(47, 'Classic Trench Coat', 12, 'Classic Trench Coat', 2500000, 0, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Classic Trench Coat &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-04.jpg', 1, '2021-05-31 06:08:57', '2021-05-31 06:08:57'),
(48, 'Front Pocket Jumper', 12, 'Front Pocket Jumper', 200000, 190000, '&lt;p&gt;&lt;a class=&quot;stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6&quot; href=&quot;http://php-08-03.vtest/product-detail.html&quot;&gt;Front Pocket Jumper &lt;/a&gt;&lt;/p&gt;', '/uploads/2021/05/31/product-05.jpg', 1, '2021-05-31 06:09:16', '2021-05-31 06:09:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_slider`
--

CREATE TABLE `product_slider` (
  `id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product_slider`
--

INSERT INTO `product_slider` (`id`, `product_id`, `url`) VALUES
(1, 47, '/uploads/2021/05/31/product-01.jpg'),
(2, 47, '/uploads/2021/05/31/product-02.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `sort_by` int(10) NOT NULL,
  `active` int(1) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `file`, `url`, `sort_by`, `active`, `created_at`, `updated_at`) VALUES
(3, 'Nước Hoa Giá Rẻ', '/uploads/2021/05/28/slide-02.jpg', '#', 1, 1, '2021-05-28 13:46:08', '2021-05-28 13:46:08'),
(4, 'Nước Hoa Nữ', '/uploads/2021/05/28/slide-01.jpg', '#', 1, 1, '2021-05-28 13:46:21', '2021-05-28 13:46:21'),
(5, 'Nước Hoa Khuyến Mãi', '/uploads/2021/05/28/slide-03.jpg', '#', 1, 1, '2021-05-28 13:46:45', '2021-05-28 13:46:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `info` text,
  `is_delete` int(1) DEFAULT NULL,
  `token` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `address`, `info`, `is_delete`, `token`, `created_at`) VALUES
(1, 'admin@localhost', '$2y$10$R/sAiJaWCxOGcQc9vHLAze41td7f.R3nEB9unfysj/NL/AhM5KvLu', NULL, NULL, NULL, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9', '2021-06-14 12:58:33');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_cart` (`customer_id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_slider`
--
ALTER TABLE `product_slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `product_slider`
--
ALTER TABLE `product_slider`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `lk_cart` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
