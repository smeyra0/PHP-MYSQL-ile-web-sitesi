-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 08 May 2023, 18:54:12
-- Sunucu sürümü: 10.3.38-MariaDB-cll-lve
-- PHP Sürümü: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `u9927074_itp`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurslar`
--

CREATE TABLE `kurslar` (
  `ders_id` int(11) NOT NULL,
  `ders_adi` text NOT NULL,
  `t` int(11) NOT NULL,
  `u` int(11) NOT NULL,
  `zorunlu` int(11) NOT NULL,
  `yariyil` int(11) NOT NULL,
  `secilebilir` int(11) NOT NULL DEFAULT 1,
  `aciklama` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin5 COLLATE=latin5_turkish_ci;

--
-- Tablo döküm verisi `kurslar`
--

INSERT INTO `kurslar` (`ders_id`, `ders_adi`, `t`, `u`, `zorunlu`, `yariyil`, `secilebilir`, `aciklama`) VALUES
(1, 'Eğitim Bilimine Giriş', 5, 0, 1, 1, 0, ''),
(2, 'Eğitim Psikolojisi', 2, 2, 1, 1, 0, ''),
(3, 'Öğretim İlke ve Yöntemleri', 3, 1, 1, 1, 0, ''),
(4, 'Eğitimde Ölçme ve Değerlendirme', 3, 0, 1, 1, 0, ''),
(5, 'Eğitimde Program Geliştirme', 1, 0, 0, 1, 0, '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kurslar`
--
ALTER TABLE `kurslar`
  ADD PRIMARY KEY (`ders_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kurslar`
--
ALTER TABLE `kurslar`
  MODIFY `ders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
