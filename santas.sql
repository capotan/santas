-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Eki 2013, 20:20:07
-- Sunucu sürümü: 5.5.32
-- PHP Sürümü: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `santas`
--
CREATE DATABASE IF NOT EXISTS `santas` DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci;
USE `santas`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogr_elemanlari`
--

CREATE TABLE IF NOT EXISTS `ogr_elemanlari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `bilgi` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `resim2` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=9 ;

--
-- Tablo döküm verisi `ogr_elemanlari`
--

INSERT INTO `ogr_elemanlari` (`id`, `isim`, `bilgi`, `resim`, `mail`, `resim2`) VALUES
(1, 'Prof.Dr. Hasan Hüseyin Erkaya ', 'BS: Istanbul Technical University, TR (1981) \r\nMS: Arizona State University, USA (1984) \r\nPhD: Arizona State University, USA (1988) \r\nInterests: Semiconductors, Electronic Circuits ', 'resim/hhe.png', 'hherkaya@ogu.edu.tr', 'resim/hhe_s.png'),
(2, 'aas', 'mjhfhgc', 'resim/hhe.png', 'gdjmfdjgfd', 'resim/hhe_s.png'),
(3, 'bbb', 'jhfgvghcfhj', 'resim/hhe.png', 'hhhgcfh', 'resim/hhe_s.png'),
(4, 'aas', 'mjhfhgc', 'resim/hhe.png', 'gdjmfdjgfd', 'resim/hhe_s.png'),
(5, 'bbb', 'jhfgvghcfhj', 'resim/hhe.png', 'hhhgcfh', 'resim/hhe_s.png'),
(6, 'bbb', 'jhfgvghcfhj', 'resim/hhe.png', 'hhhgcfh', 'resim/hhe_s.png'),
(7, 'bbb', 'jhfgvghcfhj', 'resim/hhe.png', 'hhhgcfh', 'resim/hhe_s.png'),
(8, 'bbb', 'jhfgvghcfhj', 'resim/hhe.png', 'hhhgcfh', 'resim/hhe_s.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ynt_admin`
--

CREATE TABLE IF NOT EXISTS `ynt_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `ynt_admin`
--

INSERT INTO `ynt_admin` (`id`, `kullanici`, `sifre`) VALUES
(1, 'afakan', 'afakan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
