-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2024 lúc 04:35 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `log_login` text DEFAULT NULL,
  `class` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `level` tinyint(4) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `avatar` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `log_login`, `class`, `address`, `level`, `status`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$7VLRCZIgkY4I3Vfg7edih.MEBBc..kbS3SM4B8l6mxJLOst5bcpK.', '0343754517', NULL, 'CDTH18', 'TP Hồ Chí Minh', 1, 1, '2020-04-20__h21.png', NULL, '2020-04-16 17:15:17'),
(6, 'Nhân Viên', 'nhanvien@gmail.com', '$2y$10$2Btw2.RpZgDGwgw0yeTSdeyy.md58ZxQD.k.XNhUjFT3zRoD76YVu', '012345678', NULL, NULL, NULL, 2, 1, NULL, '2020-06-06 05:48:35', '2020-06-06 05:50:54'),
(7, 'Nhân Viên 2', 'nhanvien2@gmail.com', '$2y$12$hLATHM6ACk0KxB/oDAV7u.eayI04RZu7kVNlnGy5XKctc0UCtXz9a', '0987654329', NULL, NULL, NULL, 2, 1, NULL, '2024-04-26 07:04:28', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `a_name` varchar(191) NOT NULL,
  `a_slug` varchar(191) NOT NULL,
  `a_hot` tinyint(4) NOT NULL DEFAULT 0,
  `a_active` tinyint(4) NOT NULL DEFAULT 1,
  `a_menu_id` int(11) NOT NULL DEFAULT 0,
  `a_view` int(11) NOT NULL DEFAULT 0,
  `a_description` mediumtext DEFAULT NULL,
  `a_avatar` varchar(191) DEFAULT NULL,
  `a_content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `a_position_2` tinyint(4) NOT NULL DEFAULT 0,
  `a_position_1` tinyint(4) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`id`, `a_name`, `a_slug`, `a_hot`, `a_active`, `a_menu_id`, `a_view`, `a_description`, `a_avatar`, `a_content`, `created_at`, `a_position_2`, `a_position_1`, `updated_at`) VALUES
(7, 'Vườn táo hữu cơ giữa \'thủ phủ\' xoài', 'vuon-tao-huu-co-giua-thu-phu-xoai', 0, 1, 2, 0, NULL, '2024-10-22__ef0a5a64d0c3699d30d228-165851-558-165942-161357.jpg', '<p>V&agrave;i năm trở lại đ&acirc;y, người d&acirc;n tại x&atilde; M&atilde; Đ&agrave; đều trầm trồ, ngạc nhi&ecirc;n bởi vườn t&aacute;o &quot;c&oacute; một kh&ocirc;ng hai&quot; giữa v&ugrave;ng đất được mệnh danh thủ phủ xo&agrave;i của huyện Vĩnh Cửu, tỉnh Đồng Nai.</p>\r\n\r\n<p><img alt=\"Vườn táo trong nhà màng của anh Toàn tại xã Mã Đà. Ảnh: Trần Phi.\" src=\"https://i.ex-cdn.com/nongnghiep.vn/files/content/2024/10/21/ef0a5a64d0c3699d30d228-165851_558-165942-161357.jpg\" style=\"width:1920px\" /></p>\r\n\r\n<p>Vườn t&aacute;o trong nh&agrave; m&agrave;ng của anh To&agrave;n tại x&atilde; M&atilde; Đ&agrave;. Ảnh:&nbsp;<em>Trần Phi.</em></p>\r\n\r\n<p>Từ trung t&acirc;m x&atilde; M&atilde; Đ&agrave;, ch&uacute;ng t&ocirc;i vượt hơn 20km đường rừng để tham quan vườn t&aacute;o của anh To&agrave;n. V&agrave;o m&ugrave;a n&agrave;y, vườn t&aacute;o đang cho tr&aacute;i với số lượng dồi d&agrave;o. Anh To&agrave;n tự tay h&aacute;i những quả t&aacute;o tươi ngon để ch&uacute;ng t&ocirc;i thưởng thức ngay tại vườn. Nhờ phương ph&aacute;p trồng hữu cơ, t&aacute;o của anh đảm bảo chất lượng, vị ngọt đặc trưng.</p>\r\n\r\n<p>Anh To&agrave;n cho biết, mấy năm trước, đứng trước một c&acirc;y t&aacute;o l&acirc;u năm trong vườn, anh bỗng c&oacute; cảm hứng ph&aacute;t triển m&ocirc; h&igrave;nh vườn t&aacute;o thật hiệu quả. Anh đ&atilde; quyết định đầu tư gần 200 triệu đồng lắp r&aacute;p nh&agrave; m&agrave;ng để&nbsp;<a href=\"https://nongsanviet.nongnghiep.vn/trong-tao-tag15985/\" rel=\"follow noopener\" target=\"_blank\">trồng t&aacute;o</a>&nbsp;tr&ecirc;n diện t&iacute;ch 2.500m2 của gia đ&igrave;nh.</p>\r\n\r\n<p>&ldquo;Mặc d&ugrave; chi ph&iacute; đầu tư kh&aacute; cao, đổi lại nh&agrave; m&agrave;ng gi&uacute;p kiểm so&aacute;t nhiệt độ, độ ẩm v&agrave; &aacute;nh s&aacute;ng, tạo ra m&ocirc;i trường l&yacute; tưởng cho c&acirc;y trồng ph&aacute;t triển. Điều n&agrave;y gi&uacute;p c&acirc;y sinh trưởng tốt hơn, ra hoa v&agrave; đậu quả đồng đều. Đặc biệt, việc sử dụng nh&agrave; m&agrave;ng gi&uacute;p ngăn ngừa s&acirc;u bệnh v&agrave; c&ocirc;n tr&ugrave;ng x&acirc;m nhập v&agrave;o khu vực sản xuất, từ đ&oacute; giảm thiểu thiệt hại cho c&acirc;y trồng v&agrave; hạn chế việc sử dụng thuốc BVTV&rdquo;, anh To&agrave;n chia sẻ.</p>\r\n\r\n<p><img alt=\"Anh Toàn ứng dụng phòng trừ sâu bệnh bằng các giải pháp sinh học, đảm bảo táo đạt chuẩn hữu cơ. Ảnh: Trần Trung.\" src=\"https://i.ex-cdn.com/nongnghiep.vn/files/content/2024/10/21/eaa01ccd966a2f34767b27-170013_883-170138-161358.jpg\" style=\"width:1920px\" /></p>\r\n\r\n<p>Anh To&agrave;n ứng dụng ph&ograve;ng trừ s&acirc;u bệnh bằng c&aacute;c giải ph&aacute;p sinh học, đảm bảo t&aacute;o đạt chuẩn hữu cơ. Ảnh:&nbsp;<em>Trần Trung.</em></p>\r\n\r\n<blockquote>\r\n<p>&ldquo;Nhờ sản phẩm sạch, chất lượng tốt, người d&acirc;n địa phương v&agrave; kh&aacute;ch du lịch chủ động t&igrave;m đến vườn để mua t&aacute;o với gi&aacute; cao&rdquo;, anh To&agrave;n phấn khởi.</p>\r\n</blockquote>\r\n\r\n<p>B&ecirc;n cạnh nh&agrave; m&agrave;ng, vị ngọt v&agrave; hương thơm của c&acirc;y t&aacute;o trồng ở M&atilde; Đ&agrave; đến từ việc chọn giống tốt v&agrave; kỹ thuật chăm s&oacute;c, nhưng điều quan trọng nhất l&agrave; canh t&aacute;c theo quy tr&igrave;nh hữu cơ. Với việc chăm s&oacute;c đ&uacute;ng kỹ thuật, chỉ sau 8 th&aacute;ng, vườn t&aacute;o đ&atilde; ra hoa v&agrave; cho lứa tr&aacute;i đầu ti&ecirc;n. Hiện nay, vườn đang v&agrave;o vụ thứ ba với sản lượng tăng l&ecirc;n khoảng 25 tấn tr&aacute;i. Anh To&agrave;n tự tin rằng khi c&acirc;y trưởng th&agrave;nh, năng suất c&oacute; thể cao hơn nhiều.</p>\r\n\r\n<p>Theo kinh nghiệm của anh To&agrave;n, việc trồng t&aacute;o nhẹ nh&agrave;ng hơn so với chăm s&oacute;c xo&agrave;i, trong khi gi&aacute; trị kinh tế lại cao hơn nhiều. M&ocirc; h&igrave;nh n&agrave;y đ&ograve;i hỏi sự chăm s&oacute;c tỉ mỉ để ph&ograve;ng ngừa bệnh phấn trắng v&agrave; nấm hồng.</p>', '2023-02-14 04:45:09', 1, 1, '2024-10-23 08:46:33'),
(8, 'Thị trường 30 tỉ USD của Trung Quốc, cơ hội lớn cho rau quả VN', 'thi-truong-30-ti-usd-cua-trung-quoc-co-hoi-lon-cho-rau-qua-vn', 1, 1, 3, 0, NULL, '2024-10-23__ef0a5a64d0c3699d30d228-165851-558-165942-161357.jpg', '<h2>&quot;Chủ tịch Trung Quốc Tập Cận B&igrave;nh từng cho biết đến năm 2030, Trung Quốc sẽ tăng nhập khẩu rau quả từ c&aacute;c nước ASEAN l&ecirc;n 30 tỉ USD. Hiện nay, Trung Quốc nhập khoảng 16 - 17 tỉ USD/năm. Điều n&agrave;y chứng tỏ thị trường Trung Quốc c&ograve;n rất nhiều tiềm năng v&agrave; dư địa cho rau quả VN tăng tốc, thậm ch&iacute; l&agrave; bứt ph&aacute;&quot;, &ocirc;ng Đặng Ph&uacute;c Nguy&ecirc;n, Tổng thư k&yacute; Hiệp hội rau quả VN (VINAFRUIT), n&oacute;i.</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>Bất ngờ từ tr&aacute;i cau tươi, l&aacute; sắn, l&aacute; khoai&hellip;</h2>\r\n\r\n<p>C&acirc;u chuyện thời sự của nhiều v&ugrave;ng qu&ecirc; hiện nay kh&ocirc;ng phải những mặt h&agrave;ng&nbsp;<a href=\"https://thanhnien.vn/nghien-cuu-phat-trien-nen-nong-nghiep-thong-minh-tang-suc-canh-tranh-cho-nong-san-viet-185241012230806253.htm\" title=\"nông sản\">n&ocirc;ng sản</a>&nbsp;tỉ USD như&nbsp;<a href=\"https://thanhnien.vn/lai-them-vu-pha-hoai-vuon-sau-rieng-cua-nguoi-dan-o-dak-lak-185241002152930791.htm\" title=\"sầu riêng\">sầu ri&ecirc;ng</a>, c&agrave; ph&ecirc; m&agrave; bất ngờ lại l&agrave; những thứ mọc ở bờ r&agrave;o hay mảnh đất thừa quanh nh&agrave;, chẳng hạn tr&aacute;i cau tươi, l&aacute; sắn, l&aacute; khoai lang&hellip;</p>\r\n\r\n<p><a href=\"https://images2.thanhnien.vn/528068263637045248/2024/10/14/trai-cau-bat-ngo-sot-gia-nho-xuat-khau-thuan-loianh-hoang-nguyen-17289097237441535658598.jpg\" target=\"_blank\" title=\"Trái cau bất ngờ sốt giá nhờ xuất khẩu thuận lợi\"><img alt=\"Thị trường 30 tỉ USD của Trung Quốc, cơ hội lớn cho rau quả VN- Ảnh 1.\" id=\"img_118234345944666112\" src=\"https://images2.thanhnien.vn/thumb_w/640/528068263637045248/2024/10/14/trai-cau-bat-ngo-sot-gia-nho-xuat-khau-thuan-loianh-hoang-nguyen-17289097237441535658598.jpg\" style=\"height:1706px; width:2560px\" title=\"Thị trường 30 tỉ USD của Trung Quốc, cơ hội lớn cho rau quả VN- Ảnh 1.\" /></a></p>\r\n\r\n<p>Tr&aacute;i cau bất ngờ sốt gi&aacute; nhờ xuất khẩu thuận lợi</p>\r\n\r\n<p>ẢNH: HO&Agrave;NG NGUYỄN</p>\r\n\r\n<p>B&agrave; Trần Thanh Nga, ngụ TX.Bu&ocirc;n Hồ (Đắk Lắk), cho biết mọi năm giờ n&agrave;y người ta chỉ quan t&acirc;m tới gi&aacute; sầu ri&ecirc;ng, c&agrave; ph&ecirc;, nhưng năm nay lại c&oacute; th&ecirc;m mặt h&agrave;ng tr&aacute;i cau tươi. Cuối th&aacute;ng trước, gi&aacute; cau tươi tại địa phương khoảng 70.000 đồng/kg, cao gấp đ&ocirc;i so với c&ugrave;ng kỳ nhiều năm, đ&atilde; khiến nhiều người vui mừng. &quot;Kh&ocirc;ng ngờ từ đầu th&aacute;ng 10 đến nay gi&aacute; tiếp tục tăng v&agrave; hiện đ&atilde; l&ecirc;n tới 80.000 - 90.000 đồng/kg. Thương l&aacute;i đi khắp l&agrave;ng tr&ecirc;n x&oacute;m dưới l&ugrave;ng mua cau. Cau tươi chưa bao giờ c&oacute; gi&aacute; cao đến mức n&agrave;y&quot;, b&agrave; Nga cho hay.</p>\r\n\r\n<p>&Ocirc;ng Nguyễn Văn Gia, đại diện một vựa mua cau, ngụ TP.Bu&ocirc;n Ma Thuột (Đắk Lắk), cho biết hoạt động xuất khẩu cau qua Trung Quốc đ&atilde; xuất hiện nhiều năm qua, gi&aacute; c&oacute; l&uacute;c tăng, l&uacute;c giảm t&ugrave;y theo thị trường. Tr&aacute;i cau tươi được thương l&aacute;i mua về giao cho c&aacute;c vựa, ph&acirc;n th&agrave;nh 2 - 3 loại kh&aacute;c nhau t&ugrave;y k&iacute;ch cỡ. Tr&aacute;i cau sau đ&oacute; được hấp ch&iacute;n, phơi kh&ocirc;, đ&oacute;ng container chuyển ra đầu mối ở miền Bắc rồi xuất qua Trung Quốc. Trước đ&acirc;y, do quy m&ocirc; nhỏ n&ecirc;n c&aacute;c vựa chủ yếu hoạt động thủ c&ocirc;ng.&nbsp;</p>\r\n\r\n<p>V&agrave;i năm gần đ&acirc;y, một số vựa được mời sang Trung Quốc tham quan c&aacute;c l&ograve; sản xuất kẹo cau, thấy họ hoạt động b&agrave;i bản n&ecirc;n về đ&atilde; n&acirc;ng cấp th&agrave;nh c&aacute;c cơ sở sơ chế quy m&ocirc;, sử dụng cả m&aacute;y m&oacute;c c&ocirc;ng nghiệp trong việc hấp cau. Việc n&agrave;y khiến hoạt động xuất khẩu cau v&agrave;i năm gần đ&acirc;y kh&aacute; ổn định. Tuy nhi&ecirc;n năm nay gi&aacute; cau tươi tăng đột biến do nguồn cung từ đảo Hải Nam của Trung Quốc bị hạn chế. Một quầy cau nặng trung b&igrave;nh mười mấy k&yacute;, gi&uacute;p nh&agrave; vườn thu về tiền triệu. Mức gi&aacute; hiện tại cao gấp 2 - 3 lần so với c&aacute;c năm trước. C&acirc;y cau từ loại c&acirc;y cảnh, trồng ở lối đi, bờ r&agrave;o, m&eacute;p vườn bỗng dưng th&agrave;nh n&ocirc;ng sản phụ, gi&uacute;p n&ocirc;ng d&acirc;n tăng thu nhập.</p>\r\n\r\n<p>D&ugrave; kh&ocirc;ng phải l&agrave; mặt h&agrave;ng xuất khẩu ch&iacute;nh ngạch theo nghị định thư, nhưng theo thống k&ecirc; của VINAFRUIT, trong th&aacute;ng 8.2024, xuất khẩu cau của VN đạt 9,28 triệu USD, tăng 1.240% so với c&ugrave;ng kỳ năm 2023; lũy kế 8 th&aacute;ng của năm 2024 đạt 21,2 triệu USD so với c&ugrave;ng kỳ năm ngo&aacute;i, tăng 51,3%. Cau trở th&agrave;nh mặt h&agrave;ng xuất khẩu đứng thứ 13 của VN trong 8 th&aacute;ng qua; tr&ecirc;n cả hạt hạnh nh&acirc;n, quả vải, mắc ca v&agrave; ch&ocirc;m ch&ocirc;m.</p>\r\n\r\n<p>Kh&ocirc;ng chỉ c&oacute; tr&aacute;i cau, một số mặt h&agrave;ng cũng g&acirc;y bất ngờ như l&aacute; sắn đạt 2,5 triệu USD trong 8 th&aacute;ng năm 2024, tăng 170% so với c&ugrave;ng kỳ năm trước. Tương tự, 8 th&aacute;ng qua xuất khẩu l&aacute; chuối đạt 666.000 USD, tăng 15% v&agrave; l&aacute; khoai lang đạt 567.000 USD, tăng 24% so với c&ugrave;ng kỳ năm 2023.</p>', '2023-02-14 11:44:42', 0, 1, '2024-10-23 01:57:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `atb_name` varchar(191) NOT NULL,
  `atb_slug` varchar(191) NOT NULL,
  `atb_type` tinyint(4) NOT NULL DEFAULT 0,
  `atb_category_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attributes`
--

INSERT INTO `attributes` (`id`, `atb_name`, `atb_slug`, `atb_type`, `atb_category_id`, `created_at`, `updated_at`) VALUES
(14, 'Thái Lan', 'thai-lan', 1, 1, '2023-02-15 06:03:25', '2023-02-15 06:03:52'),
(15, 'Việt Nam', 'viet-nam', 1, 1, '2023-02-15 06:04:21', NULL),
(16, 'Kingston', 'kingston', 2, 1, '2023-02-15 06:08:42', NULL),
(17, '12 Tháng', '12-thang', 3, 1, '2023-02-15 06:08:58', NULL),
(18, '24 Tháng', '24-thang', 3, 1, '2023-02-15 06:09:11', NULL),
(19, '36 Tháng', '36-thang', 3, 1, '2023-02-15 06:09:21', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_name` varchar(191) NOT NULL,
  `c_slug` varchar(191) NOT NULL,
  `c_avatar` varchar(191) DEFAULT NULL,
  `c_banner` varchar(191) DEFAULT NULL,
  `c_description` varchar(191) DEFAULT NULL,
  `c_parent_id` int(11) NOT NULL DEFAULT 0,
  `c_hot` tinyint(4) NOT NULL DEFAULT 0,
  `c_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `c_slug`, `c_avatar`, `c_banner`, `c_description`, `c_parent_id`, `c_hot`, `c_status`, `created_at`, `updated_at`) VALUES
(1, 'Gạo', 'gao', '2024-10-22__ngay-1810-gia-gao-trong-nuoc-tiep-tuc-giam-gao-xuat-khau-on-dinh-20241018060449.jpg', NULL, NULL, 0, 1, 1, '2020-04-12 02:16:06', '2024-10-22 09:53:52'),
(2, 'Trái cây', 'trai-cay', '2024-10-22__hoa-qua-huu-co-2.jpg', NULL, NULL, 0, 1, 1, '2020-04-12 02:16:09', '2024-10-22 09:54:44'),
(3, 'Rau xanh', 'rau-xanh', '2024-10-22__thanh-phan-dinh-duong-rau-xanh.jpg', NULL, NULL, 0, 1, 1, '2020-04-12 02:16:19', '2024-10-22 10:00:58'),
(4, 'Rau củ', 'rau-cu', '2024-10-22__thanh-phan-dinh-duong-rau-xanh.jpg', NULL, NULL, 0, 0, 1, '2020-04-16 16:50:02', '2024-10-22 10:01:32'),
(5, 'Gia vị', 'gia-vi', '2024-10-22__danh-sach-gia-vi.jpg', NULL, NULL, 0, 0, 1, '2020-04-16 16:53:53', '2024-10-22 10:02:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cmt_name` varchar(191) DEFAULT NULL,
  `cmt_email` varchar(191) DEFAULT NULL,
  `cmt_content` text DEFAULT NULL,
  `cmt_parent_id` int(11) NOT NULL DEFAULT 0,
  `cmt_product_id` int(11) NOT NULL DEFAULT 0,
  `cmt_admin_id` int(11) NOT NULL DEFAULT 0,
  `cmt_user_id` int(11) NOT NULL DEFAULT 0,
  `cmt_like` int(11) NOT NULL DEFAULT 0,
  `cmt_disk_like` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_title` varchar(191) DEFAULT NULL,
  `c_phone` char(11) DEFAULT NULL,
  `c_email` varchar(191) DEFAULT NULL,
  `c_content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `discount_code`
--

CREATE TABLE `discount_code` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_code` varchar(191) NOT NULL,
  `d_number_code` int(11) NOT NULL DEFAULT 0,
  `d_date_start` datetime DEFAULT NULL,
  `d_date_end` datetime DEFAULT NULL,
  `d_percentage` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `e_name` varchar(191) DEFAULT NULL,
  `e_banner` varchar(191) DEFAULT NULL,
  `e_link` varchar(191) DEFAULT NULL,
  `e_position_1` tinyint(4) NOT NULL DEFAULT 0,
  `e_position_2` tinyint(4) NOT NULL DEFAULT 0,
  `e_position_3` tinyint(4) NOT NULL DEFAULT 0,
  `e_position_4` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `events`
--

INSERT INTO `events` (`id`, `e_name`, `e_banner`, `e_link`, `e_position_1`, `e_position_2`, `e_position_3`, `e_position_4`, `created_at`, `updated_at`) VALUES
(4, 'SK1', '2024-10-25__crovefreshx-tfs-promotion.jpg', NULL, 1, 0, 0, 0, '2024-10-25 09:36:14', '2024-10-25 09:36:14'),
(5, 'SK2', '2024-10-25__15-21-12-n-ng-tr-i-t-i-xanh-kv-asset-adapt-kvb-1080big.jpg', NULL, 0, 1, 0, 0, '2024-10-25 09:38:22', '2024-10-25 09:38:23'),
(6, 'SK3', '2024-10-25__crovefreshx-tfs-promotion.jpg', NULL, 0, 0, 0, 1, '2024-10-25 09:44:11', '2024-10-25 09:44:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `exports`
--

CREATE TABLE `exports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `w_order_id` int(11) NOT NULL,
  `w_price` int(11) NOT NULL DEFAULT 0,
  `w_qty` int(11) NOT NULL DEFAULT 0,
  `w_time_exports` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `exports`
--

INSERT INTO `exports` (`id`, `w_order_id`, `w_price`, `w_qty`, `w_time_exports`, `created_at`, `updated_at`) VALUES
(1, 14, 1000000, 30, NULL, '2021-05-25 17:32:53', '2021-05-25 17:40:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `keywords`
--

CREATE TABLE `keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `k_name` varchar(191) NOT NULL,
  `k_slug` varchar(191) NOT NULL,
  `k_description` varchar(191) DEFAULT NULL,
  `k_hot` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mn_name` varchar(191) NOT NULL,
  `mn_slug` varchar(191) NOT NULL,
  `mn_avatar` varchar(191) DEFAULT NULL,
  `mn_banner` varchar(191) DEFAULT NULL,
  `mn_description` varchar(191) DEFAULT NULL,
  `mn_hot` tinyint(4) NOT NULL DEFAULT 0,
  `mn_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `mn_name`, `mn_slug`, `mn_avatar`, `mn_banner`, `mn_description`, `mn_hot`, `mn_status`, `created_at`, `updated_at`) VALUES
(2, 'Nông sản mới', 'nong-san-moi', NULL, NULL, NULL, 0, 1, '2020-04-12 03:03:58', '2024-10-22 10:42:11'),
(3, 'Bài viết mới nhất', 'bai-viet-moi-nhat', NULL, NULL, NULL, 0, 1, '2020-04-17 04:04:30', '2023-02-14 04:44:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_02_02_041429_create_categories_table', 1),
(4, '2020_02_02_155318_create_keywords_table', 1),
(5, '2020_02_03_145303_create_products_table', 1),
(6, '2020_02_06_165057_create_attributes_table', 1),
(7, '2020_02_06_184708_create_products_attributes_table', 1),
(8, '2020_02_08_005029_add_multiple_column_attribute_in_table_products', 1),
(9, '2020_02_09_073958_create_transactions_table', 1),
(10, '2020_02_09_074025_create_orders_table', 1),
(11, '2020_02_09_133309_create_products_keywords_table', 1),
(12, '2020_02_09_155308_create_admins_table', 1),
(13, '2020_02_09_180519_create_menus_table', 1),
(14, '2020_02_09_180620_create_articles_table', 1),
(15, '2020_02_12_100000_create_password_resets_table', 1),
(16, '2020_02_13_154148_alter_column_pro_number_in_table_product', 1),
(17, '2020_02_13_171036_create_slides_table', 1),
(18, '2020_02_14_121248_alter_column_a_position_in_table_articles', 1),
(19, '2020_02_15_053225_create_user_favourite_table', 1),
(20, '2020_02_15_191555_create_ratings_table', 1),
(21, '2020_02_17_162605_create_events_table', 1),
(22, '2020_02_18_152103_create_product_images_table', 1),
(23, '2020_02_24_222836_create_social_accounts_table', 1),
(24, '2020_03_08_104810_create_statics_table', 1),
(25, '2020_03_08_213403_alter_column_pro_age_review_in_table_product', 1),
(26, '2020_03_12_205704_create_contacts_table', 1),
(27, '2020_03_17_183239_create_comments_table', 1),
(28, '2020_03_22_003200_alter_column_spam_comment_ratings_in_table_users', 1),
(29, '2020_03_23_223714_alter_column_admin_in_table_admin', 1),
(30, '2020_03_24_201555_alter_column_c_parent_id_in_table_categories', 1),
(31, '2020_03_25_214331_create_list_table_system_pay_table', 1),
(32, '2020_03_27_181534_alter_column_type_pay_in_table_transaction', 1),
(33, '2020_04_14_164245_create_supplieres_table', 2),
(34, '2020_04_15_003305_alter_column_pro_supplier_id_in_table_products', 2),
(35, '2020_04_16_234410_after_column_tst_admin_id_in_table_transaction', 2),
(36, '2021_05_25_233939_create_kho_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `od_transaction_id` int(11) NOT NULL DEFAULT 0,
  `od_product_id` int(11) NOT NULL DEFAULT 0,
  `od_sale` int(11) NOT NULL DEFAULT 0,
  `od_qty` tinyint(4) NOT NULL DEFAULT 0,
  `od_price` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `od_transaction_id`, `od_product_id`, `od_sale`, `od_qty`, `od_price`, `created_at`, `updated_at`) VALUES
(27, 23, 60, 5, 3, 1234050, '2023-02-15 14:31:59', NULL),
(28, 23, 59, 10, 2, 495000, '2023-02-15 14:31:59', NULL),
(29, 23, 58, 10, 3, 16199100, '2023-02-15 14:31:59', NULL),
(30, 24, 60, 5, 2, 1234050, '2024-04-26 07:06:56', NULL),
(31, 25, 60, 5, 1, 1234050, '2024-10-08 13:01:41', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('phuongnguyen70680@gmail.com', '$2y$10$4YLsBYTs1t.WW4q7u4oYKOQB4xAHGSVkIzdvTq.uQ1DM7tC6NJLM.', '2020-04-25 02:57:21'),
('phuongnguyen70680@gmail.com', '$2y$10$Kht/eKi4SAE8TGSlg9ZzjuXL3PRVOhg5DKs5u.Cy.ejbtA/F0OXIi', '2020-04-25 03:09:18'),
('phuongnguyen70680@gmail.com', '$2y$10$GRFriqGnlA6pgCH7Y59rTeX8VbSx0cOe93MaU/UNqSw2qRPSzhXmS', '2020-05-02 03:07:21'),
('phuongnguyen70680@gmail.com', '$2y$10$4OkOzMtbGv/bPah2VxIxxuW3IeSWwHxFrQ1dbpQ.j4xXLfQtT0O9G', '2020-05-02 03:07:50'),
('phuongnguyen70680@gmail.com', '$2y$10$UHxD4fVm884w4gx65gkHRuoYt5t0lbvfTpHw83UJdqFTf..mh769.', '2020-05-02 03:11:10'),
('phuongnguyen70680@gmail.com', '$2y$10$7bcSsst/vWUYl1A5dkdgqek6GeaVuXKXVKVBzaJEVa3jayfkbCtVK', '2020-05-03 01:59:48'),
('bthuan490@gmail.com', '$2y$10$FcoMADBhwsQxLTar/w9ZE.ReH7dVZKPmR8ua0J7RzoQlxqs6UOK8C', '2020-06-19 11:31:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pay_histories`
--

CREATE TABLE `pay_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `ph_code` varchar(191) NOT NULL,
  `ph_user_id` int(10) UNSIGNED NOT NULL,
  `ph_credit` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `ph_debit` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `ph_balance` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `ph_meta_detail` text DEFAULT NULL,
  `ph_status` tinyint(4) NOT NULL DEFAULT 0,
  `ph_month` tinyint(3) UNSIGNED DEFAULT NULL,
  `ph_year` smallint(5) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pay_histories`
--

INSERT INTO `pay_histories` (`id`, `ph_code`, `ph_user_id`, `ph_credit`, `ph_debit`, `ph_balance`, `ph_meta_detail`, `ph_status`, `ph_month`, `ph_year`, `created_at`, `updated_at`) VALUES
(1, 'PAYOUT1', 16, 0, 255200, 0, NULL, 1, 2, 2023, '2023-02-06 14:21:41', NULL),
(2, 'PAYOUT2', 17, 0, 107360, 0, NULL, 1, 2, 2023, '2023-02-06 14:37:29', NULL),
(3, 'PAYOUT3', 18, 0, 53289450, 0, NULL, 1, 2, 2023, '2023-02-15 14:31:59', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pay_ins`
--

CREATE TABLE `pay_ins` (
  `id` int(10) UNSIGNED NOT NULL,
  `pi_user_id` int(10) UNSIGNED NOT NULL,
  `pi_admin_id` int(10) UNSIGNED NOT NULL,
  `pi_provider` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `pi_money` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `pi_fee` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `pi_amount` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `pi_meta_detail` text DEFAULT NULL,
  `pi_status` tinyint(4) NOT NULL DEFAULT 0,
  `pi_month` tinyint(3) UNSIGNED DEFAULT NULL,
  `pi_year` smallint(5) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pay_outs`
--

CREATE TABLE `pay_outs` (
  `id` int(10) UNSIGNED NOT NULL,
  `po_user_id` int(10) UNSIGNED NOT NULL,
  `po_transaction_id` int(10) UNSIGNED NOT NULL,
  `po_money` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `po_meta_detail` text NOT NULL,
  `po_status` tinyint(4) NOT NULL DEFAULT 0,
  `po_month` tinyint(3) UNSIGNED DEFAULT NULL,
  `po_year` smallint(5) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pay_outs`
--

INSERT INTO `pay_outs` (`id`, `po_user_id`, `po_transaction_id`, `po_money`, `po_meta_detail`, `po_status`, `po_month`, `po_year`, `created_at`, `updated_at`) VALUES
(1, 16, 21, 255200, '', 1, 2, 2023, '2023-02-06 14:21:41', NULL),
(2, 17, 22, 107360, '', 1, 2, 2023, '2023-02-06 14:37:29', NULL),
(3, 18, 23, 53289450, '', 1, 2, 2023, '2023-02-15 14:31:59', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_name` varchar(191) DEFAULT NULL,
  `pro_slug` varchar(191) NOT NULL,
  `pro_price` int(11) NOT NULL DEFAULT 0,
  `pro_price_entry` int(11) NOT NULL DEFAULT 0 COMMENT 'giá nhập',
  `pro_category_id` int(11) NOT NULL DEFAULT 0,
  `pro_supplier_id` int(11) NOT NULL DEFAULT 0,
  `pro_admin_id` int(11) NOT NULL DEFAULT 0,
  `pro_sale` tinyint(4) NOT NULL DEFAULT 0,
  `pro_file` varchar(255) DEFAULT NULL,
  `pro_avatar` varchar(191) DEFAULT NULL,
  `pro_view` int(11) NOT NULL DEFAULT 0,
  `pro_hot` tinyint(4) NOT NULL DEFAULT 0,
  `pro_active` tinyint(4) NOT NULL DEFAULT 1,
  `pro_pay` int(11) NOT NULL DEFAULT 0,
  `pro_description` mediumtext DEFAULT NULL,
  `pro_content` text DEFAULT NULL,
  `pro_review_total` int(11) NOT NULL DEFAULT 0,
  `pro_review_star` int(11) NOT NULL DEFAULT 0,
  `pro_age_review` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `pro_number` int(11) NOT NULL DEFAULT 0,
  `pro_resistant` varchar(191) DEFAULT NULL,
  `pro_energy` varchar(191) DEFAULT NULL,
  `pro_country` tinyint(4) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pro_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_slug`, `pro_price`, `pro_price_entry`, `pro_category_id`, `pro_supplier_id`, `pro_admin_id`, `pro_sale`, `pro_file`, `pro_avatar`, `pro_view`, `pro_hot`, `pro_active`, `pro_pay`, `pro_description`, `pro_content`, `pro_review_total`, `pro_review_star`, `pro_age_review`, `created_at`, `pro_number`, `pro_resistant`, `pro_energy`, `pro_country`, `updated_at`, `pro_link`) VALUES
(50, 'Đường thốt nốt', 'duong-thot-not', 25000, 0, 5, 3, 0, 25, '', '2024-10-22__duong-thot-not-la-gi-2.jpg', 2, 1, 1, 0, 'đường thốt nốt hình tròn', '<p>đường</p>', 0, 0, 0, '2023-02-14 07:39:45', 30, NULL, NULL, 0, '2024-10-22 10:37:55', NULL),
(51, 'Hạt tiêu 100g', 'hat-tieu-100g', 120000, 0, 5, 3, 0, 0, '', '2024-10-22__tieu-den-hat-vipep-hu-100g-202203141526102605.jpg', 1, 0, 1, 0, 'hạt tiêu Dak Lak', '<h2>Đ&aacute;nh gi&aacute; Th&ugrave;ng m&aacute;y/ Case Sama S1 (No Power).</h2>\r\n\r\n<p>C&aacute;c sản phẩm của Sama gồm c&oacute; vỏ case v&agrave; PSU với c&aacute;c loại sản phẩm c&oacute; chất lượng v&agrave; gi&aacute; th&agrave;nh từ thấp tới cao. Để hướng tới đối tượng người d&ugrave;ng ph&acirc;n kh&uacute;c phổ th&ocirc;ng h&atilde;ng đ&atilde; tr&igrave;nh l&agrave;ng d&ograve;ng sản phẩm th&ugrave;ng m&aacute;y / Case Sama S series với bộ 6 sản phẩm S1, S2, S3, S4, S5, S6. Trong b&agrave;i viết n&agrave;y Phong vũ xin giới thiệu đến c&aacute;c bạn&nbsp;th&ugrave;ng m&aacute;y/ Case Sama S1.</p>\r\n\r\n<p><img alt=\"Thùng máy/ Case Sama S1 (No Power)\" src=\"https://tmp.phongvu.vn/wp-content/uploads/2018/12/2353_1496304431-5.jpg\" /></p>\r\n\r\n<h3>Chi tiết sản phẩm:</h3>\r\n\r\n<p>Case Sama S1 c&oacute; thiết kế tương đối hầm hố với những nh&aacute;t xẻ khiến th&acirc;n th&ugrave;ng m&aacute;y v&agrave; mặt nạ trở n&ecirc;n gai g&oacute;c hơn với mọi người d&ugrave;ng n&ecirc;n rất dễ thao t&aacute;c v&agrave; sử dụng. Th&ecirc;m v&agrave;o đ&oacute; đ&egrave;n LED xanh lập l&ograve;e nửa dưới th&ugrave;ng m&aacute;y cũng khiến kh&ocirc;ng gian l&agrave;m việc giải tr&iacute; kh&ocirc;ng c&ograve;n tẻ nhạt. Tuy vậy bề mặt m&aacute;y vẫn đen nh&aacute;m truyền thống hướng tới những kh&aacute;ch h&agrave;ng ưa th&iacute;ch sử đơn giản v&agrave; kh&ocirc;ng c&oacute; y&ecirc;u cầu cao với bộ phận case m&aacute;y t&iacute;nh n&agrave;y.</p>\r\n\r\n<p><img alt=\"Thùng máy/ Case Sama S1 (No Power)\" src=\"https://tmp.phongvu.vn/wp-content/uploads/2018/12/2353_1496205930-3.jpg\" /></p>\r\n\r\n<ul>\r\n	<li>Được l&agrave;m từ chất liệu th&eacute;p chống rỉ cao cấp, độ bền cao, chống trầy xước, va đập, bảo vệ tốt nhất c&oacute; c&aacute;c linh kiện m&aacute;y t&iacute;nh b&ecirc;n trong.</li>\r\n	<li>K&iacute;ch thước gọn nhẹ (Mid Tower) , gi&uacute;p người d&ugrave;ng c&oacute; thể di chuyển dễ d&agrave;ng, kh&ocirc;ng chiếm nhiều kh&ocirc;ng gian b&agrave;n m&aacute;y t&iacute;nh, giảm tối đa khối lượng khi lắp th&ecirc;m những linh kiện b&ecirc;n trong.</li>\r\n	<li>Được trang bị đầy đủ cổng kết nối ở mặt trước như cổng USB 2.0, jack cắm tai nghe, micro.</li>\r\n	<li>C&aacute;c mặt c&ograve;n lại của Case Sama S1 được thiết kế dạng lưới kết hợp c&ugrave;ng quạt PC cho khả năng tản nhiệt, l&agrave;m m&aacute;t c&aacute;c linh kiện b&ecirc;n trong, gi&uacute;p m&aacute;y t&iacute;nh hoạt động với hiệu năng cao nhất.</li>\r\n	<li>Tuy được thiết kế kh&aacute; nhỏ gọn nhưng b&ecirc;n trong của Case Sama S1 lại kh&aacute; rộng. C&aacute;c chi tiết được l&agrave;m kh&eacute;o l&eacute;o v&agrave; khoa học để tận dụng tối đa được kh&ocirc;ng gian b&ecirc;n trong sản phẩm, gi&uacute;p cho người d&ugrave;ng c&oacute; thể n&acirc;ng cấp chiếc PC của m&igrave;nh l&ecirc;n cao hơn ph&ugrave; hợp với nhu cầu sử dụng của từng người.</li>\r\n	<li>Với gi&aacute; cả rất phải chăng l&agrave; kh&aacute;ch h&agrave;ng c&oacute; cho m&igrave;nh một sản phẩm c&oacute; chất lượng cao, thiết kế v&ocirc; c&ugrave;ng đẹp mắt.</li>\r\n</ul>\r\n\r\n<p><img alt=\"Thùng máy/ Case Sama S1 (No Power)\" src=\"https://tmp.phongvu.vn/wp-content/uploads/2018/12/2353_1496205930-4.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>M&ocirc;̣t s&ocirc;́ kinh nghi&ecirc;̣m chọn mua vỏ case :</h3>\r\n\r\n<ul>\r\n	<li>Kích thước vỏ c&acirc;y phải vừa vặn với những linh ki&ecirc;̣n bạn x&acirc;y dựng cho chi&ecirc;́c PC của mình. M&ocirc;̣t chi&ecirc;́c case quá nhỏ khi k&ecirc;́t hợp với m&ocirc;̣t chi&ecirc;́c VGA cỡ lớn 3Fan là đi&ecirc;̀u kh&ocirc;ng th&ecirc;̉.</li>\r\n	<li>Case c&acirc;̀n phải có đủ các c&ocirc;̉ng ăn chơi như USB 3.0, USB 2.0, jack 3.5mm</li>\r\n	<li>&rdquo; Phải mát &rdquo; : bạn n&ecirc;n nghi&ecirc;n cứu kỹ chiếc Case định mua xem thiết kế đối lưu c&oacute; tốt kh&ocirc;ng, lắp đặt them quạt tản nhiệt v&agrave;, tản CPU c&oacute; thuận tiện kh&ocirc;ng với mục đ&iacute;ch nhiệt độ linh kiện c&agrave;ng thấp c&agrave;ng tốt.</li>\r\n	<li>Kh&ocirc;ng nhất thiết phải đẹp nhưng &rdquo; n&ecirc;n&rdquo; đẹp. Chắc chắn rồi, kh&ocirc;ng ai muốn chọn mua 1 vỏ case xấu cả. Sau khi đ&aacute;p ứng được cả 3 nguy&ecirc;n tắc kể tr&ecirc;n để tối đa t&iacute;nh thực dụng của th&ugrave;ng m&aacute;y, h&atilde;y bắt đầu nghĩ tới một thiết kế độc đ&aacute;o, m&agrave;u sắc ph&ugrave; hợp với g&oacute;c c&aacute; nh&acirc;n.</li>\r\n</ul>', 0, 0, 0, '2023-02-14 08:19:13', 10, NULL, NULL, 0, '2024-10-22 10:33:43', NULL),
(52, 'Khoai lang Nhật dẻo 500g', 'khoai-lang-nhat-deo-500g', 65000, 0, 4, 3, 0, 17, '', '2024-10-22__khoai-lang-nhat-202312280948119950.jpg', 1, 0, 1, 0, 'khoai lang', '<h2><strong>khoai lang</strong></h2>', 0, 0, 0, '2023-02-14 08:22:46', 20, NULL, NULL, 0, '2024-10-22 10:31:13', NULL),
(53, 'Khoai tây 500g', 'khoai-tay-500g', 15000, 0, 4, 3, 0, 10, '', '2024-10-22__nhung-cong-dung-dieu-ki-cua-khoai-tay-doi-voi-suc-khoe-202109221545064223.jpg', 1, 0, 1, 0, 'khoai tây', '<h2><strong>Giới thiệu Chuột HP M160 Gaming RGB (Đen)</strong></h2>\r\n\r\n<p>Chuột Gaming M160 l&agrave; d&ograve;ng chuột chơi Game được sản xuất từ h&atilde;ng HP danh tiếng, với thiết kế chuột vừa vặn th&iacute;ch hợp cho cả chơi game v&agrave; d&ugrave;ng văn ph&ograve;ng c&ugrave;ng t&ocirc;n m&agrave;u đen, bề mặt chuột l&agrave;m từ chất liệu nhựa cầm nắm v&ocirc; c&ugrave;ng chắc tay v&agrave; ph&ugrave; hợp với nhiều dạng tay người.</p>\r\n\r\n<p><img alt=\"Chuột HP M160 Gaming RGB (Đen)\" src=\"https://product.hstatic.net/200000420363/product/hp-m160-5_713d75cc1b5d424d984955fa74988b8d.jpg\" style=\"height:467px; width:700px\" /></p>\r\n\r\n<p>Chuột Gaming M160 được t&iacute;ch hợp hệ thống led RGB nhiều m&agrave;u tự thay đổi, led được bố tr&iacute; tại nhiều vị tr&iacute; kh&aacute;c nhau tr&ecirc;n th&acirc;n chuột, con lăn v&agrave; đu&ocirc;i chuột, tạo cảm gi&aacute;c đặc biệt v&agrave; kh&aacute;c biệt so với nhiều d&ograve;ng chuột chơi Game c&ugrave;ng tầm gi&aacute;</p>\r\n\r\n<p><img alt=\"Chuột HP M160 Gaming RGB (Đen)\" src=\"https://product.hstatic.net/200000420363/product/hp-m160-7_21fdcc0504234a429cca0dbe38ad2864.jpg\" style=\"height:467px; width:700px\" /></p>\r\n\r\n<p>L&agrave; d&ograve;ng chuột quang được tạo n&ecirc;n từ h&atilde;ng, với độ nhạy v&agrave; khả năng sử dụng tốt trong nhiều nhu cầu kh&aacute;c nhau, đặc biết l&agrave; chơi Game. Chiều d&agrave;i 1.3m tạo kh&ocirc;ng gian thoải m&aacute;i v&agrave; c&oacute; thể kết nối với những thiết bị ở khoangr c&aacute;ch ca. Kết nối qua cổng USB v&ocirc; c&ugrave;ng th&ocirc;ng dụng hiện nay.</p>\r\n\r\n<p><img alt=\"Chuột HP M160 Gaming RGB (Đen)\" src=\"https://product.hstatic.net/200000420363/product/hp-m160-6_0d672cc3455d4ec5bb6b24100c1b731a.jpg\" style=\"height:467px; width:700px\" /></p>\r\n\r\n<p>Được t&iacute;ch hợp độ ph&acirc;n giải DPI với mức cố định 1000, đảm bảo 1 mức sử dụng v&ocirc; c&ugrave;ng ph&ugrave; hợp với đa số người d&ugrave;ng. Khả năng tương th&iacute;ch của chuột khi c&oacute; hỗ trợ đ&atilde; số nhiều hệ điều h&agrave;nh kh&aacute;c nhau, n&oacute;i c&aacute;ch kh&aacute;c th&igrave; chuột chỉ cần cắm v&agrave; sử dụng, kh&ocirc;ng phải qua bất kỳ phần mềm n&agrave;o kh&aacute;c.</p>\r\n\r\n<p><img alt=\"Chuột HP M160 Gaming RGB (Đen)\" src=\"https://product.hstatic.net/200000420363/product/hp-m160-8_8d0b7f4f34964d8ebc39dbdc392a9f2b.jpg\" style=\"height:467px; width:700px\" /></p>\r\n\r\n<p>Chuột HP M160 Gaming RGB trang bị Led nhiều khu vực</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Chuột HP M160 Gaming RGB (Đen)\" src=\"https://product.hstatic.net/200000420363/product/hp-m160-9_5d14146397794dedae28f2e3d1907d20.jpg\" style=\"height:467px; width:700px\" /></p>\r\n\r\n<p>Chuột HP M160 Gaming RGB hỗ trợ kết nối USB th&ocirc;ng dụng</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Số n&uacute;t bấm: 3 ph&iacute;m</p>\r\n\r\n<p>C&acirc;n nặng: 110 gam</p>\r\n\r\n<p>K&iacute;ch thước: 118.5 x 64 x 37mm</p>', 0, 0, 0, '2023-02-14 08:27:34', 20, NULL, NULL, 0, '2024-10-22 10:29:56', NULL),
(54, 'Rau cải thìa', 'rau-cai-thia', 19000, 0, 3, 3, 0, 0, '', '2024-10-22__1-1200x676-7.jpg', 0, 0, 1, 0, 'Rau cải thìa', '<ul>\r\n	<li>rau cải th&igrave;a</li>\r\n</ul>', 0, 0, 0, '2023-02-14 08:29:04', 10, NULL, NULL, 0, '2024-10-22 10:27:07', NULL),
(55, 'Rau cải ngọt (250g/mớ)', 'rau-cai-ngot-250gmo', 19000, 0, 3, 3, 0, 0, '', '2024-10-22__cai-ngot-3.jpg', 0, 0, 1, 0, 'rau cải', '<ul>\r\n	<li>rau</li>\r\n</ul>', 0, 0, 0, '2023-02-14 13:24:03', 200, NULL, NULL, 0, '2024-10-22 10:26:02', NULL),
(56, 'Củ cà rốt (300g/túi)', 'cu-ca-rot-300gtui', 34000, 0, 4, 3, 0, 25, '', '2024-10-22__572-0-075b629a04e69b4c9d27bac96b3361c2-8f805e5d04.jpg', 1, 0, 1, 0, 'củ cà rốt', '<h2><strong>Th&ocirc;ng số kỹ thuật</strong></h2>\r\n\r\n<table border=\"1\" cellpadding=\"3\" cellspacing=\"0\" id=\"tblGeneralAttribute\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>H&atilde;ng sản xuất&nbsp;</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Gigabyte</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Model&nbsp;</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>AORUS RGB DDR4 16GB (2&times; 8GB) 3333 MHz</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Dung Lượng&nbsp;</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>16GB Kit (2 x 8GB)&nbsp;3333 MHz</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Loại Ram&nbsp;</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>DDR4</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><br />\r\n			<strong>SPD&nbsp;</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>19-19-19-43 Cho nền tảng Intel<br />\r\n			20-19-19-43 Cho nền tảng AMD<br />\r\n			Tốc độ SPD : 2666 MHz<br />\r\n			Điện &aacute;p SPD :1.2 V</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Pin&nbsp;</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>288</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Điểm tốc độ&nbsp;</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>PC4 26600 (3333 MHz)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Độ trễ&nbsp;</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>18-20-20-40</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>BUS&nbsp;</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>3333 MHz</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Điện &aacute;p&nbsp;</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>1.35 V</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>XMP 2.0&nbsp;</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>C&oacute; hỗ trợ</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Tản nhiệt&nbsp;</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>C&oacute; - AORUS X&aacute;m</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>LED&nbsp;</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>C&oacute; RGB Fusion 2.0</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2><strong>Đ&aacute;nh gi&aacute; chi tiết (16GB DDR4 2x8G 3333) AORUS RGB Memory RAM</strong></h2>\r\n\r\n<p>Thiết kế ti&ecirc;u chuẩn, độ bền kinh ngạc v&agrave; tương th&iacute;ch ho&agrave;n hảo tr&ecirc;n hầu hết c&aacute;c d&ograve;ng&nbsp;<a href=\"https://gearvn.com/collections/mainboard-bo-mach-chu\" target=\"_blank\">main m&aacute;y t&iacute;nh</a>&nbsp;c&oacute; tr&ecirc;n thị trương như&nbsp;Mainboard&nbsp;Intel 100 Series,Intel 200 Series,Intel 300 Series,Intel 400 Series,Intel X299 Series tr&ecirc;n thị trường.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-16gb-ddr4-2x8g-3333-aorus-rgb-memory-ram-1_dcad7eca0e504490b697fc663caba6a5_grande.jpg\" /></p>\r\n\r\n<h3><strong>Khả năng &eacute;p xung cực tốt, hỗ trợ XMP 2.0</strong></h3>\r\n\r\n<p>Mọi ứng dụng trở n&ecirc;n mượt m&agrave; v&agrave; tăng tốc tối đa khi sử dụng kit ram n&agrave;y. Hỗ trợ XMP 2.0 tối ưu nhất cho hệ thống của bạn.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-16gb-ddr4-2x8g-3333-aorus-rgb-memory-ram-2_54db2a7b16454eb4b6f7967283018494_grande.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Nhiều t&iacute;nh năng, LED RGB đẹp mắt</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Chip nhớ chất lượng cao đi k&egrave;m khả năng vận h&agrave;nh bền bỉ đ&atilde; trải qua kiểm tra nghi&ecirc;m ngặt của c&aacute;c kĩ sư. Sản phẩm c&ograve;n nổi trội bởi khả năng điều chỉnh Led RGB Fusion khiến bộ m&aacute;y của bạn đẹp hơn bao giờ hết.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-16gb-ddr4-2x8g-3333-aorus-rgb-memory-ram-3_e259997027df45cfabadd495516a0d02_grande.jpg\" /></p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-16gb-ddr4-2x8g-3333-aorus-rgb-memory-ram-5_ed99bcd58db647f795ff00db8f4de934_grande.png\" /></p>\r\n\r\n<h3><strong>K&iacute;ch thước ti&ecirc;u chuẩn dễ d&agrave;ng ph&ugrave; hợp với nhiều Case m&aacute;y , tối ưu khả năng tản nhiệt cho PC của bạn&nbsp;</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>K&iacute;ch thước cực k&igrave; nhỏ gọn , nh&agrave; sản xuất đ&atilde; tối ưu gi&uacute;p bạn lắp vừa v&agrave;o nhiều Case m&aacute;y cũng như y&ecirc;n t&acirc;m về khả năng tản nhiệt cho PC của bạn.</p>', 0, 0, 0, '2023-02-15 05:48:16', 100, NULL, NULL, 0, '2024-10-22 10:28:44', NULL),
(57, 'Táo Trung Quốc', 'tao-trung-quoc', 200000, 0, 2, 4, 0, 5, '', '2024-10-22__tao-trung-quoc-1.jpg', 1, 0, 1, 0, 'Táo Trung Quốc', '<h2>t&aacute;o</h2>', 0, 0, 0, '2023-02-15 05:50:23', 20, NULL, NULL, 0, '2024-10-22 10:23:54', NULL),
(58, 'Cam sành 1kg/túi', 'cam-sanh-1kgtui', 199000, 0, 2, 2, 0, 4, '', '2024-10-22__65647773-1053772664820979-8033675875503308800-o.jpg', 2, 0, 1, 1, 'Cam ngon', '<h3>a</h3>', 0, 0, 0, '2023-02-15 05:52:21', 7, NULL, NULL, 0, '2024-10-22 10:21:04', NULL),
(59, 'Gạo lứt huyết rồng', 'gao-lut-huyet-rong', 550000, 0, 1, 3, 0, 10, '', '2024-10-22__1553571799167-5459235.jpg', 3, 1, 1, 1, 'GIúp giảm cân', '<h2><strong>Đ&aacute;nh gi&aacute; chi tiết loa m&aacute;y t&iacute;nh Havit SK212</strong></h2>\r\n\r\n<p>Havit lu&ocirc;n l&agrave; sự lựa chọn tốt nhất cho những d&ograve;ng sản phẩm&nbsp;<a href=\"https://gearvn.com/pages/tai-nghe-may-tinh\" target=\"_blank\">tai nghe m&aacute;y t&iacute;nh</a>&nbsp;v&agrave; loa vi t&iacute;nh trong ph&acirc;n kh&uacute;c gi&aacute; rẻ. Trong đ&oacute;, loa m&aacute;y t&iacute;nh Havit Sk212 ch&iacute;nh l&agrave; sự lựa chọn ho&agrave;n hảo về &acirc;m thanh v&agrave; thiết kế độc đ&aacute;o.</p>\r\n\r\n<h3><strong>&Acirc;m thanh 2.0 mạnh mẽ, chất lượng</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN-loa-may-tinh-havit-sk212\" src=\"https://file.hstatic.net/1000026716/file/gearvn-loa-may-tinh-havit-sk212_66b444dfaf8c48408cec8f7684575498_grande.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đắm ch&igrave;m c&ugrave;ng dải &acirc;m thanh được xử l&yacute; v&ocirc; c&ugrave;ng gọn g&agrave;ng. Loa m&aacute;y t&iacute;nh với chất &acirc;m mạnh mẽ, c&acirc;n bằng v&agrave; l&ocirc;i cuốn ch&iacute;nh l&agrave; những g&igrave; bạn c&oacute; thể cảm nhận được khi sử dụng&nbsp;Havit SK212. Trang bị c&ocirc;ng nghệ xử l&yacute; &acirc;m thanh 2.0 đ&aacute;p ứng tốt mọi nhu cầu trải nghiệm &acirc;m thanh từ nghe nhạc giải tr&iacute; cho đến chơi game.</p>\r\n\r\n<p>B&ecirc;n cạnh một chất lượng &acirc;m thanh tuyệt vời th&igrave; c&ocirc;ng suất của Havit SK212 cũng được nh&agrave; ph&aacute;t h&agrave;nh thiết kế cực k&igrave; kĩ lưỡng để người chơi c&oacute; thể sử dụng ở những kh&ocirc;ng gian lớn hơn.</p>\r\n\r\n<h3><strong>Thiết kế nhỏ gọn, tinh tế</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN-loa-may-tinh-havit-sk212\" src=\"https://file.hstatic.net/1000026716/file/gearvn-loa-may-tinh-havit-sk212-2_ba537af68dc34e9591fa653ffdd681c9_grande.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sở hữu kiểu d&aacute;ng nhỏ gọn nhất trong đại gia đ&igrave;nh loa m&aacute;y t&iacute;nh Havit, với k&iacute;ch thước 86x86x165mm v&agrave; trọng lượng 955g sẽ kh&ocirc;ng chiếm qu&aacute; nhiều diện t&iacute;ch tr&ecirc;n b&agrave;n l&agrave;m việc cho d&ugrave; bạn đang sử dụng&nbsp;<a href=\"https://gearvn.com/collections/ban-gaming\" target=\"_blank\">b&agrave;n Gaming</a>&nbsp;rộng lớn hay b&agrave;n m&aacute;y t&iacute;nh nhỏ.</p>\r\n\r\n<h3><strong>Hệ thống chiếu s&aacute;ng LED RGB độc đ&aacute;o</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN-loa-may-tinh-havit-sk212\" src=\"https://file.hstatic.net/1000026716/file/gearvn-loa-may-tinh-havit-sk212-1_c1444744ba61441d8d23e6d0f6bc8e87_grande.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ngo&agrave;i việc sở hữu thiết kế nhỏ gọn v&agrave; v&ocirc; c&ugrave;ng tinh tế, hệ thống &acirc;m thanh của bạn sẽ v&ocirc; c&ugrave;ng nổi bật với hệ thống chiếu s&aacute;ng LED RGB. Điều n&agrave;y đồng nghĩa với việc kh&ocirc;ng gian vui chơi giải tr&iacute; v&agrave; l&agrave;m việc của bạn sẽ đầy sắc m&agrave;u khi kết hợp loa m&aacute;y t&iacute;nh Havit SK212 c&ugrave;ng c&aacute;c thiết bị&nbsp;<a href=\"https://gearvn.com/collections/ban-phim-may-tinh\" target=\"_blank\">b&agrave;n ph&iacute;m</a>,&nbsp;<a href=\"https://gearvn.com/pages/chuot-may-tinh\" target=\"_blank\">chuột m&aacute;y t&iacute;nh</a>,.....</p>\r\n\r\n<h3><strong>Kết nối tiện lợi qua c&aacute;p USB Type-C</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN-loa-may-tinh-havit-sk212\" src=\"https://file.hstatic.net/1000026716/file/gearvn-loa-may-tinh-havit-sk212-3_f78782d8244b4b4d9c956ec88bfbf273_grande.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kết nối theo ti&ecirc;u chuẩn &Acirc;u Ch&acirc;u qua c&aacute;p USB Type-C v&agrave; c&ocirc;ng nghệ kh&ocirc;ng d&acirc;y Bluetooth với độ trễ cực thấp, phạm vi kết nối rộng dễ d&agrave;ng tương th&iacute;ch với c&aacute;c thiết bị ph&aacute;t c&oacute; tr&ecirc;n thị trường từ điện thoại th&ocirc;ng minh, m&aacute;y t&iacute;nh bảng cho đến&nbsp;<a href=\"https://gearvn.com/pages/pc-gvn\" target=\"_blank\">PC</a>, Laptop.&nbsp;</p>', 0, 0, 0, '2023-02-15 06:06:40', 18, NULL, NULL, 0, '2024-10-22 10:17:30', NULL),
(60, 'Gạo lứt đen', 'gao-lut-den', 199000, 0, 1, 3, 0, 5, '', '2024-10-22__an-gao-lut-co-tac-dung-gi-01.jpg', 5, 1, 1, 3, 'Gạo giúp giảm cân', 'Gạo lứt đen có nhiều lợi ích cho sức khỏe, trong đó chứa nhiều vitamin và khoáng chất, cũng như những hoạt chất có thể giúp cơ thể chống chọi lại nhiều căn bệnh như ung thư, tim mạch,...có thể đến như:\r\nTốt cho hệ tiêu hóa: Gạo lứt đen chứa nhiều chất xơ, đây là chất tốt cho hệ tiêu hóa, đẩy lùi nhiều nguy cơ mắc bệnh về đường ruột, giảm nguy cơ mắc phải ung thư ruột già cũng như đây là thực phẩm giúp giữ dáng, giảm cân thích hợp.\r\nTốt cho hệ tim mạch: Gạo này không chứa natri nên sẽ không gây hại đến tim mạch, không tăng huyết áp, nhiều vitamin C và chất xơ giúp cơ thể khỏe mạnh, giảm hàm lượng cholesterol xấu trong máu.\r\nTăng cường hệ miễn dịch: Vitamin C có trong gạo lứt đen rất cao, đây là thành phần quan trọng giúp bảo vệ sức khỏe cơ thể, làm đẹp da và ngăn ngừa nhiều căn bệnh.\r\nTốt cho hệ xương khớp: Trong gạo chứa nhiều chất kẽm và phốt pho, magie, đây là những chất quan trọng trong cấu trúc xương, ăn gạo lứt đen giúp bổ sung những vi chất trên giúp hệ xương chắc khỏe, đẩy lùi nguy cơ loãng xương.\r\nChống lão hóa: Anthocyanins là hoạt chất chống oxy hóa mạnh, nhất là thực phẩm có màu tím đen, gạo lứt đen chứa nhiều hoạt chất này sẽ giúp cơ thể phòng ngừa nhiều căn bệnh mãn tính như béo phì, ung thư, tim mạch.\r\nGiảm dị tật bẩm sinh ở thai nhi: Hàm lượng folate hoặc axit folic trong gạo lứt đen rất cao, đây là những chất cần thiết cho thai nhi lẫn thai phụ, bổ sung gạo lứt đen trong khẩu phần ăn của thai phụ giúp giảm các nguy cơ bệnh tật ống thần kinh ở thai nhi.\r\nCông dụng của gạo lứt đen\r\nCông dụng của gạo lứt đen', 1, 3, 3, '2023-02-15 06:11:05', 16, NULL, NULL, 0, '2024-10-25 09:30:17', NULL),
(61, 'Gạo ST25', 'gao-st25', 1999000, 0, 1, 3, 0, 12, '', '2024-10-22__maxresdefault.jpg', 1, 1, 1, 0, 'gạo ngon nhất Việt Nam', 'Gạo ST25 ngon nhất thế giới luôn được rất nhiều gia đình Việt lựa chọn sử dụng. Tuy nhiên, trên thị trường có nhiều loại gạo ST25 kém chất lượng khiến nhiều người lo lắng khi chọn mua. Theo dõi bài viết dưới đây để mua được loại gạo ST25 uy tín, chất lượng nhất nhé!\r\n1\r\nGạo ST25 là gạo gì?\r\nNguồn gốc của gạo ST25\r\nNguồn gốc của gạo ST25\r\nNguồn gốc của gạo ST25\r\nGạo ST25 được đặt tên dựa theo nơi nó được nghiên cứu và sản xuất. ST25 chính là Sóc Trăng 25. Đây là loại gạo thơm Sóc Trăng, được nghiên cứu suốt 20 năm bởi kỹ sư Hồ Quang Cua cùng tiến sĩ Trần Tấn Phương, kỹ sư Nguyễn Thị Thu Hương. Giống ST25 là dòng lúa thơm mới lừng danh với nhiều phẩm chất \"thượng hạng\".\r\nĐặc tính của gạo ST25\r\nHạt gạo của ST25 có hình dáng dài, dẹp, màu trắng trong, ở phần bụng không bị bạc, không bị gãy vụn.\r\nĐặc biệt gạo phải có mùi thơm của lá dứa, cốm non.\r\nĐặc tính của gạo ST25\r\nĐặc tính của gạo ST25\r\nThành tựu của gạo ST25\r\nNăm 2019, gạo ST25 được công nhận là loại gạo ngon nhất thế giới sau khi vượt qua các loại gạo của Thái Lan, Campuchia tại cuộc thi World\'s Best Rice lần thứ XI do The Rice Trader tổ chức. Đến năm 2020, gạo ST25 giành giải nhì tại cuộc thi \"Gạo ngon nhất thế giới 2020\" được tổ chức tại Mỹ.\r\nVượt qua gần 30 mẫu gạo của hơn 10 quốc gia, gạo ST25 một lần nữa giành giải nhất cuộc thi gạo ngon nhất thế giới năm 2023 do The Rice Trader tổ chức tại Philippines.', 0, 0, 0, '2023-02-15 14:37:10', 20, NULL, NULL, 0, '2024-10-25 09:27:48', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products_attributes`
--

CREATE TABLE `products_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pa_product_id` int(11) NOT NULL DEFAULT 0,
  `pa_attribute_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products_attributes`
--

INSERT INTO `products_attributes` (`id`, `pa_product_id`, `pa_attribute_id`) VALUES
(142, 62, 14),
(143, 62, 16),
(144, 62, 17),
(149, 61, 15),
(150, 61, 18),
(151, 60, 14),
(152, 60, 16),
(153, 60, 18),
(154, 59, 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products_keywords`
--

CREATE TABLE `products_keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pk_product_id` int(11) NOT NULL DEFAULT 0,
  `pk_keyword_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pi_name` varchar(191) DEFAULT NULL,
  `pi_slug` varchar(191) DEFAULT NULL,
  `pi_product_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `r_user_id` int(11) NOT NULL DEFAULT 0,
  `r_product_id` int(11) NOT NULL DEFAULT 0,
  `r_number` tinyint(4) NOT NULL DEFAULT 0,
  `r_status` tinyint(4) NOT NULL DEFAULT 0,
  `r_content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ratings`
--

INSERT INTO `ratings` (`id`, `r_user_id`, `r_product_id`, `r_number`, `r_status`, `r_content`, `created_at`, `updated_at`) VALUES
(10, 19, 60, 3, 0, 'qsa', '2024-10-08 13:03:13', '2024-10-08 13:03:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sd_title` varchar(191) DEFAULT NULL,
  `sd_link` varchar(191) DEFAULT NULL,
  `sd_image` varchar(191) DEFAULT NULL,
  `sd_target` tinyint(4) NOT NULL DEFAULT 1,
  `sd_active` tinyint(4) NOT NULL DEFAULT 1,
  `sd_sort` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slides`
--

INSERT INTO `slides` (`id`, `sd_title`, `sd_link`, `sd_image`, `sd_target`, `sd_active`, `sd_sort`, `created_at`, `updated_at`) VALUES
(1, 'Banner1', 'http://google.com.vn', '2024-10-14__middle-banner-left.png', 1, 1, 0, '2024-10-14 06:59:24', '2024-10-14 06:59:24'),
(3, 'Banner3', 'https://sachvui.com/', '2024-10-22__banner-raucu-2.jpg', 1, 1, 0, '2024-10-22 01:30:51', '2024-10-22 01:30:51'),
(4, 'Banner 2', 'abc', '2024-10-14__slider-69890.png', 1, 1, 0, '2024-10-14 07:04:08', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provider_user_id` varchar(191) NOT NULL,
  `user_id` varchar(191) NOT NULL,
  `provider` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `statics`
--

CREATE TABLE `statics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_title` varchar(191) DEFAULT NULL,
  `s_slug` varchar(191) DEFAULT NULL,
  `s_type` tinyint(4) NOT NULL DEFAULT 0,
  `s_md5` varchar(191) DEFAULT NULL,
  `s_content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `statics`
--

INSERT INTO `statics` (`id`, `s_title`, `s_slug`, `s_type`, `s_md5`, `s_content`, `created_at`, `updated_at`) VALUES
(1, 'Mua 1 doi 1', NULL, 2, NULL, '<p>k dung yeu cau thi tra lai va boi thuong hoan tien 100%</p>', '2020-04-20 12:03:25', '2020-04-20 12:03:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supplieres`
--

CREATE TABLE `supplieres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl_name` varchar(191) DEFAULT NULL,
  `sl_phone` varchar(191) DEFAULT NULL,
  `sl_email` varchar(191) DEFAULT NULL,
  `sl_address` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `supplieres`
--

INSERT INTO `supplieres` (`id`, `sl_name`, `sl_phone`, `sl_email`, `sl_address`, `created_at`, `updated_at`) VALUES
(2, 'Trái cây Bình An', '0988366423', 'ba@gmail.com', 'Đà Lạt', '2020-04-17 09:53:15', '2024-10-22 10:05:13'),
(3, 'Nông sản Việt', '0123456789', 'abc@gmail.com', 'Hà Nội', '2023-02-06 08:04:07', '2024-10-22 10:04:37'),
(4, 'Hàng nhập khẩu TQ', '0123456789', 'tq@gmail.com', 'Trung Quốc', '2024-10-22 10:05:56', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tst_user_id` int(11) NOT NULL DEFAULT 0,
  `tst_admin_id` int(11) NOT NULL DEFAULT 0,
  `tst_total_money` int(11) NOT NULL DEFAULT 0,
  `tst_name` varchar(191) DEFAULT NULL,
  `tst_email` varchar(191) DEFAULT NULL,
  `tst_phone` varchar(191) DEFAULT NULL,
  `tst_address` varchar(191) DEFAULT NULL,
  `tst_note` varchar(191) DEFAULT NULL,
  `tst_status` tinyint(4) NOT NULL DEFAULT 1,
  `tst_type` tinyint(4) NOT NULL DEFAULT 1 COMMENT ' 1 thanh toan thuong, 2 la thanh toan online',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `transactions`
--

INSERT INTO `transactions` (`id`, `tst_user_id`, `tst_admin_id`, `tst_total_money`, `tst_name`, `tst_email`, `tst_phone`, `tst_address`, `tst_note`, `tst_status`, `tst_type`, `created_at`, `updated_at`) VALUES
(23, 18, 1, 53289450, 'Lê Thành Đạt', 'Datg@gmail.com', '0999999999', 'Pasteur Hồ Chí Minh', 'OK', 3, 2, '2023-02-15 14:31:59', '2023-02-15 14:32:36'),
(24, 18, 0, 2468100, 'Huyền', 'hung@gmail.com', '0222222222', 'TP HCM', 'OKKK', 3, 2, '2024-04-26 07:06:56', '2024-04-26 07:07:44'),
(25, 19, 1, 1234050, 'A', 'abc@gmail.com', '012345678', 'abc', NULL, 3, 2, '2024-10-08 13:01:41', '2024-10-08 13:02:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `balance` int(11) NOT NULL DEFAULT 0,
  `log_login` text DEFAULT NULL,
  `count_comment` tinyint(4) NOT NULL DEFAULT 0,
  `address` varchar(191) DEFAULT NULL,
  `avatar` varchar(191) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `balance`, `log_login`, `count_comment`, `address`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(16, 'Nguyễn Thành Trung', 'thanhtrung@gmail.com', NULL, '$2y$10$hozIbsHEulBz/vDbnNzBaedChWJxKb3ZX17f5/cSwlRk8FVyWjLQS', '0999999999', -255200, NULL, 2, NULL, NULL, NULL, '2023-02-06 14:18:17', NULL),
(17, 'Nguyễn Thành Công', 'ntc1105@gmail.com', NULL, '$2y$10$0FeCgGVU9MdIWtmi/zMhf.KkZ4GZUyOGI08sb3lNTduCMfPzE35fy', '0123456789', -107360, NULL, 1, NULL, NULL, NULL, '2023-02-06 14:33:32', NULL),
(18, 'Võ Hưng', 'vohung@gmail.com', NULL, '$2y$10$0VXhDCP2rYzALy7BH5Houu51JlMgnGkD5o3C8oISGqXbLx0A6/CBO', '099836532', -53289450, '[{\"device\":\"WebKit\",\"platform\":\"Windows\",\"platform_ver\":\"10.0\",\"browser\":\"Chrome\",\"browser_ver\":\"124.0.0.0\",\"time\":\"2024-04-26T14:06:35.319876Z\"}]', 0, NULL, NULL, NULL, '2023-02-15 14:30:30', NULL),
(19, 'A', 'abc@gmail.com', NULL, '$2y$12$uuqCqA5/zJ7wpaDSvAHbzOpaNO9Y0jy9drirVa9KOuBrvIvxgcAce', '012345678', -1234050, NULL, 0, NULL, NULL, NULL, '2024-10-08 13:01:21', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_favourite`
--

CREATE TABLE `user_favourite` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uf_product_id` int(11) NOT NULL DEFAULT 0,
  `uf_user_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_favourite`
--

INSERT INTO `user_favourite` (`id`, `uf_product_id`, `uf_user_id`) VALUES
(6, 1, 11),
(8, 1, 12),
(9, 6, 14),
(5, 21, 8),
(2, 22, 2),
(1, 23, 1),
(7, 28, 10),
(12, 60, 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `warehouses`
--

CREATE TABLE `warehouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `w_product_id` int(11) NOT NULL,
  `w_price` int(11) NOT NULL DEFAULT 0,
  `w_qty` int(11) NOT NULL DEFAULT 0,
  `w_time_warehouse` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `warehouses`
--

INSERT INTO `warehouses` (`id`, `w_product_id`, `w_price`, `w_qty`, `w_time_warehouse`, `created_at`, `updated_at`) VALUES
(1, 2, 20000, 30, NULL, '2021-05-25 17:06:46', '2021-05-25 17:18:19'),
(2, 8, 250000, 5, NULL, '2023-02-06 14:28:45', '2023-02-06 14:28:45');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_phone_unique` (`phone`);

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_a_slug_index` (`a_slug`),
  ADD KEY `articles_a_hot_index` (`a_hot`),
  ADD KEY `articles_a_active_index` (`a_active`),
  ADD KEY `articles_a_menu_id_index` (`a_menu_id`);

--
-- Chỉ mục cho bảng `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attributes_atb_name_unique` (`atb_name`),
  ADD KEY `attributes_atb_category_id_index` (`atb_category_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_c_slug_unique` (`c_slug`),
  ADD KEY `categories_c_parent_id_index` (`c_parent_id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_cmt_parent_id_index` (`cmt_parent_id`),
  ADD KEY `comments_cmt_product_id_index` (`cmt_product_id`),
  ADD KEY `comments_cmt_admin_id_index` (`cmt_admin_id`),
  ADD KEY `comments_cmt_user_id_index` (`cmt_user_id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `discount_code`
--
ALTER TABLE `discount_code`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `discount_code_d_code_unique` (`d_code`);

--
-- Chỉ mục cho bảng `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `exports`
--
ALTER TABLE `exports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exports_w_order_id_index` (`w_order_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `keywords_k_slug_unique` (`k_slug`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_mn_slug_unique` (`mn_slug`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `pay_histories`
--
ALTER TABLE `pay_histories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pay_histories_ph_code_unique` (`ph_code`),
  ADD KEY `index_code_user_id` (`ph_code`,`ph_user_id`),
  ADD KEY `pay_histories_ph_user_id_index` (`ph_user_id`);

--
-- Chỉ mục cho bảng `pay_ins`
--
ALTER TABLE `pay_ins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pay_ins_pi_user_id_index` (`pi_user_id`),
  ADD KEY `pay_ins_pi_admin_id_index` (`pi_admin_id`);

--
-- Chỉ mục cho bảng `pay_outs`
--
ALTER TABLE `pay_outs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pay_outs_po_user_id_index` (`po_user_id`),
  ADD KEY `pay_outs_po_transaction_id_index` (`po_transaction_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_pro_slug_unique` (`pro_slug`),
  ADD KEY `products_pro_hot_index` (`pro_hot`),
  ADD KEY `products_pro_active_index` (`pro_active`),
  ADD KEY `products_pro_supplier_id_index` (`pro_supplier_id`);

--
-- Chỉ mục cho bảng `products_attributes`
--
ALTER TABLE `products_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_attributes_pa_product_id_index` (`pa_product_id`),
  ADD KEY `products_attributes_pa_attribute_id_index` (`pa_attribute_id`);

--
-- Chỉ mục cho bảng `products_keywords`
--
ALTER TABLE `products_keywords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_keywords_pk_product_id_index` (`pk_product_id`),
  ADD KEY `products_keywords_pk_keyword_id_index` (`pk_keyword_id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `social_accounts_provider_user_id_provider_unique` (`provider_user_id`,`provider`);

--
-- Chỉ mục cho bảng `statics`
--
ALTER TABLE `statics`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `supplieres`
--
ALTER TABLE `supplieres`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_tst_user_id_index` (`tst_user_id`),
  ADD KEY `transactions_tst_admin_id_index` (`tst_admin_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD KEY `users_balance_index` (`balance`);

--
-- Chỉ mục cho bảng `user_favourite`
--
ALTER TABLE `user_favourite`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_favourite_uf_product_id_uf_user_id_unique` (`uf_product_id`,`uf_user_id`);

--
-- Chỉ mục cho bảng `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `warehouses_w_product_id_index` (`w_product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `discount_code`
--
ALTER TABLE `discount_code`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `exports`
--
ALTER TABLE `exports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `pay_histories`
--
ALTER TABLE `pay_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `pay_ins`
--
ALTER TABLE `pay_ins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pay_outs`
--
ALTER TABLE `pay_outs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `products_attributes`
--
ALTER TABLE `products_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT cho bảng `products_keywords`
--
ALTER TABLE `products_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `statics`
--
ALTER TABLE `statics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `supplieres`
--
ALTER TABLE `supplieres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `user_favourite`
--
ALTER TABLE `user_favourite`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
