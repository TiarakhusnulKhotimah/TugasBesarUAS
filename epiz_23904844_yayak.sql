-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql211.byetcluster.com
-- Generation Time: May 14, 2019 at 01:15 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_23904844_yayak`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namamasakan` varchar(200) NOT NULL,
  `bahan` text NOT NULL,
  `langkah` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `namamasakan`, `bahan`, `langkah`, `waktu`) VALUES
(31, 'Sambal Manis Tempoyak', 'a). 3 buah bawang merah, iris\r\n\r\nb). 5 sdm tempoyak durian\r\n\r\nc). Secukupnya gula\r\nSecukupnya garam\r\n\r\nDihaluskan:\r\na). 2 siung bawang putih\r\n\r\nb). 150 gram cabe merah\r\n', '1. 10 menit Goreng bawang merah hingga hilang bau langunya\r\n2. Masukkan bahan yang dihaluskan, tumis hingga agak mengering.\r\n3. Tambahkan tempoyak, gula dan garam.\r\n\r\n\r\n  \r\nMasak hingga mengental. Angkat.\r\n\r\n\r\n  ', '2019-03-05 17:31:43'),
(32, 'Gandus', 'a). Tepung beras\r\nSantan\r\n\r\nb). Garam\r\n\r\nc). Cabe merah dipotong kecil\r\n\r\nd). Abon sapi\r\n\r\ne). Daun sop/seledri dipotong\r\n', '1. Panaskan santan dan beri garam aduk sampai mendidih\r\n2. Ambil wadah isi dengan tepung beras lalu siram dengan santan tadi\r\n3. Aduk terus setalah itu ambil cetakan bentuk apapun lalu isi sampai penuh dan setelah itu dikukus sampai matang\r\n4. Setelah gandus matang angkat lalu pisahkan dari cetakan\r\n5. Lalu setelah gandus dingin beri toping diatasnya daun seledri lalu abon sapi dan terakhir cabe merah kecil agar mempercantik\r\n6. Siap disantap', '2019-03-05 17:55:30'),
(33, 'Pindang Ikan Patin', '* 500 gram ikan patin\r\n* 500 ml air\r\n\r\nHaluskan\r\n\r\n* 6 butir bawang merah\r\n* 4 siung bawang putih\r\n* 4 buah cabai merah besar\r\n\r\n* 4 cm lengkuas, iris tipis\r\n* 2 cm kunyit, iris tipis\r\n* 3 cm jahe, iris tipis\r\n* 2 batang serai, memarkan\r\n* 10 buah cabai rawit, biarkan utuh\r\n* 3 buah tomat hijau, belah empat\r\n* 1 mata asam jawa\r\n* 2 lembar daun salam\r\n* 1 sdm kecap manis\r\n* 1 Â½ sdt garam\r\n* 1 sdt gula merah, iris', ' 1. cuci ikan patin, lalu potong menjadi 5 bagian. Sisihkan.\r\n2. rebus air bersama bumbu halus, lengkuas, kunyit, jahe, dan serai sampai mendidih.\r\n3. masukkan ikan patin dan bumbu lainnya, masak di atas api kecil sampai ikan matang dan bumbu meresap. Angkat, sajikan dengan nasi hangat.', '2019-03-06 00:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usia` int(50) NOT NULL,
  `nim` int(50) NOT NULL,
  `jurusan` text NOT NULL,
  `biografi` text NOT NULL,
  `gender` text NOT NULL,
  `website` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `usia`, `nim`, `jurusan`, `biografi`, `gender`, `website`, `email`, `level`) VALUES
(45, 'nn', 'nn', 0, 0, '', '', '', '', '', ''),
(46, '', '', 0, 0, '', '', '', '', '', ''),
(47, '', '', 0, 0, '', '', '', '', '', ''),
(48, 'aa', 'aa', 11, 11, 'Sistem Informasi', 'aaaaaaa', 'Perempuan', 'www.a.com', 'nady@gmail.com', 'admin'),
(49, 'mm', '', 0, 0, '', '', '', '', '', ''),
(50, '', '', 0, 0, '', '', '', '', '', ''),
(51, 'nn', 'nn', 0, 0, '', '', '', '', '', ''),
(52, 'jj', 'jj', 0, 0, '', '', '', '', '', ''),
(53, '', '', 0, 0, '', '', '', '', '', ''),
(54, '', '', 0, 0, '', '', '', '', '', ''),
(55, 'ss', 'ss', 2, 2, 'Sistem Informasi', '222222', 'Perempuan', '66', 'nady@gmail.com', 'manager'),
(56, '', '', 0, 0, '', '', '', '', '', ''),
(57, 'www', 'eee', 12, 2147483647, '', 'dfvff', 'Perempuan', 'https://jhdjshjdbj', 'tiara@gmail.com', 'admin'),
(58, 'tiara', 'ddd', 12, 2147483647, 'Sistem Komputer', 'ddddd', 'Perempuan', 'https://jhdjshjdbj', 'tiara@gmail.com', 'admin'),
(59, 'haha', 'sadf', 14, 2147483647, 'Sistem Komputer', 'amndjdjkjridjr', 'Perempuan', 'https://jhdjshjdbj', 'tiara@gmail.com', 'admin'),
(60, 'tiara', 'wewe', 14, 2147483647, 'Sistem Komputer', 'nbsdknhdfjiehfui', 'Perempuan', 'https://jhdjshjdbj', 'tiara@gmail.com', 'admin'),
(61, 'tiara', 'wewe', 14, 2147483647, 'Sistem Komputer', 'nbsdknhdfjiehfui', 'Perempuan', 'https://jhdjshjdbj', 'tiara@gmail.com', 'admin'),
(62, 'tiara', 'wewe', 14, 2147483647, 'Sistem Komputer', 'nbsdknhdfjiehfui', 'Perempuan', 'https://jhdjshjdbj', 'tiara@gmail.com', 'admin'),
(63, 'Tiara Khusnul Khotimah', 'yayak12', 19, 2147483647, 'Sistem Informasi', 'haiiii', 'Perempuan', 'https://jhdjshjdbj', 'tiara@gmail.com', 'manager'),
(64, 'M Fikri', '22222', 19, 2147483647, 'Sistem Komputer', 'aaaaaaaaa', 'Perempuan', 'www.google', 'shahnazkhairunnisa2@gmail.com', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
