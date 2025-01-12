-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Oca 2025, 15:08:18
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sarsiparis`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bolgeler`
--

CREATE TABLE `bolgeler` (
  `bolge_id` int(11) NOT NULL,
  `bolge_ad` varchar(255) NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bolgeler`
--

INSERT INTO `bolgeler` (`bolge_id`, `bolge_ad`, `status`) VALUES
(1, 'Samsun', b'1'),
(2, 'Tokat', b'1'),
(3, 'Ordu', b'1'),
(4, 'Trabzon', b'1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `firmalar`
--

CREATE TABLE `firmalar` (
  `firma_id` int(11) NOT NULL,
  `bolge_id` int(11) NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'1',
  `firma_ad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `firmalar`
--

INSERT INTO `firmalar` (`firma_id`, `bolge_id`, `status`, `firma_ad`) VALUES
(1, 1, b'1', 'NAZAR KUYUMCU'),
(2, 1, b'1', 'GÜNEŞ KUYUMCU'),
(3, 2, b'1', 'ZİLE SARAY KUYUMCU'),
(4, 3, b'1', 'ÜNYE MEYDAN KUYUMCU'),
(5, 4, b'1', 'GÖRELE KUYUMCULUK');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `siparis_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `history` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`siparis_id`, `company_id`, `user_id`, `comment`, `history`, `status`) VALUES
(11, 1, 1, 'ahmet abi çok yakışıklı ondan', '2025-01-01 13:22:31', 2),
(12, 2, 1, '', '2025-01-01 13:22:47', 1),
(13, 1, 1, '', '2025-01-01 15:02:50', 1),
(14, 1, 1, 'rahim çok yakışıklı', '2025-01-01 15:22:14', 1),
(15, 1, 55, 'euro 50 lik olcak', '2025-01-02 05:56:43', 0),
(16, 1, 55, 'gfhcvbc', '2025-01-02 06:06:12', 0),
(17, 2, 1, 'rqwrqw', '2025-01-02 06:07:28', 2),
(18, 1, 1, 'hhhhhh', '2025-01-02 06:12:35', 2),
(19, 1, 1, 'sebeb', '2025-01-02 14:10:26', 2),
(20, 1, 1, 'fasf', '2025-01-03 05:48:04', 0),
(21, 1, 1, 'ghfdhdfhd', '2025-01-03 11:21:48', 0),
(22, 2, 1, 'deneme', '2025-01-04 09:42:03', 1),
(23, 1, 1, 'fg', '2025-01-04 13:16:53', 1),
(24, 1, 1, '', '2025-01-04 13:28:04', 1),
(25, 1, 1, 'asda', '2025-01-06 06:10:17', 1),
(26, 1, 1, 'asd', '2025-01-06 06:18:03', 1),
(27, 2, 1, 'ubeyd deneme güneş', '2025-01-06 06:18:56', 1),
(28, 1, 1, 'nazar deneme sessiıon', '2025-01-06 06:19:33', 1),
(29, 3, 1, 'fdfdf', '2025-01-06 10:02:34', 2),
(30, 4, 1, 'denemem', '2025-01-06 10:04:03', 2),
(31, 3, 1, 'fasf', '2025-01-06 10:20:32', 1),
(32, 4, 1, 'asdad', '2025-01-06 10:32:53', 0),
(33, 3, 1, 'çeyrekler eskii olcak', '2025-01-06 11:01:58', 1),
(34, 1, 1, 'çok geç oldu', '2025-01-11 08:56:52', 2),
(35, 3, 1, 'denemek için sildiö', '2025-01-08 13:35:52', 2),
(36, 3, 1, 'eski', '2025-01-08 14:36:11', 1),
(37, 5, 1, 'yeniden yapıcam', '2025-01-08 14:58:02', 2),
(38, 5, 1, 'eski olcak', '2025-01-08 14:58:35', 1),
(39, 1, 1, 'asd', '2025-01-09 15:09:43', 2),
(40, 5, 1, 'asdfgd', '2025-01-09 15:10:01', 1),
(41, 5, 1, 'asf', '2025-01-10 07:13:53', 2),
(42, 4, 1, 'sdfs', '2025-01-10 07:14:18', 1),
(43, 5, 1, 'malım yok', '2025-01-11 08:55:59', 2),
(44, 5, 1, 'sipariş  2', '2025-01-11 07:56:46', 1),
(45, 5, 3, 'döviz elimizde yok', '2025-01-11 08:50:41', 2),
(46, 5, 3, 'fsdfdg', '2025-01-11 10:56:41', 0),
(47, 1, 1, 'asd', '2025-01-11 16:02:20', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_detay`
--

CREATE TABLE `siparis_detay` (
  `siparis_detay_id` int(11) NOT NULL,
  `siparis_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis_detay`
--

INSERT INTO `siparis_detay` (`siparis_detay_id`, `siparis_id`, `product_id`, `amount`) VALUES
(11, 11, 5, 7),
(12, 11, 6, 5),
(13, 11, 9, 400),
(14, 12, 3, 2),
(15, 12, 4, 5),
(16, 12, 7, 4),
(17, 13, 7, 5),
(18, 13, 9, 5),
(19, 13, 6, 2),
(20, 13, 10, 3),
(21, 13, 9, 2000),
(22, 14, 4, 3),
(23, 14, 7, 3),
(24, 15, 4, 4),
(25, 15, 10, 3),
(26, 15, 9, 5000),
(27, 16, 3, 2),
(28, 17, 6, 4),
(29, 17, 9, 4),
(30, 17, 9, 2),
(31, 18, 4, 7),
(32, 18, 6, 4),
(33, 18, 10, 5000),
(34, 19, 1, 4),
(35, 19, 3, 3),
(36, 19, 7, 3),
(37, 20, 2, 7),
(38, 20, 9, 4000),
(39, 20, 10, 2000),
(40, 21, 3, 3),
(41, 21, 6, 4),
(42, 21, 10, 4500),
(43, 22, 1, 100),
(44, 22, 2, 10),
(45, 23, 2, 3),
(46, 23, 6, 4),
(47, 23, 9, 4),
(48, 24, 3, 1),
(49, 24, 6, 3),
(50, 25, 6, 3),
(51, 25, 8, 1),
(52, 26, 3, 2),
(53, 26, 5, 3),
(54, 27, 2, 6),
(55, 27, 10, 500),
(56, 28, 4, 5),
(57, 28, 10, 4500),
(58, 29, 5, 3),
(59, 30, 5, 4),
(60, 30, 3, 2),
(61, 30, 9, 2000),
(62, 31, 10, 6000),
(63, 32, 1, 23),
(64, 33, 3, 4),
(65, 33, 7, 4),
(66, 33, 6, 3),
(67, 34, 2, 20),
(68, 34, 9, 4000),
(69, 35, 3, 1),
(70, 36, 7, 55),
(71, 37, 8, 23),
(72, 38, 8, 43),
(73, 39, 3, 2),
(74, 39, 8, 6),
(75, 39, 9, 300),
(76, 40, 2, 61),
(77, 40, 6, 52),
(78, 41, 3, 2),
(79, 42, 2, 43),
(80, 43, 4, 4),
(81, 43, 7, 6),
(82, 43, 8, 4),
(83, 44, 4, 43),
(84, 44, 1, 20),
(85, 45, 10, 500),
(86, 46, 6, 2),
(87, 47, 1, 55);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `urun_ad` varchar(255) NOT NULL,
  `total` double NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'1',
  `tur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_ad`, `total`, `status`, `tur`) VALUES
(1, '1 gram 24-A', 1, b'1', 1),
(2, '5 gram', 5, b'1', 1),
(3, '10 gram', 10, b'1', 1),
(4, '20 gram', 20, b'1', 1),
(5, '50 gram', 50, b'1', 1),
(6, '100 gram', 100, b'1', 1),
(7, 'Çeyrek Altın', 1.75, b'1', 2),
(8, 'Reşat Çeyrek', 1.8, b'1', 2),
(9, 'Dolar', 0, b'1', 3),
(10, 'Euro', 0, b'1', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `yetki` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'1',
  `fullname` varchar(255) NOT NULL,
  `firma_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `yetki`, `username`, `password`, `status`, `fullname`, `firma_id`) VALUES
(1, 1, 'ubeydullah', '$2y$10$2Ekh/qvV5GVgYtrwvVv3PuNSqSlQIkKcI/Ake.bQw9ATKbt6HidSq', b'1', 'ubeydullah doğan', 0),
(2, 2, 'bafranazar', '$2y$10$2Ekh/qvV5GVgYtrwvVv3PuNSqSlQIkKcI/Ake.bQw9ATKbt6HidSq', b'1', 'Bafra Nazar', 1),
(3, 2, 'görele', '$2y$10$2Ekh/qvV5GVgYtrwvVv3PuNSqSlQIkKcI/Ake.bQw9ATKbt6HidSq', b'1', 'görele kuyumculuk', 5);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bolgeler`
--
ALTER TABLE `bolgeler`
  ADD PRIMARY KEY (`bolge_id`);

--
-- Tablo için indeksler `firmalar`
--
ALTER TABLE `firmalar`
  ADD PRIMARY KEY (`firma_id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`siparis_id`);

--
-- Tablo için indeksler `siparis_detay`
--
ALTER TABLE `siparis_detay`
  ADD PRIMARY KEY (`siparis_detay_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bolgeler`
--
ALTER TABLE `bolgeler`
  MODIFY `bolge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `firmalar`
--
ALTER TABLE `firmalar`
  MODIFY `firma_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `siparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Tablo için AUTO_INCREMENT değeri `siparis_detay`
--
ALTER TABLE `siparis_detay`
  MODIFY `siparis_detay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
