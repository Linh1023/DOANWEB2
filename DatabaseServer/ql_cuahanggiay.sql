-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 16, 2023 lúc 03:38 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_cuahanggiay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anhphu`
--

CREATE TABLE `anhphu` (
  `Ma` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaSP` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Anh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MaSP` varchar(50) NOT NULL,
  `MaDonHang` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` int(11) NOT NULL,
  `TongTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`MaSP`, `MaDonHang`, `SoLuong`, `Gia`, `TongTien`) VALUES
('001', 2, 10, 1190000, 11900000),
('001', 29, 2, 1011500, 2023000),
('001', 31, 1, 1011500, 1011500),
('003', 5, 1, 1900000, 1900000),
('003', 35, 1, 1710000, 1710000),
('004', 26, 3, 2200000, 6600000),
('004', 27, 3, 2200000, 6600000),
('004', 30, 2, 1760000, 3520000),
('004', 36, 1, 1760000, 1760000),
('007', 3, 1, 3100000, 3100000),
('007', 4, 2, 3100000, 6200000),
('008', 7, 1, 3500000, 3500000),
('010', 8, 1, 2900000, 2900000),
('010', 31, 1, 2900000, 2900000),
('011', 32, 1, 5500000, 5500000),
('011', 37, 1, 5500000, 5500000),
('013', 5, 1, 4100000, 4100000),
('013', 6, 1, 4100000, 4100000),
('013', 9, 1, 4100000, 4100000),
('021', 10, 1, 3500000, 3500000),
('021', 26, 1, 3500000, 3500000),
('021', 27, 3, 3500000, 10500000),
('022', 33, 1, 6500000, 6500000),
('031', 12, 1, 550000, 550000),
('041', 34, 1, 850000, 850000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietphieunhap`
--

