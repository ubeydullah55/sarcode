-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Oca 2025, 22:07:32
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
-- Veritabanı: `sarcode`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilezikler`
--

CREATE TABLE `bilezikler` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bas_gr` double NOT NULL,
  `bit_gr` double NOT NULL,
  `bas_gen` double NOT NULL,
  `bit_gen` double NOT NULL,
  `cnc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bilezikler`
--

INSERT INTO `bilezikler` (`id`, `name`, `bas_gr`, `bit_gr`, `bas_gen`, `bit_gen`, `cnc`) VALUES
(1, 'Tuğralı Fiyonk Model Kelepçe', 12, 14, 3, 3.6, '20mm 434 Zemin Lazer 15mm 5gr yer kalem 3.180-3.140'),
(2, 'Tuğralı Kelepçe', 13, 16, 2.5, 3.5, '15mm 384 Zemin Lazer 15mm 5gr yer kalem 2.120-2.190');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `id` int(11) NOT NULL,
  `bilezik_id` int(11) NOT NULL,
  `agirlik` double NOT NULL,
  `genislik` double NOT NULL,
  `tarih` datetime NOT NULL,
  `cnc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`id`, `bilezik_id`, `agirlik`, `genislik`, `tarih`, `cnc`) VALUES
(1, 1, 13.17, 3.2, '2025-01-12 17:07:47', '12mm 434 Zemin Lazer 15mm 5gr yer kalem 3.180-3.140');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `yetki` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `yetki`, `username`, `password`, `status`) VALUES
(1, 1, 'ubeydullah', '$2y$10$2Ekh/qvV5GVgYtrwvVv3PuNSqSlQIkKcI/Ake.bQw9ATKbt6HidSq', b'1'),
(2, 2, 'bafranazar', '$2y$10$2Ekh/qvV5GVgYtrwvVv3PuNSqSlQIkKcI/Ake.bQw9ATKbt6HidSq', b'1'),
(3, 2, 'görele', '$2y$10$2Ekh/qvV5GVgYtrwvVv3PuNSqSlQIkKcI/Ake.bQw9ATKbt6HidSq', b'1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bilezikler`
--
ALTER TABLE `bilezikler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bilezikler`
--
ALTER TABLE `bilezikler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
