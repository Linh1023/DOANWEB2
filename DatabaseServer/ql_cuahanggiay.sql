-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 05:15 AM
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
-- Database: `ql_cuahanggiay`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MaSP` varchar(50) NOT NULL,
  `MaDonHang` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` int(11) NOT NULL,
  `TongTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`MaSP`, `MaDonHang`, `SoLuong`, `Gia`, `TongTien`) VALUES
('001', 1, 10, 1190000, 11900000),
('001', 2, 10, 1190000, 11900000),
('003', 5, 1, 1900000, 1900000),
('007', 3, 1, 3100000, 3100000),
('007', 4, 2, 3100000, 6200000),
('008', 7, 1, 3500000, 3500000),
('010', 8, 1, 2900000, 2900000),
('013', 5, 1, 4100000, 4100000),
('013', 6, 1, 4100000, 4100000),
('013', 9, 1, 4100000, 4100000),
('021', 10, 1, 3500000, 3500000),
('031', 12, 1, 550000, 550000);

-- --------------------------------------------------------

--
-- Table structure for table `chitietphieunhap`
--

CREATE TABLE `chitietphieunhap` (
  `MaSP` varchar(50) NOT NULL,
  `MaPhieu` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` int(11) NOT NULL,
  `TongGia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhsachanh`
--

CREATE TABLE `danhsachanh` (
  `MaAnh` varchar(50) NOT NULL,
  `Anh` varchar(50) NOT NULL,
  `MaSP` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDonHang` int(11) NOT NULL,
  `LuuY` varchar(50) NOT NULL,
  `MaTaiKhoan` varchar(50) NOT NULL,
  `NgayDat` date NOT NULL,
  `TrangThai` tinyint(1) NOT NULL,
  `TongTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`MaDonHang`, `LuuY`, `MaTaiKhoan`, `NgayDat`, `TrangThai`, `TongTien`) VALUES
(1, '', 'TK-001', '2023-02-23', 1, 11900000),
(2, '', 'TK-003', '2022-09-08', 0, 11900000),
(3, '', 'TK-002', '2021-07-12', 0, 3100000),
(4, '', 'TK-003', '2020-08-09', 0, 6200000),
(5, '', 'TK-004', '2018-09-13', 0, 6000000),
(6, '', 'TK-001', '2018-09-17', 0, 4100000),
(7, '', 'TK-002', '2019-02-17', 0, 3500000),
(8, '', 'TK-003', '2019-02-28', 1, 2900000),
(9, '', 'TK-004', '2020-05-28', 1, 4100000),
(10, '', 'TK-001', '2018-06-28', 1, 3500000),
(12, '', 'TK-003', '2023-08-24', 1, 550000);

-- --------------------------------------------------------

--
-- Table structure for table `hang`
--