CREATE TABLE `chitietphieunhap` (
  `MaSP` varchar(50) NOT NULL,
  `MaPhieu` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` int(11) NOT NULL,
  `TongGia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietphieunhap`
--

INSERT INTO `chitietphieunhap` (`MaSP`, `MaPhieu`, `SoLuong`, `Gia`, `TongGia`) VALUES
('001', 1, 50, 1190000, 59500000),
('005', 6, 30, 2950000, 88500000),
('008', 5, 10, 3500000, 35000000),
('010', 2, 10, 2900000, 29000000),
('010', 5, 10, 2900000, 29000000),
('022', 3, 20, 6500000, 130000000),
('031', 4, 50, 550000, 27500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietquyen`
--

CREATE TABLE `chitietquyen` (
  `MaChiTiet` varchar(50) NOT NULL,
  `TenChiTiet` varchar(50) NOT NULL,
  `MoTa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietquyen`
--

INSERT INTO `chitietquyen` (`MaChiTiet`, `TenChiTiet`, `MoTa`) VALUES
('BD', 'Quan ly bai dang', 'Duoc thao tac quan ly bai dang'),
('DH', 'Quan ly don hang', 'Duoc thao tac quan ly don hang'),
('DM', 'Quan ly danh muc', 'Duoc thao tac quan ly danh muc'),
('H', 'Quan ly hang', 'Duoc thao tac quan ly hang'),
('KM', 'Quan ly khuyen mai', 'Duoc thao tac quan ly khuyen mai'),
('ND', 'Quan ly nguoi dung', 'Duoc thao tac quan ly nguoi dung'),
('PN', 'Quan ly phieu nhap', 'Duoc thao tac quan ly phieu nhap'),
('SP', 'Quan ly san pham', 'Duoc thao tac quan ly san pham');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenDM` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TrangThai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`, `TrangThai`) VALUES
('DM-1', 'Giay dinh san co nhan tao\r\n', 1),
('DM-2', 'Giay dinh san co tu nhien', 1),
('DM-3', 'Giay tre em', 1),
('DM-4', 'Giay de bang', 1),
('DM-5', 'test', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `MaDonHang` int(11) NOT NULL,
  `MaTaiKhoan` int(50) NOT NULL,
  `NgayDat` date NOT NULL,
  `TrangThai` tinyint(1) NOT NULL,
  `TongTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`MaDonHang`, `MaTaiKhoan`, `NgayDat`, `TrangThai`, `TongTien`) VALUES
(2, 2, '2023-12-31', 1, 11900000),
(3, 2, '2023-07-12', 1, 3100000),
(4, 2, '2023-08-09', 1, 6200000),
(5, 3, '2023-09-13', 1, 6000000),
(6, 2, '2023-09-17', 1, 4100000),
(7, 2, '2023-02-17', 1, 3500000),
(8, 2, '2023-02-28', 1, 2900000),
(9, 3, '2023-05-28', 1, 4100000),
(10, 2, '2023-06-23', 0, 3500000),
(12, 3, '2023-08-24', 1, 550000),
(26, 2, '2023-05-11', 1, 10100000),
(27, 2, '2023-05-11', 1, 17100000),
(29, 2, '2023-05-11', 1, 2023000),
(30, 7, '2023-05-14', 1, 3520000),
(31, 7, '2023-05-14', 0, 3911500),
(32, 7, '2023-05-14', 0, 5500000),
(33, 7, '2023-05-14', 0, 6500000),
(34, 7, '2023-05-14', 0, 850000),
(35, 7, '2023-05-14', 0, 1710000),
(36, 7, '2023-05-15', 0, 1760000),
(37, 7, '2023-05-16', 0, 5500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang`
--

CREATE TABLE `hang` (
  `MaHang` varchar(50) NOT NULL,
  `Ten` varchar(50) NOT NULL,
  `NgayTao` date NOT NULL,
  `TrangThai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang`
--

INSERT INTO `hang` (`MaHang`, `Ten`, `NgayTao`, `TrangThai`) VALUES
('MH-001', 'Adidas', '2022-02-23', 1),
('MH-002', 'Nike', '2021-09-23', 1),
('MH-021', 'Pan Thailand', '2020-06-18', 1),
('MH-033', 'Puma', '2023-02-23', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKhach` int(50) NOT NULL,
  `TenKhach` varchar(50) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `SDT` varchar(50) NOT NULL,
  `MaTaiKhoan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKhach`, `TenKhach`, `DiaChi`, `SDT`, `MaTaiKhoan`) VALUES
(1, 'Le Trung Kien', '187 Le Van Tho Phuong 15 Quan Go Vap', '0908123456', 2),
(2, 'Nguyen Thi Trang', '589/965 Nguyen Kiem Quan Go Vap', '0908878795', 3),
(3, 'kien', '456 Lê Đức Thọ', '123456789', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKhuyenMai` varchar(50) NOT NULL,
  `TenKhuyenMai` varchar(50) NOT NULL,
  `MoTa` varchar(50) NOT NULL,
  `TiLeGiam` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKhuyenMai`, `TenKhuyenMai`, `MoTa`, `TiLeGiam`) VALUES
('#', '#', '#', 0),
('KM_001', 'Mung sinh nhat cua hang', 'Cac doi giay ap dung se duoc giam 15%', 15),
('KM_002', 'Mung worldcup ', 'Cac doi giay ap dung se duoc giam 10%', 10),
('KM_003', 'Mung viet nam vo dich Sea Game', 'Cac doi giay ap dung se duoc giam 20%', 20),
('KM_005', 'Mua Euro', 'Cac giay ap dung duoc giam 7%', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNhanVien` varchar(50) NOT NULL,
  `Quyen` tinyint(1) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `TenNhanVien` varchar(50) NOT NULL,
  `SDT` varchar(50) NOT NULL,
  `MaTaiKhoan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNhanVien`, `Quyen`, `DiaChi`, `TenNhanVien`, `SDT`, `MaTaiKhoan`) VALUES
('NV-001', 1, '589/965 Le Van Duyet Quan Binh Thanh', 'Nguyen Thi Linh', '0569896512', 3),
('NV-002', 1, '589/965 Le Quang Dinh Quan Binh Thanh', 'Nguyen Van Tai', '0598978954', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `MaQuyen` varchar(50) NOT NULL,
  `MaChiTiet` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`MaQuyen`, `MaChiTiet`) VALUES
('Admin', 'BD'),
('Admin', 'DH'),
('Admin', 'DM'),
('Admin', 'H'),
('Admin', 'KM'),
('Admin', 'ND'),
('Admin', 'PN'),
('Admin', 'SP'),
('BTV', 'BD'),
('BTV', 'DH'),
('BTV', 'PN'),
('User', 'SP');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhaphang`
--

CREATE TABLE `phieunhaphang` (
  `MaPhieu` int(11) NOT NULL,
  `NgayTao` date NOT NULL,
  `TongDon` int(11) NOT NULL,
  `MaHang` varchar(50) NOT NULL,
  `MaTaiKhoan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieunhaphang`
--

INSERT INTO `phieunhaphang` (`MaPhieu`, `NgayTao`, `TongDon`, `MaHang`, `MaTaiKhoan`) VALUES
(1, '2021-09-23', 59500000, 'MH-001', 3),
(2, '2022-06-23', 29000000, 'MH-002', 4),
(3, '2022-12-23', 130000000, 'MH-033', 3),
(4, '2022-12-09', 27500000, 'MH-021', 3),
(5, '2020-06-18', 64000000, 'MH-002', 4),
(6, '2020-09-10', 88500000, 'MH-001', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyen`
--

CREATE TABLE `quyen` (
  `MaQuyen` varchar(50) NOT NULL,
  `TenQuyen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quyen`
--

INSERT INTO `quyen` (`MaQuyen`, `TenQuyen`) VALUES
('Admin', 'Quản lý'),
('BTV', 'Biên tập viên'),
('User', 'Thành viên đăng ký');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(50) NOT NULL,
  `Ten` varchar(50) NOT NULL,
  `Gia` int(6) NOT NULL,
  `MaKhuyenMai` varchar(50) NOT NULL,
  `AnhChinh` varchar(50) NOT NULL,
  `MaDM` varchar(50) NOT NULL,
  `MoTa` varchar(50) NOT NULL,
  `NgayTao` date NOT NULL,
  `MaHang` varchar(50) NOT NULL,
  `SLTonKho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `Ten`, `Gia`, `MaKhuyenMai`, `AnhChinh`, `MaDM`, `MoTa`, `NgayTao`, `MaHang`, `SLTonKho`) VALUES
('001', 'ADIDAS NEMEZIZ 19.3 TF TRẮNG XANH MUTATOR 2020 PAC', 1190000, 'KM_001', '001.jpg', 'DM-1', '#', '2021-09-23', 'MH-001', 100),
('002', 'ADIDAS COPA SENSE.3 TF GAME DATA PACK - GZ1366', 1890000, 'KM_002', '002.jpg', 'DM-1', '#', '2022-06-23', 'MH-001', 90),
('003', 'ADIDAS PREDATOR EDGE.3 L TF - GV8527 Data Game Pac', 1900000, 'KM_002', '003.jpg', 'DM-1', '#', '2022-06-23', 'MH-001', 20),
('004', ' ADIDAS PREDATOR EDGE .1 TF GW9997 SAPPHIRE EDGE', 2200000, 'KM_003', '004.jpg', 'DM-1', '#', '2021-12-10', 'MH-001', 89),
('005', 'ADIDAS X SPEEDPORTAL.1 TF GW8973 GAME DATA PACK - ', 2950000, 'KM_002', '005.jpg', 'DM-1', '#', '2021-12-12', 'MH-001', 76),
('006', 'ADIDAS X SPEEDPORTAL .1 FG GW8426 GAME DATA PACK', 3800000, 'KM_001', '006.jpg', 'DM-2', '#', '2023-03-11', 'MH-001', 80),
('007', 'ADIDAS PREDATOR MUTATOR 20.1 FG EG1602', 3100000, '#', '007.jpg', 'DM-2', '#', '2021-03-11', 'MH-001', 80),
('008', 'ADIDAS X SPEEDFLOW .1 FG GW7456 DIAMOND EDGE PACK ', 3500000, '#', '008.jpg', 'DM-2', '#', '2021-03-11', 'MH-001', 80),
('010', 'NIKE ZOOM MERCURIAL VAPOR 15 PRO TF TRẮNG', 2900000, '#', '010.jpg', 'DM-1', '#', '2023-02-10', 'MH-002', 190),
('011', 'NIKE GRIPKNIT PHANTOM GX ELITE FG', 5500000, '#', '011.jpg', 'DM-2', '#', '2020-09-10', 'MH-002', 100),
('012', 'NIKE TIEMPO LEGEND 9 ELITE FG CZ8482-075 RECHARGE ', 3900000, '#', '012.jpg', 'DM-2', '#', '2022-09-11', 'MH-002', 100),
('013', 'NIKE MERCURIAL SUPERFLY 8 ELITE FG CV0958-760 MOTI', 4100000, '#', '013.jpg', 'DM-2', '#', '2023-09-11', 'MH-002', 100),
('016', ' NIKE TIEMPO LEGEND 9 ACADEMY TF WORLD CUP', 1690000, '#', '016.jpg', 'DM-1', '#', '2020-09-10', 'MH-002', 100),
('017', 'NIKE TIEMPO REACT LEGEND 9 PRO TF WORLD CUP', 2550000, '#', '017.jpg', 'DM-1', '#', '2021-09-10', 'MH-002', 100),
('018', 'NIKE TIEMPO REACT LEGEND 9 PRO TF', 2550000, '#', '018.jpg', 'DM-1', '#', '2021-09-10', 'MH-002', 101),
('019', ' NIKE ZOOM MERCURIAL VAPOR 15 PRO TF HỒNG', 2950000, '#', '019.jpg', 'DM-1', '#', '2023-02-10', 'MH-002', 190),
('020', '  PUMA ULTRA ULTIMATE CAGE TF 10689301 FASTEST PAC', 2850000, '#', '020.jpg', 'DM-1', '#', '2023-02-10', 'MH-033', 190),
('021', 'PUMA ULTRA 1.3 FG/AG 106477-02 FASTER FOOTBALL PAC', 3500000, '#', '021.jpg', 'DM-2', '#', '2023-01-10', 'MH-033', 190),
('022', 'PUMA FUTURE Z NEYMAR X COPA AMERICA FG 10684201', 6500000, '#', '022.jpg', 'DM-2', '#', '2022-01-10', 'MH-033', 190),
('031', 'GIÀY PAN VIGOR X TF ĐẾ ĐINH', 550000, '#', '031.jpg', 'DM-1', '#', '2023-07-11', 'MH-021', 190),
('032', 'GIÀY PAN VIGOR X LTD XANH DƯƠNG', 1850000, '#', '032.jpg', 'DM-4', '#', '2022-07-11', 'MH-021', 190),
('033', 'GIÀY PAN WAVE II LEGEND IC ĐEN', 990000, '#', '033.jpg', 'DM-4', '#', '2023-03-11', 'MH-021', 190),
('034', 'GIÀY PAN VIGOR X IC ĐẾ BẰNG', 520000, '#', '034.jpg', 'DM-4', '#', '2023-02-11', 'MH-021', 190),
('035', 'GIÀY PAN SUPER SONIC IC ĐẾ BẰNG', 540000, '#', '035.jpg', 'DM-4', '#', '2023-02-11', 'MH-021', 190),
('036', 'PHANTOM VSN ACADEMY BRIGHT CRIMSON IC', 1500000, '#', '035.jpg', 'DM-4', '#', '2023-02-11', 'MH-021', 190),
('041', 'NIKE JR. MERCURIAL VAPOR 14 ACADEMY TF CV0822-474 ', 850000, '#', '041.jpg', 'DM-3', '#', '2022-02-11', 'MH-002', 190),
('042', 'NIKE PHANTOM VNM ACADEMY TF KIDS AO0377-600', 1250000, '#', '042.jpg', 'DM-3', '#', '2022-02-11', 'MH-002', 190),
('043', 'NIKE PHANTOM VSN ACADEMY TF KIDS AR4343-060', 750000, '#', '043.jpg', 'DM-3', '#', '2022-02-11', 'MH-002', 190),
('044', '  NIKE TIEMPO LEGEND 9 ACADEMY TF FOR KIDS', 850000, '#', '044.jpg', 'DM-3', '#', '2022-02-11', 'MH-002', 190);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTaiKhoan` int(50) NOT NULL,
  `TenDN` varchar(50) NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NgayTao` date NOT NULL,
  `TinhTrang` tinyint(1) NOT NULL,
  `Quyen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`MaTaiKhoan`, `TenDN`, `MatKhau`, `Email`, `NgayTao`, `TinhTrang`, `Quyen`) VALUES
(1, 'TK1', '1', 'TK1@gmail.com', '2023-05-24', 1, 'Admin'),
(2, 'TK2', '1', 'TK2@gmail.com', '2023-03-24', 1, 'User'),
(3, 'TK3', '1', 'TK3@gmail.com', '2020-03-24', 1, 'User'),
(4, 'TK4', '1', 'TK4@gmail.com', '2020-12-24', 1, 'User'),
(5, 'TK5', '1', 'TK5@gmail.com', '2020-12-24', 1, 'User'),
(6, 'TK6', '1', 'TK6@gmail.com', '2020-12-25', 1, 'User'),
(7, 'trungkien2543', 'c4ca4238a0b923820dcc509a6f75849b', 'ad@gmail.com', '2023-05-14', 1, 'User');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anhphu`
--
ALTER TABLE `anhphu`
  ADD PRIMARY KEY (`Ma`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`MaSP`,`MaDonHang`),
  ADD KEY `MaDonHang` (`MaDonHang`);

--
-- Chỉ mục cho bảng `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  ADD PRIMARY KEY (`MaSP`,`MaPhieu`),
  ADD KEY `MaPhieu` (`MaPhieu`);

--
-- Chỉ mục cho bảng `chitietquyen`
--
ALTER TABLE `chitietquyen`
  ADD PRIMARY KEY (`MaChiTiet`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDonHang`),
  ADD KEY `MaTaiKhoan` (`MaTaiKhoan`);

--
-- Chỉ mục cho bảng `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`MaHang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKhach`),
  ADD KEY `MaTaiKhoan` (`MaTaiKhoan`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKhuyenMai`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNhanVien`),
  ADD KEY `MaTaiKhoan` (`MaTaiKhoan`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MaQuyen`,`MaChiTiet`),
  ADD KEY `MaChiTiet` (`MaChiTiet`);

--
-- Chỉ mục cho bảng `phieunhaphang`
--
ALTER TABLE `phieunhaphang`
  ADD PRIMARY KEY (`MaPhieu`),
  ADD KEY `MaHang` (`MaHang`),
  ADD KEY `MaTaiKhoan` (`MaTaiKhoan`);

--
-- Chỉ mục cho bảng `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`MaQuyen`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaHang` (`MaHang`),
  ADD KEY `KhuyenMai` (`MaKhuyenMai`),
  ADD KEY `MaDM` (`MaDM`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTaiKhoan`),
  ADD KEY `Quyen` (`Quyen`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKhach` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `phieunhaphang`
--
ALTER TABLE `phieunhaphang`
  MODIFY `MaPhieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTaiKhoan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `anhphu`
--
ALTER TABLE `anhphu`
  ADD CONSTRAINT `anhphu_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `chitietdonhang_ibfk_3` FOREIGN KEY (`MaDonHang`) REFERENCES `donhang` (`MaDonHang`);

--
-- Các ràng buộc cho bảng `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  ADD CONSTRAINT `chitietphieunhap_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `chitietphieunhap_ibfk_3` FOREIGN KEY (`MaPhieu`) REFERENCES `phieunhaphang` (`MaPhieu`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `taikhoan` (`MaTaiKhoan`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `taikhoan` (`MaTaiKhoan`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `taikhoan` (`MaTaiKhoan`);

--
-- Các ràng buộc cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD CONSTRAINT `phanquyen_ibfk_1` FOREIGN KEY (`MaQuyen`) REFERENCES `quyen` (`MaQuyen`),
  ADD CONSTRAINT `phanquyen_ibfk_2` FOREIGN KEY (`MaChiTiet`) REFERENCES `chitietquyen` (`MaChiTiet`);

--
-- Các ràng buộc cho bảng `phieunhaphang`
--
ALTER TABLE `phieunhaphang`
  ADD CONSTRAINT `phieunhaphang_ibfk_1` FOREIGN KEY (`MaHang`) REFERENCES `hang` (`MaHang`),
  ADD CONSTRAINT `phieunhaphang_ibfk_2` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `taikhoan` (`MaTaiKhoan`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaHang`) REFERENCES `hang` (`MaHang`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaKhuyenMai`) REFERENCES `khuyenmai` (`MaKhuyenMai`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`MaDM`);

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`Quyen`) REFERENCES `quyen` (`MaQuyen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
