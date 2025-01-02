-- phpMyAdmin SQL Dump
-- version 5.2.1-4.fc40
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 02 Jan 2025 pada 01.08
-- Versi server: 10.11.10-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crooked_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `about_text` text NOT NULL,
  `address` text NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `tiktok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id_about`, `about_text`, `address`, `phone_number`, `instagram`, `tiktok`) VALUES
(1, 'Crooked Indonesia will be identified as a \"chic\" brand, which is a distinctive style of fashion that has roots from {eccentric/bright/vivid} and modish cultures. By providing  à la mode fashion apparel for men and women, our valued costumers will always be at the heart of our business.', 'Lagoon Ville Block J05 no 08, Citra Raya, Cikupa', '0895405970445', 'crooked.ind', 'crooked.ind');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id_category`, `category_name`) VALUES
(1, 'Set'),
(2, 'Dress'),
(3, 'Outerwear'),
(4, 'Top'),
(5, 'Bottom');

-- --------------------------------------------------------

--
-- Struktur dari tabel `picture`
--

CREATE TABLE `picture` (
  `id_picture` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `picture`
--

INSERT INTO `picture` (`id_picture`, `id_product`, `picture`) VALUES
(1, 1, 'set_(3).jpg'),
(2, 1, 'set_(4).jpg'),
(3, 1, 'set_(2).jpg'),
(4, 2, 'oversize_(1).jpg'),
(5, 2, 'oversize_(2).jpg'),
(6, 2, 'oversize_(4).jpg'),
(10, 4, 'fur_jacket_(4).jpg'),
(11, 4, 'fur_jacket_(1).jpg'),
(12, 4, 'fur_jacket_(3).jpg'),
(13, 5, 'Cargo_(2).jpg'),
(14, 5, 'Cargo_(3).jpg'),
(15, 5, 'Cargo_(1).jpg'),
(19, 8, 'Hourglass_(2).jpg'),
(20, 8, 'BAM04732.jpg'),
(21, 8, 'Hourglass_(4).jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `id_category` int(11) NOT NULL,
  `price_sale` varchar(50) NOT NULL,
  `product_description` text NOT NULL,
  `product_picture` varchar(100) NOT NULL,
  `link_tokopedia` text NOT NULL,
  `link_shopee` text NOT NULL,
  `link_tiktok` text NOT NULL,
  `link_lazada` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id_product`, `product_name`, `product_price`, `id_category`, `price_sale`, `product_description`, `product_picture`, `link_tokopedia`, `link_shopee`, `link_tiktok`, `link_lazada`) VALUES
