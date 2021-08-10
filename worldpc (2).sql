-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 06:20 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `worldpc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_staff`
--

CREATE TABLE `admin_staff` (
  `id` int(11) NOT NULL,
  `name_staff` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `user_staff` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `password_staff` varchar(16) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `lv` int(5) DEFAULT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `img_avatar` varchar(25) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `admin_staff`
--

INSERT INTO `admin_staff` (`id`, `name_staff`, `user_staff`, `password_staff`, `lv`, `creat_at`, `img_avatar`) VALUES
(1, 'Đồng Huy Hoàng ', 'hoang21', 'hoang21', 1, '2021-08-06 13:51:36', 'assets/images/hoang.jpg'),
(2, 'Lê Xuân Mười', 'muoi22', 'muoi22', 1, '2021-08-06 13:54:25', 'assets/images/muoi.jpg'),
(3, 'Nguyễn Mạnh Tú', 'tu21', 'tu21', 1, '2021-08-06 13:54:25', 'assets/images/tu.jpg'),
(4, 'Lương Tuấn Minh', 'minh22', 'minh22', 1, '2021-08-06 13:54:58', 'assets/images/minh.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `name` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `catalog_id` int(11) NOT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`name`, `catalog_id`, `creat_at`) VALUES
('laptop', 1, '0000-00-00 00:00:00'),
('pc', 2, '0000-00-00 00:00:00'),
('accessory', 3, '0000-00-00 00:00:00'),
('chair', 4, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `price` int(30) DEFAULT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laptop_detail`
--

CREATE TABLE `laptop_detail` (
  `laptop_name` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `monitor` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `cpu` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ram` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `vga` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ssd` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `hdd` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_brand` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `id` int(11) NOT NULL,
  `price` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `laptop_detail`
--

INSERT INTO `laptop_detail` (`laptop_name`, `monitor`, `cpu`, `ram`, `vga`, `ssd`, `hdd`, `creat_at`, `product_brand`, `id`, `price`) VALUES
('Acer Aspire 7 ', '15.6\" FHD (1920 x 1080) IPS, A', 'AMD Ryzen 5 – 5500U', '8GB DDR4 (2x SO-DIMM socket, u', 'NVIDIA GeForce GTX 1650 4GB GD', '256GB PCIe® NVMe™ M.2 SSD', '', '0000-00-00 00:00:00', 'acer', 1, 18900000),
('Acer Predator Helios 300 PH315', '15.6 inch FHD(1920 x 1080) IPS', 'Intel® Core™ i7-11800H', '8GB DDR4 3200MHz (2 khe rời, n', 'NVIDIA® GeForce RTX™ 3050Ti 4G', '512GB SSD M.2 PCIE (nâng cấp t', '', '0000-00-00 00:00:00', 'acer', 2, 34500000),
('Acer Nitro 5 AN515 56 51N4', '15.6\" FHD (1920 x 1080) IPS, 1', 'Intel Core i5-11300H up to 4.4', '8GB DDR4 3200MHz (2x SO-DIMM s', 'NVIDIA GeForce GTX 1650 4GB GD', '512GB SSD M.2 PCIE (nâng cấp ', '', '0000-00-00 00:00:00', 'acer', 3, 20500000),
('Acer Nitro 5 AN515 45 R0B6', '15.6\" FHD (1920 x 1080) IPS, 1', 'AMD Ryzen™ 7 5800H', '8GB DDR4 3200MHz (2x SO-DIMM s', 'NVIDIA GeForce RTX 3060 6GB GD', '512GB SSD M.2 PCIE (Còn trống ', '', '0000-00-00 00:00:00', 'acer', 4, 30500000),
('ASUS TUF Gaming F15 FX506HC HN', '15.6\" FHD (1920 x 1080) IPS, 1', 'Intel® Core™ i5-11400H Process', '8GB DDR4 2933MHz (2x SO-DIMM s', 'NVIDIA® GeForce RTX™ 3050 Lapt', '512GB SSD M.2 PCIE G3X2, 1x sl', '', '0000-00-00 00:00:00', 'asus', 5, 23800000),
('Asus ROG Strix G15 G513QC HN01', '15.6 inch FHD (1920 x 1080)IPS', 'AMD Ryzen R7-5800H (8 cores, u', '8GB DDR4 3200MHz (2x SO-DIMM s', 'NVIDIA GeForce RTX 3050 4GB GD', '	512GB M.2 NVMe™ PCIe® 3.0 SSD', '', '0000-00-00 00:00:00', 'asus', 6, 27990000),
('Asus ROG Zephyrus G14 GA401QH', '14.0 inch FHD (1920 x 1080) IP', 'AMD Ryzen™ 7-5800HS 2.8GHz up ', '8GB [On board] DDR4 3200MHz ', 'NVIDIA® GeForce® GTX 1650 4GB ', '512GB SSD M.2 NVMe PCIe 3.0', '', '0000-00-00 00:00:00', 'asus', 7, 28300000),
('Asus TUF Dash FX516PE HN005T', '15.6\" FHD (1920 x 1080) 16:9, ', 'Intel Core i7-11370H 3.0GHz up', '8GB Onboard DDR4 3200MHz (1x S', 'NVIDIA GeForce  RTX™ 3050Ti 4G', '512GB SSD M.2 NVMe™ PCIe® 3.0 ', '', '0000-00-00 00:00:00', 'asus', 8, 27600000),
('MSI Bravo 15 A4DCR 270VN', '15.6\" FHD (1920×1080), IPS, tầ', 'AMD Ryzen 5 – 4600H', 'DDR4 8GB (1 x 8GB) 3200MHz; 2 ', 'Radeon RX5300M 3GB', '256GB SSD NVMe M.2 PCIe Gen 3×', '', '0000-00-00 00:00:00', 'msi', 9, 17990000),
('MSI GF75 Thin 10SCXR 013VN', '17.3\" FHD (1920 x 1080) IPS, 1', 'Intel Core i7-10750H 2.6GHz up', 'NVIDIA GeForce GTX 1650 4GB GD', '8GB DDR4 3200MHz (2x SO-DIMM s', '512GB SSD M.2 PCIE, 1x 2.5\" SA', '', '0000-00-00 00:00:00', 'msi', 10, 21790000),
('MSI Gaming Katana GF76 ', '17.3 inch FHD 144Hz', ' Intel Core i7 11800H', '8GB DDR4 3200MHz (2x SO-DIMM s', 'NVIDIA RTX3050 4GB', '512GB SSD M.2 PCIE, x1 slot 2.', '', '0000-00-00 00:00:00', 'msi', 11, 29989000),
('MSI Pulse GL66 11UDK 255VN', '15.6inch FHD (1920x1080), 144H', 'Intel Core i7-11800H', '16GB (8GBx2) DDR4 3200MHz (2x ', 'NVIDIA GeForce RTX 3050 Ti', '	512GB SSD PCIE G3X4 (1 Slot)', '', '0000-00-00 00:00:00', 'msi', 12, 31490000),
('Dell Inspiron 5301 (7023601)', '13.3-inch FHD (1920 x 1080) An', 'Intel Core i7 1165G7 (2.8Ghz, ', '8GB LPDDR4x 4267Mhz', 'Nvidia Geforce MX350 2G', '512GB PCIe Gen3 x4 NVMe SSD (u', '', '0000-00-00 00:00:00', 'dell', 13, 24989000),
('Dell Latitude 3420 (42LT342001', '14 inch HD (1366 x 768) AG Non', 'Intel Core™ i3 1115G4 (3.0Ghz,', '4GB DDR4 3200Mhz (1*4GB) ', ' Intel® Iris® Xe Graphics', '256GB PCIe NVMe Class 35 M2 SS', '', '0000-00-00 00:00:00', 'dell', 14, 15389000),
('Dell Inspiron 5410 2 in 1 (N4I', '14.0-inch FHD (1920 x 1080) Tr', 'Intel Core i5 1135G7 (2.4Ghz /', '8GB DDR4 3200MHz (2* 4GB)', 'Nvidia Geforce MX350 2G DDR5', '512GB M.2 PCIe NVMe SSD', '', '0000-00-00 00:00:00', 'dell', 15, 25789000),
('Dell Inspiron 5505 (N5R74700U)', '15.6-inch FHD, 1920 x 1080, 60', 'AMD Ryzen 7 4700U', '8GB DDR4 3200Mhz (1* 8GB)', 'AMD® Radeon™ Graphics', '512GB M.2 PCIe NVMe SSD (M.2 2', '', '0000-00-00 00:00:00', 'dell', 16, 21989000);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(30) DEFAULT NULL,
  `qty` int(30) DEFAULT NULL,
  `price` int(30) DEFAULT NULL,
  `amount` int(30) DEFAULT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `product_name`, `qty`, `price`, `amount`, `creat_at`) VALUES
(1, 1, 3, '', 1, 34500000, 34500000, '2021-08-06 07:32:25'),
(2, 1, 4, '', 1, 20500000, 20500000, '2021-08-06 07:32:25'),
(3, 2, 6, '', 1, 23800000, 23800000, '2021-08-06 07:39:45'),
(4, 4, 3, 'Acer Predator Helios 300 PH315', 1, 34500000, 34500000, '2021-08-06 07:43:32'),
(5, 4, 5, 'Acer Nitro 5 AN515 45 R0B6', 1, 30500000, 30500000, '2021-08-06 07:43:32'),
(6, 8, 3, 'Acer Predator Helios 300 PH315', 1, 34500000, 34500000, '2021-08-08 03:34:55'),
(7, 8, 11, 'MSI GF75 Thin 10SCXR 013VN', 1, 21790000, 21790000, '2021-08-08 04:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `product` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_main`
--

CREATE TABLE `order_main` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `address` varchar(225) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `email` varchar(225) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `amount` int(30) NOT NULL,
  `status` int(5) DEFAULT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `order_main`
--

INSERT INTO `order_main` (`id`, `name`, `address`, `email`, `phone`, `amount`, `status`, `creat_at`) VALUES
(1, 'Hoàng Anh', '45 Yết kiêu', '', 321152025, 55000000, 1, '2021-08-06 07:32:25'),
(2, 'Hoàng Anh', '45 Yết kiêu', '', 321152025, 23800000, 1, '2021-08-06 07:39:45'),
(4, 'hoang', '123abc', 'luongtuanminh02161@gmail.com', 373928155, 65000000, 0, '2021-08-06 07:43:32'),
(8, 'hoangak', '123abc', '', 373928155, 56290000, 1, '2021-08-08 04:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) DEFAULT NULL,
  `product_brand` varchar(30) DEFAULT NULL,
  `price` int(30) DEFAULT NULL,
  `qty` int(30) DEFAULT NULL,
  `catalog_id` int(11) DEFAULT NULL,
  `img_link` varchar(225) DEFAULT NULL,
  `img_link2` varchar(225) DEFAULT NULL,
  `img_link3` varchar(225) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_id`, `product_name`, `product_brand`, `price`, `qty`, `catalog_id`, `img_link`, `img_link2`, `img_link3`, `content`, `creat_at`) VALUES
(1, 1, 'Acer Aspire 7 ', 'acer', 18900000, 5, 1, 'assets/images/acer/acer1.jpg', 'assets/images/acer/acer1_1.jpg', 'assets/images/acer/acer1_2.jpg', 'Nếu bạn yêu thích chơi game và muốn tìm một chiếc laptop đủ sức giúp bạn thỏa mãn đam mê thì chiếc laptop Acer Aspire 7 A715-41G-R150, ra mắt năm 2020 sẽ là sự lựa chọn không thể tuyệt vời hơn. Chiếc laptop trên sở hữu thiết kế mạnh mẽ cùng cấu hình nổi bật.\r\n\r\nThiết kế hiện đại, màn hình 15.6 inch FHD ấn tượng\r\nLaptop Acer Gaming Aspire 7 A715-41G-R150 gây ấn tượng với người dùng với thiết kế mạnh mẽ, rất thích hợp với các gamer. Mẫu laptop được hoàn thiện bằng chất liệu kim loại bền với các chi tiết mang sự hiện đại.', '2021-08-10 14:33:47'),
(3, 2, 'Acer Predator Helios 300 PH315', 'acer', 34500000, 20, 1, 'assets/images/acer/acer3.jpg', 'assets/images/acer/acer3_1.jpg', 'assets/images/acer/acer3_2.jpg', 'Laptop Acer Gaming Predator Helios 300 PH315-54-78W5 được trang bị bộ xử lý Intelthế hệ 11 với tốc độ xung nhịp cao giúp cho tốc độ xử lý nhanh chóng. Kèm theo đó laptop có RAM dung lượng lớn mang lại khả năng đa nhiệm mượt mà.', '0000-00-00 00:00:00'),
(4, 3, 'Acer Nitro 5 AN515 56 51N4', 'acer', 20500000, 20, 1, 'assets/images/acer/acer4.jpg', 'assets/images/acer/acer4_1.jpg', 'assets/images/acer/acer4_2.jpg', 'Acer Nitro 5 AN515 56 51N4 sở hữu thiết kế ấn tượng với hai màu đen-đỏ chủ đạo. Bề mặt được thiết kế hầm hố và góc cạnh hơn. Thể hiện phong cách hiếu chiến đặc trưng của dòng Nitro. Viền màn hình siêu mỏng 6.3mm cho cảm giác không gian thoáng đãng hơn trước.', '0000-00-00 00:00:00'),
(5, 4, 'Acer Nitro 5 AN515 45 R0B6', 'acer', 30500000, 20, 1, 'assets/images/acer/acer2.jpg', 'assets/images/acer/acer2_1.jpg', 'assets/images/acer/acer2_2.jpg', 'Nitro 5 2021 AN515 45 R0B6 sở hữu thiết kế ấn tượng với hai màu đen-đỏ chủ đạo. Bề mặt được thiết kế hầm hố và góc cạnh hơn. Thể hiện phong cách hiếu chiến đặc trưng của dòng Nitro. Viền màn hình siêu mỏng 6.3mm cho cảm giác không gian thoáng đãng hơn trước.', '0000-00-00 00:00:00'),
(6, 5, 'ASUS TUF Gaming F15 FX506HC HN', 'asus', 23800000, 20, 1, 'assets/images/asus/asus1.jpg', 'assets/images/asus/asus1_1.jpg', 'assets/images/asus/asus1_2.jpg', 'Laptop Asus Gaming F15 FX506HC-HN002T trang bị CPU Intel Core i5-11400H và thêm GPU GeForce GTX™ 3050 hỗ trợ xử lý hình ảnh cực chất. Bạn có thể trải nghiệm những khung hình tựa game vô cùng ấn tượng.', '0000-00-00 00:00:00'),
(7, 6, 'Asus ROG Strix G15 G513QC HN01', 'asus', 27990000, 20, 1, 'assets/images/asus/asus2.jpg', 'assets/images/asus/asus2_1.jpg', 'assets/images/asus/asus2_2.jpg', 'ROG Strix G15 G513QC HN015T là hiện thân của phong cách thiết kế tối giản, mang đến trải nghiệm cốt lõi mãnh liệt nhất. Dư sức để chiến những tựa game nặng kí và xử lý đa nhiệm cùng Windows 10. ', '0000-00-00 00:00:00'),
(9, 8, 'Asus TUF Dash FX516PE HN005T', 'asus', 27600000, 20, 1, 'assets/images/asus/asus4.jpg', 'assets/images/asus/asus4_1.jpg', 'assets/images/asus/asus4_2.jpg', 'ASUS TUF Gaming Dash F15 là một chiếc laptop gaming hạng nặng với bộ vi xử lý Intel i7 Gen 11 mới nhất kết hợp với GPU Nvidia RTX 3060 mới nhất và một thiết lập âm thanh tổng thể tuyệt vời. ', '0000-00-00 00:00:00'),
(10, 9, 'MSI Bravo 15 A4DCR 270VN', 'msi', 17990000, 20, 1, 'assets/images/msi/msi1.jpg', 'assets/images/msi/msi1_1.jpg', 'assets/images/msi/msi1_2.jpg', 'Laptop sử dụng công nghệ 7nm hiện đại, trang bị tối đa tới vi xử lí AMD Ryzen 5 4600H và card đồ họa Radeon™ RX5300M 3GB, đem tới cho chiếc laptop khi chơi game có hiệu năng ngang tầm máy desktop.', '0000-00-00 00:00:00'),
(11, 10, 'MSI GF75 Thin 10SCXR 013VN', 'msi', 21790000, 20, 1, 'assets/images/msi/msi2.jpg', 'assets/images/msi/msi2_1.jpg', 'assets/images/msi/msi2_2.jpg', 'MSI GF75 Thin 10SCXR 013VN lại sở hữu một vẻ ngoài giản dị đến mức khó tin, các bạn có thể nhầm lẫn chiếc sản phẩm với phân khúc laptop văn phòng.', '0000-00-00 00:00:00'),
(12, 11, 'MSI Gaming Katana GF76 ', 'msi', 29989000, 20, 1, 'assets/images/msi/msi3.jpg', 'assets/images/msi/msi3_1.jpg', 'assets/images/msi/msi3_2.jpg', 'ấy cảm hứng từ những thanh Katana, hình ảnh của dòng sản phẩm Katana GF mới được thiết kế bởi họa sĩ minh họa người Nhật Tsuyoshi Nagano, nổi tiếng với các tác phẩm được sử dụng trong dòng game “Tam quốc chí”. Katana GF76 và GF66 hứa hẹn sẽ đem tới nguồn cảm hứng chinh phục to lớn cho các game thủ. Với card đồ họa NVIDIA GeForce RTX 3050 cùng bàn phím có cụm phím số riêng biệt (kể cả trên phiên bản 15-inch), các mẫu laptop Katana GF không chỉ đơn giản là laptop gaming phổ thông; chúng còn là người bạn đồng hành đáng tin cậy trên các chiến trường ảo.', '0000-00-00 00:00:00'),
(13, 12, 'MSI Pulse GL66 11UDK 255VN', 'msi', 31490000, 20, 1, 'assets/images/msi/msi4.jpg', 'assets/images/msi/msi4_1.jpg', 'assets/images/msi/msi4_2.jpg', 'Với lớp vỏ kim loại màu xám titan cùng các đường viền góc cạnh, Pulse GL series cực kì phù hợp với những người ưa chuộng phong cách thiết kế viễn tưởng. Khu vực xung quanh bàn phím cũng được trang trí theo phong cách giống như giao diện hiển thị ngoại vi trên bảng điều khiển. Thiết kế hình lục giác ở mặt đáy lấy cảm hứng từ các bộ phim kinh điển, mô phỏng lại cảnh những chiến đấu cơ liên ngân hà đang xuất trận trên các tinh cầu xa xôi. Sở hữu ngay Pulse GL series và giải phóng sức mạnh tiềm ẩn bên trong.', '0000-00-00 00:00:00'),
(14, 13, 'Dell Inspiron 5301', 'dell', 24989000, 20, 1, 'assets/images/dell/dell1.jpg', 'assets/images/dell/dell1_1.jpg', 'assets/images/dell/dell1_2.jpg', 'Laptop Dell Inspiron 5301 tối đa hóa khả năng di động của bạn với ExpressCharge™, sạc pin của bạn trong nháy mắt (lên đến 80% trong 60 phút)', '0000-00-00 00:00:00'),
(15, 14, 'Dell Latitude 3420', 'dell', 15389000, 20, 1, 'assets/images/dell/dell2.jpg', 'assets/images/dell/dell2_1.jpg', 'assets/images/dell/dell2_2.jpg', 'Laptop Dell Latitude 3420 được thiết kế với kiểu dáng đơn giản, cứng cáp, sản phẩm có trọng lượng tương đối nhẹ để bạn dễ dàng mang theo bên mình.', '0000-00-00 00:00:00'),
(16, 15, 'Dell Inspiron 5410 2 in 1 ', 'dell', 25789000, 20, 1, 'assets/images/dell/dell3.jpg', 'assets/images/dell/dell3_1.jpg', 'assets/images/dell/dell3_2.jpg', 'Hiện đại và thời thượng hơn cùng laptop Dell Inspiron 14 5410 2 in 1, với hiệu năng vượt trội giúp bạn giải quyết mọi tác vụ, đem đến hiệu suất công việc cao.', '0000-00-00 00:00:00'),
(17, 16, 'Dell Inspiron 5505', 'dell', 21989000, 20, 1, 'assets/images/dell/dell4.jpg', 'assets/images/msi/dell4_1.jpg', 'assets/images/dell/dell4_2.jpg', 'Dell Inspiron 5505  toát lên sự cao cấp nhờ thiết kế đẹp, mạnh mẽ và độ mỏng ấn tượng. Chỉ với trọng lượng 1.72 kg và độ mỏng 17 mm. Máy được hoàn thiện từ bộ vỏ kim loại, laptop trở nên vừa sang trọng, vừa có độ bền cao.', '0000-00-00 00:00:00'),
(23, 7, 'Asus ROG Zephyrus G14 GA401QH', 'asus', 2830000, 5, 1, 'assets/images/asus/asus3.jpg', 'assets/images/asus/asus3_1.jpg', 'assets/images/asus/asus3_2.jpg', 'ROG Zephyrus G14 2021 sở hữu sức mạnh chưa từng có vào một thân máy 14 inch chỉ nặng 1,6kg. CPU AMD Ryzen ™ 7 5800HS được điều chỉnh với mức tiêu thụ điện năng thấp hơn và bộ tản nhiệt mang lại hiệu suất vượt trội. \r\n\r\nCông nghệ quy trình 7nm tiên tiến đặt tối đa 8 lõi và 16 luồng trên một con chip duy nhất, cho phép bạn vượt qua khối lượng công việc nặng nề. Card đồ họa GeForce GTX ™ 1650 có thể mở khóa hiệu suất cao hơn nữa với ROG Boost và chuyển từ chơi game nhịp độ nhanh sang tạo nội dung trong nháy mắt.', '2021-08-10 15:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(11) NOT NULL,
  `pc_name` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `cpu` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ram` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `mainboard` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `vga` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ssd` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `hdd` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `psu` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `case_pc` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `comment` varchar(225) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `rate` int(5) DEFAULT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `month` int(11) DEFAULT NULL,
  `qty` int(30) DEFAULT NULL,
  `amount` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `month`, `qty`, `amount`) VALUES
(4, 8, 5, 143800000);

-- --------------------------------------------------------

--
-- Table structure for table `user_guest`
--

CREATE TABLE `user_guest` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `user` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `password` varchar(16) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `gender` varchar(5) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `address` varchar(225) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `email` varchar(225) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `user_guest`
--

INSERT INTO `user_guest` (`id`, `name`, `user`, `password`, `gender`, `address`, `email`, `phone`, `creat_at`) VALUES
(2, 'tesssdasdad', 'test', '1', '1', '1 Hoàng Đạo Thúy, Thanh Xuân, Hà Nội', 'muoi0886@gmail.com', 215548524, '2021-08-05 09:54:20'),
(3, 'tesssdasdad', 'muoi123', '1', '1', 'long biên', 'muoi138065@nuce.edu.vn', 23144231, '2021-08-09 16:31:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_staff`
--
ALTER TABLE `admin_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`catalog_id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop_detail`
--
ALTER TABLE `laptop_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`product`);

--
-- Indexes for table `order_main`
--
ALTER TABLE `order_main`
  ADD PRIMARY KEY (`id`,`amount`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`,`product_id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`pc_name`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_guest`
--
ALTER TABLE `user_guest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_staff`
--
ALTER TABLE `admin_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laptop_detail`
--
ALTER TABLE `laptop_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_main`
--
ALTER TABLE `order_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_guest`
--
ALTER TABLE `user_guest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
