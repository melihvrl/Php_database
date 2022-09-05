-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 05 Eyl 2022, 12:34:43
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hw2`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `kullaniciadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `information`
--

INSERT INTO `information` (`id`, `kullaniciadi`, `soyadi`) VALUES
(1, 'Melih', 'Varol'),
(2, 'Furkan', 'Bakan'),
(3, 'Demiralp', 'Demir'),
(6, 'Hasan', 'Oğuz'),
(7, 'Şendoğan', 'Keskin'),
(8, 'Batuhan', 'Yılmaz'),
(20, 'Elif', 'Uzun');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