CREATE TABLE `hang` (
  `MaHang` varchar(50) NOT NULL,
  `Ten` varchar(50) NOT NULL,
  `NgayTao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hang`
--

INSERT INTO `hang` (`MaHang`, `Ten`, `NgayTao`) VALUES
('MH-001', 'Adidas', '2022-02-23'),
('MH-002', 'Nike', '2021-09-23'),
('MH-021', 'Pan Thailand', '2020-06-18'),
('MH-033', 'Puma', '2023-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKhach` varchar(50) NOT NULL,
  `TichDiem` int(11) NOT NULL,
  `TenKhach` varchar(50) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `SDT` varchar(50) NOT NULL,
  `MaTaiKhoan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKhach`, `TichDiem`, `TenKhach`, `DiaChi`, `SDT`, `MaTaiKhoan`) VALUES
('KH-001', 0, 'Le Trung Kien', '187 Le Van Tho Phuong 15 Quan Go Vap', '0908123456', 'TK-001'),
('KH-002', 0, 'Nguyen Thi Trang', '589/965 Nguyen Kiem Quan Go Vap', '0908878795', 'TK-002');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNhanVien` varchar(50) NOT NULL,
  `Quyen` tinyint(1) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `TenNhanVien` varchar(50) NOT NULL,
  `SDT` varchar(50) NOT NULL,
  `MaTaiKhoan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNhanVien`, `Quyen`, `DiaChi`, `TenNhanVien`, `SDT`, `MaTaiKhoan`) VALUES
('NV-001', 1, '589/965 Le Van Duyet Quan Binh Thanh', 'Nguyen Thi Linh', '0569896512', 'TK-003'),
('NV-002', 1, '589/965 Le Quang Dinh Quan Binh Thanh', 'Nguyen Van Tai', '0598978954', 'TK-004');

-- --------------------------------------------------------

--
-- Table structure for table `phieunhaphang`
--

CREATE TABLE `phieunhaphang` (
  `MaPhieu` int(11) NOT NULL,
  `NgayTao` date NOT NULL,
  `TongDon` int(11) NOT NULL,
  `MaHang` varchar(50) NOT NULL,
  `MaTaiKhoan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(50) NOT NULL,
  `Ten` varchar(50) NOT NULL,
  `Gia` int(6) NOT NULL,
  `KhuyenMai` varchar(50) NOT NULL,
  `AnhChinh` varchar(50) NOT NULL,
  `DanhMuc` varchar(50) NOT NULL,
  `MoTa` varchar(50) NOT NULL,
  `NgayTao` date NOT NULL,
  `MaHang` varchar(50) NOT NULL,
  `SLTonKho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `Ten`, `Gia`, `KhuyenMai`, `AnhChinh`, `DanhMuc`, `MoTa`, `NgayTao`, `MaHang`, `SLTonKho`) VALUES
('001', 'ADIDAS NEMEZIZ 19.3 TF TRẮNG XANH MUTATOR 2020 PAC', 1190000, '#', '#', 'Giày đinh sân cỏ nhân tạo', '#', '2021-09-23', 'MH-001', 100),
('002', 'ADIDAS COPA SENSE.3 TF GAME DATA PACK - GZ1366', 1890000, '#', '#', 'Giày đinh sân cỏ nhân tạo', '#', '2022-06-23', 'MH-001', 90),
('003', 'ADIDAS PREDATOR EDGE.3 L TF - GV8527 Data Game Pac', 1900000, '#', '#', 'Giày đinh sân cỏ nhân tạo', '#', '2022-06-23', 'MH-001', 20),
('004', ' ADIDAS PREDATOR EDGE .1 TF GW9997 SAPPHIRE EDGE', 2200000, '#', '#', 'Giày đinh sân cỏ nhân tạo', '#', '2021-12-10', 'MH-001', 89),
('005', 'ADIDAS X SPEEDPORTAL.1 TF GW8973 GAME DATA PACK - ', 2950000, '#', '#', 'Giày đinh sân cỏ nhân tạo', '#', '2021-12-12', 'MH-001', 76),
('006', 'ADIDAS X SPEEDPORTAL .1 FG GW8426 GAME DATA PACK', 3800000, '#', '#', 'Giày đinh sân cỏ tự nhiên', '#', '2023-03-11', 'MH-001', 80),
('007', 'ADIDAS PREDATOR MUTATOR 20.1 FG EG1602', 3100000, '#', '#', 'Giày đinh sân cỏ tự nhiên', '#', '2021-03-11', 'MH-001', 80),
('008', 'ADIDAS X SPEEDFLOW .1 FG GW7456 DIAMOND EDGE PACK ', 3500000, '#', '#', 'Giày đinh sân cỏ tự nhiên', '#', '2021-03-11', 'MH-001', 80),
('010', 'NIKE ZOOM MERCURIAL VAPOR 15 PRO TF TRẮNG', 2900000, '#', '#', 'Giày đinh sân cỏ nhân tạo', '#', '2023-02-10', 'MH-002', 190),
('011', 'NIKE GRIPKNIT PHANTOM GX ELITE FG', 5500000, '#', '#', 'Giày đinh sân cỏ tự nhiên', '#', '2020-09-10', 'MH-002', 100),
('012', 'NIKE TIEMPO LEGEND 9 ELITE FG CZ8482-075 RECHARGE ', 3900000, '#', '#', 'Giày đinh sân cỏ tự nhiên', '#', '2022-09-11', 'MH-002', 100),
('013', 'NIKE MERCURIAL SUPERFLY 8 ELITE FG CV0958-760 MOTI', 4100000, '#', '#', 'Giày đinh sân cỏ tự nhiên', '#', '2023-09-11', 'MH-002', 100),
('016', ' NIKE TIEMPO LEGEND 9 ACADEMY TF WORLD CUP', 1690000, '#', '#', 'Giày đinh sân cỏ nhân tạo', '#', '2020-09-10', 'MH-002', 100),
('017', 'NIKE TIEMPO REACT LEGEND 9 PRO TF WORLD CUP', 2550000, '#', '#', 'Giày đinh sân cỏ nhân tạo', '#', '2021-09-10', 'MH-002', 100),
('018', 'NIKE TIEMPO REACT LEGEND 9 PRO TF', 2550000, '#', '#', 'Giày đinh sân cỏ nhân tạo', '#', '2021-09-10', 'MH-002', 101),
('019', ' NIKE ZOOM MERCURIAL VAPOR 15 PRO TF HỒNG', 2950000, '#', '#', 'Giày đinh sân cỏ nhân tạo', '#', '2023-02-10', 'MH-002', 190),
('020', '  PUMA ULTRA ULTIMATE CAGE TF 10689301 FASTEST PAC', 2850000, '#', '#', 'Giày đinh sân cỏ nhân tạo', '#', '2023-02-10', 'MH-033', 190),
('021', 'PUMA ULTRA 1.3 FG/AG 106477-02 FASTER FOOTBALL PAC', 3500000, '#', '#', 'Giày đinh sân cỏ tự nhiên', '#', '2023-01-10', 'MH-033', 190),
('022', 'PUMA FUTURE Z NEYMAR X COPA AMERICA FG 10684201', 6500000, '#', '#', 'Giày đinh sân cỏ tự nhiên', '#', '2022-01-10', 'MH-033', 190),
('031', 'GIÀY PAN VIGOR X TF ĐẾ ĐINH', 550000, '#', '#', 'Giày đinh sân cỏ nhân tạo', '#', '2023-07-11', 'MH-021', 190);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTaiKhoan` varchar(50) NOT NULL,
  `TenDN` varchar(50) NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NgayTao` date NOT NULL,
  `TinhTrang` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaTaiKhoan`, `TenDN`, `MatKhau`, `Email`, `NgayTao`, `TinhTrang`) VALUES