(1, 'Comfy One Set Knit', '389000', 1, '0', '<p></p><p class=\"\"></p><h4 class=\"\"></h4><h4 class=\"\" style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><p class=\"\"><h4 class=\"\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Comfy and Match to all condition</span></h4><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Materials : Mix Knitted</span></p><p class=\"\"><h5 class=\"\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">TERSEDIA 4 WARNA</span></h5><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Brown<br></span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Lilac <br></span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Pink<br></span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Green</span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\"><br></span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">\r\n</span><h5 class=\"\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">SIZE CHART</span></h5><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">• ATASAN<br></span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Panjang Belakang tubuh  65cm<br></span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Lingkar Bahu 114 cm<br></span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Lingkar Dada 136 cm<br></span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Lingkar Ketiak 56cm<br></span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Panjang Lengan (CB)  57cm</span><br></p><p class=\"\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">• BAWAHAN<br></span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Lingkar Pinggang  72cm<br></span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Lingkar Paha 86cm<br></span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Lingkar Bawah 62cm<br></span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Panjang Celana 106cm</span></p></h4>', 'set_(1).jpg', 'https://www.tokopedia.com/crookedindonesia/comfy-set-nude?extParam=whid%3D14294868', 'https://shopee.co.id/Comfy-One-Set-Knit-Crooked-Indonesia-i.863165100.18148053541?sp_atk=7b9e7f98-dd43-41de-98fb-7f663be207d2&xptdk=7b9e7f98-dd43-41de-98fb-7f663be207d2', 'https://www.tiktok.com/@crooked.ind', 'https://www.tiktok.com/@racun.crooked'),
(2, 'Comfy Oversize Shirt', '189000', 4, '0', '<p></p><h4 class=\"\"><p style=\"font-size: 16px;\"></p></h4><h4 class=\"\"><p style=\"font-size: 16px;\"></p></h4><h4 class=\"\"><h4 class=\"\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Elegant but still comfy</span></h4><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Materials : Velvet Suede\r\nMaterials Lilac Colour : Fur\r\nUNISEX</span></h4><h4 class=\"\" style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><h5 class=\"\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Tersedia 4 Warna</span></h5><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Brown\r\nBlue\r\nTeracotta\r\nPink</span></h4><h4 class=\"\" style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\"><br></span></h4><h4 class=\"\"><h5 class=\"\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">SIZE CHART</span></h5><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Panjang Kemeja  76cm\r\nLingkar Bahu 120 cm\r\nLingkar Dada 140 cm\r\nLingkar Ketiak  60 cm\r\nPanjang Lengan (CB) 46 cm</span><br></h4><h4 class=\"\"><p></p></h4><h4 class=\"\"><p></p></h4><p></p>', 'oversize_(3).jpg', 'https://www.tokopedia.com/crookedindonesia/comfy-oversize-shirt-teracotta?extParam=whid%3D14294868', 'https://shopee.co.id/Comfy-Oversize-Shirt-Crooked-Indonesia-i.863165100.19848056438?xptdk=47d0afeb-d021-4e12-b109-9969142e7989', 'https://www.tiktok.com/@crooked.ind', 'https://www.tiktok.com/@racun.crooked'),
(4, 'Timeless Fur Jacket', '189000', 3, '0', '<p><h4 class=\"\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Be Vogue and Comfy at the same time !</span></h4><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Materials : Faux Fur\r\nUnisex Jacket\r\n\r\n</span><h5 class=\"\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">SIZE CHART</span></h5><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Panjang Jaket 61 cm\r\nLingkar Bahu 106 cm\r\nLingkar Dada 120 cm\r\nLingkar Ketiak 54 cm\r\nPanjang Lengan (CB) 60 cm\r\n</span></p><div><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\"><br></span></div>', 'fur_jacket_(2).jpg', 'https://www.tokopedia.com/crookedindonesia/timeless-fur-jacket?extParam=whid%3D14294868', 'https://shopee.co.id/Timeless-Fur-Jacket-Crooked-Indonesia-i.863165100.19948058026?xptdk=591f4af1-628e-4622-be72-092759a8dce8', 'https://www.tiktok.com/@crooked.ind', 'https://www.tiktok.com/@racun.crooked'),
(5, 'Comfy Cargo Pants', '289000', 5, '0', '<p></p><p></p><h5 class=\"\" style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">Wear Comfy For All Condition</h5><h5 class=\"\" source=\"\" sans=\"\" pro\",=\"\" -apple-system,=\"\" blinkmacsystemfont,=\"\" \"segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" ui=\"\" symbol\";=\"\" color:=\"\" rgb(33,=\"\" 37,=\"\" 41);\"=\"\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Materials : Mix Knit\r\nUNISEX</span><p style=\"font-size: 16px;\"><h5 class=\"\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Tersedia 2 Warna</span></h5><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">BLUE \r\nWHITE </span></p><p style=\"font-size: 16px;\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">\r\n</span><h5 class=\"\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">SIZE CHART</span></h5><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Lingkar Pinggang  70 cm</span></p><p style=\"font-size: 16px;\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Lingkar Paha 80 cm</span></p><p style=\"font-size: 16px;\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Lingkar Bawah 26cm - 40 cm</span></p><p style=\"font-size: 16px;\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Panjang Celana 105 cm</span></p><p style=\"font-size: 16px;\"><br></p></h5><p></p><p></p><p></p>', 'Cargo_(4).jpg', 'https://www.tokopedia.com/crookedindonesia/comfy-cargo-pants-putih?extParam=whid%3D14294868', 'https://shopee.co.id/Comfy-Cargo-Pants-Crooked-Indonesia-i.863165100.12296600722?xptdk=7c88a881-bf24-4eca-a50e-28414490d9d8', 'https://www.tiktok.com/@crooked.ind', 'https://www.tiktok.com/@racun.crooked'),
(8, 'Comfy Hourglass Dress Knit', '249000', 2, '0', '<p style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\" class=\"\"><h4 class=\"\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Wear comfy all the time! </span></h4><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Materials : Mix Knit</span></p><p style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\" class=\"\"><h5 class=\"\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Tersedia 3 Warna</span></h5><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Brown<br></span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Maroon<br></span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Dark Navy</span></p><p style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\" class=\"\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\"><br></span><h5 class=\"\"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">SIZE CHART</span></h5><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Panjang Dress 132cm<br></span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Lingkar Bahu 80cm<br></span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Lingkar Dada 96cm<br></span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Lingkar Ketiak 42 cm<br></span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Panjang Lengab (CB) 57cm<br></span><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\">Saran BB 50-70Kg</span></p><h3 class=\"\" style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><p></p><p style=\"font-size: 16px;\"></p></h3><h3 class=\"\" style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><p></p></h3><div><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, ?????, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;?? Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, ?????, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;\"><br></span></div>', 'Hourglass_(1).jpg', 'https://www.tokopedia.com/crookedindonesia/comfy-hourglass-dress-knit-nude?extParam=whid%3D14294868', 'https://shopee.co.id/Comfy-Hourglass-Dress-Knit-Crooked-Indonesia-i.863165100.19048050228?xptdk=80017390-c04a-40c0-b679-1e169d369159', 'https://www.tiktok.com/@crooked.ind', 'https://www.tiktok.com/@racun.crooked');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `username`, `password`) VALUES
(1, 'Crooked Admin', 'crooked', '$2y$12$0xpbx7jiJ.zHmQ12H6j.UeBN3hXgWHhK3SN9ZQHbKBfHOJlTKJzIO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id_picture`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `picture`
--
ALTER TABLE `picture`
  MODIFY `id_picture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