('TK-001', 'TK1', '1', 'TK1@gmail.com', '2020-09-10', 1),
('TK-002', 'TK2', '1', 'TK2@gmail.com', '2022-06-23', 1),
('TK-003', 'TK3', '1', 'TK3@gmail.com', '2021-09-23', 1),
('TK-004', 'TK4', '1', 'TK4@gmail.com', '2021-09-23', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`MaSP`,`MaDonHang`),
  ADD KEY `MaDonHang` (`MaDonHang`);

--
-- Indexes for table `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  ADD PRIMARY KEY (`MaSP`,`MaPhieu`),
  ADD KEY `MaPhieu` (`MaPhieu`);

--
-- Indexes for table `danhsachanh`
--
ALTER TABLE `danhsachanh`
  ADD PRIMARY KEY (`MaAnh`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDonHang`),
  ADD KEY `MaTaiKhoan` (`MaTaiKhoan`);

--
-- Indexes for table `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`MaHang`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKhach`),
  ADD KEY `MaTaiKhoan` (`MaTaiKhoan`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNhanVien`),
  ADD KEY `MaTaiKhoan` (`MaTaiKhoan`);

--
-- Indexes for table `phieunhaphang`
--
ALTER TABLE `phieunhaphang`
  ADD PRIMARY KEY (`MaPhieu`),
  ADD KEY `MaHang` (`MaHang`),
  ADD KEY `MaTaiKhoan` (`MaTaiKhoan`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaHang` (`MaHang`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTaiKhoan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`MaDonHang`) REFERENCES `donhang` (`MaDonHang`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  ADD CONSTRAINT `chitietphieunhap_ibfk_1` FOREIGN KEY (`MaPhieu`) REFERENCES `phieunhaphang` (`MaPhieu`),
  ADD CONSTRAINT `chitietphieunhap_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `danhsachanh`
--
ALTER TABLE `danhsachanh`
  ADD CONSTRAINT `danhsachanh_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `taikhoan` (`MaTaiKhoan`);

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `taikhoan` (`MaTaiKhoan`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `taikhoan` (`MaTaiKhoan`);

--
-- Constraints for table `phieunhaphang`
--
ALTER TABLE `phieunhaphang`
  ADD CONSTRAINT `phieunhaphang_ibfk_1` FOREIGN KEY (`MaHang`) REFERENCES `hang` (`MaHang`),
  ADD CONSTRAINT `phieunhaphang_ibfk_2` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `taikhoan` (`MaTaiKhoan`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaHang`) REFERENCES `hang` (`MaHang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
